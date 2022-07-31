<?php
/**
 * Plugin Name: Liste des appartements
 */

 add_shortcode('list', 'getAllAppartments');
 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');
 wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');

 function getAllAppartments(){
    echo("<div id='app'>
    <div class='container'>
            
    <div class='appartments'>
        <h1 class='appartments__title'>
            NOS APPARTEMENTS
        </h1>
    

        <div class='appartments__content'>
                <div class='appartments__content__details'>
                    <div class='item'  v-for='appartment in appartments' :key='appartment.id'>
                    <img src= {{ appartment.picture_1 }}>
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
                                Nombre de chambres:  <span>  {{ appartment.name }} </span>
                            </p>

                            <div class='buttons'>
                                <button class='book'>
                                    <a href='booking.php?id= {{ appartment.id }}'>Réserver maintenant</a>
                                </button>

                                <button class='details'>
                                    <a href='appartement.php?id= {{ appartment.id }}'>Voir les détails</a>
                                </button>
                            </div>
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


        
        </div>");
    wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');
    wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');
  
 }
 ?>


