<?php 

include("navbar.php");

 ?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h3 class="font-bold text-center gradient-title p-3">Tenant Register</h3>
    <div class="tenant-bg p-4 h-screen">
        <div class="w-4/5 mx-auto shadow-lg p-3 lg:p-8 rounded-lg my-20 glass-effect text-white">
            <form method="POST" action="tenant-engine.php" enctype="multipart/form-data">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <div class="form-group">
                        <label for="full_name" class="block font-bold">Full Name:</label>
                        <input type="text" class="input input-bordered w-full max-w-xs text-black" id="full_name"
                            placeholder="Enter Full Name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="block font-bold">Email:</label>
                        <input type="email" class="input input-bordered w-full max-w-xs text-black" id="email"
                            placeholder="Enter Your Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password1" class="block font-bold">Password:</label>
                        <input type="password" class="input input-bordered w-full max-w-xs text-black" id="password1"
                            placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password2" class="block font-bold">Confirm Password:</label>
                        <input type="password" class="input input-bordered w-full max-w-xs text-black" id="password2"
                            placeholder="Enter Password Again" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_no" class="block font-bold">Phone No.:</label>
                        <input type="text" class="input input-bordered w-full max-w-xs text-black" id="phone_no"
                            placeholder="Enter Phone No." name="phone_no" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="block font-bold">Address:</label>
                        <input type="text" class="input input-bordered w-full max-w-xs text-black" id="address"
                            placeholder="Enter Address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="card_photo" class="block font-bold">Upload your profile:</label>
                        <input type="file" placeholder="Upload id photo" name="id_photo" accept="image/*"
                            onchange="preview_image(event)" class="file-input file-input-bordered w-full max-w-xs"
                            required>
                    </div>
                </div>
                <div class="form-group hidden mt-2" id="preview_section">
                    <label class="block font-bold">Your selected File:</label><br>
                    <img src="" id="output_image" / class="w-32" required>
                </div>
                <button id="submit" name="tenant_register" class="btn gradient-title mt-3"
                    onclick="return Validate()">Register</button><br>
                <div class="form-group">
                    <label class="">Register as a <a href="owner-register.php"
                            class="link link-success">Owner</a>?</label><br>
                </div>
            </form>

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
</body>