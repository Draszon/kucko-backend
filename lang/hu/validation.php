<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Magyar validációs üzenetek
    |--------------------------------------------------------------------------
    */

    'accepted' => 'A(z) :attribute mezőt el kell fogadni.',
    'active_url' => 'A(z) :attribute nem érvényes URL.',
    'after' => 'A(z) :attribute :date utáni dátum kell legyen.',
    'alpha' => 'A(z) :attribute mező csak betűket tartalmazhat.',
    'alpha_dash' => 'A(z) :attribute mező csak betűket, számokat, kötőjeleket és aláhúzásjeleket tartalmazhat.',
    'alpha_num' => 'A(z) :attribute mező csak betűket és számokat tartalmazhat.',
    'array' => 'A(z) :attribute mezőnek tömbnek kell lennie.',
    'before' => 'A(z) :attribute :date előtti dátum kell legyen.',
    'between' => [
        'numeric' => 'A(z) :attribute :min és :max közötti szám kell legyen.',
        'file' => 'A(z) :attribute :min és :max kilobájt közötti méretű kell legyen.',
        'string' => 'A(z) :attribute :min és :max karakter közötti hosszúságú kell legyen.',
        'array' => 'A(z) :attribute :min és :max közötti elemet kell tartalmazzon.',
    ],
    'boolean' => 'A(z) :attribute mező csak igaz vagy hamis lehet.',
    'confirmed' => 'A(z) :attribute megerősítés nem egyezik.',
    'date' => 'A(z) :attribute nem érvényes dátum.',
    'email' => 'A(z) :attribute mezőnek érvényes e-mail címnek kell lennie.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'file' => 'A(z) :attribute mezőnek fájlnak kell lennie.',
    'filled' => 'A(z) :attribute mező kitöltése kötelező.',
    'gt' => [
        'numeric' => 'A(z) :attribute nagyobb kell legyen, mint :value.',
        'string' => 'A(z) :attribute hosszabb kell legyen, mint :value karakter.',
    ],
    'gte' => [
        'numeric' => 'A(z) :attribute legalább :value kell legyen.',
    ],
    'image' => 'A(z) :attribute mezőnek képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'integer' => 'A(z) :attribute mezőnek egész számnak kell lennie.',
    'lt' => [
        'numeric' => 'A(z) :attribute kisebb kell legyen, mint :value.',
    ],
    'lte' => [
        'numeric' => 'A(z) :attribute legfeljebb :value lehet.',
    ],
    'max' => [
        'numeric' => 'A(z) :attribute mező legfeljebb :max lehet.',
        'file' => 'A(z) :attribute mező legfeljebb :max kilobájt lehet.',
        'string' => 'A(z) :attribute mező legfeljebb :max karakter hosszú lehet.',
        'array' => 'A(z) :attribute mező legfeljebb :max elemet tartalmazhat.',
    ],
    'mimes' => 'A(z) :attribute mezőnek :values típusú fájlnak kell lennie.',
    'min' => [
        'numeric' => 'A(z) :attribute mező legalább :min kell legyen.',
        'file' => 'A(z) :attribute mező legalább :min kilobájt kell legyen.',
        'string' => 'A(z) :attribute mező legalább :min karakter hosszú kell legyen.',
        'array' => 'A(z) :attribute mező legalább :min elemet kell tartalmazzon.',
    ],
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'numeric' => 'A(z) :attribute mezőnek számnak kell lennie.',
    'present' => 'A(z) :attribute mező jelen kell legyen.',
    'regex' => 'A(z) :attribute mező formátuma érvénytelen.',
    'required' => 'A(z) :attribute mező megadása kötelező.',
    'required_if' => 'A(z) :attribute mező megadása kötelező, ha :other :value.',
    'same' => 'A(z) :attribute és :other mezőknek egyezniük kell.',
    'size' => [
        'numeric' => 'A(z) :attribute :size kell legyen.',
        'file' => 'A(z) :attribute :size kilobájt kell legyen.',
        'string' => 'A(z) :attribute :size karakter hosszú kell legyen.',
        'array' => 'A(z) :attribute :size elemet kell tartalmazzon.',
    ],
    'string' => 'A(z) :attribute mezőnek szövegnek kell lennie.',
    'unique' => 'A megadott :attribute már foglalt.',
    'url' => 'A(z) :attribute mező érvényes URL-nek kell lennie (pl. https://example.com).',

    /*
    |--------------------------------------------------------------------------
    | Egyedi validációs üzenetek
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'facebook_url' => [
            'regex' => 'A(z) :attribute mezőnek https:// vagy http:// kezdetű URL-nek kell lennie.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Egyedi attribútum nevek
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'title' => 'cím',
        'name' => 'név',
        'description' => 'leírás',
        'icon_type' => 'ikon típus',
        'sort_order' => 'sorrend',
        'is_active' => 'aktív',
        'role' => 'pozíció',
        'image_path' => 'kép',
        'bio' => 'bemutatkozás',
        'facebook_url' => 'Facebook URL',
        'email' => 'e-mail cím',
        'quote' => 'idézet',
        'author_name' => 'szerző neve',
        'author_role' => 'szerző pozíciója',
        'price' => 'ár',
        'price_unit' => 'ár egység',
        'price_label' => 'ár megnevezés',
        'subtitle' => 'alcím',
        'features' => 'funkciók',
        'features.*' => 'funkció',
        'sibling_discount' => 'testvér kedvezmény',
        'is_featured' => 'kiemelt',
        'label' => 'megnevezés',
        'key' => 'kulcs',
        'value' => 'érték',
        'email' => 'e-mail cím',
        'password' => 'jelszó',
        'password_confirmation' => 'jelszó megerősítése',
        'code' => 'kód',
        'recovery_code' => 'helyreállító kód',
    ],

];
