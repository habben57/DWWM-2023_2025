import { Eleves } from "../Eleves.js";

const app = {
    data() {
        return {
            title: 'L\'evaluation',         //
            name: [],                       //  
            notes: [],                      //
            results: [],                    //
            userInput1: '',
            userInput2: '',
            noteSup: '',
            elimine: 0

        }
    },

    async mounted() {
        let response = await fetch('./data/eval.json');
        const json = await response.json();

        for (let i = 0; i < json.length; i++) {        //      qui recevra le json
            let eleve = new Eleves(json[i]);
            this.notes.push(eleve);
        }

        console.log(this.notes);
        
        this.trinote()
        this.dessusMoyenne()
        this.nbrObtenu()
    },

    methods: {
        Ajouter() {
            // const nom = document.getElementById("identite").value;
            // const note = document.getElementById("notes").value;
            const nom = this.userInput1;
            const note = this.userInput2;
            const bob = { "fullname": nom, "grade": note };
            let eleve = new Eleves(bob);
            if (!eleve.noteValide()) {
                console.log(this.grade)
                return
            }

            this.notes.push(eleve);         //  
            this.trinote()                  //
            this.dessusMoyenne()            //
            this.nbrObtenu()
        },

        /** @return {Number} Retourne le nombre d etudients dans la liste*/
        calcNbeEleve() {
            return this.notes.length
        },

        trinote() {
            this.notes.sort(function (a, b) { return a.grade - b.grade }).reverse();    //reverse() pour tri decroissant
        },

        moyenneClasse() {
            let somme = 0;
            console.log(this.notes)
            for (let i = 0; i < this.calcNbeEleve(); i++) {
                let maNote = this.notes[i];
                somme += maNote.grade;
            }
            return somme / this.calcNbeEleve()
        },

        // -------------
        dessusMoyenne() {
            this.noteSup = 0;
            let moyenne = this.moyenneClasse()
            console.log(moyenne)
            for (let i = 0; i < this.calcNbeEleve(); i++) {
                console.log(this.notes[i].grade)        //les notes du tableau [i]
                if (this.notes[i].grade >= moyenne) {
                    this.noteSup++;
                }
            }

        },

        //-------------
        nbrObtenu() {
            for (let i = 0; i < this.notes.length; i++){
                if (this.notes[i].obtenu == "Non") {
                    this.elimine++;                  
                }
            }
            return this.elimine          
        }
       
    }
}
Vue.createApp(app).mount('#evaluation')
