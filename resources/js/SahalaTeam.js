/**
 * SAHALA TEAM - AKSARA BATAK
 * JavaScript for Interactive Features
 * Modern, Clean, and Optimized
 */

// ==========================================
// GLOBAL VARIABLES
// ==========================================
let darkMode = localStorage.getItem('darkMode') === 'true';
let mobileMenuOpen = false;
let searchOverlayOpen = false;

// ==========================================
// DOM ELEMENTS
// ==========================================
const navbar = document.getElementById('navbar');
const themeToggle = document.getElementById('theme-toggle');
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const searchToggle = document.getElementById('search-toggle');
const searchOverlay = document.getElementById('search-overlay');
const searchClose = document.getElementById('search-close');
const scrollTopBtn = document.getElementById('scroll-top');
const navLinks = document.querySelectorAll('.nav-link');
const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');

// ==========================================
// INITIALIZATION
// ==========================================
document.addEventListener('DOMContentLoaded', function () {
    initDarkMode();
    initNavigation();
    initScrollEffects();
    initAOS();
    initFilterTabs();
    initStatsCounter();
    initSmoothScroll();
});

// ==========================================
// DARK MODE
// ==========================================
function initDarkMode() {
    // Set initial dark mode state
    if (darkMode) {
        document.documentElement.classList.add('dark');
    }

    // Theme toggle event
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleDarkMode);
    }
}

function toggleDarkMode() {
    darkMode = !darkMode;
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('darkMode', darkMode);

    // Add animation effect
    themeToggle.style.transform = 'rotate(360deg)';
    setTimeout(() => {
        themeToggle.style.transform = 'rotate(0deg)';
    }, 300);
}

// ==========================================
// NAVIGATION
// ==========================================
function initNavigation() {
    // Mobile menu toggle
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', toggleMobileMenu);
    }

    // Close mobile menu when clicking menu items
    mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            if (mobileMenuOpen) {
                toggleMobileMenu();
            }
        });
    });

    // Search overlay
    if (searchToggle && searchOverlay && searchClose) {
        searchToggle.addEventListener('click', openSearchOverlay);
        searchClose.addEventListener('click', closeSearchOverlay);
        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) {
                closeSearchOverlay();
            }
        });
    }

    // Close search on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && searchOverlayOpen) {
            closeSearchOverlay();
        }
        if (e.key === 'Escape' && mobileMenuOpen) {
            toggleMobileMenu();
        }
    });

    // Active nav link on scroll
    window.addEventListener('scroll', updateActiveNavLink);
}

function toggleMobileMenu() {
    mobileMenuOpen = !mobileMenuOpen;
    mobileMenu.classList.toggle('active');
    menuToggle.classList.toggle('active');

    // Prevent body scroll when menu is open
    if (mobileMenuOpen) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}

function openSearchOverlay() {
    searchOverlayOpen = true;
    searchOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Focus on search input
    setTimeout(() => {
        const searchInput = searchOverlay.querySelector('input');
        if (searchInput) {
            searchInput.focus();
        }
    }, 300);
}

function closeSearchOverlay() {
    searchOverlayOpen = false;
    searchOverlay.classList.remove('active');
    document.body.style.overflow = '';
}

function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 100;
        const sectionId = section.getAttribute('id');

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-section') === sectionId) {
                    link.classList.add('active');
                }
            });
        }
    });
}

// ==========================================
// SCROLL EFFECTS
// ==========================================
function initScrollEffects() {
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial call
}

function handleScroll() {
    const scrollY = window.pageYOffset;

    // Navbar scroll effect
    if (navbar) {
        if (scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    // Scroll to top button
    if (scrollTopBtn) {
        if (scrollY > 500) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    }

    // Parallax effect on hero
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        const heroContent = heroSection.querySelector('.hero-content');
        if (heroContent && scrollY < window.innerHeight) {
            heroContent.style.transform = `translateY(${scrollY * 0.5}px)`;
            heroContent.style.opacity = 1 - (scrollY / window.innerHeight);
        }
    }
}

// Scroll to top functionality
if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ==========================================
// SMOOTH SCROLL
// ==========================================
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Skip if href is just "#"
            if (href === '#') {
                e.preventDefault();
                return;
            }

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();

                const navHeight = navbar ? navbar.offsetHeight : 80;
                const targetPosition = target.offsetTop - navHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ==========================================
// AOS ANIMATION
// ==========================================
function initAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
            delay: 0,
        });
    }
}

// ==========================================
// FILTER TABS
// ==========================================
function initFilterTabs() {
    const filterTabs = document.querySelectorAll('.filter-tab');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');

            // Update active tab
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            // Filter gallery items
            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';

                    // Re-trigger animation
                    setTimeout(() => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';

                        setTimeout(() => {
                            item.style.transition = 'all 0.5s ease';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    }, 0);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 500);
                }
            });
        });
    });
}

