// Основной JavaScript файл для сайта театра

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Мобильное меню
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileNav = document.querySelector('.mobile-nav');
    
    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileNav.classList.toggle('active');
            
            // Меняем иконку
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Закрытие меню при клике на ссылку
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
            });
        });
    }
    
    // 2. Плавная прокрутка для всех ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // 3. Фильтрация спектаклей по месяцам (страница репертуара)
    const monthFilters = document.querySelectorAll('.month-filter');
    const monthSections = document.querySelectorAll('.month-section');
    
    if (monthFilters.length > 0) {
        monthFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Убираем активный класс у всех фильтров
                monthFilters.forEach(f => f.classList.remove('active'));
                
                // Добавляем активный класс текущему фильтру
                this.classList.add('active');
                
                const month = this.getAttribute('data-month');
                
                // Показываем/скрываем секции
                monthSections.forEach(section => {
                    if (month === 'all' || section.id === month) {
                        section.style.display = 'block';
                        // Анимация появления
                        section.style.animation = 'fadeIn 0.5s ease-out';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });
        });
    }
    
    // 4. Анимация появления элементов при скролле
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOnScroll = function() {
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('active');
            }
        });
    };
    
    // Проверяем при загрузке и при скролле
    window.addEventListener('load', revealOnScroll);
    window.addEventListener('scroll', revealOnScroll);
    
    // 5. Подсветка активного раздела в навигации
    const sections = document.querySelectorAll('section[id], main[id]');
    const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
    
    const highlightNavOnScroll = function() {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}` || 
                link.getAttribute('href')?.includes(current)) {
                link.classList.add('active');
            }
        });
    };
    
    window.addEventListener('scroll', highlightNavOnScroll);
    
    // 6. Динамическое обновление года в футере
    const yearElement = document.querySelector('.footer-bottom p');
    if (yearElement) {
        const currentYear = new Date().getFullYear();
        yearElement.innerHTML = yearElement.innerHTML.replace('2025', currentYear);
    }
    
    // 7. Анимация при наведении на карточки спектаклей
    const performanceCards = document.querySelectorAll('.performance-card, .actor-card');
    
    performanceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.2)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
        });
    });
    
    // 8. Валидация формы бронирования (если есть)
    const bookingForm = document.querySelector('.booking-form');
    
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Простая валидация
            const nameInput = this.querySelector('input[type="text"]');
            const phoneInput = this.querySelector('input[type="tel"]');
            const ticketsInput = this.querySelector('input[type="number"]');
            
            let isValid = true;
            
            // Валидация имени
            if (!nameInput.value.trim()) {
                alert('Пожалуйста, введите ваше имя');
                isValid = false;
            }
            
            // Валидация телефона
            const phoneRegex = /^[\+]?[0-9\s\-\(\)]+$/;
            if (!phoneRegex.test(phoneInput.value)) {
                alert('Пожалуйста, введите корректный номер телефона');
                isValid = false;
            }
            
            // Валидация количества билетов
            if (ticketsInput.value < 1 || ticketsInput.value > 10) {
                alert('Количество билетов должно быть от 1 до 10');
                isValid = false;
            }
            
            if (isValid) {
                // Здесь обычно отправка формы на сервер
                alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
                this.reset();
            }
        });
    }
    
    // 9. Ленивая загрузка изображений
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    
                    if (src) {
                        img.src = src;
                        img.classList.add('loaded');
                    }
                    
                    observer.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
});