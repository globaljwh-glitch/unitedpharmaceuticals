<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('/research-support-service', 'research_support_services')->name('research_support_services');
    Route::get('/formulation-development','formulation_development')->name('formulation_development');
    Route::get('/tablet-manufacturing','tablet_manufacturing')->name('tablet_manufacturing');
    Route::get('/liquid-filled-capsules','liquid_capsules')->name('liquid_capsules');
    Route::get('/spary-dried-dispersions','spray_dried')->name('spray_dried');
    Route::get('/powder-filled-capsules','powder_filled')->name('powder_filled');
    Route::get('/blinded-study-materials','blinded_study')->name('blinded_study');
    Route::get('/potent-handling-capabilities','potent_handling')->name('potent_handling');
    Route::get('/wet-nanomilling','nanomilling')->name('nanomilling');
    Route::get('/terminal-sterilization','terminal_sterilization')->name('terminal_sterilization');
    Route::get('/other-manufacturing','other_manufacturing')->name('other_manufacturing');
    Route::get('/packaging-components','packaging_components')->name('packaging_components');
    Route::get('/pharmaceutical-product-release-testing','product_release_testing')->name('product_release_testing');
    Route::get('/method-development','method_development')->name('method_development');
    Route::get('/stability-storage-and-testing','storage_testing')->name('storage_testing');

    Route::get('/about', 'about_us')->name('about');
    Route::get('/career', 'career')->name('career');
    Route::get('/contact', 'Contact_us')->name('contact');
    Route::get('/sample', 'Sample')->name('sample');
    Route::get('/enquiry', 'Enquiry')->name('enquiry');
    Route::get('/preclinical-services', 'preclinical_services')->name('preclinical_services');
    Route::get('/clinical-services', 'clinical_services')->name('clinical_services');
    Route::get('/manufacturing-and-analytical-services', 'manufacturing_analytic')->name('manufacturing_analytic');
    Route::post('/request-sample', 'storeSample')->name('request.sample.store');
    Route::post('/contact-us', 'storeContact')->name('contact.us.store');

    Route::get('/coming-soon/{page?}','show')->name('coming.soon');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::middleware(['auth'])
    ->controller(AdminController::class)
    ->group(function (): void {

        Route::get('/add-product', 'add_product')->name('add_product');
        Route::post('/add-product', 'save_product')->name('save_product');
        Route::get('/edit-product/{id}', 'edit_product')->name('edit_product');
        Route::post('/edit-product/{id}', 'update_product')->name('update_product');
        Route::delete('/products/{id}', 'delete_product')->name('del_product');
        Route::get('/products', 'all_products')->name('all_product');

        Route::get('/add-careers', 'create_career')->name('career.create');
        Route::post('/add-careers', 'save_career')->name('career.store');
        Route::get('/careers', 'all_careers')->name('career.index');
        Route::get('/edit-careers/{id}', 'edit_career')->name('career.edit');
        Route::post('/edit-careers/{id}', 'update_career')->name('career.update');
        Route::delete('/careers/{id}', 'delete_career')->name('career.destroy');
        Route::get('/all-requests', 'all_career_requests')->name('career.requests');

        Route::get('/all-orders', 'all_orders')->name('all_orders');
        Route::get('/contact-requests', 'all_contact_requests')->name('contact_requests');

        Route::get('/settings', 'settings')->name('settings');

    });


require __DIR__ . '/auth.php';
