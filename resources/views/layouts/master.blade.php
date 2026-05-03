<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('lantanahouse.business.name') }}</title>
    <meta name="description" content="@yield('description', config('lantanahouse.business.description'))">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @php
        $ogImage = trim(view()->yieldContent('og_image', config('lantanahouse.og_image')));
        $ogImageUrl = \Illuminate\Support\Str::startsWith($ogImage, ['http://', 'https://']) ? $ogImage : url($ogImage);
    @endphp
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title') | {{ config('lantanahouse.business.name') }}">
    <meta property="og:description" content="@yield('description', config('lantanahouse.business.description'))">
    <meta property="og:image" content="{{ $ogImageUrl }}">
    <meta property="og:locale" content="{{ app()->getLocale() === 'id' ? 'id_ID' : 'en_US' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title') | {{ config('lantanahouse.business.name') }}">
    <meta name="twitter:description" content="@yield('description', config('lantanahouse.business.description'))">
    <meta name="twitter:image" content="{{ $ogImageUrl }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    @include('partials.analytics')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php
        $biz = config('lantanahouse.business');
        $addr = $biz['address'];
        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'LodgingBusiness',
            'name' => $biz['name'],
            'description' => $biz['description'],
            'url' => url('/'),
            'email' => config('lantanahouse.contact_email'),
            'telephone' => '+'.$biz['telephone_e164'],
            'address' => array_filter([
                '@type' => 'PostalAddress',
                'streetAddress' => $addr['street'] ?? null,
                'addressLocality' => $addr['address_locality'] ?? null,
                'addressRegion' => $addr['address_region'] ?? null,
                'postalCode' => $addr['postal_code'] ?: null,
                'addressCountry' => $addr['address_country'] ?? null,
            ]),
        ];
        if (! empty($biz['geo']['latitude']) && ! empty($biz['geo']['longitude'])) {
            $jsonLd['geo'] = [
                '@type' => 'GeoCoordinates',
                'latitude' => (float) $biz['geo']['latitude'],
                'longitude' => (float) $biz['geo']['longitude'],
            ];
        }
        $jsonLd['address'] = array_filter($jsonLd['address']);
    @endphp
    <script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    <style>
        :root { --color-bg: #FDFBF7; --color-text: #3D2B1F; --color-accent: #8B7355; }
        body { font-family: 'Montserrat', sans-serif; background: var(--color-bg); color: var(--color-text); }
        .font-serif { font-family: 'Cormorant Garamond', serif; }
        .fade-in { animation: fadeIn 1s ease forwards; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeSlideIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .delay-1 { animation-delay: 0.5s; }
        .delay-2 { animation-delay: 1s; }
        .delay-3 { animation-delay: 1.5s; }
        .delay-4 { animation-delay: 2s; }
    </style>
    <script>
        window.LANTANA = @json([
            'whatsapp' => config('lantanahouse.whatsapp_e164'),
            'inquiryUrl' => route('inquiries.store'),
        ]);
        window.LANTANA_I18N = @json([
            'nav_menu_open' => __('nav.menu_open'),
            'nav_menu_close' => __('nav.menu_close'),
        ]);
    </script>
</head>
<body class="bg-[#FDFBF7] text-[#3D2B1F] font-sans antialiased">
    <nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 bg-[#E8E0D5]/95 backdrop-blur-sm border-b border-white transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="block w-24 shrink-0 rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355] focus-visible:ring-offset-2"><img src="/logo.png" alt="{{ config('lantanahouse.business.name') }}" class="w-full" width="96" height="48" decoding="async"></a>
            <div class="hidden md:flex items-center gap-6 lg:gap-10 text-xs uppercase tracking-widest">
                <a href="{{ route('about') }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] transition rounded px-1 py-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.about') }}</a>
                <a href="{{ route('facilities') }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] transition rounded px-1 py-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.facilities') }}</a>
                <a href="{{ route('room-tour') }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] transition rounded px-1 py-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.room_tour') }}</a>
                <a href="{{ route('our-location') }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] transition rounded px-1 py-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.our_location') }}</a>
                <div class="ml-2 flex items-center gap-2 border-l border-stone-300/80 pl-6">
                    <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] {{ app()->getLocale() === 'en' ? 'font-semibold text-[#3D2B1F]' : '' }} rounded px-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" lang="en">EN</a>
                    <span class="text-stone-400" aria-hidden="true">|</span>
                    <a href="{{ route('locale.switch', ['locale' => 'id']) }}" class="text-[#9C8B7A] hover:text-[#3D2B1F] {{ app()->getLocale() === 'id' ? 'font-semibold text-[#3D2B1F]' : '' }} rounded px-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" lang="id">ID</a>
                </div>
                <a href="{{ route('contact') }}" class="text-white bg-[#3D2B1F] px-4 py-2 rounded hover:bg-[#8B7355] transition focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355] focus-visible:ring-offset-2">{{ __('nav.book') }}</a>
            </div>
            <button type="button" id="mobile-menu-btn" class="md:hidden text-[#3D2B1F] relative p-2 -mr-2 rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" aria-expanded="false" aria-controls="mobile-menu" aria-label="{{ __('nav.menu_open') }}">
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-[#E8E0D5]/95 border-b border-white shadow-lg">
            <div class="flex flex-col px-6 py-4 gap-4">
                <a href="{{ route('about') }}" class="text-xs uppercase tracking-widest text-[#3D2B1F] rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.about') }}</a>
                <a href="{{ route('facilities') }}" class="text-xs uppercase tracking-widest text-[#3D2B1F] rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.facilities') }}</a>
                <a href="{{ route('room-tour') }}" class="text-xs uppercase tracking-widest text-[#3D2B1F] rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.room_tour') }}</a>
                <a href="{{ route('our-location') }}" class="text-xs uppercase tracking-widest text-[#3D2B1F] rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.our_location') }}</a>
                <div class="flex items-center gap-3 text-xs uppercase tracking-widest">
                    <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="{{ app()->getLocale() === 'en' ? 'font-semibold text-[#3D2B1F]' : 'text-[#6B5B4B]' }} rounded px-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">EN</a>
                    <span class="text-stone-400" aria-hidden="true">|</span>
                    <a href="{{ route('locale.switch', ['locale' => 'id']) }}" class="{{ app()->getLocale() === 'id' ? 'font-semibold text-[#3D2B1F]' : 'text-[#6B5B4B]' }} rounded px-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">ID</a>
                </div>
                <a href="{{ route('contact') }}" class="text-xs uppercase tracking-widest text-white bg-[#3D2B1F] px-4 py-2 rounded hover:bg-[#8B7355] w-fit focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('nav.book') }}</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-[#E8E0D5] border-t border-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <div>
                    <h3 class="font-serif text-2xl font-light mb-4 text-[#3D2B1F]">THE LANTANA HOUSE</h3>
                    <p class="text-[#9C8B7A] text-sm max-w-md">{{ __('footer.tagline') }}</p>
                </div>
                <div>
                    <h4 class="text-xs uppercase tracking-widest text-[#9C8B7A] mb-4">{{ __('footer.location_heading') }}</h4>
                    <p class="text-[#6B5B4B] text-sm">{{ __('footer.location_line') }}</p>
                </div>
                <div>
                    <h4 class="text-xs uppercase tracking-widest text-[#9C8B7A] mb-4">{{ __('footer.connect') }}</h4>
                    <div class="flex items-start gap-4">
                        <a href="mailto:{{ config('lantanahouse.contact_email') }}" class="text-[#8B7355] hover:text-[#3D2B1F] transition rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" rel="noopener noreferrer" aria-label="Email">
                            <span class="iconify text-2xl" data-icon="mdi:email-outline" aria-hidden="true"></span>
                        </a>
                        <a href="https://wa.me/{{ config('lantanahouse.whatsapp_e164') }}" target="_blank" rel="noopener noreferrer" class="text-[#8B7355] hover:text-[#3D2B1F] transition rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" aria-label="WhatsApp">
                            <span class="iconify text-2xl" data-icon="mdi:whatsapp" aria-hidden="true"></span>
                        </a>
                        <a href="{{ config('lantanahouse.instagram_url') }}" target="_blank" rel="noopener noreferrer" class="text-[#8B7355] hover:text-[#3D2B1F] transition rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]" aria-label="Instagram">
                            <span class="iconify text-2xl" data-icon="mdi:instagram" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white mt-16 pt-8 flex flex-col sm:flex-row items-center justify-center gap-3 text-center">
                <a href="{{ route('privacy') }}" class="text-xs text-[#8B7355] hover:text-[#3D2B1F] underline-offset-2 hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355] rounded px-1">{{ __('footer.privacy') }}</a>
                <span class="hidden sm:inline text-[#9C8B7A] text-xs" aria-hidden="true">·</span>
                <p class="text-xs text-[#9C8B7A]">&copy; {{ date('Y') }} {{ __('footer.copyright') }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
