@extends('layouts.master')

@section('title', __('about.meta_title'))
@section('description', __('about.meta_description'))

@section('content')
    <section class="pt-0 pb-12 md:pt-8 md:pb-16 bg-white">
        <section class="relative h-screen h-dvh w-full overflow-hidden rounded-none mb-6 md:mb-12">
            <video class="absolute inset-0 w-full h-full object-cover scale-[1.2] md:scale-[1.15]" autoplay muted loop playsinline preload="metadata">
                <source src="{{ asset('video2.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 w-full">
                <h1 class="font-serif text-4xl md:text-6xl font-light mb-4 opacity-0 fade-in delay-1">{{ __('about.hero_title') }}</h1>
                <p class="text-sm uppercase tracking-widest text-white/70 opacity-0 fade-in delay-2">{{ __('about.hero_subtitle') }}</p>
            </div>
        </section>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="font-serif text-4xl md:text-5xl font-light text-stone-900 mb-8">{{ __('about.story_heading') }}</h2>
                    <p class="text-stone-600 leading-relaxed mb-6">{{ __('about.story_p1') }}</p>
                    <p class="text-stone-600 leading-relaxed mb-6">{{ __('about.story_p2') }}</p>
                    <p class="text-stone-600 leading-relaxed">{{ __('about.story_p3') }}</p>
                </div>
                <div>
                    <img src="{{ asset('SLZ00383.jpg') }}" alt="{{ __('about.img_story_alt') }}" class="w-full rounded-lg" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <div>
                    <img src="{{ asset('SLZ00365.jpg') }}" alt="{{ __('about.img_garden_alt') }}" class="w-full rounded-lg" loading="lazy" decoding="async" sizes="(max-width: 768px) 100vw, 50vw">
                </div>
                <div>
                    <h3 class="font-serif text-2xl font-light text-stone-900 mb-4">{{ __('about.philosophy_heading') }}</h3>
                    <p class="text-stone-600 leading-relaxed">{{ __('about.philosophy_p') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
