<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class ViewPackageController extends Controller
{

    // get deal
    public function getDeals()
    {
        try {
            $deals = Deal::orderBy('id', 'desc')->get();

            if($deals->count() > 0)
            {
                return view('user.deals  ', compact('deals'));
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'Fetched Package Successfully',
                    'alldeals' => $deals
                ], 201);
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

    // get international
    public function getInternational()
    {
        try {
            $international = International::orderBy('id', 'desc')->get();

            if($international->count() > 0)
            {
                return view('user.international', compact('international'));
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'Fetched Package Successfully',
                    'allinternational' => $international
                ], 201);
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

    // get india
    public function getIndia()
    {
        try {
            $india = India::orderBy('id', 'desc')->get();

            if($india->count() > 0)
            {
                return view('user.incredibleindia', compact('india'));
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'Fetched Package Successfully',
                    'allindia' => $india
                ], 201);
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
