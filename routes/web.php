<?php


Route::group(['middleware' => ['auth']], function (){

    Route::redirect('/', '/home', 301);
    Route::get('/home', function(){
        return view('home');
    })->name('inicial');

    Route::get('/home/search', 'HomeController@search')->name('search');


    Route::resource('kid', 'KidController');
    Route::resource('ticket_host', 'Ticket_hostController');
    Route::resource('pia', 'PiaController');
    Route::resource('documentation', 'DocumentationController');
    Route::resource('medicine', 'MedicineController');
    Route::resource('edu_sit_previou', 'Edu_sit_previouController');
    Route::resource('edu_sit_current', 'Edu_sit_currentController');
    Route::resource('data_health', 'Data_healthController');
    Route::resource('pro_ins_host', 'Pro_ins_hostController');
    Route::resource('information_family', 'Information_familyController');
    Route::resource('information_brother', 'Information_brotherController');
    Route::resource('family_origin', 'Family_originController');
    Route::resource('family_extended', 'Family_extendedController');
    Route::resource('evaluation', 'EvaluationController');
    Route::resource('network', 'NetworkController');


});

Auth::routes();
