<?php
    function add ($appartement_name, $appartement_description, $rooms,
        $daily_price, $rating, $picture_1,
        $picture_2, $picture_3, $picture_4, $picture_5, $picture_6){
            if (require("db.php")){
                $req = $bdd->prepare("INSERT INTO appartements (
                    appartement_name, appartement_description, 
                    rooms, daily_price, rating, appartement_status, 
                    picture_1, picture_2, picture_3, picture_4, picture_5,
                    picture_6) VALUES ( $appartement_name, $appartement_description,
                    $rooms, $daily_price, $rating, 'libre', $picture_1,
                    $picture_2, $picture_3, $picture_4, $picture_5, $picture_6 ) ");

                $req -> execute(array($appartement_name, $appartement_description, $rooms,
                    $daily_price, $rating, $picture_1,
                    $picture_2, $picture_3, $picture_4, $picture_5, $picture_6));
                
                $req->closeC=Cursor();

            }
        }

        function displayAll(){
            if (require("db.php")){
                $req = $bdd->prepare("SELECT * FROM appartements ORDER BY id DESC");
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
        }

        function delete($id){
            if (require("db.php")){
                $req = $bdd->prepare("DELETE * FROM appartements WHERE id = ?");
                $req->execute(array($id));
            }
        }

?>