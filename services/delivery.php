<?php
// Переменные для SEO страницы
$pageTitle = 'Услуги доставки - ООО ТД Электросистемы';

$pageDescription = 'Доставка электротоваров и электрооборудоваия по г. Хабаровску и Дальнему Востоку';

$PageKeyWords = 'условия, сроки, отправка, упаковка, перевозка, бесплатная доставка, доставка, услуги';

$ogUrl = 'https://es-dv.ru/services/delivery.php';

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
                        <a href="../index.php#about"><span class="active">Подробнее</span>
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
                                        <a href="./delivery.html">Доставка</a>
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
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="../services/">Услуги</a></li>
                        <li>Доставка</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="services-delivery">
            <div class="container delivery__wrapper">
                <div class="delivery-card">
                    <h2>Доставка со склада до клиента в Хабаровске</h2>
                    <img class="delivery-image" src="./img/us4.jpg" alt="Доставка со склада до клиента в Хабаровске" />
                    <p>
                        Наш автопарк состоит из закрытых фургонов по 10-14
                        кубометров, позволяющий достаточно оперативно
                        доставлять товар в пределах города и ближайших
                        населенных пунктов. Доставка товара, объем и сроки
                        отправки транспортом "Электросистем" оговаривается
                        при согласовании заказа с нашими менеджерами по
                        продажам. Также осуществляется услуга бесплатной
                        доставки при покупке продукции на сумму от 5000 руб.
                    </p>
                </div>
                <hr />
                <div class="delivery-card">
                    <h2>Доставка товара клиентам в регионы ДФО</h2>
                    <img class="delivery-image" src="./img/us5.jpg" alt="Доставка товара клиентам в регионы ДФО" />
                    <p>
                        В случаях когда у наших клиентов в отдаленных от
                        Хабаровска регионах нет возможности вывезти товар
                        самостоятельно или с помощью транспортных компаний,
                        мы готовы взять на себя вопросы по доставке груза до
                        дверей склада клиента, где бы он не находился. В
                        зависимости от расстояния и объема груза, мы будем
                        использовать для экспедирования свой транспорт или
                        транспорт авиа, морских и железнодорожных
                        перевозчиков. Стоимость таких услуг и порядок оплаты
                        оговаривается отдельно с клиентом.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <?php require_once "../assets/footer.php"; ?>