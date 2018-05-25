<section id="contact">
<?php
    $from = $subject = $message = $email = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from = test_input($_POST["from"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
  <div class="overlay"></div>
  <div class="inner">
    <h2>CONTACT US</h2>
    <div class="mail">
      <p>Send us your comments, suggestions and questions, we would love to hear from you</p>
        <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="mail-header">
            <span><i class="fa fa-envelope-open-o"></i></span>
          </div>
          <div class="mail-body">
            <div class="row">
              <label for="" class="col-lg-3 col-md-4 col-sm-3">Name:</label>
              <input class="col-lg-9 col-md-8 col-sm-9" type="text" placeholder="Name" name="from" >
            </div>
            <div class="row">
              <label for="" class="col-lg-3 col-md-4 col-sm-3">Email:</label>
              <input class="col-lg-9 col-md-8 col-sm-9" type="email" placeholder="Email Address" name="email">
            </div>
            <div class="row">
              <label for="" class="col-lg-3 col-md-4 col-sm-3">Message:</label>
              <textarea class="col-lg-9 col-md-8 col-sm-9"  name="message" rows="8" placeholder="Message"></textarea>
            </div>
            <input type="submit" name="submit" value="SEND" class="btn-loud" />
          </div>
        </form>
        <?php
            $subject = "Website Comment Submission - $from; - $email;";
            mail("isurobotics@gmail.com",$subject,$message);
            ?>
    </div>
  </div>
</section>
