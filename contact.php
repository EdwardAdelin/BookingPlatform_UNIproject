<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Wanderlust</title>
</head>
<body>
<!-- site -->
<section class="site">

  <!-- navigation -->
  <nav>
    <a href="home.php#site">Home</a>
    <a href="booking.php">BOOKING</a>
    <a href="contact.php">Contact</a>
  </nav>
  <!-- end navigation --> 

<br>
<!-- style for form -->
<style>
    body {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}

form {
  max-width: 400px;
  margin: 0 auto;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="date"],
textarea {
  width: 100%;
  padding: 1px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 2px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

input[type="submit"]:focus {
  outline: none;
}

textarea {
  height: 100px;
}
    </style>

    <container>
    <div class="form">
  <form action="connect.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Submit">
  </form>
</div>
</container>












</section>
<!-- end site-->



<!-- footer -->
<section class="footer">
<!-- fondatori -->
<center>
<h1> FOUNDERS </h2><br><br>
<div>

  <!-- poza 1 -->
  
  <div class="col-md-6">
  <img class="ss" 
   src="https://i.pinimg.com/280x280_RS/00/a4/df/00a4df239d600a1d2582dbf69da06d4d.jpg">
  <p class="quote">Traveling opens new minds, offers new perspectives, and embraces you with the culture of other places. It's an investment in yourself. - Hadasa Jercau </p>
  
  </div>
  

  <!-- poza 2 -->
   <div class="col-md-6">
   <img class="ss" 
   src="https://scontent.fotp3-1.fna.fbcdn.net/v/t1.6435-9/85172758_2242528502716667_1053516410686275584_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=MFu7Q4fbNAIAX80K2RB&_nc_ht=scontent.fotp3-1.fna&oh=00_AfBp4Nz0HwUm7-vXVZ94BOX_u6MB-y_V0sJ243tYnm2HOQ&oe=6491D6EC">
  <p class="quote">Traveling is the only thing you can buy that makes you richer. - Adelin Finichiu
  </p>
  </div>
 
</div>
</center>
<!-- end fondatori -->
</section>

</body>
</html>