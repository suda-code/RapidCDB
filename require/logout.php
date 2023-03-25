<?php
 setcookie('id','' , time()-1,"/");
 setcookie('avator','' , time()-1,"/");
 
 header("Location:../index.php");