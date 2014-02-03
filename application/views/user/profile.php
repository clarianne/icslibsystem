<?php include 'logout_header.php'; ?>
	
	<div class="mainBody">
		<!-- Nav tabs -->
		<div id="profileCont">
		<!-- Tab panes -->
			<div id="profContent">
			<h2>Hi, Sayaka Yamamoto</h2><!-- in actual implementation, show full name of the user -->
			
			<p>Student Number: 2010-00123</p>
			<p>Email Address: y.sayaka@gmail.com</p>
			<input href="#update" data-toggle="modal" type="submit" value="Update Profile" class="btn btn-primary"/>
			
			<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Update Profile</h3>
				  </div>
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h3 class="form-signin-heading">Update your email address or password: </h3>
						<input type="text" id="email" class="form-control" placeholder="Email Address:" onchange="checkEmail()" required autofocus>
						<script>
							function checkEmail() {

								var email = document.getElementById('email');
								var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

								if (!filter.test(email.value)) {
								alert('Please provide a valid email address');
								email.focus;
								return false;
								}
							}
						</script>
						<input type="password" id="password1" class="form-control" placeholder="Password:" required autofocus>
						<input type="password" id="password2" class="form-control" placeholder="Repeat Password:" onchange="checkPassword()" required autofocus>
						
						<script>
							function checkPassword() {
								
								var pword1 = document.getElementById('password1');
								var pword2 = document.getElementById('password2');

								if(pword2 != pword1){
								
								alert('Passwords do not match.');
								pword1.focus;
								return false;
								
								}
							}
						</script>
						
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<input href="#ok" data-dismiss="modal" onclick="" type="submit" value="Update" class="btn btn-primary"/>
					 </form>
				  </div>
				</div>
			  </div>
			</div>
			
			<!--To check if the profile has been successfully updated -->

			<div class="modal fade" id="updated" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h2 class="form-signin-heading">Congratulations! <br /> Your profile has been updated. </h2>
				  </div>
				  <div class="modal-footer">
					<input href="#ok" class="btn btn-primary" data-toggle="modal_updated" type="submit" value="Ok">
					 </form>
				  </div>
				</div>
			  </div>
			</div>	
			
			<h3>Profile Summary:</h3>

			<p><h4>Books on Hand</h4>
			<table summary="Results" border="1" cellspacing="5" cellpadding="5">
				 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
				<th abbr="Date Borrowed" scope="col" title="Edition">Date Borrowed</th>
				<th abbr="Due Date" scope="col" title="Edition">Due Date</th>
              </tr>
            </thead>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
				<td>1/3/2014</td>
				<td>1/6/2014</td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
				<td>2/1/2014</td>
				<td>2/4/2014</td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
				<td>2/2/2014</td>
				<td>2/5/2014</td>
              </tr>

			</table>	
			</p>
			
						
			<!--Reserved -->

			<p><h4>Reserved Books</h4>
			<table summary="Results" border="1" cellspacing="5" cellpadding="5">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Action" scope="col" title="Action">Action</th>
              </tr>
            </thead>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
			</table>
			
			</p>
		</div>
		</div>

	<div class="container marketing">
<?php include 'home_footer.php'; ?>