import { Card } from "./Card.js";

let reponse = await fetch('./JS/cardgame.json');
let json = await reponse.json();
let data = creerLesObjets(json);
console.log("Nombres de played : " + data.length)
let mytable = document.getElementById("listeJoueur");

genererTableau(data);

function creerLesObjets(_data) {
    let result = []                                 //      creation deuxieme tableau
    for (let i = 0; i < _data.length; i++) {        //      qui recevra le json
        result[i] = new Card(_data[i]);
    }
    return result;
}

function genererTableau(_data) {                             //
    let monentete = mytable.createTHead();                  //   creation header
    let ligneTitre = monentete.insertRow();                 //
    mytable.setAttribute("border", "1px");                   //

    for (const key in _data[0]) {
        let myCell = document.createElement("th");
        myCell.setAttribute("style", "padding : 8px; border : 2px solid #ccc;  color : black");
        myCell.textContent = key;
        ligneTitre.appendChild(myCell);
    }



    Tableau(_data)
}

// ------------traduire json  en JS------------

function Tableau(_data) {
    let tBody = document.createElement('tbody')

    for (let elem of _data) {
        let row = tBody.insertRow()
        // console.log(elem)

        for (let item in elem) {
            let cell = row.insertCell()
            cell.textContent = elem[item]
            tBody.appendChild(row)
        }

    }

    mytable.appendChild(tBody)
}



let best = data[0];                             //      creation d une variable
for (let i = 0; i < data.length; i++) {         //  Question 1 :
    if (data[i].played > best.played) {         //      Le plus grand nombres de parties joué 
        best = data[i]                          //      avec le nom et nombre de victoires. 
    }
}
console.log(" Le plus grand nombre de parties : " + best.played + " joué par " + best.name + " avec " + best.victory + " parties gagné.")


let i = 0;                                                  //
let ratio = data[i].victory * 100 / data[i].played;         //  Qestion 2 :
for (let i = 0; i <data.length; i++){                       //      nom avec le meilleur ratio victoir/defaite 
    if (ratio.victory > 50) {                               //      par rapport au nombres de parties joué
        ratio = data[i]                                     //
    }
}
console.log(" Le joueur " +data[i].name + " à un ratio de " + ratio +  " % de match gagner sur " + data[i].played + " parties joué. ")