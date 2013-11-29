<?php //inventory_functions.php
function getItemCount($upc){
//in reality, this data would be coming from a database
$items = array('12345'=>5,'19283'=>100,'23489'=>234);
return $items[$upc];
}


// Additional function

function getBookAddr($upc){
$bookmarks = array('soaptutorial'=>'http://jimmyzimmerman.com/blog/2007/02/soap-server-with-php5-part-1.html','devname'=>'Daniel Stoinov');
return $bookmarks[$upc];
}



?>
