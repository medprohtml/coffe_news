<?php
session_start();
include "cnct.php";
include "navbar.php";
$id=$_SESSION["id"];
$stmt = $conn->prepare("SELECT co.* FROM comand co
INNER JOIN useres us ON co.userid = us.id WHERE co.userid = '$id' AND co.actionn = 'yes'");
$stmt->execute();





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

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

    
                <th scope="col" class="px-6 py-3">
           
                    نوع القهوة
            </th>
            <th scope="col" class="px-6 py-3">
           
                الكمية
        </th>
    
        <th scope="col" class="px-6 py-3">
        action
    </th>


                    
                </tr>
            </thead>
            <tbody>  ';
    
            if($stmt-> rowCount()>0){
                foreach( $stmt->fetchAll() as $cf){
                    if($cf["actionn"]=="yes"){
                        $action="طلبية تم تاكيدها من طرف المقهي ستصلك قريبا";
                        $pro="50%" ;
                        $prov="50%" ;

                    }
 

                    if($cf["homee"]=="yes"){
                        $pro="100%" ;
                        $prov="100%" ;
                        $action='<p class=" font-bold text-green-600"> لقد توصلت بالطلبية</p>';
                    }
                 echo'  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    
    
                   <td class="px-6 py-4">
                   '.$cf["typee"].'
                   </td>
                   <td class="px-6 py-4">
                   '.$cf["num"].'
                   </td>
                   <td class="px-6 py-4">
                   <p class=" text-green-400 font-bold">'.$action.'</p>
                   
                   </td>
               </tr>
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td colspan="4" class="px-6 py-4">
               <div class=" flex w-full justify-center items-center">
               <div class=" w-full h-4 bg-slate-400 rounded-full">
               <div class=" w-full h-4  bg-blue-700 rounded-full" style="width:'.$pro.'">
               <p class=" text-black font-bold">'.$prov.'</>
               </div>
               </div>
               <p class=" font-semibold">تقدكم الطلبية</p>
               </div>
               </td>
               </tr>
               '

               
               ;
                }
               }
   ?>