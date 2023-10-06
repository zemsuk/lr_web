<?php
use Illuminate\Support\Facades\Route;
use Zems\LrWeb\ZemsWeb;


Route::controller(ZemsWeb::class)->group(function(){
    // Route::get('/','index')->name('index');   
    Route::get('/about','about')->name('about');   
    Route::get('/acitivities','acitivities')->name('acitivities');   
    Route::get('/strategy','strategy')->name('strategy');   
    Route::get('/donate','donate')->name('donate');   
    Route::get('/add_member','add_member')->name('add_member');   
    Route::post('/member_process','member_process')->name('member_process');   
});

Route::get('/demo', function () {
    $zemsWeb = new ZemsWeb;
    return $zemsWeb->index();
});

Route::get('/{any?}', function () {
    return view('lr_web::website');
})->where('any', '.*');
