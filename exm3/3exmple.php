<html>
<head>
<title>Exm. 3</title>



<body>
  <font color = "black">Exm.3 PHP class Truck</font>

<?php
      class Truck
      {
          protected function setText($text)
          {
            // set text here
            $text = 'Hello Customer!';
            
          }
      }



      class TruckCopy extends Truck
      {
          private function setBodyColor($color)
          {
            // set color here
            $color = '#111111';  
          }


          public function getTruckHtml($color, $text)
          {
          // create the truck with html here

           echo "<div id='anime'>
                  <div class='truckbody'>
                  <font color='<?php $color ?php>'>
                    <h1>".$text."</h1>
                  </font
                  </div> 

                  <div class='truckgreen1'></div>

                  <div class='radius'></div>

                  <div class='loading' style='margin-top: 1px; margin-left: 20px;'>
                    <div class='line'></div>
                  </div> 
                  <div class='loading' style='margin-top: 1px; margin-left: 190px;'>
                    <div class='line'></div>
                  </div> 
                  <div class='truckgreen2'></div>
              
                </div>";

            
          }

      }



      $truck_a = (new TruckCopy())->getTruckHtml('#CCE70B','Hello, Ecommerce.');

      echo "<br><br><br><br><br><br><br><br>";

      $truck_b = (new TruckCopy())->getTruckHtml('#E5560E','Hi, Magento.');

      echo $truck_a;
      echo "<br>";
      echo $truck_b;


?> 
  


 
</body>

<style type="text/css"> 

/** place your css here **/
h1{
      font-size: 34px;
     /* color: #838383;*/
    }
      .truckbody {
        width: 180px;
        height: 120px;
        border: 0px solid black; 
        background-color: #eeeeee;
        text-align: left;
    }

    .truckgreen1 {
        width: 70px;
        height: 100px;
        border: 0px solid black; 
        background-color: #cce70b;
        text-align: left;
        margin-left: 184px;
        margin-top: -90px;
      }
    .radius {
      width: 60px; 
      height: 100px; 
      background: #bbdaea; 
      border-radius: 0px 49px 49px 0px;
      margin-left: 235px;
        margin-top: -100px;
    }
    .truckgreen2 {
        width: 280px;
        height: 20px;
        border: 0px solid black; 
        background-color: #cce70b;
        text-align: left;
        margin-top: -10px;
    }

    .line{
      width: 5px; 
      height: 39px; 
      background: #eeeeee;
      margin-left: 17px;
    }

    .loading {
      position:absolute;
      width: 40px; 
      height: 40px; 
        border-style: solid 0px;
        background: #b3b3b3; 

        -moz-border-radius: 70px; 

        -webkit-border-radius: 70px; 

        border-radius: 70px;
        -webkit-animation: rotation 2s infinite linear;
        -webkit-transition-duration: 1s;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
        }
    }

    #container{
      outline: 0px solid #000;
      width: 800px;
      height: 400px;
      position: relative;
    }
    #anime{
      width: 300px;
      height: 200px;
      outline: 0px solid black;
      position: absolute;
      left:0;
    }

</style>

</body>


</head>
</html>