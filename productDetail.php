<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head.php';?>
</head>

<body>
    
    <?php include 'header.php';?>
    <?php include 'menus.php';?>
    <?php include 'search.php';?>

   <section id="productDetail">
        <div class="product">
            <div class="images">
                <div>
                    <img src="img/hibana.png" alt="Img 1" title="Img 1">
                    <img src="img/hibana.png" alt="Img 2" title="Img 2">
                    <img src="img/hibana.png" alt="Img 3" title="Img 3">
                </div>

                <img src="img/hibana.png" alt="Main Img" title="Main Img" id="mainImg">
            </div>

            <div class="details">
                <p class="pTitle">Product's name</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="stars">
                    <img src="img/star_rate.svg" alt="star">
                    <img src="img/star_rate.svg" alt="star">
                    <img src="img/star_rate.svg" alt="star">
                    <img src="img/star_rate.svg" alt="star">
                    <img src="img/star_rate.svg" alt="star">
                </div>
                <div class="buttons">
                    <button class="buttonBlue"><a href="cart.php">Add <img src="img/add_shopping_cart_white.svg"/></a></button>
                    <button class="buttonBlue"><a href="buyPage.php" id="buy">Buy now</a></button>
                </div>
            </div>
        </div>
        
        <div class="toBuy">
            <p class="pTitle">Refund term</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="pTitle">Delivery time</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
       
        <div class="similarItems">
            <h2>Similar Items</h2>
            <div class="similarProductsBox">
                <input type="image" src="img/arrow-left-black.svg"/>
                <div>
                    <img src="img/mando.jpg" alt="The Mandalorian Ed. Beskar" title="The Mandalorian Ed. Beskar">
                    <div class="nameProduct">
                        <p><a href="productDetail.php">Name</a></p>
                        <p class="similarItemsPrice">XX €</p>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                </div>
                <div>
                    <img src="img/mando.jpg" alt="The Mandalorian Ed. Beskar" title="The Mandalorian Ed. Beskar">
                    <div class="nameProduct">
                        <p><a href="productDetail.php">Name</a></p>
                        <p class="similarItemsPrice">XX €</p>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                </div>
                <div>
                    <img src="img/mando.jpg" alt="The Mandalorian Ed. Beskar" title="The Mandalorian Ed. Beskar">
                    <div class="nameProduct">
                        <p><a href="productDetail.php">Name</a></p>
                        <p class="similarItemsPrice">XX €</p>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                </div>
                <div>
                    <img src="img/mando.jpg" alt="The Mandalorian Ed. Beskar" title="The Mandalorian Ed. Beskar">
                    <div class="nameProduct">
                        <p><a href="productDetail.php">Name</a></p>
                        <p class="similarItemsPrice">XX €</p>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                </div>
                <input type="image" src="img/arrow-right-black.svg"/>
            </div>
        </div>
        
   </section>
   
    <?php include 'footer.php';?>
</body>

</html>