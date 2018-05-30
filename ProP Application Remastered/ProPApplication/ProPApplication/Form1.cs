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
using Phidget22;
using Phidget22.Events;

namespace ProPApplication
{
    public partial class Form1 : Form
    {
        private List<Panel> allPanels;
        string connectionString = "server=studmysql01.fhict.local;database=dbi380316;userID=dbi380316;password=LP2699;";
        private RFID myRFIDReader;
        private RFID attachCus;
        private RFID scanCus;
        private RFID scanCheckOut;
        private RFID LoanStand;
        private RFID LoanStandReturnItem;
        int loginSuccessful;
        private List<Customer> CheckedInCus; //List of customer checked in
        private List<Consumables> ItemsToSell; //List of items to be sold at food stands
        private List<LoanItems> AllLoanAvailable; //List of all items that can be loaned at the moment 
        private List<LoanItems> AllLoaned; //List of all items that was loaned

        public Form1()
        {
            InitializeComponent();
            myRFIDReader = new RFID();
            myRFIDReader.Tag += MyRFIDReader_Tag;
            myRFIDReader.Attach += MyRFIDReader_Attach;

            attachCus = new RFID();
            attachCus.Tag += AttachCustomer;

            scanCus = new RFID();
            scanCus.Tag += ScanTag;

            scanCheckOut = new RFID();
            scanCheckOut.Tag += CheckOutBalance;

            LoanStand = new RFID();
            LoanStand.Tag += LoanItem;




            btnUpdateTag.Enabled = false;
            labelCheckRFID.Visible = false;
            panelEntrance.Visible = false;
            panelLogIn.Visible = true;
            panelFoodsNDrinks.Visible = false;
            panelLoan.Visible = false;
            lbLoanScanStatus.Visible = false;


            allPanels = new List<Panel>();
            allPanels.Add(panelLogIn);
            allPanels.Add(panelAppList);
            allPanels.Add(panelEntrance);

            //Lists initialized
            CheckedInCus = new List<Customer>();
            ItemsToSell = new List<Consumables>();
            AllLoanAvailable = new List<LoanItems>();
            AllLoaned = new List<LoanItems>();

        }



        private void LoanItem(object sender, RFIDTagEventArgs e)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                string CustomerIDLoan = $"select customerID from customertest where customerRFIDpin = '{e.Tag}'";

                con.Open();

                MySqlCommand selectCusID = new MySqlCommand(CustomerIDLoan, con); //execute query to get customerID
                int CusID = Convert.ToInt32(selectCusID.ExecuteScalar()); //get Customer ID as integer

                if (CusID > 0) //Check if that customer exists
                {

                    //These code lines add requisite information to the object selected
                    LoanItems ItemSelected = AllLoanAvailable[lbDisplayLoan.SelectedIndex];
                    ItemSelected.CustomerID = CusID;
                    ItemSelected.BorrowDate = DateTime.Now.ToShortDateString();
                    ItemSelected.ReturnDate = "unknown";
                    ItemSelected.isBorrowed = true;
                    AllLoaned.Add(ItemSelected);

                    //Upload the data back to the database
                    string UpdateCusLoan = $"UPDATE loan_products SET CustomerID ='{CusID}', returnDate = '{ItemSelected.ReturnDate}', borrowDate = '{ItemSelected.BorrowDate}' WHERE ProductID = '{ItemSelected.ID}'";
                    MySqlCommand updateData = new MySqlCommand(UpdateCusLoan, con);
                    int result = updateData.ExecuteNonQuery();
                    if (result == 1)
                    {
                        string loanInfo = $"The item {ItemSelected.Name} has been loaned to a customer with ID {CusID} at {ItemSelected.BorrowDate}";
                        MessageBox.Show(loanInfo);
                    }


                    //Delete the item from the loan available list

                    AllLoanAvailable.Remove(ItemSelected);


                    //Refresh the listbox
                    lbDisplayLoan.Items.Clear();
                    foreach (var v in AllLoanAvailable)
                    {
                        lbDisplayLoan.Items.Add(v.AsAString());
                    }
                }
                else
                {
                    MessageBox.Show("Your tag data does not exist on the database");
                }

