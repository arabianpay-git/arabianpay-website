<?php

namespace App\Livewire\Contact;

use App\Models\HomePannerQA;
use Illuminate\View\View;
use Livewire\Component;

class FaqPanner extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        // استخدام نفس الموديل المستخدم في صفحة home
        $hero = HomePannerQA::query()->first();

        return view('livewire.contact.faq-panner', [
            'hero' => $hero,
            'lang' => $lang,
        ]);
    }
}

