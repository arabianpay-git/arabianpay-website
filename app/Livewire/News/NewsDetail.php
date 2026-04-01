<?php

namespace App\Livewire\News;

use App\Models\News;
use Illuminate\View\View;
use Livewire\Component;

class NewsDetail extends Component
{
    public $news;

    public function mount($id)
    {
        $this->news = News::where('is_published', true)->find($id);
        
        // زيادة عدد المشاهدات
        if ($this->news) {
            $this->news->increment('views');
        }
    }

    public function render(): View
    {
        $lang = app()->getLocale();

        return view('livewire.news.news-detail', [
            'news' => $this->news,
            'lang' => $lang,
        ]);
    }
}
