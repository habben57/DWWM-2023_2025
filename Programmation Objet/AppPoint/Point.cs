namespace AppPoint
{

    //XXXXXXXXXXXXXXX  Class Point  XXXXXXXXXXXXXXXXXXXXXXXXXXXX
    public class Point
    {
        //--------------------attributs-----------------------------

        private double abscX;
        private double ordoY;
        

        //--------------------propriétés -- Getter-Setter --------------------------------------------

        public double _AbscX
        {
            get { return abscX; }
            private set { abscX = value; }
        }
        public double _Ordo_Y
        {
            get { return ordoY; }
            private set { ordoY = value; }-
        }

        //-------------constructeur par defaut à vide------------------------
        public Point()
        {
            this.abscX = 0;
            this.ordoY = 0;
        }

        //-------------constructeur avec parametres surchargé---------------------
        public Point(double _abscX, double _ordoY)
        {
            this.abscX = _abscX;
            this.ordoY = _ordoY;
        }

        public void Deplacer(double _depX, double _depY)
        {
            this.abscX += _depX;
            this.ordoY += _depY;
        }

        public void Permuter()
        {
            (this.abscX, this.ordoY) = (this.ordoY, this.abscX);
        }
        //------------------------------------------------------------------------------------------

        public Point SymetrieA()
        {
            return new Point(-abscX, ordoY);    //---inverse abscisse
        }

        public Point SymetrieO()
        {
            return new Point(abscX, ordoY * -1);    //---inverse ordonnee
        }

        public Point SymetrieOrigine()
        {
            return new Point(-abscX, -ordoY);   //---inverse abscisse et ordonnee
        }


        public override string ToString()
        {
            string coordonnes = "Le point a pour abscisse :\t" + this._abscX + " \n\tet pour ordonnée :\t\t" + this.ordoY;
            return coordonnes;
        }
    }
}


