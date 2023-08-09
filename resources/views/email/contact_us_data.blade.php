<x-mail::message>
# Introduction

Name: {{ $contactDetails['name'] }}<br>
Email: {{ $contactDetails['email'] }}<br>
Phone: {{$contactDetails['phone']}}<br>
Message: {{ $contactDetails['message'] }}<br>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
