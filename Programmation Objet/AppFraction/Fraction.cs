using System.Runtime.CompilerServices;

namespace AppFraction
{
    public class Fraction
    {
        //-----------Attribut---------------
        private int numerator;
        private int denominator;
        private int newNumerator;
        private decimal newDenominator;

        //-----------Proprietés ---get-set-----------

        public int Numerator
        {
            get { return numerator; }
            private set { numerator = value; }
        }

        public int Denominator
        {
            get { return denominator; }
            private set { denominator = value; }
        }



        //------------constructeur vide-----------------fraction = numerateur/denominateur

        public Fraction()
        {
            this.numerator = 0;
            this.denominator = 0;
        }

        //-----------constructeur surchargé------------------------------




        public Fraction(int _numerator, int _denominator)
        {
            this.numerator = _numerator;
            this.denominator = _denominator;
        }

        public Fraction(int newNumerator, decimal newDenominator)
        {
            this.newNumerator = newNumerator;
            this.newDenominator = newDenominator;
        }

        public override string ToString()
        {
            string fraction = numerator + "/" + denominator;
            return fraction; //base.ToString();
        }

        //------------------manipulation fraction----------------------
        protected double Calcul(int _numerator, int _denominator)
        {
            return _numerator / _denominator;
        }

        public void Oppose()
        {
            numerator = -numerator;
        }

        public void Inverse()
        {
            (numerator, denominator) = (denominator, numerator);
        }

        public bool SuperieurA(Fraction _uneFraction)
        {
            if (_uneFraction.Calcul() > this.Calcul())
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        private double Calcul()                         // a revoir 
        {                                               // alternative a une troisieme possibilitée ?
            throw new NotImplementedException();        // 
        }

        public bool EgalA(Fraction _uneFraction)
        {
            if (_uneFraction.Calcul() != this.Calcul())
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        //   XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


        private int GetPgcd()
        {
            int a = this.numerator;
            int b = this.denominator;
            int pgcd = 1;
            if (a != 0 && b != 0)
            {
                if (a < 0) a = -a;
                if (b < 0) b = -b;
                while (a != b)
                {
                    if (a < b)
                    {
                        b = b - a;
                    }
                    else
                    {
                        a = a - b;
                    }
                }
                pgcd = a;
            }
            return pgcd;
        }

        public Fraction Plus(Fraction _uneFraction)
        {
            int newNumerator = this.numerator * _uneFraction.denominator + _uneFraction.numerator * this.denominator;
            int newDenominator = this.denominator * _uneFraction.denominator;
            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Moins(Fraction _uneFraction)
        {
            int newNumerator = this.numerator * _uneFraction.denominator - _uneFraction.numerator * this.denominator;
            int newDenominator = this.denominator * _uneFraction.denominator;
            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Multiplie(Fraction _uneFraction)
        {
            int newNumerator = this.numerator * _uneFraction.numerator;
            int newDenominator = this.denominator * _uneFraction.denominator;
            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Divise(Fraction _uneFraction)
        {
            (_uneFraction.numerator, _uneFraction.denominator) = (_uneFraction.denominator, _uneFraction.numerator);
            int newNumerator = this.numerator * _uneFraction.numerator;
            int newDenominator = this.denominator * _uneFraction.denominator;

            if (newDenominator == 0)
                throw new DivideByZeroException();
            else
                return new Fraction(newNumerator, newDenominator);
        }

        
    }
}

