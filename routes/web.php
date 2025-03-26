
 <?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Auth;

// Authentication routes
Route::get('/', [UserDetailController::class, 'dashboard'])->name('dashboard');

Auth::routes();

// Protected routes (accessible only after login)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UserDetailController::class, 'create'])->name('details.create');
    Route::post('/details', [UserDetailController::class, 'store'])->name('details.store');
});

// Default Home route (optional)
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserDetailController;


// // Route::get('/', function () {
// //     return view('welcome');
// // });

// Auth::routes();
// Route::middleware(['auth'])->group(function () {
//     Route::get('/details', [UserDetailController::class, 'create'])->name('details.create');
//     Route::post('/details', [UserDetailController::class, 'store'])->name('details.store');
//     Route::get('/dashboard', [UserDetailController::class, 'dashboard'])->name('dashboard');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); -->
