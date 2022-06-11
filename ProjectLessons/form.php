<!DOCTYPE html>
<html>
    <header>
        <title>Form Validation</title>
    </header>
    <body>
        <?php
$fullname = $email = $gender = $comment = $number = $age = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = test_input($_POST['fullname']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
    $number = test_input($_POST['number']);
    $age = test_input($_POST['age']);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    <h1>Form Validation</h1>
    <form action="<?php $_PHP_SELF?>" method="POST">
        <label for="user">Name:</label><br/>
        <input type="text" name="fullname" id="fullname" required placeholder="Enter Name"/><br/><br/>
        <label for="email">Email:</label><br/>
        <input type="email" name="email" id="email" required placeholder="Enter Email Address"/><br/><br/>
        <label for="gender">Gender:</label><br/>
        <input type="radio" name="gender" id="gender" required value="male"/><br/>
        <input type="radio" name="gender" id="gender" required value="female"/><br/>
        <label for="number">Number: (Optional)</label><br/>
        <input type="text" name="number" id="number" placeholder="Enter Phone number"/><br/><br/>
        <label for="age">Age:</label><br/>
        <input type="text" name="age" id="age" placeholder="Enter Age"/><br/><br/>
        <label for="comment">Comment:</label><br/>
        <textarea name="comment" id="comment" placeholder="Enter Comment" rows="10",cols="30"></textarea><br/><br/>
        <input type="submit" name="submit" id="submit"/>
    </form>
<?php
echo "<h2>Your Input</h2>";
echo "$fullname<br/>";
echo "$email<br/>";
echo "$gender<br/>";
echo "$number<br/>";
echo "$age<br/>";
echo "$comment<br/>";

?>
    </body>
</html>
