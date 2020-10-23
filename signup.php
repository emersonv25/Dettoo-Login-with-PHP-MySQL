<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dettoo Sign up</title>
    
</head>
<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <a href="index.php"><img src="images/bunner_noBackGround.png" class="img-fluid" alt="image"> </a>
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3"> Cadastro </h3>
               
                <form method="POST"> 

                    <div class="form-group"> 
                        <label for="nome"> Nome Completo</label>
                        <input type="text" name="nome" placeholder="Digite seu nome completo" class="form-control" id="nome" maxlength="100">
                    </div>
                    <div class="form-group"> 
                        <label for="username"> Usuario</label>
                        <input type="text" name="username" placeholder="Digite um nome de usuario" class="form-control" id="username" maxlength="45">
                    </div>
                    <div class="form-group"> 
                        <label for="email"> E-mail</label>
                        <input type="email" name="email" placeholder="Digite um endereço de E-mail" class="form-control" id="email" maxlength="100">
                    </div>
                    <div class="form-group"> 
                        <label for="password"> Senha</label>
                        <input type="password" name="password" placeholder="Digite uma senha" class="form-control" id="password" maxlength="45">
                    </div>
                    <div class="form-group"> 
                        <label for="password"> Confirmar senha</label>
                        <input type="password" name="cpassword" placeholder="Confirme a senha" class="form-control" id="cPassword" maxlength="45">
                    </div>
                    <button type="submit" class="btn btn-class">Cadastrar</button>
            
                </form>

            </div>
        </div>
    </div>    



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>