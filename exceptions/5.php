<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
function validarUsuario(array $usuario)
{
    //Metodo de validação
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        //Message erro
        throw new Exception("Campos obrigatórios não foram preenchidos ! \n");
    }
    return true;
}
//usuario
$usuario = [
    'codigo' => 1,
    'nome' => 'Allyson',
    'idade' => 21,
];
//status finally
$status = false;
//Metodo try, catch e finally
try{
    $status = validarUsuario($usuario);//Metodo de validação
}catch(Exception $e){
    echo $e  -> getMessage();//Mensagem de erro
}finally{
    echo "Status de Operação: " .(int)$status;//Verificação de status
}

echo "\n... executando ...\n"

?>