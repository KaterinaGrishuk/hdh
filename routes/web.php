<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('pet-list', 'PetsController@petList')->name('pet-list');

Route::get('dog/{pet}', 'PetsController@viewPet')->name('pet');

Route::get('help', 'HelpController@viewHelp')->name('help');

Route::get('fin-reports', 'ReportsController@viewReports')->name('reports');

Route::get('become-volunteer', 'VolunteerController@viewForm')->name('volunteer');
Route::post('become-volunteer', 'VolunteerController@getData');

Route::get('about', 'AboutController@viewAbout')->name('about');

Route::get('timetable', 'TimetableController@viewTimetable')->name('timetable');
Route::post('timetable', 'TimetableController@saveTimetable')->name('timetable');

Route::get('contacts', 'ContactsController@viewContacts')->name('contacts');
Route::post('contacts', 'ContactsController@getData');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');


Route::group(['prefix' => 'admin-dashboard', 'middleware'=> ['auth', 'admin']], function() {
    Route::get('/', 'AdminDogController@showAdminPage')->name('pageAdmin');
    Route::delete('/', 'AdminDogController@deleteDog');
    Route::get('add-dog', 'AdminDogController@showAddDog')->name('addDog');
    Route::post('add-dog', 'AdminDogController@addDog');
    Route::get('edit-dog/{id}', 'AdminDogController@showEditDog')->name('editDog');
    Route::post('edit-dog/{id}', 'AdminDogController@editDog');
});

Route::get('news', function (){
    return "Страница новостей";
});
Route::get('news/{slag}', function ($slag){
    return "Страница c новостью - $slag";
});
Auth::routes();


