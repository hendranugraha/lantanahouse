<?php

return [

    'whatsapp_e164' => preg_replace('/\D/', '', env('LANTANA_WHATSAPP', '6287822013024')),

    'contact_email' => env('LANTANA_CONTACT_EMAIL', 'info@lantana.house'),

    'instagram_url' => env('LANTANA_INSTAGRAM_URL', 'https://instagram.com/thelantana.house'),

    'maps_url' => env('LANTANA_MAPS_URL', 'https://maps.app.goo.gl/3MDmDnrA44JdchK68'),

    /**
     * Optional: receive a copy of each inquiry via mail (see MAIL_* in .env).
     */
    'inquiry_notify_email' => env('LANTANA_INQUIRY_NOTIFY_EMAIL'),

    /**
     * Path under public/ or absolute URL for default Open Graph image.
     */
    'og_image' => env('LANTANA_OG_IMAGE', '/SLZ00365.jpg'),

    'business' => [
        'name' => env('LANTANA_BUSINESS_NAME', 'The Lantana House'),
        'description' => env(
            'LANTANA_BUSINESS_DESCRIPTION',
            'A secluded Bali-inspired villa retreat in Bandung, West Java, Indonesia.'
        ),
        'address' => [
            'street' => env('LANTANA_STREET_ADDRESS', 'Bandung'),
            'address_locality' => env('LANTANA_LOCALITY', 'Bandung'),
            'address_region' => env('LANTANA_REGION', 'West Java'),
            'postal_code' => env('LANTANA_POSTAL_CODE', ''),
            'address_country' => env('LANTANA_COUNTRY', 'ID'),
        ],
        'geo' => [
            'latitude' => env('LANTANA_LAT'),
            'longitude' => env('LANTANA_LNG'),
        ],
        'telephone_e164' => preg_replace('/\D/', '', env('LANTANA_PUBLIC_PHONE', env('LANTANA_WHATSAPP', '6287822013024'))),
    ],

    'analytics' => [
        'provider' => env('ANALYTICS_PROVIDER'),
        'plausible_domain' => env('PLAUSIBLE_DOMAIN'),
        'plausible_script' => env('PLAUSIBLE_SCRIPT_URL', 'https://plausible.io/js/script.js'),
        'fathom_site_id' => env('FATHOM_SITE_ID'),
        'fathom_script' => env('FATHOM_SCRIPT_URL', 'https://cdn.usefathom.com/script.js'),
        'custom_script_url' => env('ANALYTICS_CUSTOM_SCRIPT_URL'),
    ],

];
