<?php include_once './includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <h1 class="mt-4">Vaccination Records</h1>

    <!-- DELETION STATUS ALERT -->
    <div id="del_status"></div>

    <!-- MENU TO ADD NEW RECORD -->
    <div class="row">
        <div class="col-12 text-end">
            <a class="text-decoration-none" href="#">Download PDF</a> |
            <a class="text-decoration-none" href="record_add.php">[+] Add new record</a>
        </div>
    </div>

    <!-- // SHOW REGISTERED VACCINATION RECORDS -->
    <!-- // TABLE HEADER -->
    <table class="table" id="vac_tbl">
        <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Vaccine For</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Batch ID</th>
            <th>Comment</th>
            <th>Next Due</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <!-- START TABLE CONTENT -->
        <tbody  id="vac_tbl_content">
            <tr>
                <td>
                    <span class="spinner-border spinner-border-sm"></span>
                    Loading..
                </td>
            </tr>
        </tbody>
    </table>

    <!-- PAGINATION & SUBMENU -->
    <ul class="pagination pagination-sm" id="vac_tbl_pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
    </ul>

<script>
    viewRec(1);
    pageRec();

    function viewRec(p){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('vac_tbl_content').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET','record_view.php?p='+p,true);
        xmlhttp.send();
    }

    function pageRec(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('vac_tbl_pagination').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET','record_pagination.php',true);
        xmlhttp.send();
    }

    function delRec(id){
        if (confirm('Are you sure you want to delete Record ' + id + '?')){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('del_status').innerHTML = this.responseText;
                }
            };
            xmlhttp.open('GET','record_del.php?id='+id,true);
            xmlhttp.send();
        }
    }
</script>

<?php include_once './includes/footer.php'; ?>
