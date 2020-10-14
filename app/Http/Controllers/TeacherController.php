<?php

namespace App\Http\Controllers;

use App\AppointmentLetter;
use App\District;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;
use PDF;
use Twilio\Rest\Client;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = auth()->user()->schools;
        $teachers = auth()->user()->district->teachers;
        $actTeachers = $teachers->where('school_id', '!=', null);
        $inactTeachers = $teachers->where('school_id', '=', null);

        return view('backend.teachers.index', compact('schools', 'teachers', 'actTeachers', 'inactTeachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = auth()->user()->district;

        return view('backend.teachers.create', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "here";
        // dd($request->all());
        auth()->user()->teachers()->create($request->all());

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('backend.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $district = auth()->user()->district;

        return view('backend.teachers.edit', compact('teacher', 'district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        dd('here');
        $teacher->name = $request->name;
        $teacher->user_id = auth()->id();
        $teacher->district_id = $request->district_id;
        $teacher->location = $request->location;

        if($request->has('school_id') && is_null($teacher->school_id)) {
            $teacher->school_id = $request->school_id;
        }

        $teacher->update();

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher deleted successfully');
    }


    /**
     * Start posting new college applicants
     *
     * @return \Illuminate\Http\Response
     */
    public function startPostingTeacher()
    {
        $schools = auth()->user()->schools;
        $district = auth()->user()->district;
        $actTeachers = Teacher::where('district_id', $district->id)->where('school_id', '!=', null)->get();
        $inactTeachers = Teacher::where('district_id', $district->id)->where('school_id', '=', null)->get();

        return view('backend.teachers.teacher_postings', compact('schools', 'actTeachers', 'inactTeachers'));
    }

    /**
     * Start posting teachers  to their respective schools
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function completePostingTeacher(Request $request)
    {
            $sid    = env('TWILIO_SID');
            $token  = env('TWILIO_TOKEN');
            $client = new Client($sid, $token);

        if (!is_null($request->selected_teachers)) {

            $school = School::find($request->school_id);
            $selectedTeacherIds = $request->selected_teachers;
            $totTeachers = count($selectedTeacherIds);


            foreach ($request->selected_teachers as $id) {
                // Retrieve teacher
                $teacher = Teacher::find($id);
                // Update teacher's school id
                $teacher->update(['school_id' => $request->school_id]);

                // Save an appointment letter
                $this->generateAppointmentLetter($teacher);

                $fullName =  $teacher->title.' '.$teacher->firstname.' '.$teacher->lastname;
                $message = "Hello! ".$fullName.", you have been posted to the " .
                $teacher->school->name ." in the ".$teacher->district->name ." as your Management Unit.
                Thank you.";

                // $client->messages->create(
                //     env('TWILIO_TO'),
                //     [
                //         'from' => env('TWILIO_FROM'),
                //         'body' => $message,
                //     ]
                // );
            }

        } else {
            return redirect()->back();
        }

        return redirect()
            ->route('admin.district.teachers.start_posting')
            ->withStatus($totTeachers . ' selected teacher(s) posted successfully to the ' . $school->name . '.');
    }

    /**
     * Gberate an appointment letter for a teacher
     *
     * @param object $teacher
     * @return void
     *
     * */
    public function generateAppointmentLetter($teacher)
    {
        $p1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptas hic commodi
         Debitis doloribus autem modi eligendi unde nam enim minima pariatur sapiente obcaecati odio <br><br>";

        $p2 = "cupiditate nemo numquam est voluptas, quibusdam a laudantium? Hic deserunt blanditiis voluptatum
        eius ex sit totam incidunt neque placeat nobis dignissimos debitis molestiae temporibus repellendus,
         veritatis quasi! Nesciunt sint reprehenderit corrupti accusantium ut
        dolores. Fuga quasi, dignissimos labore corrupti repudiandae dolores ad, possimus maxime blanditiis
         minima provident dolore a at amet illum soluta.<br><br>";

        $p3 = "Est natus quibusdam hic quasi repellat in molestias deserunt, fugiat praesentium? Distinctio,
        earum mollitia? Sunt ipsa accusantium obcaecati quibusdam fuga beatae nobis veniam exercitationem officiis
         laudantium iste, necessitatibus a error voluptatibus,";

        $letterBody = $p1.$p2.$p3;
        $carbCopy = "The Headmaster/Headteacher,<br> ".$teacher->school->name;

        $appointmentLetter = new AppointmentLetter;
        $appointmentLetter->teacher_id = $teacher->id;
        $appointmentLetter->letter_head = "POSTING OF NEWLY TRAINED TEACHERS 2014/2015 ACADEMIC YEAR";
        $appointmentLetter->letter_body = $letterBody;
        $appointmentLetter->cc = $carbCopy;
        $appointmentLetter->district_name = $teacher->district->name;
        $appointmentLetter->district_director = $teacher->district->director;
        $appointmentLetter->district_address = $teacher->district->address;
        $appointmentLetter->district_phone = $teacher->district->phone;
        $appointmentLetter->district_email = $teacher->district->email;
        $appointmentLetter->district_ref = $teacher->district->ref;
        $appointmentLetter->college_attended = $teacher->college_attended;
        $appointmentLetter->college_location = $teacher->college_location;
        $appointmentLetter->school = $teacher->school->name;
        $appointmentLetter->date_posted = $teacher->created_at;

        $appointmentLetter->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAppointmentLetter($id)
    {
        $teacher = Teacher::find($id);
        $appointmentLetter = AppointmentLetter::find($id);

        return view('backend.teachers.appointment_letter', compact('teacher', 'appointmentLetter'));
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function downloadAppointmentLetter($id)
    // {
    //     $teacher = Teacher::find($id);
    //     $appointmentLetter = AppointmentLetter::find($id);

    //     $pdf = PDF::loadView('backend.teachers.appointment_letter', compact('teacher', 'appointmentLetter'));

    //     return $pdf->download('appointment-letter.pdf');
    // }

}
