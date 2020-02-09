<?php
$json = file_get_contents('https://exerjson.herokuapp.com/json.php');

$data = json_decode($json,true);
$list = $data['profile'];
?>
<h1> BTS members </h1>
<?php
foreach($list as $value){
    ?>
    <ul>
        <li>Real Name: <?php echo $value['realname'];?></li>
        <li>Stage Name: <?php echo $value['stagename'];?></li>
        <li>Position: <?php echo $value['position'];?></li>
        <li>Bloodtype: <?php echo $value['btype'];?></li>
    </ul>
 
<?php
}
?>
