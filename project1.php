<?php 
$y = (isset($_POST['wholeNumber']) ? $_POST['wholeNumber'] : null);

for($i=1;$i<=$y;$i++){
    if(is_divided_by_five($i)){
        echo $i.",";
    }
}
function is_divided_by_five($i){
    if($i%5==0){
        return true;
    }
    return false;

}

    
?>