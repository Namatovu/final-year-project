<?php
include ('conns.php');

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>THE SMECreditPortal</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <script type = "text/javascript" src="js/jquery.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript">
  $(function(){

    var requiredCheckboxes = $(':checkbox[required]');

    requiredCheckboxes.change(function(){

        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        }

        else {
            requiredCheckboxes.attr('required', 'required');
        }
    });

});

    $(function() {


      $('#sign').on('click',function(e){
        e.preventDefault();
        $('.sin').slideToggle("slow");
         $(".sin2").hide();
          $(".sin3").hide();
      });

      $('#sign2').on('click',function(e){
        e.preventDefault();
        $('.sin2').slideToggle("slow");
         $(".sin").hide();
          $(".sin3").hide();
      });

      $('#sign3').on('click',function(e){
        e.preventDefault();
        $('.sin3').slideToggle("slow");
         $(".sin").hide();
          $(".sin2").hide();
      });


      $("#services").click(function(z){
       z.preventDefault();
       $(".servi").show("slow",function(){
        $(".go").hide();
        $(".abt").hide();
         $(".con").hide();
          $(".sup").hide();

       });

      });

      $("#home").click(function(x){
       x.preventDefault();
       $(".go").show("slow",function(){
        $(".servi").hide();
        $(".abt").hide();
         $(".con").hide();
         $(".sup").show();
         
       });

      });

      $("#about").click(function(y){
       y.preventDefault();
       $(".abt").show("slow",function(){
        $(".servi").hide();
        $(".go").hide();
         $(".con").hide();
         $(".sup").hide();
       });

      });

       $("#contact").click(function(u){
       u.preventDefault();
       $(".con").show("slow",function(){
        $(".servi").hide();
        $(".go").hide();
         $(".abt").hide();
         $(".sup").hide();
       });

      });

       
      

    });

    
  </script>
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SME</b>CreditPortal</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SME</b>CreditPortal</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
       <div class="navbar-custom-menu">
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
         
          <!-- Tasks Menu -->
         
          <!-- User Account Menu -->
           <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
             <a href="#" class="dropdown-toggle" >
              ADMIN

              
            </a>
            
          </li>
         
         
        

        </ul>
      </div>
       </div>
    
    </nav>


  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
       
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="#" id="home"> <i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
        <li><a href="#" id="services"><i class="fa fa-bell-o" aria-hidden="true"></i> <span>Notifications</span></a></li>
        <li><a href="#" id="about"><i class="fa fa-users" aria-hidden="true"></i> <span>Accounts Management</span></a></li>
        <li><a href="#" id="contact"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Reports</span></a></li>
         <li><a href="logout2.php" id="Logout"><i class="fa fa-link" aria-hidden="true"></i> <span>Logout</span></a></li>
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="go">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h4> Dashboard <i class="fa fa-tachometer" aria-hidden="true"></i></h4>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      
       <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Registered SMEs</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>High risks SMEs</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>20</h3>

              <p>Financial Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

       <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
         

        </div>
        <!-- /.col (RIGHT) -->
      </div>
</div>

<!-- notifications div-->
<div class="servi" style="display: none; ">

<!-- send FI details div-->
<br>
 <div class="well well-sm"  style="width: 450px;  ">
            <div class="card-header">
              <h3 style="text-center">Send financial institution account details</h3>
              
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
              <input type="input" class="form-control col-md-5" name="name" placeholder="Name of financial institution" required="required">
                </div>
                 <div class="form-group">
              <input type="email" class="form-control col-md-5" name="emaill" placeholder="Emailto" required="required">
                </div>
                <div class="form-group">
              <textarea  class="form-control" name="subject" placeholder="Subject" style="height:80px"></textarea>
                </div>
                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="send" value = "Send">

                </div>
                
              </form>
            </div>

          </div>

          <div class="well well-sm"  style="width: 450px; float: right; margin-top: -10%; ">
            <div class="card-header">
              <h3 style="text-center">Verify SME Credit risk report</h3>
              
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
              <input type="input" class="form-control col-md-5" name="name" placeholder="Name of SME" required="required">
                </div>
                 <div class="form-group">
              <input type="email" class="form-control col-md-5" name="emaill" placeholder="Emailto" required="required">
                </div>
                 <div class="form-group">
              <input type="file" class="form-control col-md-5" name="attachment" placeholder="add file" required="required">
                </div>
                <br><br>
                <div class="form-group">
              <textarea  class="form-control" name="message" placeholder="Subject" style="height:80px"></textarea>
                </div>
                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="send" value = "Send">

                </div>
                
              </form>
            </div>

          </div>
</div>
<!-- accounts management div-->
<div class="abt" style="display: none;">
  <button><a href="#" data-toggle = "modal" data-target = "#modi2">Add new Financial institition</a></button>

