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


    public partial class LogInWindows : Form
    {
        string connectionString = "server=studmysql01.fhict.local;database=dbi380316;userID=dbi380316;password=LP2699;";

        int loginSuccessful;
        public LogInWindows()
        {
            InitializeComponent();
        }

        private void panel3_Paint(object sender, PaintEventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void LogInWindows_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            rtEmpID = textBoxEmpID.Text;
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                string empID = textBoxEmpID.Text;
                string pwd = textBoxPwd.Text;
                con.Open();
                MySqlCommand cmd = new MySqlCommand($"SELECT * FROM employees WHERE employeeID = '{empID}' AND password = '{pwd}';");
                cmd.Connection = con;

                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(cmd);
                da.Fill(dt);


                loginSuccessful = Convert.ToInt32(dt.Rows.Count.ToString());

                if (loginSuccessful > 0)
                {
                    MessageBox.Show("Successfully connected!");
                    this.Hide();
                    Form2 nextForm = new Form2();
                    nextForm.Show();
                }
                else
                {
                    MessageBox.Show("Invalid username or password");
                }
                con.Close();
            }

        }

        public static string rtEmpID = "";




    }
}
