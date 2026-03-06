/**
 * Project: <?= $domainTitle ?> (IT-School)
 * Libraries: GSAP, SplitType, AOS, Swiper, Anime.js, simpleParallax, Lucide
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ БАЗОВЫХ БИБЛИОТЕК ---
    
    // Иконки Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // AOS (Анимация при скролле)
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-out-cubic'
    });

    // Simple Parallax для изображений
    const parallaxImages = document.querySelectorAll('.parallax-img');
    if (parallaxImages.length > 0 && typeof simpleParallax !== 'undefined') {
        new simpleParallax(parallaxImages, {
            delay: .6,
            transition: 'cubic-bezier(0,0,0,1)',
            scale: 1.3
        });
    }


    // --- 2. МОБИЛЬНОЕ МЕНЮ ---

    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-menu__link');

    const toggleMenu = () => {
        burger.classList.toggle('is-active');
        mobileMenu.classList.toggle('is-active');
        document.body.style.overflow = mobileMenu.classList.contains('is-active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);

    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });


    // --- 3. ЭФФЕКТЫ ХЕДЕРА ПРИ СКРОЛЛЕ ---

    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.08)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(255, 255, 255, 0.8)';
            header.style.boxShadow = 'none';
        }
    });


    // --- 4. GSAP: ВХОДНАЯ АНИМАЦИЯ (HERO) ---

    if (typeof gsap !== 'undefined') {
        // Разбивка текста (если есть SplitType)
        const titleElement = document.querySelector('.hero__title');
        let titleChars = null;
        
        if (typeof SplitType !== 'undefined' && titleElement) {
            const text = new SplitType(titleElement, { types: 'chars, words' });
            titleChars = text.chars;
        }

        const tl = gsap.timeline({ defaults: { ease: 'power4.out' } });

        tl.from('.hero__badge', {
            y: 20,
            opacity: 0,
            duration: 0.8,
            delay: 0.5
        })
        .from(titleChars || titleElement, {
            y: 80,
            opacity: 0,
            rotateX: -90,
            stagger: 0.02,
            duration: 1
        }, "-=0.5")
        .from('.hero__subtitle', {
            y: 20,
            opacity: 0,
            duration: 0.8
        }, "-=0.6")

        .from('.hero__stats .stat-item', {
            y: 20,
            opacity: 0,
            stagger: 0.2,
            duration: 0.6
        }, "-=0.4")
        .from('.hero__visual', {
            x: 100,
            opacity: 0,
            duration: 1.2,
            ease: 'expo.out'
        }, "-=1");

        // Бесконечное "плавание" карточки кода
        gsap.to('.code-card', {
            y: 15,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
    }


    // --- 5. КАРУСЕЛЬ ОТЗЫВОВ (SWIPER) ---

    if (typeof Swiper !== 'undefined') {
        new Swiper('.reviews-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: { delay: 5000 },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    }


    // --- 6. FAQ АККОРДЕОН ---

    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Закрываем остальные (опционально, для эффекта "одиночного открытия")
            accordionItems.forEach(i => i.classList.remove('active'));
            
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });


    // --- 7. КАРТОЧКИ КУРСОВ (MICRO-INTERACTIONS) ---

    if (typeof anime !== 'undefined') {
        document.querySelectorAll('.course-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                anime({
                    targets: card.querySelector('.course-card__icon'),
                    scale: 1.15,
                    rotate: '10deg',
                    duration: 400,
                    easing: 'easeOutQuad'
                });
            });
            card.addEventListener('mouseleave', () => {
                anime({
                    targets: card.querySelector('.course-card__icon'),
                    scale: 1,
                    rotate: '0deg',
                    duration: 400,
                    easing: 'easeOutQuad'
                });
            });
        });

        // Анимация точки в логотипе
        anime({
            targets: '.logo__dot',
            scale: [1, 1.4, 1],
            opacity: [1, 0.7, 1],
            duration: 2500,
            loop: true,
            easing: 'easeInOutQuad'
        });
    }


    // --- 8. ФОРМА КОНТАКТОВ + КАПЧА ---

    const mainForm = document.getElementById('mainForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaText = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaInput');
    
    // Генерация математической капчи
    let num1 = Math.floor(Math.random() * 7) + 1;
    let num2 = Math.floor(Math.random() * 8) + 1;
    let captchaResult = num1 + num2;
    if (captchaText) captchaText.textContent = `${num1} + ${num2}`;

    // Валидация телефона (только цифры и +)
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });
    }

    if (mainForm) {
        mainForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Проверка капчи
            if (parseInt(captchaInput.value) !== captchaResult) {
                alert('Пожалуйста, решите математический пример правильно.');
                return;
            }

            const btn = mainForm.querySelector('button');
            const successOverlay = document.getElementById('formSuccess');

            // Имитация отправки
            btn.disabled = true;
            btn.textContent = 'Отправка данных...';

            setTimeout(() => {
                successOverlay.style.display = 'flex';
                if (typeof anime !== 'undefined') {
                    anime({
                        targets: successOverlay,
                        opacity: [0, 1],
                        scale: [0.9, 1],
                        duration: 600,
                        easing: 'easeOutExpo'
                    });
                }
            }, 1500);
        });
    }


    // --- 9. COOKIE POPUP ---

    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('is-show');
        }, 3000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('is-show');
        });
    }

});