<?php
// Переменные для SEO страницы
$pageTitle = 'Силовые разъемы- ООО ТД Электросистемы';

$pageDescription = 'Вилки, стационарные и переносные розетки для подключения различного электрооборудования, электроинструмента, станков и пр. по низким ценам';

$PageKeyWords = 'модульное оборудование, разъемы, силовые , автоматические выключатели, дифференциальные автоматы, выключатели нагрузки, ограничители перенапряжений, модульные контакторы, сигнальные лампы, розетки модульные';

$ogUrl = 'https://es-dv.ru/products/silovoe/22-silovye-razemy.php';

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
                            <a href="./">Силовое и коммутационное оборудование</a>
                        </li>
                        <li>Силовые разъемы</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="products-cabel__items">
            <div class="products-cabel__wrapper container">
                <div class="products-cabel__wrapper-card">
                    <img class="products-cabel__img" src="./img/silovye-razemy.jpg" alt="Силовые разъемы" />
                    <div class="products-cabel__title-wrapper">
                        <h2 class="products-cabel__title">
                            Силовые разъемы
                        </h2>
                        <p class="products-cabel__text">
                            Вилки, стационарные и переносные розетки для
                            подключения различного электрооборудования,
                            электроинструмента, станков и пр.
                        </p>
                    </div>
                </div>

                <hr />

                <div class="products-cabel__about">
                    <h3 class="products-cabel__about-title">Описание</h3>

                    <p>
                        Силовые разъемы предназначены для подключения
                        мобильного или стационарного электрооборудования к
                        сети переменного тока частотой 50 Гц с напряжением
                        230 или 400 В.
                    </p>

                    <p>
                        Применяют для подключения строительного
                        электрооборудования и электроинструмента внутри
                        помещений и на открытом воздухе совместно с
                        мобильным электрооборудованием кабельной системы
                        питания и стационарным электрооборудованием
                        однофазного и трехфазного исполнения, а так же для
                        подключения станков и другого промышленного
                        оборудования, для электроснабжения бытовок и киосков
                        и т.д.
                    </p>

                    <p>Особенности конструкции:</p>
                    <ul>
                        <li>
                            крышки защищают от попадания внутрь пыли и
                            влаги;
                        </li>
                        <li>
                            штыревые контакты
                            <a href="../electro-ustanovka/vilki.php">вилок</a>
                            и розеточные узлы покрыты никелем для защиты от
                            коррозии;
                        </li>
                        <li>
                            корпус выполняется шероховатым, чтобы
                            препятствовать проскальзыванию рук при
                            подключении и монтаже.
                        </li>
                    </ul>

                    <span class="span-spec__border">Смотрите также розетки
                        <a href="../electro-ustanovka/rozetki-tdm.php">TDM</a>,
                        <a href="../electro-ustanovka/systeme-electric.php">розетки Schneider</a></span>
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