<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">

<title>SW ADVANTAGE FORM</title>

</head>
<body>

 <?php
include('dbConfig.php');

 if(isset($_POST['submit'])){
     
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $eng_level=$_POST['eng_level'];
       $last_summer=$_POST['last_summer'];
       $looking_for=$_POST['looking_for'];
       $course=$_POST['course'];
       $university=$_POST['university'];
       
$sql = "INSERT INTO eyakimov (name, email, phone, eng_level, last_summer, looking_for, course, university)
VALUES ('$name', '$email', '$phone', '$eng_level', '$last_summer', '$looking_for', '$course', '$university')";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 }

?>


<form id="contact-form" action="index-float.php" method="post">
  <img width="300px" height="120px" src="swlogo.PNG">
  <p>Hello</p>
  <p>My
    <label for="your-name">name</label> is
    <input type="text" name="name" id="your-name" minlength="3" placeholder="(your name here)" required > and</p>

  <p>my
    <label for="email">email address</label> is
    <input type="email"  id="email" placeholder="(your email address)" required name="email">.
  </p>

  <p> My english level is

    <select  id="slct" name="eng_level" class="select">
      <option value="Beginner" >Beginner</option>
      <option value="Intermediate" >Intermediate</option>
      <option value="3">Advanced</option>
    </select>

</p>
   <p> Last summer I

    <select  id="slct" name="last_summer" class="select">
      <option value="Worked">Worked</option>
      <option value="Traveled">Traveled</option>
      <option value="Studied">Studied</option>
    </select>
     and this summer
    </p>
    <p>
 I am looking for 
  <select  id="slct" name="looking_for" class="select">
      <option value="Money">Money</option>
      <option value="Experience">Experience</option>
      <option value="Trip">Trips</option>
    <option value="Challenge">Challenge</option>
    </select>. This is going to
</p>
    <p>
 be my
  <select  id="slct" name="course" class="select">
      <option value="1">First</option>
      <option value="2">Second</option>
      <option value="3">Third</option>
      <option value="4">Forth</option>
    </select> year and
</p>
    <p>
I am studying at
    <input type="text" id="university" placeholder="(abreviation of university)" required name="university">.
</p>
 <p>
My phone number is
    <input type="text" id="phone" placeholder="phone number" required name="phone">.
</p>
  
  <p>
    <button type="submit" name="submit">
     <p class="submit"> SUBMIT</p>
    </button>
  </p>
</form>

</body>
</html>