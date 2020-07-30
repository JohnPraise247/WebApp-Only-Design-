
<!--25 july-->

<!DOCTYPE HTML>
<html>
<head>
<title>OneView WebApp :. Create Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<!-- <meta name="keywords" content="Null" /> -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="genericons/genericons.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
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
          <h1 class="text-white-50" style="font-size: 25px;">OneView <!--<small class="secondary text-white-50">- Dashboard</small>--></h1></div>
      <div class="card-body">
        

       <div id="pt2">
        <p class="lead text-white-50" style="font-size: 16px;"><b>Report Name</b></p>
         <!-- <form method="post"> -->
          <div class="d-flex mt-2">
            <span id="rnText" class="label label-danger text-muted"></span>&nbsp;&nbsp;
          <!-- <input id="reportName" name="input-rn" type="text" class="form-control input" placeholder="Report Name" required/> -->
        </div>
        <!-- <small id="ern" class="text-white-50" style="display: none;"><i>Please enter a Report Name</i></small> -->
        <p class="lead text-white-50 mt-3" style="font-size: 16px;"><b>Tables</b></p>
        <div class="table-responsive">
          <table class="border-muted rounded table table-hover table-bordered text-white-50">
            <thread class="border-muted">
              <tr>
                <th class="border-muted">Id</th>
                <th class="border-muted">Currency</th>
                <th class="border-muted">Offerings</th>
                <th class="border-muted">Tithe</th>
              </tr>
            </thread>

            <tbody class="border-muted">
              <tr>
                <td class="border-muted">1</td>
                <td class="border-muted">₦1000</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">2</td>
                <td class="border-muted">₦500</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">3</td>
                <td class="border-muted">₦200</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">4</td>
                <td class="border-muted">₦100</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">5</td>
                <td class="border-muted">₦50</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">6</td>
                <td class="border-muted">₦20</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
              <tr>
                <td class="border-muted">7</td>
                <td class="border-muted">₦10</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">8</td>
                <td class="border-muted">₦5</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
             
            </tbody>
            
          </table>
</div>
           <!-- </form> -->

          <div class="mt-5">
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <button id="btnNext2" class="btn btn-success py-1 w-100">Save <span  style="font-size: 13px;" class="fa fa-chevron-right"></span></button></div>
          </div>
        </div>
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