<?php

namespace Xwegbe\Model;

require_once("Manager.php");

class AppartementEditor extends Manager
{
    public function editPrice ($daily_price, $id)
    {
        $db = $this->dbConnect();
        
        $edit = $db->prepare('UPDATE appartements SET daily_price=? WHERE id=?');
        
        $affectedLines = $appartement->execute(array($daily_price, $id));

        return $affectedLines; 
    }
}