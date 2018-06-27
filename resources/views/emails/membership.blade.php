@component('mail::message')
# Introduction

You have a membership appllication.

@component('mail::button', ['url' => config('app.url').'/admin'])
Check it
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
