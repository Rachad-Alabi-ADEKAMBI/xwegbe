<?php
if (isset($_POST['valider']))
    {
       if (isset($_POST['appartement_name']) AND
            (isset($_POST['rooms']) AND 
            (isset($_POST['daily_price']) AND 
            (isset($_POST['extract']) AND 
            (isset($_POST['appartement_description']) AND 
            (isset($_POST['rating']) AND 
            (isset($_POST['picture_1']) AND
            (isset($_POST['picture_2']) AND 
            (isset($_POST['picture_3']) AND 
            (isset($_POST['picture_4']) AND 
            (isset($_POST['picture_5']) AND 
            (isset($_POST['picture_6']))
            
            {
                if(!empty($_POST['appartement_name']) AND
                (!empty($_POST['rooms']) AND 
                (!empty($_POST['daily_price']) AND 
                (!empty($_POST['extract']) AND 
                (!empty($_POST['appartement_description']) AND 
                (!empty($_POST['rating']) AND 
                (!empty($_POST['picture_1']) AND
                (!empty($_POST['picture_2']) AND 
                (!empty($_POST['picture_3']) AND 
                (!empty($_POST['picture_4']) AND 
                (!empty($_POST['picture_5']) AND 
                (!empty($_POST['picture_6'])){
                    echo'top';
                }
            }
        
    }
