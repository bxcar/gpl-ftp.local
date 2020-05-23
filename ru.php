<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Группа компаний «ГПЛ»</title>
    <meta name="description"
          content="ГПЛ ведет деятельность по производству, дистрибуции и продажи масел, технических жидкостей и автозапчастей на легковые и грузовые автомобили."/>

    <link rel="shortcut icon" href="images/favicon.png"/>
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="image_src" href="http://gpl.ua/images/prev.jpg"/>

    <meta property="og:image:width" content="480"/>
    <meta property="og:image:height" content="320"/>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script>
        $.get("https://ipinfo.io", function(response) {
            var url_string = window.location.href;
            var url = new URL(url_string);
            var language_selected_manually = url.searchParams.get("l");
            if((response.country == 'RU')
                || (response.country == 'AZ')
                || (response.country == 'BY')
                || (response.country == 'KZ')
                || (response.country == 'KG')
                || (response.country == 'AM')
                || (response.country == 'MD')
                || (response.country == 'TJ')
                || (response.country == 'UZ')
                || (response.country == 'TM')
                || (response.country == 'GE')) {

            } else if((response.country == 'UA') && !language_selected_manually) {
                window.location.href = "https://gpl.ua";
            } else if(!language_selected_manually) {
                window.location.href = "https://gpl.ua/en.php";
            }
        }, "jsonp");
    </script>

    <!--header styles start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="style-font-for-map-on-new-main-page.css">
    <link rel="stylesheet" href="css/main-gpl.css">
    <link rel="stylesheet" href="css/map-styles-for-new-main.css">
    <link rel="stylesheet" href="css/style-for-burger-menu.css">
    <link rel="stylesheet" href="css/pda-for-burger-menu.css">
    <!--header styles end-->
</head>
<body>
<header class="header">
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="img/header-bg-video.mp4" type="video/mp4">
    </video>
	<img src="img/mobile-header-bg.png" class="mobile-header-bg" alt="">
    <div class="header__top-panel">
        <div class="container">
            <a href="" class="header__logo"><img src="img/logo.svg" alt=""></a>
            <div class="header__menu header__menu--ru">
                <ul>
                    <li><a href="" class="header__menu-item">Главная</a></li>
                    <li class="header__menu-item-li--dropdown">
                        <a class="header__menu-item header__menu-item--dropdown">Деятельность
                            <img src="img/bottom-arrow.png" alt=""></a>
                        <ul class="header__dropdown-menu">
                            <li><a href="https://gpl.ua/b2b.php" class="header__dropdown-menu-item">B2B</a></li>
                            <li><a href="https://gpl.ua/b2c.php" class="header__dropdown-menu-item">B2C</a></li>
                            <li><a href="https://gpl.ua/services.php" class="header__dropdown-menu-item">Услуги</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="https://gpl.ua/career.php" class="header__menu-item">Карьера</a></li>
                    <li><a href="#footer" class="header__menu-item"
                           style="position: relative; left: -23px;">Контакты</a></li>
                    <hr>
                </ul>
            </div>
            <div class="header__phone">
                <span class="header__phone-title">Телефон горячей линии:</span>
                <a href="tel:+380532655036" class="header__phone-value">+38 (0532) 65 50 36</a>
            </div>
            <div class="header__language">
                <a href="https://gpl.ua/ru.php?l=selected" class="header__language-item"><span
                        class="lng-images"><span
                            class="ru-white"></span><span class="ru-blue"></span><span class="ru-red"></span></span>RU</a>
                <a href="https://gpl.ua/?l=selected" class="header__language-item header__language-item--inactive"><span class="lng-images"><span class="ua-blue"></span><span
                            class="ua-yellow"></span></span>UA</a>
                <a href="https://gpl.ua/en.php?l=selected" class="header__language-item header__language-item--inactive"><span
                        class="lng-images lng-images--eng"><img src="img/eng-language-icon.png" alt=""></span>EN</a>
            </div>
            <a style="text-decoration: none;" class="header__menu-icon open-popup" href="#menu-popup">
                <img src="img/burger-icon.png">
                <img src="img/burger-icon-big.svg" class="header__menu-icon--img-hidden">
            </a>
        </div>
    </div>
    <div class="container">
        <div class="header__big-part">
            <h1 class="header__title">GPL The Future</h1>
            <span class="header__subtitle">Группа компаний по производству, дистрибуции и продаже смазочных материалов,<br> технических жидкостей и автозапчастей на легковые и грузовые автомобили</span>
            <a data-fancybox href="https://www.youtube.com/watch?v=lWzKXGPUIfY" class="header__video-button">Посмотреть видео</a>
        </div>
    </div>
