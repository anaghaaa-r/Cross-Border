<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddPackageController;
use App\Http\Controllers\UpdatePackageController;
use App\Http\Controllers\ViewPackageController;
use App\Http\Controllers\DeletePackageController;
use App\Http\Controllers\BookingContactController;
use App\Http\Controllers\ViewBookingContactController;
use App\Http\Controllers\DeleteBookingContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


    Route::get('/test', function () {
        return 'Hello, this is a test route!';
    });

    // User Routes
    // booking
    Route::post('/booknow', [BookingContactController::class, 'bookNow']);
    Route::post('/contactus', [BookingContactController::class, 'contactUS']);

    // Admin Routes
    // login
    Route::post('/adminlogin', [AuthController::class, 'adminLogin'])->name('adminlogin');

    // adding packages
    Route::post('/addingdeals', [AddPackageController::class, 'addingDeals'])->middleware('auth:api');
    Route::post('/addinginternational', [AddPackageController::class, 'addingInternational'])->middleware('auth:api');
    Route::post('/addingindia', [AddPackageController::class, 'addingIndia'])->middleware('auth:api');

    // updating packages
    Route::post('/updatedeal/{id}', [UpdatePackageController::class, 'updateDeal'])->middleware('auth:api');
    Route::post('/updateinternational/{id}', [UpdatePackageController::class, 'updateInternational'])->middleware('auth:api');
    Route::post('/updateindia/{id}', [UpdatePackageController::class, 'updateIndia'])->middleware('auth:api');

    // deleting packages
    Route::delete('/deletedeal/{id}', [DeletePackageController::class, 'deleteDeal'])->middleware('auth:api');
    Route::delete('/deleteinternational/{id}', [DeletePackageController::class, 'deleteInternational'])->middleware('auth:api');
    Route::delete('/deleteindia/{id}', [DeletePackageController::class, 'deleteIndia'])->middleware('auth:api');

    // view bookings & contacts
    Route::get('/viewbookings', [ViewBookingContactController::class, 'viewBookings'])->middleware('auth:api');
    Route::get('/viewcontacts', [ViewBookingContactController::class, 'viewContacts'])->middleware('auth:api');

    // delete bookings & contacts
    Route::delete('/deletebooking/{id}', [DeleteBookingContactController::class, 'deleteBooking'])->middleware('auth:api');
    Route::delete('/deletecontact/{id}', [DeleteBookingContactController::class, 'deleteContact'])->middleware('auth:api');
    
    // logout
    Route::post('/adminlogout', [AuthController::class, 'adminLogout']);


    // Common Routes
    // get packages
    Route::get('/getdeals', [ViewPackageController::class, 'getDeals']);
    Route::get('/getinternational', [ViewPackageController::class, 'getInternational']);
    Route::get('/getindia', [ViewPackageController::class, 'getIndia']);


    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

