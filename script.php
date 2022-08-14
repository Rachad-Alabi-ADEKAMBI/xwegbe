,
           showAdd(){
                this.addAppartment = true;
                this.list = false;
           },
           book(){
            this.msg = 'yfyu';
           },
           showList(){
            this.list = true;
           }

           <div class="list__box book-box" v-if='1>0'>
        <div class="close">
        <font-awesome-icon icon="fa-regular fa-xmark" />
        </div>


        <h1 class="list__box__title">
                Ajouter appartement
        </h1>

        <div class="list__box__form">
        <form>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nom de l'appartement" required>
                </div>
               
            </div> <br>

            <div class="row">
                <div class="col-6">
                <input type="text" class="form-control" nmae="price" placeholder="Prix" required>
                </div>

                <div class="col-6">
                <input type="text" class="form-control" name="rooms" placeholder="Chambres" required>
                </div>
            </div> <br>

            <div class="form-group">
                <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> <br>

            <div class="form-group">
                <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> <br>

            <div class="row">
                <div class="col-4">
                <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

                <div class="col-4">
                <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

                <div class="col-4">
                <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

               
            </div> <br>


            <div class="row">
                <div class="col-4">
                <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

                <div class="col-4">
                <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

                <div class="col-4">
                <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                </div>

               
            </div> <br>


            <div class="row">
                <div class="col-4">
                    <label for="">Wifi</label>
                <input type="checkbox"  class="choice"  name="wifi" placeholder="">
                </div>
                <div class="col-4">
                    <label for="">Climatisation:</label>
                <input type="checkbox"  class="choice" name="air-conditionner" placeholder="">
                </div>
                <div class="col-4">
                    <label for="">gratuit</label>
                <input type="checkbox"  class="choice" name='parking' placeholder="Zip">
            </div> <br> <br>

            <div class="row">
                <div class="col-4">
                    <label for="">Wifi</label>
                <input type="checkbox"  class="choice"  name="wifi" placeholder="">
                </div>
                <div class="col-4">
                    <label for="">Climatisation:</label>
                <input type="checkbox"  class="choice" name="air-conditionner" placeholder="">
                </div>
                <div class="col-4">
                    <label for="">gratuit</label>
                <input type="checkbox"  class="choice" name='parking' placeholder="Zip">
            </div>
            <br> <br>

            <button @click="addAppartment()" class="button view">
                Valider
            </button>

          
        </form>
        </div>
    </div>


    <div class="list__box book-box">
            <div class="close">
                Fermer
            </div>


            <h1 class="list__box__title">
                    Ajouter appartement
            </h1>

            <div class="list__box__form">
                <form>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Nom de l'appartement" required>
                        </div>
                    
                    </div> <br>

                    <div class="row">
                        <div class="col-6">
                        <input type="text" class="form-control" nmae="price" placeholder="Prix" required>
                        </div>

                        <div class="col-6">
                        <input type="text" class="form-control" name="rooms" placeholder="Chambres" required>
                        </div>
                    </div> <br>

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> <br>

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> <br>

                    <div class="row">
                        <div class="col-4">
                        <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                        <div class="col-4">
                        <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                        <div class="col-4">
                        <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                    
                    </div> <br>


                    <div class="row">
                        <div class="col-4">
                        <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                        <div class="col-4">
                        <input type="file"   name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                        <div class="col-4">
                        <input type="file"  name="picture_1" class="form-control" placeholder="Image1" required>
                        </div>

                    
                    </div> <br>


                    <div class="row">
                        <div class="col-4">
                            <label for="">Wifi</label>
                        <input type="checkbox"  class="choice"  name="wifi" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="">Climatisation:</label>
                        <input type="checkbox"  class="choice" name="air-conditionner" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="">gratuit</label>
                        <input type="checkbox"  class="choice" name='parking' placeholder="Zip">
                    </div> <br> <br>

                    <div class="row">
                        <div class="col-4">
                            <label for="">Wifi</label>
                        <input type="checkbox"  class="choice"  name="wifi" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="">Climatisation:</label>
                        <input type="checkbox"  class="choice" name="air-conditionner" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="">gratuit</label>
                        <input type="checkbox"  class="choice" name='parking' placeholder="Zip">
                    </div>
                    <br> <br>

                    <button class="button view">
                        Valider
                    </button>

                
                </form>
            </div>
        </div>