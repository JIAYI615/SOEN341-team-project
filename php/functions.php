<?php
function status($statusNum){
  if($statusNum == 0){
    return "processing";
  }else if($statusNum ==1){
    return "shipping";
  }else if($statusNum ==2){
    return "delivered";
  }else{
    return "error status";
  }
}

function Recommend($recommend){
    if($recommend == 0){
      return "No";
    }else if($recommend ==1){
      return "Yes";
    }else{
      return "N/A";
    }
  }

function CartAdd($num, $stock){
    if($num > $stock){
        return $stock;

    }else{
        return $num;
    }

}

function CartCut($num){
    if($num<1){
        unset($num);
        return true;
    }else{
        return false;
    }
}


function loginValidInput($email,$password){
    if($email=="" || $password== ""){
        return true;
    }else{
        return false;
    }
}

function CheckOutValidInput($ship_address,$Payment,$TotalCost,$orderNum){
    if($ship_address=="" || $Payment=="" ||$TotalCost==""||$orderNum==""){
        return true;
    }else{
        return false;
    }

}

function commentValidInput($recommend,$comment){
    if($recommend == "" || $comment == ""){
        return true;
    }else{
        return false;
    }

}

function GST($tot){
    return round($tot*0.05, 2);
}

function QST($tot){
    return round($tot*0.1, 2);
}

function EstimateTotal($tot){
    return round($tot*1.15, 2);
}
?>