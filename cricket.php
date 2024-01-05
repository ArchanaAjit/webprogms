<?php
$p=array("Virat Kholi","Rohit Sharma","MS Dhoni","M.shami","Sanju Samson");
echo"<table align=\"center\" border=\"2\" width=\"200\" height=\"300\"><tr><th>Cricket Players</tr>";
foreach($p as $Names){
echo"<tr>";
echo"<td>$Names</td>";
echo"</tr>";
}
echo"</tr></table>";
?>