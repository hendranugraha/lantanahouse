@extends('layouts.master')

@section('title', __('contact.meta_title'))
@section('description', __('contact.meta_description'))

@section('content')
    <section class="relative h-screen w-full overflow-hidden bg-[#3D2B1F]">
        <img src="/book-bg.jpg" alt="{{ __('contact.hero_alt') }}" class="absolute inset-0 w-full h-full object-cover" style="opacity: 0.5;" fetchpriority="high" decoding="async" sizes="100vw">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 w-full">
            <h1 class="font-serif text-4xl md:text-6xl font-light mb-4 text-white opacity-0 fade-in delay-1">{{ __('contact.hero_title') }}</h1>
            <p class="text-sm uppercase tracking-widest text-white/70 opacity-0 fade-in delay-2">{{ __('contact.hero_subtitle') }}</p>
        </div>
    </section>

    <section class="pt-12 pb-8 md:pt-16 md:pb-12 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="max-w-2xl mx-auto">
                <p class="text-stone-600 text-center mb-8 leading-relaxed">{{ __('contact.intro') }}</p>
                <p id="inquiry-error" class="hidden mb-4 text-sm text-red-700 text-center" role="alert"></p>
                <h3 class="font-serif text-2xl font-light text-stone-900 mb-6 text-center">{{ __('contact.form_heading') }}</h3>
                <form id="wa-form" class="relative space-y-4" data-analytics-inquiry="1">
                    <div class="absolute w-px h-px p-0 -m-px overflow-hidden whitespace-nowrap border-0 left-0 top-0" style="clip: rect(0,0,0,0); clip-path: inset(50%);" aria-hidden="true">
                        <label for="website">Do not fill</label>
                        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" value="">
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="checkin" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.checkin') }}</label>
                            <input type="date" name="check_in" id="checkin" autocomplete="off" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm">
                        </div>
                        <div>
                            <label for="checkout" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.checkout') }}</label>
                            <input type="date" name="check_out" id="checkout" autocomplete="off" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.first_name') }}</label>
                            <input type="text" name="first_name" id="firstName" autocomplete="given-name" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm">
                        </div>
                        <div>
                            <label for="lastName" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.last_name') }}</label>
                            <input type="text" name="last_name" id="lastName" autocomplete="family-name" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.email') }}</label>
                        <input type="email" name="email" id="email" autocomplete="email" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm">
                    </div>
                    <div>
                        <label for="phone" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.phone') }}</label>
                        <input type="tel" name="phone" id="phone" autocomplete="tel" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm" placeholder="{{ __('contact.phone_placeholder') }}">
                    </div>
                    <div>
                        <label for="message" class="block text-xs uppercase tracking-widest text-stone-400 mb-2">{{ __('contact.message') }}</label>
                        <textarea name="message" id="message" rows="4" required class="w-full border border-stone-300 px-4 py-3 focus:outline-none focus:border-[#8B7355] focus-visible:ring-2 focus-visible:ring-[#8B7355]/40 rounded-sm"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="inquiry-submit" class="bg-[#3D2B1F] text-white px-8 py-4 text-xs uppercase tracking-widest hover:bg-[#8B7355] transition rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#8B7355] focus-visible:ring-offset-2">
                            {{ __('contact.submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
    (function() {
        const form = document.getElementById('wa-form');
        if (!form || !window.LANTANA) return;

        const errEl = document.getElementById('inquiry-error');
        const msgs = {
            generic: @json(__('contact.error_generic')),
            validation: @json(__('contact.error_validation')),
        };

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            if (errEl) { errEl.classList.add('hidden'); errEl.textContent = ''; }

            const payload = {
                check_in: document.getElementById('checkin').value,
                check_out: document.getElementById('checkout').value,
                first_name: document.getElementById('firstName').value,
                last_name: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                message: document.getElementById('message').value,
                website: document.getElementById('website') ? document.getElementById('website').value : '',
            };

            try {
                const token = document.querySelector('meta[name="csrf-token"]');
                const res = await fetch(window.LANTANA.inquiryUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token ? token.getAttribute('content') : '',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    body: JSON.stringify(payload),
                });

                if (!res.ok) {
                    if (res.status === 422 && errEl) {
                        errEl.textContent = msgs.validation;
                        errEl.classList.remove('hidden');
                    } else if (errEl) {
                        errEl.textContent = msgs.generic;
                        errEl.classList.remove('hidden');
                    }
                    return;
                }

                if (typeof window.plausible === 'function') {
                    window.plausible('Inquiry', { props: { channel: 'whatsapp' } });
                }

                const phoneNumber = window.LANTANA.whatsapp;
                const text = `*New Booking Inquiry*\\n\\n*Dates:*\\nCheck-in: ${payload.check_in}\\nCheck-out: ${payload.check_out}\\n\\n*Guest:*\\n${payload.first_name} ${payload.last_name}\\nEmail: ${payload.email}\\nPhone: ${payload.phone}\\n\\n*Message:*\\n${payload.message}`;
                const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
                window.open(url, '_blank', 'noopener,noreferrer');
            } catch (err) {
                if (errEl) {
                    errEl.textContent = msgs.generic;
                    errEl.classList.remove('hidden');
                }
            }
        });
    })();
    </script>
@endsection
