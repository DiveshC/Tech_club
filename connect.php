<!DOCTYPE html>
<html>
<body>

	<?php
        $con = mysqli_connect("localhost","root","uradd2016");

        if (!$con)

        {

        die('Could not connect: ' . mysqli_error());

        }
        mysqli_select_db($con, "tech_club");
	?>
</body>
</html>