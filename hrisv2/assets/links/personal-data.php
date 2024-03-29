<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Human Resources Information System</title>
        <link rel="stylesheet" href="/hrisv2/assets/css/style.css">
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
    </head>
</head>
<body>
    <div class="content-container" id="collapse">
        <div class="sidebar d-flex flex-column flex-shrink-0 bg-light shadow">
            <div class="sidebar-header">
                <a
                href="/hrisv2/index.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none gap-3 float-start">
                <img src="/hrisv2/assets/images/logo.png" alt="logo" width="50">
                <span class="fs-4"><strong>HRIS</strong></span>
                </a>
                <button class="btn btn-primary float-end mt-2" onclick="collapse()"><i class="bi bi-list"></i></button>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto d-block">
                <li id="first">
                    <a href="#" class="nav-link dropdown-title" onclick="recruitment()">
                        <i class="bi bi-person-gear me-2"></i>
                        <span>Recruitment</span>
                        <span class="dropdown-arrow">
                            <i class="bi bi-caret-right-fill float-end"></i>
                        </span>
                    </a>
                    <ul class="sub-nav nav nav-pills flex-column mb-auto d-block ms-5">
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/new-applicant.php" class="nav-link">New Applicant</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/post-job-vacancy.php" class="nav-link">Post Job Vacancy</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/applicant-campus.php" class="nav-link">Applicants by Campus</a>
                        </li>
                        <li>
                            <a
                                href="/hrisv2/assets/dropdown-files/applicant-discipline.php"
                                class="nav-link">Applicants by Discipline</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/assign-panels.php" class="nav-link">Assign Panels</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/assessment.php" class="nav-link">Assessment</a>
                        </li>
                        <li>
                            <a
                                href="/hrisv2/assets/dropdown-files/applicant-directory.php"
                                class="nav-link">Applicant Directory</a>
                        </li>
                        <li>
                            <a
                                href="/hrisv2/assets/dropdown-files/panel-request-access.php"
                                class="nav-link">Panel Request Access</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/plantilla.php" class="nav-link">
                        <i class="bi bi-file-earmark-medical me-2"></i>
                        <span>Plantilla</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/add-employee.php" class="nav-link">
                        <i class="bi bi-person-add me-2"></i>
                        <span>Add Employee</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/personal-data.php" class="nav-link text-white active">
                        <i class="bi bi-clipboard2-data me-2"></i>
                        <span>Personal Data</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/upload-picture.php" class="nav-link">
                        <i class="bi bi-upload me-2"></i>
                        <span>Upload Picture</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/employment-records.php" class="nav-link">
                        <i class="bi bi-person-vcard me-2"></i>
                        <span>Employment Records</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/separations.php" class="nav-link">
                        <i class="bi bi-arrows-expand me-2 rotate"></i>
                        <span>Separations</span>
                    </a>
                </li>
                <li id="second">
                    <a href="#" class="nav-link dropdown-title" onclick="leaves()">
                        <i class="bi bi-door-open me-2"></i>
                        <span>Leaves</span>
                        <span class="dropdown-arrow">
                            <i class="bi bi-caret-right-fill float-end"></i>
                        </span>
                    </a>
                    <ul class="sub-nav-second nav nav-pills flex-column mb-auto d-block ms-5">
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/types-of-leaves.php" class="nav-link">Types of Leaves</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/employee-benefits.php" class="nav-link">Employee Benefits</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/apply-leaves.php" class="nav-link">Apply Leaves</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/summary.php" class="nav-link">Summmary</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/old-balance-leaves.php" class="nav-link">Old Balance Leaves</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/employee-force-leave_tardiness.php" class="nav-link">Employee Force Leave/Tardines</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/rewards-awards.php" class="nav-link">
                        <i class="bi bi-gift me-2"></i>
                        <span>Rewards and Awards</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/request-documents.php" class="nav-link">
                        <i class="bi bi-file-check me-2"></i>
                        <span>Request Documents</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/offenses.php" class="nav-link">
                        <i class="bi bi-clipboard2-x me-2"></i>
                        <span>Offenses</span>
                    </a>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/search.php" class="nav-link">
                        <i class="bi bi-search me-2"></i>
                        <span>Search</span>
                    </a>
                </li>
                <li id="third">
                    <a href="#" class="nav-link dropdown-title" onclick="reports()">
                        <i class="bi bi-journal-check me-2"></i>
                        <span>Reports</span>
                        <span class="dropdown-arrow">
                            <i class="bi bi-caret-right-fill float-end"></i>
                        </span>
                    </a>
                    <ul class="sub-nav-third nav nav-pills flex-column mb-auto d-block ms-5">
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/print-pds.php" class="nav-link">Print PDS</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/loyalty-candidates.php" class="nav-link">Loyalty Candidates</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/step-increments.php" class="nav-link">Step Increments</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/summary-absences.php" class="nav-link">Summary Absences</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/employee-id-numbers.php" class="nav-link">Employee ID Numbers</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/candidates-for-retirement.php" class="nav-link">Candidates for Retirement</a>
                        </li>
                        <li>
                            <a href="/hrisv2/assets/dropdown-files/statistics-and-summary.php" class="nav-link">Statistics and Summary</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/hrisv2/assets/links/birthday.php" class="nav-link">
                        <i class="bi bi-balloon me-2"></i>
                        <span>Birthday</span>
                    </a>
                </li>
            </ul>
            <div class="profile dropdown bg-primary p-2 rounded">
                <a
                    href="#"
                    class="d-flex align-items-center text-decoration-none dropdown-toggle text-white"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img
                        src="/hrisv2/assets/images/profile.png"
                        alt=""
                        width="32"
                        height="32"
                        class="rounded-circle me-2">
                    <strong>Superman</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-light text-small shadow px-2">
                    <li>
                        <a class="dropdown-item rounded" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item rounded" href="#">Profile</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item rounded" href="#">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="content">
            <div class="header bg-primary p-3">
                <p class="fs-3 text text-white">Personal Data</p>
            </div>
            <?php
            include_once 'connection.php';
            if(isset($_POST['emp_id'])) {
                $emp_id = $_POST['emp_id'];
                
                $query = "SELECT * FROM users WHERE user_id = '$emp_id'";
                
                $result = mysqli_query($conn, $query);
            
                if(mysqli_num_rows($result) > 0) {
                    echo "<script>
                    window.location.href='/hrisv2/assets/sub-links/personal-data_data.php?emp_id=$emp_id';
                    </script>";
                } else {
                    echo "<script> alert('No Matching Data Found in Database')</script>";
                }
            } else if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['adv_emp_id'])) {
                $adv_id = $_POST['adv_emp_id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                
                $query = "SELECT * FROM users WHERE user_id='$adv_id' AND user_fname = '$fname' AND user_lname = '$lname'";
                
                $result = mysqli_query($conn, $query);
            
                if(mysqli_num_rows($result) > 0) {
                    echo "<script>
                    window.location.href='/hrisv2/assets/sub-links/personal-data_data.php?emp_id=$adv_id&fname=$fname&lname=$lname';
                    </script>";
                } else {
                    echo "<script> alert('No Matching Data Found in Database')</script>";
                }
            }
            ?>
            <div class="container bg-light shadow-lg rounded py-3" style="margin-top: -220px; min-height: 220px;">
                <form class="row justify-content-center needs-validation mb-5 pt-5" id="search" method="post" novalidate>
                    <div class="mb-3 col-8">
                        <label for="simpleinput" class="form-label">Employee ID:</label>
                        <div class="input-group">
                            <input type="text" name="emp_id" class="form-control" placeholder="Search for. . ." required>
                            <button type="submit" class="btn btn-primary">View</button>
                            <button type="button" class="btn btn-success rounded-end" onclick="advance()">Advance</button>
                            <div class="invalid-feedback">
                            Please provide a valid Input!
                            </div>
                        </div>
                    </div>
                </form>
                <form class="row justify-content-center needs-validation" method="post">
                <div class="mb-3 col-8 p-5" style="display:none;" id="advance">
                        <div class="input">
                            <label for="simpleinput" class="form-label">Employee ID:</label>
                            <input type="text" name="adv_emp_id" class="form-control">
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Employee Name:</label>
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control" placeholder="firstname">
                                <input type="text" name="lname" class="form-control" placeholder="lastname">
                            </div>
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Campus/Branch:</label>
                            <select class="form-select" id="division" name="campus">
                                <option selected disabled value="">All</option>
                                <?php
                                    include_once 'connection.php';
                                    $result = mysqli_query($conn, "SELECT * FROM campuses WHERE campus_delete=0");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $select = $row["campus_title"];
                                        echo "<option value=\"$select\">$select</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Position:</label>
                            <select class="form-select" id="division" name="position">
                                <option selected disabled value="">All</option>
                                <?php
                                    include_once 'connection.php';
                                    $result = mysqli_query($conn, "SELECT * FROM positions WHERE position_delete=0");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $select = $row["position_title"];
                                        echo "<option value=\"$select\">$select</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Department:</label>
                            <select class="form-select" id="division" name="department">
                                <option selected disabled value="">All</option>
                                <?php
                                    include_once 'connection.php';
                                    $result = mysqli_query($conn, "SELECT * FROM departments WHERE depart_delete=0");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $select = $row["depart_title"];
                                        echo "<option value=\"$select\">$select</option>";
                                    }
                                ?>
                            </select>
                            <select class="form-select" id="division">
                                <option selected value="">All</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Gender:</label>
                            <select class="form-select" id="division" name="gender">
                                <option selected disabled value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="simpleinput" class="form-label">Employement Type:</label>
                            <select class="form-select" id="division" name="emp_type">
                                <option selected disabled value="">All</option>
                                <?php
                                    include_once 'connection.php';
                                    $result = mysqli_query($conn, "SELECT * FROM user_types WHERE ut_delete=0");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $select = $row["ut_name"];
                                        echo "<option value=\"$select\">$select</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-8 mt-3">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
             </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="/hrisv2/assets/scripts/main.js"></script>
    <script>
        $(document).ready(function () {
            $('#data-table').DataTable();
        });
    </script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array
                .from(forms)
                .forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form
                            .classList
                            .add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        function advance(){ 
            const display = document.getElementById('advance');
            const search = document.getElementById('search');

            display.style.display='block';
            search.style.display='none';
        }
    </script>
    <script>
        function view(){ 
            const display = document.getElementById('view');
            const search = document.getElementById('search');

            display.style.display='block';
            search.style.display='none';
        }
    </script>
</body>
</html>