<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\District;
use App\Notifications\ApplicantPostedSuccessfully;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Twilio\Rest\Client;

class PostingApplicantController extends Controller
{
    /**
     * View all applicants who need to be posted to teach
     */
    public function postingApplicant()
    {
        $applicants = Applicant::all();
        $districts = District::all();

        return view('backend.posting_applicants.index', compact('applicants', 'districts'));
    }

    /**
     * Start posting new college applicants
     */
    public function startPostingApplicant()
    {
        $districts = District::all();
        $schools = School::all();
        $teachers = Teacher::all();
        $applicants = Applicant::all();

        return view('backend.posting_applicants.start_posting', compact('applicants', 'districts', 'schools', 'teachers'));
    }

    /**
     * Start posting new college applicants
     */
    public function postApplicants(District $district)
    {
        // dd($district->schools);
        $schools = School::all();
        $teachers = Teacher::all();
        $applicants = Applicant::where('status', 'pending')->get();

        return view('backend.posting_applicants.post_applicants', compact('district', 'applicants', 'schools', 'teachers'));
    }

    /**
     * Start posting new college applicants
     */
    public function postApplicantsStore(Request $request)
    {

        if (!is_null($request->selected_applicant)) {

            $district = District::find($request->district_id);
            $selectedApplicantIds = $request->selected_applicant;
            $totApplicants = count($selectedApplicantIds);

          $this->postAndNotify($selectedApplicantIds, $district);

        } else {
            return redirect()->back();
        }


        return redirect()
            ->route('admin.posting.start_posting')
            ->withStatus($totApplicants.' selected applicant(s) posted successfully to the '.$district->name.'.');
    }

    /**
     * Initiate posting process
     *
     * @param array $selectedApplicantIds
     * @param object $district
     * @return void
     */
    public function postAndNotify(array $selectedApplicantIds, $district)
    {
        // Your Account SID and Auth Token from twilio.com/console
       $sid    = env('TWILIO_SID');
       $token  = env('TWILIO_TOKEN');
       $client = new Client($sid, $token);

        foreach ($selectedApplicantIds as $id) {

            // Retrieve applicant
            $applicant = Applicant::find($id);

            // Add applicant to a district and create a new teacher from applicant details
            $district->teachers()->create($applicant->toArray());

            // Update applicant's status to posted
            $applicant->update(['status' => 'posted']);

            // If applicant's status is posted
            if ($applicant->status == 'posted') {

                $fullName =  $applicant->title.' '.$applicant->firstname.' '.$applicant->lastname;
                $message = "Congratulations! ".$fullName.", you have been successfully posted to the " .
                $district->name .". An email with your appointment letter has been sent to your mail account.
                Do visit the district Directorate for further engagements. Thank you.";

                // $message = "Congratulations!, you have been successfully posted to the " . $district->name .
                // ". Attached is a copy of your appointment letter. Do visit the district Directorate for further engagements.
                //     Thank you.";

                // Notify applicant of his/her posting status
                // Notification::route('mail', $applicant->email)
                //     ->notify(new ApplicantPostedSuccessfully($message, $fullName));

                $client->messages->create(
                    "+233242773756",
                    [
                        'from' => env('TWILIO_FROM'),
                        'body' => $message,
                    ]
                );
            }
        }
    }

    public function postingApplicantDestroy()
    {
        return "Destroy applicant";
    }

    public function transfer()
    {
        // return view('backend.dashboard');
    }
}
