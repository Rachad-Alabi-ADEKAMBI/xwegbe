

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appartements</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>
   
    
    <?php include 'header2.php'; ?>

        <div id="app">
                    
            <div class='appartments' v-if='0 < 1'>
                    <h1 class='appartments__title'>
                        NOS APPARTEMENTS {{ msg }}
                    </h1>
                

                    <div class='appartments__content'>
                            <div class='appartments__content__details'>
                                <div class='item'  v-for='appartment in appartments' :key='appartment.id'>
                                <img v-bind:src='https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'>
                                        <h2 class='appartment_name'>
                                            {{ appartment.name }}
                                        </h2> <br>

                                        <p class='daily_price'>
                                            A partir de : <span> {{ appartment.price }} </span> FCFA HT
                                        </p>

                                        <p class='rooms'>
                                            Nombre de chambres:  <span>  {{ appartment.rooms }} </span>
                                        </p>

                                        <p class='extract'>
                                        {{ appartment.short_description }}
                                        </p> 

                                      

                                       

                                        <div class='buttons'>
                                            <button class='book' @click='showBook=true'>
                                              Réserver maintenant
                                            </button>

                                            <button class='details' >  
                                             Voir les détails
                                            </button>
                                         
                                        </div>
                                    </div>
                                </div>
                                <form action='' class='appartments__content__form'>
                                        <label class='form_label'>
                                            Date d'arrivée: <br>
                                            <input type='date' placeholder='Arrivée' name='arrival_date'>
                                        </label> <br><br>

                                        <label class='form_label'>
                                            Date de départ: <br>
                                            <input type='date' placeholder='Départ*' name='departure_date'>
                                        </label> <br> <br>

                                        <label class='form_label'>
                                            Nombre de voyageurs: <br>
                                            <select  name='number_of_people' id=''>
                                                    <option value=''>Sélectionner</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                            </select>
                                        </label> <br> <br>

                                            <button type='submit' class='form_submit'>
                                                Rechercher <i></i>
                                            </button>
                            </form>
                            </div>

                            
                    </div>
            
            </div>

        </div>
<script>
     const { createApp } = Vue

createApp({
  data() {
    return {
        appartments:[
             { id: '1', name: 'appartement 1', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2', picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'},
     ],
           errorMsg: "",
          allData: '',
          msg: '',
          name: 'appart 1',
          short_description: 'short', 
          long_description: 'long',
          price: '100',
          showBook: false,
          showDetails: false,
          picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'
 
      }
      },
      mounted: function(){
        //  this.getAllFreeAppartments();
      //  this.fetchAllData();
      },
          methods: {
            getAllFreeAppartments(){
              axios.get("functions.php?action=getAllFreeAppartments").then(response => this.appartments = response.data);
           },
           book(){
            this.msg = 'yfyu';
           }
    }
}).mount('#app')


</script>
    
</body>
</html>