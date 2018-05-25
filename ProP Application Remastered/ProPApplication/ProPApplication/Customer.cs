using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProPApplication
{
    class Customer : Human
    {
        public int TicketNumber { get; set; }
        public string TicketType { get; set; }

        public bool IsCheckIn { get; set; }


        public Customer(int _id, string _name, string _dob, int _ticketNumber, string _ticketType) : base(_id, _name, _dob)
        {
            this.TicketNumber = _ticketNumber;
            this.TicketType = _ticketType;
            this.IsCheckIn = true;
        }

    }
}
