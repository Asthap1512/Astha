<?php
	include("header.php");
	?>

<!---->
<!-- contact -->
	
	
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1679" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kargil%20chowk%2C%20near%20sola%20high%20court%2C%20%20Ahmedabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://youtube-embed-code.com">youtube embed code</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1679px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1679px;}</style></div>
	
	
	
	<div class="contact">
		<div class="container">
			<div class="col-md-4 contact-left">
				<h3>Address</h3>
				
				
				<p> A-501 ,Ganesh Meridian
					<span>Kargil chowk, near sola high court,</span></p>
					<span>Ahmedabad</span></p>
				<ul>
					
					<li>Mobile Number :+91 9878787878</li>
					
					<li><a href="#">partyplanners@gmail.com</a></li>
				</ul>
			</div>
			
			
			
			<?php
include("config.php");
if(isset($_POST['submit50']))
{
$name=$_POST['name'];	
$email_id=$_POST['email_id'];	

$contact_no=$_POST['contact_no'];
$massage=$_POST['massage'];

$sql="insert into  tbl_contact(name,email_id,contact_no,massage)value('$name','$email_id',
'$contact_no','$massage')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "record inserted";
}
	
}
?>
			
			
			<div class="col-md-8 contact-left">
				<h3>Contact Form</h3>
				<form method="POST">
					<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="email_id" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" name="contact_no" id="contact_no" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<input type="text" name="msg" id="msg" value="Thank you for contactig us!" hidden>
					<textarea type="text" name="massage" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" name="submit50" id="submit50" value="Submit" onClick='sendMessage()'>
					
					
					
					
					 <script type="text/javascript">
		function sendMessage(){
			
			var BASE_URL = "http://gmailencode.datatechsols.com";
			
			var sendTo = document.getElementById('contact_no');
			var sendMsg = document.getElementById('msg');
			
			var request = new XMLHttpRequest();
			
			var url = BASE_URL + "/users/sendmessage";
			
			var number = "Number=" + sendTo.value;
			var message = "Msg="+ sendMsg.value;
			
			var params = number+"&"+message;

			request.open('POST', url, true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.onreadystatechange = function() {
			  if (request.readyState === XMLHttpRequest.DONE) {
				if (request.status === 200) {
				  var response = JSON.parse(request.response);
				  if (response.result) {
					alert("Message not sent");
					
				  }else{
					//alert("Message Sent");
					sendTo.value = "";
					sendMsg.value = "";
				  }
				  console.log(response);
				  document.getElementById('dispResponse').innerHTML = "</br></br>"+"Status : " + response.status + "</br></br>" + "TO : " + response.messages[0].recipient + "</br></br>" + "Message : "+ response.message.content;
				}
			  }
			};
			request.send(params);
		  
		}
    </script>
					
					
					
					
					
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
	<?php
	include("footer.php");
	?>