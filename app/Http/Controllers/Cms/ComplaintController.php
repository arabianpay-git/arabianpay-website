<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComplaintController extends Controller
{
    public function index(): View
    {
        return view('cms.complaints.index', [
            'complaints' => Complaint::query()->orderByDesc('created_at')->paginate(20),
        ]);
    }

    public function show(Complaint $complaint): View
    {
        return view('cms.complaints.show', compact('complaint'));
    }

    public function update(Request $request, Complaint $complaint): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:pending,under_review,resolved,closed'],
            'admin_response' => ['nullable', 'string'],
        ]);
        if (in_array($data['status'], ['resolved', 'closed'], true) && ! $complaint->resolved_at) {
            $data['resolved_at'] = now();
        }
        $complaint->update($data);

        return redirect()->route('cp.complaints.show', $complaint)->with('success', __('تم التحديث.'));
    }
}
