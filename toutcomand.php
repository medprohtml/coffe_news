<?php
session_start();
include "cnct.php";
include "navbar.php";
$action="";
$pro="";
$prov="";
$id=$_SESSION["id"];
$stmt2 = $conn->prepare("SELECT co.* FROM comand co
INNER JOIN useres us ON co.userid = us.id WHERE co.userid = '$id' ");
$stmt2->execute();


?>




<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>

    <div class="w-full"> <img class="w-full h-96 object-cover" src="images/top-view-cup-coffee-with-roasted-beans_52683-32340.avif" alt=""> </div>
    <?php
    echo'

    <div class="p-3 w-full grid grid-cols-2  md:grid-cols-3 gap-2">'

;
    
            if($stmt2-> rowCount()>0){
                foreach( $stmt2->fetchAll() as $cf){
                    if($cf["actionn"]=="yes"){
                        $action="<p class=' text-blue-500'>طلبية تم تاكيدها من طرف المقهي ستصلك قريبا </p>";
                        $pro="50%" ;
                        $prov="50%" ;

                    }
 

                    else{
                      $action="قيد الانتضار";
                      $pro="10%" ;
                      $prov="10%" ;
                    }
                    if($cf["homee"]=="yes"){
                        $pro="100%" ;
                        $prov="100%" ;
                        $action='<p class=" font-bold text-green-600"> لقد توصلت بالطلبية</p>';
                        
                    }

                 echo'  
                 <div class=" p-6 mt-3 bg-slate-50 shadow-md shadow-black">
                 <div> <p class="font-bold text-xl">النوع:'.$cf["typee"].'</p>
                   <p>الكمية :   '.$cf["num"].' كوب</p>
                   <p>الحالة  :   '.$action.'</p>
                 
                       <p class=" font-semibold">  تقدم الطلبية :</p>
                       <div class=" w-full h-4 bg-slate-400 rounded-full">
                       <div class=" w-full h-4  bg-blue-700 rounded-full" style="width:50%">
                      
                       </div>
                       </div>
                       
               </div></div>'
               ;
                }
               }
   ?>

</div>
