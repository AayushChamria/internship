<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .logo {
            padding:25px;
            width: 80%;
            height: 100%;

        }

        .col-sm-6{
            width:100%;
        }
        .btn {
            background-color: green;
            width: 190px;
            height: 38px;
            border: none;
            border-radius: 8px;
            color: white;
        }
    </style>

</head>

<body>

    <!-- Header Logo -->
    <center>
        <div>
            <img src="includes/logo.png" alt="" class="logo img-responsive">
        </div>
    </center>
    <br><br>
    <center>
        <h3 class="">Authentication System</h3>
    </center>
    <br>
    <center>
        <form action="includes\signupback.php" method="POST" class="form-horizontal col-md-offset-2 col-md-10">
            <div class="row">
                <div class="container">
                    <label for="name" class="label col-sm-2 control-label"><b>First Name :</b></label>
                    <input type="text" name="first" class="myname col-sm-6" required>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="label col-sm-2 control-label" ><b>Second Name :</b></label>
                    <input type="text" name="mid" class="myname col-sm-6"  required>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="label col-sm-2 control-label" ><b>Last Name :</b></label>
                    <input type="text" name="last" class="myname col-sm-6"  required>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="label col-sm-2 control-label" ><b>Roll No. :</b></label>
                    <input type="text" name="rollno" class="myname col-sm-6" required>
                </div>
            
                <br><br>
                <div class="container">
                    <label for="name" class="col-sm-2 control-label"  ><b>Department :</b></label>
                    <select type="text" name="dept" class="myname col-sm-6" style="height:30px;"  required>
                        <option value="" disabled selected>Select your option</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Electronics and telecommunication">Electronics and telecommunication</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Instrumentation Engineering">Instrumentation Engineering</option>
                        <option value="Engineering Sciences">Engineering Sciences</option>
                    </select>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="col-sm-2 control-label"  ><b>Year of Admission :</b></label>
                    <input type="int" name="yadm" class="col-sm-6"  required>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="col-sm-2 control-label" ><b>Status :</b></label>
                    <select type="text" name="first" class="col-sm-6" style="height:30px;">
                        <option value="" disabled selected>Select your option</option>
                        <option value="Bonafide">Bonafide</option>
                        <option value="Pass out">Pass out</option>
                    </select>
                </div>
                <br><br>
                <div class="container">
                    <label for="name" class="col-sm-2 control-label" ><b>Year of Complete :</b></label>
                    <input type="int" name="ycom" class="col-sm-6" >
                </div>
                <br><br><br>
                <div class="container">
                    <button class="btn" name="signin">Sign In</button>
                
                </div>
                
            </div>
        </form>
    </center>

</body>

</html>