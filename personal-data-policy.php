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
            <h1>Политика касаемо обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях и студентах (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных,
                    обеспечивающих их доступность в сети интернет по адресу 
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта и потребитель образовательных услуг.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие
                    (операция), совершаемое с использованием средств автоматизации или без них с персональными данными студентов.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность
                    от неправомерного доступа, уничтожения, изменения или блокирования данных в инфраструктуре <strong><?= $domainTitle ?></strong>.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество (для оформления сертификатов);</li>
                        <li>Адрес электронной почты (для доступа к учебным материалам);</li>
                        <li>Номера телефонов (валидация по стандартам Италии и ЕС).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            На сайте происходит сбор обезличенных данных
                            о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            интернет-статистики (Google Аналитика и др.). Эти данные включают 
                            IP-адрес, тип браузера и время доступа к лекциям.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные в рамках настоящей Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к личному кабинету 
                    образовательной платформы.
                </li>
                <li>
                    Установление обратной связи, включая направление
                    уведомлений о новых AI-инструментах и пошаговых путях обучения.
                </li>
                <li>
                    Заключение и исполнение договоров на образовательные и экспертные услуги в ЕС.
                </li>
                <li>
                    Информирование о программах пассивного дохода и обновлениях платформы. 
                    Вы можете отказаться от рассылок, направив письмо на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2>5. Правовые основания обработки</h2>
            <p>
                Оператор обрабатывает персональные данные Пользователя только:
            </p>
            <ul>
                <li>
                    При наличии добровольного согласия, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    При условии, что сохранение файлов «cookie» разрешено в настройках вашего браузера.
                </li>
            </ul>

            <h2>6. Порядок сбора и безопасности данных</h2>
            <ul>
                <li>
                    Оператор применяет технические меры защиты данных в соответствии с европейскими нормами кибербезопасности.
                </li>
                <li>
                    Данные никогда не передаются третьим лицам без вашего согласия, 
                    за исключением требований законодательства Италии.
                </li>
                <li>
                    Срок обработки данных неограничен. Пользователь может в любой момент отозвать согласие, написав нам на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна в свободном 
                    доступе на сайте <strong><?= $fullDomain ?></strong>.
                </li>
                <li>
                    По всем вопросам касательно ваших данных обращайтесь по адресу: 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026. Платформа уже доступна в Европе.</p>
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