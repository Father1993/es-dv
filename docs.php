<?php
// Переменные для SEO страницы
$pageTitle = 'Документы - ООО "ТД"Электросистемы"';

$pageDescription = 'Реквизиты и сертификаты ООО ТД Электросистемы';

$PageKeyWords = 'реквизиты, электросистемы, сертификат, свидетельство, документы';

$ogUrl = 'https://es-dv.ru/docs.php';

require_once "./assets/header.php";
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <?php
                // Require header_menu.php file for nav-menu
                require_once "./assets/header_menu.php";
        ?>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="docs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="/">Главная</a></li>
                        <li>Документы</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="docs-page">
            <div class="container">
                <h2>Наши реквизиты</h2>

                <div class="docs-requisites">
                    <p>ООО ТД "Электросистемы"</p>
                    <p>
                        Юридический адрес: 680014, г. Хабаровск, ул.
                        Промышленная, дом 8, оф. 306
                    </p>
                    <p>
                        Фактический адрес: 680014, г. Хабаровск, ул.
                        Промышленная, дом 8.
                    </p>
                    <p>ОГРН: 1132724010825</p>
                    <p>ИНН: 2724182990</p>
                </div>

                <h2>Наши сертификаты</h2>

                <div class="docs-certificates">
                    <ul>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/dks-2023.pdf">DKC</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/tdm-2023.pdf">TDM Electric</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/SE-2023.pdf">Systeme Electric</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/iek-2023.pdf">IEK</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/volg.pdf">Волжский Электроконтакт</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/st.pdf">Световые технологии</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/CHINT-2023.jpg">Chint</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/kab-arm-2023.pdf">Кабельная Арматура</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/svet-k-2023.pdf">Свет Комплект</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/era-2023.jpg">ТМ Эра</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/keaz-2023.pdf">КЭАЗ</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/remz-2023.pdf">РЭМЗ</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/rmz.pdf">РЭМЗ</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/diora-2023.pdf">Диора</a>
                        </li>
                        <li>
                            <a target="_blank" href="./assets/img/pdf/promRukav.pdf">ПромРукав</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <?php require_once "./assets/footer.php"; ?>