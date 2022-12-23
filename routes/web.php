<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\Book\BookController;
use App\Http\Controllers\Admin\Book\ImportBookController;
use App\Http\Controllers\Admin\People\StaffController;
use App\Http\Controllers\Admin\Bill\BuyController;
use App\Http\Controllers\Admin\Bill\BillController;
use App\Http\Controllers\Admin\Receipt\ReceiptController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        // Page Admin
        Route::get('/', [MainController::class, 'index'])->name('admin');

        // Book
        Route::prefix('/book')->group(function () {
            // add new book
            Route::get('/new/add', [BookController::class, 'create']);
            Route::post('/new/add', [BookController::class, 'store']);
            Route::get('/new/list', [BookController::class, 'index']);

            // add import book
            Route::get('/import/add', [ImportBookController::class, 'create']);
            Route::post('/import/add', [ImportBookController::class, 'store']);
            Route::get('/import/list', [ImportBookController::class, 'index']);
        });

        // People
        Route::prefix('/people')->group(function () {
            // add new book
            Route::get('/staff/add', [StaffController::class, 'create']);
            Route::post('/staff/add', [StaffController::class, 'store']);
            Route::get('/staff/list', [StaffController::class, 'index']);

            // add import book
            Route::get('/client/add', [ClientController::class, 'create']);
            Route::post('/client/add', [ClientController::class, 'store']);
            Route::get('/client/list', [ClientController::class, 'index']);
        });

        Route::prefix('/buy')->group(function () {
            // add new book
            Route::get('/add', [BuyController::class, 'create']);
            Route::post('/add', [BuyController::class, 'store']);
            Route::get('/list', [BuyController::class, 'index']);

        });

        Route::prefix('/bill')->group(function () {
            // add new book
            Route::get('/add', [BillController::class, 'create']);
            Route::post('/add', [BillController::class, 'store']);
            Route::get('/list', [BillController::class, 'index']);
        });

        Route::prefix('/receipt')->group(function () {
            // add new book
            Route::get('/add', [ReceiptController::class, 'create']);
            Route::post('/add', [ReceiptController::class, 'store']);
            Route::get('/list', [ReceiptController::class, 'index']);
        });
    });

});