<!-- modal -->
  <div class="modal" tabindex="-1" role="dialog" id="modi2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body">
           <form  class="form-horizontal" role="form" method="post" action="querie.php">
            <fieldset>
              <legend>Financial Institutions Registration Form</legend>
               <div class="form-group">
      <label class="control-label col-sm-2" for="nof">Name of financial institution:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nof" placeholder="name of financial institution" name="nem" required="required">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="email" required="required" name="email">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="username" required="required" name="username">
      </div>
    </div>
                 <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="password" required="required" name="password">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="cpassword">Confirm Password:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="confirm_password" placeholder=" confirm password" required="required" name="confirm">
      </div>
    </div>
          
        <div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Phone contact:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" placeholder="phone number" required="required" name="phone">
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="tof">Type of financial institution:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
         <label class="checkbox-inline">
      <input type="checkbox" value="Bank" name="fi" required="required">Bank
    </label>
     <label class="checkbox-inline">
      <input type="checkbox" value="Sacco" name="fi" required="required">Sacco
    </label>
      </div>
    </div>     
            

              <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Registration Status:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="regstatus" required="required" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="regstatus" value="no">No
    </label>
      </div>
    </div>
             
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="loc">Location:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
       <select name="location" class="form-control" required="required">
    <option value="kampala">Kampala</option>
    <option value="kikoni">kikoni</option>
    <option value="wakiso">wakiso</option>
    <option value="gulu">gulu</option>
  </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="score">Score limit:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="score" placeholder="score limit" required="required" name="scorelimit">
      </div>
    </div> 
     <div class="form-group">
             
                </div>

                 </fieldset>
              
         </div> 
        </div>
      </div>

      <div class="modal-footer">
        
          <input type="submit" name="data2" class="btn btn-primary" value="Submit" />

        <input name="" type="reset" class="btn btn-secondary" value="Clear" />
        
      </div>
      </form>

    </div>
  </div>
</div>
  
<br>
<br>
 <p><strong>Registered SMEs</strong></p>
  <table  border="1" cellpadding="1" cellspacing="1" class="table">
<tr>
  <th>ID</th>
  <th>Username</th>
  <th>Password</th>
  <th>confirm password</th>
  <th>Email</th>
  <th>PhoneNo</th>
  <th>NOM</th>
  <th>regstat</th>
  <th>TOB</th>
  <th>DOE</th>
  <th>Location</th>
  <th>Account status</th>
  
</tr>

   <?php
    $query5= "SELECT * FROM sme";
    $result= mysqli_query($con,$query5);

   
   while($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['username'] . "</td> <td>" . $row['password'] . "</td><td>" . $row['confirmpassword'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['nameofenterprise'] . "</td><td>" . $row['regstat'] . "</td><td>" . $row['typeofbusiness'] . "</td><td>" . $row['dateofestablishment'] . "</td><td>" . $row['location'] . "</td><td>" . $row['account_status'] . "</td></tr>";
   }
   echo "</table>".mysqli_error($con);

    ?>
   

  
</div>



<!-- reports div-->
<div class="con" style="display: none;">
 

</div>


</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <a href="#">Terms and conditions</a>
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Visit us on:  
     <i class="fa fa-facebook-official" aria-hidden="true" style="color: #3c8dbc;"></i>

      <i class="fa fa-linkedin-square" aria-hidden="true"></i>

      <i class="fa fa-twitter" aria-hidden="true" style="color: #3c8dbc;></i
      <a href="#"> FAQs</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  



<!--registration -->

<div class="reg" style="display: none;">
  <form action="" class="form-group">
    <fieldset>
      <legend>Business Information:</legend>
    User name: <input type="text" name="un"></br></br>

    Password: <input type="text" name="pw"></br></br>

    Confirm Password: <input type="text" name="cpw"></br></br>

    Email Address: <input type="text" name="em"></br></br>

    Phone Contact: <input type="text" name="pc"></br></br>

    Name of enterprise: <input type="text" name="noe"></br></br>

    Registration Status: <input type="radio" name="rs">Yes <input type="radio" name="rs">No<br> <br>

    Type of Business: <input type="checkbox" name="tob">Sole <input type="checkbox" name="tob">Partnership <input type="checkbox" name="tob">Corporation <input type="checkbox" name="tob">Other <br> <br>

    Date of establishment: <input type="date" name=""><br><br>


    Location:<select name="loc">
    <option value="kampala">Kampala</option>
    <option value="kikoni">kikoni</option>
    <option value="wakiso">wakiso</option>
    <option value="gulu">gulu</option>
  </select><br><br>

  <button type="button" >Submit</button> <button type="button" >Cancel</button>


       </fieldset>
  </form>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
