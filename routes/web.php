<?php

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

Route::get('home', function () {
    return view('welcome');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cats', function () {
    $cats =\App\Cat::all();

    foreach ($cats as $cat) {
        echo $cat->name . "<br>";
    }

    $cat17 = \App\Cat::find(17);
    echo "<p>";
    echo $cat17->name;

    $newcat1 = new \App\Cat();
    $newcat1->name = "Charles";
    $newcat1->gender = "male";
    $newcat1->age = 12;
    $newcat1->save();

    $newcat2 = \App\Cat::create(['name' => 'Bob', 'gender' => 'male', 'age' => 5]);
    $newcat2->save();

    $newcat1->delete();

    \App\Cat::destroy(1);

    $cat2 = \App\Cat::find(2);
    $cat2->name = "Merry";
    $cat2->save();

    \App\Cat::where('id', 2)->update(['name' => 'Marry']);


});
