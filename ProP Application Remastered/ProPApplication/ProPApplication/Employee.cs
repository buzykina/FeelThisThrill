using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProPApplication
{
    class Employee : Human
    {
        public string Job { get; set; }

        public Employee(int _id, string _name, string _dob, string _job) : base(_id, _name, _dob)
        {

        }
    }
}
