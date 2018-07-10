@component('mail::message')
# Introduction

Thanks for applying fro membership of Society of radiography Uganda, Your membership is pending.<br>
Your registration ID is {{ $id }} <br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
