<?php
/**
 * Plugin Name: Liste appartements
 */

 add_shortcode('list', 'getAllFreeAppartments');
 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');
 wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');

 function getAllFreeAppartments(){
    echo("
                    
    <div id='app'><br>
        <div class='booking' v-if='showBooking' v-for='detail in details' key='detail.id'>
            <form action='model.php?action=startBooking' class='' method='POST'> <br> <br>

                <div class='back' @click='showBooking=false; showAllFreeAppartments=true'>
                    <p>
                        X
                    </p>
                </div>

                <h1 class='title'>
                    Réserver {{ detail.name}}
                </h1> <br>


                <div class='row'>
                    <div class='col-6'>Prénoms
                        <input type='text' class='form-control' name='first_name' placeholder='Prénoms' required>
                    </div>

                    <div class='col-6'>Nom
                        <input type='text' class='form-control' name='last_name' placeholder='Nom' required>
                    </div>

                </div> <br>

                <div class='row'>
                    <div class='col-6'>Date d'arrivée:
                        <input type='date' class='form-control' v-model='date_of_arrival' name='date_of_arrival'
                            placeholder='Date départ' required>
                    </div>

                    <div class='col-6'>Date de départ
                        <input type='date' class='form-control' name='date_of_departure' v-model='date_of_departue'
                            placeholder='Date de départ' required>
                    </div>
                </div> <br>

                <div class='row'>
                    <div class='col-6'>Nombre de voyageurs <br>
                        <input type='number' class='form-control' name='travelers' placeholder='Nombre se voyageurs'
                            required>
                    </div>
                </div> <br> <br>

                <div class='row'>
                    <div class='col-6'>
                        <input type='text' class='form-control' v-model='city' name='city' placeholder='Ville' required>
                    </div>

                    <div class='col-6'>
                        <input type='text' class='form-control' required name='country' placeholder='Pays'
                            v-model='country'>
                    </div>
                </div> <br>

                <div class='row'>
                    <div class='col'>
                        <input type='text' class='form-control' name='phone_number' placeholder='Numéro de téléphone'
                            required>
                    </div>
                </div> <br>

                <div class='row'>
                    <div class='col'>
                        <input type='text' class='form-control' v-model='email' name='email' placeholder='Email'
                            required>
                    </div>
                </div> <br>



                <textarea class='form-control' placeholder='Description' placeholder='Note (facultatif)'
                    id='exampleFormControlTextarea1' name='description' rows='3' v-model='short_description'>
                    </textarea>
                <br>

                <button class='view' v-on:click='startBooking(detail.id)' type='submit'>
                    Valider
                </button>
            </form>
        </div>

        <div class='appartment' v-if='showDetails'>
            <div class='appartment__content'>
                <div class='appartment__content__details' v-for='detail in details' key='detail.id'>
                    <div class='back' @click='showAllFreeAppartments'>
                        Retour <br>
                    </div>
                    <img src='https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'>

                    <h1 class='appartment_name'>
                        {{ detail.name }}
                    </h1>
                    <p class='daily_price'>
                        A partir de : <span> {{ detail.price }} FCFA HT </span>
                    </p>

                    <p class='rooms'>
                        Nombre de chambres: <span> {{ detail.rooms }} </span>
                    </p>

                    <p class='appartment_description'>
                        {{ detail.short_description }}
                    </p>

                    <p class='appartment_description'>
                        {{ detail.long_description}}
                    </p>

                    <button class='book' @click='bookAppartment(detail.id)'>
                        Reserver
                    </button>
                </div>

                <form action='' class='appartments__content__form'>
                    <label class='form_label'>
                        Date d'arrivée: <br>
                        <input type='date' placeholder='Arrivée' name='arrival_date' v-model='query_date_of_arrival'
                            required>
                    </label> <br><br>

                    <label class='form_label'>
                        Date de départ: <br>
                        <input type='date' placeholder='Départ' name='date_of_departure_'
                            v-model='query_date_of_departure' required>
                    </label> <br> <br>

                    <label class='form_label'>
                        Nombre de voyageurs: <br>
                        <select name='number_of_people' id='' required v-model='query_number_of_people'>
                            <option value=''>Sélectionner</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                        </select>
                    </label> <br> <br>

                    <button type='submit' class='form_submit' @click='new_query()'>
                        Rechercher <i></i>
                    </button>
                </form>
            </div>

        </div><br>

        <div class='appartments' v-if='showAllFreeAppartments'>
            <h1 class='appartments__title'>
                APPARTEMENTS DISPONIBLES
            </h1>


            <div class='appartments__content'>
                <div class='appartments__content__details'>
                    <div class='item' v-for='appartment in allFreeAppartments' :key='appartment.id'>
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
                            Nombre de chambres: <span> {{ appartment.rooms }} </span>
                        </p>

                        <div class='buttons'>
                            <button class='book' @click='bookAppartment(appartment.id)'>
                                Réserver maintenant
                            </button>

                            form
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
                        <select name='number_of_people' id=''>
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
    </div>");
      wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');
    wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');
  
 }
 ?>