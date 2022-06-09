<?php
if (isset($_GET["name"]) || isset($_GET["age"])) {
    echo "Hello " . $_GET["name"] . "<br/> ";
    echo "I hear you are " . $_GET["age"] . " years old.<br/> ";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF?>" method="GET">
            Name:<input type="text" placeholder="Enter your name" name="name" />
            Age:<input type="text" placeholder="Your Age" name="age"/>
            <input type="submit" />
        </form>
    </body>
</html>