</header>
<div class="section1 container">
    <div class="section1__titles">
        <a data-title="zapchastyny" title="Запчасти и аксессуары" href="#" class="section1__title">
            <div><img src="img/logos/icons/zapchastyny.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/zapchastyny-hover.png"
                    class="section1__title-img-active"></div>
            Запчасти и
			аксессуары</a>
        <a data-title="mastylni" title="Смазочные материалы" href="#" class="section1__title active">
            <div><img src="img/logos/icons/mastylni.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/mastylni-hover.png"
                    class="section1__title-img-active"></div>
            Смазочные
			материалы</a>
        <a data-title="avtohimia" title="Автохимия" href="#" class="section1__title">
            <div><img src="img/logos/icons/avtohimia.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/avtohimia-hover.png"
                    class="section1__title-img-active"></div>
            Автохимия</a>
        <a data-title="aerozoli" title="Аэрозольные краски" href="#" class="section1__title">
            <div><img src="img/logos/icons/aerozoli.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/aerozoli-hover.png"
                    class="section1__title-img-active"></div>
            Аэрозольные
			краски</a>
        <a data-title="filtry" title="Фильтры" href="#" class="section1__title">
            <div><img src="img/logos/icons/filtry.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/filtry-hover.png"
                    class="section1__title-img-active"></div>
            Фильтры</a>
        <a data-title="galmivi" title="Тормозные колодки" href="#" class="section1__title">
            <div><img src="img/logos/icons/galmivi.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/galmivi-hover.png"
                    class="section1__title-img-active"></div>
            Тормозные
			колодки</a>
        <a data-title="vyhlopni" title="Выхлопные системы" href="#"
           class="section1__title desk-display-none-section1-titles">
            <div><img src="img/logos/icons/vyhlopni.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/vyhlopni-hover.png"
                    class="section1__title-img-active"></div>
            Выхлопные
			системы</a>
        <a data-title="akumulyatory" title="Аккумуляторы" href="#"
           class="section1__title desk-display-none-section1-titles">
            <div><img src="img/logos/icons/akumulyatory.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/akumulyatory-hover.png"
                    class="section1__title-img-active"></div>
            Аккумуляторы</a>
        <a data-title="avtoshiny" title="Автошины" href="#" class="section1__title desk-display-none-section1-titles">
            <div><img src="img/logos/icons/avtoshiny.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/avtoshiny-hover.png"
                    class="section1__title-img-active"></div>
            Автошины</a>
    </div>
    <div class="section1__titles2">
        <a data-title="vyhlopni" title="Выхлопные системы" href="#" class="section1__title">
            <div><img src="img/logos/icons/vyhlopni.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/vyhlopni-hover.png"
                    class="section1__title-img-active"></div>
            Выхлопные
			системы</a>
        <a data-title="akumulyatory" title="Аккумуляторы" href="#" class="section1__title">
            <div><img src="img/logos/icons/akumulyatory.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/akumulyatory-hover.png"
                    class="section1__title-img-active"></div>
            Аккумуляторы</a>
        <a data-title="avtoshiny" title="Автошины" href="#" class="section1__title">
            <div><img src="img/logos/icons/avtoshiny.png" alt="" class="section1__title-img-inactive"><img
                    src="img/logos/icons/avtoshiny-hover.png"
                    class="section1__title-img-active"></div>
            Автошины</a>
    </div>
    <?php include "logos-5-per-row.php"?>
    <?php include "logos-4-per-row.php"?>
    <div class="section1__logos-wrapper section1__logos-wrapper--desktop">
        <div class="section1__logos">
            <div data-title="zapchastyny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://fenox.com/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/1.png" alt=""></a>
                    <a target="_blank" href="https://www.caffaro.pl/ru" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/2.png" alt=""></a>
                    <a target="_blank" href="http://www.av-autotechnik.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/3.png" alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/4.png" alt=""></a>
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/5.png" alt=""></a>
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/6.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://wixeurope.com/ua" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/7.png" alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/8.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/9.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/10.png" alt=""></a>
                    <a target="_blank" href="http://www.lavita.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/11.png" alt=""></a>
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/12.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.ertcompany.com/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/13.png" alt=""></a>
                    <a target="_blank" href="http://www.lsa-automotive.com/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/14.png" alt=""></a>
                    <a target="_blank" href="http://www.balrt.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/15.png" alt=""></a>
                    <a target="_blank" href="http://autotechgroup.cz/ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/16.png" alt=""></a>
                    <a target="_blank" href="https://www.al-ko.com/ru" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/17.png" alt=""></a>
                    <a target="_blank" href="https://www.gknautomotive.com/en/AftermarketMotorsport/"
                       class="section1_logo-item"><img src="img/logos/zapchastyny-ta-aksesuary/18.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://doloni.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/19.png" alt=""></a>
                    <a target="_blank" href="http://gpl.ua" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/20.png" alt=""></a>
                    <a target="_blank" href="http://tkdafmi.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/21.png" alt=""></a>
                    <a target="_blank" href="https://www.tedgum.pl/ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/22.png" alt=""></a>
                    <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/23.png" alt=""></a>
                    <a target="_blank" href="https://auto-elegant.com/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/24.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.nuovatecnodelta.it/hydraulic-spares-for-brakes-clutch-parts.asp"
                       class="section1_logo-item"><img src="img/logos/zapchastyny-ta-aksesuary/25.png" alt=""></a>
                    <a target="_blank" href="https://www.dello.de/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/26.png" alt=""></a>
                    <a target="_blank" href="#" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/27.png" alt=""></a>
                    <a target="_blank" href="https://www.optibelt.com/de/home/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/28.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/29.png" alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/30.png" style="margin-left: 25px;" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/31.png" alt=""></a>
                    <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos/zapchastyny-ta-aksesuary/32.png" alt=""></a>
                </div>
            </div>
            <div data-title="mastylni" class="section1__logos-inner-wrapper active">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://mol-ukraine.com.ua/ua/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/mol.png" alt=""></a>
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/vira.png" alt=""></a>
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/total.png" alt=""></a>
                    <a target="_blank" href="http://www.lotos.pl/en/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/lotus.png" alt=""></a>
                    <a target="_blank" href="http://agrinol.ua/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/agrinol.png" alt=""></a>
                    <a target="_blank" href="https://www.mobil.com/en/" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/mobil.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://www.elf.ua/ru" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/elf.png" alt=""></a>
                    <a target="_blank" href="http://www.naftan.by/ru/default_ru.aspx" class="section1_logo-item"><img
                            src="img/logos/mastylni-materialy/naftan.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtohimia" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/1.png" alt=""></a>
                    <a target="_blank" href="https://www.k2car.com/ru/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/2.png" alt=""></a>
                    <a target="_blank" href="https://www.higear.com.ua/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/3.png" alt=""></a>
                    <a target="_blank" href="https://www.wd40.com/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/4.png" alt=""></a>
                    <a target="_blank" href="https://piton.in.ua/ru/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/5.png" alt=""></a>
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/6.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="http://gpl.ua" class="section1_logo-item"><img
                            src="img/logos/avtohimia/7.png" alt=""></a>
                    <a target="_blank" href="https://imex.ck.ua/" class="section1_logo-item"><img
                            src="img/logos/avtohimia/8.png" alt=""></a>
                </div>
            </div>
            <div data-title="aerozoli" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/1.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/2.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/3.png" alt=""></a>
                    <a target="_blank" href="http://troton.eu/ru/" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/4.png" alt=""></a>
                    <a target="_blank" href="http://colorsim.com/" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/5.png" alt=""></a>
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos/aerozolni-farby/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="filtry" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos/filtry/1.png" alt=""></a>
                    <a target="_blank" href="http://automega.biz" class="section1_logo-item"><img
                            src="img/logos/filtry/2.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/" class="section1_logo-item"><img
                            src="img/logos/filtry/3.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/" class="section1_logo-item"><img
                            src="img/logos/filtry/4.png" alt=""></a>
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos/filtry/5.png" alt=""></a>
                    <a target="_blank" href="https://wixeurope.com/ua" class="section1_logo-item"><img
                            src="img/logos/filtry/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="galmivi" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                            src="img/logos/halmivni-kolodky/1.png" alt=""></a>
                    <a target="_blank" href="http://tkdafmi.ru/" class="section1_logo-item"><img
                            src="img/logos/halmivni-kolodky/2.png" alt=""></a>
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos/halmivni-kolodky/3.png" alt=""></a>
                    <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos/halmivni-kolodky/4.png" alt=""></a>
                </div>
            </div>
            <div data-title="vyhlopni" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos/vyhlopna-systema/1.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos/vyhlopna-systema/2.png" alt=""></a>
                </div>
            </div>
            <div data-title="akumulyatory" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://exidetechnologies.ru/" class="section1_logo-item"><img
                            src="img/logos/akumulyatory/1.png" alt=""></a>
                    <a target="_blank" href="http://www.sonnenschein.org/" class="section1_logo-item"><img
                            src="img/logos/akumulyatory/2.png" alt=""></a>
                    <a target="_blank" href="https://jp.hu/" class="section1_logo-item"><img
                            src="img/logos/akumulyatory/3.png" alt=""></a>
                    <a target="_blank" href="https://accum.com.ua/" class="section1_logo-item"><img
                            src="img/logos/akumulyatory/4.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtoshiny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.goodyear.eu/uk_ua/consumer.html"
                       class="section1_logo-item"><img src="img/logos/shyny/1.png" alt=""></a>
                    <a target="_blank" href="https://www.fulda.com/fulda_ua_uk/" class="section1_logo-item"><img
                            src="img/logos/shyny/2.png" alt=""></a>
                    <a target="_blank" href="https://www.debica.com.pl/" class="section1_logo-item"><img
                            src="img/logos/shyny/3.png" alt=""></a>
                    <a target="_blank" href="https://dunlop-tire.ru/" class="section1_logo-item"><img
                            src="img/logos/shyny/4.png" alt=""></a>
                    <a target="_blank" href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp"
                       class="section1_logo-item"><img src="img/logos/shyny/5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section1__logos-wrapper section1__logos-wrapper--mob">
        <div class="section1__logos">
            <div data-title="zapchastyny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://fenox.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/1.png" alt=""></a>
                    <a target="_blank" href="https://www.caffaro.pl/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/2.png" alt=""></a>
                    <a target="_blank" href="http://www.av-autotechnik.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/3.png" alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/5.png" alt=""></a>
                    <a target="_blank" href="https://wixeurope.com/ua" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/6.png" alt=""></a>
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/7.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/8.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.ertcompany.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/9.png" alt=""></a>
                    <a target="_blank" href="http://autotechgroup.cz/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/10.png" alt=""></a>
                    <a target="_blank" href="https://www.gknautomotive.com/en/AftermarketMotorsport/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/11.png" alt=""></a>
                    <a target="_blank" href="http://www.nuovatecnodelta.it/hydraulic-spares-for-brakes-clutch-parts.asp" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/12.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/13.png" alt=""></a>
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/14.png" alt=""></a>
                    <a target="_blank" href="https://auto-elegant.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/15.png" alt=""></a>
                    <a target="_blank" href="https://www.optibelt.com/de/home/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/16.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.lavita.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/17.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/"
                       class="section1_logo-item"><img src="img/logos-mobile/zapchastyny-ta-aksesuary/18.png"
                                                       alt=""></a>
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/19.png" alt=""></a>
                    <a target="_blank" href="http://www.lsa-automotive.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/20.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://doloni.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/21.png" alt=""></a>
                    <a target="_blank" href="https://www.tedgum.pl/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/22.png" alt=""></a>
                    <a target="_blank" href="http://www.balrt.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/23.png" alt=""></a>
                    <a target="_blank" href="https://www.dello.de/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/24.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://tkdafmi.ru/"
                       class="section1_logo-item"><img src="img/logos-mobile/zapchastyny-ta-aksesuary/25.png"
                                                       alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/26.png" alt=""></a>
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/27.png" alt=""></a>
                    <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/28.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://www.al-ko.com/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/29.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/30.png" alt=""></a>
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/31.png" alt=""></a>
                    <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/32.png" alt=""></a>
                </div>
            </div>
            <div data-title="mastylni" class="section1__logos-inner-wrapper active">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://mol-ukraine.com.ua/ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/1.png" alt=""></a>
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/2.png" alt=""></a>
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/3.png" alt=""></a>
                    <a target="_blank" href="http://www.lotos.pl/en/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://www.elf.ua/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/5.png" alt=""></a>
                    <a target="_blank" href="https://www.mobil.com/en/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/6.png" alt=""></a>
                    <a target="_blank" href="http://www.naftan.by/ru/default_ru.aspx" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/7.png" alt=""></a>
                    <a target="_blank" href="http://agrinol.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/8.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtohimia" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/1.png" alt=""></a>
                    <a target="_blank" href="https://www.k2car.com/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/2.png" alt=""></a>
                    <a target="_blank" href="https://www.higear.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/3.png" alt=""></a>
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://piton.in.ua/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/5.png" alt=""></a>
                    <a target="_blank" href="https://www.wd40.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/6.png" alt=""></a>
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/7.png" alt=""></a>
                    <a target="_blank" href="https://imex.ck.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/8.png" alt=""></a>
                </div>
            </div>
            <div data-title="aerozoli" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/1.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/2.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/3.png" alt=""></a>
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="http://colorsim.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/5.png" alt=""></a>
                    <a target="_blank" href="http://troton.eu/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/6.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://colorsim.com/"
                       class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://mitka.gpl.ua"
                       class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="filtry" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://wixeurope.com/en" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/1.png" alt=""></a>
                    <a target="_blank" href="http://automega.biz" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/2.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/3.png" alt=""></a>
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/5.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/en" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/6.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="https://baldwinfilters.com.ua/"
                       class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="https://wixeurope.com/ua"
                       class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="galmivi" class="section1__logos-inner-wrapper section1__logos-inner-wrapper--galmivni">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/1.png" alt=""></a>
                    <a target="_blank" href="http://tkdafmi.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/2.png" alt=""></a>
                    <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/4.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://saturnavto.com.ua/"
                       class="section1_logo-item section1_logo-item-hidden"><img
                            src="img/logos-mobile/halmivni-kolodky/4.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://saturnavto.com.ua/"
                       class="section1_logo-item section1_logo-item-hidden"><img
                            src="img/logos-mobile/halmivni-kolodky/4.png" alt=""></a>
                </div>
            </div>
            <div data-title="vyhlopni" class="section1__logos-inner-wrapper">
                <div style="width: 174px" class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/vyhlopna-systema/1.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/vyhlopna-systema/2.png" alt=""></a>
                </div>
            </div>
            <div data-title="akumulyatory" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--akumulyatory">
                    <a target="_blank" href="http://exidetechnologies.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/1.png" alt=""></a>
                    <a target="_blank" href="http://www.sonnenschein.org/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/2.png" alt=""></a>
                    <a target="_blank" href="https://jp.hu/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/3.png" alt=""></a>
                    <a target="_blank" href="https://accum.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/4.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtoshiny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.fulda.com/fulda_ua_uk/"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/1.png" alt=""></a>
                    <a target="_blank" href="https://www.debica.com.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/2.png" alt=""></a>
                    <a target="_blank" href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/3.png" alt=""></a>
                    <a target="_blank" href="https://dunlop-tire.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/4.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://www.goodyear.eu/uk_ua/consumer.html"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank"
                       href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank"
                       href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank"
                       href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    <div class="section1__logos-wrapper section1__logos-wrapper--mob-3">
        <div class="section1__logos">
            <div data-title="zapchastyny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://fenox.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/1.png" alt=""></a>
                    <a target="_blank" href="https://www.caffaro.pl/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/2.png" alt=""></a>
                    <a target="_blank" href="http://www.av-autotechnik.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/4.png" alt=""></a>
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/5.png" alt=""></a>
                    <a target="_blank" href="https://wixeurope.com/ua" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/6.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/7.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/8.png" alt=""></a>
                    <a target="_blank" href="https://www.ertcompany.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/9.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://autotechgroup.cz/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/10.png" alt=""></a>
                    <a target="_blank" href="https://www.gknautomotive.com/en/AftermarketMotorsport/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/11.png" alt=""></a>
                    <a target="_blank" href="http://www.nuovatecnodelta.it/hydraulic-spares-for-brakes-clutch-parts.asp" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/12.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/13.png" alt=""></a>
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/14.png" alt=""></a>
                    <a target="_blank" href="https://auto-elegant.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/15.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.optibelt.com/de/home/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/16.png" alt=""></a>
                    <a target="_blank" href="http://www.lavita.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/17.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/"
                       class="section1_logo-item"><img src="img/logos-mobile/zapchastyny-ta-aksesuary/18.png"
                                                       alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/19.png" alt=""></a>
                    <a target="_blank" href="http://www.lsa-automotive.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/20.png" alt=""></a>
                    <a target="_blank" href="http://doloni.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/21.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.tedgum.pl/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/22.png" alt=""></a>
                    <a target="_blank" href="http://www.balrt.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/23.png" alt=""></a>
                    <a target="_blank" href="https://www.dello.de/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/24.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://tkdafmi.ru/"
                       class="section1_logo-item"><img src="img/logos-mobile/zapchastyny-ta-aksesuary/25.png"
                                                       alt=""></a>
                    <a target="_blank" href="https://www.brisk.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/26.png" alt=""></a>
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/27.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/28.png" alt=""></a>
                    <a target="_blank" href="https://www.al-ko.com/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/29.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/30.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/31.png" alt=""></a>
                    <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/32.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/zapchastyny-ta-aksesuary/26.png" alt=""></a>
                </div>
            </div>
            <div data-title="mastylni" class="section1__logos-inner-wrapper active">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://mol-ukraine.com.ua/ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/1.png" alt=""></a>
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/2.png" alt=""></a>
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.lotos.pl/en/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/4.png" alt=""></a>
                    <a target="_blank" href="https://www.elf.ua/ru" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/5.png" alt=""></a>
                    <a target="_blank" href="https://www.mobil.com/en/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/6.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="http://www.naftan.by/ru/default_ru.aspx" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/7.png" alt=""></a>
                    <a target="_blank" href="http://agrinol.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/8.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://agrinol.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="http://agrinol.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/mastylni-materialy/5.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtohimia" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://vira.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/1.png" alt=""></a>
                    <a target="_blank" href="https://www.k2car.com/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/2.png" alt=""></a>
                    <a target="_blank" href="https://www.higear.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.total.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/4.png" alt=""></a>
                    <a target="_blank" href="https://piton.in.ua/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/5.png" alt=""></a>
                    <a target="_blank" href="https://www.wd40.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/6.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/7.png" alt=""></a>
                    <a target="_blank" href="https://imex.ck.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/8.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="https://imex.ck.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/avtohimia/8.png" alt=""></a>
                </div>
            </div>
            <div data-title="aerozoli" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/1.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/2.png" alt=""></a>
                    <a target="_blank" href="https://newton.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="http://mitka.gpl.ua" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/4.png" alt=""></a>
                    <a target="_blank" href="http://colorsim.com/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/5.png" alt=""></a>
                    <a target="_blank" href="http://troton.eu/ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/aerozolni-farby/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="filtry" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://wixeurope.com/en" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/1.png" alt=""></a>
                    <a target="_blank" href="http://automega.biz" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/2.png" alt=""></a>
                    <a target="_blank" href="http://www.rfolg.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://www.fram-europe.com/ru/index.html" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/4.png" alt=""></a>
                    <a target="_blank" href="https://baldwinfilters.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/5.png" alt=""></a>
                    <a target="_blank" href="http://alpha-filter.com/en" class="section1_logo-item"><img
                            src="img/logos-mobile/filtry/6.png" alt=""></a>
                </div>
            </div>
            <div data-title="galmivi" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="http://www.wokingbrakes.com/home" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/1.png" alt=""></a>
                    <a target="_blank" href="http://tkdafmi.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/halmivni-kolodky/2.png" alt=""></a>
                    <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                        <a target="_blank" href="http://saturnavto.com.ua/" class="section1_logo-item"><img
                                src="img/logos-mobile/halmivni-kolodky/3.png" alt=""></a>
                        <a target="_blank" href="https://tomexbrakes.pl/" class="section1_logo-item"><img
                                src="img/logos-mobile/halmivni-kolodky/4.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div data-title="vyhlopni" class="section1__logos-inner-wrapper">
                <div style="width: 174px" class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://utas.org.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/vyhlopna-systema/1.png" alt=""></a>
                    <a target="_blank" href="https://www.polmostrow.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/vyhlopna-systema/2.png" alt=""></a>
                </div>
            </div>
            <div data-title="akumulyatory" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--akumulyatory">
                    <a target="_blank" href="http://exidetechnologies.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/1.png" alt=""></a>
                    <a target="_blank" href="http://www.sonnenschein.org/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/2.png" alt=""></a>
                    <a target="_blank" href="https://jp.hu/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://accum.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/4.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="https://accum.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/4.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank" href="https://accum.com.ua/" class="section1_logo-item"><img
                            src="img/logos-mobile/akumulyatory/4.png" alt=""></a>
                </div>
            </div>
            <div data-title="avtoshiny" class="section1__logos-inner-wrapper">
                <div class="section1__logos-inner-wrapper-separator">
                    <a target="_blank" href="https://www.fulda.com/fulda_ua_uk/"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/1.png" alt=""></a>
                    <a target="_blank" href="https://www.debica.com.pl/" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/2.png" alt=""></a>
                    <a target="_blank" href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/3.png" alt=""></a>
                </div>
                <div class="section1__logos-inner-wrapper-separator section1__logos-inner-wrapper-separator--last">
                    <a target="_blank" href="https://dunlop-tire.ru/" class="section1_logo-item"><img
                            src="img/logos-mobile/shyny/4.png" alt=""></a>
                    <a target="_blank" href="https://www.goodyear.eu/uk_ua/consumer.html"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                    <a style="visibility: hidden; height: 1px;" target="_blank"
                       href="https://www.sava-tires.com/sava/ua_ru/m/index.jsp"
                       class="section1_logo-item"><img src="img/logos-mobile/shyny/5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section2">
    <div class="container">
        <h2 class="section2__title">Про компанию GPL</h2>
        <div class="section2__left">
            <img class="section2__left-item" src="img/about/1.svg" alt="">
            <img class="section2__left-item" src="img/about/2.svg" alt="">
            <img class="section2__left-item" src="img/about/3.svg" alt="">
            <img class="section2__left-item section2__left-item--4" src="img/about/4.svg" alt="">
            <img class="section2__left-item" src="img/about/5.svg" style="/*margin-bottom: 73px;*/margin-bottom: 12.5%;" alt="">
            <img class="section2__left-item section2__left-item--6" src="img/about/6.svg" alt="">
        </div>
        <div class="section2_right">
            <p><b>GPL</b> — группа компаний, которая ведет деятельность по производству, дистрибуции и продаже смазочных материалов, технических жидкостей, автозапчастей и аксессуаров на легковые и грузовые автомобили.<br>
                Мы работаем в секторе бизнеса (В2В) и реализуем продукцию для конечного потребителя (В2С).
				Наши клиенты — предприятия коммерческо-индустриального направления, агропредприятия, корпоративные клиенты, государственные и коммунальные предприятия, сети АЗС, станции технического обслуживания автомобилей, столы заказов, интернет-магазины, супермаркеты, автомагазины.</p>
            <p>Имеем собственный бренд <b><a target="_blank" style="text-decoration: none; color: inherit;" href="http://vira.ua/">Vira</a></b> — украинский продукт под которым производятся технические жидкости и смазочные материалы. Производство расположено в городе Полтаве. Имеем собственный комплекс по изготовлению, фасовке и хранению смазочных материалов, где производительность достигает 100 000 литров в сутки.</p>
            <p>Также, мы работаем по таким направлениям:<br>
                - собственные станции по обслуживанию легковых и грузовых автомобилей;<br>
                - сеть розничных автомагазинов;<br>
                - юридическое сопровождение;<br>
                - услуги по архитектуре и дизайну;<br>
                - услуги утилизации;<br>
                - таможенно-брокерские услуги.</p>
        </div>
        <div class="section2_text">
            <p><b>GPL</b> — группа компаний, которая ведет деятельность по производству, дистрибуции и продаже смазочных материалов, технических жидкостей, автозапчастей и аксессуаров на легковые и грузовые автомобили.<br>
                Мы работаем в секторе бизнеса (В2В) и реализуем продукцию для конечного потребителя (В2С).
				Наши клиенты — предприятия коммерческо-индустриального направления, агропредприятия, корпоративные клиенты, государственные и коммунальные предприятия, сети АЗС, станции технического обслуживания автомобилей, столы заказов, интернет-магазины, супермаркеты, автомагазины.<a href="#" class="read-more">Читать больше...</a></p>
            <p class="hidden">Имеем собственный бренд <b><a target="_blank" style="text-decoration: none; color: inherit;" href="http://vira.ua/">Vira</a></b> — украинский продукт под которым производятся технические жидкости и смазочные материалы. Производство расположено в городе Полтаве. Имеем собственный комплекс по изготовлению, фасовке и хранению смазочных материалов, где производительность достигает 100 000 литров в сутки.</p>
            <p class="hidden">Также, мы работаем по таким направлениям:<br>
                - собственные станции по обслуживанию легковых и грузовых автомобилей;<br>
                - сеть розничных автомагазинов;<br>
                - юридическое сопровождение;<br>
                - услуги по архитектуре и дизайну;<br>
                - услуги утилизации;<br>
                - таможенно-брокерские услуги.</p>
        </div>
        <div class="section2__images">
            <div class="section2__images__inner-wrapper">
                <img class="section2__left-item" src="img/about/1.svg" alt="">
                <img class="section2__left-item section2__left-item--2-mob" src="img/about/2.svg" alt="">
            </div>
            <div class="section2__images__inner-wrapper">
                <img class="section2__left-item" src="img/about/3.svg" alt="">
                <img class="section2__left-item section2__left-item--4-mob" src="img/about/4.svg" alt="">
            </div>
            <div class="section2__images__inner-wrapper">
                <img class="section2__left-item" src="img/about/5.svg" alt="">
                <img class="section2__left-item section2__left-item--mg-fix section2__left-item--6-mob" src="img/about/6.svg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="section3 container">
    <h2 class="section3__title">Сертификаты</h2>
    <div class="section3__certificates">
        <a href="img/certificates/big/1.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/1.png" alt=""/>
            <img src="img/certificates/small-mobile/1.png" alt=""/>
        </a>
        <a href="img/certificates/big/2.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/2.png" alt=""/>
            <img src="img/certificates/small-mobile/2.png" alt=""/>
        </a>
        <a href="img/certificates/big/3.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/3.png" alt=""/>
            <img src="img/certificates/small-mobile/3.png" alt=""/>
        </a>
        <a href="img/certificates/big/4.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/4.png" alt=""/>
            <img src="img/certificates/small-mobile/4.png" alt=""/>
        </a>
        <a href="img/certificates/big/5.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/5.png" alt=""/>
            <img src="img/certificates/small-mobile/5.png" alt=""/>
        </a>
        <a href="img/certificates/big/6.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/6.png" alt=""/>
            <img src="img/certificates/small-mobile/6.png" alt=""/>
        </a>
        <a href="img/certificates/big/7.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/7.png" alt=""/>
            <img src="img/certificates/small-mobile/7.png" alt=""/>
        </a>
        <a href="img/certificates/big/8.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/8.png" alt=""/>
            <img src="img/certificates/small-mobile/8.png" alt=""/>
        </a>
        <a href="img/certificates/big/9.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/9.png" alt=""/>
            <img src="img/certificates/small-mobile/9.png" alt=""/>
        </a>
        <a href="img/certificates/big/10.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/10.png" alt=""/>
            <img src="img/certificates/small-mobile/10.png" alt=""/>
        </a>
        <a href="img/certificates/big/11.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/11.png" alt=""/>
            <img src="img/certificates/small-mobile/11.png" alt=""/>
        </a>
        <a href="img/certificates/big/12.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/12.png" alt=""/>
            <img src="img/certificates/small-mobile/12.png" alt=""/>
        </a>
        <a href="img/certificates/big/13.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/13.png" alt=""/>
            <img src="img/certificates/small-mobile/13.png" alt=""/>
        </a>
        <a href="img/certificates/big/14.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/14.png" alt=""/>
            <img src="img/certificates/small-mobile/14.png" alt=""/>
        </a>
        <a href="img/certificates/big/15.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/15.png" alt=""/>
            <img src="img/certificates/small-mobile/15.png" alt=""/>
        </a>
        <a href="img/certificates/big/16.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/16.png" alt=""/>
            <img src="img/certificates/small-mobile/16.png" alt=""/>
        </a>
        <a href="img/certificates/big/17.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/17.png" alt=""/>
            <img src="img/certificates/small-mobile/17.png" alt=""/>
        </a>
        <a href="img/certificates/big/18.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/18.png" alt=""/>
            <img src="img/certificates/small-mobile/18.png" alt=""/>
        </a>
        <a href="img/certificates/big/19.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/19.png" alt=""/>
            <img src="img/certificates/small-mobile/19.png" alt=""/>
        </a>
        <a href="img/certificates/big/20.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/20.png" alt=""/>
            <img src="img/certificates/small-mobile/20.png" alt=""/>
        </a>
        <a href="img/certificates/big/21.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/21.png" alt=""/>
            <img src="img/certificates/small-mobile/21.png" alt=""/>
        </a>
        <a class="hidden" href="img/certificates/big/21.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/21.png" alt=""/>
            <img src="img/certificates/small-mobile/21.png" alt=""/>
        </a>
        <a class="hidden" href="img/certificates/big/21.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/21.png" alt=""/>
            <img src="img/certificates/small-mobile/21.png" alt=""/>
        </a>
        <a class="hidden" href="img/certificates/big/21.png" data-fancybox="images">
            <span class="section3__certificates_item-bg"></span>
            <img src="img/certificates/small/21.png" alt=""/>
            <img src="img/certificates/small-mobile/21.png" alt=""/>
        </a>
    </div>
