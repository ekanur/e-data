<?php

use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

Route::get('/', function(){
    return view("front.index");
})->name('home');

// formulir karya ilmiah
Route::get('/data-mahasiswa', function(){
    return view("front.data-mahasiswa");
})->name('data-mahasiswa');

Route::get('/data-akademik', function(){
    return view("front.data-akademik");
})->name('data-akademik');

Route::get('/data-karya-ilmiah', function(){
    return view("front.data-karya-ilmiah");
})->name('data-karya-ilmiah');

//halaman e data coba
Route::get('/e-data',function(){
    return view("front.e-data");
})->name('e-data');

//halaman about us coba
Route::get('/about-us',function(){
    return view("front.about-us");
})->name('about-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () use ($controller_path) {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    // Main Page Route
    Route::prefix('admin')->group(function() use ($controller_path){
        Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
        Route::get("/jurusan", $controller_path . '\master_data\JurusanController@index')->name('jurusan');
        Route::post("/jurusan", $controller_path . '\master_data\JurusanController@create')->name('jurusan-create');
        Route::get("/jurusan/{id}", $controller_path . '\master_data\JurusanController@edit')->name('jurusan-edit');
        Route::post("/jurusan-update", $controller_path . '\master_data\JurusanController@update')->name('jurusan-update');
        Route::delete("/jurusan-delete/{id}", $controller_path . '\master_data\JurusanController@delete')->name('jurusan-delete');

        Route::get("/prodi", $controller_path . '\master_data\ProdiController@index')->name('prodi');
        Route::post("/prodi", $controller_path . '\master_data\ProdiController@create')->name('prodi-create');
        Route::get("/prodi/{id}", $controller_path . '\master_data\ProdiController@edit')->name('prodi-edit');
        Route::post("/prodi-update", $controller_path . '\master_data\ProdiController@update')->name('prodi-update');
        Route::delete("/prodi-delete/{id}", $controller_path . '\master_data\ProdiController@delete')->name('prodi-delete');

        Route::get("/jenis-dokumen", $controller_path . '\master_data\JenisDokumenController@index')->name('jenis-dokumen');
        Route::post("/jenis-dokumen", $controller_path . '\master_data\JenisDokumenController@create')->name('jenis-dokumen-create');
        Route::get("/jenis-dokumen/{id}", $controller_path . '\master_data\JenisDokumenController@edit')->name('jenis-dokumen-edit');
        Route::post("/jenis-dokumen-update", $controller_path . '\master_data\JenisDokumenController@update')->name('jenis-dokumen-update');
        Route::delete("/jenis-dokumen-delete/{id}", $controller_path . '\master_data\JenisDokumenController@delete')->name('jenis-dokumen-delete');

        Route::get("/karya-ilmiah", $controller_path . '\admin\DokumenController@index')->name('karya-ilmiah');
        Route::post("/karya-ilmiah", $controller_path . '\admin\DokumenController@create')->name('karya-ilmiah-create');
        Route::get("/karya-ilmiah/{id}", $controller_path . '\admin\DokumenController@edit')->name('karya-ilmiah-edit');
        Route::post("/karya-ilmiah-update", $controller_path . '\admin\DokumenController@update')->name('karya-ilmiah-update');
        Route::delete("/karya-ilmiah-delete/{id}", $controller_path . '\admin\DokumenController@delete')->name('karya-ilmiah-delete');
        Route::get("/karya-ilmiah-add", $controller_path . '\admin\DokumenController@add')->name("karya-ilmiah-add");
    });

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');


});
