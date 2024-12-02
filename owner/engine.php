<?php 
$property_id = '';
$country = '';
$district = '';
$city = '';
$vdc_municipality = '';
$ward_no = '';
$tole = '';
$contact_no = '';
$property_type = '';
$estimated_price = '';
$total_rooms = '';
$bedroom = '';
$living_room = '';
$kitchen = '';
$bathroom = '';
$description = '';
$booked = '';
$owner_id = '';

$db = new mysqli('localhost', 'root', '', 'rentresident');

if ($db->connect_error) {
    echo "Error connecting database";
}

if (isset($_POST['add_property'])) {
    add_property();
}

if (isset($_POST['owner_update'])) {
    owner_update();
}

function add_property() {
    global $property_id, $country, $district, $city, $vdc_municipality, $ward_no, $tole, $contact_no, $property_type, $estimated_price, $total_rooms, $bedroom, $living_room, $kitchen, $bathroom, $description, $booked, $owner_id, $db;

    $country = validate($_POST['country']);
    $district = validate($_POST['district']);
    $city = validate($_POST['city']);
    $vdc_municipality = validate($_POST['vdc_municipality']);
    $ward_no = validate($_POST['ward_no']);
    $tole = validate($_POST['tole']);
    $contact_no = validate($_POST['contact_no']);
    $property_type = validate($_POST['property_type']);
    $estimated_price = validate($_POST['estimated_price']);
    $total_rooms = validate($_POST['total_rooms']);
    $bedroom = validate($_POST['bedroom']);
    $living_room = validate($_POST['living_room']);
    $kitchen = validate($_POST['kitchen']);
    $bathroom = validate($_POST['bathroom']);
    $description = validate($_POST['description']);
    $booked = 'No';

    $u_email = $_SESSION['email'];
    $sql1 = "SELECT * FROM owner WHERE email='$u_email'";
    $result1 = mysqli_query($db, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        while ($rowss = mysqli_fetch_assoc($result1)) {
            $owner_id = $rowss['owner_id'];

            $sql = "INSERT INTO add_property(country, district, city, vdc_municipality, ward_no, tole, contact_no, property_type, estimated_price, total_rooms, bedroom, living_room, kitchen, bathroom, description, booked, owner_id) 
                    VALUES('$country', '$district', '$city', '$vdc_municipality', '$ward_no', '$tole', '$contact_no', '$property_type', '$estimated_price', '$total_rooms', '$bedroom', '$living_room', '$kitchen', '$bathroom', '$description', '$booked', '$owner_id')";
            $query = mysqli_query($db, $sql);

            $property_id = mysqli_insert_id($db);

            if ($_FILES['p_photo']['tmp_name'] != "") {
                $path = "product-photo/" . $_FILES['p_photo']['name'];
                if (move_uploaded_file($_FILES['p_photo']['tmp_name'], $path)) {
                    $sql2 = "INSERT INTO property_photo(p_photo, property_id) VALUES('$path', '$property_id')";
                    $query = mysqli_query($db, $sql2);

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
        <center><strong>Your Product has been uploaded.</strong></center>
    </div>
</div>
<?php
                    } else {
                        echo "Error uploading property details.";
                    }
                }
            }

            // Redirect to the same page to prevent resubmission
            header("Location: owner-index.php");
            exit();
        }
    }
}

function owner_update() {
    global $owner_id, $full_name, $email, $phone_no, $address, $id_type, $id_photo, $errors, $db;
    $owner_id = validate($_POST['owner_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $phone_no = validate($_POST['phone_no']);
    $address = validate($_POST['address']);
    $id_type = validate($_POST['id_type']);
    
    $sql = "UPDATE owner SET full_name='$full_name', email='$email', phone_no='$phone_no', address='$address' WHERE owner_id='$owner_id'";
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