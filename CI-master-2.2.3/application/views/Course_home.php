<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a student to all bootcamp courses</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class='container'>
      <h3>Add a new course</h3>
      <form action='' method='post'>
        <label>Name:<input type='text' name='name' />
        </label>
        <label> Description:
          <textarea name='description'></textarea></label>
          <br />
          <input type='submit' value='Add' />
      </form>
<h3>Courses</h3>
  <table>
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Description</th>
        <th>Date Added</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
      //var_dump($courses);
      foreach ($courses as $course_data) 
      {
        $date_added = date('F d, Y', strtotime($course_data['created_at']));
        
        echo "<tr>
            <td>". $course_data['name'] . "</td>
            <td>". $course_data['description'] . "</td>
            <td>". $date_added . "</td>
            <td><a href= 'courses/destroy/". $course_data['id']. "'>Remove</a></td>
        </tr>";
      }
?>
    </tbody>
  </table>



    </div>
