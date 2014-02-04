<?php include 'admin_header.php'; ?>  
	<div class="mainBody">
		<!-- Nav tabs -->
		<div class="sidebarMain">
		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		  <li><a href="#reserved" data-toggle="tab" >Reserved Books</a></li>
		  <li><a href="#borrowed" data-toggle="tab">Borrowed Books</a></li>
		  <li><a href="#view" data-toggle="tab">View All Library Materials</a></li>
		  <li><a href="#add" data-toggle="modal">Add A New Material</a></li>
		  <li><a href="#generate">Generate Report</a></li>
		</ul>
		</div>
		<div class="leftMain">
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="overview"><h1>WELCOME ADMIN!<br><br><br><br><br><br><br><br></h1></div>
			<!--Reserved -->
			<div class="tab-pane fade" id="reserved">
			<h1>Reserved Books</h1>
			<table id="reserved" summary="Results" border="1" cellspacing="5" cellpadding="5" align = "center">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Accessibility" scope="col" title="Accessible For">Borrower</th>
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
                <td>Student 0</td>
                <td><input type="submit" value="Approve"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td>Student1</td>
                <td><input type="submit" value="Approve"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td>Student2</td>
                <td><input type="submit" value="Approve"/></td>
              </tr>
			</table>
			</div>
			
			
			<div class="tab-pane fade" id="borrowed">
<h1>Borrowed Books</h1>
<table id="borrowed" summary="Results" border="1" cellspacing="5" cellpadding="5" align = "center">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Accessibility" scope="col" title="Accessible For">Borrower</th>
				<th abbr="Date borrowed" scope="col" title="Date borrowed">Date Borrowed</th>
				<th abbr="Due Date" scope="col" title="Date borrowed">Due Date</th>
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
                <td>Student 0</td>
				<td>Date</td>
				<td>Due Date</td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td>Student1</td>
				<td>Date</td>
				<td>Due Date</td>				
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td>Student2</td>
				<td>Date</td>
				<td>Due Date</td>
              </tr>
			</table>			
			</div>
			
			<div class="tab-pane fade" id="view">
			<table class="table table-hover" id="reserved" summary="Results" border="1" cellspacing="5" cellpadding="5" align = "center">
	 <thead>
              <tr data-toggle="modal" data-id="1" data-target="#editMaterial">
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
              </tr>
            </thead>
              <tr data-toggle="modal" data-id="1" data-target="#editMaterial">
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
				<td>ed 1</td>
              </tr >
              <tr data-toggle="modal" data-id="2" data-target="#editMaterial">
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
				<td>ed 1</td>
              </tr>
              <tr data-toggle="modal" data-id="3" data-target="#editMaterial">
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
				<td>ed 1</td>
              </tr>
			</table>
			</div>
			
			<!--Will show when editing materials -->
			<div class="modal fade" id="editMaterial" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Edit Material</h3>
				  </div>
				  <div id="details" class="modal-body"></div>
				  <div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
				  </div>
				 </div>
				</div>
			</div>

			<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Add a new material</h3>
				  </div>
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h2 class="form-signin-heading">Fill up the necessary info: </h2>
						<input type="text" class="form-control" placeholder="Material ID (XXXX-XX)" required autofocus>
						<label for="course">Course:</label>
						<select id="course" class="form-control">
							<option value="CMSC 1">CMSC 1</label></option>
							<option value="CMSC 2">CMSC 2</label></option>
							<option value="CMSC 11">CMSC 11</label></option>
							<option value="CMSC 21">CMSC 21</label></option>
							<option value="CMSC 22">CMSC 22</label></option>
							<option value="CMSC 56">CMSC 56</label></option>
							<option value="CMSC 57">CMSC 57</label></option>
							<option value="CMSC 100">CMSC 100</label></option>
							<option value="CMSC 123">CMSC 123</label></option>
							<option value="CMSC 124">CMSC 124</label></option>
							<option value="CMSC 125">CMSC 125</label></option>
							<option value="CMSC 127">CMSC 127</label></option>
							<option value="CMSC 128">CMSC 128</label></option>
							<option value="CMSC 129">CMSC 129</label></option>
							<option value="CMSC 130">CMSC 130</label></option>
							<option value="CMSC 131">CMSC 131</label></option>
							<option value="CMSC 132">CMSC 132</label></option>
							<option value="CMSC 137">CMSC 137</label></option>
							<option value="CMSC 141">CMSC 141</label></option>
							<option value="CMSC 142">CMSC 142</label></option>
							<option value="CMSC 150">CMSC 150</label></option>
							<option value="CMSC 161">CMSC 161</label></option>
							<option value="CMSC 165">CMSC 165</label></option>
							<option value="CMSC 170">CMSC 170</label></option>
							<option value="CMSC 172">CMSC 172</label></option>
							<option value="CMSC 180">CMSC 180</label></option>
							<option value="CMSC 191">CMSC 191</label></option>
						</select>
						<label for="referenceType">Type:</label>
						<select id="referenceType" class="form-control">
							<option value="Book">Book</option>
							<option value="CD">CD</option>
							<option value="Journal">Journal</option>
							<option value="Magazines">Magazines</option>
							<option value="Reference">Reference</option>
							<option value="SP">Special Problem</option>
							<option value="Thesis">Thesis</option>
						</select>
						<input type="text" class="form-control" placeholder="Title:" required>
						<input type="text" class="form-control" placeholder="Author:" required>
						<input type="text" class="form-control" placeholder="Year Published:" required>
						<input type="text" class="form-control" placeholder="Edition:" required>
						<label for="accesibility">Accesibility:</label>
						<select id="accesibility" class="form-control">
							<option value="4">Student/Faculty</option>
							<option value="1">Student</option>
							<option value="2">Faculty</option>
							<option value="3">Room Use</option>
						</select>
						<br>
						<b>Requirements:&nbsp&nbsp</b>
						<label class="checkbox-inline"><input type="checkbox" id="letter" value="1"> Consent of the Instructor</label>
						<label class="checkbox-inline"><input type="checkbox" id="letter" value="2"> Consent of the Owner</label>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary" type="submit">Add</button>
					 </form>
				  </div>
				</div>
			  </div>
			</div>			
		</div>
		</div>
	</div>
<?php include 'admin_footer.php'; ?>