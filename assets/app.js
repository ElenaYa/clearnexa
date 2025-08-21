
const AppState = {
    isReducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
    observers: new Map(),
    timers: new Map(),
    isLoading: false,
    cookiePreference: null,
    activeModals: new Set()
};


const Utils = {
    debounce(func, wait, immediate) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                timeout = null;
                if (!immediate) func(...args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func(...args);
        };
    },

    throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    },

    setCookie(name, value, days = 180, options = {}) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        
        const cookieOptions = {
            expires: date.toUTCString(),
            path: '/',
            SameSite: 'Strict',
            ...options
        };

        const cookieString = Object.entries(cookieOptions)
            .map(([key, val]) => `${key}=${val}`)
            .join('; ');

        document.cookie = `${name}=${value}; ${cookieString}`;
    },

    validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    },

    validatePhone(phone) {
        const re = /^(\+358|0)[1-9][0-9]{6,10}$/;
        return re.test(phone.replace(/\s/g, ''));
    },

    sanitizeInput(input) {
        const div = document.createElement('div');
        div.textContent = input;
        return div.innerHTML;
    },

    formatDate(date) {
        return new Intl.DateTimeFormat('fi-FI').format(date);
    },

    generateId() {
        return Math.random().toString(36).substr(2, 9);
    },

    isInViewport(element, threshold = 0.1) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.top >= -threshold * windowHeight &&
            rect.left >= -threshold * windowWidth &&
            rect.bottom <= (1 + threshold) * windowHeight &&
            rect.right <= (1 + threshold) * windowWidth
        );
    }
};


const AnimationController = {
    init() {
        if (AppState.isReducedMotion) {
            document.querySelectorAll('.reveal').forEach(el => {
                el.classList.add('active');
            });
            return;
        }

        this.setupRevealObserver();
        this.setupParallaxElements();
        this.setupCounterAnimations();
    },

    setupRevealObserver() {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = entry.target.dataset.delay || 0;
                    
                    setTimeout(() => {
                        entry.target.classList.add('active');
                    }, parseInt(delay));
                    
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.reveal').forEach((el, index) => {
            if (!el.dataset.delay) {
                el.dataset.delay = index * 50;
            }
            revealObserver.observe(el);
        });

        AppState.observers.set('reveal', revealObserver);
    },

    setupParallaxElements() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        if (parallaxElements.length === 0) return;

        const handleParallax = Utils.throttle(() => {
            const scrollY = window.pageYOffset;
            
            parallaxElements.forEach(el => {
                const speed = parseFloat(el.dataset.parallax) || 0.5;
                const rect = el.getBoundingClientRect();
                const elementTop = rect.top + scrollY;
                const elementHeight = rect.height;
                const windowHeight = window.innerHeight;
                
                if (elementTop < scrollY + windowHeight && elementTop + elementHeight > scrollY) {
                    const yPos = -(scrollY - elementTop) * speed;
                    el.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });
        }, 16); 

        window.addEventListener('scroll', handleParallax, { passive: true });
    },

    setupCounterAnimations() {
        const counters = document.querySelectorAll('[data-counter]');
        if (counters.length === 0) return;

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));
    },

    animateCounter(element) {
        const target = parseInt(element.dataset.counter) || 0;
        const duration = parseInt(element.dataset.duration) || 2000;
        const start = parseInt(element.textContent) || 0;
        const increment = (target - start) / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            
            if ((increment > 0 && current >= target) || (increment < 0 && current <= target)) {
                current = target;
                clearInterval(timer);
            }
            
            element.textContent = Math.floor(current);
        }, 16);
    }
};


