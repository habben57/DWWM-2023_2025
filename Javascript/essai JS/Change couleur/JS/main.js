const testClr = /[a-f0-9]{2}/       // n accepte que les lettres de A à F et les chiffre de 0 à 9
                                    // n accepte que 2 variables

const app = {
    data(){
        return{
            backgroundClr : '#b1cefc',          //
            redInput : 'ff',                    //      Attributs
            greenInput : 'c1',                  //
            blueInput : '2b'                    //
        }
    },
    methods: {
        changeColor(_event){
            this.backgroundClr = _event.target.dataset.clr;
        },

        inputColor() {
            this.backgroundClr = '#' + this.redInput + this.greenInput + this.blueInput
        }
    }
}

Vue.createApp(app)
    .mount('#appColors');