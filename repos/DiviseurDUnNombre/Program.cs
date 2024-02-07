namespace DiviseurDUnNombre
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello, World!");


            Console.WriteLine(" Entrer votre nombre entier.");
            int nbr = int.Parse(Console.ReadLine()); 
            
           

            for (int i = 1; i <= nbr; i++)
            {
                if (nbr % i == 0)
                {
                   
                    Console.WriteLine(" Les diviseurs du nombre " + nbr+" sont :  "+i);
                    //Console.WriteLine("{0} ", i);


                }
            }
            Console.ReadLine();
        }
    }
}
