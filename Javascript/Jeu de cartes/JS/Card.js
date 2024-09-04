class Card 
{
    constructor(_card) {
        this.id = 0 ;
        this.name = "";
        this.description = "";
        this.level = "";
        this.power = "";
        this.attack = "";
        this.armor = "";
        this.damage = "";
        this.mitigation = "";
        this.played = "";
        this.victory = "";
        this.defeat = "";
        this.draw = "";
        Object.assign(this, _card);
    }
}

export { Card }