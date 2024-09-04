document.getElementById("btnrouge").addEventListener("click",function(){
    document.getElementById("code1").value="ff";
    document.getElementById("code2").value="00";
    document.getElementById("code3").value="00";

    let chaineCouleur="#" + document.getElementById("code1").value + document.getElementById("code2").value +  document.getElementById("code3").value
    document.body.style.backgroundColor=chaineCouleur;
})

document.getElementById("btnvert").addEventListener("click",function(){
    document.getElementById("code1").value="00";
    document.getElementById("code2").value="FF";
    document.getElementById("code3").value="00";
    
    let chaineCouleur="#" + document.getElementById("code1").value + document.getElementById("code2").value +  document.getElementById("code3").value
    document.body.style.backgroundColor=chaineCouleur;

})

document.getElementById("btnbleu").addEventListener("click",function(){
    document.getElementById("code1").value="00";
    document.getElementById("code2").value="00";
    document.getElementById("code3").value="FF";
    
    let chaineCouleur="#" + document.getElementById("code1").value + document.getElementById("code2").value +  document.getElementById("code3").value
    document.body.style.backgroundColor=chaineCouleur;

})

function changeColor(_rouge, _vert, _bleu){
    const monrouge = _rouge.value; 
    const monvert = _vert.value;
    const monbleu = _bleu.value;

    let chaineCouleur = "#" + monrouge + monvert + monbleu;     // 
    document.body.style.backgroundColor = chaineCouleur
}

function verifhexa (_zoneTexte){
   let chaine= (_zoneTexte.value).toLowerCase();
    let maRegex = /^[a-f0-9]{2}$/;                      // regex permet de verifiersi les valeurs saisi
                                                        //  sont correspondent et le g pour faire une analyse global
    if (maRegex.test(chaine)==true) {
        return true;
        
    } else {

        _zoneTexte.value="";
        _zoneTexte.focus();
        console.log("codeHexa non conforme veuillez recommencer !");
        

        return false
    }
}
//------------------------  blur (sortir du champs)  --------------------
document.getElementById("code1").addEventListener("blur", function(){
    if (verifhexa(document.getElementById("code1"))) {
    changeColor(  document.getElementById("code1"), document.getElementById("code2"), document.getElementById("code3"));  
    }
})

document.getElementById("code2").addEventListener("blur", function(){
    if (verifhexa(document.getElementById("code2"))) {
        changeColor(document.getElementById("code1"), document.getElementById("code2"), document.getElementById("code3"));
    }
})

document.getElementById("code3").addEventListener("blur", function(){
    if (verifhexa(document.getElementById("code3"))) {
        changeColor(document.getElementById("code1"), document.getElementById("code2"), document.getElementById("code3"));
    }
})

document.getElementById("code1", "code3", "code2" ).addEventListener("blur", function(){
    if (verifhexa(document.getElementById("code3", "code2", "code3"))) {
        changeColor(document.getElementById("code1")+ document.getElementById("code2")+ document.getElementById("code3"));
    }
})