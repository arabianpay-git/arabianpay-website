<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SupportContactFormController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $isAr = app()->getLocale() === 'ar';

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
            'captcha' => ['required', 'string', 'regex:/^[0-9]+$/'],
        ];

        $messages = [
            'name.required' => $isAr ? 'الاسم مطلوب' : 'Name is required',
            'email.required' => $isAr ? 'البريد الإلكتروني مطلوب' : 'Email is required',
            'email.email' => $isAr ? 'البريد الإلكتروني غير صحيح' : 'Email is invalid',
            'message.required' => $isAr ? 'الرسالة مطلوبة' : 'Message is required',
            'message.min' => $isAr ? 'الرسالة يجب أن تكون على الأقل 10 أحرف' : 'Message must be at least 10 characters',
            'captcha.required' => $isAr ? 'يرجى إدخال الأرقام الظاهرة في الصورة.' : 'Please enter the numbers shown in the image.',
            'captcha.regex' => $isAr ? 'يجب إدخال الأرقام فقط كما في الصورة.' : 'Enter digits only as shown in the image.',
        ];

        $validated = $request->validate($rules, $messages);

        $expected = session('support_contact_captcha');
        if ($expected === null || ! hash_equals($expected, preg_replace('/\s+/', '', $validated['captcha']))) {
            return back()
                ->withInput($request->except('captcha'))
                ->withErrors([
                    'captcha' => $isAr
                        ? 'الأرقام غير صحيحة. حاول مرة أخرى.'
                        : 'The numbers do not match. Please try again.',
                ]);
        }

        session()->forget('support_contact_captcha');

        unset($validated['captcha']);

        try {
            ContactRequest::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'subject' => $validated['subject'] ?: ($isAr ? 'استفسار عام' : 'General Inquiry'),
                'message' => $validated['message'],
                'status' => 'pending',
            ]);
        } catch (\Throwable $e) {
            return back()
                ->withInput()
                ->with('support_contact_error', $isAr
                    ? 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.'
                    : 'An error occurred while sending the message. Please try again.');
        }

        return back()->with('support_contact_success', true);
    }
}
