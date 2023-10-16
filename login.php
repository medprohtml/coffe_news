<?php
include "cnct.php";
include "navlogin.php";
session_start();
if(isset($_POST["sub"])){
    $nom=$_POST["nom"];
    $pass=$_POST["pass"];
    $stmt=$conn->prepare("SELECT * from useres WHERE nom='$nom' and pass='$pass'");
    $stmt->execute();
    if($stmt->rowCount()>0){
        $result=$stmt->fetch();
        $_SESSION["nom"]=$result["nom"];
        $_SESSION["id"]=$result["id"];
        header("location:nouser.php");
    }
}

?>

<form action="" method="post">


  <div class=" w-full flex flex-col justify-center items-center">
    <div class="relative z-0 w-full mb-6 group">
        <input name="nom" type="text"  id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">الاسم</label>
    </div>

  <div class="relative z-0 w-full mb-6 group">
      <input name="pass" type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">كلمة المرور</label>
  </div>
  </div>


  <button name="sub" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">تسجيل الدخول</button>
<a href="sign.php" class=" p-2  text-lg font-medium bg-slate-700 text-white rounded-md">انشاء حساب</a>

</form>