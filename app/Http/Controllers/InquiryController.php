<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(StoreInquiryRequest $request): JsonResponse
    {
        $inquiry = Inquiry::create($request->validated());

        $notify = config('lantanahouse.inquiry_notify_email');
        if ($notify) {
            $body = $this->formatInquiryBody($inquiry);
            try {
                Mail::raw($body, function ($message) use ($notify, $inquiry): void {
                    $message->to($notify)
                        ->subject('New booking inquiry: '.$inquiry->first_name.' '.$inquiry->last_name);
                });
            } catch (\Throwable $e) {
                report($e);
            }
        }

        return response()->json(['ok' => true, 'id' => $inquiry->id]);
    }

    private function formatInquiryBody(Inquiry $inquiry): string
    {
        return implode("\n", [
            'New booking inquiry (saved on website)',
            '',
            'Dates:',
            '  Check-in: '.$inquiry->check_in->toDateString(),
            '  Check-out: '.$inquiry->check_out->toDateString(),
            '',
            'Guest:',
            '  Name: '.$inquiry->first_name.' '.$inquiry->last_name,
            '  Email: '.$inquiry->email,
            '  Phone: '.$inquiry->phone,
            '',
            'Message:',
            $inquiry->message,
        ]);
    }
}
