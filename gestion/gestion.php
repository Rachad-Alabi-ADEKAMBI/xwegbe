<?php

/**

 * Plugin Name: Gestion des appartements

 * Plugin URI:        https://www.codeurcreatif.com/

 * Description:        custom plugin for reservation.

 * Version:           1.0.0

 * Requires at least: 5.2

 * Requires PHP:      7.2

 * Author:            Codeur creatif

 * Author URI:         https://www.codeurcreatif.com/

 * License:           GPL v2 or later

 * License URI:       free

 * Update URI:         https://www.codeurcreatif.com/

 * Text Domain:       Gestion des appartements

 * Domain Path:       /

 */



 add_shortcode('AppartmentsManagement', 'manageAppartments');

 

 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');

 wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');



 function manageAppartments(){

    echo("

    <div id='app'>
        <div class='list'>
            <div class='list__content overlay'>
                <form  class='list__content__form'
                   >

                    <div class='back' @click='addAppartment=false'>
                    <p>
                        X
                    </p>
                    </div>

                    <h1 class=''>
                        Ajouter un appartement
                    </h1>  <br>  


                    <div class='row'>
                        <div class='col'>
                        <input type='text' class='form-control'
                        placeholder='Nom de appartement'  name='name'>
                        </div>
                    </div> <br>

                        <div class='row'>
                                        <div class='col-4'>
                                        <input type='number' class='form-control' name='price' 
                                        placeholder='Prix' >
                                        </div>

                                        <div class='col-4'>
                                        <input type='number' class='form-control' name='rooms' 
                                    
                                        placeholder='Chambres' >
                                        </div>

                                        <div class='col-4'>
                                        <input type='text' class='form-control' name='location'
                                         placeholder='Localisation' >
                                        </div>
                        </div> <br>

                        <div class='form-group'>
                                        <textarea class='form-control' placeholder='Description'  v-model='newAppartment.short-description'
                                        id='exampleFormControlTextarea1' name='short_description' rows='3'></textarea>
                                    </div> <br>

                                    <div class='form-group'>
                                        <textarea class='form-control' placeholder='Description'  v-model='newAppartment.long-description'
                                        id='exampleFormControlTextarea1' name='long_description'  rows='5'></textarea>
                                    </div> <br>

                                    <div class='row'>
                                    <div class='col-4'>
                                    <input type='file'   name='picture_1' class='form-control'  v-model='newAppartment.picture_1'
                                    placeholder='Image1' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='file'   name='picture_2' class='form-control'  v-model='newAppartment.picture_2'
                                    placeholder='Image1' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='file'  name='picture_3' class='form-control'  v-model='newAppartment.picture_3'
                                    placeholder='Image1' >
                                    </div>


                        </div> <br>

                        <div class='row'>
                                <div class='col-4'>
                                <input type='file'  name='picture_4' class='form-control'  v-model='newAppartment.picture_4'
                                placeholder='Image1'>
                                </div>

                                <div class='col-4'>
                                <input type='file'   name='picture_5' class='form-control'  v-model='newAppartment.picture_5'
                                placeholder='Image5' >
                                </div>


                        </div> <br>

                        <div class='row'>
                                <div class='col-4'>
                                    <label for=''>Wifi</label>
                                <input type='checkbox'  name='wi_fi' class='choice'  v-model='newAppartment.wi_fi'>
                                </div>

                                <div class='col-4'>
                                    <label for=''>Climatisation</label>
                                <input type='checkbox'   name='air_conditionner' class='choice' 
                                v-model='newAppartment.air_conditionner'>
                                </div>

                                <div class='col-4'>
                                    <label for=''>Parking gratuit</label>
                                <input type='checkbox'  name='private_entrance' class='choice' 
                                v-model='newAppartment.private_entrance'>
                                </div>


                        </div> <br>

                        <div class='row'>
                                                        <div class='col-4'>
                                                            <label for=''>Entrée privée</label>
                                                        <input type='checkbox'  name='private_entrance'
                                                         class='choice' placeholder='Image1'
                                                        v-model='newAppartment.private_entrance' >
                                                        </div>

                                                        <div class='col-4'>
                                                            <label for=''>TV</label>
                                                        <input type='checkbox'   name='tv' class='choice' 
                                                        placeholder='Image1' 
                                                        v-model='newAppartment.tv'>
                                                        </div>

                                                        <div class='col-4'>
                                                            <label for=''>Couverts</label>
                                                        <input type='checkbox'  name='dishes' 
                                                        class='choice' placeholder=''
                                                        v-model='newAppartment.dishes'>
                                                        </div>
                        </div> <br>

                        



                       
                                    <button class='view'   @click='addAppartment=false'>
                            Valider
                        </button>
                </form>
            </div>

            <div class='list__content overlay' v-if='editAppartment'>
                        <form action='model.php?action=editAppartment' class='list__content__form'
                            method='POST'>

                            <div class='back' @click='editAppartment=false'>
                            <p>
                                X
                            </p>
                            </div>

                            <h1 class=''>
                            Modifier un appartement 
                            </h1>  <br>  


                            <div class='row'>
                                    <div class='col-4'>
                                    <input type='number' class='form-control' name='price'  v-model='newAppartment.price'
                                    placeholder='Prix' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='number' class='form-control' name='rooms'  v-model='newAppartment.rooms'
                                    placeholder='Chambres' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='text' class='form-control' name='location' placeholder='Localisation'
                                    v-model='newAppartment.location' >
                                    </div>
                                </div> <br>

                                <div class='form-group'>
                                    <textarea class='form-control' placeholder='Description'  v-model='newAppartment.short-description'
                                    id='exampleFormControlTextarea1' name='short_description' rows='3'></textarea>
                                </div> <br>

                                <div class='form-group'>
                                    <textarea class='form-control' placeholder='Description'  v-model='newAppartment.long-description'
                                    id='exampleFormControlTextarea1' name='long_description'  rows='5'></textarea>
                                </div> <br>

                                <div class='row'>
                                    <div class='col-4'>
                                    <input type='file'   name='picture_1' class='form-control'  v-model='newAppartment.picture_1'
                                    placeholder='Image1' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='file'   name='picture_2' class='form-control'  v-model='newAppartment.picture_2'
                                    placeholder='Image1' >
                                    </div>

                                    <div class='col-4'>
                                    <input type='file'  name='picture_3' class='form-control'  v-model='newAppartment.picture_3'
                                    placeholder='Image1' >
                                    </div>

                                
                                </div> <br>

                                <div class='row'>
                                    <div class='col-4'>
                                    <input type='file'  name='picture_4' class='form-control'  v-model='newAppartment.picture_4'
                                    placeholder='Image1'>
                                    </div>

                                    <div class='col-4'>
                                    <input type='file'   name='picture_5' class='form-control'  v-model='newAppartment.picture_5'
                                    placeholder='Image5' >
                                    </div>

                                
                                </div> <br>

                                <div class='row'>
                                    <div class='col-4'>
                                        <label for=''>Wifi</label>
                                    <input type='checkbox'  name='wi_fi' class='choice'  v-model='newAppartment.wi_fi'>
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>Climatisation</label>
                                    <input type='checkbox'   name='air_conditionner' class='choice' 
                                    v-model='newAppartment.air_conditionner'>
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>Parking gratuit</label>
                                    <input type='checkbox'  name='private_entrance' class='choice' 
                                    v-model='newAppartment.private_entrance'>
                                    </div>

                                
                                </div> <br>

                                <div class='row'>
                                    <div class='col-4'>
                                        <label for=''>Seche-cheveux</label>
                                    <input type='checkbox'  name='dryer' class='choice'
                                    v-model='newAppartment.dryer'>
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>Four</label>
                                    <input type='checkbox'   name='oven' class='choice' 
                                    v-model='newAppartment.oven'>
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>Réfrigirateur</label>
                                    <input type='checkbox'  name='fridge' class='choice'
                                    v-model='newAppartment.fridge'  placeholder='Image1' >
                                    </div>

                                
                                </div> <br>

                                <div class='row'>
                                    <div class='col-4'>
                                        <label for=''>Entrée privée</label>
                                    <input type='checkbox'  name='private_entrance' class='choice' placeholder='Image1'
                                    v-model='newAppartment.private_entrance' >
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>TV</label>
                                    <input type='checkbox'   name='tv' class='choice' placeholder='Image1' 
                                    v-model='newAppartment.tv'>
                                    </div>

                                    <div class='col-4'>
                                        <label for=''>Couverts</label>
                                    <input type='checkbox'  name='dishes' class='choice' placeholder=''>
                                    </div>

                                
                                </div> <br>

                                <button class='view'  v-on:click='editAppartment=false; editAppartment()'>
                                    Valider
                                </button>

                        </form>
            </div>


            <div class='list__content'>
                                        <h1 class='list__content__title'>

                                            Gestion des appartements

                                        </h1> 

                                            <div class='list__content__options'>

                                                    <button class='new'  @click='addAppartment=true; showAllAppartments=false'>

                                                    Ajouter appartement

                                                </button>

                                            </div>

                    

                                            <table class='table'>

                                                <thead>

                                                    <tr>

                                                    <th>Id</th>

                                                    <th>Nom</th>

                                                    <th>Chambres</th>

                                                    <th>Tarif</th>

                                                    <th>Etat</th>

                                                    <th>Modifier</th>

                                                    <th>Spprimer</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <tr  v-for='appartment in appartments' :key='appartment.id' >

                                                        <td data-label='Id'> {{ appartment.id }}</td>

                                                        <td data-label='Nom'> {{ appartment.name }} </td>

                                                        <td data-label='chambres'> {{ appartment.rooms }} </td>

                                                        <td data-label='Prix'> {{ appartment.price }} </td>

                                                        <td data-label='Etat'> {{ appartment.status }} </td>

                                                        

                                                        <td>

                                                        <button class='edit' @click='editAppartment=true; selectAppartment(appartment);'>

                                                                Modifier

                                                            </button>

                                                        </td>



                                                        <td>

                                                        <button class='trash'@click='showDelete=true; selectAppartment(Appartment);'>

                                                                Supprimer

                                                            </button>

                                                        </td>
                                                    </tr>

                                                </tbody>

                                            </table>

                                    </div>

                    </div>

            </div>

            <div class='list__content' v-if='showBookings' >
                            <h1 class='list__content__title'>
                                Gestion des reservations
                            </h1> 
        
                              <div class='list__content__options'>
                                        <button class='view' @click='showBookings=false'>
                                        Retour
                                    </button>

                                  
                              </div>
                              
                              
                                <table class='table'>
                                    <thead>
                                        <th>Id</th>
                                        <th>Client</th>
                                        <th>Voyageurs</th>
                                        <th>Email</th>
                                        <th>Ville</th>
                                        <th>Pays</th>
                                        <th>Appartement</th>
                                        <th>Arrivée</th>
                                        <th>Départ</th>
                                    </thead>
                                    <tbody>
                                        <tr  v-for='booking in bookings' :key='booking.id' >
                                            <td data-label='Id'> {{ booking.id }}</td>
                                            <td data-label='Client'> {{ booking.user_firstname }} {{ booking.user_lastname }} </td>
                                            <td data-label='Voyageurs'> {{ booking.travelers }} </td> 
                                            <td data-label='Email'> {{ booking.user_email }} </td>
                                            <td data-label='Ville'> {{ booking.user_country }} </td>
                                            <td data-label='Pays'> {{ booking.user_city }} </td>
                                            <td data-label='Appartement'> {{ booking.appartment_name }} </td>
                                            <td data-label='Arrivee'> {{ booking.date_of_arrival }} </td>
                                            <td data-label='Depart'> {{ booking.date_of_departure }} </td>

                                            <td>  <button class='new'  @click='confirmBooking()'>
                                                    Confirmer
                                                </button>
                                              </td>

                                             
                                              <td>
                                              <button class='trash'  @click='deleteBooking()'>
                                                    Supprimer
                                                </button>
                                              </td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
        </div>
    </div>
    ");

      wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');

    wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');

  

 }

 ?>





