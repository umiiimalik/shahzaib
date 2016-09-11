<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<br>
<br><title>Umair_Malik</title>
       
        <link rel="shortcut icon" href="http://sumitbot.heck.in/files/fb.ico"> 
        <link rel="stylesheet" type="text/css" href="http://sumitbot.heck.in/files/sumitbot.css" media="all,handheld"/>
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(http://sumitbot.heck.in/files/bg.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
<br>
<div class="social">
    
           
                
                
                <center><p style="font-size:15px;color:white;margin-top:30px;">Umair Malik &copy; Copyright 2016, All Rights Reserved</p></center>
    
      </div>

    </head>
<?php
error_reporting(0);
function home($indonesia=null){
if($indonesia){
echo' <center>
<center>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<button class="button7" type="button" class="btn btn-success btn-rounded">Your Token Successfully Saved </button>
<br>
<br>
<br>
<br>
<a target="blank" href="https://m.facebook.com/PyrAa.SA.BachAa.ho" target="_blank"><button class="button6" type="button" class="btn btn-success btn-rounded">Thank To Umair Malik</button></a>';
}else{
include('token.php');
$data=json_decode(file_get_contents('https://graph.facebook.co.id/me?access_token='.$cokis),true);
if($data[id]){
masuk($data[name],$data[id],$cokis);
}else{
echo' <center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<a href="http://goo.gl/4GYbBl" target="_blank" style="text-decoration: none;"><button class="button1" type="button" >Allow The App</button></a>
<a href="https://goo.gl/RLHdiA" target="_blank" style="text-decoration: none;"><button class="button2" type="button" > Token </button></a>
<a href="https://m.facebook.com/PyrAa.SA.BachAa.ho" target="_blank" style="text-decoration: none;"><button class="button3" type="button" > Click Meet Admin </button></a>

</center>
<br>
<br>
<br>
    <center><font color="white" size="5"> Submit&nbsp; Your Token &nbsp; ! </font></strong></br>
<br>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" name="cetak" placeholder="&nbsp;&nbsp;Paste Your Token Here">
<br>
<input class="button4" type="submit" value="Save">
</form></center>';}
}
}

function masuk($name,$id,$tox){
echo'<center>
<hr style="width:50%;">
<strong><button class="button2" type="button" class="btn btn-success btn-rounded">Active User</button></strong>
<br>
<br>
<a href="http://www.facebook.com/'.$id.' "><img src="https://graph.facebook.com/'.$id.'/picture?type=large" style="width:110px; height:110px;border: none;border-radius: 50%;" alt="Umair Malik" class="thumbnail"/></a>
<button class="button8" type="button" class="btn btn-success btn-rounded">Name = '.$name.' </button>
<br>
<button class="button8" type="button" class="btn btn-success btn-rounded">Status = Token Active </button>
<br>
<a href="beranda.php
">
<input type="button" value="Check Manually" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;"> </a>
<br>
<center>
<a target="blank" href="?logot='.$tox.'"><button class="button2" type="button" class="btn btn-success btn-rounded">Logout Bot</button></a>
<Center><font color="red"size="4"><i> IF BOT NOT Working create Cronjob for this file <a href="beranda.php">Copy this link</a></font>
</b>
<hr style="width:50%;">

</center>';
}


if($_POST[cetak]){
$a=$_POST[cetak];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$tok=explode('&',$a);
$tok=$tok[0];
}
$tulis='<?php
$cokis="'.$tok.'";
?>';
$save=fopen('token.php','w');
fwrite($save,$tulis);
fclose($save);
home($tok);
}else{
if($_GET[logot]){
$a=$_GET[logot];
unlink('token.php');
Echo'<center>
<button class="button8" type="button" class="btn btn-success btn-rounded">Logout Successful</button>
<br>
<br>
<br>
<br>
<a target="blank" href="?home=home"><button class="button2" type="button" class="btn btn-success btn-rounded">Go Home</button></a>
</center>';
}else{
home();
}
}
?>
