<html>
<head>
</head>
<body>
    <h4><u>VARIABLES:</u></h4>
    <?php
    $name = "Aruna";
    echo "<b>Hi $name! Welcome</b> <br><br>";
    ?>

    <?php
    $t = 12;
    echo "The Num is :" . $t . "<br><br>";
    ?>

    <?php
    $name = "nandhu";
    $num = "@10";
    echo $name, " ", $num;
    ?>

    <h4><u>TYPE OF DATATYPE(VAR_DUMP,GETTYPE):</u></h4>
	<h4>1.BOOLEAN:</h4>
    <?php
    $ismarried = false;
    var_dump($ismarried);
    echo "<br><br>";
    echo gettype($ismarried) . "<br><br>";
    ?>

    <h4>2.INTEGER:</h4>
    <?php
    $age = 27;
    var_dump($age);
    echo "<br><br>";
    echo gettype($age);
    ?>

    <h4>3.FLOAT:</h4>
    <?php
    $a = 123.45;
    var_dump($a);
    echo "<br><br>";
    echo gettype($a);
    ?>

    <h4>4.STRING:</h4>
    <?php
    $name = "Nandhu";
    var_dump($name);
    echo "<br><br>";
    echo gettype($name);
    ?>

    <h4>5.NULL:</h4>
    <?php
    $data = null;
    var_dump($data);
    echo "<br><br>";
    echo gettype($data);
    ?>

    <h4><u>TO FIND THE GIVEN CHAR IS STRING OR NOT (IS_STRING)</u></h4>
    <?php
    $dt = "10";
    echo "is string:" . is_string($dt) . "<br><br>";

    $dt = 10;
    echo "is string:" . is_string($dt);
    ?>

    <h4><u>TO FIND THE GIVEN CHAR IS BOOLEAN OR NOT (IS_BOOL)</u></h4>
    <?php
    $dt = true;
    echo "is boolean:" . is_bool($dt) . "<br><br>";

    $dt = false;
    echo "is boolean:" . is_bool($dt) . "<br><br>";

    $dt = "false";
    echo "is boolean:" . is_bool($dt);
    ?>

    <h4><u>TO FIND THE GIVEN CHAR IS INTEGER OR NOT (IS_INT)</u></h4>
    <?php
    $dt = 10;
    echo "is integer:" . is_int($dt) . "<br><br>";

    $dt = 18.76;
    echo "is integer:" . is_int($dt);
    ?>

    <h4><u>TO FIND THE GIVEN CHAR IS FLOAT OR NOT (IS_FLOAT)</u></h4>
    <?php
    $dt = 10.90;
    echo "is float:" . is_float($dt) . "<br><br>";

    $dt = 20;
    echo "is float:" . is_float($dt);
    ?>

    <h4><u>TO FIND THE GIVEN CHAR IS NULL OR NOT (IS_NULL)</u></h4>
    <?php
    $dt = null;
    echo "is null:" . is_null($dt) . "<br><br>";

    $dt;
    echo "is null:" . is_null($dt) . "<br><br>";

    $dt = 28;
    echo "is null:" . is_null($dt);
    ?>
	</body>
	</html>