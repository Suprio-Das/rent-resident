<?php 
session_start();
isset($_SESSION["email"]);
include("navbar.php");


 ?>

<?php 
include("config/config.php");
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
    .booking_section {
        background-image: url('https://img.freepik.com/free-photo/photorealistic-house-with-wooden-architecture-timber-structure_23-2151302742.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        ;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
    }
    </style>
</head>

<body style="background-color: #f2f2f2;">
    <h3 class="gradient-title text-2xl p-2 font-bold text-center text-white">Booked Properties</h3>
    <?php 
        $u_email=$_SESSION['email'];
        $sql3="SELECT * from tenant where email='$u_email'";
        $result3=mysqli_query($db,$sql3);

        if(mysqli_num_rows($result3)>0){
          while($rowss=mysqli_fetch_assoc($result3)){
            $tenant_id=$rowss['tenant_id'];

            $sql1="SELECT * FROM booking where tenant_id='$tenant_id'";
            $query1=mysqli_query($db,$sql1);
            if(mysqli_num_rows($query1)>0)
            {
              while ($ro=mysqli_fetch_assoc($query1)) {
                $prop_id=$ro['property_id'];

              $sql="SELECT * FROM add_property where property_id='$prop_id'";
                  $query=mysqli_query($db,$sql);
                  if(mysqli_num_rows($query)>0)
                  {
                    while ($rows=mysqli_fetch_assoc($query)) {
                      $property_id=$rows['property_id'];
                      $price = $rows['estimated_price'];

              ?>
    <!-- booked property -->
    <section class="w-[95%] mx-auto my-5 booking_section p-5">
        <?php
        $sql2="SELECT * FROM property_photo WHERE property_id='$property_id'";
        $query2=mysqli_query($db,$sql2);

        if(mysqli_num_rows($query2) > 0) {
            $row = mysqli_fetch_assoc($query2); 
            $photo = $row['p_photo']; 
        ?>

        <div class="card bg-slate-200 w-96 mx-auto">
            <figure>
                <img src="owner/<?php echo $photo; ?>" alt="Property Image">
            </figure>
            <div class="card-body">
                <h2 class="card-title"><img src="./images/home-overview.svg" alt="" class="w-5">
                    <?php echo $rows['property_type']; ?></h2>
                <p class="flex gap-2"><img src="./images/location.svg" alt="" class="w-5">
                    <?php echo $rows['city'].', '.$rows['country'] ?></p>
                <p class="flex gap-2"><img src="./images/price-overview.svg" alt="" class="w-5"> <?php echo $price ?>Tk.
                </p>
                <div class="card-actions justify-end">
                    <?php echo '<a href="view-property.php?property_id='.$rows['property_id'].'"  class="btn gradient-title" >View Property </a>'; ?>
                </div>
            </div>
        </div>

        <?php } else { ?>
        <div>
            <p>No image available for this property.</p>
        </div>
        <?php } ?>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>

</body>

</html>


<?php 

}
    }

    else{
    	echo "<center><h3>Booked Property not found...</h3></center>";
    }
  }}}}
    ?>