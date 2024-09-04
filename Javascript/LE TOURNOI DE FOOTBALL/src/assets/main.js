import { Match } from "../Match.js";
import { Equipe } from "../Equipe.js";

const app = {
    data() {
        return {
            titre: 'Tournoi de Football',
            equipe: [],
            score: [],
            tabEquipes: [],
            tableauPrincipal: [],
            userInput: '',
            nbrEquipe: 0,
            nbrMatchs: 0,
        }
    },

    async mounted() {
        let response = await fetch('./tournoi/football.json');
        const json = await response.json();

        for (let i = 0; i < json.length; i++) {
            let equipe = new Match(json[i].team1, json[i].team2, json[i].score );


            this.tabEquipes.push(equipe);
        }
        console.log(this.tabEquipes);
    },

    methods: {

        calcNbrEquipe() {
            const cetEquipe = new Set();
            for (let i = 0; i < this.tabEquipes.length; i++) {
               cetEquipe.add(this.tabEquipes[i].team1)
               cetEquipe.add(this.tabEquipes[i].team2)
            }
            return cetEquipe.size
            
        },



        calcNbrMatch() {
            return this.tabEquipes.length * 2 //  fois deux pour match aller et retour
        },



    }


}

Vue.createApp(app).mount('#appFootball');