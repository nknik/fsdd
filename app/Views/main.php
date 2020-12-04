<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 1px;">
        <h2>break statement</h2>
        <?php
        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            break;
          }
          echo "The number is: $x <br>";
        }
        ?>
    </div>
    <div style="border: 1px;">
        <h2>continue statement</h2>
        <?php
        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            continue;
          }
          echo "The number is: $x <br>";
        }
        ?>
    </div>
    <div style="border: 1px;">
        <h2>dowhile statement</h2>
        <?php
        $x = 1;

        do {
          echo "The number is: $x <br>";
          $x++;
        } while ($x <= 5);
        ?>
    </div>
    <div style="border: 1px;">
        <h2>for statement</h2>
        <?php
        for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
        }
        ?>
    </div>
    <div style="border: 1px;">
        <h2>function statement</h2>
        <?php
        function familyName($fname, $year) {
          echo "$fname Refsnes. Born in $year <br>";
        }
        
        familyName("Hege", "1975");
        familyName("Stale", "1978");
        familyName("Kai Jim", "1983");
        ?>
    </div>
    <div style="border: 1px;">
        <h2>swtich statement</h2>
        <?php
        $x = 1;
        
        while($x <= 5) {
          echo "The number is: $x <br>";
          $x++;
        }
        ?>
    </div>
</body>
</html>