<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head.php';?>
</head>

<body>
    
    <?php include 'header.php';?>
    <?php include 'menus.php';?>
    <?php include 'search.php';?>
    
    <section id="help">
        <h2>FAQ</h2>
        <section class="faq">
            <div class="faqQuestions">
                <h3>Is there a reserve option and can I cancel it?</h3><!-- with bootstrap use dropdown on the title, so the p doesn't appear at first-->
                <p>Nulla nec porta nibh. In imperdiet ipsum sit amet massa semper sodales. Integer vel hendrerit ante. Nunc nec finibus 
                    nunc. Fusce scelerisque ex massa, elementum facilisis metus sollicitudin vel. </p>
                <h3>I forgot my password, what can I do?</h3>
                <p>Nulla nec porta nibh. In imperdiet ipsum sit amet massa semper sodales. Integer vel hendrerit ante. Nunc nec finibus 
                    nunc. Fusce scelerisque ex massa, elementum facilisis metus sollicitudin vel. Donec tristique felis id diam blandit 
                    ullamcorper eu in nunc.</p>
                <h3>Where can I change my delivery direction?</h3>
                <p>Nulla nec porta nibh. In imperdiet ipsum sit amet massa semper sodales. Integer vel hendrerit ante. Nunc nec finibus 
                    nunc. Fusce scelerisque ex massa, elementum facilisis metus sollicitudin vel. Donec tristique felis id diam blandit 
                    ullamcorper eu in nunc. Nam porttitor hendrerit aliquet.</p>
                <h3>How can I change my shipment methods?</h3>
                <p>Nulla nec porta nibh. In imperdiet ipsum sit amet massa semper sodales. Integer vel hendrerit ante. Nunc nec finibus 
                    nunc. Fusce scelerisque ex massa, elementum facilisis metus sollicitudin vel. Donec tristique felis id diam blandit 
                    ullamcorper eu in nunc.</p>
                <h3>What can I do if the pack doesn't arrive at time?</h3>
                <p>Nulla nec porta nibh. In imperdiet ipsum sit amet massa semper sodales. Integer vel hendrerit ante. Nunc nec finibus 
                    nunc. Fusce scelerisque ex massa, elementum facilisis metus sollicitudin vel. Donec tristique felis id diam blandit.</p>
            </div>
            <div class="faqImg">
                <img src="img/ahsoka.png" alt="Ahsoka Tano will answer your questions :)" title="Ahsoka Tano will answer your questions :)"/>
            </div>
        </section>


        <h2>Contact us</h2>
        <section class="helpForm">
            <form action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name"/>
                
                <label for="surname">Surname:</label>
                <input type="text" id="surname"/>
                
                <label for="issue">Issue:</label>
                <textarea id="issue"></textarea>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email"/>

                <input type="submit" class="buttonBlue" value="Send"/>
            </form>
        </section>

    </section>
    
    <?php include 'footer.php';?>
</body>

</html>