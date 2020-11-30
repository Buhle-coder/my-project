<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    
        input, textarea {
            margin-top: 10px;  
        }
    </style>

</head>
<style>
  body  {
  background-image: url(image5.jpg);
  background-repeat: no-repeat;
  background-size: auto;
  padding: 25px;
  background-size: 1800px 800px;
}
  .btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}
  
.form-control {
  display: block;
  width: 50%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: 150px;
}
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Courier;
  margin: 0;

}
body{
    background-image: url(image5.jpg);
    background-repeat: no-repeat;
    background-size:cover;
}
/* Header/logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: lightblue;
  color: black;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: lightblue;
}

body {
font-family: Courier ;
}

.overlay{
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: gb(0,0,0);
 background-color: rgba(0,0,0, 0.9);
overflow-x: hidden;
transition:0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: pink;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: pink;
}
#body{
  size: 1000px;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}
@media screen and (max-height: 450px) {
  .overlay a {
    font-size: 20px
    }
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }

/* Fake image, just for this example */
.fakeimg {
  background-color:none;
  width: 100%;
  padding: 20px;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .sidenav{   
    flex-direction: column;
  }
textarea {
  width: 3000px;
  height: 1500px;
}
div.a {
  text-align: center;
}

.fa {
  padding: 20px;
  font-size: 48px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}


.fa-linkedin {
  background: #007bb5;
  color: white;
}
.icon{
  padding-left: 50%;
}

</style>
<body>
    <!-- sidenav  -->
<div id="myNav" class="overlay">
<a href="javascript:void(0)"
 class="closebtn"
 onclick="closeNav()">&times;</a>
 <div class="overlay-content">
<a href="home page.html">HOME</a>
  <a href="about.html">ABOUT</a>
  <a href="projects.html">PROJECT</a>
  <a href="contact page.html">CONTACT</a>
  <a href="The Blog.html">BLOG</a>
</div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<br>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<body>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    </section>
   
    <footer>
    <center></center>
    <section id="Contact">
    <title>Contact</title>
    <h1 style="font-family:fantasy" align="center">GET IN TOUCH</h1>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control">
                <input id="email" placeholder="Email" class="form-control">
                <input id="subject" placeholder="Subject" class="form-control">
                <textarea class="form-control" id="body" placeholder="Email Body"></textarea>
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
            </div>
        </div>
   

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

<h1 style="font-family:fantasy" align="center">CONTACT ME</h1>
    <br><br>
<div class="icon">

<a href="https://www.facebook.com/bontle.buhle.505/" class="fa fa-facebook" style="font-size:20px;color:#3B5998"></a>
<a href="https://www.linkedin.com/in/mabotle-pienaar-8792541b7" class="fa fa-linkedin" style="font-size:20px;color:#007bb5"></a>
<a href="https://github.com/"class="fa fa-github" style="font-size:20px;color: blueviolet"></a>
<a href="https://wa.link/z614ht" class="fa fa-whatsapp" style="font-size: 20px;color:green"></a>
</div>







</body>
</html>