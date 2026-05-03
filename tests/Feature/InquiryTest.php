<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;

    private function validPayload(): array
    {
        return [
            'check_in' => now()->addDay()->toDateString(),
            'check_out' => now()->addDays(3)->toDateString(),
            'first_name' => 'Test',
            'last_name' => 'Guest',
            'email' => 'guest@example.com',
            'phone' => '+6280000000000',
            'message' => 'We would love to book.',
        ];
    }

    public function test_inquiry_is_stored_and_returns_json(): void
    {
        $this->postJson('/inquiries', $this->validPayload())
            ->assertOk()
            ->assertJson(['ok' => true]);

        $this->assertDatabaseCount('inquiries', 1);
        $this->assertSame('guest@example.com', Inquiry::first()->email);
    }

    public function test_honeypot_website_field_rejects_request(): void
    {
        $payload = $this->validPayload();
        $payload['website'] = 'http://spam.example';

        $this->postJson('/inquiries', $payload)
            ->assertStatus(422);

        $this->assertDatabaseCount('inquiries', 0);
    }

    public function test_validation_requires_future_dates(): void
    {
        $payload = $this->validPayload();
        $payload['check_in'] = now()->subDays(2)->toDateString();
        $payload['check_out'] = now()->subDay()->toDateString();

        $this->postJson('/inquiries', $payload)
            ->assertStatus(422);

        $this->assertDatabaseCount('inquiries', 0);
    }
}
