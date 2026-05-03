@extends('layouts.master')

@section('title', __('our_location.meta_title'))
@section('description', __('our_location.meta_description'))

@section('content')
    <section class="relative h-screen w-full overflow-hidden bg-[#3D2B1F]">
        <img src="/location-bg.jpg" alt="{{ __('our_location.hero_alt') }}" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0.5;" fetchpriority="high" decoding="async" sizes="100vw">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 w-full">
            <h1 class="font-serif text-4xl md:text-6xl font-light mb-4 opacity-0 fade-in delay-1">{{ __('our_location.hero_title') }}</h1>
            <p class="text-sm uppercase tracking-widest text-white/70 opacity-0 fade-in delay-2">{{ __('our_location.hero_subtitle') }}</p>
        </div>
    </section>

    <section class="pt-12 pb-8 md:pt-16 md:pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-stone-600 text-center max-w-2xl mx-auto mb-12 leading-relaxed">{{ __('our_location.intro') }}</p>

            <div class="w-full h-[400px] md:h-[500px] rounded-lg overflow-hidden relative bg-[#E8E0D5] mb-12">
                <img src="/map-bg.jpg" alt="{{ __('our_location.map_alt') }}" class="w-full h-full object-cover opacity-50" loading="lazy" decoding="async" sizes="100vw">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white px-8 py-6 rounded-lg text-center shadow-lg">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-[#3D2B1F] flex items-center justify-center">
                            <span class="iconify text-3xl text-white" data-icon="mdi:map-marker" aria-hidden="true"></span>
                        </div>
                        <h3 class="font-serif text-xl text-[#3D2B1F] mb-2">{{ __('our_location.card_title') }}</h3>
                        <p class="text-stone-600">{{ __('our_location.card_line1') }}</p>
                        <p class="text-stone-500 text-sm">{{ __('our_location.card_line2') }}</p>
                        <a href="{{ config('lantanahouse.maps_url') }}" target="_blank" rel="noopener noreferrer" class="inline-block mt-4 px-4 py-2 bg-[#3D2B1F] text-white text-xs uppercase tracking-widest hover:bg-[#8B7355] transition rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355]">{{ __('our_location.directions') }}</a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('our_location.getting_here') }}</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:airplane" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.airport_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.airport_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:train" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.train_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.train_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:road" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.jakarta_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.jakarta_sub') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('our_location.attractions') }}</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:tennis" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.attr_padel_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.attr_padel_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:forest" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.attr_forest_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.attr_forest_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:lake" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.attr_market_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.attr_market_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:farm" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.attr_farm_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.attr_farm_sub') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="iconify text-xl text-[#8B7355] flex-shrink-0 mt-1" data-icon="mdi:restaurant" aria-hidden="true"></span>
                            <div>
                                <p class="text-stone-800 font-medium">{{ __('our_location.attr_dusun_title') }}</p>
                                <p class="text-stone-600 text-sm">{{ __('our_location.attr_dusun_sub') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
