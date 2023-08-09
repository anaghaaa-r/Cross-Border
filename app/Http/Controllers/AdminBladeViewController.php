<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class AdminBladeViewController extends Controller
{
    public function bookingsView()
    {
        $bookings = Booking::orderBy('id', 'desc')->get();

        return view('admin.bookings', compact('bookings'));
    }

    public function contactsView()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();

        return view('admin.contacts', compact('contacts'));
    }

    public function dealsView()
    {
        $alldeals = Deal::orderBy('id', 'desc')->get();

        return view('admin.add-deals', compact('alldeals'));    
    }

    public function internationalView()
    {
        $allinternational = International::orderBy('id', 'desc')->get();

        return view('admin.add-international', compact('allinternational'));
    }

    public function indiaView()
    {
        $allindia = India::orderBy('id', 'desc')->get();

        return view('admin.add-india', compact('allindia'));
    }

    public function dealDetailsView($id)
    {
        $packages = Deal::find($id);

        return view('admin.update-deal', compact('packages'));
    }

    public function internationalDetailsView($id)
    {
        $packages = International::find($id);

        return view('admin.update-international', compact('packages'));
    }

    public function indiaDetailsView($id)
    {
        $packages = India::find($id);

        return view('admin.update-india', compact('packages'));
    }
}
