<!DOCTYPE html>
<html>

<head>
  <title> maneger profile</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_managerprofile.css">
</head>

<body>
  <div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo new 2.png" alt="logo" width="100">
    </div>
    <div>
      <a class="active" href="<?php echo URLROOT ?>/PageController/home">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
      <a href="<?php echo URLROOT ?>/PageController/feedback">Feedback </a>
    </div>
</div>

<div style="background-color: blueviolet; width: 1503px;height: 900px;">
   <div style="background-color:gray ;width: 203px;height: 900px;float :left">
   
    
  <center>
  <h2>manager Profile</h2>
</center>
<form method = "post" action = ""> 
<center>
<table>
  <tr>
<td width="60px"><img src="<?php echo URLROOT ?>/public/images/user.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;"href="# info"> user info</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/edituser.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#edit profile"> edit profile</a></td>
  <tr>


<tr>
<td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#setting"> setting</a></td>
  <tr>

  </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <tr>
  <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="35" ></td>
  <td><a  style=" color: #151515;text-decoration: none;font-size: 17px;"href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
  </tr>
</table>
</center>
   </div>
   <div style="background-image:url('../public/images/nback2.webp');background-size:cover; background-repeat: no-repeat; width: 1300px;height: 900px; float:right; ">

   <form action="" method="post"></form><br><br><br>

   <center>
      <labael  style=" font-size: medium; font-weight: bold;font-size: 20px"><h2>betails for client</h2></label>
      <labale>photographer name</labale>
       <select style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;" >
         <option value="RathnaKumara"> RathnaKumara</option>
         <option value="ediri"> Edirimuni</option>
         <option value="wigita"> Wigitapriya</option>
         <option value="kumarasiri">kumarasiri</option>
       </select>
       <br>

       <labale style=" font-size: medium; font-weight: bold;font-size: 20px">editor information</labale>
       <select style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;" >
         <option value="nimal"> nimal</option>
         <option value="kamal"> kamal</option>
         <option value="sunil"> sunil</option>
         <option value="amara">amarasiri</option>
       </select>
       <br>

       <input type="checkbox" id="masage" name="msg" value="msg">
  <labael style=" font-size: medium;color:black;font-weight: bold;font-size: 20px" for="msg">we accepted your request and already reserved aphotographer and aeditor </label><br>

  <input type="submit" value="submit" style="width: 35%; padding: 12px 20px; display: inline-block; 
    border: 1px solid #ccc;border-radius: 10px; box-sizing: border-box; margin: 8px 0;background-color:#8d87e8">

         <br><br><br><br><hr>
     
   <h2 style="font-size: 34px color: black"> manager Request for photographer</h2>

  <labal  style=" font-size: medium; color: black;font-weight: bold;font-size: 20px">client name</labal>
   <input type ="text" name="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <labal  style=" font-size: medium;color: black; font-weight: bold; font-size: 20px">event name </labal>
   <input type ="text" name="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <labal  style=" font-size: medium; color: black; font-weight: bold;font-size: 20px">location </labal>
   <input type ="text" name="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <input type="submit" value="submit" style="width: 35%; padding: 12px 20px; display: inline-block; 
    border: 1px solid #ccc;border-radius: 10px; box-sizing: border-box; margin: 8px 0;background-color:#8d87e8">

 </form>

    <center>
  

       </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <table>
            <tr>
              <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
            </tr>
          </table>
        </center>
    </div>
    <div style="background-color:  aliceblue; width: 1000px;height: 780px; float:right; ">


      </div">

    </div>
</body>

</html>