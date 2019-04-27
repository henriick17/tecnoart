<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>TECNOART - Sua loja de tecnologia!</title>
    </head>
    <body>
        <?php
            include_once './DAOs/ClientesDAO.php';
            $clientesDAO = new ClientesDAO();

            $tituloDoSite = "TECNOART";
            $donos = array(["Henrick O. V."]);

            function redirectTo() {
                if(!empty($_GET['redirectTo'])) {
                    header('Location: https://www.instagram.com/'.$_GET['redirectTo']);
                }
            }

            redirectTo();
        ?>
        <header id="cabecalho">
            <a href="index.php">
                <h1 id="titulo"><?php echo $tituloDoSite; ?></h1>
            </a>
        </header>
        <div id="interface">
            <div id="conteudo">
                <div id="authentication">
                    <form id="formEntrar" action="cadastrar.php" method="post">
                        <fieldset>
                            <legend>Login</legend>
                            <div>
                                <label>User</label>
                                <input id="userName" placeholder="Insira seu usuário" />
                            </div>
                            <br>
                            <div>
                                <label>Password</label>
                                <input id="pswd" type="password" placeholder="Insira sua senha" />
                            </div>
                            <br>
                            <button type="button" onclick="entrar();">Entrar</button>
                        </fieldset>
                    </form>
                    <form id="formCadastrar" action="cadastrar.php" method="post">
                        <fieldset>
                            <legend>Cadastrar</legend>
                            <div>
                                <label>User</label>
                                <input name="userName" placeholder="Insira seu usuário" />
                            </div>
                            <br>
                            <div>
                                <label>E-mail</label>
                                <input name="text" type="password" placeholder="Insira sua senha" />
                            </div>
                            <br>
                            <div>
                                <label>E-mail</label>
                                <input name="pswd" type="password" placeholder="Insira sua senha" />
                            </div>
                            <br>
                            <button type="button" onclick="cadastrar();">Cadastrar</button>
                        </fieldset>
                    </form>
                </div>
            <div>
        </div>
        <footer id="rodape">
            <p>&copy; Todos os direitos reservados!</p>
            <?php
                foreach($donos as $dono) {
                    echo "<a class=\"desenvolvedor\" href=\"index.php?redirectTo=__henriick\" target=\"_blank\" >$dono[0]</a>";
                }
            ?>
        </footer>


    </body>
</html>