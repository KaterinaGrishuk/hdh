<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('pets', function() {
    return 'Страница с питомцами';
});
Route::get('pets/{name}', function ($name){
    return "Страница с $name";
});
Route::get('about', function (){
    return "Страница о нас";
});
Route::get('become-volunteer', function (){
   return "Страница волонтёров";
});
Route::get('contacts', function (){
    return "Страница с контактами";
});
Route::get('help', function (){
    return "Страница помощи";
});
Route::get('news', function (){
    return "Страница новостей";
});
Route::get('news/{slag}', function ($slag){
    return "Страница c новостью - $slag";
});