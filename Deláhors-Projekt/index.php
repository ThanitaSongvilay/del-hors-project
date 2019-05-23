<!DOCTYPE html>
<html>
<head>
  <meta charset= "utf-8">
  <title> Hem | StudentMat </title> <!--det här syns i webbläsartabben-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  <scrpit type="text/javascript" src="/assets/js/form.js"></script> <!-- koppla till js-->
</head>
<body>
  <nav>
    <p><img src="assets/img/can.jpg"></a></div> StudentMat </p>
    <div class="dropDown">
      <ul>
        <li><a href="index.html">Hem</a>
          <ul>
            <li><a href="Assets/Pages/AboutUs.html">Om oss</a>
              </ul>
            </li>
            <li><a href="assets/Pages/Recipes.html">Recept</a>
              <ul>
                <li><a href="Assets/Pages/recipes/Vegan.php">Vegan</a>
                  <li><a href="Assets/Pages/recipes/Vegetarian.php">Vego</a><li>
                  </ul>
                </li>
                <li><a href="#">Handla</a>
                  <ul>
                    <li><a href="Assets/Pages/shops/VegoShop.php">Köp</a></ul>
                    </li>
                  </ul>
                  <div id= "logInContainer">
                    <form id="form" name="form" method="POST" action="logIn.php"onsubmit="return kolla()">
                      <div id="Namn">
                        <input type="text" placeholder="Användarnamn" name="Namn"/>
                      </div>
                      <div id="Losen">
                        <input type="password" placeholder="Lösenord..." name="Email"/>
                      </div>
                      <div id="Knapp">
                        <button type="submit">Logga in</button>
                      </div>
                    </form>
                  </div>
                </nav>
              <footer>
                <div class="foot">

                </div>
              </footer>

		<p> Not a member?  <a href="assets/Pages/Register.php"> Register now</a></p>
                <script>
                function kolla(){
                  var namn = document.form.Namn.value;
                  var email = document.form.Email.value;

                  if(namn.trim() == ""){
                    alert("Skriv in ditt användarnamn.");
                    return false;
                  }
                  if(email.trim() == ""){
                    alert("Skriv in ditt lösenord.");
                    return false;
                  }
                }
            </script>
          </body>
        </html>