</div>

<div class="section4">
    <div class="container">
        <h2 class="section4__title">История компании GPL</h2>
        <div class="section4__history">
            <div class="section4__years">
                <a data-year="1996" href="#" class="section4__year active">1996</a>
                <a data-year="1999" href="#" class="section4__year">1999</a>
                <a data-year="2001" href="#" class="section4__year">2001</a>
                <a data-year="2002" href="#" class="section4__year">2002</a>
                <a data-year="2003" href="#" class="section4__year">2003</a>
                <a data-year="2005" href="#" class="section4__year">2005</a>
                <a data-year="2006" href="#" class="section4__year">2006</a>
                <a data-year="2007" href="#" class="section4__year">2007</a>
                <a data-year="2011" href="#" class="section4__year">2011</a>
                <a data-year="2013" href="#" class="section4__year">2013</a>
                <a data-year="2014" href="#" class="section4__year">2014</a>
                <a data-year="2020" href="#" class="section4__year">2020</a>
                <a href="#" class="section4__year section4__year--hidden">2020</a>
                <a href="#" class="section4__year section4__year--hidden">2020</a>
                <a href="#" class="section4__year section4__year--hidden">2020</a>
            </div>
        </div>
        <div class="section4__desc-blocks">
            <div data-year="1996" class="section4__desc-block active">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">7 НОЯБРЯ 1996 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Деятельность компании началась с введения в эксплуатацию цеха по фасовке масел и смазочных материалов в городе Полтава. В компании работало 8 человек. Первыми клиентами были владельцы автомагазинов, продавцы на рынках, конечные потребители.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/1.png" alt="">
                </div>
            </div>
            <div data-year="1999" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">ИЮЛЬ 1999 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Компания выступила инвестором по строительству Черкасского завода автохимии - одного из крупнейших предприятий Украины, специализирующееся на производстве и торговле жидкостями технического назначения для автомобильной промышленности. Продукцию компании экспортируют в больше, чем 50 стран мира. С 2018 году компания прекратила сотрудничество с ЧЗА.</span>
                </div>
                <div class="section4__desc-block-right section4__desc-block-right--img-fitting y99">
                    <img src="img/years/2.png" alt="">
                </div>
            </div>
            <div data-year="2001" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">МАРТ 2001 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Открытие представительства в Харькове.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/3.png" alt="">
                </div>
            </div>
            <div data-year="2002" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">ФЕВРАЛЬ 2002 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Строительство и введение в эксплуатацию логистического центра в Полтаве.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/4.png" alt="">
                </div>
            </div>
            <div data-year="2003" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">АПРЕЛЬ 2003 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Создание совместного предприятия с компанией Valmi - крупным дистрибьютором автокомпонентов. Начало работы в новых регионах - торговля автозапчастями в Центрально-Восточной Украине.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/5.png" alt="">
                </div>
            </div>
            <div data-year="2005" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">2005 ГОД</span>
                    <span class="section4__desc-block-subtitle">Открытие комплекса по производству, фасовке, хранению смазочных материалов с совокупным оборотом материалов 30 тыс.тонн/год</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/6.png" alt="">
                </div>
            </div>
            <div data-year="2006" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">7 АПРЕЛЯ 2006 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Открытие самого крупного в Украине автоцентра под названием «Автохимкомплект», который специализируется на покупке/продаже машин, запчастей, автохимии, а также предоставлении услуг СТО.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/7.png" alt="">
                </div>
            </div>
            <div data-year="2007" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">7 АПРЕЛЯ 2007 ГОДА</span>
                    <span class="section4__desc-block-subtitle">Открытие второго автоцентра «Автохимкомплект» в Кременчуке, особенностью которого является предоставление профессиональных услуг в сфере малярных работ.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/8.png" alt="">
                </div>
            </div>
            <div data-year="2011" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">2011 ГОД</span>
                    <span class="section4__desc-block-subtitle">Открытие нового офисно-логистического центра в Полтаве.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/9.png" alt="">
                </div>
            </div>
            <div data-year="2013" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">2013 ГОД</span>
                    <span class="section4__desc-block-subtitle">Открытие уникального комплекса по ремонту грузовых и легковых автомобилей №1 в Украине, который работает в 7 направлениях:
									легковое СТО; грузове СТО; кузовное СТО; токарный цех; ремонт машин премиум класса; предоставление услуг сертифицированного техосмотра; мойка легковых и грузовых автомобилей.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/10.png" alt="">
                </div>
            </div>
            <div data-year="2014" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">2014 ГОД</span>
                    <span class="section4__desc-block-subtitle">Открытие офисно-логистического центра в Борисполе.</span>
                </div>
                <div class="section4__desc-block-right">
                    <img src="img/years/11.png" alt="">
                </div>
            </div>
            <div data-year="2020" class="section4__desc-block">
                <div class="section4__desc-block-left">
                    <span class="section4__desc-block-title">2020 ГОД</span>
                    <span class="section4__desc-block-subtitle">На данный момент компания фокусирует свое внимание на устойчивом развитии персонала, поиске новых форм и методов работы, а также сотрудничестве с украинскими и зарубежными партнерами.</span>
                </div>
                <div class="section4__desc-block-right section4__desc-block-right--img-fitting y2020"
                     style="background: #25252B">
                    <img src="img/years/12.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-4">
    <div id="map"></div>
    <div class="wrap container">
        <div class="block">
            <h2>Организовываем доставку <br/>по всей территории Украины</h2>

            <h4>Адреса логистических центров:</h4>
            <div class="item poltava">
                <div class="street">г. Полтава, <span class="nowrap">ул. Половки, 70 Б</span></div>
            </div>

            <div class="item kremenchuk">
                <div class="street">г. Кременчуг, <span class="nowrap">просп. Леси Украинки, 119</span></div>
            </div>

            <div class="item harkiv">
                <div class="street">г. Харьков, <span class="nowrap">просп. Лозовенковский, 3</span></div>
            </div>

            <div class="item borispol">
                <div class="street">г. Борисполь, <span class="nowrap">ул. Запорожская, 38а</span></div>
            </div>

            <div class="item ternopol">
                <div class="street">c. Остров, Тернопольська область, <br/><span class="nowrap">ул. Промышленная 3</span></div>
            </div>

        </div>
    </div>
