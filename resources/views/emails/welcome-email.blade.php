@component('mail::message')
# Introduction

This is a instagram clone.

@component('mail::button', ['url' => 'http://google.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
