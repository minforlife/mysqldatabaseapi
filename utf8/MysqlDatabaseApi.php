<?php
    /**
     * API для работы с БД MySQL
     * @version 1.0
     * @author ALeX <alecksius@ya.ru>
     */
     class MysqlDatabaseApi {
         /**
          * Конструктор класса MysqlDatabaseApi
          */
         public function __construct() {
             ;
         }
         
         public function __destruct() {
             ;
         }
         
         /**
          * Функция подключения к БД MySQL
          * @param string $server IP- или DNS-адрес MySQL сервера
          * @param string $username Имя пользователя
          * @param string $password Пароль
          * @param string $database Имя базы данных
          * @return boolean <b>true</b> в 
          * случае удачного подключения, <b>false</b> - в противном случае.
          */
         public function mysql_db_connect($server, $username, $password, $database) {
             if((isset($server)) && (isset($username)) && 
                (isset($password)) && (isset($database))) {
                 if((@mysql_connect($server, $username, $password)) &&
                    (@mysql_select_db($database))) {
                    return true;
                 } else {
                     return false;
                 }
             } else {
                 return false;
             }
         }
     }
?>
