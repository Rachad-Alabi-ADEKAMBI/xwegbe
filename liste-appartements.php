

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Appartements</title>
    <link rel='stylesheet' href='style.css'>
    <script src='https://unpkg.com/vue@3'></script>
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>

</head>

<body>      

<?php include 'header2.php'; ?>
 
<div id='app'><br> <br><br> <br>

<div class="booking" v-if="showBook=true">
                    <form action="model.php?action=bookAppartment" class=""
                                method="POST">

                                <div class="back" @click="showBook=false">
                                   <p>
                                    X
                                   </p>
                                </div>

                                <h1 class="title">
                                    Réserver un appartement
                                </h1>  <br>

                                  


                                <div class="row">
                                    <div class="col">
                                    <input type="text" class="form-control"
                                       placeholder="Nom complet"  name="name">
                                    </div>
                                
                                </div> <br>

                                <div class="row">
                                        <div class="col-6">Date d'arrivée:  
                                        <input type="date" class="form-control" name="date_of_arrival" 
                                        placeholder="Date départ" >
                                        </div>

                                        <div class="col-6">Date de départ
                                        <input type="date" class="form-control" name="date_of_departure" 
                                        placeholder="Date arrivée" >
                                        </div>
                                </div> <br>

                                <div class="row">
                                        <div class="col-6">
                                        <input type="text" class="form-control" name="date_of_arrival" 
                                        placeholder="Ville" >
                                        </div>

                                        <div class="col-6">
                                        <input type="text" class="form-control" name="date_of_departure" 
                                        placeholder="Pays" >
                                        </div>
                                </div> <br>

                                <div class="row">
                                        <div class="col">
                                        <input type="text" class="form-control" name="" 
                                        placeholder="Numéro de téléphone" >
                                        </div>
                                </div> <br>

                                <div class="row">
                                        <div class="col">
                                        <input type="text" class="form-control" name="date_of_arrival" 
                                        placeholder="Email" >
                                        </div>
                                </div> <br>

                               

                                <textarea class="form-control" placeholder="Description" placeholder="Note (facultatif)"
                                        id="exampleFormControlTextarea1" name="short_description" rows="3">
                                    </textarea>
                                     <br>

                                    <button class="view"  v-on:click="bookAppartment(); showBook=false;">
                                        Valider
                                    </button>
                    </form>
        </div>


        <div class='appartment' v-if='showDetails'>
                <div class='appartment__content'>
                    <div class='appartment__content__details'>  
                    <div class="back">
                    Retour <br>
                    </div>
                        <img src='https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'> 
                        
                                <h1 class='appartment_name'>
                            {{ name }}   
                                </h1> 
                                <p class='daily_price'>
                                                A partir de : <span> {{ price }}  FCFA HT </span>
                                </p>

                                            <p class='rooms'>
                                                Nombre de chambres:  <span> {{ rooms }} </span>
                                            </p>

                                <p class='appartment_description'>
                           {{ short_description }}
                                </p>

                                <p class='appartment_description'>
                            {{ long_description}}
                                </p>

                               
                                

                                <button class='book'>
                                        Reserver
                                </button>
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

                <div class="appartment__gallery">
                    <div class="appartement__gallery__top">
                            <img src="https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg" alt="" class="">
                            <img src="https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg" alt="" class="">
                    </div>
                        <div class="appartement__gallery__bottom">
                            <img src="https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg" alt="" class="images21">
                            <img src="https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg" alt="" class="images211">
                            <img src="https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg" alt="" class="images211">
                        </div>
                </div>
        </div>
                    
        <div class='appartments'>
                        <h1 class='appartments__title'>
                            NOS APPARTEMENTS
                        </h1>
                    

                        <div class='appartments__content'>
                                <div class='appartments__content__details'>
                                    <div class='item'  v-for='appartment in appartments' :key='appartment.id'>
                                        <img v-bind:src='this.picture_1'>
                                            <h2 class='appartment_name'>
                                                {{ appartment.name }}
                                            </h2> <br>

                                            <p class='daily_price'>
                                                A partir de : <span> {{ appartment.price }} </span> FCFA HT
                                            </p>

                                            <p class='extract'>
                                            {{ appartment.short_description }}
                                            </p> 

                                            <p class='rooms'>
                                                Nombre de chambres:  <span>  {{ appartment.rooms }} </span>
                                            </p>

                                            <div class='buttons'>
                                                <button class='book' @click='showBook=true' >
                                                    Réserver maintenant
                                                </button>

                                                <button class='details' @click='showDetails=true'>
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
        appartments:[/*
             { id: '1', name: 'appartement 1', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2', picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'},
      { id: '2', name: 'appartement 2', price: '70 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '3'},
      { id: '3', name: 'appartement 3', price: '35 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '1'},
      { id: '4', name: 'appartement 4', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2'},
      { id: '5', name: 'appartement 5', price: '40 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2'}
        */  ],
          picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg',
      errorMsg: '',
          allData: '',
          showBook: true,
          showDetails: true,
          name: 'kgvfyigvasya',
          short_description: 'utftuitftffdodyfgyd Lorem ipsum dolo r, sit amet consectetur adipisicing elit  Voluptate hic autem sequi rem neque consequuntur deleniti re ',
          long_description: 'Lorem ipsum dolo r, sit amet consectetur adipisicing elit  Voluptate hic autem sequi  Lorem ipsum dolo r, sit amet consectetur adipisicing elit  Voluptate hic autem sequi rem neque consequuntur deleniti re  Lorem ipsum dolo r, sit amet consectetur adipisicing elit  Voluptate hic autem sequi rem neque consequuntur deleniti re rem neque consequuntur deleniti reru',
        currentAppartment: { },
        rooms: 2,
        price: 15000,
        newBooking: []
        }
      },
      mounted: function(){
          this.getAllFreeAppartments();
      //  this.fetchAllData();
      },
          methods: {
            getAllFreeAppartments(){
              axios.get('model.php?action=getAllFreeAppartments').then(
                response => this.appartments = response.data);
           },
           selectAppartment(){

           }
    }
}).mount('#app')


</script>
    
</body>
</html>