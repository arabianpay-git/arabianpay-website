<?php

namespace App\Livewire;

use App\Models\AboutUsEvaluation;
use Livewire\Component;

class PagePost extends Component
{

    public $dog;

    public function mount()
    {
        $this->dog = AboutUsEvaluation::with(['translations' => function ($query) {
            $query->whereIn('locale', [app()->getLocale(), config('app.fallback_locale')]);
        }])->get();
    }


    public function render()
    {
        return view('livewire.page-post', [
            'dog' => $this->dog
        ]);
    }
}
