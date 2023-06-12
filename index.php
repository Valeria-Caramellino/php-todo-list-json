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
                        <h1 :class="riprendoClasse"> {{ titolo }} </h1>
                    </div>
                </div>

            </section>
        </header>
        <main class="text-center">
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="rounded-circle" :src="img" alt="mare">
                    </div>
<!--
                    <div class="col-12">
                        <button @click="chiamata" class="btn btn-success my-3">
                            click
                        </button>
-->
                    </div>

                </div>
                <div class="row">
                    <div class="col-4">
                        <p>
                            <!--
                            {{ this.ArrayStudenti[0].name }}
-->
                        </p>
                    </div>
                
                </div>

            </section>
            
        </main>
    
    </div>
    <script src="./main.js"></script>

</body>
</html>