<?php

namespace Xwegbe\Model;

/*local*/
class Manager
{
    protected function dbConnect()
        {
            
            $db = new PDO('mysql:host=localhost;dbname=xwegbe;charset=utf8', 'root', '');
            return $db;
        }
}

/*
//production

*/

