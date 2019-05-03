<?php
// I will be directly including the classes for the examples below,
// but you could also use an autoloader and namespacing to pull in the classes.
include 'classes/Vehicles.php';
include 'classes/Colors.php';
include 'classes/States.php';

// Instantiate a new object for each class
$vehicles = new Vehicles;
$colors = new Colors;
$states = new States;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Example: HTML Select</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Bootstrap core CSS -->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<body>
<div class="container-fluid">
    <div class="row" id="heading">
        <div class="col-sm-12">
            <h1>Example: Creating HTML Select Dropdown</h1>
            <hr>
            <div class="well">
                <p><i class="glyphicon glyphicon-info-sign"></i> <strong>Creating a HTML Select option is really easy.</strong></p>
                <p>Firstly we pull in the required Class that contains the list we need & instantiate a new object of the class.</p>
                <code>include 'classes/Vehicles.php';</code><br>
                <code>$vehicles = new Vehicles;</code><br><br>
                <p>Now that we have access to the class, we can grab the list we want from the class and assign it to a new variable.<br>
                For this example we are going to create a list of Car manufacturers so we will call the cars() method.</p>
                <code>$cars = $vehicles->cars();</code><br><br>
                <p>Finally, we loop through the results.</p>
                <code>foreach($cars as $car){ // Create list options; }</code><br><hr>
                <small><strong><i>* See source code for full examples</i></strong></small>
            </div>
        </div>
    </div> <!-- /ROW HEADING -->
    <!-- EXAMPLES ROW -->
    <div class="row" id="examples">
        <!-- COL 1 - CARS -->
        <div class="col-sm-12 col-md-4">
            <h3>Vehicles</h3>
            <hr>
            <!-- BEGIN CARS LIST -->
            <?php
                // Grab the Cars list a.k.a cars() method
                $cars = $vehicles->cars();
            ?>
            <h4>Cars</h4>
            <select class="form-control" name="cars" id="cars">
            <?php
                // Now we loop through $cars to create a select option for each manufacturer
                foreach($cars as $car){
                    echo '<option value="'.$car.'">'.$car.'</option>';
                }
            ?>
            </select>
            <!-- END CARS LIST -->           
            <hr>
            <!-- BEGIN MOTORCYCLES LIST -->
            <?php
                // Grab the Motorcycles list a.k.a motorcycles() method
                $motorcycles = $vehicles->motorcycles();
            ?>
            <h4>Motorcycles</h4>
            <select class="form-control" name="motorcycle" id="motorcycle">
            <?php
                // Now we loop through $motorcycles to create a select option for each manufacturer
                foreach($motorcycles as $bike){
                    echo '<option value="'.$bike.'">'.$bike.'</option>';
                }
            ?>
            </select>
            <!-- END MOTORCYCLES LIST -->
        </div>
        <!-- COL 2 - COLORS -->
        <div class="col-sm-12 col-md-4">
            <h3>Colors</h3>
            <hr>
            <!-- BEGIN ALL COLORS LIST -->
            <?php
                // Grab the Colors list a.k.a hexAll() method
                $allColors = $colors->hexAll();
            ?>
            <h4>All</h4>
            <select class="form-control" name="colors" id="colors">
            <?php
                // Now we loop through $allColors to create a select option for each manufacturer.
                // Since our allColors() method contains an associative array of color name & hex code, it will return the results as a key=>value pair.
                // All this means is that when running the foreach() loop, we need to set a variable to capture each $key and $value or in this example $name => $hex. (see below)
                //
                // * Disclaimer: 
                // The use of inline styles & the !important override in this example are definitely not best practice.
                // Its use here is only intended to keep the example file structure to a minimum.
                // In real world applications it would be best practice to use a stylesheet and css classes to add styling to elements.
                foreach($allColors as $name => $hex){
                    echo '<option value="'.$hex.'" style="background: '.$hex.' !important;">'.$name.'</option>';
                }
            ?>
            </select>
            <!-- END ALL COLORS LIST -->
        </div> <!-- /COL 2 -->
        <!-- COL 3 - STATES -->
        <div class="col-sm-12 col-md-4">
            <h3>States</h3>
            <hr>
            <!-- BEGIN AUSTRALIAN STATES LIST -->      
            <?php
                // Grab the Australia states list a.k.a australia() method
                $australianStates = $states->australia();
            ?>
            <h4>Australia</h4>
            <select class="form-control" name="state" id="state">
            <?php
                // Now we loop through $australianStates to create a select option for each state.
                // Since our australianStates() method contains an associative array of ISO Code & State name, it will return the results as a key=>value pair.
                // All this means is that when running the foreach() loop, we need to set a variable to capture each $key and $value or in this example $iso => $state. (see below)
                foreach($australianStates as $iso => $state){
                    echo '<option value="'.$iso.'">'.$state.'</option>';
                }
            ?>
            </select>
            <!-- END AUSTRALIAN STATES LIST -->
            <hr>
            <!-- BEGIN AMERICAN STATES LIST -->      
            <?php
                // Grab the America states list a.k.a usa() method
                $americaStates = $states->usa();
            ?>
            <h4>America</h4>
            <select class="form-control" name="state" id="state">
            <?php
                // Now we loop through $americaStates to create a select option for each state.
                // Since our americaStates() method contains an associative array of ISO Code & State name, it will return the results as a key=>value pair.
                // All this means is that when running the foreach() loop, we need to set a variable to capture each $key and $value or in this example $iso => $state. (see below)
                foreach($americaStates as $iso => $state){
                    echo '<option value="'.$iso.'">'.$state.'</option>';
                }
            ?>
            </select>
            <!-- END AMERICAN STATES LIST -->
        </div>
    </div> <!-- /ROW EXAMPLES -->
</div>	<!-- /CONTAINER -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>