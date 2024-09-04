
const counter = document.getElementById('counter')

const btn1 = document.getElementById('nbrclick')
const btn2 = document.getElementById('reset')
const btn3 = document.getElementById('nbrclick2')

let count = 0


btn1.addEventListener('click', increment)
btn2.addEventListener('click', reinitialiser)
btn3.addEventListener('click', desincrement) 

 
function increment(){
    count++
    counter.textContent = count
    couleur()
}

function reinitialiser(){
    count = 0
    counter.textContent = count
    couleur()
}

function desincrement(){
    count--
    counter.textContent = count
    couleur()
}

function couleur(){
    console.log(counter)
    //counter.style.color = count < 0 ? 'red' : 'blue'
    if(count < 0){
        counter.style.color = 'red'
    }else{
        counter.style.color = 'blue'
    }
}

