@extends('layouts.master')

@section('title', __('facilities.meta_title'))
@section('description', __('facilities.meta_description'))

@section('content')
    <section class="relative h-screen h-dvh w-full overflow-hidden bg-[#3D2B1F]">
        <img src="{{ asset('SLZ00402.jpg') }}" alt="{{ __('facilities.hero_alt') }}" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0.5;" fetchpriority="high" decoding="async" sizes="100vw">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 w-full">
            <h1 class="font-serif text-4xl md:text-6xl font-light mb-4 opacity-0 fade-in delay-1">{{ __('facilities.hero_title') }}</h1>
            <p class="text-sm uppercase tracking-widest text-white/70 opacity-0 fade-in delay-2">{{ __('facilities.hero_subtitle') }}</p>
        </div>
    </section>

    <section class="pt-12 pb-8 md:pt-16 md:pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-stone-600 text-center max-w-2xl mx-auto mb-12 leading-relaxed">{{ __('facilities.intro') }}</p>

            <div class="mb-20">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg">
                        <img src="{{ asset('SLZ00402.jpg') }}" alt="{{ __('facilities.pool_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00405.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00411.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2" role="tablist" aria-label="{{ __('facilities.pool_title') }}">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60" role="presentation"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30" role="presentation"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30" role="presentation"></span>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.pool_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.pool_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.pool_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.pool_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.pool_li3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="grid md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
                    <div class="md:order-2">
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.kitchen_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.kitchen_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.kitchen_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.kitchen_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.kitchen_li3') }}</li>
                        </ul>
                    </div>
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg md:order-1">
                        <img src="{{ asset('SLZ00405.jpg') }}" alt="{{ __('facilities.kitchen_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00408.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00414.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg">
                        <img src="{{ asset('SLZ00408.jpg') }}" alt="{{ __('facilities.living_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00411.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00417.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.living_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.living_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.living_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.living_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.living_li3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="grid md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
                    <div class="md:order-2">
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.bedrooms_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.bedrooms_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bedrooms_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bedrooms_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bedrooms_li3') }}</li>
                        </ul>
                    </div>
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg md:order-1">
                        <img src="{{ asset('SLZ00414.jpg') }}" alt="{{ __('facilities.bedrooms_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00417.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00405.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg">
                        <img src="{{ asset('SLZ00417.jpg') }}" alt="{{ __('facilities.bathrooms_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00402.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00405.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.bathrooms_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.bathrooms_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bathrooms_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bathrooms_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.bathrooms_li3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="grid md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
                    <div class="md:order-2">
                        <h2 class="font-serif text-3xl md:text-4xl font-light text-stone-900 mb-4">{{ __('facilities.outdoor_title') }}</h2>
                        <p class="text-stone-600 mb-6 leading-relaxed">{{ __('facilities.outdoor_p') }}</p>
                        <ul class="text-stone-500 text-sm space-y-2">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.outdoor_li1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.outdoor_li2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#8B7355]" aria-hidden="true"></span> {{ __('facilities.outdoor_li3') }}</li>
                        </ul>
                    </div>
                    <div class="facility-carousel relative h-80 md:h-96 overflow-hidden rounded-lg md:order-1">
                        <img src="{{ asset('SLZ00411.jpg') }}" alt="{{ __('facilities.outdoor_title') }}" class="facility-img absolute inset-0 w-full h-full object-cover" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00414.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <img src="{{ asset('SLZ00402.jpg') }}" alt="" class="facility-img absolute inset-0 w-full h-full object-cover" style="opacity:0;" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                        <button type="button" class="facility-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.prev') }}">&larr;</button>
                        <button type="button" class="facility-next absolute right-4 top-1/2 -translate-y-1/2 bg-white/60 hover:bg-white text-black w-10 h-10 rounded-full flex items-center justify-center transition focus:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="{{ __('facilities.next') }}">&rarr;</button>
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/60"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                            <span class="facility-dot w-2 h-2 rounded-full bg-white/30"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
