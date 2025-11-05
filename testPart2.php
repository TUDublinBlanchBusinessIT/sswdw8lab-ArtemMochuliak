<?php
require_once 'Team.php';

$team = new Team("Tigers");


$team->finalScore(3, 1);
$team->finalScore(1, 1);
$team->finalScore(2, 2);


echo "Goal average: " . $team->getGoalAverage() . "\n";
?>