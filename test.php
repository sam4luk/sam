<link rel="stylesheet" href="styless.css" />
<section class="about_section layout_padding long_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
  <form action="" method="post">
  <label for="fname">Names:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">Age:</label>
  <input type="text" id="fname" name="age" value=""><br>
  <label for="fname">Gender:</label>
  <input type="text" id="fname" name="gender" value=""><br>
  <label for="lname">phone_no:</label>
  <input type="text" id="fname" name="phone_no" value=""><br>
  <label for="fname">Local state:</label>
  <input type="text" id="fname" name="state" value=""><br>
  <label for="fname">Country:</label>
  <input type="text" id="lname" name="country" value=""><br><br>
   <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" placeholder="Type your comment here"></textarea>
    </div>
  <input type="submit">
</form> 
</div>
</div>
<div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
              <?php if(isset($_GET["fname"]) ) { ?>
              <h1>Welcome <?php 
              $name = $_GET["fname"]; 
               echo $name;  }?>
              </h1>
              </div>
              <p>
              <h4>Profile</h4>
                          <ul>
                          
                            <li>Age: <?php echo $age = (isset($_POST["age"])) ? $_POST["age"] : "Please enter your age"; ?></li>
                            <li>Gender: <?php echo $gender = (isset($_POST["gender"])) ? $_POST["gender"] : "Please enter your gender"; ?></li>
                            <li>Phone Number: <?php echo $phone_no = (isset($_POST["phone_no"])) ? $_POST["phone_no"] : "Please enter your phone number"; ?></li>
                            <li>State: <?php echo $state = (isset($_POST["state"])) ? $_POST["state"] : "Please enter your state"; ?></li>
                            <li>Country: <?php echo $country = (isset($_POST["country"])) ? $_POST["country"] : "Please enter your country"; ?></li>
                          </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



