<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Атом Delivery - Электромобиль будущего</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --primary-light: #3b82f6;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }
        
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }
        
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('img/av5.jpg') center/cover no-repeat fixed;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.15;
        }
        
        .hero-content {
            z-index: 2;
            padding-top: 80px;
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--primary-light);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }
        
        .tech-card {
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            background: white;
            height: 100%;
        }
        
        .tech-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .tech-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .tech-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .team-card {
            border-radius: 20px;
            overflow: hidden;
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            background: white;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .team-card img {
            height: 280px;
object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .team-card:hover img {
            transform: scale(1.03);
        }
        
        .photo-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 3rem 0;
        }
        
        .gallery-item {
            border-radius: 16px;
            overflow: hidden;
            height: 280px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }
        
        .stats-item {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .stats-item:hover {
            transform: translateY(-10px);
        }
        
        .stats-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        
        .timeline {
            position: relative;
            padding-left: 50px;
            margin: 2rem 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary-light);
            border-radius: 4px;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 2.5rem;
        }
        
        .timeline-dot {
            position: absolute;
            left: -44px;
            top: 0;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            margin: 1rem;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(37, 99, 235, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }
        
        footer {
background: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.2s ease;
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
            40% {transform: translateY(-20px) translateX(-50%);}
            60% {transform: translateY(-10px) translateX(-50%);}
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }
        
        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
        }
        
        .btn-outline-white {
            border: 2px solid white;
            color: white;
            background: transparent;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-white:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
        }
        
        .text-gradient {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
            filter: blur(40px);
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            background: var(--primary);
            top: -100px;
            left: -100px;
            animation: float 15s infinite ease-in-out;
        }
        
        .shape-2 {
            width: 400px;
            height: 400px;
background: var(--secondary);
            bottom: -150px;
            right: -100px;
            animation: float 18s infinite ease-in-out reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(50px, 50px); }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                min-height: 90vh;
                text-align: center;
                background-attachment: scroll;
            }
            
            .photo-gallery {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Навигация -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <span class="text-primary">Атом</span> Delivery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">О проекте</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Возможности</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tech">Технологии</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Галерея</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Команда</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#contact">Связаться</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Герой секция -->
    <section class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold mb-4 animateanimated animatefadeIn">Электромобиль будущего для доставки нового поколения</h1>
                    <p class="lead mb-5 animateanimated animatefadeIn animate__delay-1s">Оптимизированный, экологичный и технологичный транспорт для курьерских служб.</p>
                    <a href="#about" class="btn btn-light btn-lg px-4 py-3 me-3 animateanimated animatefadeIn animate__delay-2s">Узнать больше</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3 animateanimated animatefadeIn animate__delay-2s">Контакты</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <svg width="30" height="50" viewBox="0 0 30 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="12" width="6" height="18" rx="3" fill="white"/>
                <path d="M15 38L20 33L10 33L15 38Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- О проекте -->
    <section id="about" class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4 section-title">Инновационный подход к доставке</h2>
                    <p class="lead mb-4">Атом Delivery — это революционный электромобиль, разработанный специально для нужд курьерских служб, логистических компаний и сервисов доставки.</p>
                    <p>Наш автомобиль создан с нуля для решения задач доставки, а не адаптирован из пассажирских моделей. Это позволяет достичь беспрецедентной эффективности и экономичности.</p>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/a2.jpg" alt="Атом Delivery" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 rounded-end" style="transform: translateY(50%);">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-bolt fs-1 me-3"></i>
                                <div>
                                    <div class="fs-6">Запас хода</div>
                                    <div class="fs-4 fw-bold">350 км</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5 pt-5">
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-truck fa-lg text-white"></i>
                    </div>
                    <h3 class="h4 text-center mb-3">Оптимизированная конструкция</h3>
                    <p class="text-center">Отсутствие пассажирских мест и увеличенный багажный отсек (2.5 м³) позволяют перевозить больше грузов за один рейс.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-bolt fa-lg text-white"></i>
                    </div>
                    <h3 class="h4 text-center mb-3">Экономия времени</h3>
                    <p class="text-center">Интеллектуальная система навигации и управления сокращает время доставки на 25-30% по сравнению с обычными автомобилями.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-leaf fa-lg text-white"></i>
                    </div>
                    <h3 class="h4 text-center mb-3">Экологичность</h3>
                    <p class="text-center">Нулевые выбросы и в 3 раза меньший углеродный след по сравнению с традиционными автомобилями с ДВС.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Статистика -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">350+</div>
                        <div class="text-muted">километров пробега</div>
                    </div>
</div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">2.5 м³</div>
                        <div class="text-muted">грузового пространства</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">30%</div>
                        <div class="text-muted">экономия на доставке</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">0</div>
                        <div class="text-muted">выбросов CO₂</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section id="features" class="py-5 my-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5 section-title mx-auto">Ключевые преимущества</h2>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-lg-2">
                    <h3 class="fw-bold mb-4">Умная система управления доставкой</h3>
                    <p>Наш автомобиль оснащен интегрированной системой управления доставкой, которая автоматически оптимизирует маршруты в реальном времени, учитывая:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Пробки и дорожную ситуацию</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Приоритетность доставок</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Уровень заряда батареи</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Особенности груза</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1 mb-4 mb-lg-0">
                    <img src="img/nav.webp" alt="Умная навигация" class="img-fluid rounded-3 shadow">
                </div>
            </div>
            
            <div class="row align-items-center mt-5 pt-5">
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-4">Экономическая эффективность</h3>
                    <p>Атом Delivery позволяет значительно сократить расходы на доставку:</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5">До 60%</h4>
                                    <p class="small">экономии на топливе</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-cogs fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5">На 40%</h4>
                                    <p class="small">меньше обслуживания</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
<div class="me-3 text-primary">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5">25-30%</h4>
                                    <p class="small">быстрее доставка</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-tree fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="h5">0%</h4>
                                    <p class="small">выбросов CO₂</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="img/ttt.webp" alt="Экономическая эффективность" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>


    <!-- Фотогалерея -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Атом Delivery в деталях</h2>
            <div class="photo-gallery">
                <div class="gallery-item">
                    <img src="img/av3.jpg" alt="Внутренняя отделка">
                </div>
                <div class="gallery-item">
                    <img src="img/bat.webp" alt="Аккумуляторная система">
                </div>
                <div class="gallery-item">
                    <img src="img/bag.jpg" alt="Грузовое отделение">
                </div>
                <div class="gallery-item">
                    <img src="img/pan.jpg" alt="Панель управления">
                </div>
                <div class="gallery-item">
                    <img src="img/power.png" alt="Процесс зарядки">
                </div>
                <div class="gallery-item">
                    <img src="img/av5.jpg" alt="Автомобиль в городской среде">
                </div>
            </div>
        </div>
    </section>

    <!-- Технологии -->
    <section id="tech" class="py-5 my-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Передовые технологии</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <img src="img/atom.webp" class="card-img-top" alt="ATOM OS">
                        <div class="card-body">
                            <h3 class="fw-bold">ATOM OS</h3>
                            <p>Кастомизированная операционная система на базе Android Open Source Project, специально адаптированная для автомобильной платформы.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <img src="img/bord.webp" class="card-img-top" alt="Архитектура">
                        <div class="card-body">
                            <h3 class="fw-bold">Тонкий клиент + сервис</h3>
                            <p>Распределённая архитектура между бортовым компьютером и облачными серверами для максимальной производительности.</p>
</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card h-100">
                        <img src="img/flutter.jpg" class="card-img-top" alt="Flutter">
                        <div class="card-body">
                            <h3 class="fw-bold">Flutter UI</h3>
                            <p>Современный кроссплатформенный фреймворк для создания красивых и отзывчивых интерфейсов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Команда -->
    <section id="team" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Наша команда</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card h-100">
                        <img src="img/nazar.webp" class="card-img-top" alt="Тимлид">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">Назар Клименко</h3>
                            <p class="text-muted">Тимлид Flutter-разработчиков</p>
                            <p>Опыт работы с мобильными и автомобильными интерфейсами более 8 лет.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card h-100">
                        <img src="img/alex.jpg" class="card-img-top" alt="Бэкенд разработчик">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">Алексей Петров</h3>
                            <p class="text-muted">Архитектор микросервисов</p>
                            <p>Специалист по распределённым системам и интеграции оборудования.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card h-100">
                        <img src="img/women.webp" class="card-img-top" alt="Android разработчик">
                        <div class="card-body text-center">
                            <h3 class="fw-bold">Ирина Смирнова</h3>
                            <p class="text-muted">Android-инженер</p>
                            <p>Эксперт по кастомизации AOSP и системной интеграции.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="py-5 gradient-bg text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-4">Готовы к сотрудничеству?</h2>
                    <p class="lead mb-5">Оставьте заявку, и мы свяжемся с вами для обсуждения деталей.</p>
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-5">
                            <input type="text" class="form-control form-control-lg" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-5">
                            <input type="email" class="form-control form-control-lg" placeholder="Email">
                        </div>
                        <div class="col-10">
                            <textarea class="form-control form-control-lg" rows="3" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-light btn-lg px-5 py-3">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- Футер -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="h4 mb-3"><span class="text-primary">Атом</span> Delivery</h3>
                    <p>Инновационный электромобиль для курьерских служб. Совместный проект IBS и Atom.</p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h4 class="h5 mb-3">Навигация</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#about">О проекте</a></li>
                        <li class="mb-2"><a href="#features">Возможности</a></li>
                        <li class="mb-2"><a href="#tech">Технологии</a></li>
                        <li class="mb-2"><a href="#team">Команда</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h4 class="h5 mb-3">Контакты</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="mailto:info@atomdelivery.ru">info@atomdelivery.ru</a></li>
                        <li class="mb-2"><a href="tel:+78001234567">8 (800) 123-45-67</a></li>
                        <li class="mb-2">Москва, ул. Ленина, 1</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4 class="h5 mb-3">Соцсети</h4>
                    <div class="d-flex">
                        <a href="#" class="me-3 text-white"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg></a>
                        <a href="#" class="me-3 text-white"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg></a>
                        <a href="#" class="me-3 text-white"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27
5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg></a>
                        <a href="#" class="text-white"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">© 2025 Атом Delivery. Все права защищены.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">Разработано с <svg width="16" height="16" fill="red" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> командой IBS и Atom</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Плавная прокрутка
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Анимация при скролле
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.tech-card, .team-card, .gallery-item');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if(elementPosition < screenPosition) {
                    element.classList.add('animateanimated', 'animatefadeInUp');
                }
            });
        };
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>
