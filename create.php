<?php 
// FOR SIGNIN
// $error = false;
// if(isset($_POST['input-usr1']) && isset($_POST['input-pwd1'])){ 
// $user = $_POST['input-usr1'];
// $passcode = $_POST['input-pwd1']; 
// $fileContents =  file_get_contents('.data.txt');
// $toArray = str_getcsv($fileContents);
    
// if(in_array($user, $toArray)){ 
//     $error = false;
//     echo '<script>document.cookie = "Value = 1 ; expires=Thu, 01 Jan 2030\ 00:00:00 UTC";</script>';
//     echo '<script>window.location.replace("main.php")</script>';
// }else{
//  $error = true;
//  }   
    
// }
?>
<!--25 july,27-->

<!DOCTYPE HTML>
<html>
<head>
<title>OneView WebApp :. Create Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="genericons/genericons.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<script src="js/jquery.min.js"></script>
    
<!--    Cookie-->
 <!--   <script>
      function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
    </script> -->
</head>
    
<body>
  <div class="container">
     <div id="card" class="card bg-1 mx-5">
      <div class="card-header">
          <h1 class="text-white-50 text-center" style="font-size: 25px;">Welcome</h1></div>
      <div class="card-body">          
    <form id="form2" method="post">
       <center>
         <div class="image"> 
          <a href="#"><img src="images/cam.png" alt="" width=96 height=96/></a> 
<!--		  <input type="file" value="" />-->
<!--            <img src="images/menu.png" alt=""/>-->
        </div> 
      </center>
          
         <div class="mt-3">
          <div class="d-flex">
           <div class="icon bg-danger">
               <span class="genericon genericon-mail"></span>
           </div>
           <input name="input-usr2" id="usr2" type="text" class="form-control input" placeholder="Enter Username" required/>
              </div>
          <div class="d-flex mt-2">
           <div class="icon bg-danger">
             <span class="genericon genericon-lock"></span>
           </div>
          <input name="input-pwd2" id="pwd2" type="Password" class="form-control input" placeholder="Enter Password" minlength="6" required/>
        </div>
        <div class="d-flex mt-2">
           <div class="icon bg-danger">
             <span class="genericon genericon-lock"></span> 
           </div>
          <input name="input-pwd3" id="pwd3" type="Password" class="form-control input" placeholder="Confirm Password" minlength="6" required/>
        </div>
      </div>
        
        <div class="text-center text-muted">
          <small id="etext"></small></div> 
        
        
        <div class="mt-5 px-4">
         <!-- <input type="submit" value="Create Account" class="btn btn-danger w-100" >   -->
          <a href="main.php" class="btn btn-danger w-100">Create Account</a>
        </div>
        </form>
     </div>
         <div class="card-footer text-center">
             
          <a href= "index.php"id="cnat" class="text-white-50" style="cursor:pointer;"><span style="margin-top: 3px;" class="genericon genericon-previous"></span> Back</a>
         </div>
     </div>
  </div>
    
<!-- <script src="js/script.js"></script>  -->
<!-- <script>
var f1 = document.getElementById("form1");
var f2 = document.getElementById("form2");
var cnaText = document.getElementById("cnat");
f1.style.display = "block";
f2.style.display = "none";    
    
function cna(){
 if(f1.style.display == "block"){
   f1.style.display = "none";   
   f2.style.display = "block"; 
   cnaText.innerHTML = "<span class='fa fa-chevron-left' style='font-size: 10px;'></span> Back"; 
 }else{
   f1.style.display = "block"; 
   f2.style.display = "none";   
   cnaText.innerHTML = "Create New Account <span class='fa fa-chevron-right' style='font-size: 10px;'></span> ";  
 }
}
    </script> -->
</body>
</html>

<?php 

//CREATING NEW ACCOUNT
// $Error = false;
//  if(isset($_POST['input-usr2']) && isset($_POST['input-pwd2']) && isset($_POST['input-pwd3'])){ 
     
// $a = $_POST['input-usr2'];
// $b = $_POST['input-pwd2'];
     
//  $array = array("UserData", $a, $b);
//  $encodedString = json_encode($array);
//  $fileContents =  file_get_contents('.data.txt');
//  $to = str_getcsv($fileContents);
//   if(in_array($a, $to)){
//       $Error = true;
//       echo '<script>cna();document.getElementById("etext").innerHTML="Username '.'<i>'.$a.'</i>'.' already Exists!"</script>';
      
//   }else{
//       $base = fopen(".data.txt", "a")or die("Unable to open file!");
//       fwrite($base, $encodedString);
//       fclose($base); 
//       echo '<script>document.cookie = "Value = 1 ; expires=Thu, 01 Jan 2030\ 00:00:00 UTC";</script>';
//  } 
// }
//     elseif(isset($_POST['input-pwd2']) !==isset($_POST['input-pwd3'])){
//     echo '<script>alert("password dont match");</script>';
// }

?>
