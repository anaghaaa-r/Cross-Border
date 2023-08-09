<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Contact;

class ViewBookingContactController extends Controller
{
    // view bookings
    public function viewBookings()
    {
        try {
            $bookings = Booking::orderBy('id', 'desc')->get();

            if($bookings->count() > 0)
            {
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'fetched bookings successfully.',
                    'allbookings' => $bookings
                ], 201);
            }
            else
            {
                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'No bookings to fetch'
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // view contacts
    public function viewContacts()
    {
        try {
            $contacts = Contact::orderBy('id', 'desc')->get();
            if($contacts->count() > 0)
            {
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'fetched contacts successfully.',
                    'allcontacts' => $contacts
                ], 201);
            }
            else
            {
                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'No contacts to fetch'
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }
}
