namespace CampingEntranceApp
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.pictureBox3 = new System.Windows.Forms.PictureBox();
            this.panMemberInfo = new System.Windows.Forms.Panel();
            this.btnCheckOut = new System.Windows.Forms.Button();
            this.btnCheckIn = new System.Windows.Forms.Button();
            this.textBox5 = new System.Windows.Forms.TextBox();
            this.textBox4 = new System.Windows.Forms.TextBox();
            this.textBox3 = new System.Windows.Forms.TextBox();
            this.textBox2 = new System.Windows.Forms.TextBox();
            this.textBox1 = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.panHostInfo = new System.Windows.Forms.Panel();
            this.textBox13 = new System.Windows.Forms.TextBox();
            this.textBox14 = new System.Windows.Forms.TextBox();
            this.textBox11 = new System.Windows.Forms.TextBox();
            this.btnShowInfo = new System.Windows.Forms.Button();
            this.textBox6 = new System.Windows.Forms.TextBox();
            this.textBox7 = new System.Windows.Forms.TextBox();
            this.textBox8 = new System.Windows.Forms.TextBox();
            this.textBox9 = new System.Windows.Forms.TextBox();
            this.textBox10 = new System.Windows.Forms.TextBox();
            this.label8 = new System.Windows.Forms.Label();
            this.label9 = new System.Windows.Forms.Label();
            this.label10 = new System.Windows.Forms.Label();
            this.lblMembers = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.panel3 = new System.Windows.Forms.Panel();
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.lblLogOut = new System.Windows.Forms.Label();
            this.MemberName = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Tag = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.TicketNo = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.SpotNo = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.SpotRow = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Status = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.HostTag = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).BeginInit();
            this.panMemberInfo.SuspendLayout();
            this.panHostInfo.SuspendLayout();
            this.panel3.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBox2
            // 
            this.pictureBox2.Dock = System.Windows.Forms.DockStyle.Left;
            this.pictureBox2.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox2.Image")));
            this.pictureBox2.Location = new System.Drawing.Point(0, 0);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(115, 96);
            this.pictureBox2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox2.TabIndex = 2;
            this.pictureBox2.TabStop = false;
            // 
            // pictureBox3
            // 
            this.pictureBox3.Dock = System.Windows.Forms.DockStyle.Right;
            this.pictureBox3.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox3.Image")));
            this.pictureBox3.Location = new System.Drawing.Point(1104, 0);
            this.pictureBox3.Name = "pictureBox3";
            this.pictureBox3.Size = new System.Drawing.Size(123, 96);
            this.pictureBox3.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox3.TabIndex = 3;
            this.pictureBox3.TabStop = false;
            // 
            // panMemberInfo
            // 
            this.panMemberInfo.BackColor = System.Drawing.Color.Silver;
            this.panMemberInfo.Controls.Add(this.btnCheckOut);
            this.panMemberInfo.Controls.Add(this.btnCheckIn);
            this.panMemberInfo.Controls.Add(this.textBox5);
            this.panMemberInfo.Controls.Add(this.textBox4);
            this.panMemberInfo.Controls.Add(this.textBox3);
            this.panMemberInfo.Controls.Add(this.textBox2);
            this.panMemberInfo.Controls.Add(this.textBox1);
            this.panMemberInfo.Controls.Add(this.label7);
            this.panMemberInfo.Controls.Add(this.label6);
            this.panMemberInfo.Controls.Add(this.label5);
            this.panMemberInfo.Controls.Add(this.label4);
            this.panMemberInfo.Controls.Add(this.label3);
            this.panMemberInfo.Controls.Add(this.label1);
            this.panMemberInfo.Location = new System.Drawing.Point(-1, 95);
            this.panMemberInfo.Name = "panMemberInfo";
            this.panMemberInfo.Size = new System.Drawing.Size(627, 511);
            this.panMemberInfo.TabIndex = 4;
            // 
            // btnCheckOut
            // 
            this.btnCheckOut.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnCheckOut.Location = new System.Drawing.Point(363, 431);
            this.btnCheckOut.Name = "btnCheckOut";
            this.btnCheckOut.Size = new System.Drawing.Size(150, 45);
            this.btnCheckOut.TabIndex = 18;
            this.btnCheckOut.Text = "Check-out";
            this.btnCheckOut.UseVisualStyleBackColor = true;
            // 
            // btnCheckIn
            // 
            this.btnCheckIn.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnCheckIn.Location = new System.Drawing.Point(92, 432);
            this.btnCheckIn.Name = "btnCheckIn";
            this.btnCheckIn.Size = new System.Drawing.Size(150, 45);
            this.btnCheckIn.TabIndex = 17;
            this.btnCheckIn.Text = "Check-in";
            this.btnCheckIn.UseVisualStyleBackColor = true;
            // 
            // textBox5
            // 
            this.textBox5.Enabled = false;
            this.textBox5.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox5.Location = new System.Drawing.Point(224, 172);
            this.textBox5.Name = "textBox5";
            this.textBox5.Size = new System.Drawing.Size(248, 30);
            this.textBox5.TabIndex = 16;
            // 
            // textBox4
            // 
            this.textBox4.Enabled = false;
            this.textBox4.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox4.Location = new System.Drawing.Point(224, 220);
            this.textBox4.Name = "textBox4";
            this.textBox4.Size = new System.Drawing.Size(248, 30);
            this.textBox4.TabIndex = 15;
            // 
            // textBox3
            // 
            this.textBox3.Enabled = false;
            this.textBox3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox3.Location = new System.Drawing.Point(224, 267);
            this.textBox3.Name = "textBox3";
            this.textBox3.Size = new System.Drawing.Size(248, 30);
            this.textBox3.TabIndex = 14;
            // 
            // textBox2
            // 
            this.textBox2.Enabled = false;
            this.textBox2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox2.Location = new System.Drawing.Point(224, 312);
            this.textBox2.Name = "textBox2";
            this.textBox2.Size = new System.Drawing.Size(248, 30);
            this.textBox2.TabIndex = 13;
            // 
            // textBox1
            // 
            this.textBox1.Enabled = false;
            this.textBox1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox1.Location = new System.Drawing.Point(224, 124);
            this.textBox1.Name = "textBox1";
            this.textBox1.Size = new System.Drawing.Size(248, 30);
            this.textBox1.TabIndex = 12;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label7.ForeColor = System.Drawing.Color.Red;
            this.label7.Location = new System.Drawing.Point(90, 312);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(99, 25);
            this.label7.TabIndex = 11;
            this.label7.Text = "Host-tag:";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label6.Location = new System.Drawing.Point(87, 267);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(102, 25);
            this.label6.TabIndex = 10;
            this.label6.Text = "Spot row:";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label5.Location = new System.Drawing.Point(97, 220);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(92, 25);
            this.label5.TabIndex = 9;
            this.label5.Text = "Spot no:";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label4.Location = new System.Drawing.Point(134, 172);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(55, 25);
            this.label4.TabIndex = 8;
            this.label4.Text = "Tag:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label3.Location = new System.Drawing.Point(115, 129);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(74, 25);
            this.label3.TabIndex = 7;
            this.label3.Text = "Name:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 17.17F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label1.Location = new System.Drawing.Point(218, 19);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(177, 33);
            this.label1.TabIndex = 6;
            this.label1.Text = "Member info";
            // 
            // panHostInfo
            // 
            this.panHostInfo.BackColor = System.Drawing.Color.Silver;
            this.panHostInfo.Controls.Add(this.textBox13);
            this.panHostInfo.Controls.Add(this.textBox14);
            this.panHostInfo.Controls.Add(this.textBox11);
            this.panHostInfo.Controls.Add(this.btnShowInfo);
            this.panHostInfo.Controls.Add(this.textBox6);
            this.panHostInfo.Controls.Add(this.textBox7);
            this.panHostInfo.Controls.Add(this.textBox8);
            this.panHostInfo.Controls.Add(this.textBox9);
            this.panHostInfo.Controls.Add(this.textBox10);
            this.panHostInfo.Controls.Add(this.label8);
            this.panHostInfo.Controls.Add(this.label9);
            this.panHostInfo.Controls.Add(this.label10);
            this.panHostInfo.Controls.Add(this.lblMembers);
            this.panHostInfo.Controls.Add(this.label2);
            this.panHostInfo.Location = new System.Drawing.Point(626, 95);
            this.panHostInfo.Name = "panHostInfo";
            this.panHostInfo.Size = new System.Drawing.Size(606, 511);
            this.panHostInfo.TabIndex = 5;
            // 
            // textBox13
            // 
            this.textBox13.Enabled = false;
            this.textBox13.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox13.Location = new System.Drawing.Point(170, 339);
            this.textBox13.Name = "textBox13";
            this.textBox13.Size = new System.Drawing.Size(248, 30);
            this.textBox13.TabIndex = 30;
            // 
            // textBox14
            // 
            this.textBox14.Enabled = false;
            this.textBox14.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox14.Location = new System.Drawing.Point(170, 384);
            this.textBox14.Name = "textBox14";
            this.textBox14.Size = new System.Drawing.Size(248, 30);
            this.textBox14.TabIndex = 29;
            // 
            // textBox11
            // 
            this.textBox11.Enabled = false;
            this.textBox11.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox11.Location = new System.Drawing.Point(170, 429);
            this.textBox11.Name = "textBox11";
            this.textBox11.Size = new System.Drawing.Size(248, 30);
            this.textBox11.TabIndex = 28;
            // 
            // btnShowInfo
            // 
            this.btnShowInfo.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnShowInfo.Location = new System.Drawing.Point(443, 103);
            this.btnShowInfo.Name = "btnShowInfo";
            this.btnShowInfo.Size = new System.Drawing.Size(150, 36);
            this.btnShowInfo.TabIndex = 19;
            this.btnShowInfo.Text = "Show info";
            this.btnShowInfo.UseVisualStyleBackColor = true;
            // 
            // textBox6
            // 
            this.textBox6.Enabled = false;
            this.textBox6.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox6.Location = new System.Drawing.Point(170, 153);
            this.textBox6.Name = "textBox6";
            this.textBox6.Size = new System.Drawing.Size(248, 30);
            this.textBox6.TabIndex = 26;
            // 
            // textBox7
            // 
            this.textBox7.Enabled = false;
            this.textBox7.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox7.Location = new System.Drawing.Point(170, 201);
            this.textBox7.Name = "textBox7";
            this.textBox7.Size = new System.Drawing.Size(248, 30);
            this.textBox7.TabIndex = 25;
            // 
            // textBox8
            // 
            this.textBox8.Enabled = false;
            this.textBox8.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox8.Location = new System.Drawing.Point(170, 248);
            this.textBox8.Name = "textBox8";
            this.textBox8.Size = new System.Drawing.Size(248, 30);
            this.textBox8.TabIndex = 24;
            // 
            // textBox9
            // 
            this.textBox9.Enabled = false;
            this.textBox9.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox9.Location = new System.Drawing.Point(170, 293);
            this.textBox9.Name = "textBox9";
            this.textBox9.Size = new System.Drawing.Size(248, 30);
            this.textBox9.TabIndex = 23;
            // 
            // textBox10
            // 
            this.textBox10.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox10.Location = new System.Drawing.Point(170, 105);
            this.textBox10.Name = "textBox10";
            this.textBox10.Size = new System.Drawing.Size(248, 30);
            this.textBox10.TabIndex = 22;
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label8.ForeColor = System.Drawing.Color.Red;
            this.label8.Location = new System.Drawing.Point(33, 108);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(99, 25);
            this.label8.TabIndex = 21;
            this.label8.Text = "Host-tag:";
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label9.Location = new System.Drawing.Point(30, 201);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(102, 25);
            this.label9.TabIndex = 20;
            this.label9.Text = "Spot row:";
            // 
            // label10
            // 
            this.label10.AutoSize = true;
            this.label10.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label10.Location = new System.Drawing.Point(40, 156);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(92, 25);
            this.label10.TabIndex = 19;
            this.label10.Text = "Spot no:";
            // 
            // lblMembers
            // 
            this.lblMembers.AutoSize = true;
            this.lblMembers.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lblMembers.Location = new System.Drawing.Point(25, 251);
            this.lblMembers.Name = "lblMembers";
            this.lblMembers.Size = new System.Drawing.Size(107, 25);
            this.lblMembers.TabIndex = 17;
            this.lblMembers.Text = "Members:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 17.17F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label2.Location = new System.Drawing.Point(247, 19);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(130, 33);
            this.label2.TabIndex = 7;
            this.label2.Text = "Host info";
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.DarkCyan;
            this.panel3.Controls.Add(this.lblLogOut);
            this.panel3.Controls.Add(this.pictureBox2);
            this.panel3.Controls.Add(this.pictureBox3);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel3.Location = new System.Drawing.Point(0, 0);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(1227, 96);
            this.panel3.TabIndex = 6;
            // 
            // dataGridView1
            // 
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.MemberName,
            this.Tag,
            this.TicketNo,
            this.SpotNo,
            this.SpotRow,
            this.Status,
            this.HostTag});
            this.dataGridView1.Location = new System.Drawing.Point(101, 630);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.RowTemplate.Height = 24;
            this.dataGridView1.Size = new System.Drawing.Size(994, 197);
            this.dataGridView1.TabIndex = 7;
            // 
            // lblLogOut
            // 
            this.lblLogOut.AutoSize = true;
            this.lblLogOut.Cursor = System.Windows.Forms.Cursors.Hand;
            this.lblLogOut.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lblLogOut.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblLogOut.Location = new System.Drawing.Point(1010, 67);
            this.lblLogOut.Name = "lblLogOut";
            this.lblLogOut.Size = new System.Drawing.Size(88, 25);
            this.lblLogOut.TabIndex = 8;
            this.lblLogOut.Text = "Log Out";
            // 
            // MemberName
            // 
            this.MemberName.HeaderText = "Visitor Name";
            this.MemberName.Name = "MemberName";
            this.MemberName.ReadOnly = true;
            // 
            // Tag
            // 
            this.Tag.HeaderText = "Tag";
            this.Tag.Name = "Tag";
            this.Tag.ReadOnly = true;
            // 
            // TicketNo
            // 
            this.TicketNo.HeaderText = "Ticket Number";
            this.TicketNo.Name = "TicketNo";
            this.TicketNo.ReadOnly = true;
            // 
            // SpotNo
            // 
            this.SpotNo.HeaderText = "Spot No.";
            this.SpotNo.Name = "SpotNo";
            this.SpotNo.ReadOnly = true;
            // 
            // SpotRow
            // 
            this.SpotRow.HeaderText = "Spot Row";
            this.SpotRow.Name = "SpotRow";
            this.SpotRow.ReadOnly = true;
            // 
            // Status
            // 
            this.Status.HeaderText = "Status";
            this.Status.Name = "Status";
            this.Status.ReadOnly = true;
            // 
            // HostTag
            // 
            this.HostTag.HeaderText = "Host-tag";
            this.HostTag.Name = "HostTag";
            this.HostTag.ReadOnly = true;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DimGray;
            this.ClientSize = new System.Drawing.Size(1227, 839);
            this.Controls.Add(this.dataGridView1);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panHostInfo);
            this.Controls.Add(this.panMemberInfo);
            this.Text = "Camping Entrance Application";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).EndInit();
            this.panMemberInfo.ResumeLayout(false);
            this.panMemberInfo.PerformLayout();
            this.panHostInfo.ResumeLayout(false);
            this.panHostInfo.PerformLayout();
            this.panel3.ResumeLayout(false);
            this.panel3.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.PictureBox pictureBox3;
        private System.Windows.Forms.Panel panMemberInfo;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Panel panHostInfo;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Button btnCheckOut;
        private System.Windows.Forms.Button btnCheckIn;
        private System.Windows.Forms.TextBox textBox5;
        private System.Windows.Forms.TextBox textBox4;
        private System.Windows.Forms.TextBox textBox3;
        private System.Windows.Forms.TextBox textBox2;
        private System.Windows.Forms.TextBox textBox1;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Button btnShowInfo;
        private System.Windows.Forms.TextBox textBox6;
        private System.Windows.Forms.TextBox textBox7;
        private System.Windows.Forms.TextBox textBox8;
        private System.Windows.Forms.TextBox textBox9;
        private System.Windows.Forms.TextBox textBox10;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.Label lblMembers;
        private System.Windows.Forms.TextBox textBox13;
        private System.Windows.Forms.TextBox textBox14;
        private System.Windows.Forms.TextBox textBox11;
        private System.Windows.Forms.Label lblLogOut;
        private System.Windows.Forms.DataGridViewTextBoxColumn MemberName;
        private System.Windows.Forms.DataGridViewTextBoxColumn Tag;
        private System.Windows.Forms.DataGridViewTextBoxColumn TicketNo;
        private System.Windows.Forms.DataGridViewTextBoxColumn SpotNo;
        private System.Windows.Forms.DataGridViewTextBoxColumn SpotRow;
        private System.Windows.Forms.DataGridViewTextBoxColumn Status;
        private System.Windows.Forms.DataGridViewTextBoxColumn HostTag;
    }
}

