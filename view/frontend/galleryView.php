
    <?php $title='Xwegbe - A propos'; ?>

<?php ob_start(); ?>
    
        <div class="gallery">
           <h1 class="gallery__title">Galerie</h1>
            
           <div class="gallery__items">
                <img src="public/images/img1.jpg" alt="">
                <img src="public/images/img2.jpg" alt="">
                <img src="public/images/img3.jpg" alt="">
                <img src="public/images/img4.jpg" alt="">
                <img src="public/images/img5.jpg" alt="">
                <img src="public/images/img6.jpg" alt="">
                <img src="public/images/img7.jpg" alt="">
                <img src="public/images/img8.jpg" alt="">
                <img src="public/images/img9.jpg" alt="">
                <img src="public/images/img10.jpg" alt="">
                <img src="public/images/img11.jpg" alt="">
                <img src="public/images/img12.jpg" alt="">
           </div>

        </div>
        
<?php  $content = ob_get_clean(); 

require('view/template.php'); ?>