<?php

// Route::get('/welcome', 'BlogController@welcome')->name('welcome');

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'UserController@indexuser2')->name('home');
Route::get('/author/admin', 'BlogController@crud')->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');


//routing Blogging

Route::name('blogs_path')->get('/', 'BlogController@index');
Route::name('create_blog_path')->get('/blogs/create', 'BlogController@create');
Route::name('store_blog_path')->post('/blog', 'BlogController@store');
Route::name('blog_path')->get('/blogs/{post}', 'BlogController@show');
Route::name('edit_blog_path')->get('/blogs/{id}/edit', 'BlogController@edit');
Route::name('update_blog_path')->put('/blogs/{id}', 'BlogController@update');
Route::name('delete_blog_path')->delete('/blogs/{id}', 'BlogController@destroy');
Route::get('/search', 'BlogController@search');
Route::post('/blogs/{blogs}/comment', 'PostCommentController@store')->name('blog.comment.store');


//routing user
Route::get('/profile/user', 'UserController@indexuser')->name('users');




Route::get('/notif', function() {
    $user = \App\User::first();
    $user->notify(new \App\Notifications\Daftar);
});