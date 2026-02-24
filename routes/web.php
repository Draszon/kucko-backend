<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'throttle:60,1'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Kiket várunk
    Route::put('/admin/waiting-for-items/{waitingForItem}', [AdminController::class, 'updateWaitingForItem'])->name('admin.waiting-for-items.update');

    // Kik vagyunk (CRUD)
    Route::post('/admin/team-members', [AdminController::class, 'storeTeamMember'])->name('admin.team-members.store');
    Route::put('/admin/team-members/{teamMember}', [AdminController::class, 'updateTeamMember'])->name('admin.team-members.update');
    Route::delete('/admin/team-members/{teamMember}', [AdminController::class, 'destroyTeamMember'])->name('admin.team-members.destroy');

    // Galéria (CRUD)
    Route::post('/admin/gallery-images', [AdminController::class, 'storeGalleryImage'])->name('admin.gallery-images.store');
    Route::put('/admin/gallery-images/{galleryImage}', [AdminController::class, 'updateGalleryImage'])->name('admin.gallery-images.update');
    Route::delete('/admin/gallery-images/{galleryImage}', [AdminController::class, 'destroyGalleryImage'])->name('admin.gallery-images.destroy');

    // Rólunk mondták (CRUD)
    Route::post('/admin/testimonials', [AdminController::class, 'storeTestimonial'])->name('admin.testimonials.store');
    Route::put('/admin/testimonials/{testimonial}', [AdminController::class, 'updateTestimonial'])->name('admin.testimonials.update');
    Route::delete('/admin/testimonials/{testimonial}', [AdminController::class, 'destroyTestimonial'])->name('admin.testimonials.destroy');

    // Áraink (CRUD)
    Route::post('/admin/pricing-plans', [AdminController::class, 'storePricingPlan'])->name('admin.pricing-plans.store');
    Route::put('/admin/pricing-plans/{pricingPlan}', [AdminController::class, 'updatePricingPlan'])->name('admin.pricing-plans.update');
    Route::delete('/admin/pricing-plans/{pricingPlan}', [AdminController::class, 'destroyPricingPlan'])->name('admin.pricing-plans.destroy');

    // Felvételi
    Route::put('/admin/admission-subjects/{admissionSubject}', [AdminController::class, 'updateAdmissionSubject'])->name('admin.admission-subjects.update');
    Route::put('/admin/admission-prices/{admissionPrice}', [AdminController::class, 'updateAdmissionPrice'])->name('admin.admission-prices.update');

    // Terembérlés
    Route::put('/admin/room-rentals/{roomRental}', [AdminController::class, 'updateRoomRental'])->name('admin.room-rentals.update');

    // Elérhetőségek (CRUD)
    Route::post('/admin/contacts', [AdminController::class, 'storeContact'])->name('admin.contacts.store');
    Route::put('/admin/contacts/{contact}', [AdminController::class, 'updateContact'])->name('admin.contacts.update');
    Route::delete('/admin/contacts/{contact}', [AdminController::class, 'destroyContact'])->name('admin.contacts.destroy');
});
