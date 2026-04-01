<?php

use App\Http\Controllers\Cms\About\AboutContentController;
use App\Http\Controllers\Cms\About\AboutMapController;
use App\Http\Controllers\Cms\AuthController;
use App\Http\Controllers\Cms\Clients\MerchantContentController;
use App\Http\Controllers\Cms\ComplaintController;
use App\Http\Controllers\Cms\Contact\ContactPageController;
use App\Http\Controllers\Cms\ContactRequestController;
use App\Http\Controllers\Cms\DashboardController;
use App\Http\Controllers\Cms\Home\CustomerController;
use App\Http\Controllers\Cms\Home\FooterController;
use App\Http\Controllers\Cms\Home\HomeContentController;
use App\Http\Controllers\Cms\Jobs\JobsCmsController;
use App\Http\Controllers\Cms\NewsController;
use App\Http\Controllers\Cms\Partners\SupplierContentController;
use App\Http\Controllers\Cms\Support\SupportCmsController;
use App\Http\Controllers\Cms\TermsController;
use Illuminate\Support\Facades\Route;

Route::prefix('cp')->name('cp.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware(['auth', 'cms.admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        Route::prefix('home')->name('home.')->group(function () {
            Route::get('hero', [HomeContentController::class, 'editHero'])->name('hero');
            Route::put('hero', [HomeContentController::class, 'updateHero'])->name('hero.update');
            Route::get('features', [HomeContentController::class, 'editFeatures'])->name('features');
            Route::put('features', [HomeContentController::class, 'updateFeatures'])->name('features.update');
            Route::get('marketing', [HomeContentController::class, 'editMarketing'])->name('marketing');
            Route::put('marketing', [HomeContentController::class, 'updateMarketing'])->name('marketing.update');
            Route::get('partners', [HomeContentController::class, 'editPartners'])->name('partners');
            Route::put('partners', [HomeContentController::class, 'updatePartners'])->name('partners.update');
            Route::resource('customers', CustomerController::class)->except(['show']);
            Route::get('qa', [HomeContentController::class, 'editQa'])->name('qa');
            Route::put('qa', [HomeContentController::class, 'updateQa'])->name('qa.update');
            Route::get('bottom', [HomeContentController::class, 'editBottom'])->name('bottom');
            Route::put('bottom', [HomeContentController::class, 'updateBottom'])->name('bottom.update');
            Route::get('footer', [FooterController::class, 'edit'])->name('footer');
            Route::put('footer', [FooterController::class, 'update'])->name('footer.update');
        });

        Route::prefix('clients')->name('clients.')->group(function () {
            Route::get('merchant', [MerchantContentController::class, 'editMerchant'])->name('merchant');
            Route::put('merchant', [MerchantContentController::class, 'updateMerchant'])->name('merchant.update');
            Route::get('motivation', [MerchantContentController::class, 'editMotivation'])->name('motivation');
            Route::put('motivation', [MerchantContentController::class, 'updateMotivation'])->name('motivation.update');
            Route::get('steps', [MerchantContentController::class, 'editSteps'])->name('steps');
            Route::put('steps', [MerchantContentController::class, 'updateSteps'])->name('steps.update');
        });

        Route::prefix('partners')->name('partners.')->group(function () {
            Route::get('hero', [SupplierContentController::class, 'editHero'])->name('hero');
            Route::put('hero', [SupplierContentController::class, 'updateHero'])->name('hero.update');
            Route::get('middle', [SupplierContentController::class, 'editMiddle'])->name('middle');
            Route::put('middle', [SupplierContentController::class, 'updateMiddle'])->name('middle.update');
            Route::get('bottom', [SupplierContentController::class, 'editBottom'])->name('bottom');
            Route::put('bottom', [SupplierContentController::class, 'updateBottom'])->name('bottom.update');
        });

        Route::prefix('about')->name('about.')->group(function () {
            Route::get('banner', [AboutContentController::class, 'editBanner'])->name('banner');
            Route::put('banner', [AboutContentController::class, 'updateBanner'])->name('banner.update');
            Route::get('vision', [AboutContentController::class, 'editVision'])->name('vision');
            Route::put('vision', [AboutContentController::class, 'updateVision'])->name('vision.update');
            Route::get('values', [AboutContentController::class, 'editValues'])->name('values');
            Route::put('values', [AboutContentController::class, 'updateValues'])->name('values.update');
            Route::get('map', [AboutMapController::class, 'edit'])->name('map');
            Route::put('map', [AboutMapController::class, 'update'])->name('map.update');
        });

        Route::resource('news', NewsController::class)->except(['show']);

        Route::prefix('jobs')->name('jobs.')->group(function () {
            Route::get('hero', [JobsCmsController::class, 'heroInfo'])->name('hero');
            Route::get('categories', [JobsCmsController::class, 'categoriesIndex'])->name('categories.index');
            Route::get('categories/create', [JobsCmsController::class, 'categoriesCreate'])->name('categories.create');
            Route::post('categories', [JobsCmsController::class, 'categoriesStore'])->name('categories.store');
            Route::get('categories/{category}/edit', [JobsCmsController::class, 'categoriesEdit'])->name('categories.edit');
            Route::put('categories/{category}', [JobsCmsController::class, 'categoriesUpdate'])->name('categories.update');
            Route::delete('categories/{category}', [JobsCmsController::class, 'categoriesDestroy'])->name('categories.destroy');

            Route::get('positions', [JobsCmsController::class, 'positionsIndex'])->name('positions.index');
            Route::get('positions/create', [JobsCmsController::class, 'positionsCreate'])->name('positions.create');
            Route::post('positions', [JobsCmsController::class, 'positionsStore'])->name('positions.store');
            Route::get('positions/{position}/edit', [JobsCmsController::class, 'positionsEdit'])->name('positions.edit');
            Route::put('positions/{position}', [JobsCmsController::class, 'positionsUpdate'])->name('positions.update');
            Route::delete('positions/{position}', [JobsCmsController::class, 'positionsDestroy'])->name('positions.destroy');
        });

        Route::prefix('support')->name('support.')->group(function () {
            Route::get('hero', [SupportCmsController::class, 'editHero'])->name('hero');
            Route::put('hero', [SupportCmsController::class, 'updateHero'])->name('hero.update');
            Route::get('content', [SupportCmsController::class, 'editContent'])->name('content');
            Route::put('content', [SupportCmsController::class, 'updateContent'])->name('content.update');
            Route::get('categories', [SupportCmsController::class, 'categoriesIndex'])->name('categories.index');
            Route::get('categories/create', [SupportCmsController::class, 'categoriesCreate'])->name('categories.create');
            Route::post('categories', [SupportCmsController::class, 'categoriesStore'])->name('categories.store');
            Route::get('categories/{category}/edit', [SupportCmsController::class, 'categoriesEdit'])->name('categories.edit');
            Route::put('categories/{category}', [SupportCmsController::class, 'categoriesUpdate'])->name('categories.update');
            Route::delete('categories/{category}', [SupportCmsController::class, 'categoriesDestroy'])->name('categories.destroy');
            Route::get('contact', [SupportCmsController::class, 'editContact'])->name('contact');
            Route::put('contact', [SupportCmsController::class, 'updateContact'])->name('contact.update');
        });

        Route::get('terms', [TermsController::class, 'edit'])->name('terms.edit');
        Route::put('terms', [TermsController::class, 'update'])->name('terms.update');

        Route::get('contact-page', [ContactPageController::class, 'edit'])->name('contact-page.edit');
        Route::put('contact-page', [ContactPageController::class, 'update'])->name('contact-page.update');

        Route::get('contact-requests', [ContactRequestController::class, 'index'])->name('contact-requests.index');
        Route::get('contact-requests/{contact_request}', [ContactRequestController::class, 'show'])->name('contact-requests.show');
        Route::put('contact-requests/{contact_request}', [ContactRequestController::class, 'update'])->name('contact-requests.update');

        Route::get('complaints', [ComplaintController::class, 'index'])->name('complaints.index');
        Route::get('complaints/{complaint}', [ComplaintController::class, 'show'])->name('complaints.show');
        Route::put('complaints/{complaint}', [ComplaintController::class, 'update'])->name('complaints.update');
    });
});
