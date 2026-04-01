<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactRequestController extends Controller
{
    public function index(): View
    {
        return view('cms.contact-requests.index', [
            'requests' => ContactRequest::query()->orderByDesc('created_at')->paginate(20),
        ]);
    }

    public function show(ContactRequest $contact_request): View
    {
        return view('cms.contact-requests.show', ['requestModel' => $contact_request]);
    }

    public function update(Request $request, ContactRequest $contact_request): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:pending,read,replied,closed'],
            'admin_notes' => ['nullable', 'string'],
        ]);
        $contact_request->update($data);

        return redirect()->route('cp.contact-requests.show', $contact_request)->with('success', __('تم التحديث.'));
    }
}
