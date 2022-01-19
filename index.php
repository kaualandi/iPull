<?php
    $url = strip_tags(empty($_GET['url']) ? 'home' : $_GET['url']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Puxe dados de qualquer pessoa.">
    <title>iPull</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="body" class="d-flex flex-column justify-content-center align-items-center">
    <div data-aos="zoom-in-down" data-aos-duration="1500" class="container-fluid p-4">
        <header class="d-flex align-items-center justify-content-between">
            <a style="display: none;" id="backToHome" href="/"><img src="assets/svg/back-button.svg" alt="Botão de voltar"></a>
            <h1 class="logo">iPull</h1>
        </header>
        <?php
            include (!empty($url) && file_exists($url . '.php') && is_file($url . '.php')) ? $url . '.php' : './home.php';
        ?>
        <footer class="text-center">
            &copy; <a href="https://kaualf.netlify.app">Kauã Landi</a> <?=date('Y')?>
        </footer>
    </div>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <?php
        if ($url == 'resultado') {
            echo '<script src="assets/js/result.js"></script>';
        } else if ($url == 'home') {
            echo '<script src="assets/js/index.js"></script>';
        }
    ?>
</body>
</html>