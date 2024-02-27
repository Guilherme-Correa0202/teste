<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
if($nome === "Guilherme" && $email === "guicorrea@gmail.com" && $senha === "02022007"){
echo "<h1>Logado com sucesso</h1>". "<BR>" ."Nome: $nome ". "<BR>" . "Email: $email". "<BR>" . "Senha $senha";}
else{
    echo "<h1>SENHA, NOME OU EMAIL incorretos</h1>";
    echo  "<a href='index.html'>VOLTAR</a>";
}
?>