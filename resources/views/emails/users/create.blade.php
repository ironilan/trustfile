@component('mail::message')
# Hola {{$msg['nombre']}},

Se ha creado tu usuario en la plataforma.

usuario: {{$msg['email']}}
pass: (tu dni)

@component('mail::button', ['url' => ''])
Ingresar
@endcomponent

## Si tienes algun inconveniente, por favor comunícate con nuestro soporte.
Gracias,<br>
{{ config('app.name') }}
@endcomponent
