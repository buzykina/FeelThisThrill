<?php
session_start();
include 'php.php';
$product_ids = array();
if(filter_input(INPUT_POST,'add_to_cart')){
if(isset($_SESSION['shopping_cart']))
{
  $count = count($_SESSION['shopping_cart']);
  $product_ids = array_column ($_SESSION['shopping_cart'],'id');
  if(!in_array(filter_input(INPUT_POST,'id'),$product_ids))
  {
    $_SESSION['shopping_cart'][$count] = array
    (
    'id' => filter_input(INPUT_POST,'id'), 
     'name' => filter_input(INPUT_POST,'name'), 
     'price' => filter_input(INPUT_POST,'price'), 
     'quantity' => filter_input(INPUT_POST,'quantity')
    );
  }
  else
  {
    for($i = 0;$i< count($product_ids);$i++)
    {
      if($product_ids[$i]==filter_input(INPUT_POST,'id'))
      {
        $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
      }
    }
  }


}
else
{
  $_SESSION['shopping_cart'][0] = array
  ( 
     'id' => filter_input(INPUT_POST,'id'), 
     'name' => filter_input(INPUT_POST,'name'), 
     'price' => filter_input(INPUT_POST,'price'), 
     'quantity' => filter_input(INPUT_POST,'quantity')

    );

}
}
if(filter_input(INPUT_GET,'action')=='delete')
{
  foreach($_SESSION['shopping_cart'] as $key => $product){
    if($product['id']==filter_input(INPUT_GET,'id')){
        unset($_SESSION['shopping_cart'][$key]);
    }
  }
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
?>
<!doctype html>
<html>
<head>
    <title>Feel This Thrill - Gifts</title>
    <?php
    include 'included/common_head.html';
    ?>
    <link rel="stylesheet" type="text/css" href="css/gifts.css">
    <script src="js/gift.js"></script>
</head> 
 <body>
 <?php
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']==true)
        { ?>
            <nav class="wrapper1">
        
        <div class="logotop">
           <a href="index.php"><img  src="img/logo2.JPG"></a>
        </div>
        <div class="gridButtons">
            <div class="gridButtonsLeft">
                <a href="line_up.php"><div><p>Line-up</p></div></a>
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php" class = "Selected"><div><p>Gifts</p></div></a>
                <a href="Event-Account.php"><div><p>My Account</p></div></a>
            </div>
        </div>     

        <div class="searchbartop">    
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
                    <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
                    fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                    fill-rule="evenodd" />
                    </symbol>
                </svg>
                
                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                    <input type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
                    <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                        <svg role="img" aria-label="Search">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-18"></use>
                        </svg>
                    </button>
                    <button type="reset" title="Clear the search query." class="sbx-custom__reset" style="margin-top:-11px;">
                        <svg role="img" aria-label="Reset">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-5"></use>
                        </svg>
                    </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
                </script>
        </div>

         <div class="navbar">
                    <span class="open-slide">
                        <a href="#" onclick="openSlideMenu()">
                            <svg width="30" height="30">
                                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                            </svg>
                        </a>
                    </span>

                    <div id="side-menu" class="side-nav">
                            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                            <a href="line_up.php">Line-up</a>
                            <a href="Tickets.php">Ticket</a>
                            <a href="Camp.php">Maps</a>
                            <a href="experience.php">Experience</a>
                            <a href="gifts.php" class = "Selected">Gifts</a>
                            <a class="navbarSelected" href="Log-In.php">Log-in</a>
                    </div>
                </div>

                <script>
                    function openSlideMenu(){
                    document.getElementById('side-menu').style.width = '250px';
                    document.getElementById('main').style.marginLeft = '250px';
                    }

                    function closeSlideMenu(){
                    document.getElementById('side-menu').style.width = '0';
                    document.getElementById('main').style.marginLeft = '0';
                    }
                </script>
    </nav>
        <?php }
        else { ?>
        <nav class="wrapper1">
        
        <div class="logotop">
           <a href="index.php"><img  src="img/logo2.JPG"></a>
        </div>
        <div class="gridButtons">
            <div class="gridButtonsLeft">
                <a href="line_up.php"><div><p>Line-up</p></div></a>
                <a href="Tickets.php"><div><p>Tickets</p></div></a>
                <a href="Camp.php"><div><p>Maps</p></div></a>
            </div>

            <div class="gridButtonsRight">
                <a href="experience.php"><div><p>Experience</p></div></a>
                <a href="gifts.php" class = "Selected"><div><p>Gifts</p></div></a>
                <a href="Log-In.php"><div><p>Log-In</p></div></a>
            </div>
        </div>     

        <div class="searchbartop">    
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
                    <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
                    fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                    fill-rule="evenodd" />
                    </symbol>
                </svg>
                
                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                    <input type="search" name="search" placeholder="Search..." autocomplete="off" required="required" class="sbx-custom__input">
                    <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                        <svg role="img" aria-label="Search">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-18"></use>
                        </svg>
                    </button>
                    <button type="reset" title="Clear the search query." class="sbx-custom__reset" style="margin-top:-11px;">
                        <svg role="img" aria-label="Reset">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-5"></use>
                        </svg>
                    </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
                </script>
        </div>

         <div class="navbar">
                    <span class="open-slide">
                        <a href="#" onclick="openSlideMenu()">
                            <svg width="30" height="30">
                                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                            </svg>
                        </a>
                    </span>

                    <div id="side-menu" class="side-nav">
                            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                            <a href="line_up.php">Line-up</a>
                            <a href="Tickets.php">Ticket</a>
                            <a href="Camp.php">Maps</a>
                            <a href="experience.php">Experience</a>
                            <a href="gifts.php" class = "Selected">Gifts</a>
                            <a class="navbarSelected" href="Log-In.php">Log-in</a>
                    </div>
                </div>

                <script>
                    function openSlideMenu(){
                    document.getElementById('side-menu').style.width = '250px';
                    document.getElementById('main').style.marginLeft = '250px';
                    }

                    function closeSlideMenu(){
                    document.getElementById('side-menu').style.width = '0';
                    document.getElementById('main').style.marginLeft = '0';
                    }
                </script>
    </nav>
       <?php
        }
        ?>
     
	
  <?php
     if(isset($_POST['checkout']))
     {
         echo '<script> window.location.href = "PaymentPage-gifts.php"; </script>';
     }
     ?>
  
 <h2>Gifts</h2>
  <div id = "combined">
  <div class="filters">
  <h4>Filter by</h4>
  <div>
      <h4>Type</h4>
      <form id = "type" method = "get">
      <input type="radio" class="radio" name="type" onclick="formSubmit('type')" value="tshirt"><label>T-Shirt</label>
      <br>
      <input type="radio" class="radio" onclick="formSubmit('type')" name="type" value="cup">
      <label>Cup</label>
      <br>
      <input type="radio" class="radio" onclick="formSubmit('type')" name="type" value="bag">
      <label>Bag</label>
      <br>
      <input type="radio" class="radio" onclick="formSubmit('type')" name="type" value="cap">
      <label>Cap</label>
    </form>
  </div>
  <div>
      <h4>Price Range</h4>
      <form  id = "price" method ="get">
      <input name ="price" onclick="formSubmit('price')" type="range" min="229" max="2899" value="229">
    </form>
      <h4>Color</h4>
      <form  id = "color" method ="get">
      <input type="radio" onclick="formSubmit('color')" name="color" value="black">
      <label>Black</label>
      <br>
      <input type="radio" onclick="formSubmit('color')" name="color" value="white" >
      <label>White</label>
      <br>
      <input type="radio" onclick="formSubmit('color')" name="color" value="colorful">
      <label>Colorful</label>
    </form>
  </div>
    <br>
</div>
<div id = "content" class="content">
<?php
if(isset($_GET['color'])){
        if($_GET['color'] == 'black'){
             $sql = "SELECT * FROM gift_products Where color = 'black' ORDER BY id ASC";
        }elseif($_GET['color'] == 'white'){
             $sql = "SELECT * FROM gift_products Where color = 'white' ORDER BY id ASC";
        }
        elseif($_GET['color'] == 'colorful'){
             $sql = "SELECT * FROM gift_products Where color = 'colorful' ORDER BY id ASC";
        }
    }
elseif(isset($_GET['price'])){
            $sql = "SELECT * FROM gift_products Where price < ".$_GET['price']." ORDER BY id ASC";
}
elseif(isset($_GET['type'])){
        if($_GET['type'] == 'cap'){
            $sql = "SELECT * FROM gift_products Where type = 'cap' ORDER BY id ASC";
        }elseif($_GET['type'] == 'cup'){
             $sql = "SELECT * FROM gift_products Where type = 'cup' ORDER BY id ASC";
        }elseif($_GET['type'] == 'bag'){
            $sql = "SELECT * FROM gift_products Where type = 'bag' ORDER BY id ASC";
        }
        elseif($_GET['type'] == 'tshirt'){
            $sql = "SELECT * FROM gift_products Where type = 'tshirt' ORDER BY id ASC";
        }
}
else{
     $sql = 'SELECT * FROM gift_products ORDER BY id ASC';
}
$result = mysqli_query($conn,$sql);
    if($result):
      if(mysqli_num_rows($result)>0):
        while($product = $result->fetch_assoc()):
        ?>
            <div id = "i<?php echo $product['id']; ?>">
               <img src="<?php echo $product['image']; ?>" id="lineup">
            </div>
            <form method="post" action = "gifts.php?action=add&id=<?php echo $product['id']; ?>">
            <div>
               <h3><?php echo $product['name']; ?></h3>
               <p class = "p1">Price: €<?php echo $product['price']; ?></p>
               <label>Quantity</label>
               <input type="number" name="quantity" max = "100" min = "1" value = "1">
               <input type="hidden" name="name" value = "<?php echo "$product[name]";?>">
              <input type="hidden" name="id" value = "<?php echo "$product[id]";?>">
              <input type="hidden" name="price" value = "<?php echo "$product[price]";?>">
               <input class = "schedule" name ="add_to_cart" type = "submit" value = "Add to cart">
    </div>
          </form>
        
        <?php
          endwhile;
          endif;
          endif;

        ?>
</div>
<div class="filters1">
 <img src="img/logo2.JPG">
 <h5 class="center-align">Feel This Thrill</h5>
      <p>
        <?php
        echo date("M d Y H:i");
        ?>
      </p>
          <div class="invoice">
            <table class="highlight">
            <?php
              if(!empty($_SESSION['shopping_cart'])){
                $total = 0;
                foreach($_SESSION['shopping_cart'] as $key => $product){  
            ?>
            
            <?php
            $total = $total + ($product['quantity']*$product['price']);
            }
            if($total!=0)
            {
              ?>
              <thead>
          <tr>
            <th>QTY</th>
            <th>ITEM</th>
            <th class="right-align">PRICE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
              <?php
              foreach($_SESSION['shopping_cart'] as $key => $product){ 
            ?>
            <tr>
              <td><?php echo $product['quantity'];?></td>
              <td><label id="name"><?php echo $product['name'];?></label></td>
              <td>$<label class= "<?php echo $product['id'];?> right-align"><?php echo $product['price'];?></label></td>
              <td>
                  <a href="gifts.php?action=delete&id=<?php echo $product['id'];?>">
            <img src="img/delete.jpg" id="delete"/></a>
            </td>
            </tr>
            <?php 
          }?>
      <table id = "total">
          <tr>
            <td class="right-align">Tax</td>
            <td class="right-align">21%</td>
          </tr>
          <tr>
            <td class="right-align bold">Total</td>
            <td class="right-align bold"><div class= "<?php echo $product['id'];?>">$<?php echo number_format((1+0.21)*($total),2);?></td>
          </tr>
          </table>
          <form method="post" action="gifts.php"><input type = "submit" class="checkout" value = "Checkout" name = "checkout"></form>
          <?php
            }
            }
            ?>   
</tbody> 
</table>
</div>
</div>
</div>
  <?php
    include 'included/footer.html';
  ?>
 </body>   

</html>