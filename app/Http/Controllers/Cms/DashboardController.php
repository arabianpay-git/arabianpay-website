<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\ContactRequest;
use App\Models\News;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('cms.dashboard', [
            'newsCount' => News::query()->count(),
            'contactPending' => ContactRequest::query()->where('status', 'pending')->count(),
            'complaintsPending' => Complaint::query()->where('status', 'pending')->count(),
        ]);
    }
}
