<?php 
ob_start(); 

$owner_id = '';
$full_name = '';
$email = '';
$password = '';
$phone_no = '';
$address = '';
$id_type = '';
$id_photo = '';

$errors = array();

$db = new mysqli('localhost', 'root', '', 'rentresident');

if ($db->connect_error) {
    echo "Error connecting database";
    exit;
}

if (isset($_POST['owner_register'])) {
    owner_register();
}

if (isset($_POST['owner_login'])) {
    owner_login();
}

if (isset($_POST['owner_update'])) {
    owner_update();
}

// function owner_register() {
//     global $owner_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db;
    
//     if (isset($_FILES['id_photo'])) {
//         $id_photo = 'owner-photo/' . $_FILES['id_photo']['name'];

//         if (!empty($_FILES['id_photo'])) {
//             $path = "owner-photo/";
//             $path = $path . basename($_FILES['id_photo']['name']);
//             if (move_uploaded_file($_FILES['id_photo']['tmp_name'], $path)) {
//                 echo "The file " . basename($_FILES['id_photo']['name']) . " has been uploaded";
//             } else {
//                 echo "There was an error uploading the file, please try again!";
//             }
//         }
//     }
    
//     $owner_id = validate($_POST['owner_id']);
//     $full_name = validate($_POST['full_name']);
//     $email = validate($_POST['email']);
//     $password = validate($_POST['password']);
//     $phone_no = validate($_POST['phone_no']);
//     $address = validate($_POST['address']);
//     $id_type = validate($_POST['id_type']);
//     $id_photo = 'owner-photo/' . basename($_FILES['id_photo']['name']);

//     $sql = "INSERT INTO owner (owner_id, full_name, email, password, phone_no, address, id_type, id_photo)
//             VALUES ('$owner_id', '$full_name', '$email', '$password', '$phone_no', '$address', '$id_type', '$id_photo')";
    
//     if ($db->query($sql) === TRUE) {
// 		header('location: owner-login.php');
//     } else {
//         echo "Error: " . $sql . "<br>" . $db->error;
//     }
// }
function owner_register() {
    global $owner_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db;
    
    if (isset($_FILES['id_photo'])) {
        $id_photo = 'owner-photo/' . $_FILES['id_photo']['name'];

        if (!empty($_FILES['id_photo'])) {
            $path = "owner-photo/";
            $path = $path . basename($_FILES['id_photo']['name']);
            if (move_uploaded_file($_FILES['id_photo']['tmp_name'], $path)) {
                echo "The file " . basename($_FILES['id_photo']['name']) . " has been uploaded";
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        }
    }
    
    $owner_id = validate($_POST['owner_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $phone_no = validate($_POST['phone_no']);
    $address = validate($_POST['address']);
    $id_type = validate($_POST['id_type']);
    $id_photo = 'owner-photo/' . basename($_FILES['id_photo']['name']);

    $sql = "INSERT INTO owner (owner_id, full_name, email, password, phone_no, address, id_type, id_photo)
            VALUES ('$owner_id', '$full_name', '$email', '$password', '$phone_no', '$address', '$id_type', '$id_photo')";
    
    if ($db->query($sql) === TRUE) {
		header('location: owner-login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

function owner_login() {
    global $email, $db;
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM owner WHERE email='$email' AND password='$password' LIMIT 1";
    $result = $db->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $logged_user = $data['email'];
        session_start();
        $_SESSION['email'] = $email;
        ob_end_clean();
        header('location:owner\owner-index.php');
        exit();
    } else {
        ?>
<style>
.alert {
    padding: 20px;
    background-color: #DC143C;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<div class="container">
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Incorrect Email/Password or not registered.</strong> Click here to <a href="owner-register.php"
            style="color: lightblue;"><b>Register</b></a>.
    </div>
</div>
<?php
    }
}

function owner_update() {
    global $owner_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db;
    $owner_id = validate($_POST['owner_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $phone_no = validate($_POST['phone_no']);
    $address = validate($_POST['address']);
    $id_type = validate($_POST['id_type']);

    $sql = "UPDATE owner SET full_name='$full_name', email='$email', phone_no='$phone_no', address='$address', id_type='$id_type' WHERE owner_id='$owner_id'";
    $query = mysqli_query($db, $sql);
    if (!empty($query)) {
        ?>
<style>
.alert {
    padding: 20px;
    background-color: #DC143C;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 2000);
</script>
<div class="container">
    <div class="alert" role='alert'>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <center><strong>Your Information has been updated.</strong></center>
    </div>
</div>
<?php
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>