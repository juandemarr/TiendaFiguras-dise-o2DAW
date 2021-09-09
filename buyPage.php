<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php';?>
</head>
<body>

    <?php include 'header.php';?>
    <?php include 'menus.php';?>
    <?php include 'search.php';?>
    
    <section id="buyPage">
        <section class="buyPageProducts">
            <div class="buyPageOneProduct">
                <img src="img/hibana.png" alt="nombre del producto"/>
                <div>
                    <p>Nombre del vendedor</p>
                    <p>Nombre del producto</p>
                    <p>Cantidad: XX</p>
                    <p>Precio producto</p>
                </div>
            </div>

            <div class="buyPageOneProduct">
                <img src="img/hibana.png" alt="nombre del producto"/>
                <div>
                    <p>Nombre del vendedor</p>
                    <p>Nombre del producto</p>
                    <p>Cantidad: XX</p>
                    <p>Precio producto</p>
                </div>
            </div>

            <div class="buyPageOneProduct">
                <p class="italic">*The products of the cart will show here, or the one we clicked</p>
            </div>
        </section>

        <section class="buyPageData">
            <form method="POST">
            <div class="shipment">
                <h3>Shipment information:</h3>
                <p>Name: XX</p>
                <p>Adress: XX</p>
                <p>Postal Code: XX</p>
                <p>Province: XX</p>
                <p>Country: XX</p>
                <p>Telephone number: XX</p>

                <h3 class="payMethods">Pay method:</h3>
                <div>
                    <input type="image" src="img/paypal.jpg" alt="PayPal" title="PayPal"/>
                    <input type="image" src="img/visa.png" alt="Visa" title="Visa"/>
                    <input type="image" src="img/master.png" alt="MasterCard" title="MasterCard"/>
                </div>

            </div>
            <div class="price">
                <h3>Total: XX</h3>
                <div class="priceButtons">
                    <input type="button" class="finalButton buttonConfirm" value="Confirm"/>
                    <input type="button" class="finalButton buttonCancel" value="Cancel"/>
                </div>
            </div>
            </form>
        </section>
        
    </section>
        
    <?php include 'footer.php';?>
</body>
</html>