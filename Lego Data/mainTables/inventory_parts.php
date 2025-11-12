</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LEGO Database</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/flex.css">
  </head>
  <body>

    <div class='main_wrap'>
    <?php
      #this file will include most functions
      include '../functions.php';
      printHeader();
      #set default sort to ascending:
      #functions exist in db_connection
      $order = setOrder('inventory_id');
      $sort = setSort();

      $conn = OpenCon();
      $query = "SELECT *
                FROM Inventory_Parts
                ORDER BY $order $sort
                LIMIT 20";
      /* Try to query the database */
      if($result = $conn->query($query)){
        // Don't do anything if successful.
      }
      else
      {
        echo "Error getting inventory parts from the database: " .
        $conn>error."<br>";
      }

      $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

      echo "<table class='customers'><tr>";
        echo "<th style='width: 50px'>
              <a href='?order=inventory_id&&sort=$sort'>Inventory ID</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=part_num&&sort=$sort'>Part Number</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=color_id&&sort=$sort'>Color ID</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=color_id&&sort=$sort'>Quantity</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=is_spare&&sort=$sort'>Is Spare Part</a>
              </th>";
      echo "</th>\n";

      while ($result_ar = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td>" . $result_ar['inventory_id'] . "</td>";
          echo "<td>" . $result_ar['part_num'] . "</td>";
          echo "<td>" . $result_ar['color_id'] . "</td>";
          echo "<td>" . $result_ar['quantity'] . "</td>";
          echo "<td>" . $result_ar['is_spare'] . "</td>";
        echo "</tr>\n";
      }
      echo "</table>";
      CloseCon($conn);
    ?>
    <script type = "text/javascript" src = "../JS/main.js" ></script>
  </body>
</html>
