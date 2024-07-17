<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descripttion" content="<?= $description ?? "KrisCartel Mode."; ?>">
    <link rel="stylesheet" type="text/css" href="./styles/base/base.css">
    <link rel="stylesheet" type="text/css" href="./styles/layout/layout.css">
    <link rel="stylesheet" type="text/css" href="./styles/layout/container.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/mains.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/banner.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/homelement.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/about.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/error.css">
    <link rel="stylesheet" type='text/css' href="./styles/pages/contact.css">
    <script src="https://kit.fontawesome.com/9f6d671c04.js" crossorigin="anonymous"></script>
    <title><?= $title ?? "KrisCartel Mode."; ?></title>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <a href="/">
                    kriscartel
                </a>
            </div>
            <nav class="nav">
                <div class="humb">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav--humb">
                    <a href="/about">
                        <li>about</li>
                    </a>
                    <a href="/contact">
                        <li>contact</li>
                    </a>
                </ul>
                <h1>kris cartel.</h1>
                <i class="fa-solid fa-shop-lock"></i>
            </nav>
        </header>
        <main class="<?= $mainClassName ?? "main"; ?>">
            <aside class="aside-barre">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </aside>
            <div class="main--el">
                <?= $pageContent ?>
            </div>
        </main>
        <footer class="footer">
            <nav class="nav-footer">
                <ul>
                    <li>Politique de cookies</li>
                    <li>Mentions légales</li>
                    <li>Politique de confidentialité</li>
                </ul>
            </nav>
            <p>© 2024 by KABUYA | Créé avec PHP</p>
        </footer>
    </div>
    <script src="./js/burger.js" defer></script>
</body>

</html>