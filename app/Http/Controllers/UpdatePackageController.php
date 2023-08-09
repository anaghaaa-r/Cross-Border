<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class UpdatePackageController extends Controller
{

    // update deal
    public function updateDeal(Request $request, $id)
    {
        $deal = Deal::find($id);

        if(!$deal)
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found'
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'place' => 'nullable|string',
            'package' => 'nullable|string',
            'price' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors() 
            ], 401);
        }
        
        $updatedData = [];

        if($request->filled('place'))
        {
            $updatedData['place'] = $request->input('place');
        }

        if($request->filled('package'))
        {
            $updatedData['package'] = $request->input('package');
        }

        if($request->filled('price'))
        {
            $updatedData['price'] = $request->input('price');
        }

        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->hashName();
            $imagePath = 'uploads/deals/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);
            $updatedData['image'] = $imagePath;
        }

        if(empty($updatedData))
        {
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Nothing to update'
            ], 201);
        }

        try {
            $deal->update($updatedData);
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package updated successfully',
                'deal' => $deal
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }

    }

    // update international
    public function updateInternational(Request $request, $id)
    {
        $international = International::find($id);

        if(!$international)
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found'
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'place' => 'nullable|string',
            'package' => 'nullable|string',
            'price' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 401);
        }

        $updatedData = [];

        if($request->filled('place'))
        {
            $updatedData['place'] = $request->input('place');
        }

        if($request->filled('package'))
        {
            $updatedData['package'] = $request->input('package');
        }

        if($request->filled('price'))
        {
            $updatedData['price'] = $request->input('price');
        }

        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->hashName();
            $imagePath = 'uploads/international/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);
            $updatedData['image'] = $imagePath;
        }

        if(empty($updatedData))
        {
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Nothing to update'
            ], 201);
        }

        try {
            $international->update($updatedData);
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package updated successfully',
                'international' => $international
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // update india
    public function updateIndia(Request $request, $id)
    {
        $india = India::find($id);

        if(!$india)
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found'
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'place' => 'nullable|string',
            'package' => 'nullable|string',
            'price' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors() 
            ], 401);
        }

        $updatedData = [];

        if($request->filled('place'))
        {
            $updatedData['place'] = $request->input('place');
        }

        if($request->filled('package'))
        {
            $updatedData['package'] = $request->input('package');
        }

        if($request->filled('price'))
        {
            $updatedData['price'] = $request->input('price');
        }

        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->hashName();
            $imagePath = 'uploads/india/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);
            $updatedData['image'] = $imagePath;
        }

        if(empty($updatedData))
        {
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Nothing to update'
            ], 201);
        }

        try {
            $india->update($updatedData);
            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package updated successfully',
                'india' => $india
            ], 201);
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
