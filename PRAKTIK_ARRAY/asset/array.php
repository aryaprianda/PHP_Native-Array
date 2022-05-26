<!--
  MUHAMMAD ARYA PRIANDA
  18710068
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Array</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Array</h1>
        <hr />
        <h5>Index Array</h5>
        <?php 
          //Deklarasi
          $cars = array("Volvo","BMW","Toyota");
          $cars[0] = "Volvo";
          $cars[1] = "BMW";
          $cars[2] = "Toyota";
        ?>
        <p class="text-danger">
            <?php
            //Tampilkan dengan cara biasa
            echo "Saya suka ".$cars[0].", ".$cars[1]." dan ".$cars[2].".";
            ?>
            <br>
            <?php
            //Menampilkan dengan Loopping
            $cars = array("Volvo","BMW","Toyota");
            $total = count($cars);

            for($x = 0; $x < $total; $x++){
              echo $cars[$x];
            }
            ?>
        </p>
        <h5>Assosiative Array</h5>
        <?php
          //Cara 1
          $umur = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

          //Cara 2
          $umur['Peter'] = "35";
          $umur['Ben'] = "37";
          $umur['Joe'] = "43";
        ?>
        <p class="text-danger">
            <?php
              echo "Peter is ".$umur['Peter']." years old.";
            ?>
            <br>
            <?php
              //Pakai foreach
              foreach($umur as $x => $nilai_umur){
                echo "Key = ".$x.", Value = ".$nilai_umur;
              }
            ?>
        </p>
        <h5>Multidimensional Array</h5>
        <?php
          $cars = array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15),
          );
        ?>
        <p class="text-danger">
            <?php
            echo $cars[0][0].": In Stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
            echo $cars[1][0].": In Stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
            echo $cars[2][0].": In Stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
            echo $cars[3][0].": In Stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";

            //looping
            for($row = 0; $row < 4; $row++){
              echo "<p><b> Row number $row </b></p>";
              echo "<ul class='text-danger'>";
              for($col = 0; $col < 3; $col++){
                echo "<li>".$cars[$row][$col]."</li>";
              }
              echo "</ul>";
            }
            ?>
        </p>
    </div>
</body>
<script src="js/bootstrap.js"></script>

</html>