namespace AppPoint
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Point coordo1 = new Point(2, 5);
            Point coordo2 = new Point(1, 4);




            Console.WriteLine("\n\t------ affichage point methode toString()----------------- \n");
            Console.WriteLine("\t" + coordo1.ToString());
            Console.WriteLine("\t" + coordo2.ToString());
            


            coordo1.Permuter();
            
            Console.WriteLine("\t" + coordo1.ToString());

            Point coordo3 = coordo2.SymetrieO();
            Console.WriteLine("\n\tSymétrique par rapport à l'axe des ordonnées.");
            Console.WriteLine("\t" + coordo3.ToString());  //----creation nouveau point pour nouvelle coordonnée-----

            Point coordo5 = coordo2.SymetrieA();
            Console.WriteLine("\n\tSymétrique par rapport à l'axe des abscisses.");
            Console.WriteLine("\t" + coordo3.ToString());

            Point coordo4 = coordo1.SymetrieOrigine();
            Console.WriteLine("\n\tSymétrique par rapport à l'origine.");
            Console.WriteLine("\t" + coordo4.ToString());

            
            Console.WriteLine("\n\t--------------------- fin affichage--------------------- \n");
            
            
            Console.ReadLine();
        }


    }
}