const CookieManager = {
    init() {
        this.checkExistingPreference();
        this.bindEvents();
    },

    checkExistingPreference() {
        AppState.cookiePreference = Utils.getCookie('cnx_cookie_pref');
        
        if (!AppState.cookiePreference) {
            setTimeout(() => {
                this.showBanner();
            }, 1000);
        } else {
            if (AppState.cookiePreference === 'all') {
                this.loadAnalytics();
            }
        }
    },

    showBanner() {
        const banner = document.getElementById('cookieBanner');
        if (banner) {
            banner.classList.add('show');
            banner.setAttribute('role', 'dialog');
            banner.setAttribute('aria-labelledby', 'cookie-title');
            banner.setAttribute('aria-describedby', 'cookie-description');
        }
    },

    hideBanner() {
        const banner = document.getElementById('cookieBanner');
        if (banner) {
            banner.classList.remove('show');
            banner.removeAttribute('role');
            banner.removeAttribute('aria-labelledby');
            banner.removeAttribute('aria-describedby');
        }
    },

    showModal() {
        const modal = document.getElementById('cookieModal');
        if (modal) {
            modal.classList.add('show');
            AppState.activeModals.add('cookie');
            
            const firstFocusable = modal.querySelector('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (firstFocusable) {
                firstFocusable.focus();
            }
            
            document.body.style.overflow = 'hidden';
            
            this.handleEscapeKey = (e) => {
                if (e.key === 'Escape') {
                    this.hideModal();
                }
            };
            document.addEventListener('keydown', this.handleEscapeKey);
        }
    },

    hideModal() {
        const modal = document.getElementById('cookieModal');
        if (modal) {
            modal.classList.remove('show');
            AppState.activeModals.delete('cookie');
            
            document.body.style.overflow = '';
            
            if (this.handleEscapeKey) {
                document.removeEventListener('keydown', this.handleEscapeKey);
            }
        }
    },

    savePreferences() {
        const analyticsToggle = document.getElementById('analyticsToggle');
        const preference = analyticsToggle && analyticsToggle.checked ? 'all' : 'essential';
        
        Utils.setCookie('cnx_cookie_pref', preference, 180);
        AppState.cookiePreference = preference;
        
        this.hideBanner();
        this.hideModal();
        
        if (preference === 'all') {
            this.loadAnalytics();
        }
        
        NotificationSystem.show('Evästeasetukset tallennettu.', 'success');
    },

    bindEvents() {
        document.addEventListener('click', (e) => {
            const action = e.target.getAttribute('data-cookie-action');
            if (!action) return;

            e.preventDefault();

            switch(action) {
                case 'accept-all':
                    Utils.setCookie('cnx_cookie_pref', 'all', 180);
                    AppState.cookiePreference = 'all';
                    this.hideBanner();
                    this.loadAnalytics();
                    NotificationSystem.show('Kaikki evästeet hyväksytty.', 'success');
                    break;
                    
                case 'essential-only':
                    Utils.setCookie('cnx_cookie_pref', 'essential', 180);
                    AppState.cookiePreference = 'essential';
                    this.hideBanner();
                    NotificationSystem.show('Vain välttämättömät evästeet käytössä.', 'info');
                    break;
                    
                case 'customize':
                    this.showModal();
                    break;
                    
                case 'save-preferences':
                    this.savePreferences();
                    break;
                    
                case 'close-modal':
                    this.hideModal();
                    break;
            }
        });

        window.showCookieModal = () => {
            this.showModal();
        };
    },

    loadAnalytics() {
        if (typeof gtag === 'undefined' && !window.dataLayer) {
            const script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID';
            document.head.appendChild(script);

            window.dataLayer = window.dataLayer || [];
            window.gtag = function() {
                dataLayer.push(arguments);
            };
            
            gtag('js', new Date());
            gtag('config', 'GA_MEASUREMENT_ID', {
                anonymize_ip: true,
                allow_google_signals: false,
                allow_ad_personalization_signals: false
            });
        }

    }
};

