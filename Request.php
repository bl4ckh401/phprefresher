<?php
if (isset($_REQUEST['name']) || isset($_POST['age'])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("Invalid Name: Name should only contain letters");
    }
    echo "Hello " . $_REQUEST["name"] . "<br/> ";
    echo "I hear you are " . $_REQUEST["age"] . " years old.<br/> ";
    exit();
}
?>
<html>
    <header>
        <title>Post Example Php</title>
    </header>
    <body>
        <form action="<?php $_PHP_SELF?>" method="POST">
            Name:<input type="text" placeholder="Enter your name" name="name" />
            Age:<input type="text" placeholder="Your Age" name="age"/>
            <input type="submit" />
        </form>
    </body>
</html>
