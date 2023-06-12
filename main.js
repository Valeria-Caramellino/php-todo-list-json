const { createApp } = Vue;
createApp({
    data(){
        return{
            titolo: "Ben Tornato Vue!",
            img :"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg",
            riprendoClasse:"green",
            api:"api.php",
            ArrayStudenti:[],
        }
    },
    methods:{
       /* 
        chiamata(){
            axios.get(this.api).then((risposta) => {
                console.log("Dati ricevuti: ", risposta.data);
            });
        },
        */
    },
    mounted(){
        console.log("Buon giorno vue!");

        axios.get(this.api).then((oggetto) => {
            console.log("Dati ricevuti: ", oggetto.data);
            const risposta = oggetto.data;
            this.ArrayStudenti = risposta;
            console.log("array è", this.ArrayStudenti[0].name)
        });
        
    }
}).mount("#app");