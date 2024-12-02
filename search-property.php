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

<body>
    <h3 class="gradient-title text-2xl p-2 font-bold text-center text-white">Searched Properties</h3>
    <?php 
$q_string = $_POST['search_property'];
$sql="SELECT * FROM add_property where concat(city,tole,property_type,country,estimated_price) like '%$q_string%'";
    $query=mysqli_query($db,$sql);
    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['property_id'];
        $price = $rows['estimated_price'];

?>
    <section class="w-[95%] mx-auto my-5 booking_section p-5">

        <?php

        $sql2="SELECT * FROM property_photo where property_id='$property_id'";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo']; }?>
        <div class="card bg-slate-200 w-96 mx-auto">
            <figure>
                <img src="owner/<?php echo $photo; ?>" alt="Property Image">
            </figure>
            <div class="card-body">
                <h2 class="card-title"><img src="./images/home-overview.svg" alt="" class="w-5">
                    <?php echo $rows['property_type']; ?></h2>
                <p class="flex gap-2"><img src="./images/location.svg" alt="" class="w-5">
                    <?php echo $rows['city'].', '.$rows['country'] ?></p>
                <p class="flex gap-2"><img src="./images/price-overview.svg" alt="" class="w-5">
                    <?php echo $price ?>Tk.
                </p>
                <div class="card-actions justify-end">
                    <?php echo '<a href="view-property.php?property_id='.$rows['property_id'].'"  class="btn gradient-title" >View Property </a>'; ?>
                </div>
            </div>
        </div>

    </section>

</body>

</html>


<?php 

}
    }

    else{
    	echo "<center><h3 class='flex justify-center items-center h-screen text-rose-700 text-2xl'>Searched Property not found...</h3></center>";
    }
    ?>