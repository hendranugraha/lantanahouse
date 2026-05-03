@extends('layouts.master')

@section('title', __('privacy.meta_title'))
@section('description', __('privacy.meta_description'))

@section('content')
    <section class="pt-28 pb-16 md:pt-32 md:pb-24 bg-white">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="font-serif text-4xl font-light text-stone-900 mb-2">{{ __('privacy.heading') }}</h1>
            <p class="text-sm text-stone-500 mb-10">{{ __('privacy.updated') }}</p>
            <p class="text-stone-600 leading-relaxed mb-8">{{ __('privacy.intro') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.collect_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.collect_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.use_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.use_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.retention_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.retention_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.rights_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.rights_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.cookies_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.cookies_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.changes_title') }}</h2>
            <p class="text-stone-600 leading-relaxed mb-6">{{ __('privacy.changes_p') }}</p>

            <h2 class="font-serif text-2xl text-stone-900 mt-10 mb-4">{{ __('privacy.contact_title') }}</h2>
            <p class="text-stone-600 leading-relaxed">{{ __('privacy.contact_p') }}</p>
        </div>
    </section>
@endsection
