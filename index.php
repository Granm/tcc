<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/style1.css"/>
         <title>Gerfin</title>
    </head>
    <body>
        <div class="bg" style="background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm27-ning-30-background.jpg?bg=transparent&con=3&cs=srgb&dpr=1&fm=jpg&ixlib=php-3.1.0&q=80&usm=15&vib=3&w=1300&s=99c1e8ec92a449794a08589bee35a2dc');">

            <div class="box1">
                <h1>Gerenciador Financeiro</h1>
                <form action="menuInicial.php" method="POST">
                    <input type="text" style="width: 400px" placeholder="E-mail" name="txtEmail" id="txtEmail" required="required"><br>

                    <input type="password" style="width: 400px" placeholder="Senha" name="txtSenha" id="txtSenha" required="required"> <br>
                    
                    <div class="margemCima30"> 
                        <input type="submit" class="botaoCadastro" value="Login"/> 
                    </div>

                </form>
                <input type="checkbox" checked="checked"> Manter conectado <br>
                    Esqueceu a<a href="#"> senha? </a> <br>
                    <a href="cadastrarUsuario.php">Não tenho conta</a>
            </div>
        </div>
    </body>
</html>
