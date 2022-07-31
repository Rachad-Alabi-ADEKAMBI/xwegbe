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

    <div id='app'><br>


        <div class='booking' v-if='showBooking' v-for='detail in details' key='detail.id'>
            <form action='model.php?action=bookAppartment&id={{detail.id}}' class='' method='POST'> <br> <br>

                <div class='back' @click='showBooking=false; showAllFreeAppartments=true'>
                    <p>
                        X {{ message }}
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

                <button class='view' type='submit' type='submit' @click='bookAppartment()'>
                    Valider
                </button>
            </form>
        </div>

        <div class='appartment' v-if='showDetails'>
            <div class='appartment__content'>
                <div class='appartments__content__details'>
                    <div class='item' v-for='detail in details' :key='detail.id'>
                        <img :src='getImgUrl(detail.picture_1)'>
                        <h2 class='appartment_name'>
                            {{ detail.name }}
                        </h2> <br>

                        <p class='daily_price'>
                            A partir de : <span> {{ detail.price }} </span> FCFA HT
                        </p>

                        <p class='extract'>
                            {{detail.short_description }}
                        </p>

                        <p class='rooms'>
                            Nombre de chambres: <span> {{ detail.rooms }} </span>
                        </p>

                        <div class='buttons'>
                            <button class='book' @click='startBooking(detail.id)'>
                                Réserver maintenant
                            </button>
                        </div>
                    </div>
                </div>
                <form action='model.php?action=searchAppartment' method='POST' class='appartments__content__form'>
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

        </div><br>

        <div class='appartments' v-if='showAllFreeAppartments'>
            <h1 class='appartments__title'>
                APPARTEMENTS DISPONIBLES
            </h1>


            <div class='appartments__content'>
                <div class='appartments__content__details'>
                    <div class='item' v-for='appartment in allFreeAppartments' :key='appartment.id'>
                        <img :src='getImgUrl(appartment.picture_1)'>
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
                            <button class='book' @click='startBooking(appartment.id)'>
                                Réserver maintenant
                            </button>

                            <button class='details' @click='getAppartment(appartment.id)'>
                                Voir les détails
                            </button>
                        </div>
                    </div>
                </div>
                <form action='model.php?action=searchAppartment' method='POST' class='appartments__content__form'>
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
    </div>

    <script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                allFreeAppartments: [],
                errorMsg: '',
                allData: '',
                showBooking: false,
                showDetails: false,
                showResults: false,
                details: {},
                showAllFreeAppartments: true,
                query_date_of_arrival: '',
                query_date_of_departure: '',
                query_number_of_people: '',
                short_description: '',
                user_firstname: '',
                user_lastname: '',
                date_of_departue: '',
                date_of_arrival: '',
                amount: '',
                status: '',
                city: '',
                country: '',
                message: '',
                email: ''
            }
        },
        mounted: function() {
            this.getAllFreeAppartments();
        },
        methods: {
            getAllFreeAppartments() {
                axios.get('model.php?action=getAllFreeAppartments').then(
                    response => this.allFreeAppartments = response.data);
                this.showAllFreeAppartments = true;
                this.showBooking = false;
                this.showResults = false;
                this.showBooking = false;
            },
            getAppartment(appartment_id) {
                axios.get('model.php?action=getAppartment&id=' + appartment_id).then(
                    response => this.details = response.data);
                this.showDetails = true;
                this.showBooking = false;
                this.showAllFreeAppartments = false;
            },
            bookAppartment(appartment_id) {
                axios.post('model.php?action=bookAppartment').then(
                    response => this.message = response.data);
                this.showAllFreeAppartments = true;
                this.showDetails = false;
                this.showBooking = true;
                this.showResults = false;
            },
            startBooking(appartment_id) {
                axios.get('model.php?action=getAppartment&id=' + appartment_id).then(
                    response => this.details = response.data);
                axios.post('model.php?action=startBooking&id=' +
                    appartment_id).then(
                    response => this.message = response.data);
                this.showDetails = false;
                this.showBooking = true;
                this.showAllFreeAppartments = false;
            },
            getImgUrl(pic) {
                return "public/images/appartements/" + pic;
            },
            getDetailId(id) {
                return id;
            }
        }
    }).mount('#app')
    </script>

</body>

</html>