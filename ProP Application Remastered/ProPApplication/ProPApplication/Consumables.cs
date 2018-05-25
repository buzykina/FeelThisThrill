using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProPApplication
{
    class Consumables
    {
        public int ProductID { get; set; }
        public string Name { get; set; }
        public double Price { get; set; }

        

        public int QuanBuy { get; set; }

        public Consumables(int _productID, string _name, double _price)
        {
            this.ProductID = _productID;
            this.Name = _name;
            this.Price = _price;
            this.QuanBuy = 1;
        }

        public void AddQuanBuy(int quan)
        {
            QuanBuy += quan;
        }

        public double GetPrice()
        {
            return Price * QuanBuy;
        }

        public string AsAString()
        {
            return $"{Name} x{QuanBuy} - {GetPrice()}";
        }
    }
}
