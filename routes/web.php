<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/sub-categories', function() {
    return view('frontend.sub_categories');
});

Route::get('/blog', function() {
    return view('frontend.blog');
});

Route::get('/contact', function() {
    return view('frontend.contact');
});


require __DIR__.'/auth.php';
