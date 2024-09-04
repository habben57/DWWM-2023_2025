class Eleves {
    constructor(_eleves) {
        this.nom = "";
        this.prenom = "";
        this.grade = "";
        this.obtenu = "";
        this.nbrObtenu = 0;
        Object.assign(this, _eleves);

       //----------split le nom a partir de l espace indiquer ---------
        let nomTmp = this.fullname.split(' '); // ['Armanetti', 'Michaël']
        this.nom = nomTmp[0];
        this.prenom = nomTmp[1];
       
        //console.log()
   
        //-----------déterminer obtenu ou non ---------------
        if (this.grade >= 12) {         //      noteValide() {
            this.obtenu = "Oui";        //      return this.grade >= 0 && this.grade <= 20
        } else {                        //      }
            this.obtenu = "Non";
            this.nbrObtenu++;
        }
        console.log(this.obtenu)

        
    }
    
    
}

export { Eleves }
