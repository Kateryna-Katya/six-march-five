<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> | Инновационная IT-школа
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='8' fill='%230055FF'/%3E%3Ccircle cx='16' cy='16' r='6' fill='white'/%3E%3Ccircle cx='24' cy='8' r='4' fill='%23FF6B00'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>

                <ul class="menu">
                    <li><a href="./#hero" class="menu__link">Главная</a></li>
                    <li><a href="./#courses" class="menu__link">Программы</a></li>
                    <li><a href="./#about" class="menu__link">О нас</a></li>
                    <li><a href="./#reviews" class="menu__link">Отзывы</a></li>
                    <li><a href="./#faq" class="menu__link">FAQ</a></li>
                </ul>

                <div class="header__actions">
                    <a href="./#contact" class="btn btn--primary">Связаться</a>
                    <button class="burger" aria-label="Menu">
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь», «Студент») и <strong><?= $domainTitle ?></strong>
                (далее — «Школа», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                образовательные услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Школа предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным учебным материалам, практическим заданиям, экспертным консультациям и AI-инструментам 
                для реализации реальных задач (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с образовательной платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                целях профессионального развития. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, нарушает авторские права Школы или
                    интеллектуальную собственность других студентов.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong> в Европе.
                </li>
                <li>
                    Копировать, перепродавать или тиражировать методики и программные решения, 
                    предоставленные в рамках обучения, без предварительного 
                    письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о своем опыте при регистрации на программы обучения.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая учебные программы, графику,
                видео-лекции, логотипы и уникальный программный код (далее — «Контент»), является объектом интеллектуальной
                собственности Школы. Вам предоставляется ограниченная, персональная
                лицензия на использование Контента исключительно для личного обучения и карьерного роста. 
                Любое коммерческое использование Контента без согласования строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Образовательные услуги и материалы предоставляются по принципу «как
                есть» (as is). Мы не даем гарантий, что использование платформы будет 
                бесперебойным, хотя прилагаем все усилия для стабильной работы 24/7. 
                Школа не гарантирует абсолютную точность данных в контексте стремительно 
                меняющегося IT-рынка в <strong>Италии</strong> и странах ЕС.
            </p>
            <p>
                <strong><?= $domainTitle ?></strong> не несет ответственности за любые прямые или косвенные
                убытки, или за отсутствие ожидаемого карьерного результата, так как успех обучения 
                напрямую зависит от личных усилий и компетенций Пользователя.
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять настоящие Условия для соответствия 
                новым технологиям или законам ЕС. Изменения вступают в силу с момента их публикации. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                изменений означает ваше согласие с новой редакцией Соглашения.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры стороны будут стремиться разрешить путем переговоров с нашей экспертной поддержкой.
                В случае невозможности достижения согласия, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Оператора в <strong>Италии (Рим)</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с использованием платформы,
                пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697638629">+39 06 9763 8629</a><br>
                Адрес: Via dei Condotti, 10, 00187 Roma RM, Italy
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026. Предложение активно в странах ЕС.</p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">
                        Передовая цифровая инфраструктура для вашего обучения. Постройте карьеру, которая работает на
                        вас.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Меню</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#courses">Программы</a></li>
                        <li><a href="./#about">О нас</a></li>
                        <li><a href="./#reviews">Отзывы</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone" class="icon--sm"></i>
                            <a href="tel:+390697638629">+39 06 9763 8629</a>
                        </li>
                        <li>
                            <i data-lucide="mail" class="icon--sm"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin" class="icon--sm"></i>
                            <span>Via dei Condotti, 10, 00187 Roma RM, Italy</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                    2026
                    <?= $domainTitle ?>. Все права защищены. Платформа доступна в Европе.
                </p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu">
        <div class="mobile-menu__inner">
            <ul class="mobile-menu__list">
                <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
                <li><a href="./#courses" class="mobile-menu__link">Программы</a></li>
                <li><a href="./#about" class="mobile-menu__link">О нас</a></li>
                <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
                <li><a href="./#faq" class="mobile-menu__link">FAQ</a></li>
            </ul>
            <a href="tel:+390697638629" class="mobile-menu__phone">+39 06 9763 8629</a>
        </div>
    </div>
    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                    политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="script.js"></script>
</body>

</html>