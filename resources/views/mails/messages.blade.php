@component('mail::message')
# Nuovo messaggio

<p>Email: {{$contact['email']}}</p>
<p><strong>Message:</strong> {{$contact['message']}}</p>

@endcomponent