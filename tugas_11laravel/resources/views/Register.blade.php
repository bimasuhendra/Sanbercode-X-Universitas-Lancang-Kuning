<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2> Sign Up Form</h2>
</body>
<form action="/welcome" method="GET">
    @csrf
    <label>First name:</label><br>
    <input type="text"  name="fname"><br><br>
    <label>Last name:</label><br>
    <input type="text"  name="lname"> <br><br>

    <label for="other">Gender :</label> <br><br>
    <input type="radio" id="male" name="fav_language" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="famele" name="fav_language" value="Famele">
    <label for="famele">Famele</label><br>
    <input type="radio" id="other" name="fav_language" value="other">
    <label for="other">Other</label> <br><br>

    <label for="">Nationality:</label>

    <select>
      <option> Indonesian </option>
      <option> English</option>
      <option> Japanese</option>
      <option> Australia</option>
    </select> <br><br>

  <label for="">Languenge Spoken:</label><br>

      <input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia">
      <label for="vehicle1"> Bahasa Indonesia </label><br>
      <input type="checkbox" name="English" value="English">
      <label for="vehicle2"> English </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle2"> Arabic </label><br>
      <input type="checkbox"  name="Other" value="Other">
      <label for="vehicle3"> Other </label> 
      
      <p>Bio:</p>
      <textarea name="message" rows="7" cols="30"></textarea> <br><br>
    <input type="submit" value="Sign Up">
  </form>
</html>