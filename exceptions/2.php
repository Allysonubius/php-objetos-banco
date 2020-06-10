<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
//Instaciando 
function validarUsuario(array $usuario)
{
    //validação
    if(empty($usuario['codigo']) || empty($usuario['nome'] || empty($usuario['idade'])))
    {
        return false;
    }
    return true;
}

//Instanciando Usuario
$usuario = [
    'codigo' => 1,
    'nome' => 'Allyson',
    'idade' => 21, 
];
//Metodo de validação
$usuarioValido = validarUsuario($usuario);
//Metodo de validação erro
if(!$usuarioValido){
    echo "Usuario Inválido!";
    return false;
}
echo "\n... executando ...\n";
?>