<!DOCTYPE html>
<html>
    <head>
        <title>Baby Lady</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 90%;
                margin: 0 auto;
            }
            .container img{
                width: 50%;

            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: pink;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: white;
            }

            .image img{
                width: 100%;
            }
            .detail{
                width: 100%;
                float: right;
                text-align: center;
            }
            .title{
                background-color: white;
                font-size: 25px;
                line-height: 30px;
                padding-left: 5px;
                font-weight: bold;
                color: red;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: green;
                font-size: 18px;
                padding-left: 10px;
                padding-top: 10px;
                font-weight: normal;
            }

            .list{
                width: 100%;
                padding-top: 10px;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 100%;
                height : 50%;
            }
           

            .nav{
                width: 100%;
                height: 50px;
                background-color: pink;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:purple;
                font-size: 30px;
                text-decoration: none;
                line-height: 50px;
                padding: 0 15px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: pink;
            }
            .nav li:hover{
                background-color:pink;
            }
        </style>
    </head>
    <body>
        <?php
require_once './functions.php';
//load items
$query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage FROM Item ";
$result = queryMysql($query);

?>

        <div class="container">
            <center><img src="images/1.jpg"></center>
            <div class="header">
                
                <div class="nav">
                    <ul class="w3-bar w3-black">
                        <center><li><a href="./index.php">Home</a></li></center>
                        <li><a href="#Princess" class="w3-bar-item w3-hover-green">Princess</a></li>
                        <li><a href="#BlackBaby" class="w3-bar-item w3-hover-green">BlackBaby</a></li>
                        <li><a href="#Mermaid" class="w3-bar-item w3-hover-green">Mermaid</a></li>
                        <center><li><a href="./header.php" class="w3-bar-item w3-hover-green" style="margin-left: 50%">Admin</a></li></center>

                    </ul>


                </div>
            </div>
            <div class="main">
                <div class="hot">

                    <div class="detail">
                        <div class="title">
                            <i>ATN company</i>
                        </div>
                        <div class="des">
                             Welcome to Baby Lady
                        </div>
                    </div>
                </div>
                <div class="seperator">
                        
                 </div>
                    <div class="list w3-row">
                    <div class="" id="Princess"><h2>Princess</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.cid=Catalogue.cid AND cName LIKE '%Princess%'  ORDER BY cname";
     $result = queryMysql($query);
     $result->setFetchMode(PDO::FETCH_ASSOC);
     $result->execute();
     $resultSet = $result->fetchAll();
     
     foreach ($resultSet as $row) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-pink w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/". $iImage . "'  width: '500px', height: '500px'></div><div class='name'><h3>$iName</h3></div><h3>$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-green w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-pink w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price: $iPrice$</h3>
              <p>Description: $iDescription.</p>
              <h4>Size: $iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-pink w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>        
                    <div class="list w3-row">
                    <div class=""id="BlackBaby"><h2>BlackBaby</h2>
                    <?php
     require_once './functions.php';
    $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.cid=Catalogue.cid AND cName LIKE '%BlackBaby%'  ORDER BY cname";
     $result = queryMysql($query);
     $result->setFetchMode(PDO::FETCH_ASSOC);
     $result->execute();
     $resultSet = $result->fetchAll();
     
     foreach ($resultSet as $row) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-pink w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3>$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-pink w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-orange w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price: $iPrice$</h3>
              <p>Description: $iDescription.</p>
              <h4>Size: $iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-pink w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>       
                    <div class="list w3-row">
                    <div class=""id="Mermaid"><h2>Mermaid</h2>
                    <?php
     require_once './functions.php';
    $query = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage,cname FROM Item,Catalogue WHERE Item.cid=Catalogue.cid AND cName LIKE '%Mermaid%'  ORDER BY cname";
     $result = queryMysql($query);
     $result->setFetchMode(PDO::FETCH_ASSOC);
     $result->execute();
     $resultSet = $result->fetchAll();
     
     foreach ($resultSet as $row) {
        $iId = $row['iid'];
        $iName = $row['iname'];
        $iDescription = $row['idescription'];
        $iPrice = $row['iprice'];
        $iStatus = $row['istatus'];
        $iSize = $row['isize'];
        $iImage = $row['iimage'];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-pink w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3>$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-purple w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-pink w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price: $iPrice$</h3>
              <p>Descripton: $iDescription.</p>
              <h4>Size: $iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-pink w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
         </div>

                        
            </div>
                <div id="footer">
            <center><p><b>Contact us with this phone number : 0987777777 </b><center>
                <center><p><b>Address : Tran Duy Hung Street </b><center>
            </div>
            </div>

        </div>
    </body>
</html>
