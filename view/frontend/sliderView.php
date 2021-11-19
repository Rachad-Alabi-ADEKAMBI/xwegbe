<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="slider.css">
</head>
<body>
  <div class ="slider">
    <h2>
      Nos appartements
    </h2>

  <div class="carousel-container">
        <div class="navigation">
          <div class="prev nav-btn"><</div>
          <div class="next nav-btn">></div>
        </div>
        <div class="carousel">
          <div class="item main">
            <img src="public/images/img1.jpg" alt="mountain" />
            <div class="caption">Appartement meublés</div>
          </div>
      <div class="item">
            <img src="public/images/img3.jpg" alt="beach" />
            <div class="caption">Appartement meublés</div>
          </div>
          <div class="item">
            <img src="public/images/img6.jpg" alt="cityscape" />
            <div class="caption">Appartement meublés</div>
          </div>      
        </div>
      </div>
      </div>

<style>
  .slider{ 
   padding-top: 30px;
  height: 350px;
  margin-bottom: 300px;
}

.slider h2{
  margin: auto;
  text-align: center;
}
.carousel-container {
width: 800px;
height: 350px;
position: relative;
margin: 0 auto;

}

.navigation .prev {
position: absolute;
z-index: 10;
font-size: 25px;
top: 40%;
left: 10px;
font-weight: 700;
}
.navigation .next {
right: 10px;
position: absolute;
font-size: 25px;
z-index: 10;
top: 40%;
}
.navigation .nav-btn {
background: rgba(255, 255, 255, 0.55);
cursor: pointer;
border-radius: 50%;
width: 30px;
height: 30px;
display: flex;
justify-content: center;
align-items: center;
padding: 5px;
box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
}
.navigation .nav-btn:hover {
background: white;
}

.carousel {
margin-top: 20px;
transition: all 0.3s ease;

}
.carousel img {
width: 100%;
transition: all 0.6s ease-in-out;
border:8px solid white;
border-radius: 15px;
}

.caption {
position: absolute;
bottom: 0;
width: 103%;
display: flex;
font-size: 20px;
justify-content: center;
align-items: center;
color: rgb(255, 255, 255);
background: rgba(0, 0, 0, 0.3);
height: 35px;
}

.item {
position: absolute;
display: none;
}

.main {
display: block;
}


/*responsive for 350px*/
@media screen and (min-width: 350px) and (max-width: 1024px){
  .slider{  padding-top: 30px;
    height: 200px;
    margin-bottom: 40px;
  }
  .carousel-container {
  width: 340px;
  height: 200px;
  }
}
 
</style>

    <script>
          const prev = document.querySelector('.prev');
          const next = document.querySelector('.next');
          const images = document.querySelector('.carousel').children;
          const totalImages = images.length;
          let index = 0;

          prev.addEventListener('click', () => {
            nextImage('next');
          })

          next.addEventListener('click', () => {
            nextImage('prev');
          })

          function nextImage(direction) {
            if(direction == 'next') {
              index++;
              if(index == totalImages) {
                index = 0;
              }
            } else {
              if(index == 0) {
                index = totalImages - 1;
              } else {
                index--;
              }
            }
            
            for(let i = 0; i < images.length; i++) {
              images[i].classList.remove('main');
            }
            images[index].classList.add('main');
          }


    </script>
</body>
</html>