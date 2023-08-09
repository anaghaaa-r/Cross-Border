<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Deal;
use App\Models\International;
use App\Models\India;

class DeletePackageController extends Controller
{

    // delete deal
    public function deleteDeal($id)
    {
        try {
            $deal = Deal::findOrFail($id);
            $deal->delete();

            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package deleted successfully'
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        } catch (\Exception $e) {
            return response() ->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // delete international
    public function deleteInternational($id)
    {
        try {
            $international = International::findOrFail($id);
            $international->delete();

            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package deleted successfully'
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        } catch (\Exception $e) {
            return response() ->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }

    // delete india
    public function deleteIndia($id)
    {
        try {
            $india = India::findOrFail($id);
            $india->delete();

            return response()->json([
                'statusCode' => 201,
                'status' => true,
                'message' => 'Package deleted successfully'
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Package not found',
                'error' => 'Error: ' . $e->getMessage()
            ], 401);
        } catch (\Exception $e) {
            return response() ->json([
                'statusCode' => 501,
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 501);
        }
    }
}
