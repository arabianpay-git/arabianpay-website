@php
$isAr = $lang === 'ar';
$formTitle = $panner?->{"title_{$lang}"} ?? ($isAr ? 'تواصل معنا' : 'Contact Us');
$formDes = $isAr ? 'املأ النموذج أدناه وسنقوم بالرد عليك في أقرب وقت ممكن' : 'Fill out the form below and we will get back to you as soon as possible';
$infoTitle = $isAr ? 'معلومات التواصل' : 'Contact Information';
$infoDes = $isAr ? 'يمكنك التواصل معنا عبر القنوات التالية:' : 'You can contact us through the following channels:';
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-3 lg:px-4 py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left: Contact Form -->
            <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="lg:col-span-6 opacity-0 translate-x-[-30px]" data-animate data-delay="0">
                <div class="bg-neutral-50 rounded-3xl p-4">
                    <h2 class="text-4xl font-extrabold text-[#0B1140] mb-6 arab">{{ $formTitle }}</h2>
                    <p class="text-neutral-600 mb-8" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $formDes }}
                    </p>

                    @if($success)
                        <div class="bg-green-50 border border-green-200 rounded-xl p-3 mb-6" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-green-800 font-semibold">{{ $isAr ? 'تم إرسال رسالتك بنجاح! سنقوم بالرد عليك قريباً.' : 'Your message has been sent successfully! We will get back to you soon.' }}</p>
                            </div>
                        </div>
                    @endif

                    @if($error)
                        <div class="bg-red-50 border border-red-200 rounded-xl p-3 mb-6" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-red-800 font-semibold">{{ $error }}</p>
                            </div>
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="space-y-3" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        <div>
                            <label class="block text-neutral-700 font-semibold mb-2" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الاسم' : 'Name' }} <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="name" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-[#0B1140] focus:border-transparent @error('name') border-red-500 @enderror" placeholder="{{ $isAr ? 'أدخل اسمك' : 'Enter your name' }}">
                            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-neutral-700 font-semibold mb-2" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'البريد الإلكتروني' : 'Email' }} <span class="text-red-500">*</span></label>
                            <input type="email" wire:model="email" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-[#0B1140] focus:border-transparent @error('email') border-red-500 @enderror" placeholder="example@email.com">
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-neutral-700 font-semibold mb-2" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الهاتف' : 'Phone' }}</label>
                            <input type="tel" wire:model="phone" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-[#0B1140] focus:border-transparent" placeholder="{{ $isAr ? 'أدخل رقم هاتفك' : 'Enter your phone number' }}">
                        </div>

                        <div>
                            <label class="block text-neutral-700 font-semibold mb-2" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الموضوع' : 'Subject' }}</label>
                            <select wire:model="subject" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-[#0B1140] focus:border-transparent">
                                <option value="">{{ $isAr ? 'اختر الموضوع' : 'Select Subject' }}</option>
                                <option value="{{ $isAr ? 'استفسار عام' : 'General Inquiry' }}">{{ $isAr ? 'استفسار عام' : 'General Inquiry' }}</option>
                                <option value="{{ $isAr ? 'مشكلة تقنية' : 'Technical Issue' }}">{{ $isAr ? 'مشكلة تقنية' : 'Technical Issue' }}</option>
                                <option value="{{ $isAr ? 'استفسار عن الحساب' : 'Account Inquiry' }}">{{ $isAr ? 'استفسار عن الحساب' : 'Account Inquiry' }}</option>
                                <option value="{{ $isAr ? 'اقتراح' : 'Suggestion' }}">{{ $isAr ? 'اقتراح' : 'Suggestion' }}</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-neutral-700 font-semibold mb-2" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الرسالة' : 'Message' }} <span class="text-red-500">*</span></label>
                            <textarea rows="5" wire:model="message" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-[#0B1140] focus:border-transparent @error('message') border-red-500 @enderror" placeholder="{{ $isAr ? 'اكتب رسالتك هنا...' : 'Write your message here...' }}"></textarea>
                            @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full bg-[#0B1140] text-white px-8 py-4 rounded-full font-bold text-lg" wire:loading.attr="disabled">
                            <span wire:loading.remove>{{ $isAr ? 'إرسال الرسالة' : 'Send Message' }}</span>
                            <span wire:loading>{{ $isAr ? 'جاري الإرسال...' : 'Sending...' }}</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right: Contact Information -->
            <div class="lg:col-span-6">
                <div class="space-y-3">
                    <div dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        <h2 class="text-4xl font-extrabold text-[#0B1140] mb-6 arab">{{ $infoTitle }}</h2>
                        <p class="text-lg text-neutral-700 leading-relaxed mb-8" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            {{ $infoDes }}
                        </p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="space-y-3">
                        @forelse($items as $idx => $item)
                            @php
                                $itemTitle = $item["title_{$lang}"] ?? '';
                                $itemValue = $item["value_{$lang}"] ?? $item["value"] ?? '';
                                $itemLink = $item["link"] ?? '';
                                $itemType = $item["type"] ?? 'email';
                            @endphp
                            <div class="bg-neutral-50 rounded-3xl p-3">
                                <div class="flex items-center gap-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                                    <div class="w-12 h-12 bg-[#0B1140] rounded-2xl flex items-center justify-center">
                                        @if($itemType === 'phone')
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                        @elseif($itemType === 'address')
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                        @else
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        @endif
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-extrabold text-[#0B1140] mb-1" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $itemTitle }}</h3>
                                        @if($itemLink)
                                            <a href="{{ $itemLink }}" class="text-neutral-600 hover:text-[#0B1140]">{{ $itemValue }}</a>
                                        @else
                                            <p class="text-neutral-600" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $itemValue }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <!-- Email -->
                            <div class="bg-neutral-50 rounded-3xl p-3">
                                <div class="flex items-center gap-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                                    <div class="w-12 h-12 bg-[#0B1140] rounded-2xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-extrabold text-[#0B1140] mb-1" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'البريد الإلكتروني' : 'Email' }}</h3>
                                        <a href="mailto:support@arabianpay.com" class="text-neutral-600 hover:text-[#0B1140]">support@arabianpay.com</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="bg-neutral-50 rounded-3xl p-3">
                                <div class="flex items-center gap-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                                    <div class="w-12 h-12 bg-[#0B1140] rounded-2xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-extrabold text-[#0B1140] mb-1" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الهاتف' : 'Phone' }}</h3>
                                        <a href="tel:920031271" class="text-neutral-600 hover:text-[#0B1140]">920031271</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="bg-neutral-50 rounded-3xl p-3 opacity-0 translate-y-6" data-delay="300" data-animate>
                                <div class="flex items-center gap-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                                    <div class="w-12 h-12 bg-[#0B1140] rounded-2xl flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-extrabold text-[#0B1140] mb-1" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'العنوان' : 'Address' }}</h3>
                                        <p class="text-neutral-600" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'الرياض، المملكة العربية السعودية' : 'Riyadh, Saudi Arabia' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(document.querySelectorAll('[data-animate], [data-delay]'))
            .filter(el => el.classList.contains('opacity-0') || el.classList.contains('translate-x-[-30px]') || el.classList.contains('translate-x-[30px]') || el.classList.contains('translate-y-6'));

        // Sort by delay
        animatedElements.sort((a, b) => {
            const da = parseInt(a.getAttribute('data-delay') || '0', 10);
            const db = parseInt(b.getAttribute('data-delay') || '0', 10);
            return da - db;
        });

        // Create Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const delayAttr = parseInt(el.getAttribute('data-delay') || '0', 10);
                    const baseStagger = 100;
                    const index = animatedElements.indexOf(el);
                    const finalDelay = delayAttr || (index * baseStagger);

                    setTimeout(() => {
                        el.classList.remove('opacity-0', 'translate-x-[-30px]', 'translate-x-[30px]', 'translate-y-6');
                        el.classList.add('opacity-100', 'translate-x-0', 'translate-y-0', 'transition-all', 'duration-700', 'ease-out');
                    }, finalDelay);

                    // Unobserve after animation starts
                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all animated elements
        animatedElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
