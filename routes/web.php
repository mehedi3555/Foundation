<?php


Route::get('/', 'FrontEndController@index');
Route::get('/about-us', 'FrontEndController@about');

Route::get('/need-help', 'NeedHelpController@need');
Route::post('/save-need-help', 'NeedHelpController@storeNeed');

Route::get('/want-help', 'WantHelpController@want');
Route::post('/save-want-help', 'WantHelpController@storeWant');

Route::get('/project-view/{id}', 'ProjectInfoController@project');

Route::get('/team', 'TeamController@add');
Route::post('/save-team', 'TeamController@store');
Route::get('/team-view', 'TeamController@member');
Route::get('/team-delete/{id}', 'TeamController@delete');
Route::get('/team-update/{id}', 'TeamController@update');
Route::post('/update-team', 'TeamController@update_team');


Route::get('/dashboard', 'DashboardController@home');

Route::get('/insert', 'ProjectInsertController@project_insert');
Route::post('/save-project-info', 'ProjectInsertController@projectStore');

Route::get('/upload', 'ProjectImageController@upload_image');
Route::post('/save-project-image', 'ProjectImageController@storeImage');
Route::get('/delete-proimage/{id}', 'ProjectImageController@delete_img');

Route::get('/upload-video', 'ProjectVideoController@upload_video');
Route::post('/save-video', 'ProjectVideoController@store_video');
Route::get('/delete-video/{id}', 'ProjectVideoController@delete');

Route::get('/view-project', 'ProjectImageViewController@show_project');
Route::get('/view-project-info/{id}', 'ProjectImageViewController@info_project');

Route::get('/update-project-info/{id}', 'ProjectInsertController@update_project');
Route::post('/update-project', 'ProjectInsertController@update');

Route::get('/need-help-view', 'NeedController@view_need');
Route::get('/need-help-info/{id}', 'NeedController@info_need');

Route::get('/want-help-view', 'WantController@view_want');
Route::get('/want-help-info/{id}', 'WantController@info_want');

Route::get('/slider-upload', 'SliderController@image_up');
Route::post('/save-slider', 'SliderController@storeSlider');

Route::get('/slider-view', 'SliderController@slider');
Route::get('/delete-slider/{id}', 'SliderController@delete_slider');

Route::get('/admin-login', 'BackEndController@user_login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
