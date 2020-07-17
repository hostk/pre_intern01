<!DOCTYPE html>
<html>
<head>
<title> University Admission Systm</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
</head>
<body class="d-flex flex-column">
    <?php
    include 'db.php';

    
   
    ?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-custom fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/oxford.png" width="20%"></a>
    </div>
    <div class="navbar-collapse collapse">

        <ul  id="top-menu" class="nav navbar-nav navbar-right ">
			<li><a href="index.php" class="navbar-text">Home</a></li>
		    <li><a href="application.php" class="navbar-text">Online Application</a></li>
            <li><a href="login.php" class="navbar-text">Login</a></li>
		</ul>
			
    </div>
  </div>
</nav>
<div class="container pt-0">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="img/oxbanner.jpg"  id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
            <div class="carousel-item">
                <img src="img/oxbanner.jpg" id="imageslider">
                
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</header>
<?php
$valid=true;
// to validate inputs
if(!empty($_POST))
{
    $title=$_POST['title'];
    
    if(empty($title))
    {
        $titleError='Please choose title';
        $valid=false;
    }
}
//to connect database
/* if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO applicant(ename,mmname,major) values('$name','$position','$major')";
    $q = $pdo->prepare($sql); 
    $q->execute(array($name,$position,$major));
    Database::disconnect();
    header("Location: application.php");
}*/
?>
<div class="container maincontent">
    <fieldset class="adminform">
    <legend>Admission Progress</legend>
      <table width="100%">
        <tr>
          <td width="20%"><b>1. Fill in Application</b></td>
          <td width="15%">2. Verify Data</td>
          <td width="32%">3. Print Application Form</td>
          <td width="12%">4. Login</td>
        </tr>
      </table>
      <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
       </div>
    </fieldset>
    <form class="form-horizontal" action="application.php" method="post">
    <div class="container" >
    <div class="row">
      <h4> Applicant's Information </h4>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="title">Title</label>
           <div class="controls col-md-4">
                <select name="title" id="title" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="Mr" >Mr</option>
                  <option value="Ms" >Ms</option>
                  <option value="Mrs">Mrs</option>
                </select>
                <?php if (!empty($titleError)): ?>
                <span class="help-inline"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="eng_name">Name (Eng)</label>
            <div class="controls col-md-4">
               <input name="eng_name" type="text" id="eng_name" class="form-control form-control-inline col-md-4" placeholder="Name in English" >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mm_name">Name (MM)</label>
            <div class="controls col-md-4">
               <input name="mm_name" type="text" id="mm_name" class="form-control form-control-inline col-md-4" placeholder="Name in Myanmar" >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Gender</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gender" id="male" checked>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" id="female">Female</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="email">Email</label>
            <div class="controls col-md-4">
               <input name="email" type="text" id="email" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="syllabus">Syllabus</label>
           <div class="controls col-md-4">
                <select name="syllabus" id="syllabus" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="civil" >Civil Engineering/option>
                  <option value="it" >IT Engineering</option>
                  <option value="electrical">Electrical Engineering</option>
                </select>
            </div>
    </div>
    </div>
    <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Education </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Study in</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="studyin" id="myanmar" checked>Myanmar</label>
            <label class="radio-inline"><input type="radio" name="studyin" id="abroad ">Abroad</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="school">School</label>
            <div class="controls col-md-4">
               <input name="school" type="text" id="school" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Level of Completion</label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >GCE O Level</option>
                  <option value="gce_a" >GCE A Level</option>
                  <option value="grade11">Grade 11</option>
                  <option value="grade11">IGCSE</option>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Major of Completion</label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" >Science (Biology)</option>
                  <option value="gce_a" >Arts</option>
                  <option value="grade11">Science and Arts</option>
                  <option value="grade11">other</option>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="marks">Marks</label>
            <div class="controls col-md-4">
               <input name="marks" type="text" id="marks" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
  </div>
  <br><hr>

  <div class="container" >
    <div class="row">
      <h4>Personal Details </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="birthdate">Birthdate</label>
            <div class="controls col-md-4">
            <input type="date" id="birthdate" name="birthdate">
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="nationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="nationality" type="text" id="nationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="nationality">Citizenship</label>
            <div class="controls col-md-4">
               <input name="citizen" type="text" id="citizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Regligion</label>
           <div class="controls col-md-4">
                <select name="religion" id="religion" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="buddhism" >Buddhism</option>
                  <option value="chirstian" >Christian</option>
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="other">Other</option>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="bloodtype">Blood Group</label>
           <div class="controls col-md-4">
                <select name="bloodtype" id="bloodtype" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="A" >A</option>
                  <option value="B" >B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="citizenid">Citizen ID</label>
            <div class="controls col-md-4">
               <input name="citizenid" type="text" id="citizenid" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="passport">If not Myanmar Citizen,enter passport number</label>
            <div class="controls col-md-4">
               <input name="passport" type="text" id="passport" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mailing Address </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="address">Address No:</label>
            <div class="controls col-md-4">
               <input name="address" type="text" id="address" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="facebook">Facebook</label>
            <div class="controls col-md-4">
               <input name="facebook" type="text" id="facebook" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Father's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name</label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="fstatus" id="fliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="fstatus" id="fdecease">Decese</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <div class="controls col-md-4">
               <input name="faddress" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mother's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name</label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4"  >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="status">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mdecese">Decese</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <div class="controls col-md-4">
               <input name="faddress" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4"  >
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4"  >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township</label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City</label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4"  >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4"  >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile</label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4"  >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
    <div class="col-md-12 button">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
</div>


</body>
</html>