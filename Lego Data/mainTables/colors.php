
</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LEGO Database</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/flex.css">
  </head>
  <body>

    <?php
      #this file will include most functions
      include '../functions.php';
      printHeader();
      #set default sort to ascending:
      #functions exist in db_connection
      $order = setOrder('id');
      $sort = setSort();

      $conn = OpenCon();
      $query ="SELECT *
               FROM Colors
               ORDER BY $order $sort";
      /* Try to query the database */
      if($result = $conn->query($query)){
        // Don't do anything if successful.
      }
      else
      {
        echo "Error getting colors from the database: " .
        $conn>error."<br>";
      }

      $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

      echo "<table class='customers'><tr>";
        echo "<th style='width: 50px'>
              <a href='?order=id&&sort=$sort'>ID</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=name&&sort=$sort'>Name</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=rgb&&sort=$sort'>Color</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=is_trans&&sort=$sort'>Is Translucent</a>
              </th>";
      echo "</th>\n";

      while ($result_ar = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td style='background-color:" . '#' .$result_ar['rgb'] . "'>" .
                $result_ar['id'] . "</td>";
          echo "<td>" . $result_ar['name'] . "</td>";
          echo "<td>" . $result_ar['rgb'] . "</td>";
          echo "<td>" . $result_ar['is_trans'] . "</td>";
        echo "</tr>\n";
      }
      echo "</table>";
      CloseCon($conn);
    ?>
    <script type = "text/javascript" src = "../JS/main.js" ></script>
  </body>
</html>
