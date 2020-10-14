<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Http\Requests\ApplicantRequest;
use App\Mail\AppliedSuccessfully;
use App\Region;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postingPage()
    {
        return view('posting');
    }

    /**
     * Show the form for creating a new applicant.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerApplicant()
    {
        $regions = Region::all();

        return view('posting_register', compact('regions'));
    }

    /**
     * Store a newly created applicant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeApplicant(ApplicantRequest $request, Applicant $applicant)
    {
        // Validate applicant details before saving
        $data = $request->validated();

        // Generate unique code for applicant and add to validated inputs
        $code = random_bytes(5);
        $data['code'] = bin2hex($code);

        // Save to database
        $applicant = $applicant->create($data);

        // Fire off an email to the new applicant
        Mail::to($applicant->email)
            ->send(new AppliedSuccessfully($applicant));

        // Redirect with a status message to applicant in the browser
        return redirect()->route('posting.register.message')
            ->with('status', 'Congratulations!, you have successfully applied for posting into the GES. Use this code: <b>' .
                $applicant->code . '</b> to check your posting status. We\'ve sent you an email with applicant details. Thank you.');
    }

    /**
     * Response message after storing a new applicant
     *
     * @return Illuminate\Http\Response
     *
     */
    public function storeMessage()
    {
        return view('posting_message');
    }

    /**
     * Check an applicant's posting status
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     *
     */
    public function postingCheck(Request $request)
    {
        $applicant = Applicant::where('code', $request->code)->first();

        if (isset($applicant)) {
            if ($applicant->status == 'posted') {
                $teacher = Teacher::where('staff_id', $applicant->staff_id)->first();

                $message = "Congratulations! $applicant->title $applicant->firstname, you have been successfully posted
                to the " . $teacher->district->name . ". An email with your appointment letter has been sent to your mail
                account. Do visit the district Directorate for further engagements. Thank you.";

                return redirect()->route('posting.check_status.message')
                    ->with('status', $message);
            } else {

                return redirect()->route('posting.check_status.message')
                    ->with('status', 'Sorry, you have not been posted yet. Kindly check again later. Thank you.');
            }
        } else {

            return redirect()->back()->withStatus('Sorry, invalid applicant code entered.');
        }
    }

    /**
     * Response message checking status
     *
     * @return Illuminate\Http\Response
     *
     */
    public function postingChecked()
    {
        return view('posting_status');
    }


    public function transferForm()
    {
        return view('posting_register');
    }
}
