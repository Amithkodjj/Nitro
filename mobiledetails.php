<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <link rel="stylesheet" href="style.css"> <title>Indian Scripter</title></head><style> select { width: 100%; height: 65px; margin: 15px 0; border-radius: 4px;		padding:0 20px;		font-size: 15px;		outline: none; font-family: 'Bree Serif', serif; }</style><body> <div class="limiter"> <h1>Number Details Finder</h1><?php
if (!isset($_POST['submit'])) {
 # code...
 echo'<div class="fadeInDown">
 <form action="" method="post" autocomplete="off">


 <input type="text" name="mobile" class="input" placeholder="Enter Number"required/><br>
 <input  type="submit" name="submit" class="submit" value="Search Number"/>
 </form><br> </div>';}


     


error_reporting(0);
if(isset($_POST['submit'])) {
$mobile=$_POST['mobile'];
$s=file_get_contents("coin.txt");
$s1=$s+1;
file_put_contents("coin.txt","$s1");


$url6='https://search5-noneu.truecaller.com/v2/search?q='.$mobile.'&countryCode=IN&type=4&locAddr=&placement=SEARCHRESULTS%2CHISTORY%2CDETAILS&adId=fe2ff269-0928-4b8f-bb39-42b8e190b8eb&encoding=json';
$data6='';

$headers6=['Host: search5-noneu.truecaller.com','authorization: Bearer a1i02--UszsvV-6V0yUaziizdNbCSD6J9tX2dMGoDP92fXT8GbZm1rHZk64hX-QB', 'user-agent: Truecaller/12.1.6 (Android;9'];

$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url6);curl_setopt($ch,CURLOPT_HTTPHEADER, $headers6);curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);$result6=curl_exec($ch);curl_close($ch);
$decode=json_decode($result6,true);$name=$decode['data']['0']['name'];$image=$decode['data']['0']['image'];$surname=$decode['data']['0']['altName'];$about=$decode['data']['0']['about'];$mobile1=$decode['data']['0']['phones']['0']['e164Format'];$countrycode=$decode['data']['0']['phones']['0']['countryCode'];$carrier=$decode['data']['0']['phones']['0']['carrier'];$city=$decode['data']['0']['addresses']['0']['city'];$zipcode=$decode['data']['0']['addresses']['0']['zipCode'];$street=$decode['data']['0']['addresses']['0']['street'];$time=$decode['data']['0']['addresses']['0']['timeZone'];$email=$decode['data']['0']['internetAddresses']['0']['id'];




echo "<div class='fadeInDown'><form>
<div class='white'><font colour='black'> Searched Number Details </div></font>
<img src= $image id='image' class='rotate' height='250'></image><br>
<div class='success'>Name : $name</div>

<div class='success'>Mobile =$mobile1 </div>

<div class='success'>Operator =$carrier </div>
<div class='success'>City =$city </div>
<div class='success'>Pin Code =$zipcode </div>
<div class='success'>Adress =$street </div>
<div class='success'>Time Zone =$time </div>
<div class='success'>Email Id =$email </div>

</form></div>";

}


?>
<div class="telegram"> <i class="fa fa-telegram" aria-hidden="true"></i> <a href="https://telegram.me/indianscripters">Join Our Telegram</a></div></div></body></html>
<br>

<div class='white'><font colour='black'>Total Number Serched :<font colour='blue'> <?php echo"$s1"; ?> </div></font><br></body> </html>