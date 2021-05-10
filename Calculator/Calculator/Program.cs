using System;

namespace Calculator
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Welcome to the NOOB CALCULATOR!!!");
            Console.WriteLine("1. Addition");
            Console.WriteLine("2. Subcription");
            Console.WriteLine("3. Divison");
            Console.WriteLine("4. Multiplication");
            Console.WriteLine("5. Percentage");
            Console.WriteLine("6. Exponential");
            Console.WriteLine("7. Trigonometric");

            Console.Write("Place Your Command : ");
            int Cal = Convert.ToInt32(Console.ReadLine());

            switch (Cal)
            {
                case 1:

                    Console.Write("How many number do you wanna add -->");
                    int Sum = Convert.ToInt32(Console.ReadLine());

                    double Totalsum = 0;
                    for(int i=0; i<Sum; i++)
                    {
                        Console.Write("Enter Number : ");
                        double Num = Convert.ToDouble(Console.ReadLine());

                        Totalsum = Totalsum + Num;
                    }


                    Console.Write("Summation : " + Totalsum);

                    break;

                case 2:

                    Console.Write("Enter First Number : ");
                    double FirstNum = Convert.ToDouble(Console.ReadLine());
                    Console.Write("Enter Second Number : ");
                    double SecondNum = Convert.ToDouble(Console.ReadLine());


                    double Sub = FirstNum - SecondNum;

                    Console.WriteLine("After Subcription : " + Sub);

                    break;

                case 3:
                    Console.Write("Enter First Number : ");
                    double FNum = Convert.ToDouble(Console.ReadLine());
                    Console.Write("Enter Second Number : ");
                    double Snum = Convert.ToDouble(Console.ReadLine());

                    double div = FNum / Snum;
                    Console.WriteLine("After Divided : " + div);

                    break;


                case 4:
                    Console.Write("Enter First Number : ");
                    double FiNum = Convert.ToDouble(Console.ReadLine());
                    Console.Write("Enter Second Number : ");
                    double Senum = Convert.ToDouble(Console.ReadLine());

                    double mul = FiNum * Senum;
                    Console.WriteLine("After Multiplication : " + mul);

                    break;

                case 5:
                    Console.WriteLine("Enter current value : ");
                    double Cur = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("Enter maximum value : ");
                    double Max = Convert.ToDouble(Console.ReadLine());

                    double Percentage = (Cur / Max) * 100;
                    Console.WriteLine("After percentage : " + Percentage);

                    break;


                case 6:
                    double m, n;
                    Console.WriteLine("Enter the Number : ");
                    m = double.Parse(Console.ReadLine());
                    Console.WriteLine("Give the Exponent : ");
                    n = double.Parse(Console.ReadLine());
                    double value1 = Math.Pow(m, n);
                    Console.WriteLine("Result : {0}", value1);
                    Console.ReadLine();
                    break;

                case 7:

                    Console.WriteLine("1. Sine (sin)");
                    Console.WriteLine("2. Cosine (cos)");
                    Console.WriteLine("3. Tangent (tan)");
                    Console.WriteLine("4. Secant (sec)");
                    Console.WriteLine("5. Cosecant (cosec)");
                    Console.WriteLine("6. Cotangent (cot)");

                    Console.Write("Place your command : ");
                    int Trigo = Convert.ToInt32(Console.ReadLine());

                    switch (Trigo)
                    {
                        case 1:
                            Console.Write("Degree : ");
                            double Degree = Convert.ToDouble(Console.ReadLine());
                            
                            Console.WriteLine("Sine(" + Degree + ") is --->>" +" " + Math.Sin(Degree));
                            break;

                        case 2:
                            Console.Write("Degree : ");
                            double Degree1 = Convert.ToDouble(Console.ReadLine());

                            Console.WriteLine("Cos(" + Degree1 + ") is --->>" + " " + Math.Cos(Degree1));

                            break;


                        case 3:
                            Console.Write("Degree : ");
                            double Degree2 = Convert.ToDouble(Console.ReadLine());

                            Console.WriteLine("Tan(" + Degree2 + ") is --->>" + " " + Math.Tan(Degree2));


                            break;

                        case 4:
                           


                            break;



                    }





                  




                    




                    break;

            }


        }
    }
}
