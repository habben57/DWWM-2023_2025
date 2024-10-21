


using System.ComponentModel.DataAnnotations;

namespace AppCompte
{
    internal class Program
    {
        static void Main(string[] args)    
        {
            Console.WriteLine("\n------ affichage comptes methode toString() ----------------- \n");

            Compte c1 = new Compte(001, "habib", 3200, -1500);      // creation des comptes
            Compte c2 = new Compte(002, "haddock", 5000, -2000);    //
            
            c1.Crediter(122);       //crediter
            Console.Write(c1);      //solde compte crediter

            Console.WriteLine("\n------ affichage comptes apres operation() ----------------- \n");

            bool ok = c2.Debiter(8200);
            Console.WriteLine("\t"+c2.ToString());
            
            c2.Debiter(2684);
            Console.WriteLine("\tNouveau solde compte numero 2 : "+c2.SoldeInitial);
            if (c2.Virement(c1, 7001)==true)
            {
                Console.WriteLine("virement réussi \n");
            } else
            {
                Console.WriteLine("\tSolde insuffisant virement non autorisé \n");
            }

            c1.Virement(c2,1500 );
            Console.WriteLine("\t" + c2.ToString(), "\n\t" + c1.ToString());

            Console.WriteLine(c1.ToString());
            Console.WriteLine(c2.ToString());
            Console.WriteLine("------ fin affichage----------------- \n" );



            Console.ReadLine();

        }

      
    }

    
}