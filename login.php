<!doctype html >

<html>

<head>

<title>Page </title>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
h1 {
    font-family: 'Passion One';
    font-size: 180;
    text-transform: uppercase;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 180;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 180
    font-weight: 150;
    font-family: 'Lato';
    padding: 10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eed;
}
div.form-element {
    margin: 20px 0;
}
button {
    padding: 10px;
    font-size: 180
  font-family: 'Lato';
    font-weight: 150;
    background: black;
    color: white;
    border: none;
}
</style>
</head>

<body>

<form method="POST" action="" name="signin-form">
<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required="required" />
</div>

<div class="form-element">
<label>Password</label>
<input type="password" name="password" required="required" />
</div>
<button type="submit" name="login " value="login">login </button>
</form>
</body>

</html>





