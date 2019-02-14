<?php

$players = array(8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6);
$team1 = array();
$team2 = array();
$remainders = array();
$median_skill = array_sum($players) / count($players);
sort($players, SORT_NUMERIC);

// for each to add players to team one if they are even numbers 
foreach($players as $px) {
  if($px % 2 == 0){
    array_push($team1, $px);
  }
  //if they are uneven add them to team two
  else 
  {     
    array_push($team2, $px);
  }
} 
//check the averages of both teams
echo "team1 avg " . array_sum($team1) / count($team1) . "\n";
echo "team2 avg " . array_sum($team2) / count($team2) . "\n";
//checking the values in the array
print_r($team2);

//for loop to see if there are duplicate entries within the players array
$count = count($players) / count($players[0]);
for ($i = 0; $i < $count - 1; $i++){
  for ($j = $i + 1; $j < $count; $j++){
    if ($players[$i] == $players[$j]){
      // do something when the dupicate is found
      echo "Duplicates = " . $players[$i] . "\n";
      
    }
  }
}




