<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<title>JavaScript</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		
	</head>
	
	<body>
		
		<div class="container">
			
			<div class="row">
				
			  <div class="jumbotron col-md-12">
				
				<h1 class="display-8">Post a Comment</h1>
				
				<hr class="my-4">
				
				<form method="post" id="postForm" class="form-horizontal col-md-8">
					<div class="col-md-12">
					<div class="col-md-12 form-group">
						<label for="name" class="col-md-2 control-label" style="text-align: left;">Name</label>
						<div class="input-group col-md-10">
						  <input type="text" name="name" id="name" class="form-control" />
						</div>						
						<div id="name_error" class="offset-1 col-md-6 d-none throw_error alert alert-danger"></div>												
					</div>
					<div class="col-md-12 form-group">
						<label for="comment" class="col-md-2 control-label">Comment</label>
						<div class="input-group col-md-10">
						  <input type="text" name="comment" id="comment" class="form-control" />
						</div>
						<div id="comment_error" class="offset-1 col-md-6 d-none throw_error alert alert-danger"></div>
					</div>	
					<input type="submit" value="Post" class="offset-1 col-md-4 btn btn-block btn-info"/>
					</div>
				</form>
				
			  </div>
				
			</div>
			
			<div class="row">
				<div id="success" class="alert alert-info d-none col-md-8"></div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
				<hr class="my-4">
				<h1 class="display-6">Comments Submitted</h1>
				<hr class="my-4">
				</div>
				<div class="container">
					<ul id="output" class="list-group" ></ul>
				</div>
			</div>
			
		</div>
				
	</body>
	
</html>

<!-- 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->	
<script src="/js/jquery.min.js"></script>
<script src="/js/script.js"></script>