<?php

namespace Xwegbe\Model;

require_once("Manager.php");

class AppartementsManager extends Manager
{
    public function getAppartements()

    {
        $db = $this->dbConnect();
        
        $req = $db->prepare('SELECT *
        FROM appartements');

        $req -> execute();

        return $req;
    }
}