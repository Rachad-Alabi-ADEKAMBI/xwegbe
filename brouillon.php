if(empty($errors)){
        $appartement_name = htmlspecialchars(strip_tags($_POST['appartement_name']));
        $rooms = htmlspecialchars(strip_tags($_POST['rooms']));
        $daily_price = htmlspecialchars(strip_tags($_POST['daily_price']));
        $extract = htmlspecialchars(strip_tags($_POST['extract']));
        $appartement_description = htmlspecialchars(strip_tags($_POST['appartement_description']));
        $rating = htmlspecialchars(strip_tags($_POST['rating']));
        $picture_1 = htmlspecialchars(strip_tags($_POST['picture_1']));
        $picture_2 = htmlspecialchars(strip_tags($_POST['picture_2']));
        $picture_3 = htmlspecialchars(strip_tags($_POST['picture_3']));
        $picture_4 = htmlspecialchars(strip_tags($_POST['picture_4']));
        $picture_5 = htmlspecialchars(strip_tags($_POST['picture_5']));
        $picture_6 = htmlspecialchars(strip_tags($_POST['picture_6']));
                try{
                        add($appartement_name, $rooms, $daily_price, 
                        $extract, $appartement_description, $rating, $picture_1,
                       $picture_2, $picture_3, $picture_4, $picture_5, $picture_6);
                }catch (Exception $e)
                {
                        die('Erreur : ' . $e->getMessage());
                }
    }