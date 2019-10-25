@component('mail::message')
# Introduction

Email : {{ $email }} had just subscribed!



Thanks,<br>
{{ config('app.name') }}
@endcomponent
