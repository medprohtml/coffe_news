<?php




?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<body class="bg-slate-100">
 
    <div class=" bg-yellow-500 w-full flex flex-row items-center " >
     

     <p class=" font-md text-md p-4 lg:text-xl   sm:font-normal hover:font-semibold md:font-normal text-sm hover:cursor-pointer  "><a href="nouser.php">الصفحة الرئيسية</a></p>

     <p class=" font-md text-md p-4 lg:text-xl  sm:font-normal  hover:font-semibold md:font-normal text-sm hover:cursor-pointer  "><a href="toutcomand.php">  
    <span id="not" class=" absolute sm:top-0 sm:right-40 top-7 right-32 text-red-700  ml-2 inline-block whitespace-nowrap rounded-[0.27rem] bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-danger-700"
    ></span> 
        <i class=" text-slate-800 fa fa-cart-shopping"> </i> 
</a></p>

     <p class=" font-md text-md p-4 lg:text-xl  lg:ms-44 md:ms-0 sm:font-normal md:font-normal text-sm hover:font-semibold hover:cursor-pointer  "><a href="deconexion.php"> تسجيل الخروج </a></p>
    </div>  

    <script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("not").innerHTML = this.responseText;
   
  }
  xhttp.open("GET", "data.php");
  xhttp.send();

}
loadDoc()

</script>
    
