using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace PRO_P_Application
{
    public partial class Form2 : Form
    {
        string connectionString = "server=studmysql01.fhict.local;database=dbi380316;userID=dbi380316;password=LP2699;";
        private LogInWindows LogInForm;
        public Form2()
        {
            InitializeComponent();

        }



        private void button1_Click(object sender, EventArgs e)
        {
            LogInForm = new LogInWindows();
            this.Hide();
            LogInForm.Show();
        }

        private void label16_Click(object sender, EventArgs e)
        {

        }

        private void Form2_Load(object sender, EventArgs e)
        {
            string empID = LogInWindows.rtEmpID;
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                MySqlCommand cmd = new MySqlCommand($"SELECT employeeName FROM employees WHERE employeeID = '{empID}'");
                cmd.Connection = con;
                string empName = (string)cmd.ExecuteScalar();
                con.Close();

                labelEmpID.Text = "Last logged in: " + empName + " - " + empID;
            }
        }
    }
}
