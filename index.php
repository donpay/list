<?php

$agent=$_SERVER['HTTP_USER_AGENT'];
if(!preg_match('/com.donpayapp Bukaolshop/i', $agent) ) {
 exit("Halaman ini hanya bisa dibuka di aplikasi xxxxx");
}
?>

<!DOCTYPE html>
<html>
<style>
body {
  background-color: var(--main-clr);
  user-select: none;
  height: 100%;
}

body a {
  cursor: none;
}
			
:root{
    --main-clr: rgb(235, 236, 240);
    --font-clr: 108, 122, 146;
    --bright-clr: 255, 255, 255;
    --dark-clr: 0, 0, 0;
}

.txt {
  margin:2%;
  color:#000;
  font-size: 4vw;
  text-align: left;
}

.cardose {
  height: auto;
  padding: 4%;
  text-align: left;
  border-radius: 15px;
  margin-bottom: 8%;
  user-select: none;
  width:80%;
  margin-left: 10%;
  background-color: var(--main-clr);
  box-shadow: 8px 8px 10px rgba(var(--dark-clr), 0.2), -8px -8px 10px rgba(var(--bright-clr), 0.8);
  display: block;
  display: flex;
  align-items: center;
}

.img {
 width:6%;
 margin: 0%;
 padding:5px;
 Position: absolute;
 margin-left: 70%;
}

.row4 a {
  height: 100%;
  
}

</style>
<body>
<!----ISI AKUN---->
<div class="row4" style="margin-top:10%;padding:0px;width:100%;margin-bottom: 3%;">

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:0%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 5.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 10.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 25.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 50.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:0%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 70.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 85.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 100.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 150.000</p>
</div></a>

<a
href="#" style="text-decoration:none" target="_blank"><div class="cardose" style="padding:6px;margin-top:5%;">
  <img class="img" src="https://kioos.files.wordpress.com/2021/08/wp-1628932234333.png" alt="">
  <p class="txt">Telkomsel Rp 200.000</p>
</div></a>

</div>
<br/>


</body>
</html>
