<html lang="en">
   <head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="mystyle.css">

    <style type="text/css">
      body {
  font-family: 'Ubuntu', sans-serif;
  
}

p{
  color:#525252;
  font-size:12px;
}

.skillbar {
  position:relative;
  display:block;
  margin-bottom:15px;
  margin-top: 10px;
  width:100%;
  background:#eee;
  height:50px;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  -webkit-transition:0.4s linear;
  -moz-transition:0.4s linear;
  -ms-transition:0.4s linear;
  -o-transition:0.4s linear;
  transition:0.4s linear;
  -webkit-transition-property:width, background-color;
  -moz-transition-property:width, background-color;
  -ms-transition-property:width, background-color;
  -o-transition-property:width, background-color;
  transition-property:width, background-color;
}

.skillbar-title {
  position:absolute;
  top:0;
  left:0;
  width:110px;
  font-weight:bold;
  font-size:13px;
  color:#ffffff;
  background:#6adcfa;
  -webkit-border-top-left-radius:3px;
  -webkit-border-bottom-left-radius:4px;
  -moz-border-radius-topleft:3px;
  -moz-border-radius-bottomleft:3px;
  border-top-left-radius:3px;
  border-bottom-left-radius:3px;
}

.skillbar-title span {
  display:block;
  background:rgba(0, 0, 0, 0.1);
  padding:0 20px;
  height:50px;
  line-height:50px;
  -webkit-border-top-left-radius:3px;
  -webkit-border-bottom-left-radius:3px;
  -moz-border-radius-topleft:3px;
  -moz-border-radius-bottomleft:3px;
  border-top-left-radius:3px;
  border-bottom-left-radius:3px;
}

.skillbar-bar {
  height:50px;
  width:0px;
  background:#6adcfa;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
}

.skill-bar-percent {
  position:absolute;
  right:10px;
  top:0;
  font-size:11px;
  height:50px;
  line-height:50px;
  color:#ffffff;
  color:rgba(0, 0, 0, 0.4);
}
    </style>
  </head>

    <body id="main">

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<!-- Compiled and minified JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script> 

       <nav class="black">

        <div class ="navbar-wrapper container">
          <a href="#" class="brand-logo center"  style="padding-left: 310px;">Skills</a>
         
          <div>

      </nav>


   <ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <img class="background" src="images/background.jpg">
      <a href="#!user"><img class="circle" src="images/rafi_avatar.png"></a>
      <a href="#!name"><span class="white-text name">Rafiuddin khan</span></a>
      <a href="#!email"><span class="white-text email">today.rafi@gmail.com</span></a>
    </div></li>
   
    <li ><a class="waves-effect" href="/index.html"><i class="material-icons">cloud</i>Home</a></li>
        <li  ><a class="waves-effect" href="/home.php"><i class="material-icons">assignment_ind</i>About</a></li>
            <li class="active"><a class="waves-effect" href="/skills.php"><i class="material-icons">assessment</i>Skills</a></li>
                <li ><a class="waves-effect" href="/projects.php"><i class="material-icons">stars</i>Projects</a></li>
                    <li ><a class="waves-effect" href="/social.php"><i class="material-icons">language</i>Social</a></li>
  
  </ul>

     <div class="row" style="padding-left: 320px; padding-right: 10px">

 <p class="flow-text">Computer Programming & Technology</p>
    <hr>
   
  <!-- <h1>Just trying to measure my skills</h1> -->

<div class="skillbar clearfix " data-percent="80%">
  <div class="skillbar-title" style="background: #C0392B;"><span>Android</span></div>
  <div class="skillbar-bar" style="background: #E74C3C;"></div>
  <div class="skill-bar-percent">80%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="60%">
  <div class="skillbar-title" style="background: #2980b9;"><span>Java</span></div>
  <div class="skillbar-bar" style="background: #3498db;"></div>
  <div class="skill-bar-percent">60%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
  <div class="skillbar-title" style="background: #F39C12;"><span>C</span></div>
  <div class="skillbar-bar" style="background: #F1C40F;"></div>
  <div class="skill-bar-percent">50%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
  <div class="skillbar-title" style="background: #16A085;"><span>JavaScript</span></div>
  <div class="skillbar-bar" style="background: #1ABC9C;"></div>
  <div class="skill-bar-percent">40%</div>
</div>

<div class="skillbar clearfix " data-percent="40%">
  <div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
  <div class="skillbar-bar" style="background: #5a68a5;"></div>
  <div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="60%">
  <div class="skillbar-title" style="background: #d35400;"><span>Wordpress</span></div>
  <div class="skillbar-bar" style="background: #e67e22;"></div>
  <div class="skill-bar-percent">60%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="30%">
  <div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
  <div class="skillbar-bar" style="background: #2ecc71;"></div>
  <div class="skill-bar-percent">30%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="60%">
  <div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
  <div class="skillbar-bar" style="background: #4288d0;"></div>
  <div class="skill-bar-percent">76%</div>
</div> <!-- End Skill Bar -->


  </div>
        
        
 
 <script>
          jQuery(document).ready(function(){
  jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
      width:jQuery(this).attr('data-percent')
    },6000);
  });
});
            </script>

<script>
$('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
</script>




    </body>

</html>