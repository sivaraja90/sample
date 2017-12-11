<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Triggering Bootstrap Popover on Mouseover</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right',
        trigger : 'hover'
    });
});
</script>
<style type="text/css">
	.bs-example{
    	margin: 150px 50px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <button type="button" class="btn btn-primary" data-toggle="popover" title="Popover title" data-content="Default popover">Popover</button>
   
</div>
</body>
</html>  