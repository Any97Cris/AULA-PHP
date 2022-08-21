<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cursos PHP&MySQL</title>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: helvetica;
            font-size: 16px;
            color: #333;
        }

        header {
            height: 80px;
            background-color: #3DC8D6;
        }

        img {
            width: 30px;
            margin-top: 20px;
            margin-left: 10px;
        }

        .men {
            margin-left: 60px;
            margin-top: -58px;
            height: 80px;
        }

        li {
            display: inline-block;
            height: 50px;
            color: black;
            font-weight: bold;
            padding: 30px 30px 0px 30px;
            margin-left: -5px;
        }

        li:hover {
            height: 50px;
            background-color: black;
        }

        .linkPag {
            text-decoration: none;
            color: white;
        }

        .linkPag:hover {
            height: 80px;
            color: #3DC8D6;
        }

        .rodape {
            text-align: center;
            height: 7%;
            width: 100%;
            background-color: yellow;
            position: absolute;
            margin-top: 500px;
        }

        p {
            margin-top: 12px;
        }

        table {
            border: 1px solid;
            text-align: center;
            width: 100%;
        }

        table tr th {
            border: 1px solid;
        }

        table tr td {
            border: 1px solid;
        }

        .assunto {
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="?pagina=home"><img src="./views/img/dois.svg" alt="logo"></a>
        <div id="menu">
            <ul class="men">
                <li><a class="linkPag" href="?pagina=cursos">CURSOS<a></li>
                <li><a class="linkPag" href="?pagina=alunos">ALUNOS</a></li>
                <li><a class="linkPag" href="?pagina=matriculas">MATRICULAS</a></li>
            </ul>
        </div>
    </header>
    <div id="conteudo" class="assunto">