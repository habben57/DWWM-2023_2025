namespace AireEtVolumeSphere
{
    internal class Program
    {
        static void Main(string[] args)
        {

            Console.WriteLine("------------Aire et volume d'une Sphere-------------");

            double radius ;
            double aire ;
            double volume;
            
            
           // radius = Convert.ToDouble(Console.ReadLine());

           

            Console.WriteLine(" Saisir le rayon de la sphere : ");
            radius = double.Parse(Console.ReadLine());

            aire = 4*Math.PI*Math.Pow(radius,2);
            volume = 4/3 * Math.PI*Math.Pow(radius,3);

            Console.WriteLine(" L'aire de la sphere est"+ aire+ " et son volume est " + volume);
            

        }
    }
}




