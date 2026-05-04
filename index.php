

<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="./fonts/cabinet/WEB/css/cabinet-grotesk.css">
    <link rel="stylesheet" href="degular.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lorenzo Candela</title>

    <link rel="stylesheet" href="style.css?v=0.9">
</head>
<body style="text-align: center">

<!-- MOBILE MENU -->
<div class="menu-container">
    <div class="line line-1">
        <div class="line-inner line-inner-1">
        </div>
    </div>
    <div class="line line-2">
        <div class="line-inner line-inner-2">
        </div>
    </div>
</div>
<div class="menu-items-container">
    <ul>
        <li><a href="#" onclick="changeInclude(event, 'about')">About</a></li>
        <li><a href="#" onclick="changeInclude(event, 'ideas')">Ideas</a></li>
        <li><a href="#" onclick="changeInclude(event, 'inspo')">Inspo</a></li>
        <li><a href="#" onclick="changeInclude(event, 'cv')">CV</a></li>
    </ul>
</div>


<div class="container">
<div class="menu sx">
            <div class="indice">
                <span class="in"><a href="#" onclick="changeInclude(event, 'about')">About</a></span>
                <span class="in"><a href="#" onclick="changeInclude(event, 'ideas')">Ideas</a></span>
                <span class="in"><a href="#" onclick="changeInclude(event, 'inspo')">Inspo</a></span>
                <span class="in"><a href="#" onclick="changeInclude(event, 'cv')">CV</a></span>
            </div>
            <div class="indice">
                <span class="sez-title">DESIGN</span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'rosiko')">Rosiko</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'uabisabi')">Uabisabi</a></span>
                <span class="sez-title sez-title-last">DEV</span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'alfred')">Alfred</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'fantaeuro')">FantaEuro</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'fnba')">FNBA</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'coccolecapricci')">Coccole&Capricci</a></span>
            </div>
            <div class="indice-last">
                <span class="sez-title">CONTACT</span>
                <span class="sez"><a href="https://www.linkedin.com/in/lorenzocandela/" target="_blank">Linkedin</a></span>
                <span class="sez"><a href="mailto:lorenzocandela01@gmail.com" target="_blank">Mail</a></span>
                <span class="sez"><a href="tel:+393388603743" target="_blank">Phone Number</a></span>
            </div>
        </div>

        <div class="dx">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'default';
                $file_to_include = './prodotti/' . $page . '.php';
                if (file_exists($file_to_include)) {
                    include $file_to_include;
                } else {
                    include './prodotti/about.php';
                }
            ?>
        </div>
    </div>

    <script>
        function changeInclude(event, file) {
            event.preventDefault();
            window.location.search = '?page=' + file;
        }
    </script>
    <script src="main.js"></script>
</body>
</html>
