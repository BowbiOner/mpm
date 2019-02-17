<?php

$players = array(8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6);
$team1 = array();
$team2 = array();
// $unique = array_unique($players);
$count = array_count_values($players);
$dups = array_keys(array_diff($count, [1]));
$median_skill = array_sum($players) / count($players);
// sort($players, SORT_NUMERIC);


// print_r($unique);
foreach($dups as $u1){
  $team1[] = $u1;
  $team2[] = $u1;
}
//print to see val of output
// both teams have     
//     [0] => 8
//     [1] => 5
//     [2] => 6
//     [3] => 3
//     [4] => 10
//     [5] => 7
echo "base team1 \n";
print_r($team1);
echo "base team2 \n";
print_r($team2);

//remove the unique numbers that being 
// Array
// (
//     [3] => 9
//     [6] => 2
//     [7] => 4
//     [13] => 1
// )
$unique = array_diff($players, $team1);
echo "Unique skill \n";
rsort($unique);
print_r($unique);

//remove the unique numbers from the dups/trips
$dupsntrips = array_diff($players, $unique);
// echo "Doubles and Triples \n";
// print_r($dupsntrips);

//remove unique numbers and dups and trips from the array (was expecting(
//     [0] => 8
//     [1] => 5
//     [2] => 6
//     [3] => 6 
// ) )
$rem = array(); //create array to store values in 
foreach($dupsntrips as $dt) { //for each item in dups and trips do this
  for($i = 0; $i < sizeof($dupsntrips) - 1; $i++){ //loop through the size of dups n trips -1
    // the != 3 is a hack as in my paper notes i was required to have 8,6,6,5 which would give me a more whole number but im running with it
      if($dupsntrips[$i] == $team1[$i] && sizeof($rem) != 3){ //if the numbers in team1 and dups and the size is set to 3
        $rem[$i] = $dupsntrips[$i]; //add dups n trips to remainder array
      }
      
  }
}
echo "Remainder \n";
rsort($rem);
print_r($rem);

//now mush the arrays together to finalize the two teams
$i = 0;
$min = 0;
$max = 4;
$rand = rand($min, $max);
array_push($team1, $unique[$rand]);


echo "NEW TEAM1 ";
print_r($team1);



