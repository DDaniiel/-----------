<?php
if (rand(-10 , 10) > 0) {
    echo "<span style = \" color: red;\">Hot</span>";
} 
elseif (rand(-10 , 10) == 0) {
    echo "<span style = \" color: green;\">Normal</span>";
} 
elseif (rand(-10 , 10) < 0) {
    echo "<span style = \" color: blue;\">Cold</span>";
}
?> 