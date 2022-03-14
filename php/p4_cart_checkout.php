<?php include '../php/header.php'; 
 include "../php/dbConn.php";
?>


<div class="cart-container">
            <h2 class="section-header">Order Details</h2>
            <table width='100%'>
            <div class="cart-row">
                <tr>
                
                <td>ITEM</td>
				<td>PRICE</td>
				<td class="cart-quantity cart-column">QUANTITY</td>
                <td >ITEM TOTAL</td>
                </tr>
            </div>
            <?php
            $tot=0;
            $totQ=0;
            if(!$_SESSION['shops']){
                echo "the shopping cart is empty!";	
            }else{
                    foreach($_SESSION['shops'] as $shop){
                    $tot+=$shop['price']*$shop['ShopQ'];
                    $totQ+=$shop['ShopQ'];
                
            ?>
            <tr>
            <div class="cart-row">
                    <td>
                    <div class="cart-item cart-column">
                        <br>
                        <img class="cart-item-image" src="../images/<?php echo $shop['images']; ?>" width="100" height="100">
                        <span name="abb" class="cart-item-title"><?php echo $shop['name']; ?></span>
                    </div>
                    </td>
                    <td>
                    <span class="cart-price cart-column">$<?php echo $shop['price']; ?></span>
                    </td>
                    <td>
                    <div class="cart-quantity cart-column">
                            
                            <div class="product-quantity"><?php echo $shop['ShopQ']; ?></div>
                            
                    </div>
                    <td>
                    <span >$<?php echo $shop['price']*$shop['ShopQ']; ?></span>   
                    </td>
                    </td>
            </div>
                </tr>        
                <?php
                }
                ?>

            
            </table>
            <div class="cart-summary">
                <table>
                    <tr>
                        <td>Total Quantity</td>
                        <td><?php echo $totQ; ?></td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>$<?php echo round($tot, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Estimated GST</td>
                        <td>$<?php echo round($tot*0.05, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td>Estimated QST</td>
                        <td>$<?php echo round($tot*0.1, 2); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Estimated Total</strong></td>
                        <td><strong>$<?php echo round($tot*1.15, 2); ?></strong></td>
                    </tr>
                </table>
            </div>
            <div>
                <h2 class="section-header">Payment Information (Dummy card)</h2>
            </div>
            
            
        <form action="../php/cart/commit.php" method='post'>    
            <div>
            <table>
            <tr>
                <td>Card Number</td>
                <td>Card holder</td>
                <td>Expire date</td>
                <td>Security Number</td>
            </tr>
                
            <tr>
            <td>    <input type="text" placeholder="Card Number" name="Payment"/> </td>
            <td>    <input type="text" placeholder="Card holder" name="LastName"/>   </td>
            <td>    <input type="text" placeholder="MM/DD" name="Username"/>   </td>
            <td>    <input type="text" placeholder="Security number" name="Address"/>      <td>
            </tr>
            <tr>shipping address</tr>
            <tr>
                <input type="text" placeholder="Shipping Address" name="ship_address"/>      <td>
            </tr>
            </table>
            
            
            </div>
        <button class="btn btn-primary btn-purchase" type="submit" >Place Order</button>
        
            </div>
        </form>    


        <?php
                }
        ?>


    <!--footer-->
    <?php 
    include '../php/footer.php'; 
    ?>
</body>

</html>