<x-mail::message>
# Cross Border Booking

<!-- The body of your message. -->
Name: {{ $bookingData['name'] }}<br>
Email: {{ $bookingData['email'] }}<br>
Phone: +{{ $bookingData['countrycode'] }} {{$bookingData['phone']}}<br>
Message: {{ $bookingData['message'] }}<br>
@if(isset($bookingData['selectedPackage']))
Selected Package: <br>
{{ $bookingData['selectedPackage']['place'] }} - {{$bookingData['selectedPackage']['package']}}<br>
@endif
@if(isset($bookingData['serviceNeeded']))
Service Needed: {{ $bookingData['serviceNeeded'] }}
@endif

<x-mail::button :url="''">
Button Text
</x-mail::button>


CROSS BORDER<br>
Travel Solutions
<!-- Thanks,<br>
{{ config('app.name') }} -->
</x-mail::message>


