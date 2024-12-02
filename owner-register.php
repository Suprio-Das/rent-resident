<?php 

include("navbar.php");

 ?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<h3 class="font-bold text-center gradient-title p-3">Owner Register</h3>
<div class="tenant-bg p-4 h-screen">
    <div class="w-4/5 mx-auto shadow-lg p-3 lg:p-8 rounded-lg my-14 glass-effect">
        <form method="POST" action="owner-engine.php" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div class="form-group">
                    <label for="full_name" class="block font-bold text-white">Full Name:</label>
                    <input type="text" class="input input-bordered w-full max-w-xs" id="full_name"
                        placeholder="Enter Full Name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="block font-bold text-white">Email:</label>
                    <input type="email" class="input input-bordered w-full max-w-xs" id="email"
                        placeholder="Enter Your Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password1" class="block font-bold text-white">Password:</label>
                    <input type="password" class="input input-bordered w-full max-w-xs" id="password1"
                        placeholder="Enter Password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password2" class="block font-bold text-white">Confirm Password:</label>
                    <input type="password" class="input input-bordered w-full max-w-xs" id="password2"
                        placeholder="Enter Password Again" required>
                </div>
                <div class="form-group">
                    <label for="phone_no" class="block font-bold text-white">Phone No.:</label>
                    <input type="text" class="input input-bordered w-full max-w-xs" id="phone_no"
                        placeholder="Enter Phone No." name="phone_no" required>
                </div>
                <div class="form-group">
                    <label for="address" class="block font-bold text-white">Address:</label>
                    <input type="text" class="input input-bordered w-full max-w-xs" id="address"
                        placeholder="Enter Address" name="address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="card_photo" class="block font-bold text-white">Upload your profile:</label>
                <input type="file" placeholder="Upload id photo" name="id_photo" accept="image/*"
                    onchange="preview_image(event)" class="file-input file-input-bordered w-full max-w-xs" required>
            </div>
            <div class="form-group hidden mt-2" id="preview_section">
                <label class="block font-bold text-white">Your selected File:</label><br>
                <img src="" id="output_image" / class="w-32" required>
            </div>
            <button id="submit" name="owner_register" class="btn gradient-title my-2"
                onclick="return Validate()">Register</button>
            <div class="form-group">
                <label class="text-white">Register as a <a href="tenant-register.php"
                        class="link link-warning">Tenant</a>?</label><br>
            </div>
        </form>

        <!-- <button id="submit" name="owner_register" class="btn gradient-title mt-3"
            onclick="return Validate()">Register</button><br> -->

    </div>
</div>

<?php
include("footer.php");
?>

<script type='text/javascript'>
function preview_image(event) {
    var reader = new FileReader();
    const preview = document.getElementById('preview_section');
    preview.style = "display: block"
    console.log(preview)
    reader.onload = function() {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<script type="text/javascript">
function Validate() {
    var password = document.getElementById("password1").value;
    var confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
</script>