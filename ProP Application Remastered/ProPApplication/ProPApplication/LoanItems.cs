using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProPApplication
{
    class LoanItems
    {
        public int ID { get; set; }
        public string Name { get; set; }
        public string Type { get; set; }
        public string ReturnDate { get; set; }
        public string BorrowDate { get; set; }
        public int? CustomerID { get; set; }
         
        public bool isBorrowed { get; set; }

        public LoanItems(int _id, string _name, string _type)
        {

            this.ID = _id;
            this.Name = _name;
            this.Type = _type;
            this.isBorrowed = false;
        }
        public LoanItems(int _id, string _name, string _type, int? _customerID, string _returnDate, string _borrowDate)
        {
            this.ID = _id;
            this.Name = _name;
            this.Type = _type;
            this.ReturnDate = _returnDate;
            this.BorrowDate = _borrowDate;
            this.isBorrowed = true;
            this.CustomerID = _customerID;
        }

        public string AsAString()
        {
            if(isBorrowed == false)
            {
                return $"ID: {ID}, Name: {Name}, Type: {Type}";
            }
            else
            {
                return $"ID: {ID}, Name: {Name}, Type: {Type}, Borrowed from: {BorrowDate} to {ReturnDate} by ID {CustomerID}";
            }
            
        }
        public void Return()
        {
            this.ReturnDate = "";
            this.BorrowDate = "";
            this.isBorrowed = true;
            this.CustomerID = null;
        }
    }
}
