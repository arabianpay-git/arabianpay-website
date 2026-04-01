<?php

namespace App\Http\Controllers\Cms\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Cms\Concerns\StoresPublicUploads;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    use StoresPublicUploads;

    public function index(): View
    {
        return view('cms.home.customers.index', [
            'customers' => Customer::query()->orderBy('id')->paginate(20),
        ]);
    }

    public function create(): View
    {
        return view('cms.home.customers.form', ['customer' => new Customer]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['icon'] = $this->storeUploadedFile($request, 'icon', null, 'customers');
        Customer::query()->create($data);

        return redirect()->route('cp.home.customers.index')->with('success', __('تم إضافة العلامة.'));
    }

    public function edit(Customer $customer): View
    {
        return view('cms.home.customers.form', compact('customer'));
    }

    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $data = $this->validated($request);
        $data['icon'] = $this->storeUploadedFile($request, 'icon', $customer->icon, 'customers');
        $customer->update($data);

        return redirect()->route('cp.home.customers.index')->with('success', __('تم التحديث.'));
    }

    public function destroy(Customer $customer): RedirectResponse
    {
        $customer->delete();

        return redirect()->route('cp.home.customers.index')->with('success', __('تم الحذف.'));
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'image', 'max:5120'],
        ]);
    }
}
