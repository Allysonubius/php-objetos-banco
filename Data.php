<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
//Trabalhando com datas
//echo date('d/m/Y'). PHP_EOL;
//Metodo de date
$data = new DateTime();
echo 'Date: '. $data -> format('d/m/y').PHP_EOL.'Hora: '.$data -> format('H:i:s').PHP_EOL; 
//Metodo DateTime
$data =  new DateTime();
/*
    -> P    Representação de período: vem antes de dia, mês, ano e semana
    Y       Anos
    M       Meses
    D       Dias
    W       Semana
    ->T     Representação de tempo: vem antes de hora, minuot e segundo;
    H       Horas;
    M       Minutos;
    S       Segundos;
 */
    //Criando intervalo 
 $intervalo - new DateInterval('PT5M'); //Adciona um peíodo de 5 minutos.
    //Adicionando ...
 $data-> add($intervalo);

   //IMPRESSÂO 
 var_dump($data);
?>