<!DOCTYPE html>
<html>
    <header>
        <title>Blood Donation Camp</title>
    </header>
    <body bgcolor="FBB917" >
        <h1>Blood Donation Camp</h1>
        <div>
            <h2>Registration Form</h2>
            <form action="register.php" method="POST">
                <label for="user">Name:</label><br/>
                <input type="text" name="name" id="name" required placeholder="Enter Name"/><br/><br/>
                <label for="email">Email:</label><br/>
                <input type="email" name="email" id="email" required placeholder="Enter Email Address"/><br/><br/>
                <label for="phone">Phone:</label><br/>
                <input type="text" name="phone" id="phone" required placeholder="Enter Phone number"/><br/><br/>
                <label for="bgroup">Blood Group:</label><br/>
                <input type="text" name="bgroup" id="bgroup" required placeholder="Enter Blood group"/><br/><br/>
                <input type="submit" name="submit" id="submit"/>
            </form>
        </div>
    </body>
</html>
