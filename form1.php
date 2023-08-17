<?php
echo("1".$_POST['f1'].$_POST['f1_t']);
echo("2".$_POST['f2'].$_POST['f2_t']);
echo("3".$_POST['f3']);
echo("4".$_POST['f4']);
echo("5".$_POST['f5']);
echo("6".$_POST['f6']);
echo("7".$_POST['f7'].$_POST['f7_t']);
?>

<!-- check wheather input field is empty  -->
for ($a = 0; $a < $count; $a++)
        {
                if($_POST['customlabel'][$a] == "")
                {
                    exit('Criteria name can not be empty ');
                }
                if($_POST['operator'][$a]  == "" )
                {
                    exit('Operator name can not be empty ');
                }
                if($_POST['operand1'][$a] == "")
                {
                    exit('Rang1  name can not be empty  ');
                }
                if($_POST['color'][$a] == "")
                {
                    exit('color name can not be empty ');
                }
        }


        <!-- color ckeck -->
        $color = "";
    while($rec_row = mysqli_fetch_assoc($va))
    {
        if($rec_row['color'] == "#ff6600")
        {
            $color =  "orange";

        }else if ($rec_row['color'] == "#cc0000")
        {
            $color = "red" ;

        }else if ($rec_row['color'] == "#0000ff")
        {
            $color = "blue" ;

        }else if ($rec_row['color'] == "#00ff00")
        {
            $color = "Green";

        }else if ($rec_row['color'] == "#003300")
        {
            $color = "Dark green";
        }
        echo "<tr>
          <td>".$count."</td>
          <td>".$rec_row['label']."</td>
          <td>".$rec_row['operator']."</td>
          <td>".$rec_row['operand1']."</td>
          <td>".$rec_row['operand2']."</td>
          <td>".$color."</td>

 <!-- label issatring or not    -->
 for ($a = 0; $a < $count; $a++)
        {
            if (is_string($_POST['customlabel'][$a]))
            {
                exit('you only enter alphabets ');
            }
        }

