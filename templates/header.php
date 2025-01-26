<?php

include_once("config/url.php");
include_once("config/connection.php");
include_once("config/process.php");

if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>assets/css/output.css">
</head>
<body>
    <!-- menu -->
    <div class="relative  p-6 bg-slate-800 text-white">
        <!-- flex items -->
        <div class="flex items-center justify-between">
            <!-- flex container for logo/menu -->
            <div class="flex items-center space-x-20">
                <a href="<?php $BASE_URL ?>index.php"><i class="fa-solid fa-book-bookmark fa-2xl text-white"></i></a>
            <div class="space-x-8 font-bold ">
                <a id="home-link" class="cursor-pointer hover:text-slate-400 transition-colors duration-500" href="<?php $BASE_URL ?>index.php">Agenda</a>
                <a id="home-link" class="cursor-pointer hover:text-slate-400 transition-colors duration-500" href="<?php $BASE_URL ?>create.php">Adicionar contato</a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>