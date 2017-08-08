<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('pet-list', 'PetsController@petList')->name('pet-list');

Route::get('dog/{pet}', 'PetsController@viewPet')->name('pet');

Route::get('help', 'HelpController@viewHelp')->name('help');

Route::get('fin-reports', 'ReportsController@viewReports')->name('reports');

Route::get('become-volunteer', 'VolunteerController@viewForm')->name('volunteer');
Route::post('become-volunteer', 'VolunteerController@getData');

Route::get('about', 'AboutController@viewAbout')->name('about');

Route::get('feedback', 'AboutController@viewFeedback')->name('feedback');


Route::group(['prefix' => 'admin-dashboard'], function() {
    Route::get('add-dog', 'AdminDogController@index');
    Route::post('add-dog', 'AdminDogController@getData');
});


Route::get('contacts', function (){
    return "Страница с контактами";
});

Route::get('news', function (){
    return "Страница новостей";
});
Route::get('news/{slag}', function ($slag){
    return "Страница c новостью - $slag";
});
Auth::routes();


