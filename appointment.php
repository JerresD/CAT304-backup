<?php include 'f01_header.php';  ?>

    <h1 class="mt-4">Vaccination Appointments</h1>

    <table class="table">
        <thead class="table-success">
        <tr>
            <th>Vaccine For</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Comment</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <?php $remind_data = get_remind_info($conn); ?>
        </tr>

        </tbody>

    </table>
    <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
        <li><a class="nav-link text-end" href="record_add.php">Download PDF</a></li>
    </ul>

    <a class="nav-link text-end" href="appointment_add.php">[+] Add new record</a>

<?php include 'f02_footer.php'; ?>