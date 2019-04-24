<!DOCTYPE html>
<html>
    <head>
        <?php include "parts/head.php" ?>
        <title>Cart | <?=$site["title"]?></title>
        <script>
            $(function() {
                
            });
        </script>
    </head>
    <body>
        <?php include "parts/nav.php" ?>
        
        <main class="container">
            <br>
            <?php include "parts/baseTable.php" ?>
            
            <div id="cartResults">
                <button class="btn btn-success" id="finalizeCart">Purchase</button>
                <button class="btn btn-danger" id="clearCart">Clear</button>
                <div id="finalPrice"></div>
            </div>
        </main>
        
        <?php include "parts/footer.php" ?>
        <script>
            $("#cartResults").hide();
            localStorage.setItem("sum", "0");
            let temp = localStorage.getItem('sum');
            console.log("temp1: " + temp);
            
            
            addMoviesToCartPage();
            console.log("temp2: " + temp);
            
            $("#finalPrice").html("Price: $" + temp);
            
            $("#clearCart").on("click", function(){
                console.log("clear button clicked");
                cart = new Array();
                localStorage.setItem("cart", cart);
                $("#tableBody").html("");
                // doesnt update cart total
                updateCart();
                
                $("#cartResults").hide();
            });
            
            $("#finalizeCart").on("click", function(){
                    let confirmation = parseInt(Math.random() * 1000000) + 1;
                    let sum = localStorage.getItem('sum');
                    if (!localStorage.getItem("cart"))
                        cart = new Array();
                    else
                        cart = JSON.parse(localStorage.getItem("cart"));
                    
                    for(let i = 0; i < cart.length; i++){
                        // console.log(cart[i]);
                        $.ajax({

                            type: "GET",
                            url: "api/addItemToOrder.php",
                            dataType: "json",
                            data: { 
                                "id": cart[i], 
                                "conNum" : confirmation,
                            },
                            
                            success: function(data,status) {
                                console.log(status);
                            
                            },
                            
                            complete: function(data,status) { //optional, used for debugging purposes
                                //alert(status);
                            }
                        
                        });//ajax
                    }
                    $("#tableBody").html("");
                    $("#tableBody").html("Success! Your order went through<br>Confirmation Number: " + confirmation);
                    $("#finalPrice").html("Price: $" + temp);
                    localStorage.setItem("cart", new Array());
            });

        </script>
    </body>
</html>