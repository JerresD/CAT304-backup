<?php

include_once './includes/header.php';
include_once './includes/db_info.php';

?>


    <style>
        #back{
            text-decoration: none;
        }
        #next_due_date_label, #next_due_date{
           display: none;
        }
    </style>

    <h1 class="mt-4"><a id="back" href="record.php">&#8626;</a> Add New Vaccination Record</h1>

    <?php

    $user_id = 4;
    $input1 = $input2 = $input3 = $input4 = "";
    $input5 = $input6 = $input7 = $input8 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input1 = clean_input($_POST["vac_type"]);
    $input2 = clean_input($_POST["vac_date"]);
    $input3 = clean_input($_POST["vac_time"]);
    $input4 = clean_input($_POST["location"]);
    $input5 = clean_input($_POST["batch_no"]);
    $input6 = clean_input($_POST["comment"]);
    $input7 = clean_input($_POST["next_due_select"]);
    $input8 = clean_input($_POST["next_due_date"]);

    if ($input7 != "Date") {
    $input8 = "";
    }

    echo "Input1: " . $input1 . "<br />";
    echo "Input2: " . $input2 . "<br />";
    echo "Input3: " . $input3 . "<br />";
    echo "Input4: " . $input4 . "<br />";
    echo "Input5: " . $input5 . "<br />";
    echo "Input6: " . $input6 . "<br />";
    echo "Input7: " . $input7 . "<br />";
    echo "Input8: " . $input8 . "<br />";

    if ($input1 != ""){
        insert_vac_rec($input1,$input2,$input3,$input4,$input5,$input6,$input7,$input8,$user_id);
    }

}


    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="was-validated" method="post">
        <div class="mb-3">
            <label for="vac_type" class="form-label">Vaccine For:</label>
            <select class="form-select" id="vac_type" name="vac_type">
                <option>Chickenpox/Shingles</option>
                <option>COVID-19</option>
                <option>Measles</option>
                <option>Polio</option>
            </select>
            <label for="vac_date" class="form-label">Date:</label>
            <input type="date" required class="form-control" id="vac_date" name="vac_date">
            <label for="vac_time" class="form-label">Time:</label>
            <input type="time" class="form-control" id="vac_time" name="vac_time" />
            <label for="location" class="form-label">Location:</label>
            <input type="text"  class="form-control" id="location" placeholder="Enter facility location" name="location">
            <label for="batch_no" class="form-label">Batch No:</label>
            <input type="text" class="form-control" id="batch_no" placeholder="Enter batch no" name="batch_no">
            <label for="comment" class="form-label">Comment:</label>
            <input type="text" class="form-control" id="comment" placeholder="Enter comment" name="comment">
            <label for="next_due_select" class="form-label">Next Due Date:</label>
            <select class="form-select" id="next_due_select" name="next_due_select" onchange="next_due_date_func()">
                <option>Not sure</option>
                <option>No further doses</option>
                <option>Date</option>
            </select>
            <label class="form-label" for="next_due_date" id="next_due_date_label">
                Date:
            </label>
            <input type="date" class="form-control" placeholder="Enter date"
                   id="next_due_date" name="next_due_date">

        </div>
        <input type="reset" class="btn btn-secondary" />
        <input type="submit" class="btn btn-primary" />
    </form>

    <script>
        function next_due_date_func(){

            let x0 = document.getElementById("next_due_select");
            let x1 = document.getElementById("next_due_date");
            let x2 = document.getElementById("next_due_date_label");

            if (x0.value == "Date"){
                x1.style.display = "block";
                x2.style.display = "block";
            }
            else{
                x1.style.display = "none";
                x2.style.display = "none";
            }
        }
    </script>

<?php include_once './includes/footer.php';

function insert_vac_rec($v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9){
    try{
        $v1 = strtoupper($v1);
        $v4 = strtoupper($v4);
        $v5 = strtoupper($v5);
        $v6 = strtoupper($v6);
        $v7 = strtoupper($v7);

        $conn       = db_conn();
        $sql        = $conn-> prepare("INSERT INTO sql6465341.vac_record 
    (vac_for, vac_date, vac_time, vac_location,vac_batch_id, vac_comment, vac_next_due_info, vac_next_due_date, user_id)
    VALUES (?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssssssi",$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9);
        $sql->execute();
        mysqli_close($conn);

        echo '<div class="alert alert-warning alert-dismissible">';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
        echo 'Successfully added a new record..';
        echo '</div>';

    }catch(Exception $e){
        log_error($e);
        echo '<div class="alert alert-danger alert-dismissible">';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
        echo 'Error: Failed to add a new record. Please try again. ' . $e;
        echo '</div>';
    }
}

?>