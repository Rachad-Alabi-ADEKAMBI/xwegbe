<?php

namespace Xwegbe\Model;

require_once("Manager.php");

class AppartementManager extends Manager
{
    public function getAppartement()

    {
        $db = $this->dbConnect();
        
        $req = $db->prepare('SELECT * WHERE id= ?');

        $req -> execute([$_GET['id']]);

        return $req;
    }
}