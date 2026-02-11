<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');



    Route::get('/research-support-service', 'research_support_services')->name('research_support_services');
    Route::get('/formulation-development', 'formulation_development')->name('formulation_development');
    Route::get('/tablet-manufacturing', 'tablet_manufacturing')->name('tablet_manufacturing');
    Route::get('/liquid-filled-capsules', 'liquid_capsules')->name('liquid_capsules');
    Route::get('/spary-dried-dispersions', 'spray_dried')->name('spray_dried');
    Route::get('/powder-filled-capsules', 'powder_filled')->name('powder_filled');
    Route::get('/blinded-study-materials', 'blinded_study')->name('blinded_study');
    Route::get('/potent-handling-capabilities', 'potent_handling')->name('potent_handling');
    Route::get('/wet-nanomilling', 'nanomilling')->name('nanomilling');
    Route::get('/terminal-sterilization', 'terminal_sterilization')->name('terminal_sterilization');
    Route::get('/other-manufacturing', 'other_manufacturing')->name('other_manufacturing');
    Route::get('/packaging-components', 'packaging_components')->name('packaging_components');
    Route::get('/pharmaceutical-product-release-testing', 'product_release_testing')->name('product_release_testing');
    Route::get('/method-development', 'method_development')->name('method_development');
    Route::get('/stability-storage-and-testing', 'storage_testing')->name('storage_testing');

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

    Route::get('/coming-soon/{page?}', 'show')->name('coming.soon');

    Route::get('/development_programs', 'development_programs')->name('development_programs');
    Route::get('/jobs/{slug}', 'show_job')->name('jobs.show');
    Route::get('/therapeutic-areas', 'therapeutic_areas')->name('therapeutic');
    Route::get('/packaging_materials', 'packaging_materials')->name('packaging_materials');
    Route::get('/bioanalytical_service', 'bioanalytical_service')->name('bioanalytical_service');
    Route::get('/machinery_equipment', 'machinery_equipment')->name('machinery_equipment');
    Route::get('/quality_safety', 'quality_safety')->name('quality_safety');
    Route::get('/blog/{id}', 'show_blog')->name('blogs.show');

    Route::post('/career/send-otp', 'sendOtp')->name('career_sendOtp');
    Route::post('/career/apply', 'apply_career')->name('career_apply');
    Route::get('/all-events', 'all_events')->name('events');
    Route::get('/events/{id}', 'show_event')->name('events.show');
    Route::get('/code-of-conduct', 'code_of_conduct')->name('code_of_conduct');
    Route::get('/productss', 'all_chemicals')->name('all_chemicals');
    Route::get('/productss/{id}', 'show_chemical')->name('chemicals_show');
});
Route::get('/cookie-policy', function () {
    return view('cookie_policy');
})->name('cookie_policy');

Route::get('/locations', function () {
    return view('locations');
})->name('locations');

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');


// Route::get('/therapeutic-areas', function () {
//     return view('therapeutic-areas');
// })->name('therapeutic');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::middleware(['auth'])
    ->controller(AdminController::class)
    ->group(function (): void {

        Route::get('/add-product', 'add_product')->name('add_product');
        Route::get('/add-chemical', 'add_chemical')->name('add_chemical');
        Route::post('/add-chemical', 'save_chemical')->name('save_chemical');
        Route::post('/add-chemical', 'save_chemical')->name('save_chemical');

        Route::post('/add-product', 'save_product')->name('save_product');
        Route::get('/edit-chemical/{id}', 'edit_product')->name('edit_product');

        Route::post('/edit-chemical/{id}', 'update_chemical')->name('update_chemical');
        Route::delete('/chemical/{id}', 'delete_chemical')->name('delete_chemical');
        Route::get('/chemicals', 'all_products')->name('all_product');

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

        Route::get('/categories', 'categories')->name('categories.index');
        Route::get('/categories/create', 'create_category')->name('categories.create');
        Route::post('/categories/store', 'store_category')->name('categories.store');
        Route::get('/categories/{id}/edit', 'edit_category')->name('categories.edit');
        Route::post('/categories/{id}/update', 'update_category')->name('categories.update');
        Route::delete('/categories/{id}', 'destroy_category')->name('categories.destroy');



        Route::get('/blogs', 'all_blogs')->name('blogs.index');
        Route::get('/blogs/create', 'create_blogs')->name('blogs.create');
        Route::post('/blogs/store', 'store_blogs')->name('blogs.store');
        Route::get('/blogs/edit/{id}', 'edit_blogs')->name('blogs.edit');
        Route::post('/blogs/update/{id}', 'update_blogs')->name('blogs.update');
        Route::delete('/blogs/delete/{id}', 'delete_blogs')->name('blogs.destroy');

        Route::post('/chemical/image/delete', 'deleteChemicalImage')
            ->name('delete_chemical_image');

        Route::get('/events', 'all_events')->name('events.index');
        Route::get('/events/create', 'create_events')->name('events.create');
        Route::post('/events/store', 'store_events')->name('events.store');

        Route::get('/events/edit/{id}', 'edit_events')->name('events.edit');
        Route::post('/events/update/{id}', 'update_events')->name('events.update');

        Route::post('/events/delete/{id}', 'destroy_events')->name('events.delete');



        Route::get('/subcategories', function (Request $request) {
            return Category::where('parent_id', $request->category_id)
                ->where('status', 1)
                ->get();
        })->name('get.subcategories');

    });


require __DIR__ . '/auth.php';
