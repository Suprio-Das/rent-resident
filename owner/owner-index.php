<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
  exit();
}
include("navbar.php");
include("engine.php");
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/font-awesome.min.css">
    <style>
    table,
    th,
    td {
        border: 1px solid black !important;
        text-align: center !important;
    }

    th {
        font-size: 16px !important;
        text-align: center !important;
    }

    /* .active-btn {
        font-weight: bold !important;
        color: lightblue !important;
    } */

    .hide {
        display: none !important;
    }

    #add-bg {
        background: url("https://static.vecteezy.com/system/resources/thumbnails/023/308/330/small_2x/ai-generative-exterior-of-modern-luxury-house-with-garden-and-beautiful-sky-photo.jpg") !important;
        height: 150px;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-color: rgba(0, 0, 0, 0.547) !important;
        background-blend-mode: multiply !important;
    }
    </style>
</head>

<body class="bg-gray-200">
    <section class="mx-auto flex justify-center p-2 gradient-title">
        <div class="breadcrumbs min-w-sm text-lg">
            <ul>
                <li>
                    <a href="#profile" id="profile-tab" class="active-btn"><img
                            src="../images/profile-round-1345-svgrepo-com.svg" alt="" width="16px">&nbsp;Profile </a>
                </li>
                <li>
                    <a href="#add-property" id="add-property-tab"><img src="../images/property-main.png" alt=""
                            width="16px">&nbsp;Add Property
                    </a>
                </li>
                <li>
                    <a href="#view-property" id="view-property-tab"><img src="../images/search.png" alt="" width="28px">
                        View Property </a>
                </li>
                <li>
                    <a href="#update-property" id="update-property-tab"><img src="../images/update.png" alt=""
                            width="18px">&nbsp;Update Property </a>
                </li>
                <li>
                    <a href="#book-property" id="book-property-tab"><img src="../images/book.png" alt=""
                            width="18px">&nbsp;Book Property </a>
                </li>
            </ul>
        </div>
    </section>


    <section id="profile-section" class="mx-auto w-4/5 flex justify-center my-2 section">
        <?php 
    include("../config/config.php");
    $u_email = $_SESSION["email"];

    $sql = "SELECT * from owner where email='$u_email'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
    ?>
        <!--Profile card start-->
        <div class="card bg-white w-96 overflow-hidden  
                rounded-lg shadow-lg flex flex-col mb-5">
            <div class="card-image">
                <img src="../images/profile-bg.jpg" alt="Image" class="w-full h-48 object-cover rounded-t-lg" />
            </div>
            <div class="profile-image">
                <img src="../<?php echo $rows['id_photo']; ?>" alt="" class="z-10 w-36 h-36 relative mx-auto -mt-16  
                        block rounded-full border-4 border-white  
                        transition-transform duration-400  
                        transform hover:scale-110 shadow-lg" />
            </div>
            <div class="card-content text-center py-4 leading-9 flex flex-col divide-y-2">
                <h1 class="font-bold text-center hover:bg-slate-200"><?php echo $rows['full_name']; ?></h1>
                <div class="text-center w-full hover:bg-gray-200">
                    <p class="title"><b>Email</b> <?php echo $rows['email']; ?></p>
                    <p><b>Phone No.: </b><?php echo $rows['phone_no']; ?></p>
                </div>
                <p class="text-center w-full h-full hover:bg-gray-200"><?php echo $rows['address']; ?></p>
            </div>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold gradient-title p-2 rounded-3xl my-2 text-center text-white">
                        Update
                        Your
                        Profile!
                    </h3>
                    <form method="POST" class="p-2">
                        <div>
                            <label for="full_name" class="block font-bold">Full Name:</label>
                            <input type="hidden" value="<?php echo $rows['owner_id']; ?>" name="owner_id">
                            <input type="text" class="form-control" id="full_name"
                                value="<?php echo $rows['full_name']; ?>" name="full_name">
                            <input type="text" class="input input-bordered w-full max-w-xs" id="full_name"
                                value="<?php echo $rows['full_name']; ?>" name="full_name">
                        </div>
                        <div>
                            <label for="email" class="block font-bold">Email:</label>
                            <input type="email" class="input input-bordered w-full max-w-xs" id="email"
                                value="<?php echo $rows['email']; ?>" name="email" readonly>
                        </div>
                        <div>
                            <label for="phone_no" class="block font-bold">Phone No.:</label>
                            <input type="text" class="input input-bordered w-full max-w-xs" id="phone_no"
                                value="<?php echo $rows['phone_no']; ?>" name="phone_no">
                        </div>
                        <div>
                            <label for="address" class="block font-bold">Address:</label>
                            <input type="text" class="input input-bordered w-full max-w-xs" id="address"
                                value="<?php echo $rows['address']; ?>" name="address">
                        </div>
                        <div>
                            <label for="id_type" class="block font-bold">Type of ID:</label>
                            <input type="text" class="input input-bordered w-full max-w-xs"
                                value="<?php echo $rows['id_type']; ?>" name="id_type" readonly>
                        </div>
                        <div>
                            <label class="font-bold">Your Id:</label><br>
                            <img src="../<?php echo $rows['id_photo']; ?>" id="output_image" / height="100px" readonly>
                        </div>
                        <hr>
                        <center><button id="submit" name="owner_update"
                                class="btn gradient-title btn-block my-2 text-white text-xl">Update</button>
                        </center>
                        <br>

                    </form>

                </div>
            </dialog>
            <div class="">
                <button class="btn rounded-tl-none rounded-tr-none gradient-title text-white w-full"
                    onclick="my_modal_3.showModal()">Update
                    Profile</button>
            </div>
        </div>
        <?php 
        }
    } 
    ?>
    </section>

    <!-- Add property -->

    <section id="add-property-section" class="w-[90%] section hide mx-auto mb-12">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Add Property</h3>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div>
                    <label for="country" class="label">
                        <span class="label-text">Country:</span>
                    </label>
                    <select class="select select-bordered w-full" name="country" required>
                        <option value="">--Select Country--</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                </div>
                <div>
                    <label for="district" class="label">
                        <span class="label-text">District:</span>
                    </label>
                    <select class="select select-bordered w-full" name="district" required>
                        <option value="">--Select District--</option>
                        <option value="Bagerhat">Bagerhat</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Bogura">Bogura</option>
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Cumilla">Cumilla</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Feni">Feni</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Habiganj">Habiganj</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Jashore">Jashore</option>
                        <option value="Jhalokathi">Jhalokathi</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Joypurhat">Joypurhat</option>
                        <option value="Khagrachari">Khagrachari</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Magura">Magura</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Meherpur">Meherpur</option>
                        <option value="Moulvibazar">Moulvibazar</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Natore">Natore</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Panchagarh">Panchagarh</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Thakurgaon">Thakurgaon</option>

                    </select>
                </div>
                <div>
                    <label for="city" class="label">
                        <span class="label-text">City:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="city" placeholder="Enter City"
                        name="city">
                </div>
                <div>
                    <label for="vdc_municipality" class="label">
                        <span class="label-text">VDC/Municipality:</span>
                    </label>
                    <select class="select select-bordered w-full" name="vdc_municipality">
                        <option value="">--Select VDC/Municipality--</option>
                        <option value="VDC">VDC</option>
                        <option value="Municipality">Municipality</option>
                    </select>
                </div>
                <div>
                    <label for="ward_no" class="label">
                        <span class="label-text">Ward No.:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="ward_no" placeholder="Enter Ward No."
                        name="ward_no">
                </div>
                <div>
                    <label for="tole" class="label">
                        <span class="label-text">Tole:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="tole" placeholder="Enter Tole"
                        name="tole">
                </div>
                <div>
                    <label for="contact_no" class="label">
                        <span class="label-text">Contact No.:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="contact_no"
                        placeholder="Enter Contact No." name="contact_no">
                </div>
                <div>
                    <label for="property_type" class="label">
                        <span class="label-text">Property Type:</span>
                    </label>
                    <select class="select select-bordered w-full" name="property_type">
                        <option value="">--Select Property Type--</option>
                        <option value="Full House Rent">Full House Rent</option>
                        <option value="Flat Rent">Flat Rent</option>
                        <option value="Room Rent">Room Rent</option>
                    </select>
                </div>
                <div>
                    <label for="estimated_price" class="label">
                        <span class="label-text">Estimated Price:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="estimated_price"
                        placeholder="Enter Estimated Price" name="estimated_price">
                </div>
                <div>
                    <label for="total_rooms" class="label">
                        <span class="label-text">Total No. of Rooms:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="total_rooms"
                        placeholder="Enter Total No. of Rooms" name="total_rooms">
                </div>
                <div>
                    <label for="bedroom" class="label">
                        <span class="label-text">No. of Bedroom:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="bedroom"
                        placeholder="Enter No. of Bedroom" name="bedroom">
                </div>
                <div>
                    <label for="living_room" class="label">
                        <span class="label-text">No. of Living Room:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="living_room"
                        placeholder="Enter No. of Living Room" name="living_room">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <div>
                    <label for="kitchen" class="label">
                        <span class="label-text">No. of Kitchen:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="kitchen"
                        placeholder="Enter No. of Kitchen" name="kitchen">
                </div>
                <div>
                    <label for="bathroom" class="label">
                        <span class="label-text">No. of Bathroom/Washroom:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="bathroom"
                        placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-1">
                <div>
                    <label class="label" for="p_photo[]">
                        <span class="label-text">Photos:</span>
                    </label>
                    <input type="file" name="p_photo" class="file-input file-input-bordered w-full flex-1 name_list"
                        accept="image/*">
                </div>

            </div>
            <div class="w-full">
                <label for="description" class="label">
                    <span class="label-text">Full Description:</span>
                </label>
                <textarea class="textarea textarea-bordered w-full" id="description"
                    placeholder="Enter Property Description" name="description"></textarea>
            </div>
            <div class="form-control">
                <input type="submit" class="btn gradient-title w-full my-2" value="Add Property" name="add_property">
            </div>
        </form>
    </section>

    <!-- View Property -->
    <section id="view-property-section" class="w-[90%] section hide mx-auto h-screen">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">View Property</h3>
        </div>
        <div class="font-sans overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 whitespace-nowrap text-xl">
                    <tr>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Id.
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Country
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            District
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            City
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            VDC/Municipality
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Ward No.
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Tole
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Contact No.
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Property Type
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Estimated Price
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Total Rooms
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Bedroom
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Living Room
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Kitchen
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Bathroom
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Description
                        </th>
                        <th class="p-4 text-left text-xs font-semibold text-gray-800">
                            Photos
                        </th>
                    </tr>
                </thead>

                <tbody class="whitespace-nowrap">
                    <?php 
                $u_email=$_SESSION['email'];
        $sql1="SELECT * from owner where email='$u_email'";
        $result1=mysqli_query($db,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

        $sql="SELECT * from add_property where owner_id='$owner_id'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          $property_id=$rows['property_id'];
       ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['property_id'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['country'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['district'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['city'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['vdc_municipality'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['ward_no'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['tole'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['contact_no'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['property_type'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            BDT. <?php echo $rows['estimated_price'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['total_rooms'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['bedroom'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['living_room'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['kitchen'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['bathroom'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php echo $rows['description'] ?>
                        </td>
                        <td class="p-4 text-[15px] text-gray-800">
                            <?php $sql2="SELECT * from property_photo where property_id='$property_id'";
        $query=mysqli_query($db,$sql2);

        if(mysqli_num_rows($query)>0)
      {
          while($row=mysqli_fetch_assoc($query)){ ?>
                            <img src="<?php echo $row['p_photo'] ?>" width="50px">
                            <?php }}}}}} ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Update Property -->
    <section id="update-property-section" class="w-[90%] section hide mx-auto">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Update Property</h3>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div>
                    <label for="country" class="label">
                        <span class="label-text">Country:</span>
                    </label>
                    <select class="select select-bordered w-full" name="country" required readonly>
                        <option value="">--Select Country--</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                </div>
                <div>
                    <label for="district" class="label">
                        <span class="label-text">District:</span>
                    </label>
                    <select class="select select-bordered w-full" name="district" required readonly>
                        <option value="">--Select District--</option>
                        <option value="Bagerhat">Bagerhat</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Bogura">Bogura</option>
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Cumilla">Cumilla</option>
                        <option value="Cox's Bazar">Cox's Bazar</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Feni">Feni</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Habiganj">Habiganj</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Jashore">Jashore</option>
                        <option value="Jhalokathi">Jhalokathi</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Joypurhat">Joypurhat</option>
                        <option value="Khagrachari">Khagrachari</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Magura">Magura</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Meherpur">Meherpur</option>
                        <option value="Moulvibazar">Moulvibazar</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Natore">Natore</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Panchagarh">Panchagarh</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Thakurgaon">Thakurgaon</option>

                    </select>
                </div>
                <div>
                    <label for="city" class="label">
                        <span class="label-text">City:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="city" placeholder="Enter City"
                        name="city" value="">
                </div>
                <div>
                    <label for="vdc_municipality" class="label">
                        <span class="label-text">VDC/Municipality:</span>
                    </label>
                    <select class="select select-bordered w-full" name="vdc_municipality">
                        <option value="">--Select VDC/Municipality--</option>
                        <option value="VDC">VDC</option>
                        <option value="Municipality">Municipality</option>
                    </select>
                </div>
                <div>
                    <label for="ward_no" class="label">
                        <span class="label-text">Ward No.:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="ward_no" placeholder="Enter Ward No."
                        name="ward_no">
                </div>
                <div>
                    <label for="tole" class="label">
                        <span class="label-text">Tole:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="tole" placeholder="Enter Tole"
                        name="tole">
                </div>
                <div>
                    <label for="contact_no" class="label">
                        <span class="label-text">Contact No.:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" id="contact_no"
                        placeholder="Enter Contact No." name="contact_no">
                </div>
                <div>
                    <label for="property_type" class="label">
                        <span class="label-text">Property Type:</span>
                    </label>
                    <select class="select select-bordered w-full" name="property_type">
                        <option value="">--Select Property Type--</option>
                        <option value="Full House Rent">Full House Rent</option>
                        <option value="Flat Rent">Flat Rent</option>
                        <option value="Room Rent">Room Rent</option>
                    </select>
                </div>
                <div>
                    <label for="estimated_price" class="label">
                        <span class="label-text">Estimated Price:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="estimated_price"
                        placeholder="Enter Estimated Price" name="estimated_price">
                </div>
                <div>
                    <label for="total_rooms" class="label">
                        <span class="label-text">Total No. of Rooms:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="total_rooms"
                        placeholder="Enter Total No. of Rooms" name="total_rooms">
                </div>
                <div>
                    <label for="bedroom" class="label">
                        <span class="label-text">No. of Bedroom:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="bedroom"
                        placeholder="Enter No. of Bedroom" name="bedroom">
                </div>
                <div>
                    <label for="living_room" class="label">
                        <span class="label-text">No. of Living Room:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="living_room"
                        placeholder="Enter No. of Living Room" name="living_room">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <div>
                    <label for="kitchen" class="label">
                        <span class="label-text">No. of Kitchen:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="kitchen"
                        placeholder="Enter No. of Kitchen" name="kitchen">
                </div>
                <div>
                    <label for="bathroom" class="label">
                        <span class="label-text">No. of Bathroom/Washroom:</span>
                    </label>
                    <input type="number" class="input input-bordered w-full" id="bathroom"
                        placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                </div>
            </div>
            <div class="w-full">
                <label for="description" class="label">
                    <span class="label-text">Full Description:</span>
                </label>
                <textarea class="textarea textarea-bordered w-full" id="description"
                    placeholder="Enter Property Description" name="description"></textarea>
            </div>
            <div class="form-control">
                <input type="submit" class="btn gradient-title w-full my-2" value="Update Property" name="add_property">
            </div>
        </form>
    </section>

    <!-- Booked Property Section -->
    <section id="book-property-section" class="w-[90%] section hide mx-auto my-3 h-screen">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Booked Property</h3>

            <div class="mb-4">
                <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..."
                    title="Type in a name"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-2 border-blue-500 rounded-lg shadow-md"
                    border="2px solid black">
                    <thead>
                        <tr class="bg-blue-500 text-white text-center">
                            <th class="py-3 px-6">Booked By</th>
                            <th class="py-3 px-6">Booker Address</th>
                            <th class="py-3 px-6">Property District</th>
                            <th class="py-3 px-6">Property Ward No</th>
                            <th class="py-3 px-6">Property Tole</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php 
                    include("../config/config.php");
                    $u_email = $_SESSION["email"];

                    $sql3 = "SELECT * FROM owner WHERE email='$u_email'";
                    $result3 = mysqli_query($db, $sql3);

                    if (mysqli_num_rows($result3) > 0) {
                        while ($rowss = mysqli_fetch_assoc($result3)) {
                            $owner_id = $rowss['owner_id'];

                            $sql2 = "SELECT * FROM add_property WHERE owner_id='$owner_id'";
                            $result2 = mysqli_query($db, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                while ($ro = mysqli_fetch_assoc($result2)) {
                                    $property_id = $ro['property_id'];

                                    $sql = "SELECT * FROM booking WHERE property_id='$property_id'";
                                    $result = mysqli_query($db, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            $tenant_id = $rows['tenant_id'];
                                            $sql1 = "SELECT * FROM tenant WHERE tenant_id='$tenant_id'";
                                            $result1 = mysqli_query($db, $sql1);

                                            if (mysqli_num_rows($result1) > 0) {
                                                while ($row = mysqli_fetch_assoc($result1)) {
                    ?>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6"><?php echo $row['full_name']; ?></td>
                            <td class="py-3 px-6"><?php echo $row['address']; ?></td>
                            <td class="py-3 px-6"><?php echo $ro['district']; ?></td>
                            <td class="py-3 px-6"><?php echo $ro['ward_no']; ?></td>
                            <td class="py-3 px-6"><?php echo $ro['tole']; ?></td>
                        </tr>
                        <?php }}}}}}}} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <?php
    include('footer.php');
    ?>

    <script>
    const sections = document.querySelectorAll('.section');
    const tabs = document.querySelectorAll('.breadcrumbs a');

    tabs.forEach(tab => {
        tab.addEventListener('click', event => {
            event.preventDefault();

            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('bg-blue-600'));
            tabs.forEach(t => t.classList.remove('px-2'));
            tabs.forEach(t => t.classList.remove('py-1'));
            tabs.forEach(t => t.classList.remove('rounded-full'));

            // Add active class to the clicked tab
            tab.classList.add('bg-blue-600');
            tab.classList.add('px-2');
            tab.classList.add('py-1');
            tab.classList.add('rounded-full');

            // Hide all sections
            sections.forEach(section => section.classList.add('hide'));

            // Show the target section
            const targetId = tab.getAttribute('href').substring(1) + '-section';
            document.getElementById(targetId).classList.remove('hide');
        });
    });

    // Show the Profile section by default
    document.getElementById('profile-section').classList.remove('hide');
    </script>

</body>

</html>

<!-- <script>
function viewProperty() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    th = table.getElementsByTagName("th");
    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        for (var j = 0; j < th.length; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}
</script> -->
<!-- <script>
function updateProperty() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    th = table.getElementsByTagName("th");
    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        for (var j = 0; j < th.length; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}
</script> -->
<!-- <script>
// function bookedProperty() {
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("myTable");
//     tr = table.getElementsByTagName("tr");
//     th = table.getElementsByTagName("th");
//     for (i = 1; i < tr.length; i++) {
//         tr[i].style.display = "none";
//         for (var j = 0; j < th.length; j++) {
//             td = tr[i].getElementsByTagName("td")[j];
//             if (td) {
//                 if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
//                     tr[i].style.display = "";
//                     break;
//                 }
//             }
//         }
//     }
// }
</script> -->