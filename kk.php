<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--- nav bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">  


    <!-- font asm link for icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!---swipe    website........link..............-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/cALENDER%20PROJECT/allresturent.css">

      
</head>
<body>


  <!----------  NAV BAR     ------------------->
    
    <header>

        <nav>
            <input type="checkbox" id="check" name="" value="">
            <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
            <label 
           style="color: #FEA116;" class="logo">Rishri-IT</label>
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a class="active" href="#about">About</a></li>
                <li><a class="active" href="#menu">Menu</a></li>
                <li><a class="active" href="#Gellery">Gellery</a></li>
                <li class="nav-item">
          <a class="active" href="#" ><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger">3</span> </a>
        </li>

               
                
            </ul>
        </nav>

    </header>
    <!---- NAV BAR  ends-->
    


<!------home section starts-->
<div class="image-div" id="home">
    <img src="/cALENDER%20PROJECT/KKin.jpg.jpg" alt="Your Image">
  </div>
<!------home section starts-->



<!---About section start-->

    <section class="about-section" id="about" style="display: flex;">
        <div class="about-content">
          <h2>About Us</h2>
          <p>Step into "Tasty Bites," a cozy spot where good food meets great vibes. Situated downtown, we serve up a mix of delicious dishes using fresh, local ingredients. Whether it's a casual meal or a celebration, our friendly atmosphere is perfect for any occasion. Come savor the goodness at Tasty Bites – where every bite is a delight!</p>
          <img src="KKin1.jpg.png" alt="Restaurant Interior" class="im">
          <img src="KKin2.jpg.jpg" alt="Delicious Food" class="im">
        </div>
      </section>
<!---About section end-->



<!---- menu section start-->



  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
            <form action="" class="form-submit">
            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
          
             </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          // window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
    



<!---- menu section end-->



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-------home Gellery start -->
<section class="Gellery" id="Gellery">
  <h1>jjjj</h1>
    
  <div id="carousel">
    <figure id="spinner">
      <img src="KKgell.jpg.png" alt>
      <img src="KK.JPG.jpg" alt>
      <img src="pink-milford-sound.jpg" alt>
      <img src="paradise.jpg" alt>
      <img src="morekai.jpg" alt>
      <img src="milky-blue-lagoon.jpg" alt>
      <img src="lake-tekapo.jpg" alt>
      <img src="milford-sound.jpg" alt>
    </figure>
  </div>
  <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
  <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
    
   
</section>
<!-------home Gellery end -->



<!--------------------------- form section -->

    <script src="script.js"></script>

    <div style="align-items: center;">

    <body class="ab" >
      <div class="containerrrrrr"  id="form">
        <h1>Place Your Food Order</h1>
        <form id="orderForm">
            <div class="form-grouppp">
                <label class="ac" for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-grouppp">
                <label class="ac" for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
              </div>
              <div class="form-grouppp">
                <label class="ac" for="date">Delivery Date:</label>
                <input type="date" id="date" name="date" required>
              </div>
              <div class="form-grouppp">
                <label class="ac" for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required>
              </div>
              <div class="form-grouppp">
                <label class="ac" for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
              </div>
              <div class="form-grouppp">
                <label  for="additionalItem">Additional Item:</label>
                <input type="text" id="additionalItem" name="additionalItem">
              </div>
    
          <button  class="ad" type="submit">Place Order</button>
        </form>
        <div class="order-detailsss" id="orderDetails" style="display: none;">
          <h2>Your Order Details</h2>
          <p><strong>Name:</strong> <span id="displayName"></span></p>
          <p><strong>Phone Number:</strong> <span id="displayPhone"></span></p>
          <p><strong>Delivery Date:</strong> <span id="displayDate"></span></p>
          <p><strong>Item Name:</strong> <span id="displayItemName"></span></p>
          <p><strong>Quantity:</strong> <span id="displayQuantity"></span></p>
          <p><strong>Additional Item:</strong> <span id="displayAdditionalItem"></span></p>
          <p id="orderConfirmationnn" style="display: none;">Your order has been placed!</p>
        </div>
      </div>

    </div>
    
      <script src="form.js"></script>
      <script src="index.js"></script>

      <!-- form section end -->


      
    </body>
    </html>
    
  
   
</body>
</html>