const FormHandler = {
    init() {
        this.setupContactForm();
        this.setupNewsletterForm();
        this.setupFormValidation();
    },

    setupContactForm() {
        const contactForm = document.getElementById('contactForm');
        if (!contactForm) return;

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (AppState.isLoading) return;
            
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            const validation = this.validateContactForm(data);
            if (!validation.isValid) {
                NotificationSystem.show(validation.message, 'error');
                this.highlightErrors(contactForm, validation.errors);
                return;
            }

            await this.submitContactForm(data, contactForm);
        });
    },

    setupNewsletterForm() {
        const newsletterForm = document.getElementById('newsletterForm');
        if (!newsletterForm) return;

        newsletterForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (AppState.isLoading) return;
            
            const email = newsletterForm.querySelector('input[type="email"]').value;
            const consent = newsletterForm.querySelector('input[type="checkbox"]').checked;
            
            if (!Utils.validateEmail(email)) {
                NotificationSystem.show('Virheellinen sähköpostiosoite.', 'error');
                return;
            }
            
            if (!consent) {
                NotificationSystem.show('Sinun tulee hyväksyä uutiskirjeen tilaus.', 'error');
                return;
            }
            
            await this.submitNewsletter(email, newsletterForm);
        });
    },

    setupFormValidation() {
        document.addEventListener('input', (e) => {
            if (e.target.matches('input[type="email"]')) {
                this.validateEmailField(e.target);
            }
            
            if (e.target.matches('input[required], textarea[required]')) {
                this.validateRequiredField(e.target);
            }
        });

        document.addEventListener('click', (e) => {
            if (e.target.matches('button[type="reset"]')) {
                setTimeout(() => {
                    this.clearValidationStates(e.target.closest('form'));
                }, 0);
            }
        });
    },

    validateContactForm(data) {
        const errors = [];
        
        if (!data.company?.trim()) {
            errors.push('company');
        }
        
        if (!data.name?.trim()) {
            errors.push('name');
        }
        
        if (!Utils.validateEmail(data.email)) {
            errors.push('email');
        }
        
        if (!data.message?.trim() || data.message.trim().length < 10) {
            errors.push('message');
        }
        
        if (!data.privacy) {
            errors.push('privacy');
        }

        return {
            isValid: errors.length === 0,
            errors,
            message: errors.length > 0 ? 'Tarkista lomakkeen tiedot.' : ''
        };
    },

    validateEmailField(field) {
        const isValid = Utils.validateEmail(field.value);
        this.setFieldValidation(field, isValid, isValid ? '' : 'Virheellinen sähköpostiosoite');
    },

    validateRequiredField(field) {
        const isValid = field.value.trim().length > 0;
        this.setFieldValidation(field, isValid, isValid ? '' : 'Tämä kenttä on pakollinen');
    },

    setFieldValidation(field, isValid, message) {
        field.classList.toggle('is-invalid', !isValid);
        field.classList.toggle('is-valid', isValid && field.value.length > 0);
        
        const existingFeedback = field.parentNode.querySelector('.invalid-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        if (!isValid && message) {
            const feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            feedback.style.color = 'var(--error)';
            feedback.style.fontSize = 'var(--text-sm)';
            feedback.style.marginTop = 'var(--space-xs)';
            feedback.textContent = message;
            field.parentNode.appendChild(feedback);
        }
    },

    highlightErrors(form, errorFields) {
        errorFields.forEach(fieldName => {
            const field = form.querySelector(`[name="${fieldName}"]`);
            if (field) {
                field.classList.add('is-invalid');
                field.focus();
            }
        });
    },

    clearValidationStates(form) {
        if (!form) return;
        
        form.querySelectorAll('.is-invalid, .is-valid').forEach(field => {
            field.classList.remove('is-invalid', 'is-valid');
        });
        
        form.querySelectorAll('.invalid-feedback').forEach(feedback => {
            feedback.remove();
        });
    },

    async submitContactForm(data, form) {
        this.setFormLoading(form, true);
        
        try {
            await new Promise(resolve => setTimeout(resolve, 1500));
            
            
            NotificationSystem.show(
                'Viesti lähetetty onnistuneesti! Otamme yhteyttä pian.',
                'success'
            );
            
            form.reset();
            this.clearValidationStates(form);
            
        } catch (error) {
            console.error('Contact form error:', error);
            NotificationSystem.show(
                'Viestin lähetys epäonnistui. Yritä uudelleen.',
                'error'
            );
        } finally {
            this.setFormLoading(form, false);
        }
    },

    async submitNewsletter(email, form) {
        this.setFormLoading(form, true);
        
        try {
            await new Promise(resolve => setTimeout(resolve, 1000));
            
            
            NotificationSystem.show(
                'Kiitos! Uutiskirje on tilattu onnistuneesti.',
                'success'
            );
            
            form.reset();
            
        } catch (error) {
            console.error('Newsletter error:', error);
            NotificationSystem.show(
                'Uutiskirjeen tilaus epäonnistui. Yritä uudelleen.',
                'error'
            );
        } finally {
            this.setFormLoading(form, false);
        }
    },

    setFormLoading(form, isLoading) {
        AppState.isLoading = isLoading;
        const submitButton = form.querySelector('button[type="submit"]');
        
        if (submitButton) {
            submitButton.disabled = isLoading;
            
            if (isLoading) {
                submitButton.classList.add('loading');
                const originalText = submitButton.textContent;
                submitButton.dataset.originalText = originalText;
                submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Lähetetään...';
            } else {
                submitButton.classList.remove('loading');
                submitButton.innerHTML = submitButton.dataset.originalText || 'Lähetä';
            }
        }
    }
};


