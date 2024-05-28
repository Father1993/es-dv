<?php
// Переменные для SEO страницы
$pageTitle = 'Магазин электротоваров ЭЛЕКТРОМАРКЕТ - ООО ТД Электросистемы';

$pageDescription = 'Продажа электротоваров в г. Хабаровске по низким ценам : кабель и провод, электроустановка, светотехника и многое другое по низким ценам';

$PageKeyWords = 'электротовары, розница, электротехника, хабаровск, кабель, провод, счетчик, электрощит, лампы, инструмент, розетка, выключатель';

$ogUrl = 'https://es-dv.ru/shop.php';

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
                                    <a href="./shop.html"
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
            <section class="shop">
                <div class="container">
                    <div
                        class="d-flex justify-content-between align-items-center"
                    >
                        <h2>Склад-магазин электротоваров "Электромаркет"</h2>
                        <ol>
                            <li><a href="index.php">Главная</a></li>
                            <li>Электромаркет</li>
                        </ol>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumbs -->

            <section class="shop-page">
                <div class="container">
                    <img
                        class="shop-title-img"
                        src="./assets/img/EM.jpg"
                        alt="Электромаркет"
                    />
                    <h2 class="shop-title-h2">
                        Быстрое и качественное обслуживание, оптовые цены,
                        накопительные дисконтные карты и удобная автопарковка
                        для всех клиентов. К оплате принимаются пластиковые
                        карты.
                    </h2>

                    <h3 class="shop-title-h3">
                        Большой выбор электротоваров промышленного и бытового
                        применения:
                    </h3>

                    <ul class="list-cards">
                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/11.jpg"
                                    alt="Кабель и кабеленесущие системы"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a href="./products/cabel/"
                                        >Кабель и кабеленесущие системы:</a
                                    >
                                </h6>
                                <p>
                                    - силовой кабель; <br />

                                    - витая пара; <br />

                                    - греющий кабель; <br />

                                    - провод с медной и алюминиевой жилой;
                                    <br />

                                    - провод СИП и др.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/12.jpg"
                                    alt="Корпуса электрощитов"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a href="./products/silovoe/"
                                        >Корпуса электрощитов:</a
                                    >
                                </h6>
                                <p>
                                    - пластиковые и металлические;<br />
                                    - для различных типов щитов
                                    (распределительных, аварийных,
                                    этажных,квартирных, автоматики и пр.);<br />
                                    - TDM, IEK, Systeme Electric и др.
                                    бренды;<br />
                                    - монтажные изделия для электрощитов.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/13.jpg"
                                    alt="Счетчики электроэнергии"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a href="./products/silovoe/"
                                        >Счетчики электроэнергии:</a
                                    >
                                </h6>
                                <p>
                                    - индукционные, электронные; <br />

                                    - одно-, двух- и многотарифные; <br />

                                    - одно- и трехфазные и др.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/14.jpg"
                                    alt="Электроустановочные изделия"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a href="./products/electro-ustanovka/"
                                        >Электроустановочные изделия:</a
                                    >
                                </h6>
                                <p>
                                    - выключатели, розетки; <br />

                                    - TDM, IEK, Systeme Electric и др. бренды.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/15.jpg"
                                    alt="Лампы и светильники"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a href="./products/svet/">
                                        Лампы и светильники:</a
                                    >
                                </h6>
                                <p>
                                    - люминесцентные, галогенные, светодиодные и
                                    др. лампы; <br />

                                    - светильники для бытового, промышленного,
                                    уличного освещения..
                                </p>
                            </div>
                        </li>

                        <li>
                            <div>
                                <img
                                    src="./assets/img/shop/16.jpg"
                                    alt="Оборудование для электромонтажа"
                                />
                            </div>
                            <div>
                                <h6 class="list-card-title">
                                    <a
                                        href="./products/elektromontazhnye-izdeliya/"
                                        >Оборудование для электромонтажа:</a
                                    >
                                </h6>
                                <p>
                                    - клещи обжимные и токоизмерительные;<br />

                                    - мультиметры;<br />

                                    - инструменты для резки провода;<br />

                                    - гидравлические прессы;<br />

                                    - указатели напряжения и пр.
                                </p>
                            </div>
                        </li>
                    </ul>

                    <hr class="horizont-line" />

                    <h4 class="internet-shop-title">
                        С полныйм ассортиментом вы можете ознакомиться на нашем
                        интернет-магазине Электромаркет. <br />
                        На сайте <strong>ДЕЙСТВИТЕЛЬНО</strong> низкие цены!
                    </h4>
                    <a
                        class="shop-link-btn"
                        target="_blank"
                        href="https://xn----7sbfcjc9ag3aaueuc3lua.xn--p1ai/"
                        >ПЕРЕЙТИ</a
                    >
                    <hr />

                    <div class="shop-shema">
                        <div class="shop-shema-clock">
                            <h6>Ждем Вас!</h6>
                            <p class="shop__address">Адрес магазина:</p>
                            <p class="shop__street">
                                г. Хабаровск, ул. Промышленная 8
                            </p>
                            <p class="shop__telephone">Телефон:</p>
                            <a
                                class="shop__telephone-link"
                                href="tel:+74212410118"
                                >+7 (4212) 41-01-18</a
                            >
                            <p class="shop__work-time">Режим работы:</p>
                            <p class="shop__work-clock">
                                Пн-Пт: с 9:00 до 18:00; <br />
                                Сб: с 10:00 до 16:00; <br />
                                Вс: выходной
                            </p>
                        </div>

                        <div class="shop-shema-img">
                            <img
                                src="./assets/img/shop/shem2.jpg"
                                alt="Схема проезда"
                            />
                        </div>
                    </div>
                    <hr />

                    <div class="shop-photo">
                        <img
                            src="./assets/img/shop/2.jpg"
                            alt="Фото магазина Электромаркет"
                        />
                        <img
                            src="./assets/img/shop/3.jpg"
                            alt="Фото Электромаркет"
                        />
                        <img
                            src="./assets/img/shop/4.jpg"
                            alt="Фото внутри магазина"
                        />
                        <img
                            src="./assets/img/shop/5.jpg"
                            alt="Фото внутри магазина Электромаркет"
                        />
                        <img
                            src="./assets/img/shop/1.jpg"
                            alt="Вид на магазин Электромаркет с птичьего полета"
                        />
                    </div>
                </div>
            </section>
        </main>
        <!-- End #main -->
<?php require_once "./assets/footer.php"; ?>