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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Sanitize validated data - strip HTML tags from all string values.
     */
    private function sanitize(array $data): array
    {
        return collect($data)->map(function ($value) {
            if (is_string($value)) {
                return strip_tags(trim($value));
            }
            if (is_array($value)) {
                return array_map(fn ($v) => is_string($v) ? strip_tags(trim($v)) : $v, $value);
            }
            return $value;
        })->all();
    }

    public function index()
    {
        return Inertia::render('Dashboard', [
            'waitingForBlocks' => WaitingForItem::ordered()->blocks()->get(),
            'waitingForListItems' => WaitingForItem::ordered()->listItems()->get(),
            'teamMembers' => TeamMember::ordered()->get(),
            'galleryImages' => GalleryImage::ordered()->get(),
            'testimonials' => Testimonial::ordered()->get(),
            'pricingPlans' => PricingPlan::ordered()->get(),
            'admissionSubjects' => AdmissionSubject::ordered()->get(),
            'admissionPrices' => AdmissionPrice::ordered()->get(),
            'roomRentals' => RoomRental::ordered()->get(),
            'contacts' => Contact::ordered()->get(),
        ]);
    }

    // ═══════════════════════════════════════
    // Kiket várunk - blokkok & lista elemek
    // ═══════════════════════════════════════
    public function updateWaitingForItem(Request $request, WaitingForItem $waitingForItem)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:5000',
            'icon_type' => 'nullable|string|max:50|in:clock,clipboard,smile',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $waitingForItem->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Elem sikeresen frissítve!');
    }

    // ═══════════════════════════════════════
    // Kik vagyunk (CRUD)
    // ═══════════════════════════════════════
    public function storeTeamMember(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'bio' => 'nullable|string|max:5000',
            'facebook_url' => ['nullable', 'url', 'max:500', 'regex:/^https?:\/\//'],
            'email' => 'nullable|email|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $data = $this->sanitize(collect($validated)->except(['image_path'])->all());

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('images/team', 'public');
        }

        TeamMember::create($data);

        return redirect()->back()->with('message', 'Csapattag sikeresen hozzáadva!');
    }

    public function updateTeamMember(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'bio' => 'nullable|string|max:5000',
            'facebook_url' => ['nullable', 'url', 'max:500', 'regex:/^https?:\/\//'],
            'email' => 'nullable|email|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $data = $this->sanitize(collect($validated)->except(['image_path'])->all());

        if ($request->hasFile('image_path')) {
            if ($teamMember->image_path) {
                Storage::disk('public')->delete($teamMember->image_path);
            }
            $data['image_path'] = $request->file('image_path')->store('images/team', 'public');
        }

        $teamMember->update($data);

        return redirect()->back()->with('message', 'Csapattag sikeresen frissítve!');
    }

    public function destroyTeamMember(TeamMember $teamMember)
    {
        if ($teamMember->image_path) {
            Storage::disk('public')->delete($teamMember->image_path);
        }

        $teamMember->delete();

        return redirect()->back()->with('message', 'Csapattag sikeresen törölve!');
    }

    // ═══════════════════════════════════════
    // Galéria (CRUD)
    // ═══════════════════════════════════════
    public function storeGalleryImage(Request $request)
    {
        $validated = $request->validate([
            'image_path' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:2000',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $data = $this->sanitize(collect($validated)->except(['image_path'])->all());
        $data['image_path'] = $request->file('image_path')->store('images/gallery', 'public');

        GalleryImage::create($data);

        return redirect()->back()->with('message', 'Kép sikeresen hozzáadva!');
    }

    public function updateGalleryImage(Request $request, GalleryImage $galleryImage)
    {
        $validated = $request->validate([
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:2000',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $data = $this->sanitize(collect($validated)->except(['image_path'])->all());

        if ($request->hasFile('image_path')) {
            if ($galleryImage->image_path) {
                Storage::disk('public')->delete($galleryImage->image_path);
            }
            $data['image_path'] = $request->file('image_path')->store('images/gallery', 'public');
        }

        $galleryImage->update($data);

        return redirect()->back()->with('message', 'Kép sikeresen frissítve!');
    }

    public function destroyGalleryImage(GalleryImage $galleryImage)
    {
        if ($galleryImage->image_path) {
            Storage::disk('public')->delete($galleryImage->image_path);
        }

        $galleryImage->delete();

        return redirect()->back()->with('message', 'Kép sikeresen törölve!');
    }

    // ═══════════════════════════════════════
    // Rólunk mondták (CRUD)
    // ═══════════════════════════════════════
    public function storeTestimonial(Request $request)
    {
        $validated = $request->validate([
            'quote' => 'required|string|max:5000',
            'author_name' => 'required|string|max:255',
            'author_role' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        Testimonial::create($this->sanitize($validated));

        return redirect()->back()->with('message', 'Vélemény sikeresen hozzáadva!');
    }

    public function updateTestimonial(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'quote' => 'required|string|max:5000',
            'author_name' => 'required|string|max:255',
            'author_role' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $testimonial->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Vélemény sikeresen frissítve!');
    }

    public function destroyTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->back()->with('message', 'Vélemény sikeresen törölve!');
    }

    // ═══════════════════════════════════════
    // Áraink (CRUD)
    // ═══════════════════════════════════════
    public function storePricingPlan(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0|max:9999999',
            'price_unit' => 'required|string|max:50',
            'features' => 'nullable|array|max:20',
            'features.*' => 'required|string|max:500',
            'sibling_discount' => 'nullable|string|max:255',
            'is_featured' => 'required|boolean',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        PricingPlan::create($this->sanitize($validated));

        return redirect()->back()->with('message', 'Árazás sikeresen hozzáadva!');
    }

    public function updatePricingPlan(Request $request, PricingPlan $pricingPlan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0|max:9999999',
            'price_unit' => 'required|string|max:50',
            'features' => 'nullable|array|max:20',
            'features.*' => 'required|string|max:500',
            'sibling_discount' => 'nullable|string|max:255',
            'is_featured' => 'required|boolean',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $pricingPlan->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Árazás sikeresen frissítve!');
    }

    public function destroyPricingPlan(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();

        return redirect()->back()->with('message', 'Árazás sikeresen törölve!');
    }

    // ═══════════════════════════════════════
    // Felvételi - tantárgyak
    // ═══════════════════════════════════════
    public function updateAdmissionSubject(Request $request, AdmissionSubject $admissionSubject)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:5000',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $admissionSubject->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Tantárgy sikeresen frissítve!');
    }

    // ═══════════════════════════════════════
    // Felvételi - árak
    // ═══════════════════════════════════════
    public function updateAdmissionPrice(Request $request, AdmissionPrice $admissionPrice)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $admissionPrice->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Felvételi ár sikeresen frissítve!');
    }

    // ═══════════════════════════════════════
    // Terembérlés
    // ═══════════════════════════════════════
    public function updateRoomRental(Request $request, RoomRental $roomRental)
    {
        $validated = $request->validate([
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:5000',
            'price_label' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
            'is_active' => 'required|boolean',
        ]);

        $data = $this->sanitize(collect($validated)->except(['image_path'])->all());

        if ($request->hasFile('image_path')) {
            if ($roomRental->image_path) {
                Storage::disk('public')->delete($roomRental->image_path);
            }
            $data['image_path'] = $request->file('image_path')->store('images/room-rentals', 'public');
        }

        $roomRental->update($data);

        return redirect()->back()->with('message', 'Terembérlés sikeresen frissítve!');
    }

    // ═══════════════════════════════════════
    // Elérhetőségek (CRUD)
    // ═══════════════════════════════════════
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'value' => 'required|string|max:2000',
            'label' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
        ]);

        $data = $this->sanitize($validated);
        $data['key'] = \Illuminate\Support\Str::slug($data['label'], '_');

        // Ha a generált kulcs már létezik, tegyünk mögé sorszámot
        $baseKey = $data['key'];
        $counter = 1;
        while (Contact::where('key', $data['key'])->exists()) {
            $data['key'] = $baseKey . '_' . $counter++;
        }

        Contact::create($data);

        return redirect()->back()->with('message', 'Elérhetőség sikeresen hozzáadva!');
    }

    public function updateContact(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'value' => 'required|string|max:2000',
            'label' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0|max:999',
        ]);

        $contact->update($this->sanitize($validated));

        return redirect()->back()->with('message', 'Elérhetőség sikeresen frissítve!');
    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('message', 'Elérhetőség sikeresen törölve!');
    }
}
