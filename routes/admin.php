<?php

Route::get('/admin/login', 'Admin\AdminLoginController@showAdminLoginForm')->name('admin.login');

Route::get('/register/admin', 'Admin\AdminRegisterController@showAdminRegisterForm')->name('admin.register');

Route::get('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

Route::post('/admin/login', 'Admin\AdminLoginController@adminLogin');
Route::post('/register/admin', 'Admin\AdminRegisterController@createAdmin');

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('dashboard', 'AdminDashboardController@index')->name('admin.dashboard');
    Route::group(['namespace'=>'StudentClass'],function(){
    	   Route::get('list-streams','StudentClassController@listStreams')->name('admin.list_streams');
    	   Route::get('list-all-class','StudentClassController@listClass')->name('admin.list_all_class');
    	   Route::post('add-class','StudentClassController@addClass')->name('admin.add_class');
    	   Route::post('update-class/{id}','StudentClassController@updateClass')->name('admin.update_class');
    	  
    	   Route::get('show-add-class-form','StudentClassController@showAddClassForm')->name('admin.show_add_class_form');
    	   Route::get('show-edit-stream-form/{id}','StudentClassController@showEditStreamForm')->name('admin.show_edit_stream_form');


    	   Route::get('deactivate-stream/{id}','StudentClassController@deactivateStream')->name('admin.disable_stream');
    	   Route::get('activate-stream/{id}','StudentClassController@activateStream')->name('admin.enable_stream');
           Route::get('show-edit-class-form/{id}','StudentClassController@editClassForm')->name('admin.edit_class_form');
           Route::get('deactivate-class/{id}','StudentClassController@deactivateClass')->name('admin.disable_class');
           Route::get('activate-class/{id}','StudentClassController@activateClass')->name('admin.enable_class');





           Route::get('show-add-stream-form','StudentClassController@showAddStreamForm')->name('admin.show_add_stream_form');
            Route::post('add-stream','StudentClassController@addStream')->name('admin.add_stream');
            Route::post('update-stream/{id}','StudentClassController@updateStream')->name('admin.update_stream');


    });
    Route::group(['namespace'=>'Subject'],function(){
         Route::get('show-add-subject-form','SubjectController@showAddSubjectForm')->name('admin.show_add_subject_form');
         Route::post('add-subject','SubjectController@addSubjects')->name('admin.add_subjects');
         Route::get('show-edit-subject-form/{id}/{class_id}','SubjectController@showEditSubjectForm')->name('admin.show_edit_subject_form');
          Route::post('update-subject/{id}/{class_id}','SubjectController@updateSubject')->name('admin.update_subject');

        Route::get('retrive-class','SubjectController@retriveClass')->name('admin.retrive_class');
        Route::get('retrive-subject','SubjectController@retriveSubject')->name('admin.retrive_subject');
        Route::get('retrive-chapter_no','SubjectController@retriveChapterNo')->name('admin.retrive_chapter_no');
        Route::get('retrive-chapter-name','SubjectController@retriveChapterName')->name('admin.retrive_chapter_name');
         Route::get('retrive-stream-name','SubjectController@retriveStream')->name('admin.retrive_stream_name');
          Route::get('retrive-subject-for-stream','SubjectController@retriveSubjectForStreams')->name('admin.retrive_subject_for_stream');

    });

   Route::group(['namespace'=>'Chapter'],function(){
    Route::get('list-chapters','ChapterController@listChapters')->name('admin.list_chapters');
    Route::get('show-add-chapter-form','ChapterController@showAddChapterForm')->name('admin.show_add_chapter_form');
    Route::post('add-chapter','ChapterController@addChapter')->name('admin.add_chapter');


   });
   
   Route::group(['namespace'=>'Account'],function(){

     Route::get('show-create-account-form','AccountController@showCreateAccountForm')->name('admin.show_create_account_form');
     Route::post('create-account','AccountController@createAccount')->name('admin.create_account');


   });
   Route::group(['namespace'=>'Topic'],function(){

     Route::get('show-add-account-form','TopicController@showAddCategoryForm')->name('admin.show_add_category_form');
     Route::post('add-category','TopicController@addCategory')->name('admin.add_category');
     Route::get('show-edit-category-form/{id}','TopicController@showEditCategoryForm')->name('admin.show_edit_category_form');
    Route::post('update-category/{id}','TopicController@updateCategory')->name('admin.update_category');
    Route::get('list-all-files','TopicController@listAllFiles')->name('admin.list_all_files');
    Route::get('delete-file/{id}','TopicController@deleteFile')->name('admin.delete_file');


     Route::get('show-add-topic-form','TopicController@showAddTopicForm')->name('admin.add_topic_form');
      Route::post('add-topic','TopicController@addTopic')->name('admin.add_topic');
     




   });
   Route::group(['namespace'=>'Gallery'],function(){

     Route::get('show-add-gallery-form','GalleryController@showAddGalleryForm')->name('admin.show_add_gallery_form');
     Route::post('add-image','GalleryController@addImage')->name('admin.add_image');
    Route::get('show-gallery','GalleryController@showGallery')->name('admin.show_gallery');
    Route::get('delete-image/{id}','GalleryController@deleteImage')->name('admin.delete_image');




   });

   



    });

?>