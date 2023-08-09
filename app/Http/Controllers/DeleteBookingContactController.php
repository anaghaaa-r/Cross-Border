<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Booking;
use App\Models\Contact;

class DeleteBookingContactController extends Controller
{
    // delete booking
    public function deleteBooking($id)
    {
        try {
            $booking = Booking::findOrFail($id);
            $booking->delete();

            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Booking deleted successfully.',
                'id' => $id
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Booking not found'
            , 401]);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // delete contact
    public function deleteContact($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Contact deleted successfully',
                'id' => $id
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Contact not found',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
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
