<!-- 
    Muhammad Aqila Karindra Daffa
    aqiladaffa92@gmail.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <!-- Name Info -->
        <p>First name</p>
        <input type="text" name="firstName">
        <p>Last name</p>
        <input type="text" name="lastName">

        <!-- Gender Info -->
        <p>Gender</p>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other

        <!-- Nationality Info -->
        <p>Nationality:</p>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Japanese">Japanese</option>
            <option value="American">American</option>
            <option value="Malaysian">Malaysian</option>
        </select>

        <!-- Language Info -->
        <p>Language Spoken:</p>
        <input type="checkbox" name="language">Bahasa Indonesia<br>
        <input type="checkbox" name="language">English<br>
        <input type="checkbox" name="language">Other

        <!-- Bio Info -->
        <p>Bio:</p>
        <textarea name="bio" rows="10" cols="30"></textarea><br>

        <!-- Submit Button -->
        <input type="submit" name="signUp" value="Sign Up">
    </form>
</body>

</html>