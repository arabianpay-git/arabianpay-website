@php
$lang = app()->getLocale();
$items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<div  class="bg-neutral-50">
    <div class="py-12 mt-20 bg-neutral-50">
        <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 opacity-0 translate-y-6" data-animate data-delay="100">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-[#1a2b5b] mb-6 arab">
                {{ $lang === 'ar' ? ($hero->title_ar ?? '') : ($hero->title_en ?? '') }}
            </h2>
        </div>
    </div>

    <div dir="{{ $lang == 'ar' ? 'ltr' : 'rtl' }}" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <!-- FAQ item template -->
        @if(count($items))
            @foreach($items as $item)
                @php
                    $titleKey = 'question_' . $lang;
                    $answerKey = 'answer_' . $lang;
                    $number = $item['number'] ?? null;

                    $question = $item[$titleKey] ?? $item['question_en'] ?? $item['question_ar'] ?? '';
                    $answer = $item[$answerKey] ?? $item['answer_en'] ?? $item['answer_ar'] ?? '';
                    $icon = $item['icon'] ?? null;

                    // unique id per item
                    $faqId = 'faq' . $loop->index;
                @endphp

                <div class="border-b border-neutral-300 opacity-0 translate-y-6" data-animate data-delay="{{ 150 + ($loop->index * 80) }}">
                    <button
                        class="faq-toggle w-full py-4 flex items-center justify-between focus:outline-none"
                        data-faq-id="{{ $faqId }}"
                        aria-expanded="false"
                        aria-controls="{{ $faqId }}"
                    >
                        <!-- Icon on far LEFT -->
                        <span class="text-2xl text-blue-500 faq-icon transform transition-transform duration-300" aria-hidden="true">
                            +
                        </span>

                        <!-- Question text + number (stay on the right in RTL) -->
                        <div class="flex items-center gap-2">
                            <span class="text-xl {{ $lang == 'ar' ? 'text-right' : 'text-left' }} text-[#1a2b5b] font-medium" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" >
                                {{ $question }}
                            </span>
                            <span class="text-lg text-blue-500 font-bold" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                                @if($number)
                                    0{!! $number !!}
                                @endif
                            </span>
                        </div>
                    </button>

                    <!-- Animated content -->
                    <div class="faq-content max-h-0 overflow-hidden opacity-0 transition-[max-height,opacity] duration-300 ease" id="{{ $faqId }}" aria-hidden="true" >
                        <p class="py-4 px-2 text-neutral-600 text-justify" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                            {{ $answer }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif

        <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="pt-12">
            <button id="showAllFaqsBtn" class="px-8 py-3 border border-neutral-500 text-neutral-600 rounded-full font-medium hover:bg-neutral-100 transition duration-300">
            {{ $lang == 'ar' ? 'عرض كل الأسئلة' : 'Show All' }}
                
            </button>
        </div>
    </div>
</div>

<script>
    (function () {
        // Grab toggles and contents
        const faqToggles = Array.from(document.querySelectorAll('.faq-toggle'));
        const faqContents = Array.from(document.querySelectorAll('.faq-content'));

        // Initialize each pair safely
        faqToggles.forEach(toggle => {
            const contentId = toggle.getAttribute('data-faq-id');
            const content = document.getElementById(contentId);
            const icon = toggle.querySelector('.faq-icon');

            if (!content) return; // safety guard

            // Ensure start collapsed
            content.style.maxHeight = '0px';
            content.style.opacity = '0';
            content.setAttribute('aria-hidden', 'true');
            toggle.setAttribute('aria-expanded', 'false');

            // toggle function (used by click and keyboard)
            const toggleFaq = () => {
                const isOpen = toggle.getAttribute('aria-expanded') === 'true';

                // Close all other FAQs first (only one open at a time)
                faqToggles.forEach(otherToggle => {
                    if (otherToggle === toggle) return;
                    const otherContentId = otherToggle.getAttribute('data-faq-id');
                    const otherContent = document.getElementById(otherContentId);
                    const otherIcon = otherToggle.querySelector('.faq-icon');

                    if (!otherContent) return;

                    if (otherToggle.getAttribute('aria-expanded') === 'true') {
                        otherContent.style.maxHeight = '0px';
                        otherContent.style.opacity = '0';
                        otherContent.setAttribute('aria-hidden', 'true');
                        otherToggle.setAttribute('aria-expanded', 'false');
                        if (otherIcon) {
                            otherIcon.textContent = '+';
                            otherIcon.classList.remove('rotate-180');
                        }
                    }
                });

                if (isOpen) {
                    // Close this
                    content.style.maxHeight = '0px';
                    content.style.opacity = '0';
                    content.setAttribute('aria-hidden', 'true');
                    toggle.setAttribute('aria-expanded', 'false');
                    if (icon) {
                        icon.textContent = '+';
                        icon.classList.remove('rotate-180');
                    }
                } else {
                    // Open this
                    // set explicit maxHeight to scrollHeight for transition
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                    content.setAttribute('aria-hidden', 'false');
                    toggle.setAttribute('aria-expanded', 'true');
                    if (icon) {
                        icon.textContent = '-';
                        icon.classList.add('rotate-180');
                    }

                    // After transition, allow natural height
                    const clearMax = () => {
                        // Only clear if still open
                        if (toggle.getAttribute('aria-expanded') === 'true') {
                            content.style.maxHeight = 'none';
                        }
                        content.removeEventListener('transitionend', clearMax);
                    };
                    content.addEventListener('transitionend', clearMax);
                }
            };

            // Click handler
            toggle.addEventListener('click', toggleFaq);

            // Keyboard support: Enter or Space toggles
            toggle.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleFaq();
                }
            });
        });

        // Show All button behavior: toggles all open/close
        const showAllBtn = document.getElementById('showAllFaqsBtn');
        if (showAllBtn) {
            showAllBtn.addEventListener('click', () => {
                const anyHidden = faqContents.some(c => c.getAttribute('aria-hidden') === 'true');

                faqContents.forEach(content => {
                    const id = content.id;
                    const toggle = document.querySelector(`[data-faq-id="${id}"]`);
                    const icon = toggle ? toggle.querySelector('.faq-icon') : null;

                    if (anyHidden) {
                        // open all
                        content.style.maxHeight = content.scrollHeight + 'px';
                        content.style.opacity = '1';
                        content.setAttribute('aria-hidden', 'false');
                        if (toggle) toggle.setAttribute('aria-expanded', 'true');
                        if (icon) {
                            icon.textContent = '-';
                            icon.classList.add('rotate-180');
                        }

                        const clearMax = () => {
                            content.style.maxHeight = 'none';
                            content.removeEventListener('transitionend', clearMax);
                        };
                        content.addEventListener('transitionend', clearMax);
                    } else {
                        // close all
                        content.style.maxHeight = '0px';
                        content.style.opacity = '0';
                        content.setAttribute('aria-hidden', 'true');
                        if (toggle) toggle.setAttribute('aria-expanded', 'false');
                        if (icon) {
                            icon.textContent = '+';
                            icon.classList.remove('rotate-180');
                        }
                    }
                });
            });
        }
    })();
</script>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(document.querySelectorAll('[data-animate], [data-delay]'))
            .filter(el => el.classList.contains('opacity-0') || el.classList.contains('translate-y-6'));

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
                        el.classList.remove('opacity-0', 'translate-y-6');
                        el.classList.add('opacity-100', 'translate-y-0', 'transition-all', 'duration-700', 'ease-out');
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