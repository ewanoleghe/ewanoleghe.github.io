<?PHP
// $reqlevel sets the accesslevel a user needs to hace
// use 0 (zero) if you want to make it an admin only page.
// and 1 (one)  is default for an new user. 
// this makes the page an member only page.
//include("conn/conn.php");
session_start(); //Initialise the session

?>
<?PHP
if($_SESSION['GuestName']== "")
{
  header("Location: index1.php");
  exit();
}




?>