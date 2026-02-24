<?php

namespace App\Http\Controllers;

use App\Models\WaitingForItem;
use App\Models\TeamMember;
use App\Models\GalleryImage;
use App\Models\Testimonial;
use App\Models\PricingPlan;
use App\Models\AdmissionSubject;
use App\Models\AdmissionPrice;
use App\Models\RoomRental;
use App\Models\Contact;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        return Inertia::render('Main', [
            'waitingForBlocks' => WaitingForItem::active()->ordered()->blocks()->get(),
            'waitingForListItems' => WaitingForItem::active()->ordered()->listItems()->get(),
            'teamMembers' => TeamMember::active()->ordered()->get(),
            'galleryImages' => GalleryImage::active()->ordered()->get(),
            'testimonials' => Testimonial::active()->ordered()->get(),
            'pricingPlans' => PricingPlan::active()->ordered()->get(),
            'admissionSubjects' => AdmissionSubject::active()->ordered()->get(),
            'admissionPrices' => AdmissionPrice::active()->ordered()->get(),
            'roomRentals' => RoomRental::active()->ordered()->get(),
            'contacts' => Contact::getAllAsArray(),
        ]);
    }
}
