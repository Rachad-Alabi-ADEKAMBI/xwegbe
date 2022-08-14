const { createApp } = Vue
//const cors = require('cors');
//app.use(cors());

createApp({
  data() {
    return {
      appartments:[/*
             { id: '1', name: 'appartement 1', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2', picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg'},
      { id: '2', name: 'appartement 2', price: '70 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '3'},
      { id: '3', name: 'appartement 3', price: '35 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '1'},
      { id: '4', name: 'appartement 4', price: '50 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2'},
      { id: '5', name: 'appartement 5', price: '40 000', short_description: 'Lorem ipsum dolor sit amet consectetur adipisicing elitm  Lorem ipsum dolor sit amet consectetur adipisicing elitm ', rooms: '2'}
      */ ],
            picture_1: 'https://www.xwegbe.com/wp-content/uploads/2022/05/appartement1-1.jpg',
      
      errorMsg: "",
          allData: '',
          msg: ''
      }
      },
      mounted: function(){
          this.getAllFreeAppartments();
      //  this.fetchAllData();
      },
          methods: {
            getAllFreeAppartments(){
             axios.get("https://xwegbe.com/wp-content/plugins/liste-appartements/model.php?action=getAllFreeAppartments").then(response => this.appartments = response.data);
           },
           book(){
            alert('book');
           }
    }
}).mount('#app')
