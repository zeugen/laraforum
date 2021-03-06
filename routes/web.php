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
Route::get('about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('posts/single/{id}',['as'=>'posts.single', 'uses'=>'HomeController@getSingle'] );



// admin routes USE Middleware TO BLOCK oTHER USERS FROM ACCESSIN THIS RouteServiceProvide
Route::group(['middleware'=>'blogAdmin'], function(){
  Route::get('admin/index', 'AdminController@index');
  Route::resource('admin/categories', 'AdminCategoriesController');
  Route::resource('admin/posts', 'AdminPostsController');

  // route resource for AdminUsersController
  Route::resource('admin/users', 'AdminUsersController');
  // Route::get('admin/users/index', 'AdminUsersController@store');
});
// author routes USE Middleware TO BLOCK oTHER USERS FROM ACCESSIN THIS RouteServiceProvide
Route::group(['middleware'=>'author'], function(){
  // Route::get('admin/', 'AdminController@index');
  Route::resource('author/posts', 'AuthorController');
});
// Route::resource('author/posts', 'AuthorController');

//resource for comments
Route::post('comments/{post_id}',['uses'=> 'CommentsController@store', 'as'=>'comments.store']);
//thread routes
Route::get('threads', 'ThreadsController@index')->name('threads');
Route::get('threads/create', 'ThreadsController@create');
Route::get('threads/search', 'SearchController@show');
Route::get('threads/{channel}/{thread}', 'ThreadsController@show');
Route::patch('threads/{channel}/{thread}', 'ThreadsController@update');
Route::delete('threads/{channel}/{thread}', 'ThreadsController@destroy');
Route::post('threads', 'ThreadsController@store')->middleware('must-be-confirmed');
Route::get('threads/{channel}', 'ThreadsController@index');

Route::post('locked-threads/{thread}', 'LockedThreadsController@store')->name('locked-threads.store')->middleware('admin');
Route::delete('locked-threads/{thread}', 'LockedThreadsController@destroy')->name('locked-threads.destroy')->middleware('admin');

Route::get('/threads/{channel}/{thread}/replies', 'RepliesController@index');
Route::post('/threads/{channel}/{thread}/replies', 'RepliesController@store');
Route::patch('/replies/{reply}', 'RepliesController@update');
Route::delete('/replies/{reply}', 'RepliesController@destroy')->name('replies.destroy');

Route::post('/replies/{reply}/best', 'BestRepliesController@store')->name('best-replies.store');

Route::post('/threads/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@store')->middleware('auth');
Route::delete('/threads/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@destroy')->middleware('auth');

Route::post('/replies/{reply}/favorites', 'FavoritesController@store');
Route::delete('/replies/{reply}/favorites', 'FavoritesController@destroy');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');
Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');

Route::get('/register/confirm', 'Auth\RegisterConfirmationController@index')->name('register.confirm');

Route::get('api/users', 'Api\UsersController@index');
Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store')->middleware('auth')->name('avatar');
