<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!--   <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/pageadmin/estilos_base_pagina_admin.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/pageadmin/estilos_conteudoprincipal_admin.css') ?>">

</head>
<body>
<!-- Inicio Barra Lateral -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="cabecalho">
            <div class="col-md-8">
                <img src="https://disi.rnp.br/image/image_gallery?uuid=615617f5-8ee6-485b-bda5-76655a7bc27c&groupId=243350&t=1312830094474"
                     class="img-responsive logo">
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url('img/perfil.jpg') ?>" class="img-circle admin">
                        <span class="texto-admin">
                            Valdir Jr
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu  dropdown-menu-right menu-admin" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Inicio </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Editar Perfil </a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sair </a></li>
                            </ul>
                        </span>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">

