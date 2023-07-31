<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/login2', function () {
    return view('login2');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home2');
});

// Route::get('/employee/create', function () {
//     return view('employee.create');
// });


// Route::get('/employee/index', function () {
//     return view('employee.index');
// });

// Route::get('/employee/show', function () {
//     return view('employee.show');
// });

Route::get('/product/create', function () {
    return view('product.create');
});
Route::get('/product/index', function () {
    return view('product.index');
});
Route::get('/product/show', function () {
    return view('product.show');
});

Route::get('/approval/create','ApprovalController@create')->name('approval.create');
Route::post('/approval','ApprovalController@store')->name('approval.store');
Route::get('/approval/index','ApprovalController@index')->name('approval.index');


Route::get('/customer/create','CustomerController@create')->name('customer.create');
Route::post('/customer','CustomerController@store')->name('customer.store');
Route::get('/customer/index','CustomerController@index')->name('customer.index');
Route::get('/customer/{id}','CustomerController@show')->name('customer.show');

Route::get('/designation/create','DesignationController@create')->name('designation.create');
Route::post('/designation','DesignationController@store')->name('designation.store');
Route::get('/designation/index','DesignationController@index')->name('designation.index');

Route::get('/branch/create','BranchController@create')->name('branch.create');
Route::post('/branch','BranchController@store')->name('branch.store');
Route::get('/branch/index','BranchController@index')->name('branch.index');
Route::get('/branch/{id}','BranchController@show')->name('branch.show');



Route::get('/employee/create','EmployeeController@create')->name('employee.create');
Route::post('/employee','EmployeeController@store')->name('employee.store');
Route::get('/employee/index','EmployeeController@index')->name('employee.index');
Route::get('/employee/{id}','EmployeeController@show')->name('employee.show');

Route::get('/invoice/create','InvoiceController@create')->name('invoice.create');
Route::post('/invoice','InvoiceController@store')->name('invoice.store');
Route::get('/invoice/index','InvoiceController@index')->name('invoice.index');
Route::get('/invoice/{id}','InvoiceController@show')->name('invoice.show');


Route::get('/invoiceproduct/create','InvoiceproductController@create')->name('invoiceproduct.create');
Route::post('/invoiceproduct','InvoiceproductController@store')->name('invoiceproduct.store');
Route::get('/invoiceproduct/index','InvoiceproductController@index')->name('invoiceproduct.index');
Route::get('/invoiceproduct/{id}','InvoiceproductController@show')->name('invoiceproduct.show');


Route::get('/transaction/create','TransactionController@create')->name('transaction.create');
Route::post('/transaction','TransactionController@store')->name('transaction.store');
Route::get('/transaction/index','TransactionController@index')->name('transaction.index');
Route::get('/transaction/{id}','TransactionController@show')->name('transaction.show');




//php artisan route: --list
//php artisan make:controller StudentController --resource

