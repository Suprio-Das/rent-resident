<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}

include("navbar.php");

 ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <style>
    .hide {
        display: none !important;
    }

    .active-tab {
        background-color: #2563eb;
        /* Tailwind blue-600 */
        padding: 0.25rem 0.5rem;
        /* Tailwind px-2 py-1 */
        border-radius: 9999px;
        /* Tailwind rounded-full */
    }
    </style>
</head>

<body>

    <section class="mx-auto flex justify-center p-2 gradient-title">
        <div class="breadcrumbs min-w-sm text-lg">
            <ul>

                <li>
                    <a href="#property-details" id="property-details-tab"><img src="../images/property-main.png" alt=""
                            width="16px">&nbsp;Property Details
                    </a>
                </li>
                <li>
                    <a href="#owner-details" id="owner-tab" class="active-btn"><img
                            src="../images/profile-round-1345-svgrepo-com.svg" alt="" width="16px">&nbsp;Owner Details
                    </a>
                </li>
                <li>
                    <a href="#tenant-details" id="tenant-tab" class="active-btn"><img
                            src="../images/profile-round-1345-svgrepo-com.svg" alt="" width="16px">&nbsp;Tenant Details
                    </a>
                </li>
                <li>
                    <a href="#booked-property" id="booked-property-tab"><img src="../images/book.png" alt=""
                            width="18px">&nbsp;Book Property </a>
                </li>
            </ul>
        </div>
    </section>


    <!-- Property Details -->
    <section id="property-details-section" class="w-[90%] section hide mx-auto my-3 h-screen">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Property Details</h3>

            <div class="mb-4">
                <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..."
                    title="Type in a name"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-2 border-blue-500 rounded-lg shadow-md"
                    border="2px solid black">
                    <thead class="whitespace-nowrap text-md">
                        <tr class="bg-blue-500 text-white text-center">
                            <th class="py-3 px-6">ID</th>
                            <th class="py-3 px-6">Country</th>
                            <th class="py-3 px-6">District</th>
                            <th class="py-3 px-6">City</th>
                            <th class="py-3 px-6">VDC/Municipality</th>
                            <th class="py-3 px-6">Ward No.</th>
                            <th class="py-3 px-6">Tole</th>
                            <th class="py-3 px-6">Contact No.</th>
                            <th class="py-3 px-6">Property Type</th>
                            <th class="py-3 px-6">Estmated Price</th>
                            <th class="py-3 px-6">Total Rooms</th>
                            <th class="py-3 px-6">Bedroom</th>
                            <th class="py-3 px-6">Living Room</th>
                            <th class="py-3 px-6">Kitchen</th>
                            <th class="py-3 px-6">Bathroom</th>
                            <th class="py-3 px-6">Description</th>
                            <th class="py-3 px-6">Photos</th>
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap text-center">
                        <?php 
        include("../config/config.php");

        $sql="SELECT * from add_property";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          $property_id=$rows['property_id'];
       ?>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6"><?php echo $rows['property_id'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['country'] ?></td>

                            <td class="py-3 px-6"><?php echo $rows['district'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['city'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['vdc_municipality'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['ward_no'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['tole'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['contact_no'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['property_type'] ?></td>

                            <td class="py-3 px-6">Rs.<?php echo $rows['estimated_price'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['total_rooms'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['bedroom'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['living_room'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['kitchen'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['bathroom'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['description'] ?></td>
                            <td>
                                <?php $sql2="SELECT * from property_photo where property_id='$property_id'";
        $query=mysqli_query($db,$sql2);

        if(mysqli_num_rows($query)>0)
      {
          while($row=mysqli_fetch_assoc($query)){ ?>
                                <img src="../owner/<?php echo $row['p_photo'] ?>" width="50px">
                                <?php }}}} ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Owner Details -->
    <section id="owner-details-section" class="w-[90%] section hide mx-auto my-3 h-screen">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Owner Details</h3>

            <div class="mb-4">
                <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..."
                    title="Type in a name"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-2 border-blue-500 rounded-lg shadow-md"
                    border="2px solid black">
                    <thead class="whitespace-nowrap text-md">
                        <tr class="bg-blue-500 text-white text-center">
                            <th class="py-3 px-6">Id.</th>
                            <th class="py-3 px-6">Full Name</th>
                            <th class="py-3 px-6">Email</th>
                            <th class="py-3 px-6">Encrypted Password</th>
                            <th class="py-3 px-6">Phone No.</th>
                            <th class="py-3 px-6">Address</th>
                            <th class="py-3 px-6">Id Photo</th>
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap text-center">
                        <?php 
        include("../config/config.php");

        $sql="SELECT * from owner";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6"><?php echo $rows['owner_id'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['full_name'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['email'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['password'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['phone_no'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['address'] ?></td>
                            <td class="py-3 px-6"><img id="myImg" src="../<?php echo $rows['id_photo'] ?>" width="50px">
                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Tenant Details -->
    <section id="tenant-details-section" class="w-[90%] section hide mx-auto my-3 h-screen">
        <div>
            <h3 class="text-2xl font-semibold text-center my-6">Tenant Details</h3>

            <div class="mb-4">
                <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..."
                    title="Type in a name"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-2 border-blue-500 rounded-lg shadow-md"
                    border="2px solid black">
                    <thead class="whitespace-nowrap text-md">
                        <tr class="bg-blue-500 text-white text-center">
                            <th class="py-3 px-6">Id.</th>
                            <th class="py-3 px-6">Full Name</th>
                            <th class="py-3 px-6">Email</th>
                            <th class="py-3 px-6">Encrypted Password</th>
                            <th class="py-3 px-6">Phone No.</th>
                            <th class="py-3 px-6">Address</th>
                            <th class="py-3 px-6">Id Photo</th>
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap text-center">
                        <?php 
        include("../config/config.php");
        

        $sql="SELECT * from tenant";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6"><?php echo $rows['tenant_id'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['full_name'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['email'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['password'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['phone_no'] ?></td>
                            <td class="py-3 px-6"><?php echo $rows['address'] ?></td>
                            <td class="py-3 px-6"><img id="myImg" src="../<?php echo $rows['id_photo'] ?>" width="50px">
                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Booked Property -->
    <section id="booked-property-section" class="w-[90%] section hide mx-auto my-3 h-screen">
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
                    <thead class="whitespace-nowrap text-md">
                        <tr class="bg-blue-500 text-white text-center">
                            <th class="py-3 px-6">Booked Id</th>
                            <th class="py-3 px-6">Booked By</th>
                            <th class="py-3 px-6">Booker Address</th>
                            <th class="py-3 px-6">Property District</th>
                            <th class="py-3 px-6">Property Ward No</th>
                            <th class="py-3 px-6">Property Tole</th>
                            <th class="py-3 px-6">Property Owner</th>
                            <th class="py-3 px-6">Owner Address</th>
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap text-center">
                        <?php 
        include("../config/config.php");
        

        $sql="SELECT * from booking";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-6">
                                <?php echo $rows['booking_id'] ?></td>
                            <?php 
                            $tenant_id=$rows['tenant_id'];
                            $property_id=$rows['property_id'];
                            $sql1="SELECT * from tenant where tenant_id='$tenant_id'";
                            $result1=mysqli_query($db,$sql1);

                            if(mysqli_num_rows($result1)>0)
                          {
                              while($row=mysqli_fetch_assoc($result1)){
                              ?>

                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <?php 
                              $sql2="SELECT * from add_property where property_id='$property_id'";
                              $result2=mysqli_query($db,$sql2);

                              if(mysqli_num_rows($result2)>0)
                            {
                                while($ro=mysqli_fetch_assoc($result2)){
                                
                            ?>
                            <td class="py-3 px-6"><?php echo $ro['district']; ?></td>
                            <td class="py-3 px-6"><?php echo $ro['ward_no']; ?></td>
                            <td class="py-3 px-6"><?php echo $ro['tole']; ?></td>

                            <?php 
            $owner_id=$ro['owner_id'];
            $sql3="SELECT * from owner where owner_id='$owner_id'";
            $result3=mysqli_query($db,$sql3);

            if(mysqli_num_rows($result3)>0)
          {
              while($rowss=mysqli_fetch_assoc($result3)){
              
           ?>
                            <td><?php echo $rowss['full_name']; ?></td>
                            <td><?php echo $rowss['address']; ?></td>
                        </tr>
                        <?php }}}}}}}} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</body>

</html>
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
document.getElementById('property-details-section').classList.remove('hide');
</script>