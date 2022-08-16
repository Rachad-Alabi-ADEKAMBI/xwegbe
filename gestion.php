<?php
session_start();

    if($_SESSION['user']['role'] != 'admin'){
        header('connexion.php');
        exit(0);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>

    <title>Gestion appartements</title>
</head>

<body>


    <?php include 'header.php'; ?>


    <div id='app'>

        <div class='list'>
            <div class="list__message" v-if="successMsg">
                {{ successMsg }}
            </div>


            <div class='list__content overlay' v-if=addAppartment>
                <form action="model.php?action=addAppartment" class="list__content__form" method="POST">

                    <div class="back" @click="addAppartment=false">
                        <p>
                            X
                        </p>
                    </div>

                    <h1 class=''>
                        Ajouter un appartement
                    </h1> <br>


                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" v-model="newAppartment.name"
                                placeholder="Nom de l'appartement" name="name">
                        </div>

                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control" name="price" v-model="newAppartment.price"
                                placeholder="Prix">
                        </div>

                        <div class="col-4">
                            <input type="number" class="form-control" name="rooms" v-model="newAppartment.rooms"
                                placeholder="Chambres">
                        </div>

                        <div class="col-4">
                            <input type="text" class="form-control" name="location" placeholder="Localisation"
                                v-model="newAppartment.location">
                        </div>
                    </div> <br>

                    <div class='form-group'>
                        <textarea class='form-control' placeholder='Description'
                            v-model='newAppartment.short-description' id='exampleFormControlTextarea1'
                            name='short_description' rows='3'></textarea>
                    </div> <br>

                    <div class='form-group'>
                        <textarea class='form-control' placeholder='Description'
                            v-model='newAppartment.long-description' id='exampleFormControlTextarea1'
                            name='long_description' rows='5'></textarea>
                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <input type="file" name="picture_1" class="form-control" v-model="newAppartment.picture_1"
                                placeholder="Image1">
                        </div>

                        <div class="col-4">
                            <input type="file" name="picture_2" class="form-control" v-model="newAppartment.picture_2"
                                placeholder="Image1">
                        </div>

                        <div class="col-4">
                            <input type="file" name="picture_3" class="form-control" v-model="newAppartment.picture_3"
                                placeholder="Image1">
                        </div>


                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <input type="file" name="picture_4" class="form-control" v-model="newAppartment.picture_4"
                                placeholder="Image1">
                        </div>

                        <div class="col-4">
                            <input type="file" name="picture_5" class="form-control" v-model="newAppartment.picture_5"
                                placeholder="Image5">
                        </div>


                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <label for="">Wifi</label>
                            <input type="checkbox" name="wi_fi" class="choice" v-model="newAppartment.wi_fi">
                        </div>

                        <div class="col-4">
                            <label for="">Climatisation</label>
                            <input type="checkbox" name="air_conditionner" class="choice"
                                v-model="newAppartment.air_conditionner">
                        </div>

                        <div class="col-4">
                            <label for="">Parking gratuit</label>
                            <input type="checkbox" name="private_entrance" class="choice"
                                v-model="newAppartment.private_entrance">
                        </div>


                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <label for="">Sèche-cheveux</label>
                            <input type="checkbox" name="dryer" class="choice" v-model="newAppartment.dryer">
                        </div>

                        <div class="col-4">
                            <label for="">Four</label>
                            <input type="checkbox" name="oven" class="choice" v-model="newAppartment.oven">
                        </div>

                        <div class="col-4">
                            <label for="">Réfrigirateur</label>
                            <input type="checkbox" name="fridge" class="choice" v-model="newAppartment.fridge"
                                placeholder="Image1">
                        </div>


                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                            <label for="">Entrée privée</label>
                            <input type="checkbox" name="private_entrance" class="choice" placeholder="Image1"
                                v-model="newAppartment.private_entrance">
                        </div>

                        <div class="col-4">
                            <label for="">TV</label>
                            <input type="checkbox" name="tv" class="choice" placeholder="Image1"
                                v-model="newAppartment.tv">
                        </div>

                        <div class="col-4">
                            <label for="">Couverts</label>
                            <input type="checkbox" name="dishes" class="choice" placeholder=""
                                v-model="newAppartment.dishes">
                        </div>


                    </div> <br>

                    <button class="view" v-on:click="addAppartment();">
                        Valider
                    </button>
                </form>
            </div>


            <div class='list__content overlay'>
                <form action='model.php?action=editAppartment' class='list__content__form' method='POST'>
                    <div class="" v-for='detail in details' key='detail.id'>
                        <div class='back' @click='showEditAppartment=false'>
                            <p>
                                X
                            </p>
                        </div>

                        <h1 class=''>
                            Modifier appartmnt
                        </h1> <br>


                        <div class='row'>
                            <div class='col'>
                                <input type='text' class='form-control' v-model='currentAppartment.name'
                                    placeholder='Nom appartement' name='name'>
                            </div>

                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <input type='number' class='form-control' name='price' v-model='newAppartment.price'
                                    placeholder='Prix'>
                            </div>

                            <div class='col-4'>
                                <input type='number' class='form-control' name='rooms' v-model='newAppartment.rooms'
                                    placeholder='Chambres'>
                            </div>

                            <div class='col-4'>
                                <input type='text' class='form-control' name='location' placeholder='Localisation'
                                    v-model='newAppartment.location'>
                            </div>
                        </div> <br>

                        <div class='form-group'>
                            <textarea class='form-control' placeholder='Description'
                                v-model='newAppartment.short-description' id='exampleFormControlTextarea1'
                                name='short_description' rows='3'></textarea>
                        </div> <br>

                        <div class='form-group'>
                            <textarea class='form-control' placeholder='Description'
                                v-model='newAppartment.long-description' id='exampleFormControlTextarea1'
                                name='long_description' rows='5'></textarea>
                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <input type='file' name='picture_1' class='form-control'
                                    v-model='newAppartment.picture_1' placeholder='Image1'>
                            </div>

                            <div class='col-4'>
                                <input type='file' name='picture_2' class='form-control'
                                    v-model='newAppartment.picture_2' placeholder='Image1'>
                            </div>

                            <div class='col-4'>
                                <input type='file' name='picture_3' class='form-control'
                                    v-model='newAppartment.picture_3' placeholder='Image1'>
                            </div>


                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <input type='file' name='picture_4' class='form-control'
                                    v-model='newAppartment.picture_4' placeholder='Image1'>
                            </div>

                            <div class='col-4'>
                                <input type='file' name='picture_5' class='form-control'
                                    v-model='newAppartment.picture_5' placeholder='Image5'>
                            </div>


                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <label for=''>Wifi</label>
                                <input type='checkbox' name='wi_fi' class='choice' v-model='newAppartment.wi_fi'>
                            </div>

                            <div class='col-4'>
                                <label for=''>Climatisation</label>
                                <input type='checkbox' name='air_conditionner' class='choice'
                                    v-model='newAppartment.air_conditionner'>
                            </div>

                            <div class='col-4'>
                                <label for=''>Parking gratuit</label>
                                <input type='checkbox' name='private_entrance' class='choice'
                                    v-model='newAppartment.private_entrance'>
                            </div>


                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <label for=''>Seche-cheveux</label>
                                <input type='checkbox' name='dryer' class='choice' v-model='newAppartment.dryer'>
                            </div>

                            <div class='col-4'>
                                <label for=''>Four</label>
                                <input type='checkbox' name='oven' class='choice' v-model='newAppartment.oven'>
                            </div>

                            <div class='col-4'>
                                <label for=''>Réfrigirateur</label>
                                <input type='checkbox' name='fridge' class='choice' v-model='newAppartment.fridge'
                                    placeholder='Image1'>
                            </div>


                        </div> <br>

                        <div class='row'>
                            <div class='col-4'>
                                <label for=''>Entrée privée</label>
                                <input type='checkbox' name='private_entrance' class='choice' placeholder='Image1'
                                    v-model='newAppartment.private_entrance'>
                            </div>

                            <div class='col-4'>
                                <label for=''>TV</label>
                                <input type='checkbox' name='tv' class='choice' placeholder='Image1'
                                    v-model='newAppartment.tv'>
                            </div>

                            <div class='col-4'>
                                <label for=''>Couverts</label>
                                <input type='checkbox' name='dishes' class='choice' placeholder=''>
                            </div>


                        </div> <br>

                        <button class='view' v-on:click='editAppartment=false; '>
                            Valider
                        </button>

                    </div>

                </form>
            </div>





            <div class='list__content' v-if='1>0'>

                <h1 class='list__content__title'>
                    Gestion des appartements
                </h1>

                <div class='list__content__options'>
                    <button class='new' @click='addAppartment=true'>
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
                        <tr v-for='appartment in appartments' :key='appartment.id'>
                            <td data-label='Id'> {{ appartment.id }}</td>
                            <td data-label='Nom'> {{ appartment.name }} </td>
                            <td data-label='chambres'> {{ appartment.rooms }} </td>
                            <td data-label='Prix'> {{ appartment.price }} </td>
                            <td data-label='Etat'> {{ appartment.status }} </td>

                            <td>
                                <button class='edit' @click="editAppartment">
                                    Modifier
                                </button>
                            </td>

                            <td>
                                <button class='trash' @click="showDelete=true; selectAppartment(Appartment);">
                                    Supprimer
                                </button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class='list__content' v-if='showBookings'>
                <h1 class='list__content__title'>
                    Gestion des réservations
                </h1>

                <div class="list__content__options">
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
                        <tr v-for='booking in allBookings' :key='booking.id'>
                            <td data-label='Id'> {{ booking.id }}</td>
                            <td data-label='Client'> {{ booking.user_firstname }} {{ booking.user_lastname }} </td>
                            <td data-label='Voyageurs'> {{ booking.travelers }} </td>
                            <td data-label='Email'> {{ booking.user_email }} </td>
                            <td data-label='Ville'> {{ booking.user_country }} </td>
                            <td data-label='Pays'> {{ booking.user_city }} </td>
                            <td data-label='Appartement'> {{ booking.appartment_name }} </td>
                            <td data-label='Arrivée'> {{ booking.date_of_arrival }} </td>
                            <td data-label='Départ'> {{ booking.date_of_departure }} </td>

                            <td> <button class='new' @click='confirmBooking()'>
                                    Confirmer
                                </button>
                            </td>


                            <td>
                                <button class='trash' @click='deleteBooking()'>
                                    Supprimer
                                </button>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    const {
        createApp
    } = Vue
    createApp({
        data() {
            return {
                appartments: [
                    /*
                    { id: '1', name: 'appartement 1', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2', picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'},
                     */
                ],
                picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg',
                errorMsg: "",
                successMsg: '',
                allData: '',
                msg: '',
                addAppartment: false,
                bookAppartment: false,
                showEditAppartment: true,
                deleteAppartment: false,
                newAppartment: {},
                currentAppartment: {},
                showBookings: true,
                allBookings: [],
                details: []
            }
        },
        mounted: function() {
            this.getAllFreeAppartments();
            this.editAppartment();
            //  this.fetchAllData();
        },
        methods: {
            getAllFreeAppartments() {
                axios.get("model.php?action=getAllFreeAppartments").then(response => this.appartments = response
                    .data);
            },
            getAllBookings() {
                axios.get("model.php?action=getAllBookings").then(response => this.bookings = response.data);
            },
            addAppartment() {
                var FormData = app.toFormData(app.newAppartment);
                axios.post("model.php?action=addAppartment").then(function(response) {
                    app.newAppartment = {
                        name: ""
                    }
                });
            },
            editAppartment() {
                this.showEditAppartment = true;
                axios.get("model.php?action=getAppartment?id=2").then(response => this.details = response
                    .data);

                /*
                var FormData = app.toFormData(app.currentAppartment);
                axios.update("model.php?action=editAppartment").then(
                    function(response) {
                        this.currentAppartment = {
                            name: ""
                        };
                        if (response.data.error) {
                            app.errorMsg = response.data.message;
                        } else {
                            this.successMsg = response.data.message;
                            //  app.getAllUsers();
                        }
                    });
                */
            },

        }
    }).mount('#app')
    </script>

</body>

</html>