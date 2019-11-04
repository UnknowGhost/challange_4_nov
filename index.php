<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 4-11-2019
 * Time: 13:27
 */



$boodschap = ["aardappel", "aardbeien", "3 pakken melk", "yogurt"];
//echo $boodschap[1], $boodschap[2], $boodschap[3], $boodschap[4];

?>

<div>
    <ul>
        <li>
           <?php echo $boodschap[0]?>
        </li>
        <li>
            <?php echo $boodschap[1]?>
        </li>
        <li>
            <?php echo $boodschap[2]?>
        </li>
        <li>
            <?php echo $boodschap[3]?>
        </li>
    </ul>
</div>
