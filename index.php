<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Physics Quiz</title>
<style type="text/css">
body {
	background-color: #399;
}
</style>
</head>

<body>
<?php //print_r($Q); ?>
<?php echo "<br>"; ?>
<p>A boy drops a baseball off of a roof <?php echo $Yf = mt_rand(10, 100); ?> meters from the ground.</p>

<?php
  $Q[1] = "How many seconds after the ball is dropped does it take to hit the ground?";
  $Q[2] = "What is the final velocity of the ball just before it hits the ground?";
  $n = mt_rand(1, 2);
  echo "And the randomized question is... " . "<br><br>" . $Q[$n] . "<br>" . "<br>";  
?>

<?php
  $g = 9.81;
  $Yo = 0;
  //Equations
  //Vf = -gt; Vf = [-2g(Yf - Yo)]^(1/2); Yf = -(1/2)(gt^2)
  //echo "Final Vertical Velocity " . $Vf = ((2*$g)*($Yf - $Yo))^(1/2);
  echo "<br>"; 
  //echo "time " . $t = ($Vf)/((-1)*$g); 
  echo "<br>";
  echo "time " . $t = sqrt((2*($Yf - $Yo))/$g);
  echo "<br>";

  echo "Final Vertical Velocity " . $Vf = -$g*$t;  
  echo "<br>"; 
  echo "Vertical Height " . $Yf = (-1/2)*($g*($t^2));
?>

</body>
</html>