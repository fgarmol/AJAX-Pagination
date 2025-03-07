<?php
include_once("header.php");
include_once("include/config.php");
?>
<script>
    function filterByUsername() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.querySelector(".widget-table table");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    
</script>

<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="alert" id="error-msg"></div>
        <h1>Student List</h1>
        <div class="alert alert-success" id="success-msg"></div>
        <br>
        <input type="text" id="search" placeholder="Search by username" onkeyup="filterByUsername()">
        <br>
        <a class="btn btn-primary" href="addStudent.php" style="float:right">Add Student</a>
        <div class="widget widget-table action-table">
            <div class="widget-header"><i class="icon-th-list"></i>
                <h3>A Table Example</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th> First Name</th>
                            <th> Last Name</th>
                            <th> Username</th>
                            <th> Email</th>
                            <th class="td-actions"></th>
                        </tr>
                    </thead>
                    <tbody id="target-content">
                    </tbody>
                </table>
            </div>
            <div id="append-pagination"></div>
            <!-- /widget-content -->
        </div>
    </div>
</div>

<!-- Button to trigger modal -->
<?php include_once("footer.php"); ?>