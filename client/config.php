<?php

class Config
{
public static $db=NULL;
public static function getConnexion(){
  try{
if (!isset(self::$db)) {
self::$db=new PDO(
  'mysql:host=localhost;dbname=projet',
  'root', //login
  '' //password
);
self::$db->setAttribute(
  PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION
);
echo "connected to DB";
}
}catch(Exeption $e){
  die('Erreur : '.$e.getMessage());
}
return self::$db;
}
}
Config::getConnexion();
?>
