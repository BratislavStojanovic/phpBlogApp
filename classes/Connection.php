<?php  

class Connection {

public static function connect($database)
{

  try {
    return new PDO('mysql:host='.$database['host'].';dbname='.$database['dbname'].';',$database['user'],$database['password']);
  } catch (PDO $e) {
    //throw $th;
    die("Error".$e->getMessage());
  }
 

 
}


}