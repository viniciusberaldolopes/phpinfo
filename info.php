<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'o nome não pode ser vazio';
}

if(strlen($nome) < 3)
{
    echo 'O nome deve possuior mais que 3 caracteres';
}    

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso';
}

if(!is_numeric($idade))
{
    echo 'Informe um numero valido';
    return;
}

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na categoria infantil";
        }
}

else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescentes')
        echo "O nadador " .$nome. " compete na categoria adolescentes";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O nadador " .$nome. " compete na categoria adulto";
    }
}
