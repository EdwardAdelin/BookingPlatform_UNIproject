<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_2.css">
    <title>Wanderlust</title>
</head>
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
<form action="process_form.php" method="post">
        <h2>Select your option:</h2><br>
        Distanta: <br>
        <select name="Distanta">
          
            <option value="<300km">sub 300km</option>
            <option value="<500km">sub 500km</option>
            <option value=">500km">peste 500km</option>
        </select>
  <br>
  <br>
  Climat: <br>
        <select name="Climat">
            <option value="Cald">Cald</option>
            <option value="Rece">Rece</option>
            <option value="Temperat">Temperat</option>
        </select>
        
        <br>
  <br>
  Relief: <br>
        <select name="Relief">
            <option value="Munte">Munte</option>
            <option value="Mare">Mare</option>
            <option value="Campie">Campie</option>
            <option value="Deal">Deal</option>
        </select>

        <br>
  <br>
        <select name="Cazare">
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
        </select>

        <br>
        <input type="submit" value="Submit">
    </form>




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