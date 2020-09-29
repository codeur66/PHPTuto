<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$name = $_REQUEST['fname']; // recuperer la valeur de saisie avec la methode $_REQUEST
    $name = $_POST['fname']; // recuperer la valeur de saisie avec la methode $_POST
    if (empty($name)){
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>