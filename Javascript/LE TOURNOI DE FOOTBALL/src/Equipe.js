class Equipes {
    constructor(_equipes) {
        this.team1 = '';
        this.team2 = '';
        this.score = '';

        // this.equipe1 = "";
        // this.equipe2 = "";
        // this.score1 = "";
        // this.score2 = "";
        // this.gagnant1 = "";
        // this.gagnant2 = "";
        // this.nbrMatch = 0;
        Object.assign(this, _equipes);

    }
   
}


export { Equipes }