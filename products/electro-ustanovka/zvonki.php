<?php
// Переменные для SEO страницы
$pageTitle = 'Звонки - ООО "ТД"Электросистемы"';

$pageDescription = 'Проводные и беспроводные звонки используются в качестве дверных звонков или устройств внутреннего вызова. Продажа звонков';

$PageKeyWords = 'звонок, дверной, беспроводной, вызов, проводной, звонки на дверь';

$ogUrl = 'https://es-dv.ru/products/electro-ustanovka/zvonki.php';

require_once "../../assets/header.php";
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <?php
            // Require header_menu.php file for nav-menu
            require_once "../../assets/header_menu.php";
        ?>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="vacancies">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="../../index.php">Главная</a></li>
                        <li><a href="../">Продукция</a></li>
                        <li>
                            <a href="../electro-ustanovka/">Электроустановочные изделия</a>
                        </li>
                        <li>Звонки</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="systeme-electric__page">
            <div class="container systeme-electric__wrapper">
                <div class="systeme-electric__wrapper-card">
                    <img class="systeme-electric__img" src="./img/zvonki.jpg" alt="Звонки дверные в наличии" />
                    <div class="systeme-electric__title">
                        <h2 class="systeme-electric__title-text">Звонки</h2>
                        <p>
                            Проводные и беспроводные звонки используются в
                            качестве дверных звонков или устройств
                            внутреннего вызова.
                        </p>
                    </div>
                </div>

                <hr />

                <div class="systeme-electric__about">
                    <h3>Описание</h3>

                    <p class="special__block">
                        ООО "ТД"Электросистемы" предлагает к продаже дверные
                        звонки компании беспроводной дверной звонок TDM"TDM
                        Electric" в разлдверной звонок TDMичном
                        типоисполнении, с различным дизайном, функционалом и
                        ценой. Звонки данного бренда обладают рядом
                        конкурентных преимуществ на электротехническом рынке
                        России (в зависимости от модели):
                    </p>

                    <div class="zvonki__wrapper">
                        <ul>
                            <li>
                                каждый беспроводной звонок имеет свой
                                уникальный код, который позволяет звонку не
                                пересекаться с сигналами соседних
                                беспроводных звонков
                            </li>
                            <li>
                                дальность работы беспроводных звонков - 100
                                метров (на открытом пространстве)
                            </li>
                            <li>
                                звонок может питаться либо от электрической
                                сети, либо от пальчиковых батареек
                            </li>
                            <li>
                                ряд моделей имеет возможность смены кода
                                звонка в случае порчи или утери старой
                                кнопки или для подключения дополнительной
                                кнопки
                            </li>
                            <li>
                                в ассортименте имеются отдельные кнопки для
                                звонков для замены вышедшей из строя кнопки
                            </li>
                            <li>
                                кнопки для звонков имеют степень защиты IP44
                                или IP20
                            </li>
                            <li>
                                звонки имеют возможность смены мелодии или
                                установки мелодии на каждую кнопку для
                                определения места, с которого происходит
                                вызов и т.д
                            </li>
                        </ul>
                        <div>
                            <img src="./img/zvon1.jpg" alt="Звонок проводной" />
                            <img src="./img/zvon2.jpg" alt="Звонок беспроводной" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- End #main -->
    <?php require_once "../../assets/footer.php"; ?>