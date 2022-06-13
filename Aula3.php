<html>

    <head>
<title> Nosso primeiro sistema </title>
</head>
 
<body bgcolor= "pink">
    <form action="aula2.php" method="POST">
        <a href="submi">Voltar</a>
     </form>
</body>

<br>
<form action="" method= "POST">

    <br>

    <center>
    <h1>ESCOLA RACHID JABUR</h1>
    <h2>*** Formulario de inscrição**<h2>
    <a style= "color:white;"> DADOS DO ALUNO</a>
    <br>

    <br>
    <label>
    <b> Nome do aluno completo: </b>
    </label>
    <input type="text" name= "nome"> <br>
    <br>

    <label>
    <b> Data de nascimeto do aluno: </b>
    </label>
    <input type="date" name= "nascimento"> <br>
    <br>

    <label>
    <b >Nome do responsavel: </b>
    </label>
    <input type="text" name= "responsavel"> <br>
    <br>

    <label>
    <b> RG do aluno: </b>
    </label>
    <input type="number" name= "nrg"> <br>
    <br>

    <label>
        <b>CPF do aluno: <b>
    </label>
        <input type="number" name= "ncpf"> <br>
    <br>

        <label>
            <b> Turno: <b>
    </label>
            <input type="text" nome="turno"> <br>
        <br>

            <label>
        <b> Endereço:<b>
    </label>
    <input type="text" nome="endereço"><br>
    <br> 

    <label>
        <b> Email:<b>
    </label>
    <input type="text" nome="email"><br>

        <button type= "submit">SALVAR</button>


</center>
</form>
</body>
</html>

<?php

if((isset ($_POST['nome'])) && isset($_POST['nascimento']) && isset($_POST['responsavel']) && isset($POST_['nrg']) 
&& isset($_POST['ncpf']) && isset($_POST['turno']) && isset($POST_['endereço']) && isset($POST_['email']))
{

if($_POST['nome'] == ""){
    echo "h2 style='color:red;'> O nome não foi preenchido </h2>";
} else{  
echo "<h2 style='color:blue;'> Seu cadastro foi efetuado com Sucessso!!</h2>";
}
}


?>

        