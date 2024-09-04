const app = {
    data(){
        return {
            dateNaissance: null,
            dateactuelle: new Date(),
            monAge: null,
            signe: ''
        }
    },
    methods: {
        age() {
        this.monAge= this.dateactuelle.getFullYear() - new Date(this.dateNaissance).getFullYear()
            console.log(this.monAge);
            this.signe = this.astro();
          
        },
        astro() {

            let dateU = new Date(this.dateNaissance);

            let signesAstro = ['Capricorne', 'Verseau', 'Poisson', 'Belier', 'Taureau', 'Gemeaux',
                               'Cancer', 'Lion', 'vierge', 'Balance', 'Scorpion', 'Sagitair']

            let signes = [
                new Date(dateU.getFullYear() + '-01-20'), // Capricorne
                new Date(dateU.getFullYear() + '-02-19'),  // Verseau
                new Date(dateU.getFullYear() + '-03-21'), // Poisson
                new Date(dateU.getFullYear() + '-04-20'), // Belier
                new Date(dateU.getFullYear() + '-05-21'), // Taureau
                new Date(dateU.getFullYear() + '-06-21'), // Gemeaux
                new Date(dateU.getFullYear() + '-07-23'), // Cancer
                new Date(dateU.getFullYear() + '-08-23'), // Lion
                new Date(dateU.getFullYear() + '-09-23'), // vierge
                new Date(dateU.getFullYear() + '-10-23'), // Balance
                new Date(dateU.getFullYear() + '-11-22'), // Scorpion
                new Date(dateU.getFullYear() + '-12-22'), // Sagitaire
            ];

            for (let i = 0; i < signes.length; i++) {
                if (dateU < signes[i]) {
                    console.log(signesAstro[i])
                    return signesAstro[i];
                }
            }

            /*switch (new Date(this.dateNaissance).getMonth()) {
                case 12:
                    signe = 'Capricorne.png'
                    break
                case 1:
                    signe = 'Verseau.png'
                    break
                case 2:
                    signe = 'Poisson.png'
                    break
                case 3:
                    signe = 'Belier.png'
                    break
                case 4:
                    signe = 'Taureau.png'
                    break
                case 5:
                    signe = 'Gemeaux.png'
                    break
                case 6:
                    signe = 'Cancer'
                    break
                case 7:
                    signe = 'Lion'
                    break
                case 8:
                    signe = 'Vierge'
                    break
                case 9:
                    signe = 'Balance'
                    
                    break
                case 10:
                    signe = 'Scorpion'
                    break
                case 11:
                    signe = 'Sagittaire'
                    break
                default:
                    signe = 'toto'
                    break
            }*/
        }
    }
}

Vue.createApp(app)
    .mount('#app') 













// --------------------afficherDate---dateDiff-------------------------------------------------------------------

// const btncalculer = document.getElementById('btncalculer')
// const dateNaissance = document.getElementById('dateNaissance')

//  function startTime() {
    //     var today = new Date();
    //     var h = today.getHours();
    //     var m = today.getMinutes();
    //     m = checkTime(m);
    //     document.getElementById('time').innerHTML =
    //     "Local Time : "+h + ":" + m;
    //     var t = setTimeout(startTime, 500);
    //   }
    //   function checkTime(i) {
    //     if (i < 10) {i = "0" + i};  // add zero si nombre < 10
    //     return i;
    //   }
    //    startTime();
    
    // function afficherDate() {
        
    //     let maDate = new Date();
    //     let annee = maDate.getFullYear();
    //     let mois = maDate.getMonth() + 1;
    //     let date = maDate.getDate();
    
    //     if (mois<10) {          // 
    //         mois="0"+mois;      // Peut etre remplace par une "ternaire" (trois operations : () ? et :)
    //                             // date = (date<10)?'0'+date : date ;
    //     }                       //
    //     if (date<10){
    //         date="0"+date;
    //     }
        
    //         let chaineDate = date + '/' + mois + '/' + annee;
    //     //chaineDate = maDate.toLocaleDateString();
    //     return chaineDate;
    // }
    // let monBtnCalculer = document.querySelector('#btncalculer');   // le # fait appel a id suivi du nom
    // monBtnDate.addEventListener('click', function () {
    
    //     document.getElementById('formResult').value = afficherDate();
    // });
    
    // methods: {
    //         dateDiff(dateNaissance, dateactuelle){
    //             let age = {}							// Initialisation du retour
    //             let tmp = dateactuelle - dateNaissance
            
    //             tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
    //             age.sec = tmp % 60;					// Extraction du nombre de secondes
            
    //             tmp = Math.floor((tmp-age.sec)/60);	// Nombre de minutes (partie entière)
    //             age.min = tmp % 60;					// Extraction du nombre de minutes
            
    //             tmp = Math.floor((tmp-age.min)/60);	// Nombre d'heures (entières)
    //             age.hour = tmp % 24;					// Extraction du nombre d'heures
                
    //             tmp = Math.floor((tmp-age.hour)/24);	// Nombre de jours restants
    //             age.day = tmp;
                
    //             tmp = math.floor((tmp-age.day)/365)     // 
    //             age.day = tmp % 365;
                
    //             tmp = age
    //             return ;
    
    //             }
            // calculAge(){
            //     return  age((dateactuelle.getTime() - dateNaissance.getTime()) / 31536000000).toFixed(0);
            // },
    
            
    
    
    // }