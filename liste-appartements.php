<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Appartements</title>

    <?php include 'meta.php'; ?>

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

        <div class="appartment" v-if='showDetails'>
            <div class="appartment__top">
                <div class="appartment__top__left">
                    <div class="retour">
                        Retour
                    </div>

                    <h1 class="title">
                        appartement 1
                    </h1> <br>

                    <div class="short__descr">
                        Lorem
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Temporibus ad quisquam eveniet maiores tempora alias, accusantium mollitia optio quam.
                        blanditiis culpa debitis voluptate, doloremque suscipit ipsum sapiente voluptatibus,
                        quasi aut? <br><br>

                        <h2>
                            Le logement
                        </h2>

                        <p>
                            Le logement se compose comme suit:

                            <ul>
                                <li>
                                    Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Neque,  </li>

                                 <li>
                                    Lorem, ipsum dolor sit amet consectetur
                                     adipisicing elit. Neque, ipsam vero
                                      provident sit sequi tempore</li>

                                <li>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, ipsam vero provident sit sequi tempore ea
                                    consectetur,
                                </li>
                            </ul>
                        </p>

                        <h2>
                            Points importants de la location de cet appartement
                        </h2>

                        <p>
                            <ul>
                                <li>
                                    Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Neque, </li>

                                    <li>
                                        Lorem, ipsum dolor sit amet
                                        consectetur adipisicing elit. Neque, </li>

                                        <li>
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit. Neque, </li>

                            </ul>
                        </p>

                        <p>
                           <span>Accès des voyageurs:</span> <br>
                            Vous aurez accès à toutes les chambres de l'appartement
                        </p>

                        <h2>
                            Equipements:
                        </h2>
                    </div>
                </div>

                <div class="appartment__top__right">
                    <form action="" class="form" method="POST">
                        <p>
                            Appartement <span>disponible</span>
                        </p>

                        <p>
                            Prix: à partir de <strong>25 000 FCFA</strong> / nuit
                        </p>

                        <p>
                            Chambres: <span>3</span>
                        </p>

                        <strong>
                            Les champs obligatoires sont préçédés de *
                        </strong>

                        <label for="">
                            <input type="date" placeholder="Arrivée*">
                            <i></i>
                        </label>

                        <label for="">
                            <input type="date" placeholder="Départ*">
                            <i></i>
                        </label>

                        <label for="">
                            <input type="number" placeholder='Adultes'>
                        </label>

                        <label for="">
                            <input type="text" placeholder='Enfants'>
                        </label> <br>

                        <label for="" class="submit">
                            <button @click="startBooking()">
                                Réserver
                            </button>
                        </label>

                    </form>
                </div>
            </div>

            <div class="items">

                    <div class="item__left">
                        <div class="item">
                            <img src="public/images/icons/air-conditioning.svg" alt="">
                            Cimatisastion
                        </div>
                        <div class="item">
                            <img src="public/images/icons/door.svg" alt="">
                            Entrée privée
                        </div>
                        <div class="item">
                            <img src="public/images/icons/iron.svg" alt="">
                            Fer à repasser
                        </div>
                        <div class="item">
                            <img src="public/images/icons/microwave-oven.svg" alt="">
                            Four à micro-ondes
                        </div>
                        <div class="item">
                            <img src="public/images/icons/parking.svg" alt="">
                            Parking gratuit
                        </div>
                    </div>

                    <div class="item__right">
                        <div class="item">
                            <img src="public/images/icons/fridge.svg" alt="">
                            Réfrigirateur
                        </div>
                        <div class="item">
                            <img src="public/images/icons/hair-dryer.svg" alt="">
                            Sèches-cheveux
                        </div>
                        <div class="item">
                            <img src="public/images/icons/smart-tv.svg" alt="">
                            Télévision
                        </div>

                        <div class="item">
                            <img src="public/images/icons/parking.svg" alt="">
                            Vaiselles et couverts
                        </div>

                        <div class="item">
                            <img src="public/images/icons/wi-fi-zone.svg" alt="">
                            Wifi
                        </div>
                    </div>
            </div>

            <div class="gallery">
                    <div class="gallery__top">
                        <a href="public/images/image2.jpg">
                            <img src="public/images/image2.jpg" alt="Maison mwublés au Bénin" title="appartements meublés au Bénin">
                        </a>

                        <a href="public/images/image2.jpg">
                            <img src="public/images/image2.jpg" alt="Maison mwublés au Bénin" title="appartements meublés au Bénin">
                        </a>
                            <a href="public/images/image2.jpg">
                                <img src="public/images/image2.jpg" alt="Maison mwublés au Bénin" title="appartements meublés au Bénin">
                            </a>
                    </div>

                    <div class="gallery__bottom">
                        <a href="public/images/image2.jpg">
                            <img src="public/images/image2.jpg" alt="Maison mwublés au Bénin" title="appartements meublés au Bénin">
                        </a>

                        <a href="public/images/image2.jpg">
                            <img src="public/images/image2.jpg" alt="Maison mwublés au Bénin" title="appartements meublés au Bénin">
                        </a>
                    </div>
            </div>
        </div>

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
                                Réserver
                            </button>

                            <button class='details' @click='getAppartment(appartment.id)'>
                                Détails
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

    <?php include 'footer.php'; ?>

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
                return "public/images/" + pic;
            },
            getDetailId(id) {
                return id;
            }
        }
    }).mount('#app')
    </script>


</body>

</html>