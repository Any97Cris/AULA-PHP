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

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40){
    echo 'O nome é muito extenso';
    return;
}

if(!Is_numeric($idade)){
    echo 'Informe um número para a idade';
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            echo "O nadador ".$nome. " compete na categoria Infantil";
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
            echo "O nadador ".$nome. " compete na categoria Adolescente";
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            echo "O nadador ".$nome. " compete na categoria Adulto";
            return;
    }
}
?>