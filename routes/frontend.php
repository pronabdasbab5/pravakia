<?php

Route::group(['namespace'=>'Web'],function(){
	Route::get('/', 'IndexController@index')->name('web.index');

    Route::get('/Forgot-password', function () {
        return view('web.forgot-password');
    })->name('web.forgot-password');

    Route::get('login', 'UsersLoginController@showUserLoginForm')->name('web.login');
    Route::post('login', 'UsersLoginController@userLogin')->name('web.login_submit');

    Route::get('logout', 'UsersLoginController@logout')->name('web.logout');


});

Route::group(['namespace'=>'Web'],function(){
    Route::get('/About', function () {
    return view('web.about.about');
   })->name('web.about.about');

    Route::get('/Gallery', function () {
        return view('web.gallery.gallery');
    })->name('web.gallery.gallery');

    Route::get('/Class/Syllabus', function () {
        return view('web.syllabus.syllabus');
    })->name('web.syllabus.syllabus');

    Route::get('/Acheivement', function () {
        return view('web.acheivement.acheivement');
    })->name('web.acheivement.acheivement');

    Route::group(['middleware'=>'auth:user'],function(){
        Route::get('/Class/Subject/Material/{subject_id}','TestController@showMaterialCategory')->name('web.show_material_category');
        Route::get('/Class/Subject/{id}/{stream_id}','TestController@showAllSubjects')->name('web.show_all_subjects');
        Route::get('/Class/Subject/Material/Chapter/{document_id}/{subject_id}', 'TestController@showAllMaterials')->name('web.show_all_materials');

        Route::get('file-download/{topic_id}', 'TestController@fileDownload')->name('web.file_download');
    });
});

    



// Route::get('/Login', function () {
//     return view('web.login');
// })->name('web.login');

// Route::get('/Forgot-password', function () {
//     return view('web.forgot-password');
// })->name('web.forgot-password');

