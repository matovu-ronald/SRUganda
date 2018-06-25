@component('mail::message')
# Thanks for contacting us

Our team will get back to you as soon as possible.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/contact-us'])
See more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
