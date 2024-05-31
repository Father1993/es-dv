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
        <?php
            // Require header_menu.php file for nav-menu
            require_once "../assets/header_menu.php";
        ?>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="vacancies">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="/">Главная</a></li>
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
                            <a href="delivery.php"><i class="bi bi-briefcase"></i></a>
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
                            <a href="production.php"><i class="bi bi-card-checklist"></i></a>
                        </div>
                        <h4 class="service-title">
                            <a href="production.php">Производство электрооборудования</a>
                        </h4>
                        <p class="service-description">
                            Производство всех видов электрощитов и
                            электрооборудования. <br />
                            Сборка
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item">
                        <div class="service-icon">
                            <a href="manufacturing.php"><i class="bi bi-bar-chart"></i></a>
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
                            <a href="electric-work.php"><i class="bi bi-binoculars"></i></a>
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
                            <a href="laboratory.php"><i class="bi bi-brightness-high"></i></a>
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
                            <a href="../products/"><i class="bi bi-calendar4-week"></i></a>
                        </div>
                        <h4 class="service-title">
                            <a href="../products/">Продажа товаров</a>
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

    <?php require_once "../assets/footer.php"; ?>