
<body>
    <!-- This example illustrates how to create layout of slides stacked on each  other(especially useful for fade in/out transitions). It's achieved without setting their height and avoiding position: absolute; so they are fully flexible and easy to keep in normal page flow. -->
    <input type="radio" name="switch" id="i_1">
    <input type="radio" name="switch" id="i_2">
    <input type="radio" name="switch" id="i_3" checked>
    <input type="radio" name="switch" id="i_4">
    <input type="radio" name="switch" id="i_5">
  
    <input type="radio" name="switch" id="i_6">
<div class="wrapper">

    <div class="slide">
        <div class="content content1">  
            <div class="testimony">
                <img src="public/images/image2.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content2">  
            <div class="testimony">
                <img src="public/images/img6.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content3">  
            <div class="testimony">
                <img src="public/images/img3.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content4">  
            <div class="testimony">
                <img src="public/images/img8.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content5">  
            <div class="testimony">
                <img src="public/images/img3.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content5">  
            <div class="testimony">
                <img src="public/images/img12.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div>

    <div class="slide">
        <div class="content content6">  
            <div class="testimony">
                <img src="public/images/image2.jpg" class="testimony_img" alt="">
                <div class="testimony__infos">
                <i class="fas fa-quote-right"></i>
                    <p class="text">
                    Ma famille et moi vous disons merci pour votre accueil. Nous avons 
                    passé une superbe semaine dans vos appartements. Nous reviendreons trè
                    prochainement
                    </p>
            
                    <p class="author">
                        Iris
                    </p>

                    <p class="quality">
                        Cliente satisfaite
                    </p>
                </div>
            </div>   
        </div>
    </div> 
</div>

<div class="controls">
  <label for="i_1">⬤</label>
  <label for="i_2">⬤</label>
  <label for="i_3">⬤</label>
  <label for="i_4">⬤</label>
  <label for="i_5">⬤</label>
  <label for="i_6">⬤</label>
</div>

<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

/* Some resets, not essencial for this example to work */



/*input {
  opacity: 0;
  width: 0;
  height: 0;
  position: absolute;
}
*/
/* Base styles for this example */

.wrapper {
  width: 50vw; /* unfortunately width has to be set to some hard value */
  display: flex;
}

.slide {
  width: 0;
}

.content {
  width: 100vw;
  margin: auto;
  height: 100%; /* this is optional if you want every slide to have same height as the highest one */
}

.testimony{
    width: 100%;
    margin: auto;

    display: flex;
    flex-direction: row;
}
   
.testimony__infos{
    background:  #D1B35B;
    width: 60%;
    margin-left: 30px;
}

.testimony_img{
    width: 150px;
    height: 150px;
    border-radius: 100px;
    margin-top: 30px;
}

i{
    color:   #071339;
    font-size: 2em;
}
.text{
    width: 100%;
    color:  #071339;
    margin: 15px auto;
    font-size: 1.1em;
    font-weight: bold;
}

.author{
    color:  #071339;
    margin: 15px auto;
    font-size: 1.1em;
    font-weight: bold;
}

.quality{
    color: white;
    margin: 15px auto;
    font-size: 1.1em;
    font-weight: bold;
}


/* Additional styling */
.wrapper {
  margin: -50px auto;
  width: 100%;
  background:  #D1B35B;
  box-shadow: 3px 3px 20px #9E9E9E;
}

.controls{
    margin: auto;
    padding-top: 20px;
   text-align: center;
}

.spann {
  background-color: white;
  text-align: center;
  line-height: 4rem;
  width: 4rem;
  border-radius: 8rem;
  color: #616161;
  font-size: 2rem;
}

.content {
  padding: 30px;
  margin: 0px auto;
  height: 250px;
  opacity: 0;
  pointer-events: none;
  transition: opacity .6s;
  overflow-y: auto;
  background:  #D1B35B;;
}

#i_1:checked ~ .wrapper .content1,
#i_2:checked ~ .wrapper .content2,
#i_3:checked ~ .wrapper .content3,
#i_4:checked ~ .wrapper .content4,
#i_5:checked ~ .wrapper .content5,
#i_6:checked ~ .wrapper .content6 {
  opacity: 1;
  pointer-events: auto;
}

label {
  color: white;
  transition-duration: .6s;
  cursor: pointer;
}

#i_1:checked ~ .controls label[for="i_1"],
#i_2:checked ~ .controls label[for="i_2"],
#i_3:checked ~ .controls label[for="i_3"],
#i_4:checked ~ .controls label[for="i_4"],
#i_5:checked ~ .controls label[for="i_5"],
#i_6:checked ~ .controls label[for="i_6"] {
  color: #071339;
}
</style>

</body>