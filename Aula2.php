<?php

print_r($_POST);

//echo "Olá a todos!";
if(isset($_POST['nome'])){

}
?>

<center>
    <a>oie</a><br>
    <h1>ola2</h1><br>
    <h2>oie3</h2><br>

    <button type= "submit">
    <a href ="aula3.php"> Voltar </a>
</button>

    <br>

<form action= "" method= "POST">
    <br>
    <label>
        <b style="color:purple;"> Texto: </b> 
         <b style="color:violet;"> Informe seu nome:
     
    </label> 
    <input type="text" name="nome"> <br>
 <br>

    <label>
        <b style="color:violet;">Informe o seu sobrenome: </b>
     </label>
    <input type="text" name= "sobrenome"> <br>
<br>

    <label> 
        <b style="color:vilet;">Informe sua idade: </b>
     </label>
    <input type="number" name= "idade"> <br>
<br>

    <label> 
        <b> Informe sua data de nascimento: </b>
     </label>
    <input type="date" name= "nascimento"> <br>
<br>

    <button type= "submit"> Gravar </button> 

</center>

</form>

<center>

<img src="imagens/minios.png" width="500px" heigh="500px" >
<br>
<img src="imagens/gato1.png" width ="250px" heigh="250px">

</center>