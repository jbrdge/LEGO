
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
      include '../functions.php';
      printHeader();
      #set default sort to ascending:
      #functions exist in db_connection
      $order = setOrder('id');
      $sort = setSort();

      $conn = OpenCon();
      $query ="SELECT *
               FROM Inventories
               ORDER BY $order $sort
               LIMIT 20";
      /* Try to query the database */
      if($result = $conn->query($query)){
        // Don't do anything if successful.
      }
      else
      {
        echo "Error getting sets from the database: " .
        $conn>error."<br>";
      }

      $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

      echo "<table style='width:80%;' class='customers'><tr>";
        echo "<th style='width: 50px'>
              <a href='?order=id&&sort=$sort'>ID</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=version&&sort=$sort'>Version</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=set_num&&sort=$sort'>Set Num</a>
              </th>";
      echo "</th>\n";

      while ($result_ar = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td>" . $result_ar['id'] . "</td>";
          echo "<td>" . $result_ar['version'] . "</td>";
          echo "<td>" . $result_ar['set_num'] . "</td>";
        echo "</tr>\n";
      }

      echo "</table>";
      CloseCon($conn);
    ?>
    <script type = "text/javascript" src = "../JS/main.js" ></script>
  </body>
</html>
