<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShoeStore.com</title>
    <link rel="stylesheet" href="styles.css">
    <script src="functions.js"></script>
</head>
<body>
    <h1><u>ShoeStore.com</u></h1>
    <div id="mySidebar" class="sidebar">
        <h2><u>Cart</u></h2>
        <button class="checkout" id="checkout"><h2>Checkout</h2></button>
        <div class="sidebarContents">

        </div>
    </div>
    

    <button class="openbtn" id="openbtn" onclick="myFunction(this); toggleSlideMenu(this)">☰</button>
    
    
    <div class="container">
        <div class="shoe1" onmouseover="mouseOver1()" onmouseout="mouseOut1()">
        <h2>Vapor Max</h2>
        <img src="VaporMaxWhite.jpg" alt="">
        <p>Price: £175</p>
        <p>Stock quantity: 5</p>
        <div class="shoe1Buy" id="shoe1Buy">
            <h2>Add to Cart</h2>
        </div>
        </div>
        <div class="shoe2" onmouseover="mouseOver2()" onmouseout="mouseOut2()">
        <h2>Air Max 97</h2>
        <img src="AirMax97.jpg" alt="">
        <p>Price: £145</p>
        <p>Stock quantity: 5</p>
        <div class="shoe2Buy" id="shoe2Buy">
            <h2>Add to Cart</h2>
        </div>
        </div>
        <div class="shoe3" onmouseover="mouseOver3()" onmouseout="mouseOut3()">
        <h2>Air 1 Zoom</h2>
        <img src="Air1Zoom.jpg" alt="">
        <p>Price: £120</p>
        <p>Stock quantity: 5</p>
        <div class="shoe3Buy" id="shoe3Buy">
            <h2>Add to Cart</h2>
        </div>
        </div>
        <div class="shoe4" onmouseover="mouseOver4()" onmouseout="mouseOut4()">
        <h2>Air Max 95</h2>
        <img src="AirMax95.jpg" alt="">
        <p>Price: £135</p>
        <p>Stock quantity: 5</p>
        <div class="shoe4Buy" id="shoe4Buy">
            <h2>Add to Cart</h2>
        </div>
        </div>    
    </div>
    <div class="offerBanner">
        <div class="textScroll">
        <p><b>***EASTER OFFERS*** £25 DISCOUNT ON ORDERS OVER £200 ***EASTER OFFERS*** £50 DISCOUNT ON ORDERS OVER £300 ***EASTER OFFERS*** £75 DISCOUNT ON ORDERS OVER £400</p>
        </div>
    </div>
</body>
</html>