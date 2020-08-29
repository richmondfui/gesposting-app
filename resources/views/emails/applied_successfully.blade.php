@component('mail::message')
# Application For Posting Feedback

Congratulations! {{ $applicant->title." ".$applicant->firstname." ".$applicant->lastname }},
you have successfully applied for posting as a teacher into the Ghana Education Service.
Click the button below to check you posting status.

@component('mail::button', ['url' => url("/posting/check_status/?code=$applicant->code")])
Check Status
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
