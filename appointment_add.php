<?php include 'f01_header.php'; ?>

    <style>
        #back{
            text-decoration: none;
        }
    </style>

    <h1 class="mt-4"><a id="back" href="appointment.php">&#8626;</a> Add New Appointment</h1>

    <form action="includes/add_appoinment.inc.php   " class="was-validated" method="POST">
        <div class="mb-3">
            <label for="vac_type" class="form-label">Vaccine For:</label>
            <select class="form-select" id="vac_type" name="vac_type">
                <option>Chickenpox/Shingles</option>
                <option>CHOLERA</option>
                <option>COVID-19</option>
                <option>DIPHTHERIA</option>
                <option>HEPATITIS A</option>
                <option>HEPATITIS B</option>
                <option>HIB (HAEMOPHILUS)</option>
                <option>INFLUENZA</option>
                <option>JAPANESE ENCEPHALITIS</option>
                <option>MEASLES</option>
                <option>MENINGITIS</option>
                <option>MUMPS</option>
                <option>PAPILLOMA VIRUS</option>
                <option>PERTUSSIS</option>
                <option>PNEUMONIA</option>
                <option>POLIO</option>
                <option>Q FEVER</option>
                <option>RABIES</option>
                <option>RUBELLA</option>
                <option>TETANUS</option>
                <option>TICK ENCENPHALITIS</option>
                <option>TUBERCULOSIS</option>
                <option>TYPHOID</option>
                <option>WHOOPING COUGH</option>
                <option>OTHER</option>


            </select>
            <label for="app_date" class="form-label">Date:</label>
            <input type="date" required class="form-control" id="app_date" name="app_date" />
            <label for="app_time" class="form-label">Time:</label>
            <input type="time" required class="form-control" id="app_time" name="app_time" />
            <label for="location" class="form-label">Location:</label>
            <input type="text" required class="form-control" id="location" placeholder="Enter facility location" name="location" />
            <label for="comment" class="form-label">Comment:</label>
            <input type="text" required class="form-control" id="comment" placeholder="Enter comment" name="comment" />

        </div>
        <input type="reset" class="btn btn-secondary" />
        <input type="submit" class="btn btn-primary" />
    </form>

<?php include 'f02_footer.php'; ?>