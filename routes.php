<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/artikel', 'HomeController@artikel');
Route::get('/panduan', 'HomeController@panduan');
Route::get('/direktori', 'HomeController@direktori');
Route::get('/polling', 'HomeController@polling');
Route::get('/polling/detail', 'HomeController@pollingdetail');
Route::get('/rekap', 'HomeController@rekap');
Route::get('/daftar-pemenang', 'HomeController@daftarpemenang');
Route::get('/tentang', 'HomeController@tentang');
Route::get('/pendaftaran', 'HomeController@pendaftaran');

Route::get('/html-to-pdf', ['as'=>'inventor.cetak','uses'=>'UserController@pdf']);


Route::auth();
Route::group([
      'middleware'=>['auth']] ,function(){

      //Clear Cache facade value:
    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('cache:clear');
        return '<h1>Cache facade value cleared</h1>';
    });

    //Reoptimized class loader:
    Route::get('/optimize', function() {
        $exitCode = Artisan::call('optimize');
        return '<h1>Reoptimized class loader</h1>';
    });

    //Route cache:
    Route::get('/route-cache', function() {
        $exitCode = Artisan::call('route:cache');
        return '<h1>Routes cached</h1>';
    });

    //Clear Route cache:
    Route::get('/route-clear', function() {
        $exitCode = Artisan::call('route:clear');
        return '<h1>Route cache cleared</h1>';
    });

    //Clear View cache:
    Route::get('/view-clear', function() {
        $exitCode = Artisan::call('view:clear');
        return '<h1>View cache cleared</h1>';
    });

    //Clear Config cache:
    Route::get('/config-cache', function() {
        $exitCode = Artisan::call('config:cache');
        return '<h1>Clear Config cleared</h1>';
    });
    Route::get('/artikel/{id}/show','HomeController@showArtikel');
    Route::get('/admin/editprofil/{id}', 'AdminController@editinventor');
    Route::get('/inventor/editprofil', 'InventorController@edit');
    Route::get('/inventor/resetpassword', 'InventorController@resetpassword');
    Route::post('/inventor/resetpassword', 'InventorController@storepassword');
    Route::get('/admin/resetpassword', 'AdminController@resetpassword');
    Route::post('/admin/resetpassword', 'AdminController@storepassword');
    Route::patch('/admin/updateprofil/{id}', 'AdminController@updateprofil');
    Route::post('/admin/deletesprofil/{id}', 'AdminController@deletesprofil');
    Route::get('/inventor/draft/{id}','ProposalController@draft');
    Route::get('/admin/draft/{id}','AdminController@draft');
    Route::get('/admin/datainventor', 'AdminController@datainventor');
    Route::get('/admin/dataproposal', 'AdminController@dataproposal');
    Route::get('/admin/reviewproposal', 'AdminController@reviewproposal');
    Route::get('/admin/lihatproposal/{id}', 'AdminController@lihatproposal');
    Route::patch('/adminprofil', 'AdminController@adminprofil');
    Route::patch('/admin/approveproposal/{id}', 'AdminController@approveproposal');
    Route::get('/superadmin/listproposal', 'SuperadminController@listproposal');
    Route::get('/superadmin/publishproposal', 'SuperadminController@publishproposal');
    Route::get('/superadmin/vote', 'SuperadminController@vote');
    Route::get('/superadmin/pemenang', 'SuperadminController@pemenang');
    Route::resources([
        'pengantarkota'=>'PengantarkotaController',
        'superadmin' => 'SuperadminController',
        'inventor' => 'InventorController',
        'admin' => 'AdminController',
        'juri' => 'JuriController',
        'permission' =>'PermissionController',
        'role' => 'RoleController',
        'proposal' => 'ProposalController',
        'user' => 'UserController',
        'adminkuesioner' => 'AdminkuesionerController',
        'berita' => 'ArticleController',
      ]);
});



