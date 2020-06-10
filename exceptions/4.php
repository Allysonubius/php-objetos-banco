<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
function validarUsuario(array $usuario)
{
    //Metodo de validação do usuario
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        //Metodo de mensagem de erro e execução do errro
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }
    return true;
}
//Usuario
$usuario = [
    'codigo' => 1,
    'nome' => 'Allyson',
    'idade' => 21,
];
//Metodo Try, Catch e Finally
try{
    //Metodo de validação
    $status = validarUsuario($usuario);
}catch(Exception $e){//exeção
    echo $e -> getMessage();//false message !
    die();//fim 
}

echo "\n... exectutando ...\n";
?>