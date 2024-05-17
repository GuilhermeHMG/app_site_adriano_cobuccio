<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <header>
        <h1>Grupo Adriano Cobuccio</h1>
        <nav>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url('noticias'); ?>">Notícias</a></li>
                <li><a href="<?php echo base_url('contato'); ?>">Contato</a></li>
                <li><a href="<?php echo base_url('sobre'); ?>">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <main>
