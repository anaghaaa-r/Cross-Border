<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class AddPackageController extends Controller
{
    
    // add deal
    public function addingDeals(Request $request)
    {
        $request->validate([
            'place' => 'required|string',
            'package' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/deals/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);


        try {
            $deal = new Deal();  
            $deal->place = $request->place;
            $deal->package = $request->package;
            $deal->price = $request->price;
            $deal->image = $imagePath;
            $deal->save();
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Error adding package to Deals.',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        }

        return response()->json([
            'statusCode' => 201,
            'status' => true,
            'message' => 'Package added successfully',
            'filename' => $filename,
            'path' => asset('storage/' . $imagePath)
        ], 201);
    }
    
    // add international
    public function addingInternational(Request $request)
    {
        $request->validate([
            'place' => 'required|string',
            'package' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/international/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        try {
            $international = new International();
            $international->place = $request->place;
            $international->package = $request->package;
            $international->price = $request->price;
            $international->image = $imagePath;
            $international->save();
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Error adding package to International.',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        }

        return response()->json([
            'statusCode' => 201,
            'status' => true,
            'message' => 'Package added successfully.',
            'filename' => $filename,
            'path' => asset('storage/' . $imagePath)
        ], 201);
    }

    // add india
    public function addingIndia(Request $request)
    {
        $request->validate([
            'place' => 'required|string',
            'package' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/india/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        try {
            $india = new India();
            $india->place = $request->place;
            $india->package = $request->package;
            $india->price = $request->price;
            $india->image = $imagePath;
            $india->save();
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Error adding package to India.',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        }

        return response()->json([
            'statusCode' => 201,
            'status' => true,
            'message' => 'Package added successfully',
            'filename' => $filename,
            'path' => asset('storage/' . $imagePath)
        ], 201);
    }

}
