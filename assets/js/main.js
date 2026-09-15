/**
 * Main Interactive Javascript
 * Garasi Prima Motor Landing Page
 */

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Mobile Menu Toggle
    // ----------------------------------------------------
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                if (menuIconOpen) menuIconOpen.classList.add('hidden');
                if (menuIconClose) menuIconClose.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                if (menuIconOpen) menuIconOpen.classList.remove('hidden');
                if (menuIconClose) menuIconClose.classList.add('hidden');
            }
        });

        // Close mobile menu when clicking any nav link
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                if (menuIconOpen) menuIconOpen.classList.remove('hidden');
                if (menuIconClose) menuIconClose.classList.add('hidden');
            });
        });
    }

    // ----------------------------------------------------
    // 2. FAQ Accordion Interaction
    // ----------------------------------------------------
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const toggle = item.querySelector('.faq-toggle');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (toggle && content) {
            toggle.addEventListener('click', () => {
                const isCurrentlyOpen = !content.classList.contains('hidden');

                // Close all FAQ items first for smooth single-open experience
                faqItems.forEach(otherItem => {
                    const otherContent = otherItem.querySelector('.faq-content');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    const otherToggle = otherItem.querySelector('.faq-toggle');

                    if (otherContent) otherContent.classList.add('hidden');
                    if (otherIcon) {
                        otherIcon.classList.remove('rotate-180', 'text-blue-700');
                    }
                    if (otherToggle) otherToggle.setAttribute('aria-expanded', 'false');
                });

                // If clicked item was closed, open it
                if (!isCurrentlyOpen) {
                    content.classList.remove('hidden');
                    if (icon) {
                        icon.classList.add('rotate-180', 'text-blue-700');
                    }
                    toggle.setAttribute('aria-expanded', 'true');
                }
            });
        }
    });

    // ----------------------------------------------------
    // 3. Navbar Sticky Shadow on Scroll
    // ----------------------------------------------------
    const header = document.querySelector('header');
    const backToTopBtn = document.getElementById('back-to-top-btn');

    window.addEventListener('scroll', () => {
        // Sticky Header Shadow
        if (header) {
            if (window.scrollY > 20) {
                header.classList.add('shadow-xs');
            } else {
                header.classList.remove('shadow-xs');
            }
        }

        // Floating Back to Top Button Visibility
        if (backToTopBtn) {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'translate-y-3', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.add('opacity-0', 'translate-y-3', 'pointer-events-none');
                backToTopBtn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
            }
        }
    });

    // ----------------------------------------------------
    // 4. Back to Top Click Handler
    // ----------------------------------------------------
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
