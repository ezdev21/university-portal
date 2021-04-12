@component('mail::message')
# Laravel

The body of your message.

@component('student reset password', ['url' => route('student.password.reset',$this->token)])
Reset Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
