<?php
// Переменные для SEO страницы
$pageTitle = 'Скобы пластиковые  - ООО ТД Электросистемы';

$pageDescription = 'Недорогие пластиковые скобы для монтажа кабеля и провода';

$PageKeyWords = 'СИП, Инструменты, пвх, прокладка, монтаж, продажа, скобы, пластиковые скобы, для монтажа, монтаж кабеля, монтаж проводов';

$ogUrl = 'https://es-dv.ru/products/elektromontazhnye-izdeliya/21-skoby-plastikovye.php';

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
                        <li><a href="/">Главная</a></li>
                        <li><a href="../">Продукция</a></li>
                        <li>
                            <a href="./">Электромонтажные изделия</a>
                        </li>
                        <li>Скобы пластиковые</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="products-cabel__items">
            <div class="products-cabel__wrapper container">
                <div class="products-cabel__wrapper-card">
                    <img class="products-cabel__img" src="./img/skoby-plastikovye.jpg" alt="Скобы пластиковые" />
                    <div class="products-cabel__title-wrapper">
                        <h2 class="products-cabel__title">
                            Скобы пластиковые
                        </h2>
                        <p class="products-cabel__text">
                            Скобы пластиковые предназначены для быстрого и
                            надёжного крепления круглых и плоских кабелей
                            или проводов различного назначения в жилых и
                            промышленных помещениях.
                        </p>
                    </div>
                </div>

                <hr />

                <div class="products-cabel__about">
                    <h3 class="products-cabel__about-title">Описание</h3>

                    <div class="golden-images__wrapper">
                        <img style="height: auto; width: 200px" src="./img/skobs.jpeg" alt="Скобы" />
                    </div>

                    <p>
                        Скобы пластиковые предназначены для быстрого и
                        надёжного крепления круглых и плоских кабелей или
                        проводов различного назначения (силовых, телефонных,
                        телевизионных и т. п.) в жилых и промышленных
                        помещениях.
                    </p>

                    <p>
                        Скобы выпускаются в двух исполнениях – полукруглые и
                        плоские, и поставляются с гвоздём. Возможно
                        крепление к различным поверхностям: к дереву,
                        прессованному картону, швам кирпичной кладки, к
                        штукатурке, бетону, кирпичу. Предлагается широкий
                        типоразмерный ряд: до 35 мм.
                    </p>
                </div>
            </div>
        </section>


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once "../../assets/footer.php"; ?>