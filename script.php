<!-- Crie um projeto em PHP para uma competição de natação, o sistema deverá 
permitir a inserção de competidores com seu nome e idade, e o sistema deverá
identificar em qual categoria io nadador irá competit, por exemplo, 6 a 12 anos
categoria infantil, de 13 a 18 categoria adoslecente, acima de 18 categoria adulto, o 
sistema deverá retornar a categori para cada nadador que for cadastrado. -->

<?php 

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome) && empty($idade)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: form.php');
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: form.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: form.php');  
    return;   
}

else if(!Is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
    header('location: form.php');    
    return;
}

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            $_SESSION['mensagem-de-sucesso'] = " O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: form.php');
            
        }
    }else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
            $_SESSION['mensagem-de-sucesso'] = " O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: form.php');
        }
    }else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            $_SESSION['mensagem-de-sucesso'] = " O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: form.php');
}
}
?>