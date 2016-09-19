<?php

echo 'Continue:';
echo '<br/>';

$arr = array(1, 2, 3, 4);
foreach($arr as $number) {
  if($number == 2) {
    continue;
  }
  echo "$number <br/>";
}

echo '<br/>';

echo 'Break:';
echo '<br/>';

$arr = array(1, 2, 3, 4);
foreach($arr as $number) {
  if($number == 2) {
    break;
  }
  echo "$number <br/>";
}