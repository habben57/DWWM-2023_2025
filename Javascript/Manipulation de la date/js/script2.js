
function afficherQte() {
   
    let maQte = new Qte();
    let Qte = maQte.get
}

function afficherPrixUnit(){
    let monPU = new PU();
    let PU = monPU.get
}

function calculLigne(){
    
let qt1=document.getElementById("qte1").value;
let pu1=document.getElementById("pu1").value;
let qt2=document.getElementById("qte2").value;
let pu2=document.getElementById("pu2").value;



//let ptotal=document.getElementById("prixtotal3").value;
let prixtotal1=Number(qt1)*Number(pu1);
document.querySelector("#prixtotal1").value= prixtotal1;
let prixtotal2= Number(qt2)*Number(pu2);
document.querySelector("#prixtotal2").value= prixtotal2;


document.querySelector("#prixtotal3").value= prixtotal1+prixtotal2;



}


document.addEventListener("DOMContentLoaded", calculLigne);
 
document.getElementById("qte1").addEventListener("input", function(){
    calculLigne();
 });

 document.getElementById("pu1").addEventListener("input", function(){
    calculLigne();
 });

 document.getElementById("qte2").addEventListener("input", function(){
    calculLigne();
 });
 
 document.getElementById("pu2").addEventListener("input", function(){
    calculLigne();
 });


