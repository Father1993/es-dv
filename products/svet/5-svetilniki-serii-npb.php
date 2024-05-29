<?php
// Переменные для SEO страницы
$pageTitle = 'Светильники серии НПБ - ООО ТД Электросистемы';

$pageDescription = 'Компания ООО ТД Электросистемы предлагает к продаже светильники серии НПБ, отличающиеся высокой прочностью и защитой от проникновения пыли и влаги';

$PageKeyWords = 'нпб, светильник, освещение, производственный, пыленепроницаемый, влагозащищенный, защищенный';

$ogUrl = 'https://es-dv.ru/products/svet/5-svetilniki-serii-npb.php';

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
                            <a href="./">Светотехника</a>
                        </li>
                        <li>Светильники серии НПБ</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="products-cabel__items">
            <div class="products-cabel__wrapper container">
                <div class="products-cabel__wrapper-card">
                    <img class="products-cabel__img" src="./img/svetilniki-serii-npb.jpg" alt="Светильники серии НПБ" />
                    <div class="products-cabel__title-wrapper">
                        <h2 class="products-cabel__title">
                            Светильники серии НПБ
                        </h2>
                        <p class="products-cabel__text">
                            Компания ООО "ТД"Электросистемы" предлагает к
                            продаже светильники серии НПБ, отличающиеся
                            высокой прочностью и защитой от проникновения
                            пыли и влаги.
                        </p>
                    </div>
                </div>

                <hr />

                <div class="products-cabel__about">
                    <h3 class="products-cabel__about-title">Описание</h3>

                    <p>
                        Светильники серии НПБ предназначены для внутреннего
                        освещения общественных и производственных помещений,
                        а также для наружного освещения.
                    </p>

                    <p>
                        Конструкция светильника и применяемые материалы
                        обеспечивают высокую механическую прочность и защиту
                        от проникновения пыли и влаги по классу IP54. Плафон
                        светильника выполнен из термостойкого стекла. Корпус
                        светильника выполнен из устойчивого к коррозии
                        алюминиевого сплава с качественным покрытием корпуса
                        термостойкой краской. Керамический патрон Е27.
                    </p>

                    <p>
                        По требованиям электрической безопасности, степени
                        защиты от попадания влаги и пыли, механической
                        прочности, стойкости к тепловым нагрузкам и огню,
                        светильники серии НПБ соответствуют российским и
                        международным стандартам. Наличие сальников,
                        керамического патрона и антикоррозионного покрытия
                        корпуса позволяют использовать светильники при
                        высокой влажности и высоких температурах (до 100°С)
                    </p>

                    <p>
                        <strong>Смотрите также светотехническая продукция TDM
                            (лампы, фонари и пр.), Световые технологии,
                            Smartbuy</strong>
                    </p>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <a href="https://wa.me/+79141500323" target="_blank" class="call-whatsapp"><i class="bi bi-whatsapp"></i></a>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once "../../assets/footer.php"; ?>