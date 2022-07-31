const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                allFreeAppartments: [],
                picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg',
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
                user_fulname: '',
                city: '',
                country: '',
                message: ''
            }
        },
        mounted: function() {
            this.getAllFreeAppartments();
        },
        methods: {
            getAllFreeAppartments() {
                axios.get('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAllFreeAppartments').then(
                    response => this.allFreeAppartments = response.data);
                this.showAllFreeAppartments = true;
                this.showBooking = false;
                this.showResults = false;
            },
            getAppartment(appartment_id) {
                axios.get('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAppartment&id=' + appartment_id).then(
                    response => this.details = response.data);
                this.showDetails = true;
                this.showAllFreeAppartments = false;
            },
            bookAppartment(appartment_id) {
                axios.get('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAppartment&id=' + appartment_id).then(
                    response => this.details = response.data);
                axios.get('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=bookAppartment&id=' + appartment_id).then(
                    response => this.appartmentBooked = response.data);
                this.showAllFreeAppartments = false;
                this.showDetails = false;
                this.showBooking = true;
                this.showResults = false;
            },
            startBooking(appartment_id) {
                axios.get('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAppartment&id=' + appartment_id).then(
                    response => this.details = response.data);
                axios.post('https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=startBooking&id=' +
                    appartment_id).then(
                    response => this.message = response.data);
                this.showDetails = false;
                this.showBooking = true;
                this.showAllFreeAppartments = false;
            },
            getImgUrl(id){
                return "public/img/appartments/" + picture_1
            }
        }
    }).mount('#app')      