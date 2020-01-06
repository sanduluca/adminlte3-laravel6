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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/1', function () {
    return view('adminlte.dashboard1');
})->name('dashboard1');

Route::get('/dashboard/2', function () {
    return view('adminlte.dashboard2');
})->name('dashboard2');

Route::get('/dashboard/3', function () {
    return view('adminlte.dashboard3');
})->name('dashboard3');

Route::get('/widgets', function () {
    return view('adminlte.widgets');
})->name('widgets');

Route::get('/layout/top-nav', function () {
    return view('adminlte.layout.top-nav');
})->name('layout-top-nav');

Route::get('/layout/boxed', function () {
    return view('adminlte.layout.boxed');
})->name('layout-boxed');

Route::get('/layout/fixed-sidebar', function () {
    return view('adminlte.layout.fixed-sidebar');
})->name('layout-fixed-sidebar');

Route::get('/layout/fixed-topnav', function () {
    return view('adminlte.layout.fixed-topnav');
})->name('layout-fixed-topnav');

Route::get('/layout/fixed-footer', function () {
    return view('adminlte.layout.fixed-footer');
})->name('layout-fixed-footer');

Route::get('/layout/collapsed-sidebar', function () {
    return view('adminlte.layout.collapsed-sidebar');
})->name('layout-collapsed-sidebar');

Route::get('/charts/chartjs', function () {
    return view('adminlte.charts.chartjs');
})->name('charts-chartjs');

Route::get('/charts/flot', function () {
    return view('adminlte.charts.flot');
})->name('charts-flot');

Route::get('/charts/inline', function () {
    return view('adminlte.charts.inline');
})->name('charts-inline');

Route::get('/ui/general', function () {
    return view('adminlte.ui.general');
})->name('ui-general');

Route::get('/ui/icons', function () {
    return view('adminlte.ui.icons');
})->name('ui-icons');

Route::get('/ui/buttons', function () {
    return view('adminlte.ui.buttons');
})->name('ui-buttons');

Route::get('/ui/sliders', function () {
    return view('adminlte.ui.sliders');
})->name('ui-sliders');

Route::get('/ui/modals', function () {
    return view('adminlte.ui.modals');
})->name('ui-modals');

Route::get('/ui/navbar', function () {
    return view('adminlte.ui.navbar');
})->name('ui-navbar');

Route::get('/ui/timeline', function () {
    return view('adminlte.ui.timeline');
})->name('ui-timeline');

Route::get('/ui/ribbons', function () {
    return view('adminlte.ui.ribbons');
})->name('ui-ribbons');

Route::get('/forms/general', function () {
    return view('adminlte.forms.general');
})->name('forms-general');

Route::get('/forms/advanced', function () {
    return view('adminlte.forms.advanced');
})->name('forms-advanced');

Route::get('/forms/editors', function () {
    return view('adminlte.forms.editors');
})->name('forms-editors');

Route::get('/tables/simple', function () {
    return view('adminlte.tables.simple');
})->name('tables-simple');

Route::get('/tables/data', function () {
    return view('adminlte.tables.data');
})->name('tables-data');

Route::get('/tables/jsgrid', function () {
    return view('adminlte.tables.jsgrid');
})->name('tables-jsgrid');

Route::get('/calendar', function () {
    return view('adminlte.calendar');
})->name('calendar');

Route::get('/gallery', function () {
    return view('adminlte.gallery');
})->name('gallery');

Route::get('/mailbox/mailbox', function () {
    return view('adminlte.mailbox.mailbox');
})->name('mailbox-mailbox');

Route::get('/mailbox/compose', function () {
    return view('adminlte.mailbox.compose');
})->name('mailbox-compose');

Route::get('/mailbox/read-mail', function () {
    return view('adminlte.mailbox.read-mail');
})->name('mailbox-read-mail');

Route::get('/page/invoice', function () {
    return view('adminlte.example.invoice');
})->name('page-invoice');

Route::get('/page/profile', function () {
    return view('adminlte.example.profile');
})->name('page-profile');

Route::get('/page/e-commerce', function () {
    return view('adminlte.example.e-commerce');
})->name('page-e-commerce');

Route::get('/page/projects', function () {
    return view('adminlte.example.projects');
})->name('page-projects');

Route::get('/page/project/add', function () {
    return view('adminlte.example.project-add');
})->name('page-project-add');

Route::get('/page/project/edit', function () {
    return view('adminlte.example.project-edit');
})->name('page-project-edit');

Route::get('/page/project/details', function () {
    return view('adminlte.example.project-details');
})->name('page-project-details');

Route::get('/page/contacts', function () {
    return view('adminlte.example.contacts');
})->name('page-contacts');

Route::get('/extra/login', function () {
    return view('adminlte.example.login');
})->name('extra-login');

Route::get('/extra/register', function () {
    return view('adminlte.example.register');
})->name('extra-register');

Route::get('/extra/forgot-password', function () {
    return view('adminlte.example.forgot-password');
})->name('extra-forgot-password');

Route::get('/extra/recover-password', function () {
    return view('adminlte.example.recover-password');
})->name('extra-recover-password');

Route::get('/extra/lockscreen', function () {
    return view('adminlte.example.lockscreen');
})->name('extra-lockscreen');

Route::get('/extra/legacy-user-menu', function () {
    return view('adminlte.example.legacy-user-menu');
})->name('extra-legacy-user-menu');

Route::get('/extra/language-menu', function () {
    return view('adminlte.example.language-menu');
})->name('extra-language-menu');

Route::get('/extra/404', function () {
    return view('adminlte.example.404');
})->name('extra-404');

Route::get('/extra/500', function () {
    return view('adminlte.example.500');
})->name('extra-500');

Route::get('/extra/pace', function () {
    return view('adminlte.example.pace');
})->name('extra-pace');

Route::get('/extra/blank', function () {
    return view('adminlte.example.blank');
})->name('extra-blank');

Route::get('/extra/starter', function () {
    return view('adminlte.example.starter');
})->name('extra-starter');




