<?php
#open connection
function OpenCon()
 {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "root";
   $db = "LEGO_Database";
   $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or
           die("Connect failed: %s\n". $conn -> error);
   return $conn;
 }
#close connection
 function CloseCon($conn)
 {
   $conn -> close();
 }


#set default sort to ascending:
#-----------------------------#
function setOrder($initCol)
{
  if(isset($_GET['order'])){
    $order = $_GET['order'];
  }else{
    $order = $initCol;
  }
  return($order);
}

function setSort()
{
  if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
  }else{
    $sort = 'ASC';
  }
  return($sort);
}
#-----------------------------#

function mainMenu(){
  //todo: set up an array to loop through this large list
  echo "<div>";
    echo "<ul class='flex-container wrap'>";
      echo "<li class='flex-item'>";
      echo "<a href='../index.php'>Home</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/colors.php'>Colors</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/themes.php'>Themes</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/inventories.php'>Inventories</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/inventory_parts.php'>Parts Inventory</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/parts.php'>Parts</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/part_categories.php'>Part Categories</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/sets.php'>Sets</a>";
      echo "</li>";
      echo "<li class='flex-item'>";
      echo "<a href='/mainTables/inventory_sets.php'>Set Inventory</a>";
      echo "</li>";

    echo "</ul>";
  echo "</div>";
  echo "<br />";
}

function relationalTablesMenu(){
  echo "<div>";
    echo "<ul class='flex-container wrap'>";
    echo "<li class='comboflex-item'>";
    echo "<a href='/selections/setthemes.php'>Sets & Themes</a>";
    echo "</li>";
    echo "<li class='comboflex-item'>";
    echo "<a href='/selections/setparts.php'>Sets & Parts</a>";
    echo "</li>";
    echo "</ul>";
  echo "</div>";
  echo "<br />";
}


function printHeader()
{
  echo "<button type='button' class='collapsible'>
         Main Tables Menu</button>";
  echo "<div class='content'>";
    echo "<p>";
      mainMenu();
    echo "</p>";
  echo "</div>";
  echo "<button type='button' class='collapsible'>
        Relational Tables Menu</button>";
  echo "<div class='content'>";
    echo "<p>";
      relationalTablesMenu();
    echo "</p>";
  echo "</div>";
}
?>
<script type = "text/javascript" src = "../JS/main.js" ></script>
