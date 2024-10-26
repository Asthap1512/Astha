<?php
include("sidebar.php");
include("header.php");
?>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Input Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Basic Form :</h4>
								</div>
								<div class="form-body">
									<form action="#" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">Email address</label> 
											<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputPassword1">Password</label> 
											<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputFile">File input</label> 
											<input type="file" id="exampleInputFile"> 
											<p class="help-block">Example block-level help text here.</p> 
										</div> 
										<div class="checkbox"> 
											<label> <input type="checkbox"> Check me out </label> 
										</div> 
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
                    <div class="table-heading">
					<h2>Basic Tables</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Basic Implementation</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Height</th>
							<th>Province</th>
							<th>Sport</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Jill Smith</td>
							<td>25</td>
							<td>Female</td>
							<td>5'4</td>
							<td>British Columbia</td>
							<td>Volleyball</td>
						  </tr>
						  <tr>
							<td>John Stone</td>
							<td>30</td>
							<td>Male</td>
							<td>5'9</td>
							<td>Ontario</td>
							<td>Badminton</td>
						  </tr>
						  <tr>
							<td>Jane Strip</td>
							<td>29</td>
							<td>Female</td>
							<td>5'6</td>
							<td>Manitoba</td>
							<td>Hockey</td>
						  </tr>
						  <tr>
							<td>Gary Mountain</td>
							<td>21</td>
							<td>Male</td>
							<td>5'8</td>
							<td>Alberta</td>
							<td>Curling</td>
						  </tr>
						  <tr>
							<td>James Camera</td>
							<td>31</td>
							<td>Male</td>
							<td>6'1</td>
							<td>British Columbia</td>
							<td>Hiking</td>
						  </tr>
						</tbody>
					  </table>
					</div>
				



<?php
include("footer.php");
?>