<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bgroup = $_POST['bgroup'];

            $sql = "INSERT into `User` (`name`,`email`,`phone`,`bgroup`) VALUES ('$name', '$email', '$phone', '$bgroup')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo "Entry SuccessFul";
            } else {
                echo "Error occurred";
            }
        } else {
            echo 'Invalid Request.';
        }
    }

}

?>
<!-- <html>
    <header>
        <title>Blood Donation Camp</title>
    </header>
    <body bgcolor="FBB917" >
        <h1>Blood Donation Camp</h1>
        <div>
            <h2>Registration Form</h2>
            <form action="" method="POST">
                <label for="user">Name:</label><br/>
                <input type="text" name="name" id="name" required placeholder="Enter Name"/><br/><br/>
                <label for="email">Email:</label><br/>
                <input type="email" name="name" id="email" required placeholder="Enter Email Address"/><br/><br/>
                <label for="phone">Phone:</label><br/>
                <input type="text" name="name" id="phone" required placeholder="Enter Phone number"/><br/><br/>
                <label for="bgroup">Blood Group:</label><br/>
                <input type="text" name="name" id="bgroup" required placeholder="Enter Blood group"/><br/><br/>
                <input type="submit" name="submit" id="submit"/>
            </form>
        </div>
    </body>
</html> -->
