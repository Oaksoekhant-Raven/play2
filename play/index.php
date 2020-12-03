<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        function addFunction() {
            var link = document.getElementById("menuList");
            link.classList.toggle("show");
        }
    </script>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="img/ps.png" class="logo">
        <nav>
            <ul id="menuList">
                <li><a onclick="addFunction()" href="#">Controller</a></li>
                <li><a onclick="addFunction()" href="#">Headset</a></li>
                <li><a onclick="addFunction()" href="#">Remote</a></li>
            </ul> 
        </nav> 
        <label id="icon" class="menu-bar">
            <i class="fas fa-bars" onclick="addFunction()"></i>
        </label>       

        </div>
        <div class="row">
            <div class="col-1">
                <h2>Play Station 5</h2>
                <h3>Next Generation console</h3>
                <p>With the powerful GPU</p>
                <h4>$500</h4>
                <button type="button" id="order-button">More Detail</button>

            </div>
            <div class="col-2">
                <img src="img/ps5_2020.jpg" class="controller">
                <div class="color-box"></div>

            </div>
        </div>

    </div>
    
    <div class="car">
            <h1>Pre Order Form</h1>

            <form action="submit-order.php" method="post" class="form-1" >
                <div class="map">
                    <div class="col-25">
                        <label for="name">Your Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text"  name="name" id="name" class="name" required>   
                    </div>
                </div>

                <div class="map">
                    <div class="col-25">
                        <label for="email">Your Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="email" id="email" class="email" required> 
                           
                    </div>
                </div>

                <div class="map">
                    <div class="col-25">
                        <label for="phone">Phone number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="phone" id="phone" class="phone" required>  
                          
                    </div>

                </div>

                <div class="map">
                    <div class="col-25">
                        <label for="address">Your address</label>
                    </div>
                    <div class="col-75">
                       <textarea name="address" id="address" required></textarea>
                         
                    </div>
                </div>

                <input type="submit" value="submit order"> 
            </form>
    </div>
    


    
</body>
</html>