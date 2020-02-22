<?php

// use Illuminate\Support\Facades\Route;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
// use App\Exceptions\customException;
// use App\Catcommendation;


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



// Route::group(['middleware' => 'revalidate'], function()
// {

//   Route::resource('promotions','PromotionController');






//   Route::resource('commendations','CommendationsController');

//   Route::get('getCommenadationName','CommendationsController@getCommenadationName');
//   Route::get('getcat','CommendationsController@getcat');
//   Route::put('addCommendation','CommendationsController@addCommendation');
//   Route::POST('editCommendation','CommendationsController@editCommendation');
//   Route::post('deleteCommendation','CommendationsController@deleteCommendation');


//   Route::resource('posts','PostController');
//   Route::put('addPost','PostController@addPost');
//   Route::POST('editPost','PostController@editPost');
//   Route::POST('deletePost','PostController@deletePost');


//   Route::resource('emails','EmailController');
//   Route::put('addEmail','EmailController@addEmail');
//   Route::POST('editEmail','EmailController@editEmail');
//   Route::POST('deleteEmail','EmailController@deleteEmail');


//   Route::resource('phones','PhoneController');
//   Route::put('addPhone','PhoneController@addPhone');
//   Route::POST('editPhone','PhoneController@editPhone');
//   Route::POST('deletePhone','PhoneController@deletePhone');


//   Route::resource('ranks','RanksController');






//   Route::post('/getCons','AjaxController@getCons');
//  // Rou

// Route::get('/', 'HomeController@index')->name('home');

// Route::resource('officers','OfficersController');
// Route::get('/home/memberCall', 'OfficersController@memberCall')->name('officers.data');







// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Route::get('/load_All_Officers/load_All_OfficersTable', 'OfficersController@load_All_OfficersTable')->name('load_All_OfficersTable.data');

// Route::get('load_All_Officers/{CompNo}/{regNo}/{rank}/{lName}/{fName}/{div}','OfficersController@load_All_Officers');


// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////














// Route::get('postings','PostingsController@xxx')->name('postings.post');
// Route::get('/postings/{id}/post', 'PostingsController@officerPost')->name('postings.post');

// Route::resource('postings','PostingsController');
// Route::resource('dependents','DependentsController');


// Route::get('/spouses/{id}/spouse', 'SpousesController@officerSpouse')->name('spouses.spouse');
// Route::resource('spouses','SpousesController');
// Route::resource('addresses','AddressesController');




// Auth::routes();


//      // Routes that you want to revalidate go in here

// Route::get('/create_role_permission',function(){
//   $role = Role::create(['name' => 'Administer ']);
//    $permission = Permission::create(['name' => 'Administer roles & permissions']);
//  auth()->user()->assignRole('Administer');
//  auth()->user()->givePermissionTo('Administer roles & permissions');
//  });
// //Route::get('/',  'OfficersController@index')->name('home');
// Route::resource('corpses', 'CorpseController');
// Route::resource('funeralhomes', 'FuneralhomeController');
// Route::resource('investigators', 'InvestigatorController');
// Route::resource('stations', 'StationController');

// Route::post('/notification/corpsenotification/notification','CorpseController@notifications');
// Route::post('/markAsRead','CorpseController@markAsRead')->name('markAsRead');
// Route::get('/readNewCorpseNotify/{id?}','CorpseController@readNewCorpse')->name('readNewCorpseNotify');
// Route::post('/markAllNewCorpseNotifyAsRead','CorpseController@markAllNewCorpseNotifyAsRead')->name('markAllNewCorpseNotifyAsRead');
// Route::get('/allReadCorpseNofication','CorpseController@allReadCorpseNofication')->name('allReadCorpseNofication');



// /////////////////
// // Route::post('/notification/updatecorpsenotification/updatenotification','CorpseController@updateNotifications');
// // Route::post('/updateMarkAsRead','CorpseController@updateMarkAsRead')->name('updateMarkAsRead');
// // Route::get('/updateReadNewCorpseNotify/{id?}','CorpseController@updateReadNewCorpseNotify')->name('updateReadNewCorpseNotify');
// // Route::post('/updateMarkAllNewCorpseNotifyAsRead','CorpseController@updateMarkAllNewCorpseNotifyAsRead')->name('updateMarkAllNewCorpseNotifyAsRead');
// // Route::get('/updateAllReadCorpseNofication','CorpseController@updateAllReadCorpseNofication')->name('updateAllReadCorpseNofication');
// // //////////////////////





// Route::get('tasks', 'CorpseController@callx');
// Route::get('mytask', 'CorpseController@callx');
// // Route::post('corpses/show', 'CorpseController@taskPost')->name('ta');


//  Route::post('/task', 'CorpseController@taskPost');









// Route::get('/a','CorpseController@updateMarkAsRead')->name('a');




// // Route::get('/',  'OfficersController@index')->name('home');
// Route::get('charts', 'ChartController@index')->name('chart.index');
// Route::resource('users', 'UserController');
// Route::resource('roles', 'RoleController');
// Route::resource('permissions', 'PermissionController');
// Route::resource('skillscategories', 'CategorySkillsController', ['except' => ['create']]);
// Route::get('skills/skillstats/{id}/{chartType}', 'SkillsController@skillstats') ;

// Route::resource('statuses', 'StatusController');


// Route::resource('isOnlines', 'OnlineusersController', ['except' => ['create']]);


// Route::resource('catcommendations', 'CatcommendationsController', ['except' => ['create']]);

// //Route::resource('posts', 'PostController');

// Route::resource('leaves', 'LeaveController');
// Route::get('leaves/leaveCat/{id}', 'LeaveController@leaveCat')->name('leaves.offleaveCat');
// Route::get('leaves/leaveStats/{id}/{chartType}', 'LeaveController@leaveStats')->name('leaves.leaveStats');
// Route::get('leaves/leaveDetails/{id}', 'LeaveController@leaveDetails')->name('leaves.leaveDetails');



// Route::get('/live_search', 'LiveSearch@index');
// Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
// Route::get('/search/action', 'LiveSearchController2@action')->name('live_search.action');
// Route::get('/live_search/ajaxCall', 'LiveSearch@ajaxCall')->name('live_search.data');

// Route::get('Exception\exception',function(){
//   return view('exception');

// });
// });

// Route::group(['prefix' => 'laravel-crud-search-sort-ajax-modal-form'], function () {
//   Route::get('/', 'Crud5Controller@index');
//   Route::match(['get', 'post'], 'create', 'Crud5Controller@create');
//   Route::match(['get', 'put'], 'update/{id}', 'Crud5Controller@update');
//   Route::delete('delete/{id}', 'Crud5Controller@delete');
// });


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('divisions', 'DivisionController');
// Route::resource('ranks','RanksController');
