const monTabListe = new Array('Mike Dev ', 'John Makenzie ','habib benmessaoud', 'Léa Grande ');
for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");

}
 

monTabListe.push('Tristan Bernard');
console.log('après ajout en push \n');
for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}
// const tabresult = monTabListe.slice(0, 2);
// console.log('supression en slice \n');
// for (let i = 0; i < tabresult.length; i++) {
//     console.log(tabresult[i] + ", ");
// }
// monTabListe.splice(2, 1);
// console.log('\n \n Utilisation splice pour supprimer un element \n');
//---------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}
monTabListe.splice(2, 0, "Ariana Grande");
console.log('\n \n Utilisation splice pour ajouter un element \n');
//---------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}

monTabListe.pop();
console.log('\n \n Utilisation pop pour supprimer le dernier element \n');
//---------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}
monTabListe.unshift("Tristan Grandgirard");
console.log('\n \n Utilisation unshift pour ajouter 1 element en debut de tableau \n');
//----------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}
monTabListe.shift();
console.log('\n \n Utilisation shift pour supprimer 1 element en debut de tableau \n');
//------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}

console.log('\n \n Utilisation boucle for of pour recupérer les valeurs d un tableau \n');
//------------------------------------------------

for (const element of monTabListe) {
    console.log(element + ", ");
}

//------------------------------------------------
for (let i = 0; i < monTabListe.length; i++) {

    let monItem = document.createElement("li");
    monItem.textContent = monTabListe[i];
    monItem.setAttribute("class", "liste");
    let wrap = document.querySelector("#liste");
    wrap.appendChild(monItem);

}

let montab=document.getElementById("personnes");
let montbody=montab.createTBody();

for (let i=0; i<monTabListe.length; i++){
    
      let lignecourante= montbody.insertRow();              //
      let tabNom = monTabListe[i].split(" ");               //
      let cel1=lignecourante.insertCell();                  //  Creation mail 
      cel1.textContent=tabNom[1];                           //
      let cel2=lignecourante.insertCell();                  //
      cel2.textContent=tabNom[0];                           //

      let cel3=lignecourante.insertCell();
      let email= tabNom[0]+"."+tabNom[1]+"@example.com";
      cel3.textContent=email;
    }

for (let i = 0; i < monTabListe.length; i++) {
        console.log(monTabListe[i] + ", ");
    }
    monTabListe.splice("Tristan Grandgirard");
    console.log('\n \n Utilisation unshift pour ajouter 1 element en debut de tableau \n');

for (let i=0; i<monTabListe.length; i++){
    monTabListe.splice(4, 1, "Supprimer");
    }

document.querySelector('#btndialogue').addEventListener('click', ajouter);

function ajouter() {
    document.getElementById('paragraphe').textContent = document.getElementById('btnprenom').value + "." + document.getElementById('btnnom').value + " est ajouté !";
}
    
// ------------------------------------------------------------------------

for (let i = 0; i < monTabListe.length; i++) {
    console.log(monTabListe[i] + ", ");
}
monTabListe.splice("habib BENMESSAOUD");
console.log('\n \n Utilisation splice pour ajouter un element \n');





/*
⢀⡴⠑⡄⠀⠀⠀⠀⠀⠀⠀⣀⣀⣤⣤⣤⣀⡀
⠸⡇⠀⠿⡀⠀⠀⠀⣀⡴⢿⣿⣿⣿⣿⣿⣿⣿⣷⣦⡀
⠀⠀⠀⠀⠑⢄⣠⠾⠁⣀⣄⡈⠙⣿⣿⣿⣿⣿⣿⣿⣿⣆
⠀⠀⠀⠀⢀⡀⠁⠀⠀⠈⠙⠛⠂⠈⣿⣿⣿⣿⣿⠿⡿⢿⣆
⠀⠀⠀⢀⡾⣁⣀⠀⠴⠂⠙⣗⡀⠀⢻⣿⣿⠭⢤⣴⣦⣤⣹⠀⠀⠀⢀⢴⣶⣆
⠀⠀⢀⣾⣿⣿⣿⣷⣮⣽⣾⣿⣥⣴⣿⣿⡿⢂⠔⢚⡿⢿⣿⣦⣴⣾⠁⠸⣼⡿
⠀⢀⡞⠁⠙⠻⠿⠟⠉⠀⠛⢹⣿⣿⣿⣿⣿⣌⢤⣼⣿⣾⣿⡟⠉
⠀⣾⣷⣶⠇⠀⠀⣤⣄⣀⡀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
⠀⠉⠈⠉⠀⠀⢦⡈⢻⣿⣿⣿⣶⣶⣶⣶⣤⣽⡹⣿⣿⣿⣿⡇
⠀⠀⠀⠀⠀⠀⠀⠉⠲⣽⡻⢿⣿⣿⣿⣿⣿⣿⣷⣜⣿⣿⣿⡇
⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣷⣶⣮⣭⣽⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠀⣀⣀⣈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇
⠀⠀⠀⠀⠀⠀⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠃
⠀⠀⠀⠀⠀⠀⠀⠹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠁
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠛⠻⠿⠿⠿⠿⠛⠉
*/