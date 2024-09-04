class Match {
    constructor(_team1, _team2, _score) {
        this.team1 = _team1;
        this.team2 = _team2;
        this.score1 = "";
        this.score2 = "";
        this.divscore(_score);
        this.gagnant1 = this.trouveGagnant(this.score1)
        this.gagnant2 = this.trouveGagnant(this.score2)
    }
// ---------------separation score1 et score2------------
    divscore(scoreTab) {
        this.score1 = scoreTab[0];
        this.score2 = scoreTab[1];

    }//


    trouveGagnant(score) {
        let scoreTmp = score.split('-');
        let scoreTeam1 = scoreTmp[0];
        let scoreTeam2 = scoreTmp[1];

        if (scoreTeam1 > scoreTeam2) {
            return this.team1;
        }
        if (scoreTeam1 < scoreTeam2) {
            return this.team2; console.log(trouveGagnant());
        }

        return ('egalite')
    }
   
}
export { Match }