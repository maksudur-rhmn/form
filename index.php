  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Form Validation</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <style media="screen">
        .abc{
          position: relative;
        }
        .abc button{
          position: absolute;
top: 16px;
right: 0;
height: 54%;
border: none;
        }
      </style>
      <section>
        <div class="container">
      <div class="row">
          <div class="col-lg-7 text-center m-auto  bg-danger py-5">
            <form action="view.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="fname" placeholder="Enter Name">
        <div class="error text-light py-3">
          <?php
           if(!empty($_GET['nam_error'])){
             echo $_GET['nam_error'];
           }
           ?>
         </div>
          <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
          <div class="error text-light py-3">
            <?php
             if(!empty($_GET['email_error'])){
               echo $_GET['email_error'];
             }
             ?>
           </div>
          <div class="error text-light py-3 abc">
            <input type="password" class="form-control" name="pass" placeholder="Enter Your Password" id="myInput">
              <button class="bg-primary text-light" type="button"onclick="myFunction()">Show</button>
            <?php
               if(!empty($_GET['pass_error'])){
                 echo $_GET['pass_error'];
               }
             ?>
          </div>
          <div class="error text-light py-3">
            <input type="password" class="form-control" name="re_pass" placeholder="Retype Your Password">

            <?php
               if(!empty($_GET['re_pass_error'])){
                 echo $_GET['re_pass_error'];
               }
             ?>
          </div>
          <div class="error text-light py-3">
            <select class="form-control" name="country">
              <option value="">Choose Your Country</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Canada">Canada</option>
              <option value="Australia">Australia</option>
              <option value="Belgium">Belgium</option>
            </select>
            <?php
               if(!empty($_GET['country_error'])){
                 echo $_GET['country_error'];
               }
             ?>
          </div>
          <input type="radio" name="gender" class="mr-1" value="Male">Male
          <input type="radio" name="gender" class="mr-1" value="Female">Female
            <div class="error text-light py-3">
              <?php
                  if(!empty($_GET['gen_error'])){
                    echo $_GET['gen_error'];
                  }
               ?>
            </div>
            <strong><p class="d-inline-block text-light">Hobbies:</p></strong>
            <input type="checkbox" name="hobbies[]" class="mr-1" value="Reading Books">Reading Books
            <input type="checkbox" name="hobbies[]" class="mr-1" value="Music">Music
            <input type="checkbox" name="hobbies[]" class="mr-1" value="Biking">Biking
            <input type="checkbox" name="hobbies[]" class="mr-1" value="Travelling">Travelling
            <input type="checkbox" name="hobbies[]" class="mr-1" value="Playing Guitar">Playing Guitar
            <div class="error text-light py-3">
               <?php
                   if(!empty($_GET['hob_error'])){
                     echo $_GET['hob_error'];
                   }
                ?>
            </div>
            <select class="form-control" name="subject[]" multiple>
              <option value="">Choose Your subject</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="ICT">ICT</option>
              <option value="Biology">Biology</option>
              <option value="Maths">Maths</option>
            </select>
            <div class="error text-light py-3">
              <?php
                  if(!empty($_GET['sub_error'])){
                   echo $_GET['sub_error'];
                 }
               ?>
            </div>
              <input type="date" name="dob" class="form-control"> Date of Birth:
              <div class="error text-light py-3">
                <?php
                 if(!empty($_GET['dob_error'])){
                   echo $_GET['dob_error'];
                 }
                 ?>
              </div>
            <textarea name="message" class="form-control" placeholder="Enter Your message here...">
            </textarea>
            <div class="error text-light py-3">
              <?php
                 if(!empty($_GET['msg_error'])){
                   echo $_GET['msg_error'];
                 }
                ?>
            </div>

       </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

          </div>
      </div>

        </div>
      </section>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}
  </script>
    </body>
  </html>
