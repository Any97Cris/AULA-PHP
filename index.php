<!-- Crie um projeto em PHP para uma competição de natação, o sistema deverá 
permitir a inserção de competidores com seu nome e idade, e o sistema deverá
identificar em qual categoria io nadador irá competit, por exemplo, 6 a 12 anos
categoria infantil, de 13 a 18 categoria adoslecente, acima de 18 categoria adulto, o 
sistema deverá retornar a categori para cada nadador que for cadastrado. -->

<?php 

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

//print_r($categorias);

$nome = 'Crisciany';
$idade = '6';

// var_dump($nome);
// var_dump($idade);

//foreach ($categorias as $chave => $valor) {
    
  //  echo "<br>categoria: ".$valor.' posicao: '.$chave.'<br>';
//}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome. " compete na categoria Infantil";
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
            echo "O nadador ".$nome. " compete na categoria Adolescente";
    }
}else{
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome. " compete na categoria Adulto";
    }
}