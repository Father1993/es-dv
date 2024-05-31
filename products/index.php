<?php
// Переменные для SEO страницы
$pageTitle = 'Продукция компании | ООО "ТД"Электросистемы"';

$pageDescription = 'Продукция компании, продажа оборудование и товаров по самым низким ценам | Электросистемы';

$PageKeyWords = 'продукция, продукция компании, кабель, силовое, оборудование, светотехника, электромонтажные изделия, изделия, электромонтаж, электроустановочные  изделия, электроустановка, отдел продаж, продажи, купить, выгодны, низкая цена, низкие цены, дальний восток, хабаровск, биробиджан, владивосток, благовещенск';

$ogUrl = 'https://es-dv.ru/products';

require_once "../assets/header.php";
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <?php
            // Require header_menu.php file for nav-menu
            require_once "../assets/header_menu.php";
        ?>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <!-- ======= Breadcrumbs ======= -->
        <section class="vacancies">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="/">Главная</a></li>
                        <li>Продукция</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section id="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Продукция</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">
                            Наши филиалы расположены во всех крупных городах
                            Дальнего Востока. Найти и купить любую электрику
                            оптом или в розницу проще простого. Неважно,
                            будет это силовой трансформатор для электросети
                            или розетка для дома - у нас Вы найдете любые
                            электротовары и электрооборудование.
                        </p>
                        <hr class="product-mobile-lines">
                        <p class="section-description">
                            <strong>С полным ассортиментом вы можете
                                ознакомиться в нашем интернет-магазине
                                <a href="https://xn----7sbfcjc9ag3aaueuc3lua.xn--p1ai/">ЭЛЕКТРОТОВАРЫ-ДВ</a></strong>
                        </p>
                        <hr class="product-mobile-lines">
                    </div>

                    <div class="products-main__wrapper">
                        <div>
                            <a href="svet/">
                                <img src="/assets/img/prod-svet.jpg" alt="Светотехника">
                            </a>
                            <h4>Светотехника</h4>
                            <p></p>
                        </div>

                        <div>
                            <a href="cabel/">
                                <img src="/assets/img/prod-cabel.jpg" alt="Кабельная продукция" />
                            </a>

                            <h4>Кабельная продукция</h4>
                            <p></p>
                        </div>
                        <div>
                            <a href="silovoe/">
                                <img src="/assets/img/prod-silovoe.jpg" alt="Силовое и коммутационное оборудование" />
                            </a>

                            <h4>Силовое и коммутационное оборудование</h4>
                            <p></p>
                        </div>
                        <div>
                            <a href="elektromontazhnye-izdeliya/">
                                <img src="/assets/img/prod-montaj.jpg" alt="Электромонтажные изделия" />
                            </a>

                            <h4>Электромонтажные изделия</h4>
                            <p></p>
                        </div>
                        <div>
                            <a href="electro-ustanovka/">
                                <img src="/assets/img/prod-ustan.jpg" alt="Электроустановочные изделия" />
                            </a>

                            <h4>Электроустановочные изделия</h4>
                            <p></p>
                        </div>

                    </div>

                    <hr style="margin-bottom: 100px;">

                    <div class="products-main__banner">
                        <img src="../assets/img/svetotekhnika.jpg" alt="Светотехника купить">
                    </div>

                </div>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->
    <?php require_once "../assets/footer.php"; ?>