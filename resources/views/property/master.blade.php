<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laradev CRUD Imobi</title>

    <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css')?>">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">< >Lara<b>Dev</b> < /></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('imoveis/cadastro');?>">Cadastro de novos imoveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('imoveis/');?>">Listagem de todos os imoveis</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <script src="<?= asset('js/bootstrap.min.js')?>"></script>
</body>
</html>
