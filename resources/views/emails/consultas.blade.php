@component('mail::message')
#Consulta desde los lectores de {{ config('app.name') }}

{!!$name !!}. <br>
Email :{!!$email !!}<br>
Asunto : {!!$subject!!}<br>
Mensaje: {!!$message!!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
