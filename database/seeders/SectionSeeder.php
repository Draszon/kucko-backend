<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WaitingForItem;
use App\Models\TeamMember;
use App\Models\GalleryImage;
use App\Models\Testimonial;
use App\Models\PricingPlan;
use App\Models\AdmissionSubject;
use App\Models\AdmissionPrice;
use App\Models\RoomRental;
use App\Models\Contact;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        // Törölj mindent újra-seedelés előtt
        WaitingForItem::truncate();
        TeamMember::truncate();
        GalleryImage::truncate();
        Testimonial::truncate();
        PricingPlan::truncate();
        AdmissionSubject::truncate();
        AdmissionPrice::truncate();
        RoomRental::truncate();
        Contact::truncate();

        // ═══════════════════════════════════════
        // Kiket várunk - info blokkok
        // ═══════════════════════════════════════
        WaitingForItem::insert([
            [
                'title' => 'Felső tagozatos tanulók',
                'description' => 'Tanulószobánkba általános iskola felső tagozatos tanulókat várunk, hétfőtől péntekig 13:30-tól 16:00-ig biztosítjuk a felügyeletüket. Igény szerint ettől el tudunk térni.',
                'icon_type' => 'clock',
                'type' => 'block',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Házi feladat elkészítése',
                'description' => 'Elkészítjük az írásbeli házi feladatokat, mindenki megtanulja a szóbeli feladatokat, amit aztán ki is kérdezünk. Ha szükségesnek érezzük, még gyakoroljuk az anyagot.',
                'icon_type' => 'clipboard',
                'type' => 'block',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pihenés és játék',
                'description' => 'Ha mindezzel készen vagyunk, lazítunk, pihenünk – társasjáték, beszélgetés, testmozgás. A könyveket és a füzeteket a tanulószobában is lehet hagyni.',
                'icon_type' => 'smile',
                'type' => 'block',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Kiket várunk - lista elemek (oldalsó kártya)
        WaitingForItem::insert([
            [
                'title' => 'Felső tagozatos tanulók (5-8. osztály)',
                'description' => '',
                'icon_type' => null,
                'type' => 'list_item',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hétfő-péntek: 13:30 - 16:00',
                'description' => '',
                'icon_type' => null,
                'type' => 'list_item',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kis létszámú csoportok',
                'description' => '',
                'icon_type' => null,
                'type' => 'list_item',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tanszerek tárolása helyben',
                'description' => '',
                'icon_type' => null,
                'type' => 'list_item',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Kik vagyunk
        // ═══════════════════════════════════════
        TeamMember::create([
            'name' => 'Borosné Müller Tímea',
            'role' => 'Alapító, tanár',
            'image_path' => '/images/profilkep.webp',
            'bio' => "Borosné Müller Tímea vagyok, a Kuckó Tanulószoba alapítója.\n\nPályafutásomat napközis nevelőként kezdtem.\n\nSajnos a mai közoktatásban nem minden gyermek kapja meg azt a figyelmet és segítséget, amire szüksége lenne.",
            'facebook_url' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // ═══════════════════════════════════════
        // Galéria
        // ═══════════════════════════════════════
        GalleryImage::insert([
            [
                'image_path' => '/images/galery/kucko1.webp',
                'title' => 'Nagy tanulószoba',
                'description' => 'Ez a fő termünk, itt lehet a legtöbb gyerekkel egyszerre foglalkozni.',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => '/images/galery/kucko2.webp',
                'title' => 'Kis tanulószoba',
                'description' => 'Ez pedig a másik kép szövege!',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Rólunk mondták
        // ═══════════════════════════════════════
        Testimonial::insert([
            [
                'quote' => "Azt mondta ma az egyik tanítványom, hogy 'Timi, régebben nem értettem a geometriát, de mióta hozzád járok, már tudom!' - Ennél szebb dicséret nem is kell egy matektanárnak!",
                'author_name' => 'Timi',
                'author_role' => 'Tanár',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quote' => 'Nagyon sokat fejlődtem matekból, mióta a Tanulószobába járok. A tanárok kedvesek és türelmesek, mindent érthetően elmagyaráznak.',
                'author_name' => 'Anna',
                'author_role' => 'Diák',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quote' => 'A gyerekem osztályzatai sokat javultak, amióta ide jár. Köszönjük a lelkiismeretes munkát és a sok törődést!',
                'author_name' => 'Katalin',
                'author_role' => 'Szülő',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quote' => 'Végre megszerettem a matekot! A tanárok olyan jól magyaráznak, hogy már alig várom az órákat.',
                'author_name' => 'Dávid',
                'author_role' => 'Diák',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quote' => 'Profi csapat, akik valóban törődnek a diákokkal. A fiam magabiztosan ment el az érettségire a felkészítésnek köszönhetően.',
                'author_name' => 'László',
                'author_role' => 'Szülő',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Tanszobai árak
        // ═══════════════════════════════════════
        PricingPlan::insert([
            [
                'title' => 'Heti 2 délután',
                'subtitle' => 'Kipróbáláshoz ideális',
                'price' => 32000,
                'price_unit' => 'Ft/hó',
                'features' => json_encode(['Heti 2 alkalom', 'Házi feladat segítség', 'Szóbeli kikérdezés', 'Játék és pihenő idő']),
                'sibling_discount' => '3 000 Ft/fő kedvezmény',
                'is_featured' => false,
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Heti 3 délután',
                'subtitle' => 'Rendszeres segítség',
                'price' => 37000,
                'price_unit' => 'Ft/hó',
                'features' => json_encode(['Heti 3 alkalom', 'Házi feladat segítség', 'Szóbeli kikérdezés', 'Játék és pihenő idő', 'Tanszer tárolás']),
                'sibling_discount' => '3 000 Ft/fő kedvezmény',
                'is_featured' => false,
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Heti 4 délután',
                'subtitle' => 'Intenzív támogatás',
                'price' => 42000,
                'price_unit' => 'Ft/hó',
                'features' => json_encode(['Heti 4 alkalom', 'Házi feladat segítség', 'Szóbeli kikérdezés', 'Játék és pihenő idő', 'Tanszer tárolás', 'Gyakorlás']),
                'sibling_discount' => '3 000 Ft/fő kedvezmény',
                'is_featured' => false,
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Heti 5 délután',
                'subtitle' => 'Teljes körű felügyelet',
                'price' => 47000,
                'price_unit' => 'Ft/hó',
                'features' => json_encode(['Heti 5 alkalom', 'Házi feladat segítség', 'Szóbeli kikérdezés', 'Játék és pihenő idő', 'Tanszer tárolás', 'Gyakorlás', 'Kiemelt figyelem']),
                'sibling_discount' => '3 000 Ft/fő kedvezmény',
                'is_featured' => true,
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Felvételi felkészítő - tantárgyak
        // ═══════════════════════════════════════
        AdmissionSubject::insert([
            [
                'name' => 'Magyar nyelv',
                'description' => 'Nyelvtan, szövegértés, fogalmazás – a felvételi vizsga minden területére felkészítünk.',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Matematika',
                'description' => 'Számolás, geometria, szöveges feladatok – célzott felkészítés a központi felvételire.',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Felvételi felkészítő - árak
        AdmissionPrice::insert([
            [
                'label' => 'Tanszobásoknak',
                'price' => '2 000 Ft / 90 perc',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'label' => 'Külsősöknek',
                'price' => '4 000 Ft / 90 perc',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Terembérlés
        // ═══════════════════════════════════════
        RoomRental::insert([
            [
                'image_path' => '/images/galery/kucko4.webp',
                'title' => '2-4 órás bérlés',
                'description' => 'Ideális tanulócsoportok, workshopok és közösségi események számára. Wi-Fi, klíma és fűtés, társasjátékok rendelkezésre állnak.',
                'price_label' => '2-4 órás bérlés',
                'price' => '3 500 Ft/óra',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => null,
                'title' => '4 órát meghaladó bérlés',
                'description' => 'Hosszabb rendezvényekhez kedvezményes áron. Elérhető hétköznap 13 óráig vagy 16 óra után.',
                'price_label' => '4 órát meghaladó',
                'price' => '3 000 Ft/óra',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ═══════════════════════════════════════
        // Elérhetőségek
        // ═══════════════════════════════════════
        Contact::insert([
            [
                'key' => 'address',
                'value' => 'Eger, Széchenyi u. 33.',
                'label' => 'Cím',
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'contact_name',
                'value' => 'Borosné Müller Tímea',
                'label' => 'Kapcsolattartó',
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'phone',
                'value' => '+36 20 931 7207',
                'label' => 'Telefon',
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'email',
                'value' => 'bmtimi@gmail.com',
                'label' => 'E-mail',
                'sort_order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'facebook_url',
                'value' => 'https://www.facebook.com/kuckotanuloszoba',
                'label' => 'Facebook',
                'sort_order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'facebook_name',
                'value' => 'Kuckó Tanulószoba Eger',
                'label' => 'Facebook oldal neve',
                'sort_order' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'maps_embed_url',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.123!2d20.3731!3d47.9025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDU0JzA5LjAiTiAyMMKwMjInMjMuMiJF!5e0!3m2!1shu!2shu!4v1',
                'label' => 'Google Maps beágyazás',
                'sort_order' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'accessibility_info',
                'value' => 'A tanulószoba megközelíthető tömegközlekedéssel és autóval is. Parkolás az utcán megoldható.',
                'label' => 'Megközelíthetőség',
                'sort_order' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
