<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/scss/snow.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Carte de voeux</title>
</head>
<body>
<div class="hero">

    <div class="snow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
            <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
                <g id="snow-bottom-layer">
                    <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
                    <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
                    <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
                    <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
                    <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
                    <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
                    <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
                    <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
                    <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
                    <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
                    <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
                    <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
                    <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
                    <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
                    <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
                    <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
                    <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
                    <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
                    <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
                    <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
                    <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
                    <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
                    <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
                    <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
                    <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
                    <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
                    <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
                    <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
                    <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
                    <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
                    <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
                    <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
                    <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
                    <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
                    <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
                    <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
                    <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
                    <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
                    <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
                    <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
                </g>
            </g>
            <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
                <g id="snow-top-layer">
                    <circle cx="8" cy="776" r="8"/>
                    <circle cx="189" cy="925" r="8"/>
                    <circle cx="548" cy="844" r="8"/>
                    <circle cx="685" cy="1115" r="8"/>
                    <circle cx="858" cy="909" r="8"/>
                    <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
                    <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
                    <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
                    <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
                    <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
                    <circle cx="8" cy="8" r="8"/>
                    <circle cx="189" cy="157" r="8"/>
                    <circle cx="548" cy="76" r="8"/>
                    <circle cx="685" cy="347" r="8"/>
                    <circle cx="858" cy="141" r="8"/>
                    <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
                    <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
                    <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
                    <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
                    <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
                </g>
            </g>
        </svg>
    </div>
    <div class="component text-center">
        <h1 class="mt-3">Un message de la part de
            <span id="fname"><?= !empty(htmlspecialchars($_GET['fname'])) ? $_GET['fname']  . " " . $_GET['lname'] : "" ?></span>
        </h1>
        <ul class="align">
            <li>
                <figure class='book'>

                    <!-- Front -->
                    <ul class='hardcover_front'>
                        <li>
                            <div class="coverDesign red">
                                <img class="cerf" src="assets/images/svg/bookSvg.svg" alt="">
                                <img class="couronne" src="assets/images/svg/couronne.svg" alt="">
                            </div>
                        </li>
                        <li>

                        </li>
                    </ul>

                    <!-- Pages -->

                    <ul class='page'>
                    </ul>

                    <!-- Back -->

                    <ul class='hardcover_back'>
                        <li>
                            <h4 id="titleContent"><?= !empty(htmlspecialchars($_GET['titleContent'])) ? $_GET['titleContent'] : "" ?></h4>
                            <p id="userMessage"><?= !empty(htmlspecialchars($_GET['messageContent'])) ? $_GET['messageContent'] : "" ?></p>
                        </li>
                    </ul>
                    <ul class='book_spine'>
                        <li></li>
                        <li></li>
                    </ul>
                </figure>
            </li>
        </ul>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>