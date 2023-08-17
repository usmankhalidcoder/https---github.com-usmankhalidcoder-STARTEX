<?php
// session_start();
// include("controller/db_con.php");
// SQL query to fetch clients' data
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "startex";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  
$sql = "SELECT c.ID, c.name FROM clients AS c WHERE c.status = 1 ORDER BY c.name ASC";
$result = $conn->query($sql);
// fetch Criteria Set data
// echo();
// $sql_criteria = "Select * from  criteria_Set where clientID = ''";
if (isset($_GET['aid']))
{
    $var = $_GET['aid'] ; 
    $sql1 = "SELECT * FROM criteria_Set  WHERE clientID =  $var  ";
    $va = $conn->query($sql1);
    $count = 0 ;
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
           <td> ". "<a href=hcc.php?id=".$rec_row['label']." >Edit</a></td> | <td><a href=''>delete</a></td>
          
         
            </tr>";
        $count=$count+1;
        if($count == 5 )
            break;
    }
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Criteria</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> -->
    <style>
        .row {
            margin-left: -2px !important;
        }

        input,

        select,
        textarea {

            margin-bottom: 2%;
            margin-top: 2%;
        }

        button {
            margin-left: 65%;
        }
    </style>
</head>

<body class="theme-cyan">

    <!-- Overlay For Sidebars -->

    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <img style="padding: 0px 0px;" class="navbar-brand" src="https://startexmarketing.com//wp-content/themes/riga/assets/img/logo-01.svg">
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            No Notification
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
        <!-- Your existing HTML content goes here -->
    <!-- Wrap the form around the content -->
    <form name="formd">
    <!-- method="post" action="controller/process_form.php" -->

        <section class="content">
            <div class="container-fluid" id="contentVue">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                            <div class="">
                                <div class="row">
                                    <div class="card span11" v-if="showList">
                                        <div class="header">
                                            <h2 style="text-align:center">Set Scoring Criteria</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="SelectClient">Select Client:</label>
                                                    <select id="selectClient" class="js-example-basic-single form-control" name="clientID"   onchange="pick()" >
                                                        <option value="" selected>Select Client</option>
                                                        <?php
                                                        // Check if there are any clients in the database
                                                        if ($result->num_rows > 0) {
                                                            // Loop through the result and create options for the select dropdown
                                                            while ($row = $result->fetch_assoc()) {
                                                                $clientID = $row['ID'];
                                                                $clientName = $row['name'];
                                                                echo "<option  value='$clientID'>$clientName</option>";
                                                            }
                                                        } else {
                                                            // If no clients found, display a default option
                                                            echo "<option value=''>No clients available</option>";
                                                        }

                                                        // Close the database connection (assuming $conn is the connection object)
                                                        // $conn->close();
                                                        ?>
                                                    </select>
                                                    <script>
                                                        function pick ()
                                                        {
                                                           var cilent = document.getElementById("selectClient").value ;
                                                           console.log(cilent);
                                                           $.ajax({
                                                                url: 'criteria.php', //'controller/process_form.php',
                                                                type: 'get',
                                                                data:  {aid : cilent},
                                                                success: function(criteria_data) 
                                                                {
                                                                    $("#table-container").html(criteria_data); 
                                                                }
                                                            });  
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="selectFormat">Select Format:</label>
                                                    <select id="selectFormat" class="js-example-basic-single form-control" name="formatID">
                                                        <option value="">Select Format</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" id="radioButtonsDiv" style="display: none;">
                                                <div class="Default">
                                                <!-- <input type="radio" name="option" id="el"></input>  -->
                                                <input type="radio" id="radioDefault" name="colour">
                                                    <label for="radioDefault">Default</label><br>
                                                    <div id="additionalFields" style="display: none;">
                                                        <!-- First set of three fields -->
                                                        <input type="text" id="field1" value="Good" name="defaultlabel1" readonly>
                                                        <input type="text" id="field3" value=">" name="operator1" readonly>
                                                        <input type="text" id="field2" value="80" name="operand1_1" readonly>
                                                        <!-- <input type="color" id="field2" value="#ff8fab" name="color1" readonly><br> -->
                                                        <label for="color">Choose a color:</label>
                                                        <select name="color1" id="cars">
                                                        <option value="red">red</option>
                                                        <option value="green">green</option>
                                                        <option value="yellow">yellow</option>
                                                        <option value="orange">orange</option>
                                                        </select>
                                                        <br>
                                                        <!-- Second set of three fields -->
                                                        <input type="text" id="field4" value="Average" name="label2" readonly>
                                                        <input type="text" id="field7" value="b/w" name="operator2" readonly>
                                                        <input type="text" id="field5" value="65" name="operand1_2" readonly>
                                                        <input type="text" id="field6" value="79" name="operand2_2" readonly>
                                                        <!-- <input type="color" id="field2" value="#ffcad4" name="color2" readonly><br> -->
                                                        <label for="color">Choose a color:</label>
                                                        <select name="color2" id="cars">
                                                        <option value="red">red</option>
                                                        <option value="green">green</option>
                                                        <option value="yellow">yellow</option>
                                                        <option value="orange">orange</option>
                                                        </select>
                                                        <br>
                                                        <!-- third set of three fields -->
                                                        <input type="text" id="field8" value="Poor" name="label3" readonly>
                                                        <input type="text" id="field9" value="<" name="operator3" readonly>
                                                        <input type="text" id="field10" value="65" name="operand3_3" readonly>
                                                        <!-- <input type="color" id="field2" value="#9a8c98" name="color3" readonly><br> -->
                                                        <label for="color">Choose a color:</label>
                                                        <select name="color3" id="cars">
                                                        <option value="red">red</option>
                                                        <option value="green">green</option>
                                                        <option value="yellow">yellow</option>
                                                        <option value="orange">orange</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="custom">
                                                <!-- <input type="radio" name="option" id="el2"></input> -->
                                                    <input type="radio" id="radioCustom" name="colour"  >
                                                    <label for="radioCustom">Custom Criteria</label><br>
                                                    <div id="dropdownDiv" style="display: none;">
                                                        <label for="levelDropdown">Select Number Of Label</label><br>
                                                        <select id="levelDropdown" name="selectlevel" onchange="createDynamicRow()">
                                                            <option value="0">Select level</option>
                                                            <option value="1">Level 1</option>
                                                            <option value="2">Level 2</option>
                                                            <option value="3">Level 3</option>
                                                            <option value="4">Level 4</option>
                                                            <option value="5">Level 5</option>
                                                            <option value="6">Level 6</option>
                                                            <option value="7">Level 7</option>
                                                        </select>
                                                    </div>

                                                    <div id="dynamicRows">
                                                        <!-- <input type="color" id="field2" value="#ff8fab" name="color1"> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="successMessage" style="display: none;">Submit Successful!</div>
                                        <!-- Add a submit button to trigger the form submission -->
                                        <button type="submit" name="submit" class="btn btn-primary" id="submitFormBtn"  disabled="disabled" >Submit</button>
                                    </div><!--/span-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->
                </div>
                <div v-if="showNotification" data-notify="container" class="bootstrap-notify-container alert alert-dismissible bg-black p-r-35 animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon"></span> <span data-notify="title"></span> <span data-notify="message">Turning standard Bootstrap alerts</span><a href="#" target="_blank" data-notify="url"></a>
                </div>
            </div>
        </section>
        <!-- Add a hidden input field to store the selected client ID -->
        <input type="hidden" id="selectedClientID" name="selectedClientID">
        <!-- Add a hidden input field to store the selected format ID -->
        <input type="hidden" id="selectedFormatID" name="selectedFormatID">
        <!-- Add a hidden input field to store custom criteria data -->
        <!-- <input type="hidden" id="customCriteriaData" name="customCriteriaData"> -->

    </form>
    <section class="content">
        <div class="card span11" v-if="showList">
            <div class="header">
                <h2 style="text-align:center">Criteria Records</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Criteria name</th>
                        <th>Operator</th>
                        <th>Operand1</th>
                        <th>Operand2</th>
                        <th>color</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-container">
						</tbody>
            </table>
        </div>
    </section>

    <script>
        function submitForm() {
            // Your form submission logic here (e.g., form validation, AJAX call, etc.)

            // After successful submission, show the success message
            var successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block"; // Change "block" to "inline" if needed
        }
        var optionsArray = [

            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 2
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 2
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 3
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 4
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 5
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 6
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 7
            ['Select option', '>', '>=', '<', '<=', 'b/w', '=='], // Options for Field 8 (new field)
        ];
        function createDynamicRow() {
            var selectedLevel = document.getElementById("levelDropdown").value;
            console.log(selectedLevel);
            var dynamicRows = document.getElementById("dynamicRows");
            dynamicRows.innerHTML = ''; // Clear existing rows before creating new ones
            console.log(dynamicRows);

            for (var i = 1; i <= selectedLevel; i++) {
                var row = document.createElement("div");
                row.className = "row";
                row.setAttribute('id', i)
                var labelField = document.createElement("label");
                labelField.textContent = "Label " + i + ": ";
                var inputField = document.createElement("input");
                inputField.type = "text";
                inputField.value = ""; // Set an initial value (optional)

                inputField.name = "customlabel[]";
                row.appendChild(labelField);
                row.appendChild(inputField);

                if (optionsArray[i - 1].length > 0) {
                    var dropdownLabel = document.createElement("label");
                    dropdownLabel.textContent = "Criteria Type " + i + ": ";

                    var dropdownField = document.createElement("select");
                    optionsArray[i - 1].forEach(function(option) {
                        var optionElement = document.createElement("option");
                        optionElement.value = option;
                        optionElement.textContent = option;
                        dropdownField.appendChild(optionElement);
                    });
                    dropdownField.setAttribute("name", "operator[]");
                    row.appendChild(dropdownLabel);
                    row.appendChild(dropdownField);
                }
                var array = ["Select Color","Green","Red","Yellow","blue"];

                //Create and append select list
                var selectList = document.createElement("select");
                var colorLabel = document.createElement("label");
                colorLabel.textContent = " Color " + i + ": ";
                selectList.id = "mySelect";
                selectList.name = "color[]";
                row.appendChild(colorLabel);
                row.appendChild(selectList);

                //Create and append the options
                for (var coloroption = 0; coloroption < array.length; coloroption++) {
                    var option = document.createElement("option");
                    option.value = array[coloroption];
                    option.text = array[coloroption];
                    selectList.appendChild(option); 
                }
                // Add the color input field
                // var colorLabel = document.createElement("label");
                // colorLabel.textContent = "Color " + i + ": ";

                // var colorField = document.createElement("input");
                // colorField.type = "color";
                // colorField.value = ""; // Set an initial color value (optional)
                // colorField.name = "color[]" + i;

                // row.appendChild(colorLabel);
                // row.appendChild(colorField);
                // parentRow.appendChild(makeRange('>='));
                
                // If the user selects a different option, retain existing text boxes, and add additional text boxes
                var textBoxLabel = document.createElement("label");
                textBoxLabel.textContent = "Range: ";
                var textBox = document.createElement("input");
                textBox.type = "text";
                textBox.name = "operand1[]";
                textBox.setAttribute('required', '');

                row.appendChild(textBoxLabel);
                row.appendChild(textBox);
                // row.addAttribute('id', i)
                // row.appendChild(makeRange(`range1 ${i}`))
                // ADADFAS
                dynamicRows.appendChild(row);
            }

            // Add a new row for the newly selected field
            if (selectedLevel >= optionsArray.length) {
                var row = document.createElement("div");
                row.className = "row";
                // row.addAttribute('id', i)

                var labelField = document.createElement("label");
                labelField.textContent = "Field " + selectedLevel + ": ";
                var inputField = document.createElement("input");
                inputField.type = "text";
                inputField.value = ""; // Set an initial value (optional)

                row.appendChild(labelField);
                row.appendChild(inputField);

                var dropdownLabel = document.createElement("label");
                dropdownLabel.textContent = "Select option for Field " + selectedLevel + ": ";

                var dropdownField = document.createElement("select");
                optionsArray[selectedLevel - 1].forEach(function(option) {
                    var optionElement = document.createElement("option");
                    optionElement.value = option;
                    optionElement.textContent = option;
                    dropdownField.appendChild(optionElement);
                });

                row.appendChild(dropdownLabel);
                row.appendChild(dropdownField);

                dynamicRows.appendChild(row);
            }
        // function createDynamicRow() {
        //     var selectedLevel = document.getElementById("levelDropdown").value;
        //     var dynamicRows = document.getElementById("dynamicRows");
        //     dynamicRows.innerHTML = ''; // Clear existing rows before creating new ones

        //     for (var i = 1; i <= selectedLevel; i++) {
        //         var row = document.createElement("div");
        //         row.className = "row";
        //         var labelField = document.createElement("label");
        //         labelField.textContent = "Label " + i + ": ";
        //         var inputField = document.createElement("input");
        //         inputField.type = "text";
        //         inputField.value = ""; // Set an initial value (optional)

        //         inputField.name = "customlabel[]";
        //         row.appendChild(labelField);
        //         row.appendChild(inputField);

        //         if (optionsArray[i - 1].length > 0) {
        //             var dropdownLabel = document.createElement("label");
        //             dropdownLabel.textContent = "Criteria Type " + i + ": ";

        //             var dropdownField = document.createElement("select");
        //             optionsArray[i - 1].forEach(function(option) {
        //                 var optionElement = document.createElement("option");
        //                 optionElement.value = option;
        //                 optionElement.textContent = option;
        //                 dropdownField.appendChild(optionElement);
        //             });
        //             dropdownField.setAttribute("name", "operator[]");
        //             row.appendChild(dropdownLabel);
        //             row.appendChild(dropdownField);
        //         }
        //         // Add the color input field
        //         var colorLabel = document.createElement("label");
        //         colorLabel.textContent = "Color " + i + ": ";

        //         var colorField = document.createElement("input");
        //         colorField.type = "color";
        //         colorField.value = ""; // Set an initial color value (optional)
        //         colorField.name = "color[]" + i;

        //         row.appendChild(colorLabel);
        //         row.appendChild(colorField);
        //         dynamicRows.appendChild(row);
        //     }

        //     // Add a new row for the newly selected field
        //     if (selectedLevel >= optionsArray.length) {
        //         var row = document.createElement("div");
        //         row.className = "row";

        //         var labelField = document.createElement("label");
        //         labelField.textContent = "Field " + selectedLevel + ": ";
        //         var inputField = document.createElement("input");
        //         inputField.type = "text";
        //         inputField.value = ""; // Set an initial value (optional)

        //         row.appendChild(labelField);
        //         row.appendChild(inputField);

        //         var dropdownLabel = document.createElement("label");
        //         dropdownLabel.textContent = "Select option for Field " + selectedLevel + ": ";

        //         var dropdownField = document.createElement("select");
        //         optionsArray[selectedLevel - 1].forEach(function(option) {
        //             var optionElement = document.createElement("option");
        //             optionElement.value = option;
        //             optionElement.textContent = option;
        //             dropdownField.appendChild(optionElement);
        //         });

        //         row.appendChild(dropdownLabel);
        //         row.appendChild(dropdownField);

        //         dynamicRows.appendChild(row);
        //     }

            var dropdowns = dynamicRows.querySelectorAll("select[name='operator[]']");
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener("change", function(event) {
                    var selectedOption = event.target.value;
                    console.log("User selected option:", selectedOption);
                    // Do something with the selectedOption (e.g., store it in an array or a variable)
                });
            });
        }
        document.addEventListener("change", function(event) {
            var target = event.target;
            if (target.tagName === "SELECT") {
                var parentRow = target.parentNode;
                var textBoxLabels = parentRow.querySelectorAll("label[for^='Value']");
                var textBoxes = parentRow.querySelectorAll("input[type='text']");
                console.log(textBoxes);
                bet = 0;


                const row = parentRow.getAttribute('id');
                console.log("ADSASASD", row)
                console.log("ADSASASD", parentRow)
                
                if (target.value === "b/w") {
                    var toDelete = document.getElementById(`range2-${row}`)
                    toDelete ? toDelete.remove() : ""
                    
                   
                    var range2 = document.createElement("div");
                    range2.id = `range2-${row}`
                    var textBoxLabel2 = document.createElement("label");
                    textBoxLabel2.textContent = "Range 2: ";
                    var textBox2 = document.createElement("input");
                    textBox2.type = "text";
                    textBox2.id = 'r2';
                    textBox2.name = "operand2[]";

                    range2.appendChild(textBoxLabel2);
                    range2.appendChild(textBox2);
                    parentRow.appendChild(range2)
                } else {
                    var toDelete = document.getElementById(`range2-${row}`)
                    toDelete ? toDelete.remove() : ""
                }

            }
        });
        function makeRange(id) {
            var toDelete = document.getElementById(id)
            toDelete ? toDelete.remove() : ""
            var range2 = document.createElement("div");
            range2.setAttribute("id", id)
            var textBoxLabel = document.createElement("label");
            textBoxLabel.textContent = "Range: ";
            var textBox = document.createElement("input");
            textBox.type = "text";
            textBox.name = "operand1[]";
            range2.appendChild(textBoxLabel)
            range2.appendChild(textBox)
            return range2
        }

        // When the user selects "b/w" from the dropdown for the new field
        // document.addEventListener("change", function(event) {
        //     var target = event.target;
        //     if (target.tagName === "SELECT") {
        //         var parentRow = target.parentNode;
        //         var textBoxLabels = parentRow.querySelectorAll("label[for^='Value']");
        //         var textBoxes = parentRow.querySelectorAll("input[type='text']");


        //         if (target.value === "b/w") {
        //             // If the user selects "b/w", add two additional text boxes
        //             var textBoxLabel1 = document.createElement("label");
        //             textBoxLabel1.textContent = "Range 1: ";
        //             var textBox1 = document.createElement("input");
        //             textBox1.type = "text";
        //             textBox1.name = "operand1[]";
        //             var textBoxLabel2 = document.createElement("label");
        //             textBoxLabel2.textContent = "Range 2: ";
        //             var textBox2 = document.createElement("input");
        //             textBox2.type = "text";
        //             textBox2.name = "operand2[]";

        //             parentRow.appendChild(textBoxLabel1);
        //             parentRow.appendChild(textBox1);
        //             parentRow.appendChild(textBoxLabel2);
        //             parentRow.appendChild(textBox2);
        //         } else if (target.value === ">") {
        //             // If the user selects a different option, retain existing text boxes, and add additional text boxes
        //             var textBoxLabel = document.createElement("label");
        //             textBoxLabel.textContent = "Range: ";
        //             var textBox = document.createElement("input");
        //             textBox.type = "text";
        //             textBox.name = "operand1[]";
                    
        //             parentRow.appendChild(textBoxLabel);
        //             parentRow.appendChild(textBox);
        //         } else if (target.value === ">=") {
        //             // If the user selects a different option, retain existing text boxes, and add additional text boxes
        //             var textBoxLabel = document.createElement("label");
        //             textBoxLabel.textContent = "Range: ";
        //             var textBox = document.createElement("input");
        //             textBox.type = "text";
        //             textBox.name = "operand1[]";

        //             parentRow.appendChild(textBoxLabel);
        //             parentRow.appendChild(textBox);
        //         } else if (target.value === "<") {
        //             // If the user selects a different option, retain existing text boxes, and add additional text boxes
        //             var textBoxLabel = document.createElement("label");
        //             textBoxLabel.textContent = "Range: ";
        //             var textBox = document.createElement("input");
        //             textBox.type = "text";
        //             textBox.name = "operand1[]";

        //             parentRow.appendChild(textBoxLabel);
        //             parentRow.appendChild(textBox);
        //         } else if (target.value === "<=") {
        //             // If the user selects a different option, retain existing text boxes, and add additional text boxes
        //             var textBoxLabel = document.createElement("label");
        //             textBoxLabel.textContent = "Range: ";
        //             var textBox = document.createElement("input");
        //             textBox.type = "text";
        //             textBox.name = "operand1[]";

        //             parentRow.appendChild(textBoxLabel);
        //             parentRow.appendChild(textBox);
        //         } else if (target.value === "==") {
        //             // If the user selects a different option, retain existing text boxes, and add additional text boxes
        //             var textBoxLabel = document.createElement("label");
        //             textBoxLabel.textContent = "Range: ";
        //             var textBox = document.createElement("input");
        //             textBox.type = "text";
        //             textBox.name = "operand1[]";

        //             parentRow.appendChild(textBoxLabel);
        //             parentRow.appendChild(textBox);
        //         } else {
        //             ""
        //         }
        //     }
        // });
    </script>

    <script>
        document.getElementById("radioCustom").addEventListener("click", function() {
            var additionalFields = document.getElementById("additionalFields");
            var dropdownDiv = document.getElementById("dropdownDiv");

            additionalFields.style.display = "none"; // Hide the additionalFields element
            dropdownDiv.style.display = "block"; // Show the dropdown div
        });

        document.getElementById("radioDefault").addEventListener("click", function() {
            var additionalFields = document.getElementById("additionalFields");
            var dropdownDiv = document.getElementById("dropdownDiv");

            additionalFields.style.display = "block"; // Show the additionalFields element
            dropdownDiv.style.display = "none"; // Hide the dropdown div
        });
    </script>


    <script>
        // jQuery function to show radio buttons when both client and format are selected
        $(document).ready(function() {
            $("input[type='radio']").change(function(){

            $("button[type='submit']").prop("disabled", false);
        });
            $('#selectClient, #selectFormat').change(function() {
                var selectedClient = $('#selectClient option:selected').text();
                var selectedFormat = $('#selectFormat option:selected').text();
                $('#selectedClientText').text(selectedClient);
                $('#selectedFormatText').text(selectedFormat);

                if (selectedClient && selectedFormat) {
                    $('#radioButtonsDiv').show();
                } else {
                    $('#radioButtonsDiv').hide();
                }
            });

            $('#submitFormBtn').click(function(r){
                r.preventDefault();
                // let radio1 = document.getElementById('radioDefault');
                // if(radio1.checked){
                    // alert("abc");
                    $("[name='operand1[]']").prop("required", true);
                         $.ajax({
                        url: 'controller.php',//'controller/process_form.php',
                        type: 'post',
                        data:  $("form").serialize(),
                        success: function(e) 
                        {
                            if (e == "save" || e == "1")
                            {
                            swal.fire({
                                            title: "Good job", 
                                            text: "Data successfully enter", 
                                            type: "success"
                                            }).then(function()
                                            { 
                                            location.reload();
                                            });
                            }else
                            {
                                swal.fire({
                                            title: "invalid", 
                                            text: e , 
                                            type: "fail"
                                            });   
                            }
                        }
                     });  
                // }
                // let radio2 = document.getElementById('radioCustom');
                // if(radio2.checked){
                //     // alert("custom");
                //     $.ajax({
                //         url: 'controller.php',//'controller/process_form.php',
                //         type: 'post',
                //         data:  $("form").serialize(),
                //         success: function(e) 
                //         {
                //             alert(e);
                //             // if (e == 1)
                //             // {
                //             //     swal.fire({
                //             //             title: "Good job", 
                //             //             text: "Data successfully enter", 
                //             //             type: "success"
                //             //             }).then(function()
                //             //             { 
                //             //              location.reload();
                //             //             });
                //             // }
                //             // else
                //             // {
                //             //     alert(e);
                //             // }
                //         }
                //      }); 
                // }

                // if( document.getElementById("radioDefault").value) 
                // {   
                //         alert("Summer radio button is selected");   
                // } 
                // if(document.getElementById("radioCustom").value)
                // {
                // alert("Custom");
                // }   
                //  if (document.getElementById("radioCustom").value)
                //  {  
                //         alert("custom");   
                //     }  

                // var radios =  document.querySelectorAll('input[name="colour"]'); 
                // console.log(radios);

                // var set_Criteria = document.querySelector('input[name="radiobutton"]').value;
                // console.log(set_Criteria);
                // if (set_Criteria == 'default')
                // {
                //     $.ajax({
                //         url: 'controller/process_form.php',
                //         type: 'post',
                //         data:  $("form").serialize(),
                //         success: function(e) 
                //         {
                //             alert(e);
                //         //    swal.fire({
                //         //                 title: "Good job", 
                //         //                 text: "Data successfully enter", 
                //         //                 type: "success"
                //         //                 }).then(function()
                //         //                 { 
                //         //                  location.reload();
                //         //                 });
                //         }
                //      });  
                // }
                // if (set_Criteria == 'custom')
                // {
                //     // var count = document.querySelector('select[name="selectlevel"]').value;
                //     $.ajax({
                //         url: 'controller/process_form.php',
                //         type: 'post',
                //         data:  $("form").serialize(),
                //         success: function(e) 
                //         {
                //             alert(e);
                //             // if (e == 1)
                //             // {
                //             //     swal.fire({
                //             //             title: "Good job", 
                //             //             text: "Data successfully enter", 
                //             //             type: "success"
                //             //             }).then(function()
                //             //             { 
                //             //              location.reload();
                //             //             });
                //             // }
                //             // else
                //             // {
                //             //     alert(e);
                //             // }
                //         }
                //      });  
                // }
                 });  
        });
    </script>
    <script src="path/to/jquery.js"></script>
    <script>
        jQuery(document).ready(function($) {
            // Event listener for the selectClient dropdown
            $("#selectClient").on("change", function() {
                var selectedClientID = $(this).val();
                console.log(selectedClientID);
                // Make an AJAX request to fetch format names for the selected client
                $.ajax({
                    url: 'controller/get_formats.php', // Replace with the path to your PHP file that handles the AJAX request
                    type: "POST",
                    data: {
                        clientID: selectedClientID
                    },
                    dataType: "json",
                    success: function(response) {

                        // Rest of your code...


                        // Clear the previous options in selectFormat
                        $("#selectFormat").empty();

                        // Add the new options to selectFormat based on the response
                        if (response.length > 0) {
                            $.each(response, function(index, formats) {
                                $("#selectFormat").append('<option value="' + formats.ID + '">' + formats.formatName + '</option>');
                            });
                        } else {
                            // If no formats found for the selected client, display a default option
                            $("#selectFormat").append('<option value="">No formats available</option>');
                        }
                    },
                    error: function() {
                        console.log("Error occurred while fetching formats.");
                    }
                });
            });
        });
    </script>


    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>

</body>
</html>