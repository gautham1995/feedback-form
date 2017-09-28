<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback Form</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<form method="post" action="process.php">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" style="text-align: center;">
<span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;Your Feedback</h3>
</div>
<div class="modal-body">
<div class="row">
  <div class="col-sm-6 ">
<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
  </div>
  <div class="col-sm-6 ">
  	<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
</div><br>
<div class="row">
  <div class="col-sm-5">
<input type="text" class="form-control" id="city" name="city" placeholder="City" required>
</div>
<div class="col-sm-7">
  <center>
  <b>Rating:&nbsp;&nbsp;&nbsp;&nbsp;</b>
  <label class="radio-inline">
      <input type="radio" name="optradio" value="Excellent" required>Excellent
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Good">Good
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Average">Average
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Fair">Fair
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Poor">Poor
    </label></center>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-12">
<div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" class="form-control" id="title" name="title" required>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-12">
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-success" value="Submit">
</div>
</div>
</form>


<h3 style="text-align: center;"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Responses</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "gautham";
$dbname = "response";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM feedback ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<div class='panel-group'>";
    while($row = mysqli_fetch_assoc($result)) {
if($row["rating"]=="Excellent"){
    echo '<div class="panel panel-primary">';
}
if($row["rating"]=="Good"){
    echo '<div class="panel panel-success">';
}
if($row["rating"]=="Average"){
    echo '<div class="panel panel-info">';
}
if($row["rating"]=="Fair"){
    echo '<div class="panel panel-warning">';
}
if($row["rating"]=="Poor"){
    echo '<div class="panel panel-danger">';
}

echo '
      <div class="panel-heading">
      <span class="glyphicon glyphicon-pushpin"></span>&nbsp;
      Rating: <b>'.$row["rating"].'</b><br><span style="font-size: 18px;">'
      .$row["title"].'</span><br>'
      .$row["name"].', '.$row["city"].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row["date"].' '.$row["month"].', '.$row["year"].'


      </div>
      <div class="panel-body">'.$row["comment"].'
      </div>
    </div>
';


    }
echo "</div>";

} else {
	echo '<div class="alert alert-info">
    <strong>No Feedbacks</strong>
    </div>';
}

mysqli_close($conn);
?>






</div>
</body>
</html>
