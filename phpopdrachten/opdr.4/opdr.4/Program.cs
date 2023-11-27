using opdr._4;
using System.Reflection.Metadata.Ecma335;

class Program
{
    public static void Main(string[] args)
    {
        Phone.Init();
        Menu();
        ShowMenu();
    }
    public static void ShowMenu()
    {
        while (true)
        {
            ConsoleKeyInfo Key = Console.ReadKey(true);
            switch (Key.KeyChar)
            {
                case '1':
                    foreach (Phone p in Phone.Phones)
                    {
                        Console.WriteLine($"ID: {p.Id} \n Merk: {p.Make} \n Model: {p.Model} \n MBSize: {p.Mbsize} \n Prize: {p.Price}");
                    }
                    break;
                case '2':
                    foreach (Phone p in Phone.Phones)
                    {
                        Console.WriteLine($"ID: {p.Id} Voorraad: {p.Voorraad}");
                    }
                    break;
                case '3':
                    Console.WriteLine("Vul het ID van het type smartphone in:");

                    Mutatie();
                    break;
                case '8':
                    Menu();
                    break;
                case '9':
                    return;
            }
        }
    }
    public static void Menu()
    {
        Console.WriteLine("Kies een optie");
        Console.WriteLine("1. Overzicht telefoons.");
        Console.WriteLine("2. Overzicht voorraad");
        Console.WriteLine("3. Muteer voorrad");
        Console.WriteLine("8. Toon menu");
        Console.WriteLine("9. Exit");
    }
    public static void Mutatie()
    {
        // bool id = int.TryParse(Console.ReadLine(), out int result);

        // ophalen id van gebruiker
        bool intParse = false;
        int intId = 0;
        string input = "";
        bool isId = false;
        string antwoord = "";
        int Intvooraad = 0;
        string getal = "";
        bool isvooraad = false;
        
        Console.WriteLine("Geef een id op");

        input = Console.ReadLine();

        intParse = int.TryParse(input, out intId);

        if (!intParse)
        {
            Console.WriteLine("Voer een nummer in");
            Mutatie();
        }

        // controleren id
        foreach (Phone p in Phone.Phones)
        {
            if (p.Id == intId)
            {
                //Console.WriteLine("Gevonden!");
                isId = true;
                break;
            }
        }

        if (!isId)
        {
            Console.WriteLine("Id niet gevonden");
            Mutatie();
        }
        // id is gevonden, mutatie vragen
        Console.WriteLine("Met hoeveel wilt u de mutatie aanpassen:");
        getal = Console.ReadLine();

        intParse= int.TryParse(getal, out Intvooraad);

        if (!intParse)
        {
            Console.WriteLine("Voer een getal in.");
            Mutatie();
        }

        foreach (Phone p in Phone.Phones)
        {
            if (p.Voorraad == Intvooraad)
            {
                
            }

            if (p.Voorraad < 0)
            {
                Console.WriteLine("Mutatie niet uitgevoerd: voorraad mag niet negatief worden.");
                break;
            }
        }
    }
}
