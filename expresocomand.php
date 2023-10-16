<?php 
session_start();
if(! isset($_SESSION["nom"])){
 header("location:login.php");
}
$idus= $_SESSION["id"];

include "cnct.php";
include "navbar.php";


$up="";
if(isset($_POST["sub"])&& isset($_GET["type"])){
    $adresse=$_POST["adresse"];
    $home =$_POST["home"];
    $number= $_POST["number"];
    $typee=$_GET["type"];
    
    if(  !empty($adresse) && !empty($home)&& !empty($number)){
      $stmt=$conn->prepare("INSERT INTO comand (adress,home,typee,num,userid) VALUES ('$adresse','$home','$typee','$number','$idus')");
      $stmt->execute();
      $up='<div class=" bg-green-500 flex w-full justify-center items-center "><p class="font-bold text-lg text-black "> سيتم تحضير طبيتك</p></div>';
      echo '<script>new Audio("ss.mp3").play();</script>';

    }
    else{
        echo"noooo";
    }

}


?>
<?php echo $up; ?>
<div class="cm w-full p-2 flex flex-col justify-center items-center">

<form action="" method="post" class=" bg-amber-600 rounded-lg shadow-sm w-80 shadow-black">

<div class="w-full p-2 flex justify-center items-center"> <p class=" font-bold text-lg text-black">اطلب قهوتك الان</p> </div>
<div class="w-full p-3"><p class=" mb-3 text-white font-bold text-clip">العنوان</p> <input name="adresse" class=" w-full h-9  rounded-md  border border-gray-200 focus:ring-amber-500 focus:border-amber-500" type="text" placeholder="ادخل عنوانك"></div>
<div class="w-full p-3"><p class=" mb-3 text-white font-bold text-clip">رقم المنزل</p> <input name="home" class=" w-full h-9  rounded-md  border border-gray-200 focus:ring-amber-500 focus:border-amber-500" type="text" placeholder="ادخل رقم المنزل"></div>
<div class="w-full p-3"><p class=" mb-3 text-white font-bold text-clip"> كم من كوب تريد </p> <input name="number" class=" w-full h-9  rounded-md  border border-gray-200 focus:ring-amber-500 focus:border-amber-500" type="number" ></div>
 <div class=" w-full p-2"><button id="but" name="sub" type="submit" class=" hover:scale-105 rounded-lg h-12 p-3 mt-3 mb-3 w-full bg-orange-950 text-white font-bold text-lg"> اطلب كوبك الساخن</button></div>

</form>


</div>
