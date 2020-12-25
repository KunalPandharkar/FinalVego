<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
 });

Route::view('/aboutus.html','aboutus');
Route::view('/contactus.html','contactus');
Route::view('/editgarage.html','editgarage');
Route::view('/emergencyinfo.html','emergencyinfo');
Route::view('/emergencyservice.html','emergencyservice');
Route::view('/garageinfo.html','garageinfo');
Route::view('/garages.html','garages');
Route::view('/index.html','index');
Route::view('/login.html','login');
Route::view('/offers.html','offers');
Route::view('/preloader.html','preloader');
Route::view('/pricecard.html','pricecard');
Route::view('/register.html','register');
Route::view('/registergarage.html','registergarage');
Route::view('/registergarageform.html','registergarageform');
Route::view('/registerservicecenter.html','registerservicecenter');
Route::view('/registerservicecenterform.html','registerservicecenterform');
Route::view('/servicecenterinfo.html','servicecenterinfo');
Route::view('/servicecenters.html','servicecenters');

Route::view('/workwithus.html','workwithus');

Route::post('registercustomer','CustomerController@registercustomer');
Route::post('logincustomer','CustomerController@logincustomer');
Route::get('/userprofile.html','CustomerController@showuserprofile');
Route::get('/logoutuser','CustomerController@logoutuser');


