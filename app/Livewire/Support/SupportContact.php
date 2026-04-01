<?php

namespace App\Livewire\Support;

use App\Models\SupportContact as SupportContactModel;
use App\Models\ContactRequest;
use Illuminate\View\View;
use Livewire\Component;

class SupportContact extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';
    public $success = false;
    public $error = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => app()->getLocale() === 'ar' ? 'الاسم مطلوب' : 'Name is required',
            'email.required' => app()->getLocale() === 'ar' ? 'البريد الإلكتروني مطلوب' : 'Email is required',
            'email.email' => app()->getLocale() === 'ar' ? 'البريد الإلكتروني غير صحيح' : 'Email is invalid',
            'message.required' => app()->getLocale() === 'ar' ? 'الرسالة مطلوبة' : 'Message is required',
            'message.min' => app()->getLocale() === 'ar' ? 'الرسالة يجب أن تكون على الأقل 10 أحرف' : 'Message must be at least 10 characters',
        ]);

        try {
            ContactRequest::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject ?: (app()->getLocale() === 'ar' ? 'استفسار عام' : 'General Inquiry'),
                'message' => $this->message,
                'status' => 'pending',
            ]);

            $this->success = true;
            $this->reset(['name', 'email', 'phone', 'subject', 'message']);
            $this->error = '';

            // إعادة تعيين رسالة النجاح بعد 5 ثواني
            $this->dispatch('contact-sent');
        } catch (\Exception $e) {
            $this->error = app()->getLocale() === 'ar' 
                ? 'حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.' 
                : 'An error occurred while sending the message. Please try again.';
            $this->success = false;
        }
    }

    public function render(): View
    {
        $lang = app()->getLocale();

        $contact = SupportContactModel::query()->first();
        $info = is_array($contact?->jsoning) ? $contact->jsoning : [];

        return view('livewire.support.support-contact', [
            'contact' => $contact,
            'info' => $info,
            'lang' => $lang,
        ]);
    }
}
