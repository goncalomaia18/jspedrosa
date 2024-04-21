<?php
    if(isset($_POST['submit'])){
     /* print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>'); */

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO contactos(nome, email, telefone) VALUES ('$nome', '$email', '$telefone')");
    }


?>




<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Stock</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            }
        </style>
    </head>
    <body>
        <div class="z">
            <div class="z1">
                <ul>
                    <li><a href="index.html">Home</a></li>

                    <li><a href="quemsomos.html">Quem Somos</a></li>
            
                    <li><a href="portefolio.html">Portefólio</a></li>

                    <li><a class="active" href="contacto.html">Contacto</a></li>
            
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </div>

        <div class="box">
            <form action="contacto.php" method="POST">
                <fieldset>
                    <legend><b>Fórmulário de Clientes</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </body>
</html>