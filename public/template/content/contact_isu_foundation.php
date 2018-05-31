<section id="contact">
<?php
    $from = $subject = $message = $email = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $company = test_input($_POST["company"]);
        $project = test_input($_POST["project"]);
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
    <h1>CONTACT THE ISU FOUNDATION</h1>
    <div class="mail" >
      <p> To donate to the Iowa State Robotics Club please fill out the information below and someone from the ISU Foundation will contact you with more information. </p>
        <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="mail-header">
            <span><i class="fa fa-envelope-open-o"></i></span>
          </div>
          <div class="mail-body">
            <div class="row">
              <label for="" class="col-lg-3 col-md-4 col-sm-3">Name:</label>
              <input class="col-lg-9 col-md-8 col-sm-9" type="text" placeholder="Contact name" name="name" >
            </div>
            <div class="row">
                <label for="" class="col-lg-3 col-md-4 col-sm-3">Company:</label>
                <input class="col-lg-9 col-md-8 col-sm-9" type="text" placeholder="Company you are from" name="company" >
            </div>
            <div class="row">
                <label for="" class="col-lg-3 col-md-4 col-sm-3">Email:</label>
                <input class="col-lg-9 col-md-8 col-sm-9" type="email" placeholder="Contact email address for donations" name="email">
            </div>
            <div class="row">
                <label for="" class="col-lg-3 col-md-4 col-sm-3">Project:</label>
                <input class="col-lg-9 col-md-8 col-sm-9" type="text" placeholder="Project to donate towards" name="project" >
            </div>

            <div class="row">
              <label for="" class="col-lg-3 col-md-4 col-sm-3">Message:</label>
              <textarea class="col-lg-9 col-md-8 col-sm-9"  name="message" rows="8" placeholder="Anything else you would like to tell us about contact you for this dontaion. "></textarea>
            </div>
            <input type="submit" name="submit" value="SEND" class="btn-loud" />
          </div>
        </form>
        <?php
            $subject = "Website Donation Submission - $from; - $email;";
            mail("isurobotics@gmail.com",$subject,$message);
            ?>
    </div>
  </div>
</section>
