// Mobile Menu Toggle
function initMobileMenu() {
    const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    }
}

// Header Fade on Scroll
function initHeaderFade() {
    const header = document.querySelector('[data-header]');
    if (!header) return;
    
    let lastScroll = window.pageYOffset || document.documentElement.scrollTop;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
        if (currentScroll > lastScroll && currentScroll > 100) {
            // Scrolling down
            header.classList.add('header-hidden');
            header.classList.remove('header-visible');
        } else {
            // Scrolling up
            header.classList.remove('header-hidden');
            header.classList.add('header-visible');
        }
        
        lastScroll = currentScroll <= 0 ? 0 : currentScroll;
    }, { passive: true });
    
    // Initialize as visible
    header.classList.add('header-visible');
}

// Active Navigation Link
function setActiveNavLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('[data-nav-link]');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPath || (currentPath === '/' && href === 'index.html')) {
            link.classList.add('text-primary-400');
            link.classList.remove('text-dark-text');
        }
    });
}

// Initialize all functions when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initHeaderFade();
    setActiveNavLink();
});


