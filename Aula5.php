<html>

    <head>
<title> "incrição de cidade" </title>
<meta charset="UTF-8">
</head>
 
<body bgcolor="pink">
    <form action=" " method="POST">

    <center>

<h1>INCRIÇAO</h1>

<label> Nome: <label> <br>
<input type="text" name="nome" require><br>
<br>

<label> Sobrenome: <label> <br>
<input type="text" name="sobrenome" require><br>
<br>

<label> Idade: <label> <br>
<input type="number" name="idade" require><br>
<br>

<label> Data: <label> <br>
<input type="date" name="data" require><br>
<br>

<label> Peso: <label> <br>
<input type="number" name="peso" require><br>
<br>



<label>
    <b>Cidade: </b>
    </label>
    <input type="text" name= "cidade" require> <br>
    <br>
    
    <label>
        <b>Estado:</b>
     </label>
     <input type="text" name="estado" requere> <br>
     <br>

    <button type= "submit">SALVAR</button>
</center>

<center>
<?php
print_r($_POST);

class pessoa_obj{};
$pessoa = new pessoa_obj();
$pessoa->name="NICK";
$pessoa->sobrenome= "Doe";
$pessoa->idade="20";
$pessoa->date="01/01/2022";
$pessoa->peso="0.8";
$pessoa->cidade="Florinia";
$pessoa->estado="São Paulo";

$pessoa2 = new pessoa_obj();
$pessoa2->name="Edsnon";
$pessoa2->sobrenome= "Marangona";
$pessoa2->idade="21";
$pessoa2->date="09/06/2022";
$pessoa2->peso="75";
$pessoa->cidade="Tarumã";
$pessoa->estado="São Paulo";

$pessoa3 = new pessoa_obj();
$pessoa3->name="Kauan";
$pessoa3->sobrenome= "Borsoi";
$pessoa3->idade="19";
$pessoa3->date="04/06/2003";
$pessoa3->peso="74";
$pessoa->cidade="Tarumã";
$pessoa->estado="São Paulo";

//mostrar em ordem
// print_r($pessoa);
// echo"<br><br>";
// print_r($pessoa2);
// echo"<br><br>";
// print_r($pessoa3);
// echo"<br><br>";

 
$arrayPessoas = array();
    function inserirPessoaNaLista ($arrayPessoas, $item){
    
        $pessoa = new pessoa_obj();
        $pessoa->name= $item['nome'];
        $pessoa->sobrenome= $item['sobrenome'];
        $pessoa->idade= $item['idade'];
        $pessoa->date= $item ['data'];
        $pessoa->peso=$item['peso'];
        $pessoa->cidade=$item['cidade'];
        $pessoa->estado=$item['estado'];

        
        array_push($arrayPessoas, $pessoa); 
        return $arrayPessoas;
    }

//  echo"<br>O meu array de pessoas: <br>";
//  print_r($arrayPessoas);
 array_push($arrayPessoas, $pessoa);
 array_push($arrayPessoas, $pessoa2);
 array_push($arrayPessoas, $pessoa3);
 echo "<br><br>";

echo "<br><br><pre>";
// print_r($arrayPessoas);
echo "</pre><br><br>";

if(isset ($_POST['cidade'])){
    if($_POST['cidade'] == ""){
        echo " Esta vazio o campo cidade";
    }else if($_POST['estado'] == ""){
        echo "Esta vazio o campo Estado";
    }else{
        $arrayPessoas = inserirPessoaNaLista($arrayPessoas, $_POST);
        echo "Seu cadastro foi um sucesso!!";
   }

}


//tabela
echo "<table border='1'>";

for ($i=0; $i < count($arrayPessoas); $i++) { 
    if($arrayPessoas[$i] -> idade > 0 ){
        echo"<tr>";
        echo "<td>".$arrayPessoas[$i]->name."</td>";
        echo "<td>".$arrayPessoas[$i]->sobrenome."</td>";
        echo "<td>".$arrayPessoas[$i]->idade."</td>";
        echo "<td>".$arrayPessoas[$i]->date."</td>";
        echo "<td>".$arrayPessoas[$i]->peso."</td>";
        echo "</tr>";
        echo"<br>";
     }
    //  echo "oi".$arrayPessoas[$i]->name."<br>"; 
}
echo"</table>" ;


//Mostrar do menor para o maior
// echo "<br>";
// for ($i=count($arrayPessoas)-1; $i > -1; $i--) { 
    // echo "oi".$arrayPessoas[$i]->name."<br>"; 
    
// }



// $variavel ="Tarumã";
 //print_r ($_POST);



?>
</center>

<center>

<!-- <table border='1'>  -->
   <!-- <tr> -->
       <!-- <td>cidade:</td> -->
       <!-- <td>estados:</td> -->
   <!-- </tr> -->
   <!-- <tr> -->
      <!-- <td>Tarumã</td> -->
      <!-- <td>São Paulo</td> -->
   <!-- </tr> -->
   <!-- <tr> -->
       <!-- <td>Assis</td> -->
       <!-- <td>São Paulo</td> -->
    <!-- </tr> -->
    <!-- <tr> -->
       <!-- <td>Candido Mota</td> -->
       <!-- <td>São Paulo</td> -->
   <!-- </tr> -->
   <!-- <tr> -->
      <!-- <td>Londrina</td> -->
      <!-- <td>Parana</td> -->
   <!-- </tr> -->
   <!-- <tr> -->
       <!-- <td>Curitiba</td> -->
       <!-- <td>Parana</td> -->
    <!-- </tr> -->
<!-- </table> -->

</center>


</form>
</hmtl>
</body>