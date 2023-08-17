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
                                            <div class="col-md-12" id="radioButtonsDiv">
                                                <div class="Default">
                                                    <input type="radio" id="radioDefault" name="radiobutton" value="default">
                                                    <label for="radioDefault">Default</label><br>
                                                    <div id="additionalFields" >
                                                        <!-- First set of three fields -->
                                                        <input type="text" id="field1" value="Good" name="defaultlabel1" readonly>
                                                        <input type="text" id="field3" value=">" name="operator1" readonly>
                                                        <input type="text" id="field2" value="80" name="operand1_1" readonly>
                                                        <input type="color" id="field2" value="#ff8fab" name="color1" readonly><br>
                                                        <!-- Second set of three fields -->
                                                        <input type="text" id="field4" value="Average" name="label2" readonly>
                                                        <input type="text" id="field7" value="b/w" name="operator2" readonly>
                                                        <input type="text" id="field5" value="65" name="operand1_2" readonly>
                                                        <input type="text" id="field6" value="79" name="operand2_2" readonly>
                                                        <input type="color" id="field2" value="#ffcad4" name="color2" readonly><br>
                                                        <!-- third set of three fields -->
                                                        <input type="text" id="field8" value="Poor" name="label3" readonly>
                                                        <input type="text" id="field9" value="<" name="operator3" readonly>
                                                        <input type="text" id="field10" value="65" name="operand3_3" readonly>
                                                        <input type="color" id="field2" value="#9a8c98" name="color3" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="custom">
                                                    <input type="radio" id="radioCustom" name="radiobutton" value="custom" >
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
                                                        <input type="color" id="field2" value="#ff8fab" name="color1">
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
                // Add the color input field
                var colorLabel = document.createElement("label");
                colorLabel.textContent = "Color " + i + ": ";

                var colorField = document.createElement("input");
                colorField.type = "color";
                colorField.value = ""; // Set an initial color value (optional)
                colorField.name = "color[]" + i;

                row.appendChild(colorLabel);
                row.appendChild(colorField);
                dynamicRows.appendChild(row);
            }

            // Add a new row for the newly selected field
            if (selectedLevel >= optionsArray.length) {
                var row = document.createElement("div");
                row.className = "row";

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

            var dropdowns = dynamicRows.querySelectorAll("select[name='operator[]']");
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener("change", function(event) {
                    var selectedOption = event.target.value;
                    console.log("User selected option:", selectedOption);
                    // Do something with the selectedOption (e.g., store it in an array or a variable)
                });
            });
        }

        // When the user selects "b/w" from the dropdown for the new field
        document.addEventListener("change", function(event) {
            var target = event.target;
            if (target.tagName === "SELECT") {
                var parentRow = target.parentNode;
                var textBoxLabels = parentRow.querySelectorAll("label[for^='Value']");
                var textBoxes = parentRow.querySelectorAll("input[type='text']");


                if (target.value === "b/w") {
                    // If the user selects "b/w", add two additional text boxes
                    var textBoxLabel1 = document.createElement("label");
                    textBoxLabel1.textContent = "Range 1: ";
                    var textBox1 = document.createElement("input");
                    textBox1.type = "text";
                    textBox1.name = "operand1[]";
                    var textBoxLabel2 = document.createElement("label");
                    textBoxLabel2.textContent = "Range 2: ";
                    var textBox2 = document.createElement("input");
                    textBox2.type = "text";
                    textBox2.name = "operand2[]";

                    parentRow.appendChild(textBoxLabel1);
                    parentRow.appendChild(textBox1);
                    parentRow.appendChild(textBoxLabel2);
                    parentRow.appendChild(textBox2);
                } else if (target.value === ">") {
                    // If the user selects a different option, retain existing text boxes, and add additional text boxes
                    var textBoxLabel = document.createElement("label");
                    textBoxLabel.textContent = "Range: ";
                    var textBox = document.createElement("input");
                    textBox.type = "text";
                    textBox.name = "operand1[]";
                    
                    parentRow.appendChild(textBoxLabel);
                    parentRow.appendChild(textBox);
                } else if (target.value === ">=") {
                    // If the user selects a different option, retain existing text boxes, and add additional text boxes
                    var textBoxLabel = document.createElement("label");
                    textBoxLabel.textContent = "Range: ";
                    var textBox = document.createElement("input");
                    textBox.type = "text";
                    textBox.name = "operand1[]";

                    parentRow.appendChild(textBoxLabel);
                    parentRow.appendChild(textBox);
                } else if (target.value === "<") {
                    // If the user selects a different option, retain existing text boxes, and add additional text boxes
                    var textBoxLabel = document.createElement("label");
                    textBoxLabel.textContent = "Range: ";
                    var textBox = document.createElement("input");
                    textBox.type = "text";
                    textBox.name = "operand1[]";

                    parentRow.appendChild(textBoxLabel);
                    parentRow.appendChild(textBox);
                } else if (target.value === "<=") {
                    // If the user selects a different option, retain existing text boxes, and add additional text boxes
                    var textBoxLabel = document.createElement("label");
                    textBoxLabel.textContent = "Range: ";
                    var textBox = document.createElement("input");
                    textBox.type = "text";
                    textBox.name = "operand1[]";

                    parentRow.appendChild(textBoxLabel);
                    parentRow.appendChild(textBox);
                } else if (target.value === "==") {
                    // If the user selects a different option, retain existing text boxes, and add additional text boxes
                    var textBoxLabel = document.createElement("label");
                    textBoxLabel.textContent = "Range: ";
                    var textBox = document.createElement("input");
                    textBox.type = "text";
                    textBox.name = "operand1[]";

                    parentRow.appendChild(textBoxLabel);
                    parentRow.appendChild(textBox);
                } else {
                    ""
                }
            }
        });
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
//Or
//$("input[type='submit']").removeAttr("disabled");
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
                var set_Criteria = document.querySelector('input[name="radiobutton"]:checked').value;
                console.log(set_Criteria);
                if (set_Criteria == 'default')
                {
                    $.ajax({
                        url: 'controller/process_form.php',
                        type: 'post',
                        data:  $("form").serialize(),
                        success: function(e) 
                        {
                           swal.fire({
                                        title: "Good job", 
                                        text: "Data successfully enter", 
                                        type: "success"
                                        }).then(function()
                                        { 
                                         location.reload();
                                        });
                        }
                     });  
                }
                if (set_Criteria == 'custom')
                {
                    var count = document.querySelector('select[name="selectlevel"]').value;
                    $.ajax({
                        url: 'controller/process_form.php',
                        type: 'post',
                        data:  $("form").serialize(),
                        success: function(e) 
                        {
                            swal.fire({
                                        title: "Good job", 
                                        text: "Data successfully enter", 
                                        type: "success"
                                        }).then(function()
                                        { 
                                         location.reload();
                                        });
                        }
                     });  
                }
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