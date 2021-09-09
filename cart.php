<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
</head>
<body>

    <?php include 'header.php';?>
    <?php include 'menus.php';?>
    <?php include 'search.php';?>
    
    <section id="cart">
        <div class="cartProduct">
            <div class="cartImgAndDescription">
                <img class="cartImg" src="img/lightning.jpg" alt="Product Image" >
                <div class="cartDescription">
                    <p class="bold">Product name</p>
                    <p>Description: Lorem ipsum tra le fusus miu aetna</p>
                </div>
            </div>
            <a href="buyPage.php"><button class="buttonBlue cartButtonBuy">Buy</button></a>
        </div>

        <div class="cartProduct">
            <div class="cartImgAndDescription">
                <img class="cartImg" src="img/lightning.jpg" alt="Product Image" >
                <div class="cartDescription">
                    <p class="bold">Product name</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <a href="buyPage.php"><button class="buttonBlue cartButtonBuy">Buy</button></a>
        </div>

        <div class="cartProduct">
            <div class="cartImgAndDescription">
                <img class="cartImg" src="img/lightning.jpg" alt="Product Image" >
                <div class="cartDescription">
                    <p class="bold">Product name</p>
                    <p>Description: Lorem ipsum tra le fusus miu aetna</p>
                </div>
            </div>
            <a href="buyPage.php"><button class="buttonBlue cartButtonBuy">Buy</button></a>
        </div>

        <div class="cartProduct">
            <div class="cartImgAndDescription">
                <img class="cartImg" src="img/lightning.jpg" alt="Product Image" >
                <div class="cartDescription">
                    <p class="bold">Product name</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis sit amet nisl et finibus.</p>
                </div>
            </div>
            <a href="buyPage.php"><button class="buttonBlue cartButtonBuy">Buy</button></a>
        </div>

        <div class="buyAll">
            <p class="bold">Total price: XX</p>
            <a href="buyPage.php"><button class=" buttonBlue buttonBuyAll">Buy all</button></a>
        </div>

    </section>
        
    <?php include 'footer.php';?>
</body>
</html>