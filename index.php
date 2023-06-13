<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + VUE</title>
     <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">

   <!--vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!--axios-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    
    <div id="app" >

        <header class="text-center">
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <h1> {{ titolo }} </h1>
                    </div>
                </div>

            </section>
        </header>
        <main class="text-center">
            <section class="container">
<!-- -->                
                <div class="row">
                    <div class="col-4 my-4 mx-auto">
                    <ul>
                        <template v-for="(oggetto , indice) in this.listaToDo ">
                            <li  :class="addClass(oggetto)">
                                <span @click="changeDone(indice)">{{ oggetto.text }}</span>
                                 <button class="my-2 mx-2 btn btn-primary" @click ="changeDone(indice)"> fatto </button>
                                 <button class="my-2 mx-2 btn btn-primary" @click ="remuve(indice)"> elimina </button>
                            </li>
                            <hr>
                        </template>
                    </ul>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-5 mx-auto">
                    <div class="input-group">
                        <input v-model="newData" @keyUp.enter="addNewData" type="text" class="form-control" placeholder="Inserisci la nuova attività">
                        <button @click="addNewData" class="btn btn-primary">Aggiungi</button>
                    </div>

                    <div class="input-group mt-4">
                        <button  class="btn btn-secondary">Elimina tutti</button>
                    </div>
                    </div>

                </div>
                
            </section>
            
        </main>
     
    </div>
  
 <script src="./main.js"></script>
</body>
</html>