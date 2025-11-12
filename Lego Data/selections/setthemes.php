
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
      $order = setOrder('Setname');
      $sort = setSort();
      $conn = OpenCon();

      $query = "SELECT Sets.name as SetName, Themes.name as ThemeName
                FROM Sets
                join Themes on Themes.id = Sets.theme_id
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

      echo "<table class='customers'><tr>";
        echo "<th style='width: 50px'>
              <a href='?order=Setname&&sort=$sort'>Set Name</a>
              </th>";
        echo "<th style='width: 50px'>
              <a href='?order=ThemeName&&sort=$sort'>Theme Name</a>
              </th>";
      echo "</th>\n";

      while ($sets_ar = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td>" . $sets_ar['SetName'] . "</td>";
          echo "<td>" . $sets_ar['ThemeName'] . "</td>";
        echo "</tr>\n";
      }
      echo "</table>";
      CloseCon($conn);
    ?>
    <script type = "text/javascript" src = "../JS/main.js" ></script>
  </body>
</html>
