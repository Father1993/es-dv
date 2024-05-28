<?php
// Переменные для SEO страницы
$pageTitle = 'Лаборатория - ООО ТД Электросистемы';

$pageDescription = 'Услуги лаборатории по выполнению испытаний и измерений электрооборудования';

$PageKeyWords = 'лаборатория, испытания, измерения, хабаровск, электрооборудование, электроустановка, услуга';

$ogUrl = 'https://es-dv.ru/services/laboratory.php';

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
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="../services/">Услуги</a></li>
                        <li>Испытательная лаборатория</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="laboratory-services">
            <div class="container laboratory__wrapper">
                <h2>Услуги испытательной лаборатории</h2>
                <h3>
                    Наша испытательная лаборатория готова предложить
                    юридическим и частным лицам услуги по выполнению
                    испытаний и измерений электрооборудования и
                    электроустановок:
                </h3>

                <div class="laboratory__wrapper-card">
                    <img class="laboratory__wrapper-card-img" src="./img/us6.jpg"
                        alt="Услуги испытательной лаборатории Дальний Восток" />
                    <ul class="laboratory__wrapper-card-list">
                        <li>Электростанции ДЭС напряжением до 220 кВ</li>
                        <li>Подстанции, РУ напряжением до 220 кВ</li>
                        <li>Заземляющие устройства до 220 кВ</li>
                        <li>Воздушные электрические линии до 220 кВ</li>
                        <li>Силовые кабельные линии до 220 кВ</li>
                        <li>
                            Здания, помещения жилые, общественные, бытовые,
                            производственные с электроустановками до 1,0 кВ
                        </li>
                        <li>
                            Вращающиеся электрические машины: генераторы,
                            компенсаторы до 10 кВ
                        </li>
                        <li>Электродвигатели до 10 кВ</li>
                        <li>
                            Электроустановки во взрывоопасных зонах класса
                            ВI,ВIа,ВIб
                        </li>
                    </ul>
                </div>

                <h4>Перечень видов испытаний и измерений:</h4>
                <ul class="laboratory__wrapper-card-list-two">
                    <li>
                        Приемо-сдаточные испытания и измерения
                        электрооборудования
                    </li>
                    <li>
                        Межремонтные (профилактические) испытания и
                        измерения электрооборудования
                    </li>
                    <li>
                        Ремонтные испытания и измерения электрооборудования
                    </li>
                    <li>
                        Эксплуатационные (внеочередные и очередные)
                        испытания электрозащитных средств, используемых в
                        электроустановках напряжением до 220 кВ
                    </li>
                </ul>
                <p>
                    По всем договорным или консультационным вопросам вы
                    можете обратиться к менеджерам по продажам нашей
                    компании.
                </p>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <?php require_once "../assets/footer.php"; ?>