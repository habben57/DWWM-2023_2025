using System.Globalization;

namespace evaluationCalculTableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello, World!");



            //-------variable---------

            //double moyenneValeurs ;
            //double sommeValeurs = 0;
            //double maxNbre;
            //int i;

            //int[] valeurs = { 2, 4, 1, 8, 6, 14, 12, 25, 7, 42 };

            //maxNbre = valeurs.Max();

            ////-----------traitement---------

            //for (i = 0; i < valeurs.Length; i++)
            //{
            //    sommeValeurs = sommeValeurs + valeurs[i];
            //    // autre maniere pour additionner les valeurs du tableau
            //    // sommeValeurs += valeurs[i];
            //}
            //moyenneValeurs = sommeValeurs / valeurs.Length;
            //maxNbre = Math.Pow(maxNbre, 2);

            //Console.WriteLine(" La moyenne des valeurs du tableau est : " + moyenneValeurs);
            //Console.WriteLine(" Le carré du plus grand nombre du tableau est : " + maxNbre );


//-----------------------------------------------------------------------------------------------------------------------------------

            int i = 0;
            int j = 0;
            int tmp =0;           
            double moyenne = 0;
            double somme = 0;


            int[] tableau =  { 2, 4, 1, 8, 6, 14, 23, 25, 7, 42 };

            Console.WriteLine(tableau);


            {
                Console.WriteLine(" Les elements du tableau sont : " + tableau[i]);
                i++;

            }


           // ---------------L'élément le plus grand du tableau au carre --------------------

            for (i = 0; i < tableau.Length; i++)
            {
                for (j = i + 1; j < tableau.Length; j++)
                {
                    if (tableau[i] > tableau[j])
                    {
                        tmp = tableau[i];
                        tableau[i] = tableau[j];
                        tableau[j] = tmp;
                    }
                }
            }

            Console.WriteLine(" La plus grande valeur du tableau est : " + tableau[9]);
           // moyenneValeurs = sommeValeurs / valeurs.Length;

            Console.WriteLine(" Le carre de La plus grande valeur du tableau est : " + tableau[9] * tableau[9]);
    

            Console.WriteLine(" moyenne des elements du tableau : " + somme + tableau[i]);

        }
    }
}