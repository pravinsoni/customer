 <html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>
<body>
  <h1 class="register-title">Welcome</h1>
 
    <form name="myForm" class="register" action =" " method="POST">
	
	<input type="text" class="register-input" id="name" placeholder="Name" required="" onkeypress="return CheckIsCharacterSecond(event);">
   <input class="register-input" type="email" name="email" placeholder="Email" required="" oninput="InvalidMsg(this);" />
    <input type="tel" class="register-input" id= "mobile_1"placeholder="Phone No" required=""  onkeypress="return CheckIsNumeric2(event);"  maxlength="10" minlength="10" pattern=".{0}|.{10,}" oninput="mobileNumber2(this);">
	 <select name="pref_contact" id="cantact_type" class='register-input' style="height: 50px;" required="" >
                                        <option value="" >Prefered Contact</option>
                                        <option>Mobile</option>
                                        <option>E-mail</option>
                                    </select>
	 <textarea name="address" row="3" class="register-input" placeholder="message" required="" minlength="10" maxlength="200" ></textarea>
	
    
  

    <input type="submit" value="Create Account" class="register-button" onclick="check();">
 
  </form>
  
  <?php
            if (isset($success)) {
                # code...
                echo "<script type='text/javascript'>alert('$success');</script>";
            }
            ?>
  <script type="text/javascript">
  function check() {
                    
                    alert('thank-you for registering');


                }
  
  function CheckIsNumeric2(objEvt) {
                    var charCode = (objEvt.which) ? objEvt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        document.getElementById("mobile_1");
                        return false;
                    }
                    else {
                        document.getElementById("mobile_1");
                        return true;
                    }


                }
  
  function CheckIsCharacterSecond(objEvt) {
                    var charCode = (objEvt.which) ? objEvt.which : event.keyCode
                    if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
                        document.getElementById("name");
                        return true;
                    }
                    else {
                        document.getElementById("name");
                        return false;
                    }
                }
				
				function mobileNumber2() {
                    var Number = document.getElementById('mobile_1').value;
                    var IndNum = /^[0]?[789]\d{9}$/;

                    if (!(Number.charAt(0) == "9" || Number.charAt(0) == "8" || Number.charAt(0) == "7"))
                    {
                        alert("Mobile No. should start with 9 or 8 or 7");
                        document.getElementById('mobile_1').focus();
                        document.getElementById('mobile_1').value = "";
                    }
                }
				
				 function InvalidMsg(textbox) {

                    function echeck(str) {

                        var at = "@"
                        var dot = "."
                        var lat = str.indexOf(at)
                        var lstr = str.length
                        var ldot = str.indexOf(dot)
                        if (str.indexOf(at) == -1) {

                            return false
                        }

                        if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {

                            return false
                        }

                        if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {

                            return false
                        }

                        if (str.indexOf(at, (lat + 1)) != -1) {

                            return false
                        }

                        if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {

                            return false
                        }

                        if (str.indexOf(dot, (lat + 2)) == -1) {

                            return false
                        }

                        if (str.indexOf(" ") != -1) {

                            return false
                        }

                        return true
                    }

                    if (textbox.value == '') {
                        textbox.setCustomValidity('Required email address');
                    }
                    else if (textbox.validity.typeMismatch) {
                        textbox.setCustomValidity('please provide a valid email address');
                    }
                    else {
                        textbox.setCustomValidity('');
                    }
                    if (echeck(textbox.value) == false) {
                        textbox.setCustomValidity('please provide a valid email ID');
                    }
                    ;
                    return true;
                }
				
				
  </script>
  
  
</body>
</html>
