<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">

    <title>ICS-iLS</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

<script type="text/javascript">
     
function toggle() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = 'table-row'; // set to table-row instead of an empty string
 }else{
   document.getElementById("hidethis").style.display = 'none';
 }
}
</script>


    <link href="dist/css/carousel.css" rel="stylesheet">
  <style type="text/css" id="holderjs-style"></style></head>



<!-- NAVBAR
================================================== -->
 <body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="dist/images/logowhite.png" height="30px"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Search</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
  </div>

    <!--Putting it here for nonsense problem-->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />




<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; bordercolor: #111111" width="600" id="abc">
	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>
		<TABLE align="center" style="border-collapse: collapse; background-color: #efefef; width:100%; bordercolor: #999999" cellspacing=0 cellpadding="2" border="1">
			<TBODY>
				<TR>
					<TD style="padding: 6px; color: #222222" align="left">
				 	<!-- Begin Box 1 -->
						<table bgcolor="#dedede" cellspacing="0" cellpadding="2" border="0" style="width: 100%; border-collapse: collapse; bordercolor: #111111">
							<tr>
								<td width="100" align="center" nowrap><b>Search Field</b></td>
								<td width="300" align="center" nowrap><b>Search Expression</b></td>
								<td width="80" align="center" nowrap><b>Operator</b></td>
							</tr>
							<tr>
								<td align="left">
									<select size="1" name="field1">
										<option value="author">Author</option>
										<option value="title" SELECTED>Title</option>
										<option value="keyword">Any Keyword</option>
									</select>
								</td>
								<td align="left"><input name="query1" size="50" style="width: 370px" />&nbsp;</td>
								<td align="left">
									<select size="1" name="operator1">
										<option selected="true" value="AND">AND</option>
										<option value="OR">OR</option>
									</select>
								</td>
							</tr>
							<tr>
								<td align="left">
									<select size="1" name="field2">
									<option value="author">Author</option>
										<option value="title" SELECTED>Title</option>
										<option value="keyword">Any Keyword</option>
									</select>
								</td>
								<td align="left"><input name="query2" size="50" style="width: 370px" />&nbsp;</td>
								<td align="left">
									<select size="1" name="operator2">
									    <option selected="true" value="AND">AND</option>
									    <option value="OR">OR</option>
									</select>
								</td>
							</tr>
							<tr>
								<td align="left">
									<select size="1" name="field3">
								       	<option value="course" SELECTED>Course</option>
								   		<option value="accno">CMSC 2</option>
										<option value="callno">CMSC 11</option>
										<option value="isbn">CMSC 21</option>
										<option value="publisher">CMSC 22</option>
										<option value="subject">CMSC 56</option>
										<option value="title">CMSC 57</option>
										<option value="keyword">Any Course</option>
									</select>
								</td>
								<td align="left">&nbsp;</td>
								<td align="left">&nbsp;</td>    
							</tr>	
</table>				 
				 	<!-- End Box 1 -->
				 	</TD>
				</TR>
			</TBODY>
		</TABLE>
		</td>
	</tr>
  <!-- end of box 1 row -->


	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>
	<tr>
		<td align="left" valign="top" height="20" style="padding-left: 5px; padding-right: 5px; padding-bottom: 5px; padding-top: 0px" nowrap>


<table style="display:none;" id="hidethis" style="padding-left: 0px; padding-right: 0px; padding-top: 2px; padding-bottom: 2px; width: 100%; bordercolor: #111111" width="100%" border="0" >
          <tr>
				                  <td valign="middle" width="150" align="left" bgcolor="#dedede" rowspan="2" nowrap>&nbsp; <b>Format:</b></td>
				                  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="0" class="radio" />book</label></td>
								  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="4" class="radio" />thesis</label></td>
								  <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="2" class="radio" />magazine</label></td>                      
							      <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="3" class="radio" />media</label></td>
							      <td valign="middle" width="90" align="left" style="vertical-align: middle" bgcolor="#dedede" nowrap><label><input type="checkbox" name="mtype" value="8" class="radio" />others</label></td>							  
								</tr>
</table>

<br />
<br />




			<TABLE style="border-collapse: collapse; background-color: #efefef; width:100%; bordercolor: #999999" cellSpacing=0 cellpadding="2" border="1">
		        <TBODY>
					<TR>
						<TD style="padding: 6px; color: #222222" align="left">
							<table style="padding-left: 0px; padding-right: 0px; padding-top: 2px; padding-bottom: 2px; width: 100%; bordercolor: #111111" width="100%" border="0">
								<tr bgcolor="#dedede">

									<td nowrap width="60">&nbsp;</td>
									<td nowrap width="60">&nbsp;</td>
									<td nowrap width="60">&nbsp;</td>
									<td width="30">&nbsp;</td>
									<td nowrap width="90"><b>Records/Page:</b></td>
									<td width="5">&nbsp;</td>
									<td width="5">&nbsp;</td>
									<td width="50">
										<select size="1" name="recperpage">
											<option selected value="15">15</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select>
									</td>
									<td>&nbsp;</td>
								</tr>
							</table>
						</TD>
					</TR>
				</TBODY>
			</TABLE>



		</td>
	</tr>

	<tr>
	    <td valign="middle" align="center" style="vertical-align: middle" height="40">
	      <input type="submit" value="    Search    " name="eventSubmit_doSearchadvanced" id="defaultButton" />&nbsp;&nbsp;
	      <input type="reset" value="    Reset    " name="btnReset" /></td>
		<input type="hidden" name="mod" value="$data.getParameters().get("mod")">
	</tr>

	<tr>
		<td align = "center"><button onclick="toggle()">Advanced Search</button></td>
	</tr>
</table>


<br />
<br />
<br />





<table align= "center" id="result_engine" summary="Results" border="1" cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Accessibility" scope="col" title="status">Status</th>
		<th abbr="Accessibility" scope="col" title="status">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
                <td>Available</td>
                <td><input type="submit" value="Reserve"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td>Borrowed</td>
                <td><input type="submit" value="Waitlist"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC3</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td>Borrowed</td>
                <td><input type="submit" value="Waitlist"/></td>
              </tr>
            </tbody>
</table>




</body></html>
