const app = {
    data(){
        return {
            dateActuelle: new Date(),
            heureActuelle: new time,
            dateDuJour:''     
        }
    },
    
    methods: {
        dateJour() {
            this.dateDuJour = this.dateActuelle.getFullDay()+" / "+ this.dateActuelle.getFullMonth()+" / "+this.dateActuelle.getfullYear()
        }

        hourJour() {
            this.dateDuJour = this.dateActuelle.getfullHour()+" : "+this.dateDuJour.getfullHour()+" / "+this.dateActuelle.getfullsecond()
        }
    }



}




Vue.createApp(app)
    .mount('#app') 
