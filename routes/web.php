<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\Book\BookController;
use App\Http\Controllers\Admin\Book\AuthorController;
use App\Http\Controllers\Admin\Book\CategoryController;
use App\Http\Controllers\Admin\Book\Publishing_houseController;
use App\Http\Controllers\Admin\Book\ImportBookController;
use App\Http\Controllers\Admin\People\StaffController;
use App\Http\Controllers\Admin\People\ClientController;
use App\Http\Controllers\Admin\Bill\BuyController;
use App\Http\Controllers\Admin\Bill\BillController;
use App\Http\Controllers\Admin\Receipt\ReceiptController;
use App\Http\Controllers\Admin\RegulationController;
use App\Http\Controllers\Admin\ReportInventoryController;
use App\Http\Controllers\Admin\ReportDebtController;



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
            // add new author
            Route::prefix('/author')->group(function () {
                Route::get('/add', [AuthorController::class, 'create']);
                Route::post('/add', [AuthorController::class, 'store']);
                Route::get('/list', [AuthorController::class, 'index']);
            });

            // add new category
            Route::prefix('/category')->group(function () {
                Route::get('/add', [CategoryController::class, 'create']);
                Route::post('/add', [CategoryController::class, 'store']);
                Route::get('/list', [CategoryController::class, 'index']);
            });

            // add new publishing house
            Route::prefix('/publishing_house')->group(function () {
                Route::get('/add', [Publishing_houseController::class, 'create']);
                Route::post('/add', [Publishing_houseController::class, 'store']);
                Route::get('/list', [Publishing_houseController::class, 'index']);
            });

            // add new book
            Route::get('/add', [BookController::class, 'create']);
            Route::post('/add', [BookController::class, 'store']);
            Route::get('/list', [BookController::class, 'index']);

        });

        // Book Manage
        Route::prefix('/import')->group(function () {
            // Nhập Sách
            Route::get('/add', [ImportBookController::class, 'create']);
            Route::post('/add', [ImportBookController::class, 'store']);
            // Tra cứu
            Route::get('/list', [ImportBookController::class, 'index']);
        });

        // People
        Route::prefix('/people')->group(function () {
            // add new staff
            Route::get('/staff/add', [StaffController::class, 'create']);
            Route::post('/staff/add', [StaffController::class, 'store']);
            Route::get('/staff/list', [StaffController::class, 'index']);

            // add new client
            Route::get('/client/add', [ClientController::class, 'create']);
            Route::post('/client/add', [ClientController::class, 'store']);
            Route::get('/client/list', [ClientController::class, 'index']);
        });

        Route::prefix('/bill')->group(function () {
            // add new bill
            Route::get('/add', [BillController::class, 'create']);
            Route::post('/add', [BillController::class, 'store']);
            Route::get('/list', [BillController::class, 'index']);
        });

        Route::prefix('/receipt')->group(function () {
            // add new receipt
            Route::get('/add', [ReceiptController::class, 'create']);
            Route::post('/add', [ReceiptController::class, 'store']);
            Route::get('/list', [ReceiptController::class, 'index']);
        });

        Route::prefix('/regulation')->group(function () {
            // add new regulation
            Route::get('/add', [RegulationController::class, 'create']);
            Route::post('/add', [RegulationController::class, 'store']);
            Route::get('/list', [RegulationController::class, 'index']);
            Route::get('/edit/{regulation}', [RegulationController::class, 'show']);
            Route::post('/edit/{regulation}', [RegulationController::class, 'update']);
            Route::delete('/destroy', [RegulationController::class, 'destroy']);
        });

        Route::prefix('/report')->group(function () {
            Route::get('/inventory_report', [ReportInventoryController::class, 'index']);
            Route::get('/debt_report', [ReportDebtController::class, 'index']);
        });
    });

});


