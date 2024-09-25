<?php

$challenge = '<h1 style="font-weight: bold; font-size: 36px;">Challenge 1: Sum of an array</h1><br>

      <i>Follow the instructions below:</i><br>

      1. Create an array of numbers: 1,2,3,4,5<br>
      2. Get the sum of all of the numbers combined and put into a variable. $sum<br>
      3. Count the number of elements in the array and put into a variable. $quantity<br>
      4. Print out "The sum of the {quantity} numbers is: {sum} ". For example, if the array is <br>
      [1, 2, 3, 4, 5], the output should be "The sum of the 5 numbers is: 15.';

 $title='Lab2a_Gabuyo';
 $pageTitle1='Maegan Rose Gabuyo';
 $pageTitle2='3BSIT-1';
     
    echo '<div style="background-color:pink; padding:10px; text-align:center;">';
    echo '<h1><strong>Laboratory 2 Challenge A: SUM OF AN ARRAY</strong></h1>';
    echo '</div>';


     //1. Create an array of numbers: 1,2,3,4,5
     $numbers = [1, 2, 3, 4, 5];
     $output1=implode(', ',$numbers);
     

    //2. Get the sum of all of the numbers combined and put into a variable. $sum
     $sum = array_sum($numbers);
    $output2= "The sum of all all the numbers is $sum.";

    // 3. Count the number of elements in the array and put into a variable. $quantity
    $quantity = count($numbers);
    $output3= "The number of elements in the array is $quantity.";

    echo '<br>';

    //4. Print out 'The sum of the {quantity} numbers is: {sum} 
    $output4= "The sum of the $quantity numbers is $sum.";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?=$title?></title>
</head> 

<!-- Pink Header with Name and Section -->
<body class="bg-white">
    <header class="bg-pink-500 text-white p-20 h-40 flex justify-center">
        <div class="w-full max-w-2xl">
            <h5 class="text-3xl font-semibold text-center -mt-10" style="font-family: 'Arial', sans-serif; ">
                <?=$pageTitle1?><br>
            </h5>
            <h5 class="text-2xl font-semibold text-center" style="font-family: 'Arial', sans-serif;">
                <?=$pageTitle2?>
        </div>
    </header>

  <!-- Circle frame with image inside -->
<div class="relative">
    <div class="w-40 h-40 bg-white border border-pink-500 rounded-full mx-auto -mt-10 overflow-hidden" style="border-width: 5px;">
        <img src="Maegan_Gabuyo.png" alt="Image" class="w-full h-full object-cover">
    </div>
</div><br>

    
<div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
    

    <!-- Left Column: CHALLENGE -->
    <div style="width: 45%; max-width: 800px;">

        <!-- Challenges 1-4 -->
        <div style="border: 5px solid RED; padding:10px; text-align:start; height:293px; font-family: Arial, sans-serif; font-size: 20px; font-weight: normal;">
            <h1><?= $challenge ?></h1>
        </div>
        </div>
        
    <!-- Left Column: Pink-bordered containers -->
    <div style="width: 45%; max-width: 650px;">

        <!-- Display the numbers -->
        <div style="border: 5px solid pink; padding:5px; text-align:center; height:65; margin-bottom: 10px;font-family: Arial, sans-serif; font-size: 33px; font-weight: normal;">
            <h2><?= $output1 ?></h2>
        </div>

        <!-- Sum of all the numbers in the array -->
        <div style="border: 5px solid pink; padding:5px; text-align:center; height:65px; margin-bottom: 10px;font-family: Arial, sans-serif; font-size: 33px; font-weight: normal;">
            <h2><?= $output2 ?></h2>
        </div>

        <!-- Elements count in the array -->
        <div style="border: 5px solid pink; padding:5px; text-align:center; height:65px; margin-bottom: 10px;font-family: Arial, sans-serif; font-size: 33px; font-weight: normal;">
            <h2><?= $output3 ?></h2>
        </div>

        <!-- Print/Display the output 3 with output 2 -->
        <div style="border: 5px solid pink; padding:5px; text-align:center; height:65px;font-family: Arial, sans-serif; font-size: 33px; font-weight: normal;">
            <h2><?= $output4 ?></h2>
        </div>
    </div>

        <!-- Print/Display the output 3 with output 2 -->
        <div style="border: 5px solid pink; padding:5px; text-align:center; height:65px;font-family: Arial, sans-serif; font-size: 33px; font-weight: normal;">
            <h2><?= $output4 ?></h2>
        </div>
    </div>



</div>
<br>
