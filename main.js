const { createApp } = Vue;
createApp({
    data(){
        return{
            titolo: "Lista delle cose da fare:",
            riprendoClasse:"",
            api:"api.php",
            listaToDo:[],
            newData :{
                "text":"",
                "done" : false
            },
            
        }
    },
    methods:{
        /*chiamata iniziale*/
        chiamata(){
          axios.get(this.api).then((oggetto) => {
            console.log("Dati ricevuti: ", oggetto.data);
            const risposta = oggetto.data;
            this.listaToDo = risposta;
            console.log("array è", this.listaToDo)
        }); 
        },
        addNewData(){
            const dato = { newData: this.newData };

            this.PrendiData(dato);
        },
        remuve(indice){
            /*this.listaToDo.splice(indice, 1)*/
            console.log("hai cliccato su:", indice);
           
            const dato = {deleteTask: indice};
           

            this.PrendiData(dato);
           
        },
        PrendiData(dato) {
            
            //Faccio una chiamata POST ad apiUrl, passando il data
            axios.post(this.api, dato, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((oggetto) => {
                console.log("Dati ricevuti: ", oggetto.data);
                this.listaToDo = oggetto.data;
                this.newData.text = "";
            });
        },
        changeDone(indice){
            this.listaToDo[indice].done = !this.listaToDo[indice].done 
        },
        addClass(oggetto){
            riprendoClasse = "linea";
            if(oggetto.done == true){
                return riprendoClasse;
            }
        },
        
        
    },
    mounted(){
        console.log("ciao");

        this.chiamata();
        
    }
}).mount("#app");