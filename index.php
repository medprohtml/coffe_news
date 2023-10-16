<?php
session_start();


;

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<body class="bg-slate-100">
    <div class="bg-yellow-700 w-full flex    items-center " >
     <p class=" font-bold  text-lg  p-4"> LOGO</p>

     <p class=" font-md text-md p-4 ms-4 hover:font-semibold hover:cursor-pointer  "><a href="nouser.php">الصفحة الرءيسية</a></p>

     <p class=" font-md text-md p-4 ms-4 hover:font-semibold hover:cursor-pointer  "><a href="login.php">تسجيل الدخول </a></p>
    </div>  
    <div class="w-full"> <img class="w-full h-96 object-cover" src="images/top-view-cup-coffee-with-roasted-beans_52683-32340.avif" alt=""> </div>
   
     <div class=" mt-2 p-4 w-full grid grid-cols-4  gap-3">
       <!--card1-->
      <div class=" bg-white shadow-sm shadow-black lg:w-full md:w-full sm:w-10 flex flex-col  items-center  rounded-md ">
            <h3 class="text-black text-2xl"> Cafee Expreso</h3>
            <img class="object-cover w-full  " src="images/16396b8faf3c4f9056c46ac8d0c98ea9.jpg"  alt="">
           <div class="w-full ms-2">  <p class="font-bold text-lg text-black ">اطلب قهوة اكسبريسو الان</p></div>
          <div class=" w-full grid grid-cols-2 gap-6 p-3 "> <h3 class=" text-black text-xl font-bold rounded-md  p-3 text-center w-14 "> 10$</h3> <a href="expresocomand.php?type=expreso  " class="text-xl  text-white font-extralight bg-blue-500 rounded-md  w-32 p-3 text-center  "> اطلب الان</a>   </div>
      </div>
       <!--card1-->
     
     </div>

</body>
</html>


