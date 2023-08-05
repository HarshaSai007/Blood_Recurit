<?php
include "../conn.php";


$sql = "SELECT * FROM blood_banks WHERE id=1";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {

 $a1_ap = $row['ap'];
 $a1_an = $row['an'];
 $a1_bp = $row['bp'];
 $a1_bn = $row['bn'];
 $a1_abp = $row['abp'];
 $a1_abn = $row['abn'];
 $a1_op = $row['op'];
 $a1_on = $row['one'];
}


$sq = "SELECT * FROM blood_banks WHERE id=2";
$resul = $conn->query($sq);
while ($ro = mysqli_fetch_assoc($resul)) {

    $a2_ap = $ro['ap'];
    $a2_an = $ro['an'];
    $a2_bp = $ro['bp'];
    $a2_bn = $ro['bn'];
    $a2_abp = $ro['abp'];
    $a2_abn = $ro['abn'];
    $a2_op = $ro['op'];
    $a2_on = $ro['one'];
   }


   $sq1 = "SELECT * FROM blood_banks WHERE id=3";
$resul1 = $conn->query($sq1);
while ($ro1 = mysqli_fetch_assoc($resul1)) {

    $a3_ap = $ro1['ap'];
    $a3_an = $ro1['an'];
    $a3_bp = $ro1['bp'];
    $a3_bn = $ro1['bn'];
    $a3_abp = $ro1['abp'];
    $a3_abn = $ro1['abn'];
    $a3_op = $ro1['op'];
    $a3_on = $ro1['one'];
   }

   $sql1 = "SELECT * FROM blood_banks WHERE id=4";
   $result1 = $conn->query($sql1);
   while ($row1 = mysqli_fetch_assoc($result1)) {
   
       $a4_ap = $row1['ap'];
       $a4_an = $row1['an'];
       $a4_bp = $row1['bp'];
       $a4_bn = $row1['bn'];
       $a4_abp = $row1['abp'];
       $a4_abn = $row1['abn'];
       $a4_op = $row1['op'];
       $a4_on = $row1['one'];
      }

      $sql2 = "SELECT * FROM blood_banks WHERE id=5";
      $result2 = $conn->query($sql2);
      while ($row2 = mysqli_fetch_assoc($result2)) {
      
          $a5_ap = $row2['ap'];
          $a5_an = $row2['an'];
          $a5_bp = $row2['bp'];
          $a5_bn = $row2['bn'];
          $a5_abp = $row2['abp'];
          $a5_abn = $row2['abn'];
          $a5_op = $row2['op'];
          $a5_on = $row2['one'];
         }

         $sql3 = "SELECT * FROM blood_banks WHERE id=6";
      $result3 = $conn->query($sql3);
      while ($row3 = mysqli_fetch_assoc($result3)) {
      
          $a6_ap = $row3['ap'];
          $a6_an = $row3['an'];
          $a6_bp = $row3['bp'];
          $a6_bn = $row3['bn'];
          $a6_abp = $row3['abp'];
          $a6_abn = $row3['abn'];
          $a6_op = $row3['op'];
          $a6_on = $row3['one'];
         }

         $sql4 = "SELECT * FROM blood_banks WHERE id=7";
      $result4 = $conn->query($sql4);
      while ($row4 = mysqli_fetch_assoc($result4)) {
      
          $a7_ap = $row4['ap'];
          $a7_an = $row4['an'];
          $a7_bp = $row4['bp'];
          $a7_bn = $row4['bn'];
          $a7_abp = $row4['abp'];
          $a7_abn = $row4['abn'];
          $a7_op = $row4['op'];
          $a7_on = $row4['one'];
         }

         
         $sql5 = "SELECT * FROM blood_banks WHERE id=8";
      $result5 = $conn->query($sql5);
      while ($row5 = mysqli_fetch_assoc($result5)) {
      
          $a8_ap = $row5['ap'];
          $a8_an = $row5['an'];
          $a8_bp = $row5['bp'];
          $a8_bn = $row5['bn'];
          $a8_abp = $row5['abp'];
          $a8_abn = $row5['abn'];
          $a8_op = $row5['op'];
          $a8_on = $row5['one'];
         }
      
 


?>