// See https://aka.ms/new-console-template for more information
using System.Security.Cryptography.X509Certificates;

Console.WriteLine("Hello, World!");

        //  EXERCICE 1.5 Inversion de 2 valeurs

int a;
int b;
int c;

Console.WriteLine("Saisissez le premier nombre entier : ");
a = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("Saisissez le deuxieme nombre entier : ");
b = Convert.ToInt32(Console.ReadLine());

Console.WriteLine("Ordre des nombres avant inversion : " +a+ " - " +b);

c = a;
a = b;
b = c;

Console.WriteLine("Ordre des nombres apres inversion : " +a+ " - " +b);


//  EXERCICE 3.1 : JEU DE LA FOURCHETTE

Random myObject = new Random();
int Min, Max, N, Tmp;
Min = 0;
Max = 100;

if (Min > Max)
    {
    Tmp = Min;
    Min = Max;
    Max = Tmp; 
    }
else
{


    X = Min + myObject(Max - Min + 1);

}