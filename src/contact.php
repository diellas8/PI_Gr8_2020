
<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT FORM</title>
        <link rel="stylesheet" type="text/css" href="../css/mainContact.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
     
      
        
    </head>
   
    <body>

        <a href="../index.php" style="text-decoration: none;color: rgb(192, 93, 93);">
            <p><strong>&#172;Kthehu ne faqen kryesore</strong></p></a>


        <div calss="title">
            <h1 style="color: white;">CONTACT US <?php 
            if(isset($_SESSION["success"]))
            {
              echo $_SESSION["username"];}
              ?></h1>
            <h2 style="color:white">WE ARE READY TO LEAD YOU TO THE FUTURE</h2>
        </div>

        <div class="box">
            <form method="POST" action="php/mail.php">
     
      <?php         if(isset($_SESSION['sent'])){
               ?>
               <p style="color:white"><?php echo $_SESSION['sent']; unset($_SESSION['sent']); ?></p>
              <?php } ?>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required><br>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required><br>
                <textarea name="message" name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
                <button type="submit" name="button" class="form-control submit" >SEND MESSAGE</button>
                
            </form>
        </div>
        <address style="color: coral;">Rruga Muharrem Fejza,<br>
                        Prishtinë, 10000 <br>
            Republika e Kosovës</address>
    </footer>

    <p>
        <iframe src="https://www.google.com/maps/embed?
        pb=!1m18!1m12!1m3!1d2933.9284536987448!2d21.154876214971107!
        3d42.662871523917914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!
        1m2!1s0x13549ee398234689%3A0x1ecdd21bb52cbd0f!2sFadil%20Vokrri%20Stadium!
        5e0!3m2!1sen!2s!4v1578247141341!5m2!1sen!2s"
         width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </p>
   





    <p style="color: white;">Click the button to get your coordinates.</p>

    <button onclick="getLocation()">KLIKO</button>
    
    <p id="demo"></p>
    
    <script>
    var x = document.getElementById("demo");
    
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    
    function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude;
    }
    </script>
    </body>
   
</html>