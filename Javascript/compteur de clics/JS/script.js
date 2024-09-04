const counter1 = document.getElementById('counter1')    //initialisation counter
const counter2 = document.getElementById('counter2') 
const counter3 = document.getElementById('counter3')


const btn1 = document.getElementById('nbclick1')        // initialisation btn
const btn2 = document.getElementById('nbclick2')
const btn3 = document.getElementById('nbclick3')
const btn4 = document.getElementById('reset')
const btn6 = document.getElementById('reset3')


let count1 = 0 
let count2 = 0 
let count3 = 0                                         // mise a zero count

btn1.addEventListener('click', increment1)              // addEvent...(a chaque click incrementation)
btn2.addEventListener('click', increment2) 
btn3.addEventListener('click', desincremente1) 
btn4.addEventListener('click', reinitialisation) 
btn6.addEventListener('click', reinitialisation2)            

//-----------1er compteur + 1 -----------------------
function increment1(){                                  // fonction pour l'incrementation
    count1++                                            // incrementation du bouton            
    counter1.textContent = count1                       // bouton envoi la valeur a counter
}

//-----------2eme compteur + 2 ---------------------
let a = 0;

function increment2(){     
    a += 2
    counter2.textContent = a 
}

//------------3eme compteur - 1 ------------------

function desincremente1(){
    count2--
    counter3.textContent = count2
}
 
// -------------reset a 0 ----------------

 
 function reinitialisation(){
       
        count1 = 0
        // count3 = 0

        counter1.textContent = count1  
        // counter3.textContent = count3
 }

function reinitialisation2(){
    count3 = 0
    counter3.textContent = count3
}