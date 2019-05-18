<?php 
require 'inc/ctec_functions.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  // Function 1
  echo 'Function 1 <br>';
  if (is_post_request()) {
      echo 'It\'s a POST';
      }else{
        echo 'oops not a POST!';
      }
    
  echo '<br><br>';
  
  // Function 2
  echo 'Function 2 <br>';
  if (is_get_request()) {
    echo 'YAY! It\'s a GET';
      }else{
        echo 'oops, not a GET!';
  }
  echo '<br><br>';
  
  // Function 3
  #the output in page source is: hello world &quot;PHP&quot;. Look at me in &quot;view page source&quot;!
  $petName = 'Hey "PHP"! Look at me in "view page source"! ';
  echo 'Function 3 <br>';
  echo h($petName);
  echo '<br><br>'; 

  // Function 4 
  $myurl = 'https://www.petfinder.com/';
  echo 'Function 4 <br>';
    echo u($myurl);
  echo '<br><br>';

  // Function 5
  $myUrl = 'hello world  https://www.petfinder.com/ ';
  echo 'Function 5 <br>';
    echo raw_u($myUrl);
  echo '<br><br>';
  
  // Function 6
  $abc = 'abcd';
  $abcd = '';
  
  echo 'Function 6 <br>';
    echo is_blank($abcd);
  echo '<br><br>';

  // Function 7
  echo 'Function 7 <br>';
    echo has_presence($abc);
  echo '<br><br>';
  
  // Function 8
  echo 'Function 8 <br>';
    echo has_length_greater_than($abc, 3);
  echo '<br><br>';

  // Function 9
  echo 'Function 9 <br>';
    echo has_length_less_than($abc, 5);
  echo '<br><br>';
  
  // Function 10
  echo 'Function 10 <br>';
    echo has_length_exactly($abc, 4);
  echo '<br><br>';

  // Function 11
  echo 'Function 11 <br>';
    echo has_length('abcd', ['min' => 3, 'max' => 5]);
  echo '<br><br>';

  // Function 12
  $num = [1,3,5,9];
  echo 'Function 12 <br>';
    echo has_inclusion_of( 5, $num );
  echo '<br><br>';

  // Function 13
  echo 'Function 13 <br>';
    echo has_exclusion_of( 7, $num );
  echo '<br><br>';

  // Function 14
  echo 'Function 14 <br>';
    echo has_string('nobody@nowhere.com', '.com');
  echo '<br><br>';

  // Function 15
  echo 'Function 15 <br>';
    echo has_valid_email_format('nobody@nowhere.com');
  echo '<br><br>';

  // Function 16
  $errors = ['Wrong!','False!','Tina you fat lard, come get some dinner.','Gosh!'];
  echo 'Function 16 <br>';
    echo display_errors($errors);
  echo '<br><br>';
  
  ?>
</body>
</html>