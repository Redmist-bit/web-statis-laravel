<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="/welcome">
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="negara">Nationality:</label><br><br>
        <select name="" id="">
            <option value="" >Indonesian</option>
            <option value="" >Singaporean</option>
            <option value="" >Malaysian</option>
            <option value="" >Australian</option>
        </select><br><br>

        <label for="bahasa">Language Spoken:</label><br><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> English</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> Other</label><br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>