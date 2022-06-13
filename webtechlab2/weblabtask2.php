<?php
echo $_GET ["uname"],"<br>";
echo $_GET ["pass"],"<br>";
echo $_GET ["gender"],"<br>";
foreach($_GET ["skills"] as $b )
{
echo $b."";
}
echo"<br>";
echo $_GET["dept"]. "<br>";
echo $_GET["address"]. "<br>";
?>