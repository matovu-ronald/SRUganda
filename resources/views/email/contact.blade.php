@component('mail::message')
# Contact from website

{{ $info['message'] }}


From,<br>
{{ $info['name'] }}, {{ $info['email'] }} <br>
{{ $info['phone'] }} <br>
{{ config('app.name') }}
@endcomponent
