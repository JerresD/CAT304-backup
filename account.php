<?php include 'f01_header.php'; ?>

    <h1 class="mt-4">View/Update Account</h1>

    <form action="./" class="was-validated" method="post">
        <div class="mb-3">
            <label for="acc_status" class="form-label">Account Status:</label>
            <input type="text" disabled required class="form-control" id="acc_status" name="acc_status"
                   placeholder="Unverified">
            <label for="official_id" class="form-label">MyKad / Passport:</label>
            <input type="text" disabled required class="form-control" id="official_id" name="official_id"
                   placeholder="<?php echo $user_data['mykad']; ?>">
            <label for="fname" class="form-label">Full Name:</label>
            <input type="text" required class="form-control" id="fname" placeholder="<?php echo $user_data['name']; ?>" name="fname">

            <label for="citizenship" class="form-label">Citizenship:</label>
            <input type="text" required class="form-control" id="citizenship" placeholder="<?php echo $user_data['citizenship']; ?>" name="citizenship">

            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="text" required disabled class="form-control" id="dob" name="dob"
                   placeholder="<?php echo $user_data['birthdate']; ?>" onfocus="(this.type='date')">

            <label for="address" class="form-label">Current Address:</label>
            <input type="text" required class="form-control" id="address" placeholder="<?php echo $user_data['address']; ?>" name="address">
            <label for="email" class="form-label">Email:</label>
            <input type="email" required class="form-control" id="email" placeholder="<?php echo $user_data['email']; ?>" name="email">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" required class="form-control" id="pwd" placeholder="<?php echo $user_data['password']; ?>" name="pwd">

        </div>
        <input type="reset" class="btn btn-secondary" />
        <input type="button" value="Update Account " class="btn btn-primary" />
        <input type="button" value="Verify Account" class="btn btn-primary" />
        <input type="button" value="Delete Account" class="btn btn-danger" />
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

<?php include 'f02_footer.php'; ?>