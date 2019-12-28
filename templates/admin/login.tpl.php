<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/resources/pnotify/pnotify.custom.min.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="/public/favicon.ico" />

    <link rel="stylesheet" href="/css/style.css">
    <title>Painel Administrativo</title>
</head>
<style>
    @media screen and (max-width: 1024px) {

    }

</style>
<body class="d-flex flex-column">
<div id="header">
    <nav class="navbar  navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">Admin</a>
                <span class="navbar-text">Painel Administrativo</span>
            </span>

    </nav>
</div>
<div id="main" style="background: mediumslateblue">
    <div class="row justify-content-center">
        <div id="content" class="col-4 align-self-center">
            <?php include $content;?>

        </div>
    </div>


</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/resources/pnotify/pnotify.custom.min.js"></script>
<script>

    <?php flash();?>



</script>
</body>
</html>