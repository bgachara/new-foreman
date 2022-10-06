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
Route::get('login', function () {
    return view('index/login');
});
Route::get('register', function () {
    return view('index/register');
});
Route::get('dashboard', function () {
    return view('pages/dashboard');
});
Route::get('transaction', function () {
    return view('pages/transaction');
});
Route::get('material', function () {
    return view('pages/transactions/material');
});
Route::get('contigencies', function () {
    return view('pages/transactions/contigencies');
});
Route::get('equipment', function () {
    return view('pages/transactions/equipment');
});
Route::get('labour', function () {
    return view('pages/transactions/labour');
});
Route::get('miscellaneous', function () {
    return view('pages/transactions/miscellaneous');
});
Route::get('services', function () {
    return view('pages/transactions/services');
});
Route::get('subcontractor', function () {
    return view('pages/transactions/subcontractor');
});
Route::get('vat', function () {
    return view('pages/transactions/vat');
});
Route::get('notices', function () {
    return view('pages/notices');
});
Route::get('reports', function () {
    return view('pages/reports');
});
Route::get('tickets', function () {
    return view('pages/tickets');
});
Route::get('uploads', function () {
    return view('pages/uploads');
});
Route::get('settings', function () {
    return view('pages/settings');
});
Route::get('blue', function () {
    return view('index/blue');
});