const NavigationController = {
    init() {
        this.setupMobileMenu();
        this.setupSmoothScrolling();
        this.setupActiveNavigation();
        this.setupNavigationVisibility();
    },

    setupMobileMenu() {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        if (!navbarToggler || !navbarCollapse) return;

        navbarToggler.addEventListener('click', (e) => {
            e.preventDefault();
            const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
            
            navbarToggler.setAttribute('aria-expanded', !isExpanded);
            navbarCollapse.classList.toggle('show');
            
            const icon = navbarToggler.querySelector('i');
            if (icon) {
                icon.className = navbarCollapse.classList.contains('show') 
                    ? 'bi bi-x' 
                    : 'bi bi-list';
            }
        });

        document.addEventListener('click', (e) => {
            if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                
                const icon = navbarToggler.querySelector('i');
                if (icon) {
                    icon.className = 'bi bi-list';
                }
            }
        });

        navbarCollapse.addEventListener('click', (e) => {
            if (e.target.matches('.nav-link')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                
                const icon = navbarToggler.querySelector('i');
                if (icon) {
                    icon.className = 'bi bi-list';
                }
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
                navbarToggler.focus();
            }
        });
    },

    setupSmoothScrolling() {
        document.addEventListener('click', (e) => {
            const link = e.target.closest('a[href^="#"]');
            if (!link) return;

            const href = link.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();

            const target = document.querySelector(href);
            if (target) {
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                if (history.pushState) {
                    history.pushState(null, null, href);
                }
            }
        });
    },

    setupActiveNavigation() {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            
            if (linkPath === currentPath || 
                (currentPath === '/' && linkPath === '/index.php') ||
                (currentPath === '/index.php' && linkPath === '/')) {
                link.classList.add('active');
            }
        });
    },

    setupNavigationVisibility() {
        const navbar = document.querySelector('.angle-banner');
        
        if (!navbar) return;

        const handleScroll = Utils.throttle(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }, 100);

        window.addEventListener('scroll', handleScroll, { passive: true });
    }
};


const AccordionController = {
    init() {
        this.setupAccordions();
    },

    setupAccordions() {
        document.addEventListener('click', (e) => {
            const button = e.target.closest('.accordion-button');
            if (!button) return;

            e.preventDefault();

            const targetId = button.getAttribute('data-bs-target');
            const target = document.querySelector(targetId);
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            const parentAccordion = button.closest('.accordion');
            if (parentAccordion) {
                const otherButtons = parentAccordion.querySelectorAll('.accordion-button');
                otherButtons.forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.setAttribute('aria-expanded', 'false');
                        otherButton.classList.add('collapsed');
                        
                        const otherTargetId = otherButton.getAttribute('data-bs-target');
                        const otherTarget = document.querySelector(otherTargetId);
                        if (otherTarget) {
                            otherTarget.classList.remove('show');
                        }
                    }
                });
            }

            if (isExpanded) {
                button.setAttribute('aria-expanded', 'false');
                button.classList.add('collapsed');
                if (target) target.classList.remove('show');
            } else {
                button.setAttribute('aria-expanded', 'true');
                button.classList.remove('collapsed');
                if (target) target.classList.add('show');
            }
        });
    }
};


