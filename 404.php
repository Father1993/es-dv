<?php
// Переменные для SEO страницы
$pageTitle = 'Ошибка 404 - Страница не найдена';

$pageDescription = 'Ошибка 404 - Страница не найдена';

$PageKeyWords = '404, ошибка, error, throw';

$ogUrl = 'https://es-dv.ru/docs.php';

require_once "./assets/header.php";
?>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
            <div
                class="container d-flex align-items-center justify-content-between"
            >
                <a href="index.php" class="logo mr-auto"
                    ><img
                        src="assets/img/img1/elektrosistema-logo.png"
                        alt="Логотип Электросистемы"
                /></a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li class="i-shop">
                            <a
                                class="nav-link scrollto"
                                target="_blank"
                                href="https://электротовары-дв.рф/"
                                >Интернет магазин</a
                            >
                        </li>
                        <li>
                            <a
                                class="nav-link scrollto"
                                href="index.php#hero"
                                >Главная</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#about">О нас</a>
                        </li>
                        <li>
                            <a
                                class="nav-link scrollto"
                                href="index.php#services"
                                >Услуги</a
                            >
                        </li>
                        <li>
                            <a
                                class="nav-link scrollto"
                                href="index.php#portfolio"
                                >Продукция</a
                            >
                        </li>

                        <li class="dropdown">
                            <a href="index.php#about"
                                ><span class="active">Подробнее</span>
                                <i class="bi bi-chevron-down"></i
                            ></a>
                            <ul>
                                <li>
                                    <a href="about.php">О компании</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#services">
                                        <span>Услуги</span>
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a
                                                href="services/electric-work.php"
                                                >Все виды электромонтажных
                                                работ</a
                                            >
                                        </li>
                                        <li>
                                            <a href="services/laboratory.php"
                                                >Услуги испытательной
                                                лаборатории</a
                                            >
                                        </li>
                                        <li>
                                            <a href="services/delivery.php"
                                                >Доставка</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="services/manufacturing.php"
                                                >Изготовление металлических
                                                корпусов электрощитов</a
                                            >
                                        </li>

                                        <li>
                                            <a href="services/production.php"
                                                >Производство электрощитов и
                                                электрооборудования</a
                                            >
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="index.php#portfolio"
                                        ><span>Продукция</span>
                                        <i class="bi bi-chevron-right"></i
                                    ></a>
                                    <ul>
                                        <li>
                                            <a href="./products/svet/"
                                                >Светотехника</a
                                            >
                                        </li>
                                        <li>
                                            <a href="./products/cabel/"
                                                >Кабель</a
                                            >
                                        </li>
                                        <li>
                                            <a href="./products/silovoe/"
                                                >Силовое и коммутационное
                                                оборудование</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="./products/elektromontazhnye-izdeliya/"
                                                >Электромонтажные изделия</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="./products/electro-ustanovka/"
                                                >Электроустановочные изделия</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="vacancies.php">Вакансии</a></li>
                                <li><a href="docs.php">Документы</a></li>
                                <li>
                                    <a href="shop.php"
                                        >Магазин Электромаркет</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="contacts.php"
                                >Контакты</a
                            >
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
            <section class="docs">
                <div class="container">
                    <div
                        class="d-flex justify-content-between align-items-center"
                    >
                        <ol>
                            <li><a href="index.php">Главная</a></li>
                            <li>404-ошибка</li>
                        </ol>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumbs -->

            <section class="error-404">
                <div style="align-items: center" class="container">
                    <h1 style="text-align: center">Страница не найдена</h1>
                    <img
                        style="
                            display: block;
                            margin: 0 auto;
                            margin-bottom: 50px;
                        "
                        src="./assets/img/404.jpg"
                        alt="Ошибка 404 - Страница не найдена"
                    />
                    <p style="font-size: 2rem">Такой Страница не существует</p>
                    <p style="font-size: 1.8rem">НАЧНИТЕ С ГЛАВНОЙ СТРАНИЦЫ</p>
                    <p style="font-size: 2.5rem">
                        <a href="/">Вернуться на главную</a>
                    </p>
                </div>
            </section>
        </main>
        <!-- End #main -->

<?php require_once "./assets/footer.php"; ?>