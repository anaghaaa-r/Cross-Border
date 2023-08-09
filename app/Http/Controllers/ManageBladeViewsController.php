<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class ManageBladeViewsController extends Controller
{
    public function indexView()
    {
        $deals = Deal::orderBy('id', 'desc')->get();
        $international = International::orderBy('id', 'desc')->get();
        $india = India::orderBy('id', 'desc')->get();

        return view('user.index', compact('deals', 'international', 'india'));
    }

    public function dealDetailsView($id)
    {
        $packages = Deal::find($id);
        $alldeals = Deal::orderBy('id', 'desc')->get();

        return view('user.deals-details', compact('packages', 'alldeals'));    
    }

    public function internationalDetailsView($id)
    {
        $packages = International::find($id);
        $allinternational = International::orderBy('id', 'desc')->get();

        return view('user.international-details', compact('packages', 'allinternational'));
    }

    public function indiaDetailsView($id)
    {
        $packages = India::find($id);
        $allindia = India::orderBy('id', 'desc')->get();

        return view('user.incredibleindia-details', compact('packages', 'allindia'));
    }
}
