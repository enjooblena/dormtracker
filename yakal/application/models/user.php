
<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('username, password, type');
   $this -> db -> from('account');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
	   return False;
   }
 }
}
?>

