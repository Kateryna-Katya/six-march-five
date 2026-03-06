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
            <h1>Политика конфиденциальности</h1>

            <p>
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и пользователями <strong><?= $domainTitle ?></strong>, как для оказания 
                образовательных услуг и доступа к IT-платформе, так и для других взаимодействий в электронном
                формате, включая участие в программах обучения, экспертных вебинарах и акциях.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние инструменты разработки и 
                сервисы (например, GitHub или Google Analytics), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных образовательных услуг: доступа к личному кабинету,
                участия в практических занятиях, получения сертификатов и внедрения инновационных AI-инструментов. Для
                предотвращения утечки данных мы используем передовую цифровую инфраструктуру и современные протоколы шифрования.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации (в целях подтверждения прохождения обучения). В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель обучения была достигнута или по запросу студента.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>учебные страницы и модули, посещаемые пользователем;</li>
                <li>просмотры информационных и рекламных блоков школы;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае связи через мессенджеры или звонка).</li>
            </ul>

            <p>
                При регистрации на платформе или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации студента и персонализации пути обучения:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>электронная почта и номер телефона для оперативной связи с куратором;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>информация о договорах на обучение между студентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах в техподдержку и заявках на курсы;</li>
                <li>сведения о пройденных программах и полученных навыках;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная законодательством Италии и ЕС.</li>
            </ul>

            <h2>Цели обработки персональных данных:</h2>
            <ul>
                <li>предоставление образовательных услуг и доступа к учебной платформе;</li>
                <li>учет пожеланий при разработке новых программ и AI-инструментов;</li>
                <li>информирование об акциях, скидках и новых материалах в блоге через e-mail;</li>
                <li>обеспечение экспертной поддержки на всех этапах обучения.</li>
            </ul>

            <h2>
                <strong><?= $domainTitle ?></strong> не предоставляет данные пользователей третьим лицам, за исключением:
            </h2>
            <ul>
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Италии в соответствии с законодательством;</li>
                <li>случаев стратегического развития или реорганизации компании.</li>
            </ul>

            <h2>Использование файлов cookie</h2>
            <p>
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Италия), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любое время 
                отключить Cookies в настройках своего браузера.
            </p>

            <h2>Права пользователя</h2>
            <p>
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами 
                <strong>GDPR</strong>, пожалуйста, свяжитесь с поддержкой <strong><?= $domainTitle ?></strong> по адресу: 
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026. Платформа года уже доступна в Европе.</p>
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