const NotificationSystem = {
    show(message, type = 'success', duration = 5000) {
        const existing = document.querySelector('.notification');
        if (existing) {
            this.hide(existing);
        }

        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.setAttribute('role', 'alert');
        notification.setAttribute('aria-live', 'polite');
        
        const icons = {
            success: 'bi-check-circle',
            error: 'bi-exclamation-circle',
            warning: 'bi-exclamation-triangle',
            info: 'bi-info-circle'
        };
        
        notification.innerHTML = `
            <div style="display: flex; align-items: center; gap: var(--space-sm);">
                <i class="bi ${icons[type] || icons.info}"></i>
                <span>${Utils.sanitizeInput(message)}</span>
                <button type="button" class="notification-close" aria-label="Sulje ilmoitus" style="
                    background: none;
                    border: none;
                    color: inherit;
                    font-size: var(--text-lg);
                    cursor: pointer;
                    margin-left: auto;
                    opacity: 0.7;
                    transition: opacity var(--transition-base);
                " onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.7'">
                    <i class="bi bi-x"></i>
                </button>
            </div>
        `;

        document.body.appendChild(notification);

        requestAnimationFrame(() => {
            notification.classList.add('show');
        });

        const hideTimer = setTimeout(() => {
            this.hide(notification);
        }, duration);

        const closeButton = notification.querySelector('.notification-close');
        closeButton.addEventListener('click', () => {
            clearTimeout(hideTimer);
            this.hide(notification);
        });

        return notification;
    },

    hide(notification) {
        if (!notification || !notification.parentNode) return;

        notification.classList.remove('show');
        
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }
};


const PerformanceOptimizer = {
    init() {
        this.setupLazyLoading();
        this.setupImageOptimization();
        this.setupResourceHints();
    },

    setupLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                        }
                        
                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                            img.removeAttribute('data-srcset');
                        }
                        
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px'
            });

            document.querySelectorAll('img[data-src], img[data-srcset]').forEach(img => {
                img.classList.add('lazy');
                imageObserver.observe(img);
            });

            AppState.observers.set('images', imageObserver);
        }
    },

    setupImageOptimization() {
        document.querySelectorAll('img:not([loading])').forEach(img => {
            img.setAttribute('loading', 'lazy');
        });

        document.addEventListener('error', (e) => {
            if (e.target.tagName === 'IMG') {
                const img = e.target;
                
                if (!img.dataset.fallbackAttempted) {
                    img.dataset.fallbackAttempted = 'true';
                    img.src = '../images/placeholder.webp';
                }
            }
        }, true);
    },

    setupResourceHints() {
        const fontPreloads = [
            'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap'
        ];

        fontPreloads.forEach(href => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'style';
            link.href = href;
            document.head.appendChild(link);
        });
    }
};


const AccessibilityEnhancer = {
    init() {
        this.setupKeyboardNavigation();
        this.setupFocusManagement();
        this.setupARIALabels();
        this.setupReducedMotion();
    },

    setupKeyboardNavigation() {
    },

    setupFocusManagement() {
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab' && AppState.activeModals.size > 0) {
                const modal = document.querySelector('.cookie-modal.show');
                if (modal) {
                    this.trapFocus(e, modal);
                }
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-navigation');
        });
    },

    trapFocus(e, container) {
        const focusableElements = container.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];

        if (e.shiftKey) {
            if (document.activeElement === firstElement) {
                lastElement.focus();
                e.preventDefault();
            }
        } else {
            if (document.activeElement === lastElement) {
                firstElement.focus();
                e.preventDefault();
            }
        }
    },

    setupARIALabels() {
        document.querySelectorAll('input:not([aria-label]):not([aria-labelledby])').forEach(input => {
            const label = input.closest('.form-group')?.querySelector('label') ||
                         document.querySelector(`label[for="${input.id}"]`);
            
            if (!label && input.placeholder) {
                input.setAttribute('aria-label', input.placeholder);
            }
        });

        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(trigger => {
            const target = document.querySelector(trigger.getAttribute('data-bs-target'));
            if (target) {
                const isExpanded = target.classList.contains('show');
                trigger.setAttribute('aria-expanded', isExpanded);
                trigger.setAttribute('aria-controls', target.id || Utils.generateId());
            }
        });
    },

    setupReducedMotion() {
        const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
        
        const handleReducedMotion = (mq) => {
            AppState.isReducedMotion = mq.matches;
            document.body.classList.toggle('reduced-motion', mq.matches);
        };

        handleReducedMotion(mediaQuery);
        mediaQuery.addEventListener('change', handleReducedMotion);
    }
};


