<?php
function matrix($xmax,$ymax,$w,$h){
echo "<table>"; for($x=1;$x<=$xmax;$x++){ 
     echo "<tr>";
     for($y=1;$y<=$ymax;$y++){
          echo "<td style= 'border: solid 1px; width: ".$w."px; height: ".$h."px;'>"."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>";
}
matrix(7,5,100,90);
?>
