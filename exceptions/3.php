<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
function validarUsuario(array $usuario)
{
    //Metodo de validação
    if(empty($usuario['codigo'] || empty($usuario['nome']) || empty($usuario['idade'])))
    {
        //Mensagem de erro
        throw new Exception("Camps obrigatórios não foram preenchidos!");
    }
    //sucess
    return true;
}
//Usuario
$usuario = [
    'codigo' => 1,
    'nome' => "Allyson",
    'idade' => 21,
];
//Metodo de validação
validarUsuario($usuario);
//echo
echo "\n... excecutando ...\n";
?>