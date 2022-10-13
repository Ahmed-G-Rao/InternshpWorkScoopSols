<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Form</title>
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="fromMainDiv">
					<form autocomplete="off" name="TaskForm" id="TaskForm" method="POST" action="function.php">
						<p><span >* required fields</span></p>
						<div class="inner-wrap">
							<label>Name <span>*</span><input type="text" name="name" required oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="this.setCustomValidity('')"/></label>
							<!-- <p id="nameId" class="hide show"><span >Name must be filled out</span></p> -->
						</div>

						<div class="inner-wrap">
							<label>Email Address <span>*</span><input type="email" name="email" required oninvalid="this.setCustomValidity('Enter E-mail Address Here')" oninput="this.setCustomValidity('')" /></label>
							<!-- <p id="emailId" class="hide show"><span>Email must be filled out</span></p> -->
							<label>Company Name <span>*</span> <input type="text" name="company" required oninvalid="this.setCustomValidity('Enter Company Name Here')" oninput="this.setCustomValidity('')"/></label>
							<!-- <p id="companyId" class="hide show"><span>Company Name must be filled out</span></p> -->

						</div>

						<div class="inner-wrap">	
							<p >
								<label class="password-check" >	8 Characters Minimum </label>
								<label class="password-check">Uppercase</label>
								<label class="password-check">Lowercase</label>
								<label class="password-check">Special Character </label>
								<label class="password-check">Numeric Value</label>
							</p>
							<label>Password <span>*</span><input type="password" name="pass" autocomplete="off" id="password" onkeyup="passCheck(this.value)" required oninvalid="this.setCustomValidity('Enter Password Here')" oninput="this.setCustomValidity('')"/></label>
							<!-- <p id="passId2" class="hide show"><span>Enter Password !</span></p> -->
						
					<!-- TESTING -->


							<label>Confirm Password <span>*</span><input type="password" name="c_pass" required oninvalid="this.setCustomValidity('Confirm Password Here')" oninput="this.setCustomValidity('')"/></label>
							 <p id="passId" class="hide show"><span>Password not matched</span></p>
							<p id="passId3" class="hide show"><span>Enter Password of Right Pattern</span></p> 
						</div>
						<div class="button-section">
							<input type="submit" name="Sign Up" onclick="ValidateForm();" />
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		var taskFormEle = document.getElementById("TaskForm");

		function handleForm(event) {
			event.preventDefault();
		}
		taskFormEle.addEventListener('submit', handleForm);
		function passCheck(data){
			var status=false;	
			var passClassName=document.getElementsByClassName("password-check")
			const lowercase=new RegExp('(?=.*[a-z])');
			const uppercase=new RegExp('(?=.*[A-Z])');
			const numericValue=new RegExp('(?=.*[0-9])');
			const specialChar=new RegExp('(?=.*[!@#\$%\^&\*])');
			const eightChar=new RegExp('(?=.{8,})');
			if (eightChar.test(data)) {
				passClassName[0].style.color="green";
				status=true
				// console.log(status)
			}else{
				passClassName[0].style.color="red";
				
				status=false;
				// console.log(status)
			}

			if (uppercase.test(data)) {
				passClassName[1].style.color="green";
				status=true
				// console.log(status)
			} else {
				passClassName[1].style.color="red";
				status=false;
				// console.log(status)
			}

			if (lowercase.test(data)) {
				passClassName[2].style.color="green";
				status=true;
				// console.log(status)
			} else {
				passClassName[2].style.color="red";
				status=false;
				// console.log(status)
			}
			
			if (specialChar.test(data)) {
				passClassName[3].style.color="green";
				status=true;
				// console.log(status)
			} else {
				passClassName[3].style.color="red";
				status=false;
				// console.log(status)
			}

			if (numericValue.test(data)) {
				passClassName[4].style.color="green";
				status=true;
				// console.log(status)
			} else {
				passClassName[4].style.color="red";
				status=false;
				// console.log(status)
			}
			console.log(status)
			return status;
		
			
		}


		function ValidateForm() {
			let nameEle = document.forms["TaskForm"]["name"].value;
			// let nameId = document.getElementById("nameId");
			let emailEle = document.forms["TaskForm"]["email"].value;
			// let emailId = document.getElementById("emailId");
			let companyEle = document.forms["TaskForm"]["company"].value;
			// let companyId = document.getElementById("companyId");
			let passEle = document.forms["TaskForm"]["pass"].value;
			let c_passEle = document.forms["TaskForm"]["c_pass"].value;
			let passId = document.getElementById("passId");
			// let passId2 = document.getElementById("passId2");
			// let passId3=document.getElementById("passId3")
			//Name Validation
			// if (nameEle == "") {
			// 	nameId.classList.remove("hide");
			// 	nameId.classList.add("show");
			// } else {
			// 	nameId.classList.remove("show");
			// 	nameId.classList.add("hide");
			// }
			// //Email Validation
			// if (emailEle == "") {
			// 	emailId.classList.remove("hide");
			// 	emailId.classList.add("show");
			// } else {
			// 	emailId.classList.remove("show");
			// 	emailId.classList.add("hide");
			// }
			// //Company Name Validation
			// if (companyEle == "") {
			// 	companyId.classList.remove("hide");
			// 	companyId.classList.add("show");
			// } else {
			// 	companyId.classList.remove("show");
			// 	companyId.classList.add("hide");
			// }
			//Password Validation

			if(passCheck(passEle)){
				if(passEle!=c_passEle){
					passId.classList.remove("hide");
					passId.classList.add("show");
				}
				else if(passEle===c_passEle){
					insert();
					passId.classList.add("hide");
				}
			}


			// if(passCheck(passEle)){
			// 	if (passEle == "") {
			// 	passId2.classList.remove("hide");
			// 	passId2.classList.add("show");

			// } else if (passEle != "") {
			// 	passId2.classList.remove("show");
			// 	passId2.classList.add("hide");
			// 	if (passEle != c_passEle) {
			// 		passId.classList.remove("hide");
			// 		passId.classList.add("show");

			// 	} else if (passEle === c_passEle) {
			// 		passId.classList.remove("show");
			// 		passId.classList.add("hide");
			// 		passId2.classList.add("hide");
			// 		passId3.classList.add("hide");
			// 		passCheck(passEle);
			// 		insert();
					
			// 	}
			// }
			// }
		
			
		}

		function insert() {
			$(document).ready(function() {
				$.ajax({
					url: 'function.php',
					type: 'POST',
					data: {
						name: $("input[name=name]").val(),
						email: $("input[name=email]").val(),
						company: $("input[name=company]").val(),
						pass: $("input[name=pass]").val(),
						action: "insert"
					},
					success: function(response) {
						if (response == 1) {
							alert("Data Added Successfully!");
							name: $("input[name=name]").val("");
						email: $("input[name=email]").val("");
						company: $("input[name=company]").val("");
						pass: $("input[name=pass]").val("");
						c_pass:$("input[name=c_pass]").val("");
							// nameEle.value="";
							// emailEle.value="";
							// companyEle.value="";
							// passEle.value="";
							// c_passEle.value="";
						} else if (response == 2) {
							alert("Email Already Exist");
						}
					}
				});

			});
		}
	</script>
</body>

</html>