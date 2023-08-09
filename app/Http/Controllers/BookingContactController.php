<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Models\Booking;
use App\Models\Contact;
use App\Mail\BookingData;
use App\Mail\ContactUsMail;


class BookingContactController extends Controller
{

    // booking

    public function bookNow(Request $request)
    {
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $countrycode = $request->input('countrycode');
            $phone = $request->input('phone');
            $message = $request->input('message');
            $selectedPackage = [
                "place" => $request->input('place'),
                "package" => $request->input('package')
            ];
            $serviceNeeded = $request->input('serviceNeeded');

            $bookingData = [
                "name" => $name,
                "email" => $email,
                "countrycode" => $countrycode,
                "phone" => $phone,
                "message" => $message,
            ];

            if($serviceNeeded)
            {
                $bookingData['serviceNeeded'] = $serviceNeeded;
            }
            elseif($selectedPackage)
            {
                $bookingData['selectedPackage'] = json_encode($selectedPackage);
            }

            $booking = Booking::create($bookingData);

            if($booking)
            {
                $parsedSelectedPackage = $booking->selectedPackage ? json_decode($booking->selectedPackage, true) : null;
                $place = $parsedSelectedPackage['place'] ?? null;
                $package = $parsedSelectedPackage['package'] ?? null;

                $adminMail = 'anaghaaa.r@zohomail.in';
                $subject = 'New Cross Border Booking from ' . $bookingData['email'];

                Mail::to($adminMail)->send(new BookingData($bookingData, $subject));
                
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'Booking successfull, We will contact you soon.',
                    'selectedPackage' => [
                        'place' => $place,
                        'package' => $package
                    ],
                    'serviceNeeded' => $booking->serviceNeeded
                ], 201);
            }
            else
            {
                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'Error Booking'
                ], 401);
            }
        } catch(\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // contact us

    public function contactUs(Request $request)
    {
        try {

            $recaptchaResponse = $request->input('g-recaptcha-response');
            $recaptchaSecret = '6Le8xnAnAAAAAM6V14aGPSfVLSn7JzNPKX2pBt1o';

            $recaptchaVerifyResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
            ]);
    
            if (!$recaptchaVerifyResponse->json()['success']) {
                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'Please complete the reCAPTCHA challenge.'
                ], 401);
            }

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $message = $request->input('message');

            $contactDetails = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message
            ];

            $contactus = Contact::create($contactDetails);

        
            if($contactus)
            {

                $adminMail = 'anaghaaa.r@zohomail.in';
                $subject = 'New Cross Border Contact from ' . $contactDetails['email'];

                Mail::to($adminMail)->send(new ContactUsMail($contactus, $subject));

                    // return redirect()->back()->with('success', 'We will contact you soon.');
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'We will contact you soon.'
                ], 201);
            }
            else
            {
                // return redirect()->back()->with('error', 'Error sending details.');
                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'Error trying to send details'
                ], 401);
            }
        } catch(\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'somee error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }
}
