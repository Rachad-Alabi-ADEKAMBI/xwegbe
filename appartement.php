

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appartement</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

<div id="app">
    <div class="container">
        <div class="appartment">
            <div class="appartment__content">
                <div class="appartment__content__details">  
                    <p><img src=""> Retour</p>
                      
                            <h1 class="appartment_name">
                           {{ name }}
                            </h1>

                            <p class="appartment_extract">
                            {{ short_description }}
                            </p>

                            <p class="appartment_description">
                            {{ long_description }}
                            </p>
                            

                            <button class="book">
                                <a href="reservation.php">
                                    Reserver
                                </a>
                            </button>
                </div> 
            </div>
        </div>
    </div>
</div>


<script>
     const { createApp } = Vue

createApp({
  data() {
    return {
          id: '1',
          name: 'appartement 1',
          price: '50 000 F CFA',
          short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm',
          long_description: 'Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm',
          rooms: '2',
            errorMsg: "",
          allData: ''
      }
      },
      mounted: function(){
       //   this.getAllAppartments();
      //  this.fetchAllData();
      },
          methods: {
            getAllAppartments(){
              axios.get("functions.php?action=getAllAppartments").then(response => this.appartments = response.data);
           }
    }
}).mount('#app')


</script>
    
</body>
</html>