const ErrorHandler = {
    init() {
        this.setupGlobalErrorHandling();
        this.setupUnhandledRejections();
    },

    setupGlobalErrorHandling() {
        window.addEventListener('error', (e) => {
            console.error('Global error:', e.error);
            this.logError('JavaScript Error', e.error, {
                filename: e.filename,
                lineno: e.lineno,
                colno: e.colno
            });
        });
    },

    setupUnhandledRejections() {
        window.addEventListener('unhandledrejection', (e) => {
            console.error('Unhandled promise rejection:', e.reason);
            this.logError('Unhandled Promise Rejection', e.reason);
            
            e.preventDefault();
        });
    },

    logError(type, error, context = {}) {
        const errorInfo = {
            type,
            message: error?.message || error,
            stack: error?.stack,
            timestamp: new Date().toISOString(),
            userAgent: navigator.userAgent,
            url: window.location.href,
            context
        };

        console.error('Error logged:', errorInfo);
        
      
    }
};


const StatisticsCounter = {
    init() {
        this.setupCounterAnimation();
    },

    setupCounterAnimation() {
        const counters = document.querySelectorAll('.stat-number[data-target]');
        
        if (counters.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    },

    animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const suffix = element.getAttribute('data-suffix') || '';
        const duration = 2000; 
        const steps = 60;
        const stepValue = target / steps;
        let current = 0;
        let step = 0;

        const timer = setInterval(() => {
            step++;
            current = Math.min(step * stepValue, target);
            
            element.textContent = Math.floor(current) + suffix;
            
            if (step >= steps) {
                clearInterval(timer);
                element.textContent = target + suffix;
            }
        }, duration / steps);
    }
};

const App = {
    init() {
        
        AnimationController.init();
        CookieManager.init();
        FormHandler.init();
        NavigationController.init();
        AccordionController.init();
        PerformanceOptimizer.init();
        AccessibilityEnhancer.init();
        ErrorHandler.init();
        StatisticsCounter.init();
        
        this.setupPageSpecific();
        
        document.body.classList.add('app-ready');
        
    },

    setupPageSpecific() {
        const path = window.location.pathname;
        
        if (path.includes('services')) {
            this.enhanceServicesPage();
        }
        
        if (path.includes('contact')) {
            this.enhanceContactPage();
        }
        
        if (path.includes('faq')) {
            this.enhanceFAQPage();
        }
    },

    enhanceServicesPage() {
        const serviceLinks = document.querySelectorAll('a[href^="#"]');
        serviceLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const targetId = link.getAttribute('href');
                const target = document.querySelector(targetId);
                
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    },

    enhanceContactPage() {
        const messageField = document.querySelector('#message');
        if (messageField) {
            const counter = document.createElement('div');
            counter.className = 'character-counter';
            counter.style.cssText = `
                text-align: right;
                font-size: var(--text-sm);
                color: var(--muted);
                margin-top: var(--space-xs);
            `;
            
            messageField.addEventListener('input', () => {
                const length = messageField.value.length;
                counter.textContent = `${length}/1000`;
                
                if (length > 1000) {
                    counter.style.color = 'var(--error)';
                } else if (length > 800) {
                    counter.style.color = 'var(--warning)';
                } else {
                    counter.style.color = 'var(--muted)';
                }
            });
            
            messageField.parentNode.appendChild(counter);
            
            messageField.dispatchEvent(new Event('input'));
        }
    },

    enhanceFAQPage() {
    }
};


if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => App.init());
} else {
    App.init();
}

window.addEventListener('beforeunload', () => {
    AppState.observers.forEach(observer => {
        if (observer && typeof observer.disconnect === 'function') {
            observer.disconnect();
        }
    });
    
    AppState.timers.forEach(timer => {
        clearTimeout(timer);
        clearInterval(timer);
    });
});

window.ClearnexaApp = {
    Utils,
    NotificationSystem,
    CookieManager,
    AppState
};