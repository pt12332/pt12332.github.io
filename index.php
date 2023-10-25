<?php
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .main {
      display: flex;
      width: 100%;
      height: 800px;
      border: 4px solid black;
      background: 
    }

    .left {
      width: 25%;
      height: 800px;
      padding-left: 10px;
      border-right: 4px solid black;
    }

    .right {
      width: 75%;
      height: 800px;
      display: grid;
      padding-top: 0px;
    }

    .head {
      display: flex;
      width: 99%;
      height: 125px;
      padding: 10px;
      text-align: center;
      border-bottom: 4px solid black;
    }
 
    .headLeft {
      width: 49%;
      border: 1px solid black;
    }

    .headRight {
      width: 49%;
      border: 1px solid black;
    }

    .labContent {
      width: 100%;
      height: 610px;
    }

    .copyRight {
      width: 100%;
      height: 50px;
      font-style: italic;
      text-align: center;
      border-top: 4px solid black;
    }

    .info {
      width: 97%;
      margin: 10px;
      height: 590px;
      display: inline-block;
      border: 2px solid black;
    }

    .leftinfo {
      width: 50%;
      height: 100%;
      float: left;
      border-right: 2px solid black;
    }

    .photograph {
      width: 100%;
      height: 50%;
      text-align: center;
      border-bottom: 2px solid black;
    }
    
    .photo {
      width: 80%;
      height: 30%;
      padding-left: 5px;
    }

    .summary {
      width: 100%;
      height: 50%;
      padding-left: 10px;
    }

    .details {
      width: 49%;
      height: 100%;
      float: right;
      text-align: center;
    }

    .Home {
      list-style: none; 
      margin: 0; 
      padding: 0; 
    }

    .Home a {
      text-decoration: none; 
    }
  </style>
</head>
<body>
  <div class="main">
    <div class="left">
      <div id="sidebar">
        <div id="assignments">
          <h2>Assignments</h2>
          <ul>
            <li class="Home"><a href="#">Home</a></li>
            <li><a href="Assignment1.php">Assignment 1</a> </li>
            <li><a href="calendar.php">Assignment 2</a></li>
            <li><a href="contact.html">Assignment 3</a></li>
            <li><a href="comment.php">Assignment 4</a></li>
          </ul>
        </div>
      </div>
      <div id="lab-practica">
        <h2>Lab Practica</h2>
        <ul>
        <a href="metabolic.php">Lab 1</a> <br/>
        <a href="lab2.html">Lab 2</a> <br/>

        </ul>
      </div>
    </div>
    <div class="right">
      <div class="head">
        <div class="headLeft">
          <h3>IT207 Summer 2023</h3>
          <p>Erhan Uyar</p>
          <p>George Mason University</p>
        </div>
        <div class="headRight">
          <h3>Phuoc Tran</h3>
          <p>ptran48@gmu.edu</p>
          <p><span>Last Modified:</span> 06/23/2023</p>
        </div>
      </div>
      <div class="labContent">
        <div class="info">
          <div class="leftinfo">
            <div class="photograph">
              <h1>Self Photograph</h1>
              <div class="photo">
                <img src="mr.jpeg" alt="Self Photo" />
              </div>
            </div>
            <div class="summary">
              <h3>Summary</h3>
              <ul>
                <li>Personal</li>
                <li>Academic</li>
              </ul>
            </div>
          </div>
          <div class="details">
            <h3>Professional & Personal Details</h3>
            <h4>My name is Tran, and this year will be my junior. My major is IT, and I will be focusing on DTP.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyRight">
    <p>&copy; 2023 Phuoc Tran</p>
  </div>
</body>
</html>
HTML;
?>
