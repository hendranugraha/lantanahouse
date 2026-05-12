@extends('layouts.master')

@section('title', __('room_tour.meta_title'))
@section('description', __('room_tour.meta_description'))

@section('content')
    <section class="relative h-dvh w-full overflow-hidden bg-[#3D2B1F]">
        <video class="absolute inset-0 w-full h-full object-cover scale-[1.2] md:scale-[1.15]" autoplay muted loop playsinline preload="metadata">
            <source src="{{ asset('video3.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 w-full">
            <h1 class="font-serif text-4xl md:text-6xl font-light mb-4 opacity-0 fade-in delay-1">{{ __('room_tour.hero_title') }}</h1>
            <p class="text-sm uppercase tracking-widest text-white/70 opacity-0 fade-in delay-2">{{ __('room_tour.hero_subtitle') }}</p>
        </div>
    </section>

    <section class="pt-12 pb-8 md:pt-16 md:pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-stone-600 text-center max-w-2xl mx-auto mb-12 leading-relaxed">{{ __('room_tour.intro') }}</p>
            <div class="space-y-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <img src="{{ asset('SLZ00423.jpg') }}" alt="{{ __('room_tour.living_alt') }}" class="w-full rounded-lg" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                    <div>
                        <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('room_tour.living_title') }}</h3>
                        <p class="text-stone-600">{{ __('room_tour.living_p') }}</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <img src="{{ asset('SLZ00429.jpg') }}" alt="{{ __('room_tour.master_alt') }}" class="w-full rounded-lg" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                    <div>
                        <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('room_tour.master_title') }}</h3>
                        <p class="text-stone-600">{{ __('room_tour.master_p') }}</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <img src="{{ asset('SLZ00438.jpg') }}" alt="{{ __('room_tour.bath_alt') }}" class="w-full rounded-lg" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                    <div>
                        <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('room_tour.bath_title') }}</h3>
                        <p class="text-stone-600">{{ __('room_tour.bath_p') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
