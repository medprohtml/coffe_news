<?php

include "cnct.php";
session_start();
include "navbar.php";


?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>

    <div class="w-full h-96"> <img class="w-full h-96 object-cover" src="images/top-view-cup-coffee-with-roasted-beans_52683-32340.avif" alt=""> </div>
   
     <div class=" mt-2 p-4 w-full grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1  gap-3">
       <!--card1-->
       <div class="  bg-white shadow-sm shadow-black lg:w-full md:w-full flex flex-col  items-center  rounded-md ">
            <h3 class="text-black text-2xl"> Cafee Expresso</h3>
            <img class="h-56 object-cover w-full  " src="images/16396b8faf3c4f9056c46ac8d0c98ea9.jpg"  alt="">
           <div class="w-full ms-2">  <p class="font-bold text-lg text-black ">اطلب قهوة بالكريمة الان</p></div>
          <div class=" w-full grid grid-cols-2 gap-6 p-3 "> <h3 class=" text-black text-xl font-bold rounded-md  p-3 text-center w-14 "> 20 Dirham</h3> <a href="expresocomand.php?type=cofee_creme  " class="text-xl  text-white font-extralight bg-blue-500 rounded-md h-16  w-32 p-3 text-center  "> اطلب الان</a>   </div>
      </div>
       <!--card1-->

              <!--card1-->
      <div class="  bg-white shadow-sm shadow-black lg:w-full md:w-full flex flex-col  items-center  rounded-md ">
            <h3 class="text-black text-2xl"> Cafee Creme</h3>
            <img class="h-56 object-cover w-full  " src="images/coffee-love-foam-beans-cartoon-260nw-1889896450.webp"  alt="">
           <div class="w-full ms-2">  <p class="font-bold text-lg text-black ">اطلب قهوة بالكريمة الان</p></div>
          <div class=" w-full grid grid-cols-2 gap-6 p-3 "> <h3 class=" text-black text-xl font-bold rounded-md  p-3 text-center w-14 "> 20 Dirham</h3> <a href="expresocomand.php?type=cofee_creme  " class="text-xl  text-white font-extralight bg-blue-500 rounded-md h-16  w-32 p-3 text-center  "> اطلب الان</a>   </div>
      </div>
       <!--card1-->
       <div class=" bg-white shadow-sm shadow-black lg:w-full md:w-full flex flex-col  items-center  rounded-md ">
        <h3 class="text-black text-2xl"> Cafee with Milk</h3>
        <img class=" h-56 object-cover w-full  " src="images/preparation-coffee-milk-sugar-milk-added-to-coff-symbolic-image-jug-poured-98005666.webp"  alt="">
       <div class="w-full ms-2">  <p class="font-bold text-lg text-black ">اطلب قهوة بالحليب الان</p></div>
      <div class=" w-full grid grid-cols-2 gap-6 p-3 "> <h3 class=" text-black text-xl font-bold rounded-md  p-3 text-center w-14 "> 14 Dirham</h3> <a href="expresocomand.php?type=cofee_milk  " class="text-xl  text-white font-extralight bg-blue-500 rounded-md h-16  w-32 p-3 text-center  "> اطلب الان</a>   </div>
  </div>
   <!--card1-->
          <!--card1-->
          <div class=" bg-white shadow-sm shadow-black lg:w-full md:w-full flex flex-col  items-center  rounded-md ">
        <h3 class="text-black text-2xl"> Cafee Noire</h3>
        <img class=" h-56 object-cover w-full  " src="images/international-day-of-coffee-background-coffee-cup-logo-free-vector.jpg"  alt="">
       <div class="w-full ms-2">  <p class="font-bold text-lg text-black ">اطلب قهوة نورمال الان</p></div>
      <div class=" w-full grid grid-cols-2 gap-6 p-3 "> <h3 class=" text-black text-xl font-bold rounded-md  p-3 text-center w-14 "> 14 Dirham</h3> <a href="expresocomand.php?type=cofee_normal(noir)  " class="text-xl  text-white font-extralight bg-blue-500 rounded-md h-16  w-32 p-3 text-center  "> اطلب الان</a>   </div>
  </div>
   <!--card1-->
     
     </div>

</body>
</html>


