<?php
// Example: Using the Vehicles class to output all car manufacturers and their logo to screen.

// I have supplied an images/cars folder containing logos for all the car manufacturers within the cars() method.
// The filename for each image matches each of the manufacturer names within the returned array.
// This means we can use the array value to display the image onscreen inside an <img> tag.

// Firstly, we need to include the Vehicles class.
// I will be directly including the Vehicles class for the examples below,
// but you could also use an autoloader and namespacing to pull in the class file.
include 'classes/Vehicles.php';

// Instantiate a new object of the Vehicles class
$vehicles = new Vehicles;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Example: Cars with Logo</title>
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
        <div class="col-sm-12 col-md-12">
            <h1>Example: Car Manufacturers with Logo</h1>
            <hr>
            <div class="well">
                <p><i class="glyphicon glyphicon-info-sign"></i> <strong>Heres how we can use the items inside our returned array to display images.</strong></p><br>
                <p>Firstly we pull in the required Class that contains the list we need & instantiate a new object of the class.</p>
                <code>include 'classes/Vehicles.php';</code><br>
                <code>$vehicles = new Vehicles;</code><br><br>
                <p>Now that we have access to the class, we can grab the list we want from the class and assign it to a new variable.<br>
                For this example we are going to create a list of Car manufacturers so we will call the cars() method.</p>
                <code>$cars = $vehicles->cars();</code><br><br>
                <p>Finally, we loop through the results.<br>
                In this example we have an images/cars folder containing .png files.<br>
                Each of these images are named so thay match an item (manufacturer) inside our array.</p>
                <code>foreach($cars as $car){ // Get image by prepending each $car to .png inside an img tag;  // Print $car heading under image }</code><br><hr>
                <small><strong><i>* See source code for full examples</i></strong></small>
            </div>
        </div>
    </div> <!-- /#HEADING ROW -->
    <div class="row" id="manufacturers">
            <?php
                // Grab the Cars list a.k.a cars() method
                $cars = $vehicles->cars();
                // Now lets loop through each of the returned results and create an image thumbnail & heading for each manufacturer
                //
                // * Disclaimer: 
                // The use of inline styles in this example are definitely not best practice.
                // Its use here is only intended to keep the example file structure to a minimum.
                // In real world applications it would be best practice to use a stylesheet and css classes to add styling to elements.
                foreach($cars as $car){
                ?>
                    <div class="col-sm-12 col-md-3">
                        <div class="thumbnail"> 
                            <img src="images/cars/<?php echo $car.'.png'; ?>" class="img-responsive" alt="<?php echo $car; ?>" style="height:100px;">
                            <div class="caption text-center">
                                <h3><?php echo $car; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php
                } // END FOREACH
            ?>
    </div> <!-- /#manufacturers -->
</div>	<!-- /CONTAINER -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>