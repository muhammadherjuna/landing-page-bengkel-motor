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
    const menuIcon = document.getElementById('menu-icon');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                if (menuIcon) {
                    menuIcon.setAttribute('data-lucide', 'x');
                    lucide.createIcons();
                }
            } else {
                mobileMenu.classList.add('hidden');
                if (menuIcon) {
                    menuIcon.setAttribute('data-lucide', 'menu');
                    lucide.createIcons();
                }
            }
        });

        // Close mobile menu when clicking any nav link
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                if (menuIcon) {
                    menuIcon.setAttribute('data-lucide', 'menu');
                    lucide.createIcons();
                }
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
                        otherIcon.classList.remove('rotate-180', 'text-brand-600');
                    }
                    if (otherToggle) otherToggle.setAttribute('aria-expanded', 'false');
                });

                // If clicked item was closed, open it
                if (!isCurrentlyOpen) {
                    content.classList.remove('hidden');
                    if (icon) {
                        icon.classList.add('rotate-180', 'text-brand-600');
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
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
        } else {
            header.classList.remove('shadow-md');
        }
    });
});
