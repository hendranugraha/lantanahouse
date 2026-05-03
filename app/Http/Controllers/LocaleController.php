<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    private const ALLOWED = ['en', 'id'];

    public function __invoke(Request $request, string $locale): RedirectResponse
    {
        if (! in_array($locale, self::ALLOWED, true)) {
            $locale = 'en';
        }

        session(['locale' => $locale]);

        return redirect()->back(fallback: route('home'));
    }
}
