using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Smartphone
{
    class Gegevens
    {
        private int ID;
        private string Make;
        private string Model;
        private int MBSize;
        private double Price;

        public string ID { get => name; set => name = value; }

        public Gegevens(int id, string make, string model, int mbsize, double price)
        {
            this.ID = id;
            this.Make = make;
            this.Model = model;
            this.MBSize = mbsize;
            this.Price = price;
        }
    }
}
