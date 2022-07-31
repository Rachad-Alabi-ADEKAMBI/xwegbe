<?php

/**

 * Plugin Name: Homepage

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



 add_shortcode('Home', 'home');

 

 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');

 wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');



 function home(){

    echo("

    <div id='app'>
         <div class='top'>
            <h1>Bienvenue sur <span>XWEGBE !</span></h1>

            <form action=' class='top__research-form'>
                    <label class='top__research-form__label'>
                        Date d'arrivée: <br>
                        <input type='date' placeholder='Arrivée*' name='arrival_date'>
                    </label>

                    <label class='top__research-form__label'>
                        Date de départ: <br>
                        <input type='date' placeholder='Départ*' name='departure_date'>
                    </label>

                    <label class='top__research-form__label'>
                        Nonbre de personnes: <br>
                        <select  name='number_of_people' id='>
                                <option value='>Sélectionner</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                        </select>
                    </label>

                <button type='submit' class='top__research-form__submit'>
                    Vérifier la disponibilité <i></i>
                </button>
            </form>
        </div>

        <div class='about-section'>
            <h2 class='about-section__title'>
                Xwegbe, 1er catalogue d'appartements meublés au Bénin
            </h2>

            <div class='about-section__content'>
                <div class='about-section__content__picture'>
                    <div class='background'>
                        <img src='public/images/xwegbe.jpeg' alt=''>
                    </div>
                </div>
    
                <div class='about-section__content__details'>
                            <img src='public/icons/people.svg' alt=''>
    
                            <h3 class='title'>
                                Qui sommes nous ?
                            </h3>
    
                            <p class='text'>
                                Lorem ipsum dolor sit amet consectetur, 
                                adipisicing elit. Culpa consequatur rerum 
                                debitis voluptatem optio vel eligendi maiores 
                                mollitia sed ut accusantium sint quod aperiam 
                                aut unde, doloribus aspernatur repellat quis!
                            </p>

                            <button class='link'>
                                <a href='a-propos.php'>En savoir plus</a>
                            </button>
                </div>
            </div>
        </div>

        <div class='reasons-section'>
            <h2 class='reasons-section__title'>
                Xwegbe, 1er catalogue d'appartements meublés au Bénin
            </h2>

            <div class='reasons-section__content'>
                <div class='reasons-section__content__details'>
                    <img src='public/icons/hand.svg' alt='xwegbe'>

                    <h3 class='title'>
                        Pourquoi nous choisir ? 
                    </h3>

                    <p class='text'>
                        Lorem ipsum dolor sit amet consectetur, 
                        adipisicing elit. Culpa consequatur rerum 
                        debitis voluptatem optio vel eligendi maiores 
                        mollitia sed ut accusantium sint quod aperiam 
                        aut unde, doloribus aspernatur repellat quis!
                    </p>

                    <button class='link'>
                        <a href='appartements.php'>En savoir plus</a>
                    </button>
                </div>

                <div class='reasons-section__content__picture'>
                    <div class='background'>
                        <img src='public/images/xwegbe.jpeg' alt='xwegbe'>
                    </div>
                </div>
    
              
            </div>
        </div>
    </div>
    ");

      wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');

    wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');

  

 }

 ?>