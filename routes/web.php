<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingContactController;
use App\Http\Controllers\ViewPackageController;
use App\Http\Controllers\ManageBladeViewsController;
use App\Http\Controllers\AdminBladeViewController;
use App\Http\Controllers\DeleteBookingContactController;
use App\Http\Controllers\AddPackageController;
use App\Http\Controllers\DeletePackageController;
use App\Http\Controllers\UpdatePackageController;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ManageBladeViewsController::class, 'indexView']);

Route::get('/aboutus', function() {
    return view('user.aboutus');
});

Route::get('/corporate', function() {
    return view('user.corporate');
});

Route::get('/deals', [ViewPackageController::class, 'getDeals']);

Route::get('/international', [ViewPackageController::class, 'getInternational']);

Route::get('/incredibleindia', [ViewPackageController::class, 'getIndia']);

Route::get('/mice', function() {
    return view('user.mice');
});

Route::get('/specialisedproducts', function() {
    return view('user.specialisedproducts');
});

Route::get('/contactus', function() {
    return view('user.contactus');
});

Route::get('/deals-details/{id}', [ManageBladeViewsController::class, 'dealDetailsView']);

Route::get('/international-details/{id}', [ManageBladeViewsController::class, 'internationalDetailsView']);

Route::get('/incredibleindia-details/{id}', [ManageBladeViewsController::class, 'indiaDetailsView']);

Route::post('/contactus/submit', [BookingContactController::class, 'contactUs'])->name('contact.submit');

Route::post('/booknow/submit', [BookingContactController::class, 'bookNow'])->name('booknow.submit');



// Admin

// get methods
Route::get('/admin', function() {
    return view('admin.login');
})->name('admin');

Route::get('/dashboard', function() {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/bookings', [AdminBladeViewController::class, 'bookingsView'])->middleware('auth');

Route::get('/contactdetails', [AdminBladeViewController::class, 'contactsView'])->middleware('auth');

Route::get('/add-deals', [AdminBladeViewController::class, 'dealsView'])->middleware('auth');

Route::get('/add-international', [AdminBladeViewController::class, 'internationalView'])->middleware('auth');

Route::get('/add-india', [AdminBladeViewController::class, 'indiaView'])->middleware('auth');

Route::get('/update-deal/{id}', [AdminBladeViewController::class, 'dealDetailsView'])->middleware('auth');

Route::get('/update-international/{id}', [AdminBladeViewController::class, 'internationalDetailsView'])->middleware('auth');

Route::get('/update-india/{id}', [AdminBladeViewController::class, 'indiaDetailsView'])->middleware('auth');


// post methods
// login-logout
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');

Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout')->middleware('auth');


// adding package
Route::post('/add-deals/submit', [AddPackageController::class, 'addingDeals'])->name('deal.submit')->middleware('auth');

Route::post('/add-international/submit', [AddPackageController::class, 'addingInternational'])->name('international.submit')->middleware('auth');

Route::post('/add-india/submit', [AddPackageController::class, 'addingIndia'])->name('india.submit')->middleware('auth');


// deleting
Route::delete('/booking/{id}', [DeleteBookingContactController::class, 'deleteBooking'])->middleware('auth');

Route::delete('/contact/{id}', [DeleteBookingContactController::class, 'deleteContact'])->middleware('auth');

Route::delete('/deal/{id}', [DeletePackageController::class, 'deleteDeal'])->middleware('auth');

Route::delete('/international/{id}', [DeletePackageController::class, 'deleteInternational'])->middleware('auth');

Route::delete('/india/{id}', [DeletePackageController::class, 'deleteIndia'])->middleware('auth');


// updating deals
Route::post('/update-deal/{id}/submit', [UpdatePackageController::class, 'updateDeal'])->name('update-deal.submit')->middleware('auth');

Route::post('/update-international/{id}/submit', [UpdatePackageController::class, 'updateInternational'])->name('update-international.submit')->middleware('auth');

Route::post('update-india/{id}/submit', [UpdatePackageController::class, 'updateIndia'])->name('update-india.submit');

