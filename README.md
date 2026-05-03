# The Lantana House

Marketing site for **The Lantana House**, a Bali-inspired villa in Bandung, Indonesia. Built with [Laravel](https://laravel.com) 13, Blade, Vite, and Tailwind CSS 4.

## Features

- Multilingual UI (**English** / **Bahasa Indonesia**) via session (`/locale/en`, `/locale/id`).
- Contact form saves inquiries to the database, optionally emails a copy (`LANTANA_INQUIRY_NOTIFY_EMAIL`), then opens WhatsApp with a prefilled message.
- SEO: meta description per page, canonical URL, Open Graph / Twitter cards, JSON-LD `LodgingBusiness`.
- Optional privacy-friendly analytics (Plausible, Fathom, or a custom script URL) via `.env`.
- Security: CSRF on API-style inquiry POST, honeypot field, rate limiting, baseline HTTP headers (X-Frame-Options, etc.).

## Requirements

- PHP 8.3+
- Composer
- Node.js 20+ (or current LTS) and npm

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite   # or configure MySQL in .env
php artisan migrate
npm install
npm run build
```

Place media assets (e.g. `logo.png`, `*.jpg`, `video.mp4`) in `public/` as referenced by the Blade views.

## Development

```bash
composer run dev
```

Runs the PHP server, queue worker, log viewer, and Vite together.

Or separately:

```bash
php artisan serve
npm run dev
```

## Testing

```bash
php artisan test
```

## Production checklist

- Set `APP_ENV=production`, `APP_DEBUG=false`, and a real `APP_URL` (HTTPS).
- Configure `MAIL_*` if you use `LANTANA_INQUIRY_NOTIFY_EMAIL`.
- Tune `LANTANA_*` and optional `ANALYTICS_*` in `.env`.
- Run `npm run build` and deploy `public/build` with the app.

## License

MIT (Laravel skeleton and this project’s custom code as applicable).
