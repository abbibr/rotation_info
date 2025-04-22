<x-mail::message>
# New Mail Message

<p><b>Name:</b> {{ $data['UserName'] }}</p>
<p><b>Email:</b>  <a href="mailto:{{ $data['UserEmail'] }}">{{ $data['UserEmail'] }}</a></p>
<p><b>Subject:</b> {{ $data['subject'] }}</p>
<p><b>Message:</b> {{ $data['message'] }}</p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
