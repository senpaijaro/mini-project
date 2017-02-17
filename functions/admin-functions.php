<?php
	
		include 'config.php';
		

		function add_user_account(){
		global $conn;

		if(isset($_POST['btn-add'])){
		
		$office_region 	= $conn->real_escape_string($_POST['office_region']);
		$division 		= $conn->real_escape_string($_POST['division']);
		$unit_section 	= $conn->real_escape_string($_POST['unit_section']);
		$username 		= $conn->real_escape_string($_POST['username']);
		$password 		= $conn->real_escape_string($_POST['pass']);
		$hash 	  		= password_hash($password, PASSWORD_DEFAULT);

		$query    = $conn->query("INSERT INTO user_accounts_tbl (office_region,division,unit_section,username,password,status) VALUES ('$office_region','$division','$unit_section','$username','$hash','Activated')");
		if($query){
			?>
				<script type="text/javascript">
				swal({   
					title: "Successfully!",  
					 text: "Successfully added",
					 timer: 4000, 
					 type: "success",  
					 showConfirmButton: false 
					});
				</script>
			<?php
		}else{
			?>
		<script type="text/javascript">
			swal({   
				title: "Error",  
				 text: "Error added user",
				 timer: 4000, 
				 type: "danger",  
				 showConfirmButton: false 
				});
		</script>
				<?php
		}
	}
}
 
		function add_administrator(){
		global $conn;
		if(isset($_POST['btn-add'])){
		$fname  	= $conn->real_escape_string($_POST['fname']);
		$mname  	= $conn->real_escape_string($_POST['mname']);
		$lname  	= $conn->real_escape_string($_POST['lname']);
		$cnumber  	= $conn->real_escape_string($_POST['cnumber']);
		$email  	= $conn->real_escape_string($_POST['email']);
		$pass  		= $conn->real_escape_string($_POST['pass']);
		$hash       = password_hash($pass, PASSWORD_DEFAULT);

		$query      = $conn->query("INSERT INTO admin_accounts_tbl (firstname,middlename,lastname,contact,email,password,
			status,role) VALUES ('$fname','$mname','$lname','$cnumber','$email','$hash','Activated','1')"); 
		if($query){
			?>
		<script type="text/javascript">
		swal({   
			title: "Success",  
			 text: "Successfully added",
			 timer: 4000, 
			 type: "success",  
			 showConfirmButton: false 
			});
	</script>
			<?php
		}else{
			echo "<div class='alert alert-sucess'><strong>Successfully</strong> added administrator</div>";
		}
	}
}
		function add_division(){
		global $conn;
		if(isset($_POST['btn-add'])){

		$division 	  = $conn->real_escape_string($_POST['division']);
		$checkrows    = $conn->query("SELECT * FROM division_tbl WHERE division=division");
		$check        = $checkrows->num_rows;
		if($check > 0){
			?>
				<script type="text/javascript">
				swal({   
					title: "Error!",  
					 text: "Division is already exist",
					 timer: 4000, 
					 type: "error",  
					 showConfirmButton: false 
					});
				</script>
			<?php
		}elseif($query = $conn->query("INSERT INTO division_tbl (division,status) VALUES ('$division','Active')")){
			?>
				<script type="text/javascript">
				swal({   
					title: "Successfully!",  
					 text: "Successfully added division",
					 timer: 4000, 
					 type: "success",  
					 showConfirmButton: false 
					});
				</script>
			<?php
		}else{
			?>
		<script type="text/javascript">
			swal({   
				title: "Error",  
				 text: "Error added division",
				 timer: 4000, 
				 type: "danger",  
				 showConfirmButton: false 
				});
		</script>
				<?php
		}
	}
}
			
		function show_user_account(){
		global $conn;
		$query = $conn->query("SELECT * FROM user_accounts_tbl WHERE id = id");
		while($row = $query->fetch_object()){
		if($row->status == 'Activated'){
					$status = '<label class="label label-success"> Active </label>';
		}elseif($row->status == 'Deactivated'){
					$status = '<label class="label label-danger"> Deactivated </label>';
		}
		echo '<tr>
					<td>'.$row->office_region.'</td>
					<td>'.$row->division.'</td>
					<td>'.$row->unit_section.'</td>
					<td>'.$row->username.'</td>
					<td>'.$status.'</td>
					<td>
						<form method="post" action="">
						<input type="hidden" name="id"  value="'.$row->id.'">
	              		<button type="submit" class="btn btn-primary btn-xl" name="btn-view"><i class="fa fa-eye"></i> view </div>
	              		</form>
	              	</td>
			  </tr>';
	}if(isset($_POST['btn-view'])){
		$id = $conn->real_escape_string($_POST['id']);
		$_SESSION['ids'] = $id;
		echo "<script>window.location.href= 'show-user-accounts.php'</script>";
	}		
}
		function show_division(){
		global $conn;

		$query = $conn->query("SELECT * FROM division_tbl WHERE status='Active'");
		while($row = $query->fetch_object()){
		echo '<tr>
					<td>'.$row->division.'</td>
					<td>
						<form method="post">
							<input type="hidden" name="id" value="'.$row->id.'">
	             			<button type="submit" class="btn btn-primary btn-xl" name="btn-view"><i class="fa fa-eye"></i> view </div>
						<form>
					</td>
				</tr>';	
		}		
}


		function show_administrator(){
		global $conn;
		$query = $conn->query("SELECT * FROM admin_accounts_tbl WHERE status='Activated'");
		while($row = $query->fetch_object()){
		if($row->role == 0){
					$role = '<label class="label label-danger"> Admin </label>';
		}elseif($row->role == 1){
					$role = '<label class="label label-success"> Admin </label>';
		}
		echo 
				'
				<tr>
	              <td>'.$row->firstname.'</td>
	              <td>'.$row->middlename.'</td>
	              <td>'.$row->lastname.'</td>
	              <td>'.$row->email.'</td>
	              <td>'.$row->contact.'</td>
	              <td>'.$role.'</td>
	              <td>
	              <form method="POST" action="">
	              <input type="hidden" name="id"  value="'.$row->id.'">
	              <button type="submit" class="btn btn-primary btn-xs" name="btn-view"><i class="fa fa-eye"></i> view </div>
	              </form>
	              </td>
	            </tr>
				';
	}
	if(isset($_POST['btn-view'])){
		$id = $conn->real_escape_string($_POST['id']);
		$_SESSION['ids'] = $id;
				echo '<script>window.location.href="show-administrator.php"</script>';

	}
}

		function modify_user_account(){
		global $conn;

		if(isset($_POST['btn-update'])){
		
		$id 				= $conn->real_escape_string($_POST['id']);
		$office_region 		= $conn->real_escape_string($_POST['office_region']);			
		$division 			= $conn->real_escape_string($_POST['division']);			
		$unit_section 		= $conn->real_escape_string($_POST['unit_section']);			
		$username 			= $conn->real_escape_string($_POST['username']);
		$statusss 			= $conn->real_escape_string($_POST['status']);		

		$query 	= $conn->query("UPDATE user_accounts_tbl SET office_region='$office_region', division='$division', unit_section='$unit_section', username='$username', status='$statusss' WHERE id=$id");	
		if($query)	{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Success",
			text: "Successfully updated", 
			 timer: 4000, 
			 type: "success",  
			 showConfirmButton: false 
			});
		 setTimeout("location.href = 'add-user.php'",2000);

		</script>
			<?php		
		}else{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Error",  
			 timer: 4000, 
			 type: "danger",  
			 showConfirmButton: false 
			});
		</script>
			<?php		
		}
	}
}
		function modify_administrator(){
		global $conn;

		if(isset($_POST['btn-update'])){
		
		$id         = $conn->real_escape_string($_POST['id']);
		$fname  	= $conn->real_escape_string($_POST['fname']);
		$mname  	= $conn->real_escape_string($_POST['mname']);
		$lname  	= $conn->real_escape_string($_POST['lname']);
		$contact  	= $conn->real_escape_string($_POST['cnumber']);
		$email  	= $conn->real_escape_string($_POST['email']);

		$query      = $conn->query("UPDATE admin_accounts_tbl SET firstname='$fname', middlename='$mname', lastname='$lname', contact='$contact', email='$email' WHERE id=$id");
		if($query)	{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Success",
			text: "Successfully updated", 
			 timer: 4000, 
			 type: "success",  
			 showConfirmButton: false 
			});
		 setTimeout("location.href = 'index.php'",2000);

		</script>
			<?php		
		}else{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Error",  
			 timer: 4000, 
			 type: "danger",  
			 showConfirmButton: false 
			});
		</script>
			<?php		
		}
	}
}
		
		function deactivate_user_account(){
		global $conn;

		if(isset($_POST['btn-deactivate'])){

		$id 				= $conn->real_escape_string($_POST['id']);
		$office_region 		= $conn->real_escape_string($_POST['office_region']);			
		$division 			= $conn->real_escape_string($_POST['division']);			
		$unit_section 		= $conn->real_escape_string($_POST['unit_section']);			
		$username 			= $conn->real_escape_string($_POST['username']);	

		$query 	= $conn->query("UPDATE user_accounts_tbl SET status='Deactivated' WHERE id=$id");
		if($query){
			?>
				<script type="text/javascript">
				swal({   
					title: "Success",
					text: "Successfully Deactivated", 
					 timer: 4000, 
					 type: "success",  
					 showConfirmButton: false 
					});
				 setTimeout("location.href = 'add-user.php'",2000);

				</script>
			<?php	
		} 		
	}			
}



		function deactivate_administrator(){
		global $conn;

		if(isset($_POST['btn-delete'])){
		
		$id         = $conn->real_escape_string($_POST['id']);
		$fname  	= $conn->real_escape_string($_POST['fname']);
		$mname  	= $conn->real_escape_string($_POST['mname']);
		$lname  	= $conn->real_escape_string($_POST['lname']);
		$contact  	= $conn->real_escape_string($_POST['cnumber']);
		$email  	= $conn->real_escape_string($_POST['email']);

		$query      = $conn->query("UPDATE admin_accounts_tbl SET status='Deactivated' WHERE id=$id");
		if($query)	{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Success",
			text: "Successfully Deactivated", 
			 timer: 4000, 
			 type: "success",  
			 showConfirmButton: false 
			});
		 setTimeout("location.href = 'index.php'",2000);

		</script>
			<?php		
		}else{	
			?>
		<script type="text/javascript">
		swal({   
			title: "Error",  
			 timer: 4000, 
			 type: "danger",  
			 showConfirmButton: false 
			});
		</script>
			<?php		
		}
	}
}

		function modify_maintenance(){
		global $conn;
		if(isset($_POST['btn-update'])){
		$id 		= $conn->real_escape_string($_POST['id']);
		$title 		= $conn->real_escape_string($_POST['title']);
		$footer 	= $conn->real_escape_string($_POST['footer']);
		$query  	= $conn->query("UPDATE maintenance_tbl SET title='$title', footer='$footer' WHERE id='$id'");
			?>
		<script type="text/javascript">
		swal({   
			title: "Success",
			text: "Successfully updated", 
			 timer: 4000, 
			 type: "success",  
			 showConfirmButton: false 
			});
		setTimeout("location.href ='maintenance.php'", 2000);
		</script>
			<?php	
	}			
}
		
		function login_administrator(){
		global $conn;
		if(isset($_POST['btn-login'])){
		
		$username = $conn->real_escape_string($_POST['username']);			
		$password = $conn->real_escape_string($_POST['password']);	

		$query    = $conn->query("SELECT * FROM admin_accounts_tbl WHERE email = '$username' AND status = 'Activated'");
		$check    = $query->num_rows;
		if($check < 1){
		?>
		<script type="text/javascript">
		swal({   
			title: "Error",
			text: "Error username and password", 
			 timer: 4000, 
			 type: "error",  
			 showConfirmButton: false 
			});
		</script>
			<?php
		}else{
			$row 			 = $query->fetch_object();
			$id  			 = $row->id;
			$role 			 = $row->role;
			$status 		 = $row->status;
			$password_hash   = $row->password;

			$hash   = $password_hash;
			if(password_verify($password,$hash) && $role == 0 ){
				$_SESSION['admin'] = $id;
					echo "<script>location.href='admin/index.php'</script>";
			}
			elseif(password_verify($password,$hash) && $role == 1 ){
			$_SESSION['admin'] = $id;
					echo "<script>location.href='home.php'</script>";
			}else{
				?>
					<script type="text/javascript">
					swal({   
						title: "Error",
						text: "Invalid username or password", 
						 timer: 4000, 
						 type: "error",  
						 showConfirmButton: false 
						});
					</script>
						<?php
			}
		}		
	}
}

		function logout_administrator(){
		unset($_SESSION['admin']);
			header("location: ../login.php");
		
}