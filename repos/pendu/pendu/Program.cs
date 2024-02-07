namespace LePendu
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //Declaration des variables
            string mot = " ";
            int erreur = 6;
            string saisie;
            char lettre;
            bool trouve = false, motCorrect = false;

            //Debut du programme
            
            //le mot doit faire 5 caracteres minimum
            do
            {
                Console.WriteLine("Le joueur 1 choisit un mot (5 caractere minimum):");
                mot = Console.ReadLine();

                if(mot.Length < 5)
                {
                    Console.WriteLine("Le mot est trop court");
                    Console.WriteLine("Changé de mots");
                }
                else
                {
                    motCorrect = true;
                }
                
                //()
            } while (!motCorrect);
            Console.Clear(); //efface le contenu de la console avant cette fonction
            char[] charmot = mot.ToCharArray(); //stock le mot dans un tableau de caractere
            char[] motCache = mot.ToCharArray(); // stock le motCache dans un tableau de caractere
            for (int i = 0; i < charmot.Length; i++) //boucle chaque lettre de charmot
            {
                if (i != 0 && i != charmot.Length - 1) //remplace chaque lettre sauf la premiere et la derniere par un tiret
                {
                    motCache[i] = '_';
                }
            }
            while (!motCache.SequenceEqual(charmot) && erreur != 0) //boucle si motCache n'est pas egal au mot ET le compteur erreur n'est pas a zero
            {
                for (int i = 0; i < motCache.Length; i++) //boucle motCache
                {
                    Console.Write(motCache[i]); //ecrit la lettre corespondante a l'index i
                }
                Console.WriteLine("\nChoisissez une lettre:");
                saisie = Console.ReadLine();
                lettre = char.Parse(saisie); //converti la lettre saisie en char
                for (int i = 1; i < charmot.Length - 1; i++) //boucle charmot sauf la premiere et la derniere lettre
                {
                    if (lettre == (charmot[i])) //si la lettre saisie est pareil que la lettre a l'indice i de charmot
                    {
                        motCache[i] = lettre; //alors la lettre remplace le tiret
                        trouve = true;
                    }
                }
                if (!trouve)
                {
                    erreur--;
                    Console.WriteLine("il vous reste " + erreur + " tentatives");
                }
                trouve = false; //redevient faux sinon reste toujour vrai donc c'est pas bon. reinitialisation trouve apres test 
            }
            if (erreur == 0)
            {
                Console.WriteLine(" \n---- PERDU---- ");
            }
            else
            {
                Console.WriteLine("Vous avez trouve le mot " + mot);
            }










        }
    }
}