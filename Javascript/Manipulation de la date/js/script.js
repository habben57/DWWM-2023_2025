
function afficherDate() {
    
    let maDate = new Date();
    let annee = maDate.getFullYear();
    let mois = maDate.getMonth() + 1;
    let date = maDate.getDate();

    if (mois<10) {          // 
        mois="0"+mois;      // Peut etre remplace par une "ternaire" (trois operations : () ? et :)
                            // date = (date<10)?'0'+date : date ;
    }                       //
    if (date<10){
        date="0"+date;
    }
    
        let chaineDate = date + '/' + mois + '/' + annee;
    //chaineDate = maDate.toLocaleDateString();
    return chaineDate;
}

//let monBtnDate = document.getElementById('btnHeure');   // getElementById ancienne methode
let monBtnDate = document.querySelector('#btndate');   // le # fait appel a id suivi du nom
monBtnDate.addEventListener('click', function () {

    document.getElementById('txtdate').value = afficherDate();
});

//-------------------------------------------------------------------------------------------------------------------

function afficherHeure() {

    let monHeure = new Date();
    let heure = monHeure.getHours();
    let minute = monHeure.getMinutes();
    let seconde = monHeure.getSeconds();
    
    // if (heure<10){
    //     heure="0"+heure;
    // }                            
    // if (minute<10){                   
    //     minute="0"+minute;
    // }
    // if (seconde<10){
    //     seconde="0"+seconde;
    // }

    heure = (heure < 10) ? '0' + heure : heure;                 //
    minute = (minute < 10) ? '0' + minute : minute;             // meme chose que if au dessus
    seconde = (seconde < 10) ? '0' + seconde : seconde;         //  
    
    let chaineHeure = heure + ':' + minute + ':' + seconde;     
    document.getElementById("txtheure").value = chaineHeure;
   
    
    return chaineHeure;
}

// let monBtnHeure = document.querySelector('#btnheure');
// monBtnHeure.addEventListener('click', function () {              <----------heure qui change pas les secondes

//     document.getElementById('txtheure').value = afficherHeure();
// });

let monBtnHeure = document.querySelector('#btnheure');
monBtnHeure.addEventListener('click', function () {

    setInterval(afficherHeure, 1000);
});