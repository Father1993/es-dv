<?php
// Переменные для SEO страницы
$pageTitle = 'Ответвители - ООО ТД Электросистемы';

$pageDescription = 'Продажа ответвителей проводов производства TDM по низким ценам оптом и в розницу';


$ogUrl = 'https://es-dv.ru/products/elektromontazhnye-izdeliya/14-otvetvitel.php';

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
                        <li>Ответвитель</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section class="products-cabel__items">
            <div class="products-cabel__wrapper container">
                <div class="products-cabel__wrapper-card">
                    <img class="products-cabel__img" src="./img/otvetvitel.jpg" alt="Ответвитель" />
                    <div class="products-cabel__title-wrapper">
                        <h2 class="products-cabel__title">Ответвитель</h2>
                        <p class="products-cabel__text">
                            Продажа ответвителей проводов производства TDM
                            по низким ценам.
                        </p>
                    </div>
                </div>

                <hr />

                <div class="products-cabel__about">
                    <h3 class="products-cabel__about-title">Описание</h3>

                    <p>
                        Ответвитель ОВ предназначен для выполнения отвода
                        (ответвления) от токонесущего провода. ы
                    </p>

                    <p>
                        Контакт между проводами обеспечивает контактная
                        часть, которая выполнена в виде небольшого лезвия и
                        проходит через изоляцию, а защелкивающаяся «крышка»
                        ответвителя полностью изолирует узел. Надавливая на
                        контактную пластину, происходит одновременное
                        прорезание изоляции на магистрали и ответвлении.
                    </p>

                    <p>
                        Преимуществами использования ОВ является удобство и
                        быстрота монтажа. При монтаже отвода не требуется
                        предварительная
                        <a href="26-stripper.php">зачистка провода</a>.
                        Пластмассовый корпус обеспечивает изоляцию и
                        механическую защиту ответвления. Не требуется
                        использование дополнительного инструмента.
                    </p>

                    <div class="golden-images__wrapper">
                        <img style="height: auto; width: 400px" src="./img/otvetv.jpg"
                            alt="использование ответвителя для провода" />
                    </div>

                    <div>
                        <h4 class="svet-title">Ответвитель провода TDM</h4>

                        <table style="height: 168px" width="100%">
                            <tbody>
                                <tr>
                                    <th rowspan="2">Наименование</th>
                                    <th rowspan="2">Артикул</th>
                                    <th rowspan="2">
                                        Сечение провода — основной, мм<sup>2</sup>
                                    </th>
                                    <th rowspan="2">
                                        Сечение провода — ответвительный,
                                        мм<sup>2</sup>
                                    </th>
                                    <th rowspan="2">Цвет изоляции</th>
                                    <th colspan="4">
                                        Транспортная упаковка
                                    </th>
                                </tr>
                                <tr>
                                    <td>Количество, упак</td>
                                    <td>Вес, кг</td>
                                    <td>Размеры, см</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>ОВ-1</td>
                                    <td>SQ0520-0001</td>
                                    <td>0,25 - 1,65</td>
                                    <td>0,25 - 1,65</td>
                                    <td>красный</td>
                                    <td align="center">24</td>
                                    <td align="left">7</td>
                                    <td>38×37×16,5</td>
                                </tr>
                                <tr>
                                    <td>ОВ-2</td>
                                    <td>SQ0520-0002</td>
                                    <td>0,25 - 1,65</td>
                                    <td>1,04 - 2,63</td>
                                    <td>синий</td>
                                    <td align="center">24</td>
                                    <td align="left">7</td>
                                    <td>38×37×16,5</td>
                                </tr>
                                <tr>
                                    <td>ОВ-3</td>
                                    <td>SQ0520-0003</td>
                                    <td>2,63 - 6,64</td>
                                    <td>2,63 - 6,64</td>
                                    <td>желтый</td>
                                    <td align="center">48</td>
                                    <td align="left">7</td>
                                    <td>38×37×16,5</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="10">
                                        Количество в индивидуальной упаковке
                                        – 100 штук.
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <hr />
                </div>
            </div>
        </section>


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once "../../assets/footer.php"; ?>