<?php
// Переменные для SEO страницы
$pageTitle = 'Список услуг | ООО "ТД"Электросистемы"';

$pageDescription = 'Список услуг';

$PageKeyWords = 'условия, сроки, услуги, список, упаковка, перевозка, лаборатория, производство, электрические работы, доставка, продукция';

$ogUrl = 'https://es-dv.ru/services/';

require_once "../assets/header.php";
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="../index.php" class="logo mr-auto"><img src="../assets/img/img1/elektrosistema-logo.png"
                    alt="Электросистемы" /></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="i-shop">
                        <a class="nav-link scrollto" target="_blank" href="https://электротовары-дв.рф/">Интернет
                            магазин</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="../index.php#hero">Главная</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="../index.php#about">О нас</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="../index.php#services">Услуги</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="../index.php#portfolio">Продукция</a>
                    </li>
                    <li class="dropdown">
                        <a href="../index.php#about"><span>Подробнее</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="../about.php">О компании</a>
                            </li>

                            <li class="dropdown">
                                <a href="#services">
                                    <span class="active">Услуги</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="electric-work.php">Все виды электромонтажных
                                            работ</a>
                                    </li>
                                    <li>
                                        <a href="laboratory.php">Услуги испытательной
                                            лаборатории</a>
                                    </li>
                                    <li>
                                        <a href="delivery.php">Доставка</a>
                                    </li>
                                    <li>
                                        <a href="manufacturing.php">Изготовление металлических
                                            корпусов электрощитов</a>
                                    </li>

                                    <li>
                                        <a href="production.php">Производство электрощитов и
                                            электрооборудования</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#"><span>Продукция</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li>
                                        <a href="../products/svet/">Светотехника</a>
                                    </li>
                                    <li>
                                        <a href="../products/cabel/">Кабель</a>
                                    </li>
                                    <li>
                                        <a href="../products/silovoe/">Силовое и коммутационное
                                            оборудование</a>
                                    </li>
                                    <li>
                                        <a href="../products/armatura/">Электромонтажные изделия</a>
                                    </li>
                                    <li>
                                        <a href="../products/electro-ustanovka/">Электроустановочные изделия</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../vacancies.php">Вакансии</a>
                            </li>
                            <li><a href="../docs.php">Документы</a></li>
                            <li>
                                <a href="../shop.php">Магазин Электромаркет</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="../contacts.php">Контакты</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="vacancies">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="../../index.html">Главная</a></li>
                        <li>Список услуг</li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12">
                        <h3 class="section-title">Услуги</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">
                            Список услуг, которые оказывает ООО
                            "Электросистемы"
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="delivery.php">Доставка</a>
                        </h4>
                        <p class="service-description">
                            Cо склада до клиента в Хабаровске <br />
                            Клиентам в регионы ДФО
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-card-checklist"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="production.php">Производство электрооборудования</a>
                        </h4>
                        <p class="service-description">
                            Производство всех видов электрощитов и
                            электрооборудования <br />
                            Сборка
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="manufacturing.php">Изготовление корпусов щитов</a>
                        </h4>
                        <p class="service-description">
                            Компания осуществляет полный цикл производства
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-binoculars"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="electric-work.php">Электромонтажные работы</a>
                        </h4>
                        <p class="service-description">
                            Все виды электромонтажных работ
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-brightness-high"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="laboratory.php">Лаборатория</a>
                        </h4>
                        <p class="service-description">
                            Приемо-сдаточные испытания и измерения<br />
                            Межремонтные/профилактические испытания и
                            измерения<br />
                            Ремонтные испытания и измерения<br />
                            Эксплуатационные (внеочередные/очередные)
                            испытания электрозащитных средств до 220 кВ
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <h4 class="service-title">
                            <a href="../products/">Товары</a>
                        </h4>
                        <p class="service-description">
                            Более 20 000 наименований товара в наличии на
                            складе
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy;
                        <strong>ООО Торговый Дом "Электросистемы"</strong>.
                        - Все права защищены © 2024
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <a href="https://wa.me/+79141500323" target="_blank" class="call-whatsapp"><i class="bi bi-whatsapp"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.umd.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>