</div>


<script src="https://maps.google.com/maps/api/js?key=AIzaSyBnhSDeCqIAtUPpGe9IdXGpeodD832HkBU&language=ru"></script>
<script type="text/javascript">
    var egglabs = new google.maps.LatLng(49.590959, 34.4878434);

    var egglabs1 = new google.maps.LatLng(49.1133826, 33.4394406);
    var egglabs2 = new google.maps.LatLng(50.0463214, 36.1653427);
    var egglabs3 = new google.maps.LatLng(50.3855672, 30.9285571);
    var egglabs4 = new google.maps.LatLng(49.47275, 25.6305128);


    var mapCoordinates = new google.maps.LatLng(50.564897, 24.501208);
    var mapCoordinates2 = new google.maps.LatLng(56.5897339, 30.109249);

    var image = 'images/7.svg';

    if (screen && screen.width > 480) {
        var map = new google.maps.Map(document.getElementById('map'), {
            backgroundColor: "#ffffff",
            zoom: 6,
            disableDefaultUI: true,
            center: mapCoordinates,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "gamma": 0.5
                        }
                    ]
                }
            ]
        });
    } else {
        var map = new google.maps.Map(document.getElementById('map'), {
            backgroundColor: "#ffffff",
            zoom: 5.2,
            disableDefaultUI: true,
            center: mapCoordinates2,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "gamma": 0.5
                        }
                    ]
                }
            ]
        });

    }

    var marker = [];
    marker[0] = new google.maps.Marker({
        position: egglabs,
        map: map,
        icon: image,
        draggable: false,
        visible: true
    });

    marker[1] = new google.maps.Marker({
        position: egglabs1,
        map: map,
        icon: image,
        draggable: false,
        visible: true
    });

    marker[2] = new google.maps.Marker({
        position: egglabs2,
        map: map,
        icon: image,
        draggable: false,
        visible: true
    });

    marker[3] = new google.maps.Marker({
        position: egglabs3,
        map: map,
        icon: image,
        draggable: false,
        visible: true
    });

    marker[4] = new google.maps.Marker({
        position: egglabs4,
        map: map,
        icon: image,
        draggable: false,
        visible: true
    });

    var contentString = '<div class="block-info"><div class="block-info-window">' +
        '<div class="image" style="background:url(images/h11.jpg) center; background-size:cover;"></div>' +
        '<h2>Полтава</h2>' +
        '<span><a href="https://goo.gl/maps/KWaQLyf9Tsp" target="_blank">ул. Половки, 70 Б</a></span><a href="tel:0 (800) 755 780">0 (800) 755 780</a><a href="mailto:info@gpl.ua">info@gpl.ua</a></div></div>';

    var contentString1 = '<div class="block-info"><div class="block-info-window">' +
        '<div class="image" style="background:url(images/2/2.JPG) center; background-size:cover;"></div>' +
        '<h2>Кременчуг</h2>' +
        '<span><a href="https://goo.gl/maps/F5bb2e5LLmP2" target="_blank">просп. Леси Украинки, 119</a></span><a href="tel:+38 (0532) 65-50-36">+38 (0532) 65-50-36</a><a href="mailto:info@gpl.ua">info@gpl.ua</a></div></div>';

    var contentString2 = '<div class="block-info"><div class="block-info-window">' +
        '<div class="image" style="background:url(images/map2.jpg) center; background-size:cover;"></div>' +
        '<h2>Харьков</h2>' +
        '<span><a href="https://goo.gl/maps/uPNfKwBZATP2" target="_blank">просп. Лозовеньковский, 3</a></span><a href="tel:0 (800) 756 996">0 (800) 756 996</a><a href="mailto:info@gpl.ua">info@gpl.ua</a></div></div>';

    var contentString3 = '<div class="block-info"><div class="block-info-window">' +
        '<div class="image" style="background:url(images/map1.JPG) center; background-size:cover;"></div>' +
        '<h2>Борисполь</h2>' +
        '<span><a href="https://goo.gl/maps/6CSEK3wizHH2" target="_blank">ул. Запорожская, 38а</a></span><a href="tel:0 (800) 752 782">0 (800) 752 782</a><a href="mailto:info@gpl.ua">info@gpl.ua</a></div></div>';

    var contentString4 = '<div class="block-info"><div class="block-info-window">' +
        '<div class="image" style="background:url(images/map100.png) center; background-size:cover;"></div>' +
        '<h2>Тернополь</h2>' +
        '<span><a href="https://goo.gl/maps/GAhh5gkKkNqsj6SL8" target="_blank">ул. Промышленная 3, c. Остров, Тернопольська область</a></span><a href="tel:+0 (800) 755 385">0 (800) 755 385</a><a href="mailto:info@gpl.ua">info@gpl.ua</a></div></div>';

    var infowindow = new google.maps.InfoWindow({});

    google.maps.event.addListener(marker[0], 'click', (function (marker, contentString, infowindow) {
        return function () {

            infowindow.setContent(contentString);
            infowindow.open(map, marker[0]);
        };
    })(marker, contentString, infowindow));

    google.maps.event.addListener(marker[1], 'click', (function (marker, contentString1, infowindow) {
        return function () {

            infowindow.setContent(contentString1);
            infowindow.open(map, marker[1]);
        };
    })(marker, contentString1, infowindow));


    google.maps.event.addListener(marker[2], 'click', (function (marker, contentString2, infowindow) {
        return function () {

            infowindow.setContent(contentString2);
            infowindow.open(map, marker[2]);
        };
    })(marker, contentString2, infowindow));

    google.maps.event.addListener(marker[3], 'click', (function (marker, contentString3, infowindow) {
        return function () {

            infowindow.setContent(contentString3);
            infowindow.open(map, marker[3]);
        };
    })(marker, contentString3, infowindow));

    google.maps.event.addListener(marker[4], 'click', (function (marker, contentString3, infowindow) {
        return function () {

            infowindow.setContent(contentString4);
            infowindow.open(map, marker[4]);
        };
    })(marker, contentString4, infowindow));

    google.maps.event.addListener(marker, 'click', function () {
        window.open(this.url, '_blank');
    });


