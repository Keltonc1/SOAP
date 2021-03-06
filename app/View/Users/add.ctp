<div id="myModal" class="modal" style="border:0px;">
	<div class="modal-header" style="text-align: center; border-radius: 3px 3px 0 0;
					 border-bottom: 0px">
		<h2 style="color:#f5f3dc;">Create Your Account</h2>
	</div>
	<div class="modal-body" style="border-radius: 0 0 3px 3px;">	
		<?php echo $this->Session->flash('flash', array('element' => 'errorMessage')); ?>	<!-- Placeholder for error messages -->
		<?php 
			echo $this->Form->create('User', array('id' => 'usersform', 'type' => 'post',
			'url' => array('controller' => 'users', 'action' => 'add'))); 
	   	?>

		<div class="usersform row-fluid">
			<div class="span3">
				<div class="input text required">
					<label style="color:#013435;" for="UserUsername">Username</label>
					<input name="data[User][username]" maxlength="50" type="text" id="UserUsername"/>
				</div>
				<div class="input password required">
					<label style="color:#013435;" for="UserPassword">Password</label>
					<input name="data[User][password]" type="password" id="UserPassword"/>
				</div>
				<?php 
					echo $this->Form->button('Register', array('type' => 'submit', 'class' => 'btn btn-primary'));
				?>
			</div>
		</div>
	   </form>
	</div>
	<div class="modal-footer">
		<!-- <button type="button" class="btn" onClick="history.go(-1);">Cancel</button> -->
		<button type="button" class="btn" onclick="location.href='/'" >Cancel</button>

	</div>

</div>
