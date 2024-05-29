<?php
// Переменные для SEO страницы
$pageTitle = 'Электроустановочные изделия - ООО ТД Электросистемы';

$pageDescription = 'Электроустановочные изделия любых ценовых категорий: розетки, выключатели, удлинители, вилки и пр. различных производителей TDM, DKC, IEK, Systeme Electric';

$PageKeyWords = 'розетка, выключатель, вилка, удлинитель, фильтр, электронагреватель';

$ogUrl = 'https://es-dv.ru/products/electro-ustanovka/';

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
                        <li>Электроустановочные изделия</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="product__svet">
            <div class="container product-svet__wrapper">
                <img class="svet-title-img" src="../../assets/img/svetotekhnika.jpg" alt="Светотехника купить" />

                <h2>Электроустановочные изделия</h2>

                <div class="product-svet-items">
                    <ul>
                        <li>
                            <img src="./img/rozetki-i-vyklyuchateli-systeme-electric.jpg"
                                alt="Розетки и выключатели Systeme Electric" />
                            <h3>Розетки и выключатели Systeme Electric</h3>
                            <a href="systeme-electric.php">Подробнее</a>
                        </li>

                        <li>
                            <img src="./img/vilki.jpg" alt="Вилки" />
                            <h3>Вилки</h3>
                            <a href="vilki.php">Подробнее</a>
                        </li>

                        <li>
                            <img src="./img/udlinitel-setevoj-iek.jpg" alt="Удлинитель сетевой IEK" />
                            <h3>Удлинитель сетевой IEK</h3>
                            <a href="udlinitel-iek.php">Подробнее</a>
                        </li>

                        <li>
                            <img src="./img/udlinitel-setevoj-tdm.jpg" alt="Удлинитель сетевой TDM" />
                            <h3>Удлинитель сетевой TDM</h3>
                            <a href="udlinitel-tdm.php">Подробнее</a>
                        </li>
                        <li>
                            <img src="./img/rozetki-kvarta-iek.jpg" alt="Розетки и выключатели серии Кварта IEK" />
                            <h3>Розетки и выключатели серии Кварта IEK</h3>
                            <a href="rozetki-iek.php">Подробнее</a>
                        </li>
                        <li>
                            <img src="./img/rozetki-i-vyklyuchateli-tdm-electric.jpg"
                                alt="Розетки и выключатели TDM Electric" />
                            <h3>Розетки и выключатели TDM Electric</h3>
                            <a href="rozetki-tdm.php">Подробнее</a>
                        </li>

                        <li>
                            <img src="./img/zvonki.jpg" alt="Звонки" />
                            <h3>Звонки</h3>
                            <a href="zvonki.php">Подробнее</a>
                        </li>
                        <li>
                            <img src="./img/udliniteli-na-katushkakh.jpg" alt="Удлинители на катушках" />
                            <h3>Удлинители на катушках</h3>
                            <a href="udliniteli-na-kotushke.php">Подробнее</a>
                        </li>
                        <li>
                            <img src="./img/rozetki-i-vyklyuchateli-dkc.jpg" alt="Розетки и выключатели DKC" />
                            <h3>Розетки и выключатели DKC</h3>
                            <a href="rozetki-i-vyklyuchateli-dkc.php">Подробнее</a>
                        </li>

                        <li>
                            <img src="./img/setevye-filtry.jpg" alt="Сетевые фильтры" />
                            <h3>Сетевые фильтры</h3>
                            <a href="setevye-filtry.php">Подробнее</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


    </main>
    <!-- End #main -->
    <?php require_once "../../assets/footer.php"; ?>