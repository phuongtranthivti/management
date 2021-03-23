<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">

</head>
<body>
<form action="signup" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <hr>

        <div class="field-wrap">
            <label>
                First Name
            </label>
            <input type="text" name="firstname" />
        </div>

        <div class="field-wrap">
            <label>
                Last Name
            </label>
            <input type="text" name=""lastname"/>
        </div>


        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Please enter Email" name="email" required>

        <label for="email"><b>Phone Number</b></label>
        <input type="text" placeholder="Please phone number" name="phonenumber" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Please enter Password" name="psw" required>

        <label for="psw-repeat"><b>Re-Password</b></label>
        <input type="password" placeholder="Re-Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>
</body>
</html>