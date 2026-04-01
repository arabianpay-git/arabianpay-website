<?php

namespace App\Livewire\News;

use App\Models\News;
use Illuminate\View\View;
use Livewire\Component;

class NewsList extends Component
{
    public function render(): View
    {
        $lang = app()->getLocale();
        
        $news = News::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.news.news-list', [
            'news' => $news,
            'lang' => $lang,
        ]);
    }
}
