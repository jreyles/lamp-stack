<!DOCTYPE html>
<html lang="en">
<table style="width:100%">
<tbody>
<tr>
 <td>
  <strong>User #</strong>
 </td>
 <td>
  <strong>First Name</strong>
 </td>
 <td>
  <strong>Last Name</strong>
 </td>
 <td>
  <strong>Full Name</strong>
 </td>
 <td>
  <strong>Full Name in upper case </strong>
 </td>
 <td>
  <strong>Length of full name</strong>&nbsp;(without spaces)&nbsp;
 </td>
</tr>

<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'Jack', 'last_name' => 'Frost'),
   array('first_name' => 'Jill', 'last_name' => 'Hill'),
   array('first_name' => 'Blah', 'last_name' => 'Flood'),   
   array('first_name' => 'Rusty', 'last_name' => 'Shackleford'),   
   array('first_name' => 'Madden', 'last_name' => 'Flood'),   
   array('first_name' => 'Rusty', 'last_name' => 'Shackleford'),   
   array('first_name' => 'Madden', 'last_name' => 'Flood'),   
   array('first_name' => 'Rusty', 'last_name' => 'Shackleford'),   
   array('first_name' => 'Madden', 'last_name' => 'Flood'),   
   array('first_name' => 'Rusty', 'last_name' => 'Shackleford'),   
   array('first_name' => 'KB', 'last_name' => 'Tonel') 
);

function table($names){
	$id = 1;
	foreach($names as $user) {
		echo "<tr>";

		$fullname = $user['first_name'] . " " . $user['last_name'];
		$up_fullname = ucwords(strtoupper($fullname));
		$namelength = strlen($up_fullname) - 1;		
		array_push($user,$fullname,$up_fullname,$namelength); // Add full name and string length to the array
//		if(id%5==0) {
//			echo "<td class='fifth_row'>";
//
//		}

		if($id%5==0){
			echo "<td bgcolor='black'><font color='white'>" . $id;
			foreach($user as $person_attrib){
			echo "<td bgcolor='black'><font color='white'>" . $person_attrib . " " . "</font>";

		}
		}
		else{
				echo "<td>" . $id;
				foreach($user as $person_attrib){
					echo "<td>" . $person_attrib . " " . "";
		
				}
				}
		echo "</tr><td>";

		$id++; // Move on to next user
	}
		
}

table($users);

?>
</tbody>
</table>
</html>