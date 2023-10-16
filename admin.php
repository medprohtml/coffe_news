<?php

include "cnct.php";
include "adminav.php";
$action="";
$home="";
$stmt = $conn->prepare("SELECT us.nom AS usernom, us.prenom AS userprenom,co.actionn AS actionn, co.* FROM useres us INNER JOIN comand co ON us.id = co.userid ");
$stmt->execute();
$count=$stmt-> rowCount();

echo'
<p class=" font-bold text-lg text-black"> عدد الطلبات :<spam class=" font-bold text-red-700"> '.$count.'</spam></p>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    الاسم
                </th>
   
                <th scope="col" class="px-6 py-3">
                        النسب

                </th>
                <th scope="col" class="px-6 py-3">
                        العنوان
                       
                </th>

                <th scope="col" class="px-6 py-3">
                    المنزل
            </th>

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
        $action="تم تاكيد الطلبية ارسلها في اقرب وقت";



    }
    
    else{
    $action='<a id="but" class=" font-bold text-blue-500 rounded-md" href="up.php?id='.$cf['id'].'">تاكيد الطلبية</a>';
    
    }
    if($cf["homee"]=="yes"){
        $home='تم ايصال الطلبية ';
      }
      if($cf["homee"]!="yes"){
        $home='<a id="but2" class=" font-bold text-blue-500 rounded-md" href="inhome.php?id='.$cf['id'].'">    ايصال الطلبية</a>';

          }



  echo'  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
  <td class="px-6 py-4">
  '.$cf["usernom"].'
  </td>
    <td class="px-6 py-4">
    '.$cf["userprenom"].'
    </td>
    <td class="px-6 py-4">
    '.$cf["adress"].'
    </td>
    <td class="px-6 py-4">
    '.$cf["home"].'
    </td>

    <td class="px-6 py-4">
    '.$cf["typee"].'
    </td>
    <td class="px-6 py-4">
    '.$cf["num"].'
    </td>
    <td class="px-6 py-4">
    '. $action.'
 
    </td>
    <td class="px-6 py-4">
    '.$home.'
    </td>
</tr>';
 }
}
if($stmt-> rowCount()<1){$nodata=' <div class=" w-full flex justify-center items-center" ><p class=" font-extrabold text-black text-lg"> لا توجد طلبات حاليا</p></div>  ';}
echo ' </tbody>
</table>

</div>';

?>
<script> var but=document.getElementById("but");
console.log(but)
 var but2=document.getElementById("but2")
but.addEventListener("click",()=>{
  setTimeout(function(){
    window.location.href="nouser.php"
  },1000)

})
but2.addEventListener("click",()=>{
  setTimeout(function(){
    window.location.href="nouser.php"
  },1000)

})
</script>
           