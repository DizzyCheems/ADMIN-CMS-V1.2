@component('mail::message')
# Yo Zapp Tentacit Here...

Join now and build the music brand of your dreams.

@component('mail::button', ['url' => ''])
Join Now!
<h1>
    {{$message['title']}}
</h1>
<p>
    {{$message['body']}}
</p>
@endcomponent
    
Regards,  <br>
{{ config('app.name') }}
@endcomponent
