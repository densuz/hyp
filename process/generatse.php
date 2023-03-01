<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert</title>
<link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />

<script src="../assets/jq/jquery.js" type="text/javascript"></script>
<script src="../assets/js/js-script.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="../usersdata.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="addusers.php">

<table class='table table-bordered'>

<tr>
<td>Enter how many records you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" required />
</td>
</tr>

<tr>
<td>
    <button type="submit" name="btn-gen-form" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

<a href="../views/index.php" class="btn btn-large btn-success"> 
    <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>

</td>
</tr>

</table>

</form>

</div>
</body>
</html>