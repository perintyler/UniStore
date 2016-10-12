<!DOCTYPE html>
<html>
  <head><title>Profile Sumbmit</title></head>
    <body>
    <h3 class="text-center">Welcome to FileShare!</h3>

    <br /> <br />

      <?php
                      session_start();

                      if (isset($_POST['name'] && isset($_POST['email'] && isset($_POST['description'] && isset($_POST['age'] ) && isset($_POST['uploadedFile']) {


                          $name = $_POST['name'];
				  $email = $_POST['email'];
				  $description = $_POST['description'];
				  $age = (int)$_POST['age'];
				  $uploadedFile = $_POST['uploadedFile'];

				  $target_dir = "uploads/";
				  $target_file = $target_dir . basename($_FILES[uploadedFile]["name"]);
				  $uploadOk = 1;
				  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

				  $username = 'uroot';
				  $password = 'proot';

				  if ($conn->connect_error) {
    	  				die("Connection failed: " . $conn->connect_error);
				}

				$sql = "INSERT INTO users (id,name, email,pictureUrl,description,age)
				VALUES ($id,$name,$email,$uploadedFile,$description,$age)";

				using matchmaker;
				select


				  $conn = new mysqli($servername, $username, $password);

				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	  					echo "The file ". basename( $_FILES[$uploadedFile]["name"]). " has been uploaded.";
				} else {
    					echo "Sorry, there was an error uploading your file.";
				}

			  }else{
				  echo "please enter a value for all fields";
			  }
              ?>
     </body>
     </html>