                lbLoanScanStatus.Visible = false;


            }
        }


        private void CheckOutBalance(object sender, RFIDTagEventArgs e)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                double totalPrice = 0;
                double updatedBalance;
                string getBalance = $"select customerBalance from customertest where customerRFIDpin = '{e.Tag}'";

                MySqlCommand executeCommand = new MySqlCommand(getBalance, con);

                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(executeCommand);
                da.Fill(dt);


                if (dt.Rows.Count > 0)
                {

                    double cusBalance = Convert.ToDouble(executeCommand.ExecuteScalar());
                    foreach (var v in ItemsToSell)
                    {
                        totalPrice += v.GetPrice();
                    }
                    updatedBalance = cusBalance - totalPrice;
                    if (updatedBalance >= 0)
                    {
                        string updateBalance = $"UPDATE customertest SET customerBalance = '{updatedBalance}' WHERE customerRFIDpin = '{e.Tag}'";
                        MySqlCommand deductBalance = new MySqlCommand(updateBalance, con);
                        int result = deductBalance.ExecuteNonQuery();
                        if (result == 1)
                        {
                            MessageBox.Show("Successfully checked out");
                        }
                    }
                    else
                    {
                        MessageBox.Show("Your account balance does not have enough money!");
                    }

                    listBoxItemsToSell.Items.Clear();
                    ItemsToSell.Clear();
                    lbScanCheckOut.Hide();
                }
                else
                {
                    MessageBox.Show("Invalid tag!");
                }
            }
            scanCheckOut.Close();
        }
        private void ScanTag(object sender, RFIDTagEventArgs e)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                string cmdTest = $"Select customerName from customertest where customerRFIDpin = '{e.Tag}'";
                MySqlCommand commandTest = new MySqlCommand(cmdTest, con);

                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(commandTest);
                da.Fill(dt);



                int counter = Convert.ToInt32(dt.Rows.Count.ToString());

                if (counter == 1)
                {

                    string cmd = $"SELECT ticketNum , customerName , ticketType, customerID, customerDob  FROM customertest where customerRFIDpin = '{e.Tag}'";
                    MySqlCommand command = new MySqlCommand(cmd, con);
                    MySqlDataReader reader = command.ExecuteReader();
                    while (reader.Read())
                    {
                        tbTicketNum.Text = reader[0].ToString();
                        tbTicketName.Text = reader[1].ToString();
                        tbTicketType.Text = reader[2].ToString();
                    }
                    foreach (Customer c in CheckedInCus)
                    {
                        if (c.TicketNumber == Convert.ToInt32(tbTicketNum.Text))
                        {
                            if (c.IsCheckIn == true)
                            {
                                tbStatusCheckedIn.Text = "Checked in";
                            }
                            else
                            {
                                tbStatusCheckedIn.Text = "Checked out";
                            }
                        }
                    }





                }
                else
                {
                    MessageBox.Show("The tag number does not exist in the database");
                }

                lbScanTag.Visible = false;

                scanCus.Close();
                con.Close();

            }
        }

        private void AttachCustomer(object sender, RFIDTagEventArgs e)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {

                con.Open();
                string cmd = $"UPDATE customertest SET customerRFIDpin = '{e.Tag}' WHERE customerID = {Convert.ToInt32(tbCusID.Text)}";
                string cmdGetInfo = $"SELECT ticketNum , customerName , ticketType, customerID, customerDob  FROM customertest where customerRFIDpin = '{e.Tag}'";
                MySqlCommand command = new MySqlCommand(cmd, con);
                int result = command.ExecuteNonQuery();
                if (result == 1)
                {

                    MySqlCommand cmdExe = new MySqlCommand(cmdGetInfo, con);
                    MySqlDataReader reader = cmdExe.ExecuteReader();
                    while (reader.Read())
                    {
                        Customer Cus = new Customer(Convert.ToInt32(reader[3]), reader[1].ToString(), reader[4].ToString(), Convert.ToInt32(reader[0]), reader[2].ToString());
                        CheckedInCus.Add(Cus);
                    }


                    MessageBox.Show("Successfully updated!");
                    btnUpdateTag.Enabled = false;
                    lbUpdateTag.Visible = false;
                }
                tbCusID.Text = "";
                tbCusName.Text = "";
                tbCusDoB.Text = "";
                tbCusTicketType.Text = "";
                attachCus.Close();
                con.Close();
            }
        }

        private void MyRFIDReader_Tag(object sender, RFIDTagEventArgs e)
        {
            if (e.Tag != "")
            {
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {

                    con.Open();
                    MySqlCommand cmd = new MySqlCommand($"SELECT count(employeeName) FROM employees WHERE empRFID = '{e.Tag}'", con);
                    int empNameCount = Convert.ToInt32(cmd.ExecuteScalar());
                    if (empNameCount == 0)
                    {
                        MessageBox.Show("Your tag is not on the database");
                    }
                    else
                    {
                        MySqlCommand cmd2 = new MySqlCommand($"SELECT employeeName FROM employees WHERE empRFID = '{e.Tag}'", con);
                        MySqlCommand cmd3 = new MySqlCommand($"SELECT employeeID FROM employees WHERE empRFID = '{e.Tag}'", con);
                        string empName = Convert.ToString(cmd2.ExecuteScalar());
                        string empID = Convert.ToString(cmd3.ExecuteScalar());
                        MessageBox.Show($"Welcome, {empName}");
                        labelEmpID.Text = "Currently logged in user: " + empName + " - " + empID;
                        labelCheckRFID.Visible = false;
                        panelAppList.Show();
                        panelLogIn.Hide();
                        btnLogOut.Visible = true;
                        btnLogOut.Enabled = true;
                        labelEmpID.Visible = true;

                    }
                    con.Close();
                }
                myRFIDReader.Close();
            }
        }



        private void MyRFIDReader_Attach(object sender, AttachEventArgs e)
        {
            labelCheckRFID.Visible = true;
            labelCheckRFID.Text = "RFID reader connected! Please scan your card!";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                string empID = textBoxEmpID.Text;
                string pwd = textBoxPwd.Text;
                con.Open();
                MySqlCommand cmd = new MySqlCommand($"SELECT * FROM employees WHERE employeeID = '{empID}' AND password = '{pwd}';");
                MySqlCommand cmd2 = new MySqlCommand($"SELECT employeeName FROM employees WHERE employeeID = '{empID}'");
                cmd.Connection = con;
                cmd2.Connection = con;

                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(cmd);
                da.Fill(dt);


                string empName = (string)cmd2.ExecuteScalar();


                loginSuccessful = Convert.ToInt32(dt.Rows.Count.ToString());

                if (loginSuccessful > 0)
                {
                    MessageBox.Show("Successfully connected!");
                    panelAppList.Show();
                    panelLogIn.Hide();
                    btnLogOut.Visible = true;
                    btnLogOut.Enabled = true;
                    labelEmpID.Visible = true;
                    labelEmpID.Text = "Currently logged in user: " + empName + " - " + empID;

                }
                else
                {
                    MessageBox.Show("Invalid username or password");
                }
                con.Close();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            try
            {
                myRFIDReader.Open();

            }
            catch (PhidgetException)
            {
                MessageBox.Show("Could not connect to the RFID-Reader!");
            }
        }

        private void btnLogOut_Click(object sender, EventArgs e)
        {
            panelEntrance.Hide();
            panelLogIn.Show();
        }

        private void panelEntrance_Paint(object sender, PaintEventArgs e)
        {


        }

        private void panelLogIn_Paint(object sender, PaintEventArgs e)
        {

        }

        private void btnFindCus_Click(object sender, EventArgs e)
        {
            if (tbCusID.Text != "")
            {
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();

                    string sqlCheck = $"Select customerName from customertest where customerID = '{tbCusID.Text}'";
                    MySqlCommand check = new MySqlCommand(sqlCheck, con);


                    DataTable dt = new DataTable();
                    MySqlDataAdapter da = new MySqlDataAdapter(check);
                    da.Fill(dt);


                    int validCus = Convert.ToInt32(dt.Rows.Count.ToString());
                    if (validCus == 1)
                    {
                        btnUpdateTag.Enabled = true;
                        string sqlCommand =
                        $"Select customerName, customerDoB, ticketType from customertest where customerID = '{tbCusID.Text}'";
                        MySqlCommand cmd = new MySqlCommand(sqlCommand, con);
                        MySqlDataReader reader = cmd.ExecuteReader();
                        while (reader.Read())
                        {
                            tbCusName.Text = reader[0].ToString();
                            tbCusDoB.Text = reader[1].ToString();
                            tbCusTicketType.Text = reader[2].ToString();
                        }

                    }
                    else
                    {
                        MessageBox.Show("The customer ID is not valid");
                    }

                }
            }
            else
            {
                MessageBox.Show("Please enter the customer ID!");
            }

        }

        private void btnUpdateTag_Click(object sender, EventArgs e)
        {
            attachCus.Open();
            lbUpdateTag.Visible = true;
        }

        private void label11_Click(object sender, EventArgs e)
        {

        }

        private void btnScanTag_Click(object sender, EventArgs e)
        {
            scanCus.Open();
            lbScanTag.Visible = true;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            panelAppList.Hide();
            panelLogIn.Show();
        }

        private void btnLogOut_Click_1(object sender, EventArgs e)
        {
            panelLogIn.Show();
            foreach (Panel p in allPanels)
            {
                if (p != panelLogIn)
                {
                    p.Visible = false;
                }
            }

            btnLogOut.Visible = false;
            btnLogOut.Enabled = false;
            labelEmpID.Visible = false;
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            if (panelLogIn.Visible == true)
            {
                btnLogOut.Visible = false;
                btnLogOut.Enabled = false;
                labelEmpID.Visible = false;
            }

        }

        private void button5_Click(object sender, EventArgs e)
        {
            panelAppList.Hide();
            panelEntrance.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            foreach (Customer c in CheckedInCus)
            {
                if (c.IsCheckIn == true && c.TicketNumber == Convert.ToInt32(tbTicketNum.Text))
                {
                    c.IsCheckIn = false;
                    MessageBox.Show(c.Name + " - " + c.TicketNumber.ToString() + " successfully checked out");
                    tbStatusCheckedIn.Text = "";
                    tbTicketName.Text = "";
                    tbTicketNum.Text = "";
                    tbTicketType.Text = "";
                }
            }
        }

        private void btnCheckIn_Click(object sender, EventArgs e)
        {
            foreach (Customer c in CheckedInCus)
            {
                if (c.IsCheckIn == false && c.TicketNumber == Convert.ToInt32(tbTicketNum.Text))
                {
                    c.IsCheckIn = true;
                    MessageBox.Show(c.Name + " - " + c.TicketNumber.ToString() + " successfully checked in");
                    tbStatusCheckedIn.Text = "";
                    tbTicketName.Text = "";
                    tbTicketNum.Text = "";
                    tbTicketType.Text = "";
                }
            }
        }

        private void button7_Click(object sender, EventArgs e)
        {
            panelAppList.Hide();
            panelFoodsNDrinks.Show();
        }

        private Consumables GetConsumables(string _name)
        {
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                string getProduct = $"select ProductID, Name, price, quantity, type from products where Name = '{_name}'";
                MySqlCommand cmd = new MySqlCommand(getProduct, con);
                MySqlDataReader reader = cmd.ExecuteReader();
                Consumables consume = null;
                while (reader.Read())
                {
                    consume = new Consumables(Convert.ToInt32(reader[0]), reader[1].ToString(), Convert.ToDouble(reader[2]));

                }
                return consume;
            }
        }
        private Consumables GetConsumeByID(int _id)
        {
            foreach (Consumables c in ItemsToSell)
            {
                if (c.ProductID == _id)
                {
                    return c;
                }
            }
            return null;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            GetInfomation("Cocacola");
        }
        private void GetInfomation(string _name)
        {
            Consumables c = GetConsumables(_name);
            if (GetConsumeByID(c.ProductID) != null)
            {

                GetConsumeByID(c.ProductID).AddQuanBuy(1);
            }
            else
            {
                ItemsToSell.Add(c);
            }

            listBoxItemsToSell.Items.Clear();
            double total = 0;
            foreach (var v in ItemsToSell)
            {
                listBoxItemsToSell.Items.Add(v.AsAString());
                total += v.GetPrice();
            }
            lbTotalPrice.Text = $"Total price: {total}";
        }


        private void button4_Click_1(object sender, EventArgs e)
        {
            GetInfomation("Fanta");
        }

        private void btnPepsi_Click(object sender, EventArgs e)
        {
            GetInfomation("Pepsi");
        }

        private void btnMDew_Click(object sender, EventArgs e)
        {
            GetInfomation("Moutain Dew");
        }

        private void btnMEnergy_Click(object sender, EventArgs e)
        {
            GetInfomation("Monster Energy");
        }

        private void btnBudweiser_Click(object sender, EventArgs e)
        {
            GetInfomation("Budweiser");
        }

        private void btnHeineken_Click(object sender, EventArgs e)
        {
            GetInfomation("Heineken");
        }

        private void button16_Click(object sender, EventArgs e)
        {
            GetInfomation("Bavaria");
        }

        private void btnBudels_Click(object sender, EventArgs e)
        {
            GetInfomation("Budels");
        }

        private void btnBrand_Click(object sender, EventArgs e)
        {
            GetInfomation("Brand");
        }

        private void btnHamSmall_Click(object sender, EventArgs e)
        {
            GetInfomation("Hamburger small");
        }

        private void btnHamBig_Click(object sender, EventArgs e)
        {
            GetInfomation("Hamburger big");
        }

        private void btnPizzaSmall_Click(object sender, EventArgs e)
        {
            GetInfomation("Pizza small");
        }

        private void btnPizzaMedium_Click(object sender, EventArgs e)
        {
            GetInfomation("Pizza medium");
        }

        private void btnPizzaLarge_Click(object sender, EventArgs e)
        {
            GetInfomation("Pizza large");
        }

        private void btnPasta_Click(object sender, EventArgs e)
        {
            GetInfomation("Pasta");
        }

        private void button26_Click(object sender, EventArgs e)
        {
            scanCheckOut.Open();
            lbScanCheckOut.Show();
        }

        private void button27_Click(object sender, EventArgs e)
        {
            if (this.listBoxItemsToSell.SelectedIndex >= 0)
            {
                ItemsToSell.RemoveAt(listBoxItemsToSell.SelectedIndex);
                this.listBoxItemsToSell.Items.RemoveAt(listBoxItemsToSell.SelectedIndex);
            }
            else if (ItemsToSell.Count == 0)
            {
                MessageBox.Show("Your cart does not have any item");
            }
            else
            {
                MessageBox.Show("Please select an item to remove");
            }
        }

        private void btnClearAll_Click(object sender, EventArgs e)
        {
            listBoxItemsToSell.Items.Clear();
            ItemsToSell.Clear();
        }

        private void button8_Click(object sender, EventArgs e)
        {
            panelAppList.Hide();
            panelLoan.Show();
            //btnLoan.Enabled = false;
            //btnLoanReturn.Enabled = false;
        }

        private void btnGetLoanItems_Click(object sender, EventArgs e)
        {
            btnLoan.Enabled = true;
            btnLoanReturn.Enabled = false;
            lbDisplayLoan.Items.Clear();

            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                AllLoaned.Clear();
                AllLoanAvailable.Clear();


                con.Open();
                LoanItems ItemsLoan;
                string getAllItems = "select ProductID, ProductName, ProductType, CustomerID, returnDate, borrowDate from loan_products";

                MySqlCommand getAll = new MySqlCommand(getAllItems, con);
                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(getAll);
                da.Fill(dt);

                //check if an item is borrowed or now

                foreach (DataRow dr in dt.Rows)
                {
                    if (dr[3] == DBNull.Value)
                    {
                        ItemsLoan = new LoanItems(Convert.ToInt32(dr[0]), dr[1].ToString(), dr[2].ToString());
                        AllLoanAvailable.Add(ItemsLoan);
                    }

                    else
                    {
                        ItemsLoan = new LoanItems(Convert.ToInt32(dr[0]), dr[1].ToString(), dr[2].ToString(), Convert.ToInt32(dr[3]), dr[4].ToString(), dr[5].ToString());
                        ItemsLoan.isBorrowed = true;
                        AllLoaned.Add(ItemsLoan);
                    }

                }

                foreach (LoanItems l in AllLoanAvailable)
                {
                    lbDisplayLoan.Items.Add(l.AsAString());
                }
            }
        }

        private void btnAllItemsForLoan_Click(object sender, EventArgs e)
        {

        }

        private void btnLoan_Click(object sender, EventArgs e)
        {
            if (lbDisplayLoan.SelectedIndex >= 0)
            {
                lbLoanScanStatus.Visible = true;
                LoanStand.Open();
            }
            else
            {
                MessageBox.Show("Please select an item from the list");
            }
        }

        private void btnLoanedItems_Click(object sender, EventArgs e)
        {
            btnLoan.Enabled = false;
            btnLoanReturn.Enabled = true;
            lbDisplayLoan.Items.Clear();

            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                AllLoaned.Clear();
                AllLoanAvailable.Clear();


                con.Open();
                LoanItems ItemsLoan;
                string getAllItems = "select ProductID, ProductName, ProductType, CustomerID, returnDate, borrowDate from loan_products";

                MySqlCommand getAll = new MySqlCommand(getAllItems, con);
                DataTable dt = new DataTable();
                MySqlDataAdapter da = new MySqlDataAdapter(getAll);
                da.Fill(dt);

                //check if an item is borrowed or now

                foreach (DataRow dr in dt.Rows)
                {
                    if (dr[3] != DBNull.Value)
                    {
                        ItemsLoan = new LoanItems(Convert.ToInt32(dr[0]), dr[1].ToString(), dr[2].ToString(), Convert.ToInt32(dr[3]), dr[4].ToString(), dr[5].ToString());
                        ItemsLoan.isBorrowed = true;
                        AllLoaned.Add(ItemsLoan);
                    }
                }

                foreach (LoanItems l in AllLoaned)
                {
                    lbDisplayLoan.Items.Add(l.AsAString());
                }
            }
        }

        private void btnLoanReturn_Click(object sender, EventArgs e)
        {
            if (lbDisplayLoan.SelectedIndex >= 0)
            {
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    LoanItems ItemToReturn = AllLoaned[lbDisplayLoan.SelectedIndex];
                    //Set the return date 
                    string getReturnDate = $"UPDATE loan_products SET returnDate = '{DateTime.Now.ToShortDateString()}' WHERE ProductID = '{ItemToReturn.ID}'";
                    MySqlCommand getReturn = new MySqlCommand(getReturnDate, con);
                    int updateReturnDate = getReturn.ExecuteNonQuery();
                    if (updateReturnDate == 1)
                    {
                        //Get the price from the database
                        string getPrice = $"select price from loan_products where ProductID = '{ItemToReturn.ID}'";
                        MySqlCommand getThePrice = new MySqlCommand(getPrice, con);
                        double price = Convert.ToDouble(getThePrice.ExecuteScalar());
                        MessageBox.Show(price.ToString());

                        //get the amount of days that the product was loaned
                        string getDifference = $"SELECT str_to_date(returnDate,'%m/%d/%Y')-str_to_date(borrowDate,'%m/%d/%Y') from loan_products WHERE ProductID = {ItemToReturn.ID}";
                        MySqlCommand getDifferenceDate = new MySqlCommand(getDifference, con);
                        double days = Convert.ToDouble(getDifferenceDate.ExecuteScalar());


                        //calculate the amount of money cost
                        double finalPrice;
                        if (days == 0)
                        {
                            finalPrice = price * 1;
                        }
                        else
                        {
                            finalPrice = price * days;
                        }

                        //deduct the money from the client's balance
                        string getCusBalance = $"SELECT customerBalance from customertest where customerID = '{ItemToReturn.CustomerID}'";
                        MySqlCommand getTheBalance = new MySqlCommand(getCusBalance, con);
                        double balance = Convert.ToDouble(getTheBalance.ExecuteScalar());
                        if ((balance - finalPrice) > 0) //To check if the custormer balance if sufficient for the transaction
                        {
                            string updateBalance = $"UPDATE customertest SET customerBalance = '{balance - finalPrice}' where customerID = '{ItemToReturn.CustomerID}'";
                            MySqlCommand BalanceUpdated = new MySqlCommand(updateBalance, con);
                            //remove data that is related to the loan
                            int checkBalanceUpdated = BalanceUpdated.ExecuteNonQuery();
                            if (checkBalanceUpdated == 1)
                            {
                                string returnQuery = $"UPDATE loan_products SET CustomerID = NULL, returnDate = NULL, borrowDate = NULL WHERE ProductID = {ItemToReturn.ID}";
                                MySqlCommand cmd = new MySqlCommand(returnQuery, con);
                                int result = cmd.ExecuteNonQuery();
                                if (result == 1)
                                {
                                    string returnInfo = $"The item {ItemToReturn.ID} has been returned";

                                    AllLoaned.Remove(ItemToReturn);

                                    ItemToReturn.CustomerID = null;
                                    ItemToReturn.ReturnDate = "";
                                    ItemToReturn.BorrowDate = "";
                                    ItemToReturn.isBorrowed = false;


                                    AllLoanAvailable.Add(ItemToReturn);

                                    lbDisplayLoan.Items.Clear();
                                    foreach (var v in AllLoaned)
                                    {
                                        lbDisplayLoan.Items.Add(v.AsAString());
                                    }
                                }
                                else
                                {
                                    MessageBox.Show("The ID does not match any loaned item");
                                }
                            }
                        }
                        else
                        {
                            MessageBox.Show($"Please charge your balance before returning the loan item, you need {finalPrice - balance} more credits!");
                        }
                    }
                }
            }
            else
            {
                MessageBox.Show("Please select an item from the list");
            }

        }
    }
}
