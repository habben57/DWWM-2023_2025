namespace boucle_while

{
    class Program

    {
        static void Main(string[] args)

            
        {
            //String actualpin = "4321";
            //int count = 0;
            //string pin;

            //Console.WriteLine(" Saisir votre code pin : essai "+ count);

            //do
            //{
            //    pin = Console.ReadLine();      // Saisi du code pin au clavier
            //    count++;                        // Incrementation des essais 
            //}

            //while (pin != actualpin && count < 3);

            //if (pin == actualpin)
            //    Console.WriteLine(" Welcome User");

            //else
            //    Console.WriteLine(" Account Locked");

            int[] variable_tableau = new int[4];            // Type variable dans le tableau - Nom de la variable - nouveau tableau avec le nombre de case connu
            variable_tableau[2] = 352;
            variable_tableau[3] = -243;
            variable_tableau[0] = -43;
            variable_tableau[1] =  65;

            Console.WriteLine(" La valeur de la variable a la 4 eme place est : ");
            Console.WriteLine(variable_tableau);
           // Console.WriteLine(variable_tableau[3].ToString());

        }
    }
}


