@extends('layouts.master')

@section('title', __('welcome.meta_title'))
@section('description', __('welcome.meta_description'))

@section('content')
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div id="hero-slides" class="absolute inset-0">
            <img src="/SLZ00365.jpg" class="slide absolute inset-0 w-full h-full object-cover" alt="{{ __('welcome.slide_alt') }}" fetchpriority="high" decoding="async" sizes="100vw">
            <img src="/SLZ00373.jpg" class="slide absolute inset-0 w-full h-full object-cover" alt="" style="opacity: 0;" loading="lazy" decoding="async" sizes="100vw">
            <img src="/SLZ00383.jpg" class="slide absolute inset-0 w-full h-full object-cover" alt="" style="opacity: 0;" loading="lazy" decoding="async" sizes="100vw">
            <img src="/SLZ00393.jpg" class="slide absolute inset-0 w-full h-full object-cover" alt="" style="opacity: 0;" loading="lazy" decoding="async" sizes="100vw">
            <img src="/SLZ00402.jpg" class="slide absolute inset-0 w-full h-full object-cover" alt="" style="opacity: 0;" loading="lazy" decoding="async" sizes="100vw">
        </div>

        <video id="hero-video" class="hidden absolute inset-0 w-full h-full object-cover" controls playsinline>
            <source src="/video.mp4" type="video/mp4">
        </video>

        <div id="hero-overlay" class="absolute inset-0 bg-[#8B7355]/40"></div>

        <div id="hero-close" class="hidden absolute top-20 right-4 z-20 text-white text-3xl cursor-pointer" role="button" tabindex="0" aria-label="{{ __('welcome.play_video') }}">&times;</div>

        <div id="hero-content" class="relative z-10 flex flex-col items-center justify-center h-full text-white px-6">
            <h1 class="font-serif text-5xl md:text-7xl font-light text-white mb-4 text-center opacity-0 fade-in delay-1">{{ __('welcome.hero_title') }}</h1>
            <p class="text-xs uppercase tracking-[0.4em] mb-6 text-white/80 text-center opacity-0 fade-in delay-2">{{ __('welcome.hero_subtitle') }}</p>
            <p class="text-sm text-white/80 max-w-lg mx-auto mb-12 text-center opacity-0 fade-in delay-3">{{ __('welcome.hero_lead') }}</p>
            <button type="button" id="play-btn" class="opacity-0 translate-y-4 w-12 h-12 rounded-full border-2 border-white bg-white flex items-center justify-center hover:bg-gray-100 hover:border-gray-100 transition-all duration-500 hover:scale-110 cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#8B7355]/60" style="animation: fadeSlideIn 0.8s ease 2s forwards;" aria-label="{{ __('welcome.play_video') }}">
                <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </button>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6" id="about">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <div>
                    <p class="text-xs uppercase tracking-widest text-stone-400 mb-4">{{ __('welcome.villa_kicker') }}</p>
                    <h2 class="font-serif text-4xl md:text-5xl font-light text-stone-900 mb-8">{{ __('welcome.villa_heading') }}</h2>
                    <p class="text-stone-600 leading-relaxed mb-6">{{ __('welcome.villa_p1') }}</p>
                    <p class="text-stone-600 leading-relaxed">{{ __('welcome.villa_p2') }}</p>
                </div>
                <div class="relative w-4/5 mx-auto h-[550px] overflow-hidden" style="border-radius: 250px 250px 0 0;">
                    <img id="about-slide-0" src="/SLZ00373.jpg" alt="{{ __('welcome.about_slide_alt') }}" class="absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 40vw">
                    <img id="about-slide-1" src="/SLZ00383.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 40vw">
                    <img id="about-slide-2" src="/SLZ00393.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 40vw">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-[#FDFBF7]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-10 text-center">{{ __('welcome.facilities_heading') }}</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
                <div class="text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-[#8B7355]/10 flex items-center justify-center">
                        <span class="iconify text-2xl text-[#8B7355]" data-icon="mdi:bed" aria-hidden="true"></span>
                    </div>
                    <p class="text-3xl md:text-4xl font-serif text-[#3D2B1F] mb-1">3</p>
                    <p class="text-xs uppercase tracking-widest text-[#9C8B7A]">{{ __('welcome.stat_bedrooms') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-[#8B7355]/10 flex items-center justify-center">
                        <span class="iconify text-2xl text-[#8B7355]" data-icon="mdi:shower" aria-hidden="true"></span>
                    </div>
                    <p class="text-3xl md:text-4xl font-serif text-[#3D2B1F] mb-1">3</p>
                    <p class="text-xs uppercase tracking-widest text-[#9C8B7A]">{{ __('welcome.stat_bathrooms') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-[#8B7355]/10 flex items-center justify-center">
                        <span class="iconify text-2xl text-[#8B7355]" data-icon="mdi:account-group" aria-hidden="true"></span>
                    </div>
                    <p class="text-3xl md:text-4xl font-serif text-[#3D2B1F] mb-1">6</p>
                    <p class="text-xs uppercase tracking-widest text-[#9C8B7A]">{{ __('welcome.stat_guests') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-[#8B7355]/10 flex items-center justify-center">
                        <span class="iconify text-2xl text-[#8B7355]" data-icon="mdi:home" aria-hidden="true"></span>
                    </div>
                    <p class="text-3xl md:text-4xl font-serif text-[#3D2B1F] mb-1">300m²</p>
                    <p class="text-xs uppercase tracking-widest text-[#9C8B7A]">{{ __('welcome.stat_size') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#E8E0D5]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <p class="text-xs uppercase tracking-widest text-stone-400 mb-4">{{ __('welcome.reviews_kicker') }}</p>
            <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-10">{{ __('welcome.reviews_heading') }}</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-[#FDFBF7] rounded-lg">
                    <div class="flex justify-center mb-3 text-yellow-400" aria-hidden="true">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-stone-600 text-sm italic mb-3">{{ __('welcome.review_1') }}</p>
                    <p class="text-stone-900 text-xs font-medium">{{ __('welcome.review_source') }}</p>
                </div>

                <div class="text-center p-6 bg-[#FDFBF7] rounded-lg">
                    <div class="flex justify-center mb-3 text-yellow-400" aria-hidden="true">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-stone-600 text-sm italic mb-3">{{ __('welcome.review_2') }}</p>
                    <p class="text-stone-900 text-xs font-medium">{{ __('welcome.review_source') }}</p>
                </div>

                <div class="text-center p-6 bg-[#FDFBF7] rounded-lg">
                    <div class="flex justify-center mb-3 text-yellow-400" aria-hidden="true">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-stone-600 text-sm italic mb-3">{{ __('welcome.review_3') }}</p>
                    <p class="text-stone-900 text-xs font-medium">{{ __('welcome.review_source') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 md:py-28 bg-[#3D2B1F] overflow-hidden">
        <img src="/book-bg.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0.5;" loading="lazy" decoding="async" sizes="100vw">
        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
            <p class="text-xs uppercase tracking-widest text-white/70 mb-4 opacity-0 fade-in delay-1">{{ __('welcome.cta_kicker') }}</p>
            <h2 class="font-serif text-4xl md:text-5xl font-light mb-6 text-white opacity-0 fade-in delay-2">{{ __('welcome.cta_heading') }}</h2>
            <p class="text-white/70 mb-10 opacity-0 fade-in delay-3">{{ __('welcome.cta_lead') }}</p>
            <a href="{{ route('contact') }}" class="inline-block border border-white text-white px-10 py-4 text-xs uppercase tracking-widest hover:bg-white hover:text-[#3D2B1F] transition opacity-0 fade-in delay-4 rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#3D2B1F]">{{ __('welcome.cta_button') }}</a>
        </div>
    </section>
@endsection
