using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProPApplication
{
    class Human
    {
        public string Name { get; set; }
        public string Dob { get; set; }
        public int Id { get; set; }

        public Human(int _id, string _name, string _dob)
        {
            this.Id = _id;
            this.Dob = _dob;
            this.Name = _name;
        }

    }
}
