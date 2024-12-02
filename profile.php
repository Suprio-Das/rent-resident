<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
include('navbar.php');
include('tenant-engine.php');
 ?>
<style>
.gradient-title {
    background: #fc00ff;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #00dbde, #fc00ff);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

button:hover,
a:hover {
    opacity: 0.7;
}

.form-group {
    text-align: left;
}
</style>
<h3 class="gradient-title text-2xl p-2 font-bold text-center text-white">Tenant Profile</h3>
<div class="mx-auto w-4/5 flex justify-center my-2">
    <?php 
        include("config/config.php");
        $u_email= $_SESSION["email"];

        $sql="SELECT * from tenant where email='$u_email'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
    <!-- profile card -->
    <div class="card bg-white w-96 overflow-hidden  
                rounded-lg shadow-lg flex flex-col">
        <div class="card-image">
            <img src="./images/profile-bg.jpg" alt="Image" class="w-full h-48 object-cover rounded-t-lg" />
        </div>
        <div class="profile-image">
            <img src="./<?php echo $rows['id_photo']; ?>" alt="" class="z-10 w-36 h-36 relative mx-auto -mt-16  
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
                        <input type="hidden" value="<?php echo $rows['tenant_id']; ?>" name="tenant_id">
                        <!-- <input type="text" class="form-control" id="full_name" value="<?php echo $rows['full_name']; ?>"
                            name="full_name"> -->
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
                        <label class="font-bold">Your Id:</label><br>
                        <img src="<?php echo $rows['id_photo']; ?>" id="output_image" / class="w-16 border border-black" readonly>
                    </div>
                    <hr>
                    <center><button id="submit" name="tenant_update"
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
</div>

<?php }} ?>