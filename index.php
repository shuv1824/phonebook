<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phonebook</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s6">
				<h1 class="heading">Phonebook</h1>
			</div>

			<div class="fixed-action-btn horizontal">
			    <a href="#modal-form" class="btn-floating btn-large teal modal-trigger">
			      <i class="large material-icons">add</i>
			    </a>
			</div>
		</div>

		<!-- Modal Structure -->
	  	<div id="modal-form" class="modal modal-fixed-footer">
	  		<form id="add-form" method="post">
	    	<div class="modal-content">
	    		<div class="row">
	    			<div class="col s6">
	    				<h4>Add New Contact</h4>
	    			</div>
	    			<div class="col s6">
	    				<a href="#!" class="modal-action modal-close waves-effect waves-green right btn-flat">
	    					&#215;
	    				</a>
	    			</div>
	    		</div>
	      		
	      		<div class="divider"></div>

	      		<div class="container-fluid">
	      			
	      				<div class="row">
					        <div class="input-field col s6">
					          <input id="first_name" name="first_name" type="text" class="validate" required>
					          <label for="first_name">First Name</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="last_name" name="last_name" type="text" class="validate" required>
					          <label for="last_name">Last Name</label>
					        </div>
					    </div>

					    <div class="row">
					        <div class="input-field col s6">
					          <input id="email" name="email" type="email" class="validate" required>
					          <label for="email">Email</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="phone" name="phone" type="text" class="validate" required>
					          <label for="phone">Phone</label>
					        </div>
					    </div>

					    <div class="row">
					        <div class="input-field col s6">
					          <input id="company" name="company" type="text">
					          <label for="company">Company</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="designation" name="designation" type="text">
					          <label for="designation">Designation</label>
					        </div>
					    </div>

					    <div class="row">
					    	<div class="input-field col s12">
					    		<textarea id="notes" name="notes" class="materialize-textarea"></textarea>
					    		<label for="notes">Enter Optional Notes</label>
					    	</div>
					    </div>
	      			
	      		</div>
	    	</div>
	    	<div class="modal-footer">
	      		<input type="submit" name="contact_add_submit" value="Add" class="btn waves-effect waves-green right">
	    	</div>
	    	</form>
	  	</div>
		<div class="divider"></div><br>
		
		<div id="loader-image">
			<img src="img/loading.gif" alt="">
		</div>
		<div id="content"></div>

		
	</div>

	<div>
		<script src="js/jquery.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/script.js"></script>

		<script>
			$(document).ready(function(){
    			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    			$('.modal').modal();
    			setTimeout(function(){
					$(".modal").modal();
				}, 1100);
  			});
		</script>
	</div>
</body>
</html>