<?php
if (!defined('host')) {
    define('host','localhost')    # code...
    };
if (!defined('db')) {
        define('db','compus')    # code...
        };
if (!defined('user')) {
            define('user','root')    # code...
            };
if (!defined('pass')) {
                define('pass','')    # code...
                };

try {
    $db =new PDO("mysql:host= ".host.";db=".db ,user,pass)
} catch (\Throwable $th) {
    //throw $th;
}

?>