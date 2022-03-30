<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="ajax.js"></script>
</head>
<body>

<form method="post" id="myform">
    <input type="hidden" value="" name="id" id="dataid">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" type="text" name="name">
    </div>

    <button id="formbtn" class="btn btn-success btn-block" type="button" onclick="test();">Save Data</button>
</form>
</div>
<div class="col-md-12">
<h2 class="text-center">My Data</h2> 
 <div id="table"></div>
</div>

</body>
</html>

