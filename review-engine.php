<?php 

include ("config/config.php");

if(isset($_POST['review'])){
    review();
}

function review(){
    global $db;

    $property_id = $_POST['property_id']; 
    $comment = mysqli_real_escape_string($db, $_POST['comment']);
    $rating = intval($_POST['rating']);
    $viewer_id = $_POST['viewer_id'];

    // Check if the property_id is valid
    if (!empty($property_id) && !empty($comment) && !empty($rating)) {
        $sql = "INSERT INTO review(comment, rating, property_id, tenant_id) VALUES ('$comment', '$rating', '$property_id', '$viewer_id')";
        $query = mysqli_query($db, $sql);

        if ($query) {
            // Success alert
            echo '<div class="container">
                    <div class="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                      <strong>Your review has been recorded.</strong>
                    </div>
                  </div>';

            // Redirect to the dynamic page after successful submission
            header("Location: view-property.php?property_id=" . $property_id);
            exit(); // Ensure no further code is executed after the redirect
        } else {
            // Error alert
            echo '<div class="container">
                    <div class="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                      <strong>Error: Could not submit your review.</strong>
                    </div>
                  </div>';
        }
    } else {
        // Input validation error
        echo '<div class="container">
                <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                  <strong>Please provide valid input for all fields.</strong>
                </div>
              </div>';
    }
}

?>