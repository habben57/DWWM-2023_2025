namespace SuiteDeFibonacci
{
    internal class Program
    {
        static string SuiteFibonacci(int n)
        {
            Console.WriteLine("Hello, World!");

       
            int position;
            String resultat;                      // sera affiché à l’utilisateur à la fin du programme   
            long nbrePrecedent;                   // Nombre précédent dans la suite  
            long nbreCourant;                     // Nombre courant dans la suite 
            long nbreSuivant;                     // Nombre suivant dans la suite (celui qu’on est en train de calculer) 

            position = 2;
            resultat = "0\n1";
            nbrePrecedent = 0;                    // 1er nombre de la suite                              
            nbreCourant = 1;                      // 2ème nombre de la suite
            
            
            if (n > 2)
            {
                while (position < n)
                {
                    nbreSuivant = nbrePrecedent + nbreCourant;
                    resultat += "\n" + nbreSuivant;
                    nbrePrecedent = nbreCourant;
                    nbreCourant = nbreSuivant;
                    position++;

                }
            }

            else
            {
                n = 2;
            }
            return " Les " + n + " premiers nombres de la suite de fibonacci sont :\n" + resultat;

        }

        Console.WriteLine("Combien de nombre de la suite souhaitez vous afficher ?");
        int n;
        string saisie = Console.ReadLine();
        int.TryParse(saisie, out n);
        String test = SuiteFibonacci(n);
        Console.WriteLine(test);


    }
    
}

/*
           Variables 
           Position est un entier			// utilisé pour l’incrémentation 
           N est un entier 				// donnée fournie par l’utilisateur 

           Resultat est une chaine de caractère 	// sera affiché à l’utilisateur à la fin du programme 
           NbPrecedent est un entier 64 bits	    // Nombre précédent dans la suite  
           NbCourant est un  entier 64 bits	        // Nombre courant dans la suite  
           NbSuivant est un entier 64 bits		    // Nombre suivant dans la suite (celui qu’on est en train de calculer)  

           DEBUT PROGRAMME 

           Lire(N) 				// saisie par l’utilisateur 
           Position := 2 
           Resultat :=  "0\n1"  
           NbPrecedent := 0 		// 1er nombre de la suite  
           NbCourant := 1			// 2ème nombre de la suite 



           SI N EST SUPÉRIEUR À 2 ALORS 
               TANT QUE Position EST INFÉRIEUR À N FAIRE 
               NbSuivant := NbPrecedent + NbCourant 
               Resultat := Resultat, "\n",  NbSuivant 
               NbPrecedent := NbCourant 
               Position  := Position + 1 

           N := N + 1 

           FIN TANT QUE 
           SINON 
           N: = 2 

           FIN SI 

           Écrire "Les ", N, " premiers nombres de la suite de Fibonacci sont \n ", Resultat 

           FIN PROGRAMME  
           */