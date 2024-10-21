using System;
using System.Collections.Generic;
using System.Linq;
using System.Numerics;
using System.Text;
using System.Threading.Tasks;

namespace AppCompte
{



    //XXXXXXXXXXXXXXX  Class Compte  XXXXXXXXXXXXXXXXXXXXXXXXXXXX
    public class Compte
    {
 //--------------------attributs-----------------------------

        private int numero;
        private string nomTitulaire;
        private double soldeInitial;
        private double decouvertAutorise;

 //--------------------propriétés -- Getter-Setter --------------------------------------------

       public int Numero
        {  
            get { return numero; } 
           
        }
       public string NomTitulaire
        {
            get { return nomTitulaire; }
         
        }

       public double SoldeInitial
        {
            get { return soldeInitial; }
           private set { soldeInitial = value; }
        }
       
       public double DecouvertAutorise
        {
            get { return decouvertAutorise; }
            private  set { decouvertAutorise = value; }
        }
  

 //-------------constructeur par defaut à vide------------------------

        public Compte()             // constructeur toujours public
        { 
            this.numero = 0;
            this.nomTitulaire = "";
            this.soldeInitial = 0;
            this.decouvertAutorise = 0;
        }
 //-------------constructeur avec parametres surchargé---------------------
        public Compte(int _numero, string _nomTitulaire, double _soldeInitial, double _da)
        {
            this.numero = _numero;
            this.nomTitulaire = _nomTitulaire;
            this.soldeInitial = _soldeInitial;
            this.decouvertAutorise = _da;
        }

        public void Crediter(double montant)
        {
            this.soldeInitial += montant;
        }

        public bool Debiter(double montant)
        {
            if(this.soldeInitial-montant>= this.decouvertAutorise)     // condition si "soldeInitial - montant >= this.decouvertAutorise" 
            {                                                          // alors soldeInitial -= montant
                this.soldeInitial -= montant;

                return true;
            }
            
            else
            {
                return false;
            }

        }
            public bool Virement(Compte _autreCompte, double _montant )
        {
            if (this.Debiter(_montant) == true)
            {
                _autreCompte.Crediter(_montant);
                return true;

            }
            else 
            { 
            
                return false;
            }

        }
       
        public override string ToString()
        {
            return "\n\tCompte Numero : " + this.numero + " \n\tTitulaire du compte : " + this.nomTitulaire +" \n\tSolde du compte : " + this.soldeInitial +"\n \tDécouvert Autorisé" + this.decouvertAutorise +"\n\n";       
        }

       
    }
}
