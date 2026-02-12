// ===== ГЛАВНЫЙ JS ФАЙЛ =====
// Слайдеры, анимации, сетка

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // ===== 1. МОБИЛЬНОЕ МЕНЮ =====
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileNav = document.querySelector('.mobile-nav');
    
    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileNav.classList.toggle('active');
            
            const icon = this.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
        
        // Закрытие по клику на ссылку
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
        
        // Закрытие по клику вне меню
        document.addEventListener('click', function(e) {
            if (!mobileNav.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileNav.classList.remove('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    }

    // ===== 2. HERO СЛАЙДЕР =====
    class HeroSlider {
        constructor() {
            this.slides = document.querySelectorAll('.slide');
            this.dots = document.querySelectorAll('.slider-dot');
            this.prevBtn = document.querySelector('.slider-arrow.prev');
            this.nextBtn = document.querySelector('.slider-arrow.next');
            this.currentSlide = 0;
            this.autoPlayInterval = null;
            
            if (this.slides.length > 0) {
                this.init();
            }
        }
        
        init() {
            // Показываем первый слайд
            this.showSlide(0);
            
            // Добавляем обработчики
            if (this.dots.length) {
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.showSlide(index));
                });
            }
            
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
            }
            
            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => this.nextSlide());
            }
            
            // Автовоспроизведение
            this.startAutoPlay();
            
            // Остановка при наведении
            const slider = document.querySelector('.hero-slider');
            if (slider) {
                slider.addEventListener('mouseenter', () => this.stopAutoPlay());
                slider.addEventListener('mouseleave', () => this.startAutoPlay());
            }
        }
        
        showSlide(index) {
            if (index < 0) index = this.slides.length - 1;
            if (index >= this.slides.length) index = 0;
            
            // Скрываем все слайды
            this.slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Убираем активные точки
            this.dots.forEach(dot => {
                dot.classList.remove('active');
            });
            
            // Показываем текущий слайд
            this.slides[index].classList.add('active');
            if (this.dots[index]) {
                this.dots[index].classList.add('active');
            }
            
            this.currentSlide = index;
        }
        
        prevSlide() {
            this.showSlide(this.currentSlide - 1);
        }
        
        nextSlide() {
            this.showSlide(this.currentSlide + 1);
        }
        
        startAutoPlay() {
            this.stopAutoPlay();
            this.autoPlayInterval = setInterval(() => {
                this.nextSlide();
            }, 6000);
        }
        
        stopAutoPlay() {
            if (this.autoPlayInterval) {
                clearInterval(this.autoPlayInterval);
                this.autoPlayInterval = null;
            }
        }
    }

    // ===== 3. АККОРДЕОН РАСПИСАНИЯ =====
    class ScheduleAccordion {
        constructor() {
            this.accordionItems = document.querySelectorAll('.accordion-item');
            
            if (this.accordionItems.length > 0) {
                this.init();
            }
        }
        
        init() {
            this.accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                
                if (header) {
                    header.addEventListener('click', () => {
                        this.toggleItem(item);
                    });
                }
            });
        }
        
        toggleItem(item) {
            const isActive = item.classList.contains('active');
            
            // Закрываем все
            this.accordionItems.forEach(i => {
                i.classList.remove('active');
            });
            
            // Открываем текущий, если не был открыт
            if (!isActive) {
                item.classList.add('active');
            }
        }
    }

    // ===== 4. КАРУСЕЛЬ ОТЗЫВОВ =====
    class ReviewsCarousel {
        constructor() {
            this.carousel = document.querySelector('.reviews-carousel');
            this.reviews = document.querySelectorAll('.review-card');
            this.prevBtn = document.querySelector('.reviews-prev');
            this.nextBtn = document.querySelector('.reviews-next');
            this.currentIndex = 0;
            this.visibleCount = this.getVisibleCount();
            
            if (this.reviews.length > 0) {
                this.init();
            }
        }
        
        init() {
            this.showReviews();
            
            window.addEventListener('resize', () => {
                this.visibleCount = this.getVisibleCount();
                this.showReviews();
            });
            
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => this.prev());
            }
            
            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => this.next());
            }
        }
        
        getVisibleCount() {
            if (window.innerWidth >= 1200) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }
        
        showReviews() {
            this.reviews.forEach((review, index) => {
                if (index >= this.currentIndex && index < this.currentIndex + this.visibleCount) {
                    review.style.display = 'block';
                    review.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    review.style.display = 'none';
                }
            });
        }
        
        prev() {
            this.currentIndex = Math.max(0, this.currentIndex - 1);
            this.showReviews();
        }
        
        next() {
            this.currentIndex = Math.min(
                this.reviews.length - this.visibleCount,
                this.currentIndex + 1
            );
            this.showReviews();
        }
    }

    // ===== 5. ГАЛЕРЕЯ ЛАЙТБОКС =====
    class GalleryLightbox {
        constructor() {
            this.galleryItems = document.querySelectorAll('.gallery-item');
            this.lightbox = document.querySelector('.lightbox-overlay');
            
            if (this.galleryItems.length > 0) {
                this.init();
            }
        }
        
        init() {
            this.galleryItems.forEach(item => {
                item.addEventListener('click', () => {
                    this.openLightbox(item);
                });
            });
        }
        
        openLightbox(item) {
            // Заглушка — в реальном проекте здесь будет открытие лайтбокса
            console.log('Open lightbox with:', item);
            alert('Здесь откроется увеличенное изображение');
        }
    }

    // ===== 6. ПАРАЛЛАКС ЭФФЕКТ =====
    class ParallaxEffect {
        constructor() {
            this.floatingElements = document.querySelectorAll('.floating-element');
            
            if (this.floatingElements.length > 0) {
                this.init();
            }
        }
        
        init() {
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                
                this.floatingElements.forEach(element => {
                    const speed = element.dataset.speed || 0.05;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            });
        }
    }

    // ===== 7. ФИЛЬТРЫ ГАЛЕРЕИ =====
    class GalleryFilters {
        constructor() {
            this.filters = document.querySelectorAll('.gallery-filter');
            this.items = document.querySelectorAll('.gallery-item');
            
            if (this.filters.length > 0) {
                this.init();
            }
        }
        
        init() {
            this.filters.forEach(filter => {
                filter.addEventListener('click', () => {
                    const category = filter.dataset.filter;
                    
                    // Обновляем активный фильтр
                    this.filters.forEach(f => f.classList.remove('active'));
                    filter.classList.add('active');
                    
                    // Фильтруем элементы
                    this.items.forEach(item => {
                        if (category === 'all' || item.dataset.category === category) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 10);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        }
    }

    // ===== 8. ФОРМА ОБРАТНОЙ СВЯЗИ =====
    class ContactForm {
        constructor() {
            this.form = document.getElementById('contactForm');
            
            if (this.form) {
                this.init();
            }
        }
        
        init() {
            this.form.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Простая валидация
                const name = document.getElementById('contactName')?.value;
                const phone = document.getElementById('contactPhone')?.value;
                const consent = document.getElementById('contactConsent')?.checked;
                
                if (!name || !phone || !consent) {
                    alert('Пожалуйста, заполните обязательные поля');
                    return;
                }
                
                // Показываем успех
                const success = document.querySelector('.contact-success');
                if (success) {
                    this.form.style.display = 'none';
                    success.style.display = 'block';
                    
                    setTimeout(() => {
                        this.form.style.display = 'block';
                        success.style.display = 'none';
                        this.form.reset();
                    }, 5000);
                }
            });
        }
    }

    // ===== 9. АНИМАЦИЯ ПРИ СКРОЛЛЕ =====
    class ScrollAnimation {
        constructor() {
            this.elements = document.querySelectorAll('.performance-card, .actor-3d-card, .gallery-item, .review-card');
            
            if (this.elements.length > 0) {
                this.init();
            }
        }
        
        init() {
            // Начальное состояние
            this.elements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });
            
            // Проверяем при загрузке и скролле
            this.checkVisibility();
            window.addEventListener('scroll', () => this.checkVisibility());
            window.addEventListener('resize', () => this.checkVisibility());
        }
        
        checkVisibility() {
            this.elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (rect.top < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }
    }

    // ===== 10. МАСКА ТЕЛЕФОНА =====
    class PhoneMask {
        constructor() {
            this.phoneInput = document.getElementById('contactPhone');
            
            if (this.phoneInput) {
                this.init();
            }
        }
        
        init() {
            this.phoneInput.addEventListener('input', (e) => {
                let value = e.target.value.replace(/\D/g, '');
                
                if (value.length > 0) {
                    value = '+7 (' + value.substring(1);
                    
                    if (value.length > 7) {
                        value = value.substring(0, 7) + ') ' + value.substring(7);
                    }
                    if (value.length > 12) {
                        value = value.substring(0, 12) + '-' + value.substring(12, 14);
                    }
                    if (value.length > 15) {
                        value = value.substring(0, 15) + '-' + value.substring(15, 17);
                    }
                    if (value.length > 18) {
                        value = value.substring(0, 18);
                    }
                }
                
                e.target.value = value;
            });
        }
    }

    // ===== ЗАПУСК ВСЕХ МОДУЛЕЙ =====
    new HeroSlider();
    new ScheduleAccordion();
    new ReviewsCarousel();
    new GalleryLightbox();
    new ParallaxEffect();
    new GalleryFilters();
    new ContactForm();
    new ScrollAnimation();
    new PhoneMask();
    
    // ===== ОБНОВЛЕНИЕ ГОДА В ФУТЕРЕ =====
    const yearElement = document.querySelector('.footer-bottom p');
    if (yearElement) {
        const currentYear = new Date().getFullYear();
        yearElement.innerHTML = yearElement.innerHTML.replace(/2025|2026/g, currentYear);
    }
});