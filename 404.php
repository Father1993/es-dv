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
                        <li><a href="index.php">Главная</a></li>
                        <li>404-ошибка</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="error-404">
            <div style="align-items: center" class="container">
                <p style="font-size: 1.8rem">НАЧНИТЕ С ГЛАВНОЙ</p>
                <h1 style="text-align: center">Страница не найдена</h1>
                <img style="
                            display: block;
                            margin: 0 auto;
                            margin-bottom: 50px;
                        " src="./assets/img/404.jpg" alt="Ошибка 404 - Страница не найдена" />
                <p style="font-size: 2rem">Такой Страница не существует</p>
                <p style="font-size: 2.5rem">
                    <a href="/">Вернуться на главную</a>
                </p>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <?php require_once "./assets/footer.php"; ?>