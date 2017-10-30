<?php include("core/init.php") ?>

<?php 
	// Create DB object
	$db = new Database;

	// Run query
	$db->query("SELECT * FROM contacts ORDER BY first_name");

	// Assign results
	$contacts = $db->resultset();
 ?>

		<div class="row">
			<table class="striped">
				<thead>
					<tr>
						<th>Sl.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Company</th>
						<th>Designation</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$i = 1;
					foreach($contacts as $contact): 
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $contact->first_name ?></td>
						<td><?php echo $contact->last_name ?></td>
						<td><?php echo $contact->company ?></td>
						<td><?php echo $contact->designation ?></td>
						<td><?php echo $contact->phone ?></td>
						<td><?php echo $contact->email ?></td>
						<td>
							<div id="buttons">
							<!-- <button class="btn btn-small orange lighten-1 modal-trigger" data-target="edit-modal_<?php echo $contact->id ?>" >
								<i class="material-icons">edit</i>
							</button> -->
							<form id="delete-form" method="post">
								<button type="button" class="btn btn-small orange lighten-1 modal-trigger" data-target= "edit-modal_<?php echo $contact->id ?>" >
									<i class="material-icons">edit</i>
								</button>
								<input type="hidden" name="id" value="<?php echo $contact->id ?>">
								<button type="submit" class="btn btn-small red darken-1">
									<i class="material-icons">delete_forever</i>
								</button>
							</form>
							<div id="edit-modal_<?php echo $contact->id ?>" class="modal modal-fixed-footer"
								>
								<form id="edit-form" method="post">
									<div class="modal-content">
										<div class="row">
											<div class="col s6">
												<h4>Edit Contact</h4>
											</div>
											<div class="col s6">
												<a href="#" class="modal-action modal-close waves-effect waves-green right btn-flat">
													&#215;
												</a>
											</div>
										</div>

										<div class="divider"></div>

										<div class="container-fluid">

											<div class="row">
												<div class="input-field col s6">
													<input id="first_name" name="first_name" type="text" class="validate" required value="<?php echo $contact->first_name?>">
													<label for="first_name">First Name</label>
												</div>
												<div class="input-field col s6">
													<input id="last_name" name="last_name" type="text" class="validate" required value="<?php echo $contact->last_name?>">
													<label for="last_name">Last Name</label>
												</div>
											</div>

											<div class="row">
												<div class="input-field col s6">
													<input id="email" name="email" type="email" class="validate" required value="<?php echo $contact->email?>">
													<label for="email">Email</label>
												</div>
												<div class="input-field col s6">
													<input id="phone" name="phone" type="text" class="validate" required value="<?php echo $contact->phone?>">
													<label for="phone">Phone</label>
												</div>
											</div>

											<div class="row">
												<div class="input-field col s6">
													<input id="company" name="company" type="text" value="<?php echo $contact->company?>">
													<label for="company">Company</label>
												</div>
												<div class="input-field col s6">
													<input id="designation" name="designation" type="text" value="<?php echo $contact->designation?>">
													<label for="designation">Designation</label>
												</div>
											</div>

											<div class="row">
												<div class="input-field col s12">
													<textarea id="notes" name="notes" class="materialize-textarea">
														<?php echo $contact->notes?>
													</textarea>
													<label for="notes">Enter Optional Notes</label>
												</div>
												<input type="hidden" name="id" value="<?php echo $contact->id?>">
											</div>

										</div>
									</div>
									<div class="modal-footer">
										<input type="submit" name="contact_add_submit" value="Edit" class="btn waves-effect waves-green right">
									</div>
								</form>
							</div>
							<!-- <form id="delete-form" method="post">
								<input type="hidden" name="id" value="<?php echo $contact->id ?>">
								<button type="submit" class="btn btn-small red darken-1">
									<i class="material-icons">delete_forever</i>
								</button>
							</form> -->
							</div>
						</td>
					</tr>
				<?php 
					$i++;
					endforeach; 
				?>	
				</tbody>
			</table>
		</div>