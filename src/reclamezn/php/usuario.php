<?php


class usuario{

    CONST USER_INFORMATIONS = 'USER_GLOBAL_DATA_INFORMATION';

    public function __construct(){
        session_start();
    }

    /**
     * Esta função irá definir os valores na chave de sessão do usuário
     * @param array
     * @return null
    */
    public static function SetToSession($data){
        $_SESSION[self::USER_INFORMATIONS] = $data;
    }

   


     /**
     * Esta função irá verificar se a sessão do usuário existe ou está vazia para ver se o usuário está logado
     * @param array
     * @return null
    */
    public static function checkLogin(){
        if(!isset($_SESSION[self::USER_INFORMATIONS]) OR $_SESSION[self::USER_INFORMATIONS] == null){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Esta função irá resetar os valores da sessão do usuário
     * @param array
     * @return null
    */
    public static function desconectar(){
        $_SESSION[self::USER_INFORMATIONS] = null;
        header("Location: /index.php");
        exit;
    }
    
}