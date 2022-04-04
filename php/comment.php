<?php 
include '../php/header.php'; 
//session_start();
include '../php/dbConn.php'; 
$item_id=$_GET['item_id'];
$OrderNum=$_GET['order_id'];
$Dsql="select * from Order_item where item_id = '$item_id' and OrderNum='$OrderNum'";
$Dsql2="select * from product_table where product_id = '$item_id'";
$Dresult=mysqli_query($db,$Dsql);
$Dresult2=mysqli_query($db,$Dsql2);
$data2 = mysqli_fetch_array($Dresult2);
$description=$data2['description'];
while($data = mysqli_fetch_array($Dresult))
{
  $imageN=$data["item_image"];

?>
  
  <div class="wholeBox" style="text-align: center;">
        
		<div class="description" >
            <div >
            <?php echo "<img src='../images/$imageN' width='500px'>"; ?>
            </div>
            <div class="information">
                <h2 name="p3applename"><?php echo $data['item_name']; ?></h2>

                <h4 class='priceEachap' name="p3applepriceunit">Price: <?php echo $data['item_price']; ?></h4>
                
            </div>
            <div>
                
                <p id="description1"><?php echo $description; ?><br></p>
            </div>

        </div>
		
        
        <div class="item-quantity">
        <form action="Handle_comment.php?order_id=<?php echo $OrderNum?>&item_id=<?php echo $item_id?>" method="post">
        <div>
        <h2 style="color:black;">Would you recommend this product?</h2>
                <select  name="recommend">
                    <option value="">Select...</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
        </div>
        <div><h2 style="color:black; \">Write your comment:</h2>
        <textarea type="text" name="comment" rows="40" cols="85" ></textarea>
            <div><button class="rightButton" type="submit" value="Submit" >Finish comment</button>
            </div>
        </div>
        </form>
            <br><br><br>
        </div>
        
    </div>
  
  <?php
}
?>


<?php include '../php/footer.php'; ?>
</body>

</html>