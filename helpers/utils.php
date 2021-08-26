<?php
//creamos una clase
class Utils{
    //creamos un metodo con un parametro de entrada que sera el nombre de la sesion
    public static function deleteSession($name){
        //comprobamos si la funcion existe
        if(isset($_SESSION[$name])){
            //colocamos un valor nulo a la session que entre
        $_SESSION[$name]=null;
        //unset — Destruye una session especificada
        unset($_SESSION[$name]);  
        }
        //ahora hacemos un return para que retorne algo en este caso terna el nombre de la session
        return  $name;
    }

    public static function isAdmin(){
        //verificamos is no existe la sesion admin
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    
    public static function isIdentity(){
        //verificamos is no existe una session de usuario y esto permitira que solo el usuario puede entrar a respectivas paginas.
        if(!isset($_SESSION['identity'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }



    

}