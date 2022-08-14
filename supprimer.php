<?php 
require 'control.php';

    if(isset($_POST['valider']))
    { 
        if (isset($_POST['id'])){
            if(!empty($_POST['id']) AND is_numeric($_POST['id'])){
                $id = htmlspecialchars(strip_tags($_POST['id']));
                try{
                        delete($id);
                        header('Location: admin.php');
                }catch (Exception $e)
                {
                        die('Erreur : ' . $e->getMessage());
                }
            }
        }
    }

    