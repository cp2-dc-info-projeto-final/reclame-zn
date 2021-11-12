<?php


class usuario{

    CONST USER_INFORMATIONS = 'USER_GLOBAL_DATA_INFORMATION';

    public function __construct(){
        if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
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
     * Esta função irá definir os valores na chave de sessão do usuário
     * @param array
     * @return null
    */
    public static function isAdmin(){
        return $_SESSION[self::USER_INFORMATIONS]['acesso'] == 0 ? false : true;
    }

    
   /**
     * Esta função irá receber os dados do usuário
     * @param array
     * @return null
    */
    public static function get($user = null){
        if($user){
            include __DIR__."/../sql/sql.php";
            $sql = new Sql();
            $query = "SELECT * FROM tb_usuarios WHERE id = :id";
            return $sql->select($query, [':id' => $user])[0];
        }else{
            return $_SESSION[usuario::USER_INFORMATIONS] ;
        }
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