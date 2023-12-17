<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Models\Order;
use Cron\MonthField;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //=====================================
    //products
    //=====================================
    //all products
    $products = Product::get();
    //total orders
    $orders = Order::get();
    //total seles
    $totalSell = Order::sum('total');

    //===================================
    //order total sell in dashboard
    //===================================
    $totalSellToday = Order::whereDate('created_at', date('Y-m-d'))->sum('total');
    //yesterday sell
    $totalSellYesterday = Order::whereDate('created_at', date('Y-m-d', strtotime('-1 day')))->sum('total');
    //this month sell
    $totalSellThisMonth = Order::whereMonth('created_at', date('m'))->sum('total');
    //last month sell
    $totalSellLastMonth = Order::whereMonth('created_at', date('Y-m-d', strtotime('-1 month')))->sum('total');

    //=====================================
    //order total orders in dashboard
    //=====================================
    //today order
    $todayOrders = Order::whereDate('created_at', date('Y-m-d'))->get();
    //Yesterday Orders
    $yesterdayOrders = Order::whereDate('created_at', date('Y-m-d', strtotime('-1 day')))->get();
    // //This Month Orders
    $thisMonthOrders = Order::whereMonth('created_at', date('m'))->get();
    // //Last Month Orders
    $lastMonthOrders = Order::whereMonth('created_at', date('Y-m-d', strtotime('-1 month')))->get();


    $products = Product::get();
    return view('dashboard', [
        'products' => $products,
        'orders' => $orders,
        'totalSell' => $totalSell,

        'totalSellToday' => $totalSellToday,
        'totalSellYesterday' => $totalSellYesterday,
        'totalSellThisMonth' => $totalSellThisMonth,
        'totalSellLastMonth' => $totalSellLastMonth,

        'todayOrders' => $todayOrders,
        'yesterdayOrders' => $yesterdayOrders,
        'thisMonthOrders' => $thisMonthOrders,
        'lastMonthOrders' => $lastMonthOrders,
    ]);
})->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('products', ProductController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

require __DIR__.'/auth.php';
