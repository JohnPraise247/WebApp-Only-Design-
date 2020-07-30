<!--25 july-->

<!DOCTYPE HTML>
<html>
<head>
<title>OneView WebApp :. Saved Reports</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="genericons/genericons.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<style>
  .list{
    background:#216ab9;
  }
  input {
    display: none;
}
label {
    background:  #3a4f69;
    color: #fff;
    cursor: pointer;
    border-radius: 30px;
    line-height: 2em;
    text-align: center;
    transition: .25s;
}
input:checked + label {
    background-color: #2b578e;
    color: #fff;
}
label:hover {
    background-color: #4e637d;
}
.border-muted{
  border-color: #3a4f69 !important;
}
</style>
<script src="js/jquery.min.js"></script>
    
<!--    Cookie-->
   <script>
    //   function setCookie(cname, cvalue, exdays) {
    //     var d = new Date();
    //     d.setTime(d.getTime() + (exdays*24*60*60*1000));
    //     var expires = "expires="+d.toUTCString();
    //     document.cookie = cname + "=" + cvalue + "; " + expires;
    // }

    // function getCookie(cname) {
    //     var name = cname + "=";
    //     var ca = document.cookie.split(';');
    //     for(var i=0; i<ca.length; i++) {
    //         var c = ca[i];
    //         while (c.charAt(0)==' ') c = c.substring(1);
    //         if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    //     }
    //     return "";
    // }

    // function checkUser() {
    //  var user = getCookie("Value");

    //     if (user != 1) {
    //      window.location.replace("index.php"); 
    //     }
    //    }

    </script>
</head>
    
<body onload="checkUser();" style="background:url('bg/bg-1.jpg'); background-size: 100% 100vh;background-attachment: fixed;">
  <div class="container-fluid mb-3">
     <div id="card" class="card bg-1 mx-5">
      <div class="card-header ">
          <h1 class="text-white-50" style="font-size: 25px;">OneView <small class="secondary text-white-50">-  Saved Reports</small></h1></div>
      <div class="card-body">
        <div id="pt1">
        <p class="lead text-white-50" style="font-size: 16px;"><b>Reports</b></p>

            <p class="lead text-center text-white-50">You Don't Have any Saved Reports</p>

<!--              <div class="list-group">
              <a href="#" class="list-group-item list text-white-50">First item</a>
              <a href="#" class="list-group-item list text-white-50">Second item</a>
              <a href="#" class="list-group-item list text-white-50">Third item</a>
            </div> -->

            
      </div>
     </div>
         <div class="card-footer text-muted">
             <small id="status">. . .</small>
         </div>
     </div>
  </div>
    
 <script src="js/custom.js"></script>  
<script>
</script>
</body>
</html>