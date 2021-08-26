<?php
//creamos una clase 
class Database{
    //creamos un metodo estatico o tambien conocido como una funcion
    public static function connect(){
        $db = new mysqli('localhost','root','','loginbenjamin');
        // $db = new mysqli('sql209.epizy.com','epiz_28857635','9FFnOmhg8j','epiz_28857635_tienda_master');
        //ejecutamos una consulta que va permitir que los resultados que saque de la base de datos sean en castellano totalmente(tildes,eñe,etc) 
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}