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
            <h1>Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей платформой, обеспечить её стабильную работу и
                анализировать активность студентов, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей и как вы можете ими
                управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия 
                и предпочтения (например, язык интерфейса, настройки региона Италия и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их повторно при каждом визите.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования личного кабинета и учебных модулей. 
                    Они позволяют вам перемещаться по страницам <strong><?= $domainTitle ?></strong> и 
                    использовать базовые возможности IT-инфраструктуры. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как студенты
                    используют наш сайт, помогая нам оптимизировать структуру учебных программ.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    платформе запоминать ваш прогресс для предоставления более
                    персонализированного опыта в рамках наших образовательных услуг.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки предложений об инновационных технологиях и 
                    курсах, соответствующих вашим интересам в сфере IT.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели использования файлов cookie в <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение безопасного доступа к учебным материалам.</li>
                <li>Анализ поведения пользователей для улучшения интерфейса платформы.</li>
                <li>Персонализация контента для удобства пользователей в Италии и других странах ЕС.</li>
                <li>Информирование о новых AI-инструментах и программах обучения.</li>
            </ul>

            <h2>Ваш выбор и управление файлами cookie</h2>
            <p>
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить настройки в браузере. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                тому, что некоторые функции нашей IT-школы станут недоступны.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На страницах <strong><?= $domainTitle ?></strong> мы используем современные сервисы 
                (например, Google Analytics, скрипты анимации GSAP или библиотеки визуализации данных). 
                Мы рекомендуем вам ознакомиться с политиками конфиденциальности этих поставщиков.
            </p>

            <h2>Обновления политики</h2>
            <p>
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в 
                законодательстве ЕС или технологиях обучения. Продолжение использования 
                платформы означает ваше согласие с обновленными условиями.
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли вопросы касательно политики использования cookie в 
                <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697638629">+39 06 9763 8629</a><br>
                Адрес: Via dei Condotti, 10, 00187 Roma RM, Italy
            </p>
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