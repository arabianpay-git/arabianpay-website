<?php

namespace App\Livewire\Support;

use App\Models\SupportContact as SupportContactModel;
use Illuminate\View\View;
use Livewire\Component;

class SupportContact extends Component
{
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