</script>

<div class="footer" id="footer">
    <div class="section-contacts container">
        <h2 class="section-contacts__title">Контакты</h2>
        <div class="section-contacts__inner-wrapper">
            <div class="section-contacts__left">
                <a href="tel:+380532655036" class="section-contacts__left-item section-contacts__left-item--phone"><img
                        src="img/phone-icon.png" alt=""> +38 (0532) 65 50 36</a>
                <span class="section-contacts__left-item section-contacts__left-item--time"><img src="img/time-icon.png"
                                                                                                 alt=""> Пн-Пт / 09.00-18.00</span>
                <a href="mailto:info@gpl.ua" class="section-contacts__left-item section-contacts__left-item--email"><img
                        src="img/mail-icon.png" alt=""> info@gpl.ua</a>
            </div>
            <div class="section-contacts__center">
                <span class="section-contacts__center-title">По вопросам сотрудничества и другим<br>
                    возникшим вопросам - напишите нам:</span>
                <a data-fancybox data-src="#hidden-content" href="javascript:;" class="section-contacts__center-button">Отправить сообщение</a>
            </div>
            <div class="section-contacts__right">
                <span class="section-contacts__right-title">Мы в социальных сетях:</span>
                <div class="section-contacts__right-socials-wrapper">
                    <a target="_blank" href="https://www.facebook.com/gpl.ukraine/"><img src="img/facebook-icon.svg" alt=""></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCtlHMU1oBffpTirOSjUA7gw"><img src="img/youtube-icon.svg" alt=""></a>
                    <a target="_blank" href="https://www.instagram.com/gpl.ukraine/"><img src="img/inst-icon.svg" alt=""></a>
                </div>
                <div class="section-contacts__links-wrapper">
                    <a href="https://gpl.ua/career.php" class="section-contacts__right-link">Карьера</a>
                    <a target="_blank" href="https://corp.gpl.ua/" class="section-contacts__right-link">Corp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <img src="img/logo.svg" alt="">
            <span class="footer__copyright">Copyright © 1996 - 2020 LLC GPL</span>
            <a href="https://gpl.ua/1.pdf" target="_blank" class="footer__download-button">Скачать презентацию</a>
        </div>
    </div>
