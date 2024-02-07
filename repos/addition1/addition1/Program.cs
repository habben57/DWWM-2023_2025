namespace addition1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // declaration des variables
            int nombre1;
            int nombre2;
            int resultat;
            string saisie;

            Console.WriteLine("Saisir le 1er nombre");
            saisie = Console.ReadLine();
            nombre1 = int.Parse(saisie);
            Console.WriteLine("Saisir le 2eme nombre");
            saisie = Console.ReadLine();
            nombre2 = int.Parse(saisie);    

            resultat = nombre1 + nombre2;

            Console.WriteLine("le resultat de l'addition de " + nombre1 + " et " + nombre2 + " est " + resultat +"."); 
        }
    }
}