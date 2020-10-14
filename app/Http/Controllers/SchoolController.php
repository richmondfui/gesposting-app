<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\AppointmentLetter;
use App\District;
use App\Http\Requests\UpdateSchoolRequest;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SchoolController extends Controller
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

        return view('backend.schools.index', compact('schools', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = auth()->user()->district;

        return view('backend.schools.create', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->schools()->create($request->all());

        return redirect()->route('admin.district.schools.index')->withStatus('School created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        abort_if($school->user_id != auth()->id(), 403);

        $teachers = auth()->user()->district->teachers;
        $teachers = $teachers->where('school_id', '=', null);
        $district = auth()->user()->district;

        return view('backend.schools.edit', compact('school', 'district', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->name = $request->name;
        $school->user_id = auth()->id();
        $school->district_id = $request->district_id;
        $school->headteacher = $request->headteacher;
        $school->location = $request->location;
        $school->update();

        return redirect()->route('admin.district.schools.index')->withStatus('School updated successfully');
    }


    public function addTeacherToSchool(Request $request)
    {
        if ($request->has('selected_teacher') && $request->has('school_id')) {

            $sid    = env('TWILIO_SID');
            $token  = env('TWILIO_TOKEN');
            $client = new Client($sid, $token);

            foreach ($request->selected_teacher as $id) {
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
        }


        return redirect()->route('admin.district.schools.index')->withStatus('Teacher added to school successfully.');
    }

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
        $carbCopy = "The Headmaster/Headteacher, ".$teacher->school->name;

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
        // dd($appointmentLetter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        abort_if($school->user_id != auth()->id(), 403);

        $school->delete();

        return redirect()->route('admin.district.schools.index')->withStatus('School deleted successfully');
    }
}