// ==========================================
// STATS COUNTER ANIMATION
// ==========================================
function initStatsCounter() {
    const statsNumbers = document.querySelectorAll('.stats-number');
    let animated = false;

    function animateStats() {
        if (animated) return;

        const statsSection = document.querySelector('.stats-card');
        if (!statsSection) return;

        const rect = statsSection.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

        if (isVisible) {
            animated = true;

            statsNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-count'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;

                    if (current < target) {
                        stat.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        // Add suffix for percentage or K
                        if (target === 98) {
                            stat.textContent = target + '%';
                        } else if (target === 50000) {
                            stat.textContent = '50K+';
                        } else {
                            stat.textContent = target.toLocaleString() + '+';
                        }
                    }
                };

                updateCounter();
            });
        }
    }

    window.addEventListener('scroll', animateStats);
    animateStats(); // Initial check
}

// ==========================================
// COURSE CARD INTERACTIONS
// ==========================================
const courseCards = document.querySelectorAll('.course-card');

courseCards.forEach(card => {
    card.addEventListener('mouseenter', function () {
        this.style.transform = 'translateY(-8px)';
    });

    card.addEventListener('mouseleave', function () {
        this.style.transform = 'translateY(0)';
    });
});

// ==========================================
// GALLERY LIGHTBOX (Optional Enhancement)
// ==========================================
const galleryItems = document.querySelectorAll('.gallery-item');

galleryItems.forEach(item => {
    item.addEventListener('click', function () {
        const title = this.querySelector('.gallery-title').textContent;
        const desc = this.querySelector('.gallery-desc').textContent;
        const category = this.querySelector('.gallery-category').textContent;

        // You can implement a custom lightbox modal here
        console.log('Gallery item clicked:', { title, desc, category });

        // Example: Show alert (replace with modal in production)
        // alert(`${title}\n\n${desc}\n\nKategori: ${category}`);
    });
});

// ==========================================
// LOADING ANIMATION
// ==========================================
window.addEventListener('load', function () {
    // Hide loading screen if exists
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => {
            loader.style.display = 'none';
        }, 300);
    }

    // Add loaded class to body
    document.body.classList.add('loaded');

    // Refresh AOS
    if (typeof AOS !== 'undefined') {
        AOS.refresh();
    }
});

// ==========================================
// PERFORMANCE OPTIMIZATION
// ==========================================

// Debounce function for scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function () {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Apply throttle to scroll handler
window.addEventListener('scroll', throttle(handleScroll, 100));

// ==========================================
// KEYBOARD NAVIGATION
// ==========================================
document.addEventListener('keydown', function (e) {
    // Alt + H = Home
    if (e.altKey && e.key === 'h') {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Alt + S = Search
    if (e.altKey && e.key === 's') {
        e.preventDefault();
        if (searchToggle) {
            openSearchOverlay();
        }
    }
});

// ==========================================
// FORM VALIDATION (if needed)
// ==========================================
const forms = document.querySelectorAll('form');

forms.forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Add your form validation logic here
        const formData = new FormData(this);

        console.log('Form submitted:', Object.fromEntries(formData));

        // Example: Show success message
        alert('Form berhasil dikirim!');
    });
});

// ==========================================
// LAZY LOADING IMAGES
// ==========================================
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const src = img.getAttribute('data-src');

                if (src) {
                    img.setAttribute('src', src);
                    img.removeAttribute('data-src');
                    img.classList.add('loaded');
                }

                observer.unobserve(img);
            }
        });
    });

    const lazyImages = document.querySelectorAll('img[data-src]');
    lazyImages.forEach(img => imageObserver.observe(img));
}

// ==========================================
// TOAST NOTIFICATION (Optional)
// ==========================================
function showToast(message, type = 'info', duration = 3000) {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    toast.style.cssText = `
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    padding: 1rem 1.5rem;
    background: ${type === 'success' ? '#10B981' : type === 'error' ? '#EF4444' : '#3B82F6'};
    color: white;
    border-radius: 0.5rem;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    animation: slideInRight 0.3s ease;
    font-weight: 600;
  `;

    document.body.appendChild(toast);

    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, duration);
}

// Example usage:
// showToast('Selamat datang di Aksara Batak!', 'success');

// ==========================================
// CONSOLE MESSAGE
// ==========================================
console.log('%c🔥 Aksara Batak - Platform Budaya Digital', 'color: #D9042B; font-size: 20px; font-weight: bold;');
console.log('%cDeveloped by SahalaTeam with ❤️', 'color: #6B7280; font-size: 14px;');
console.log('%cVisit us: https://aksarabatak.id', 'color: #3B82F6; font-size: 12px;');

// ==========================================
// EXPORT FUNCTIONS (if using modules)
// ==========================================
// Uncomment if using ES6 modules
/*
export {
  toggleDarkMode,
  showToast,
  initAOS
};
*/
