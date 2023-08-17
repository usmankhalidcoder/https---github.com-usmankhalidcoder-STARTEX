<?php
// session_start();
// include("db_con.php");
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "startex";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

if (isset($_GET['aid']))
{
    $var = $_GET['aid'] ; 
    $sql1 = "SELECT * FROM criteria_Set  WHERE clientID =  $var  ";
    $va = $conn->query($sql1);
    $count = 0 ;
    while($rec_row = mysqli_fetch_assoc($va))
    {
        echo "<tr>
          <td>".$count."</td>
          <td>".$rec_row['label']."</td>
          <td>".$rec_row['operator']."</td>
          <td>".$rec_row['operand1']."</td>
          <td>".$rec_row['operand2']."</td>
          <td></td>
              </tr>";
            //   <a href='' >Edit</a></td> | <td><a href=''>delete</a>
        $count=$count+1;
        if($count == 5 )
            break;
    }
}

if (isset($_POST["defaultlabel1"])) 
{
    if ($_POST["selectlevel"] == '0')
    {
        $clientID = $_POST["clientID"];
        $formatID = $_POST["formatID"];
        $label1 = $_POST["defaultlabel1"];
        $operator1 = $_POST["operator1"];
        $operand1 = $_POST["operand1_1"];
        $color1 = $_POST["color1"];

        // // first 3 value
        $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$label1', '$operator1', '$operand1', '0','$color1')";
        $conn->query($sql);
        $label2 = $_POST["label2"];
        $operator2 = $_POST["operator2"];
        $operand2 = $_POST["operand1_2"];
        $operand2_2 = $_POST["operand2_2"];
        $color2 = $_POST["color2"];
        //  second 4 vale
        $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$label2', '$operator2', '$operand2', '$operand2_2' ,'$color2')";
        $conn->query($sql);
        $label3 = $_POST["label3"];
        $operator3 = $_POST["operator3"];
        $operand3 = $_POST["operand3_3"];
        $operand3_3 = $_POST["operand1_1"];
        $color3 = $_POST["color3"];
        //  second 4 vale
        $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$label3', '$operator3', '$operand3', '0',' $color3')";
        $conn->query($sql);
        echo ("save");
    }
    else
    {

        $count = $_POST['selectlevel'];
        $b = $count ;
        $b  = $b -1 ;
        $xyz = 1 ;

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
        for ($a = 0; $a < $count; $a++)
        {
            if (is_string($_POST['customlabel'][$a]))
            {
                exit('you only enter alphabets ');
            }

        }
        // echo($_POST["selectlevel"].$_POST['customlabel'][0].$_POST['operator'][0].$_POST['operand1'][0].$_POST['color'][1]);
        
        for ($a = 0; $a < $count; $a++)
        {
            while ($xyz < $count)
            {
                if($_POST['customlabel'][$a] == $_POST['customlabel'][$xyz])
                {
                    exit('Criteria name should not be deblicate ');
                }
                if($_POST['operator'][$a]  == $_POST['operator'][$xyz] )
                {
                    exit('Operator name should not be deblicate ');
                }
                if($_POST['operand1'][$a] == $_POST['operand1'][$xyz])
                {
                    exit('Rang1  should not be deblicate ');
                }
                if($_POST['color'][$a] == $_POST['color'][$xyz])
                {
                    exit('color name should not be deblicate ');
                }
                $xyz++ ;
            }
        }

        $clientID = $_POST["clientID"];
        $formatID = $_POST["formatID"];
        $count1 = $_POST['selectlevel'];
        for ($a = 0; $a < $count1; $a++) 
        {
            $l =  $_POST['customlabel'][$a];
            $opt = $_POST['operator'][$a];
            $opr =  $_POST['operand1'][$a];
            $color = $_POST['color'][$a];
            if(isset($_POST['operand2'][0])){$ab = $_POST['operand2'][0] ;} else {$ab = 0 ;} 
            if ($opt == ">") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', 0 ,'$color')";
                $conn->query($sql);
            }
            if ($opt == ">=") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', 0 ,'$color')";
                $conn->query($sql);
            }
            if ($opt == "<") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', 0 ,'$color')";

                $conn->query($sql);
            }
            if ($opt == "<=") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', 0 ,'$color')";

                $conn->query($sql);
            }
            if ($opt == "==") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', 0 ,'$color')";

                $conn->query($sql);
            }
            if ($opt == "b/w") {
                $sql = "INSERT INTO criteria_Set (clientID, formatID, label, operator, operand1, operand2,color) VALUES ('$clientID', '$formatID', '$l', '$opt',  '$opr', '$ab' , '$color')";

                $conn->query($sql);
            }
        }
        echo "1" ;
    }
}
?>


