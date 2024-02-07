namespace interetPlacement
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello, World!");

            double somme, interet, interetS, interetC;
            int annee;

            Console.WriteLine(" Quelle somme a placé ?");
            somme = Convert.ToDouble(Console.ReadLine());
            Console.WriteLine(" Indiqué votre taux d'interet : ");
            interet = Convert.ToDouble(Console.ReadLine());
            Console.WriteLine(" Quel est le nombre d'année ?");
            annee = Convert.ToInt32(Console.ReadLine());

            interetS = (somme * (annee * interet))/100;
            interetC = ((somme * (Math.Pow(interet, annee)))/100) ;
            
            Console.WriteLine(" Les interet simple ont donnés : " + interetS + " et les interet composés : " + interetC);



            int i = 11;
            double tab = i;








        }
    }
}