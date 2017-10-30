$(document).ready(function(){
	// Show loader image 
	$("#loader-image").show();

	// Show Contacts on page load
	showContacts();


	// Add Contacts
	$(document).on('submit', '#add-form', function(){
		// Show loader image 
		$("#loader-image").show();

		// Post data from form
		$.post('add_contact.php', $(this).serialize())
			.done(function(data){
				console.log(data);
				$('.modal').modal('close');
				showContacts();
			});
			$(':input','#add-form')
  				.not(':button, :submit, :reset, :hidden')
  				.val('');
			return false;
	});

	// Edit Contacts
	$(document).on('submit', '#edit-form', function(){
		// Show loader image 
		$("#loader-image").show();

		// Post data from form
		$.post('edit_contact.php', $(this).serialize())
			.done(function(data){
				console.log(data);
				$('.modal').modal('close');
				showContacts();
			});
			return false;
	});

	// Delete Contacts
	$(document).on('submit', '#delete-form', function(){
		// Show loader image 
		$("#loader-image").show();

		// Post data from form
		$.post('delete_contact.php', $(this).serialize())
			.done(function(data){
				showContacts();
			});
			return false;
	});
});

function showContacts(){
	setTimeout("$('#content').load('contacts.php', function(){$('#loader-image').hide();})", 1000);
	setTimeout(function(){
		$(".modal").modal();
	}, 1100);
}