</div>
<div style="display: none;" id="hidden-content" class="hidden-content">
    <span class="hidden-content__title">Оставьте контактные данные</span>
    <span class="hidden-content__subtitle">И мы обязательно свяжемся с Вами в ближайшее время</span>
    <form action="form.php" method="post" class="hidden-content__form">
        <input type="text" name="name" placeholder="Ваше имя*" required="">
        <input type="text" name="phone" placeholder="Ваш телефон*" required="">
        <textarea name="comment" cols="40" rows="3" placeholder="Напишите интересующий вас вопрос"></textarea>
        <input type="hidden" name="info" value="">
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
        <input type="submit" value="ОТПРАВИТЬ СООБЩЕНИЕ" class="submit">
    </form>
</div>
<!--footer scripts start-->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="js/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main-gpl.js"></script>
<!--footer scripts end-->
<script>
    if($(window).width() >= 960) {
        $(".item.poltava").click(function () {
            google.maps.event.trigger(marker[0], 'click', {});
        });

        $(".item.kremenchuk").click(function () {
            google.maps.event.trigger(marker[1], 'click', {});
        });

        $(".item.harkiv").click(function () {
            google.maps.event.trigger(marker[2], 'click', {});
        });

        $(".item.borispol").click(function () {
            google.maps.event.trigger(marker[3], 'click', {});
        });

        $(".item.ternopol").click(function () {
            google.maps.event.trigger(marker[4], 'click', {});
        });
    }
</script>
<div class="menu-burger-wrapper">
    <div id="overlay">
        <div id="menu-popup" class="popup popup-menu">
            <span class="popup-close"></span>
            <div class="block">

                <div class="row">
                    <h2>Меню</h2>
                    <ul>
                        <li><a href="">Главная</a></li>
                        <li><a href="/b2b.php">B2B</a></li>
                        <li><a href="/b2c.php">B2C</a></li>
                        <li><a href="/services.php">Услуги</a></li>
                        <li><a href="/career.php">Карьера</a></li>
                        <li><a href="#footer" class="popup-close">Контакты</a></li>
                    </ul>

                    <div class="lang">
                        <a href="/ru.php?l=selected">RU</a>
                        <a href="/?l=selected">UA</a>
                        <a href="/en.php?l=selected">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?render=6LfVBu0UAAAAAEzzm1uYipzv_239MLI-jNTXM5Q6"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfVBu0UAAAAAEzzm1uYipzv_239MLI-jNTXM5Q6', {action: 'homepage'}).then(function(token) {
            //console.log(token);
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
</body>
</html>