<?php $title = 'Xwegbe - Contact' ?>    

    <?php ob_start(); ?>

        <div class="contact">
            <form action="" class="form">
                <h1 class="page__title">
                    Contact
                </h1>

                <label for="">
                    Nom: <br>
                    <input type="text">
                </label> <br><br>

                <label for="">
                    Email: <br>
                    <input type="text">
                </label> <br><br>

                <label for="">
                    Objet: <br>
                    <input type="text">
                </label> <br><br>

                <label for="">
                    Message: <br>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
        
                </label> <br><br>

                <button>
                    Envoyer
                </button>
            </form>
        </div>

    <?php $content = ob_get_clean(); 
   
    require('view/template.php'); ?>