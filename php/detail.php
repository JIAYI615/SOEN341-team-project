<?php 
include '../php/header.php'; 
//session_start();
include '../php/dbConn.php'; 
include '../php/functions.php';
$id=$_GET['detail_id'];
$Dsql="select * from product_table where product_id = '$id'";
$Dresult=mysqli_query($db,$Dsql);

while($data = mysqli_fetch_array($Dresult))
{
  $imageN=$data["images"];
?>
<style>
      tr:nth-child(even) {background-color: #f2f2f2;}
  </style>
  
  <div class="wholeBox" style="text-align: center;">
        
		<div class="description" >
            <div >
            <?php echo "<img src='../images/$imageN' width='500px'>"; ?>
            </div>
            <div class="information">
                <h2 name="p3applename"><?php echo $data['name']; ?></h2>

                <h4 class='priceEachap' name="p3applepriceunit">Price: <?php echo $data['price']; ?></h4>
                
            </div>
            <div>
                
                <p id="description1"><?php echo $data['description']; ?><br></p>
            </div>

        </div>
		
        
        <div class="item-quantity">
        <form action="../php/cart/insert.php?id=<?php echo $id?>" method="post">
                <label for="quantity">Quantity: </label>
                <input class="quantityProductap" type="number" name="Quantity" value="1" min="1">
                <button class="rightButton" type="submit" value="Submit" >Add to Shop Cart</button>
        </form>
            <br><br><br>
        </div>
        
    </div>
<?php
}
?>

<h2 style="font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">Comments</h2>
<div>
<table style="border-collapse: collapse; width: 100%;" >
  <tr>
    <th style="font-weight: bold; text-align: middle; padding: 8px;"><h3>Recommend?</h3></th>
    <th style="text-align: middle; padding: 8px;"><h3>Comment</h3></th>
    <th style="text-align: left; padding: 8px;"><h3>Time</h3></th>
  </tr>

<?php


$records = mysqli_query($db,"select * from soen341.comments where item_id = '$id'");

while($comments = mysqli_fetch_array($records))
{
    $Time=date('Y-m-d',$comments['time']);
?>
  <tr> 
    <td span class="p9c5" style="text-align: left; padding: 8px;"><?php echo recommend($comments['recommend']); ?></td>	
    <td span class="p9c4" style="text-align: left; padding: 8px;"><?php echo $comments['comment']; ?></td>
    <td span class="p9c5" style="text-align: left; padding: 8px;"><?php echo $Time; ?></td>	
  </tr>	
  
<?php
}
?>
</table>



</div>


<?php include '../php/footer.php'; ?>
</body>

</html>