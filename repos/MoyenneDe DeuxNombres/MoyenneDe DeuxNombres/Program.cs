namespace MoyenneDe_DeuxNombres
{
    internal class Program
    {



        static void Main(string[] args)
        {
           
            Console.WriteLine("------------moyenne de deux nombres-------------");

            double moyenne = 0;

            

            Console.WriteLine(" Saisir votre premier nombre :");
            double nombre1 = double.Parse(Console.ReadLine());
            
            Console.WriteLine(" Saisir votre second nombre :");
            double nombre2 = double.Parse(Console.ReadLine());
            
            moyenne = (nombre1 + nombre2) / 2;
            Console.WriteLine(" Moyenne de "+ nombre1 + " et " + nombre2 +" est : " + moyenne);



            Console.WriteLine("------------Aire et volume d'une Sphere-------------");

            double radius;
            double aire;
            double volume;

            // radius = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine(" Saisir le rayon de la sphere : ");
            radius = double.Parse(Console.ReadLine());

            aire = 4 * Math.PI * Math.Pow(radius, 2);
            volume = 4 / 3 * Math.PI * Math.Pow(radius, 3);

            Console.WriteLine(" L'aire de la sphere est" + aire + " et son volume est " + volume);



            Console.WriteLine("------------CALCUL DE LA SURFACE D’UN SECTEUR CIRCULAIRE-------------");


            //double radius;
            double A;
            double aireSecteur;
            
            // radius = convert.toDouble(Console.ReadLine());
 
            Console.WriteLine(" Saisir l'angle du secteur : ");
            A = double.Parse(Console.ReadLine());
            aireSecteur = (Math.PI * Math.Pow(radius, 2) * A) / 360;

          

            Console.WriteLine(" La surface du secteur est : " + aireSecteur );

        }
    }
}