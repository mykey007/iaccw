<?
require_once "connection/DB.php";
   

  # expects the csv file to be in the same dir as this script
$fcontents = file ('./MEMBERS DIRECTORY.txt'); 


  for($i=0; $i<sizeof($fcontents); $i++) { 
   

    //FIELDS COMMASEPARATED
      
      
      $arr = explode(";", $fcontents[$i]); 
      #if your data is comma separated
      # instead of tab separated, 
      # change the '\t' above to ',' 
   
      $sql = "insert into iaccw_members values ('". 
                  implode("','", $arr) ."')"; 
      mysql_query($sql);
      echo $sql ."<br>\n";
      if(mysql_error()) {
         echo mysql_error() ."<br>\n";
      } 
}
?>
