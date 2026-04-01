<?php

namespace App\Livewire\Contact;

use App\Models\ContactPanner;
use Illuminate\View\View;
use Livewire\Component;

class ContactHero extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        $panner = ContactPanner::query()->first();
        $items = is_array($panner?->jsoning) ? $panner->jsoning : [];

        return view('livewire.contact.contact-hero', [
            'panner' => $panner,
            'items' => $items,
            'lang' => $lang,
        ]);
    }
}

