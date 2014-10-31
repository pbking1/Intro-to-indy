<!DOCTYPE html>
<html lang="en">
<?php
    include "db_connect.php";
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Indianapolis</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"-->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places,weather"></script>
    <script type="text/javascript" src="js/map.js"></script>

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Welcome!</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#services">Options</a>
            </li>
            <li>
                <a href="#portfolio">recommend</a>
            </li>
            <li>
                <a href="#contact">Map</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Welcome to Indianapolis!</h1>
            <h3>go and explore it!</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Indianapolis ranked 22nd in Niche’s "25 Best Cities for Millennials" list earlier this year.</h2>
                    <p class="lead">However, the city deserves better</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>What can you do in Downtown?</h2>

                    <form role="form" action="index.php#aaa" method="post">
                        <style type="text/css">  
                            input:focus {  
                            background-color: #FF6;  
                            }  
                        </style>
                        <label>time</label>
                        <select name="timestr" >
                            <option value="1"  style="background-color: black" selected="selected">Nov 1</option>
                            <option value="2" style="background-color: black">Nov 2</option>
                            <option value="3" style="background-color: black">Nov 3</option>
                            <option value="4" style="background-color: black">Nov 4</option>
                            <option value="5" style="background-color: black">Nov 5</option>
                            <option value="6" style="background-color: black">Nov 6</option>
                            <option value="7" style="background-color: black">Nov 7</option>
                            <option value="8" style="background-color: black">Nov 8</option>
                            <option value="9" style="background-color: black">Nov 9</option>
                            <option value="10" style="background-color: black">Nov 10</option>
                            <option value="11" style="background-color: black">Nov 11</option>
                            <option value="12" style="background-color: black">Nov 12</option>
                            <option value="13" style="background-color: black">Nov 13</option>
                            <option value="14" style="background-color: black">Nov 14</option>
                            <option value="15" style="background-color: black">Nov 15</option>
                            <option value="16" style="background-color: black">Nov 16</option>
                            <option value="17" style="background-color: black">Nov 17</option>
                            <option value="18" style="background-color: black">Nov 18</option>
                            <option value="19" style="background-color: black">Nov 19</option>
                            <option value="20" style="background-color: black">Nov 20</option>
                            <option value="21" style="background-color: black">Nov 21</option>
                            <option value="22" style="background-color: black">Nov 22</option>
                            <option value="23" style="background-color: black">Nov 23</option>
                            <option value="24" style="background-color: black">Nov 24</option>
                            <option value="25" style="background-color: black">Nov 25</option>
                            <option value="26" style="background-color: black">Nov 26</option>
                            <option value="27" style="background-color: black">Nov 27</option>
                            <option value="28" style="background-color: black">Nov 28</option>
                            <option value="29" style="background-color: black">Nov 29</option>
                            <option value="30" style="background-color: black">Nov 30</option>
                        </select> 
                        <label>cost</label>
                        <select name="coststr">
                            <option value="Free" style="background-color: black" selected="selected">Free</option>
                            <option value="No free" style="background-color: black">no free</option>
                        </select>
                        <label>location</label>
                        <select name="locationstr">
                            <option value="North" style="background-color: black" selected="selected">North</option>
                            <option value="South" style="background-color: black">South</option>
                            <option value="East" style="background-color: black">East</option>
                            <option value="West" style="background-color: black">West</option>
                        </select>
                        <button type="submit" class="btn btn-dark btn-lg">Search</button>
                    </form>

                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>find the event?</strong>
                                </h4>
                                <p>Get to know what is happening in indianapolis</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>find the movies?</strong>
                                </h4>
                                <p>Go to the cinema and enjoy!</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>find where to eat?</strong>
                                </h4>
                                <p>Go out and eat great food!</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>find the famous landmarks?</strong>
                                </h4>
                                <p>enjoy the famous view here!</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h2>So I recommend you ....</h2>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <a name="aaa"></a>
                    <h2>My Recommendation</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item"<table border="1" style="width:100%">

                            <a href="#">
                            <label>Event</label>
                            <table border="1" style="width:100%"> 
                                    <?php 
                                        if($_POST['timestr'] == "1"){
                                            $sql = "SELECT * FROM event1;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "2"){
                                            $sql = "SELECT * FROM event2;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "3"){
                                            $sql = "SELECT * FROM event3;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "4"){
                                            $sql = "SELECT * FROM event4;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "5"){
                                            $sql = "SELECT * FROM event5;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "6"){
                                            $sql = "SELECT * FROM event6;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "7"){
                                            $sql = "SELECT * FROM event7;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "8"){
                                            $sql = "SELECT * FROM event8;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "9"){
                                            $sql = "SELECT * FROM event9;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "10"){
                                            $sql = "SELECT * FROM event10;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "11"){
                                            $sql = "SELECT * FROM event11;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "12"){
                                            $sql = "SELECT * FROM event12;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "13"){
                                            $sql = "SELECT * FROM event13;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "14"){
                                            $sql = "SELECT * FROM event14;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "15"){
                                            $sql = "SELECT * FROM event15;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "16"){
                                            $sql = "SELECT * FROM event16;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "17"){
                                            $sql = "SELECT * FROM event17;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "18"){
                                            $sql = "SELECT * FROM event18;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "19"){
                                            $sql = "SELECT * FROM event19;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "20"){
                                            $sql = "SELECT * FROM event20;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "21"){
                                            $sql = "SELECT * FROM event21;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "22"){
                                            $sql = "SELECT * FROM event22;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "23"){
                                            $sql = "SELECT * FROM event23;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "24"){
                                            $sql = "SELECT * FROM event24;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "25"){
                                            $sql = "SELECT * FROM event25;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "26"){
                                            $sql = "SELECT * FROM event26;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "27"){
                                            $sql = "SELECT * FROM event27;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "28"){
                                            $sql = "SELECT * FROM event28;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "29"){
                                            $sql = "SELECT * FROM event29;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['timestr'] == "30"){
                                            $sql = "SELECT * FROM event30;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['time'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }
                                    ?>
                            </table>
                                    
                            </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                <label>Movie</label>
                                <table border="1" style="width:100%"> 
                                    <?php 
                                        if($_POST['locationstr'] == "North"){
                                            $sql = "SELECT * FROM movienorth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "South"){
                                            $sql = "SELECT * FROM moviesouth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "East"){
                                            $sql = "SELECT * FROM movieeast;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }
                                        elseif($_POST['locationstr'] == "West"){
                                            $sql = "SELECT * FROM moviewest;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }
                                    ?>
                                </table>
                                  
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                <label>Food</label>
                                <table border="1" style="width:100%"> 
                                <?php 
                                        if($_POST['locationstr'] == "North"){
                                            $sql = "SELECT * FROM foodnorth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "South"){
                                            $sql = "SELECT * FROM foodsouth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "East"){
                                            $sql = "SELECT * FROM foodeast;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "West"){
                                            $sql = "SELECT * FROM foodwest;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }
                                    ?>
                                </table>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                <label>Landmark</label>
                                <table border="1" style="width:100%"> 
                                <?php 
                                        if($_POST['locationstr'] == "North"){
                                            $sql = "SELECT * FROM landmarknorth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "South"){
                                            $sql = "SELECT * FROM landmarksouth;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "East"){
                                            $sql = "SELECT * FROM landmarkeast;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }elseif($_POST['locationstr'] == "West"){
                                            $sql = "SELECT * FROM landmarkwest;";
                                            $event = $conn -> query($sql);
                                            if($event -> num_rows > 0){
                                                while($row = $event -> fetch_assoc()){
                                                    echo "<tr><td>" . $row['name'] . "</td>";
                                                    echo "<td>" . $row['location'] . "</td>";
                                                    echo "<td>" . $row['phone'] . "</td></tr>";
                                                
                                                }
                                            }else{
                                                echo "</br >no result";
                                            }
                                        }
                                    ?>
                                </table>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Map -->
    <section id="contact" class="map">
        <style type="text/css">
            html { height: 100% }
            body { height: 100%; width: 100%; margin: 0; padding: 0 }
            #showmap { height: 100% }
        </style>
        <div id="location1">
            Your location will go here.
        </div>
        <div id="showmap">
            Google Map will go here!.
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Welcome to Indianapolis</strong>
                    </h4>
                    <p>produce by bin peng<br>IUPUI computer science</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 317-9091265</li>
                        <li><i>personal website:</i> pbking1.github.io</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">731849410@qq.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/peng.bin.50"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/pbking1"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; bin peng 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
