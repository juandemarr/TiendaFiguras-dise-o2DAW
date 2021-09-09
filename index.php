<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head.php';?>
</head>

<body>
    
    <?php include 'header.php';?>
    <?php include 'menus.php';?>
    <?php include 'search.php';?>

    <section id="home">
       
        <section class="slider">
            <input type="image" src="img/arrow_left.svg"/>
            <input type="image" src="img/arrow_right.svg"/>
        </section>
        
        <section class="newAdittions">
            <h2>New Adittions</h2>
            <div>
               <input type=image src="img/arrow-left-black.svg"/>
               
                <a href="productDetail.php"><img src="img/anakin.jpg" alt="Anakin" title="Anakin"/></a>
                <a href="productDetail.php"><img src="img/anakin.jpg" alt="Anakin" title="Anakin"/></a>
                <a href="productDetail.php"><img src="img/anakin.jpg" alt="Anakin" title="Anakin"/></a>
                
                <input type=image src="img/arrow-right-black.svg"/>
            </div>
        </section>
        
        <h2>Collector's Editions</h2>
        <div class="collectorEditionsImg">
            <img src="img/anakin-vs-obiwan.jpg" alt="Anakin vs Obi Wan" title="Anakin vs Obi Wan">
        </div>
        
        <section class="topSales">
            <h2>Top Sales</h2>
            <div>
               <input type=image src="img/arrow-left-black.svg"/>
               
                <div>
                    <a href="productDetail.php"><img src="img/anakin.jpg" class="topSalesImg" alt="Anakin" title="Anakin"/></a>
                    <div class="productDescription">
                        <a href="productDetail.php"><p>Product's name</p></a>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                        <!--The ideal would be when clicking on the cart bottom, a notification appear instead of showing the cart page-->
                    </div>
                    
                </div>
                
                <div>
                    <a href="productDetail.php"><img src="img/anakin.jpg" class="topSalesImg" alt="Anakin" title="Anakin"/></a>
                    <div class="productDescription">
                        <a href="productDetail.php"><p>Product's name</p></a>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                    
                </div>
                <div>
                    <a href="productDetail.php"><img src="img/anakin.jpg" class="topSalesImg" alt="Anakin" title="Anakin"/></a>
                    <div class="productDescription">
                        <a href="productDetail.php"><p>Product's name</p></a>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                    
                </div>
                <div>
                    <a href="productDetail.php"><img src="img/anakin.jpg" class="topSalesImg" alt="Anakin" title="Anakin"/></a>
                    <div class="productDescription">
                        <a href="productDetail.php"><p>Product's name</p></a>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                    
                </div>
                <div>
                    <a href="productDetail.php"><img src="img/anakin.jpg" class="topSalesImg" alt="Anakin" title="Anakin"/></a>
                    <div class="productDescription">
                        <a href="productDetail.php"><p>Product's name</p></a>
                        <button type="button" class="addCart"><a href="cart.php"><img src="img/add_shopping_cart.svg" class="imgShoppingCart"/></a></button>
                    </div>
                    
                </div>
                
                <input type=image src="img/arrow-right-black.svg"/>
            </div>   
        </section>
         
    </section>
    
    <?php include 'footer.php';?>
</body>

</html>