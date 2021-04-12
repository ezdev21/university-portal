@component('mail::message')
# Introduction

The body of your message.

@component('Teacher password Reset', ['url' => route('teacher.password.reset',$this->token)])
Reset Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
