<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public static function pageProvider(): array
    {
        return [
            ['/', 200],
            ['/about', 200],
            ['/facilities', 200],
            ['/room-tour', 200],
            ['/our-location', 200],
            ['/contact', 200],
            ['/privacy', 200],
        ];
    }

    #[DataProvider('pageProvider')]
    public function test_marketing_pages_return_ok(string $path, int $expected): void
    {
        $this->get($path)->assertStatus($expected);
    }

    public function test_home_contains_json_ld_lodging(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('LodgingBusiness', false);
    }

    public function test_locale_switch_sets_session_and_persists(): void
    {
        $this->get('/locale/id')->assertRedirect();
        $this->get('/')
            ->assertOk()
            ->assertSee('lang="id"', false);
    }
}
