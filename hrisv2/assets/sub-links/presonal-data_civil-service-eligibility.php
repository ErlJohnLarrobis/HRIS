<?php include_once 'connection.php'?>
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
            <div class="container bg-light shadow-lg rounded py-3" style="margin-top: -220px; min-height: 220px;">
                <button type="button" class="btn btn-secondary mb-5" onclick="goback()">Back</button>
                <div class="tab-header">
                <?php
                include_once 'connection.php';
                $id = $_GET['emp_id'];
                $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
                $lname = isset($_GET['lname']) ? $_GET['lname'] : '';
                $sql = "SELECT * FROM users a join employee_jobhistory b on a.user_no = b.user_no
                join departments c on b.depart_no = c.depart_no
                join positions d on b.position_no = d.position_no WHERE user_id='$id' or ( user_id='$id' and user_fname='$fname' and user_lname='$lname');";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc()):
                ?>
                    <ul class="nav nav-pills nav-fill gap-2">
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/personal-data_data.php?emp_id=<?php echo $id?>" class="nav-link">Personal Data</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_edicational_attainment.php?emp_id=<?php echo $id?>" class="nav-link">Educational Attainment</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_civil-service-eligibility.php?emp_id=<?php echo $id?>" class="nav-link active">Civil Service Eligibility</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_work-experience.php?emp_id=<?php echo $id?>" class="nav-link">Work Experience</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_seminars-trainings-attended.php?emp_id=<?php echo $id?>" class="nav-link">Seminars or Trainings Attended</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_extra-activities-service.php?emp_id=<?php echo $id?>" class="nav-link">Extra Activities or Services</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_distric-recognition.php?emp_id=<?php echo $id?>" class="nav-link">Distinction or Recognition</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_group-affiliations.php?emp_id=<?php echo $id?>" class="nav-link">Group Affiliations</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_job-skills-and-hobbies.php?emp_id=<?php echo $id?>" class="nav-link">Job Skills and Hobbies</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_children-data.php?emp_id=<?php echo $id?>" class="nav-link">Children's Data</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_upload-pds-file.php?emp_id=<?php echo $id?>" class="nav-link">Upload PDS File</a>
                        </li>
                    </ul>                                  
                </div>
                <hr>
                <div class="row profile justify-content-center">
                        <div class="col-8 d-sm-flex  gap-3  ">
                        <img id="sample-image" src="/hrisv2/assets/images/employee-sample-image.jpg" class="rounded d-block border" alt="profile picture" width="150px" height="auto">
                            <div class="employee-name">
                                <p class="fs-6 fw-bold"><span class="text-uppercase"><?php echo $row['user_lname']?></span>, <span><?php echo trim($row['user_fname']." ".$row['user_mname'])?></span> <span>(<?php echo $row['user_id']?>)</span></p>
                                <p><?php echo $row['position_title'] ?></p>
                                <p><?php echo $row['depart_title'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile?>
                <hr>
                <form class="row justify-content-center needs-validation mb-5">
                    <?php 
                    $sql1 = "SELECT * FROM users LEFT JOIN employee_eligibility ON users.user_no = employee_eligibility.user_no LEFT JOIN eligibilities ON eligibilities.eligibility_no = employee_eligibility.eligibility_no WHERE user_id='$id'";
                    $res = $conn->query($sql1);
                    while($row=$res->fetch_assoc()):
                    ?>
                        <div class="mb-3 col-8">
                            <label for="example-select" class="form-label">Category:</label>
                            <div class="input-group">
                                <select class="form-select" id="salary-grade" name="position" required>
                                    <option selected disabled value="<?php echo $row['eligibility_title']?>"><?php echo $row['eligibility_title']?></option>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM eligibilities WHERE eligibility_delete=0");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $select = $row["eligibility_title"];
                                        echo "<option value=\"$select\">$select</option>";
                                    }
                                    ?>
                                </select>
                                <button type="button" class="btn btn-success"><i class="bi bi-plus-lg"></i></button>
                            </div>
                            <?php endwhile?>
                        </div>
                        <?php 
                        $sql1 = "SELECT * FROM users LEFT JOIN employee_eligibility ON users.user_no = employee_eligibility.user_no LEFT JOIN eligibilities ON eligibilities.eligibility_no = employee_eligibility.eligibility_no WHERE user_id='$id'";
                        $res = $conn->query($sql1);
                        while($row=$res->fetch_assoc()):
                        ?>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Title:</label>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_title']?>" required>
                            <small>Career Service/RA 1080 (Board/Bar) Under Special Laws/CES/CSEE/Barangay Eligibility/Drivers License</small>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Rating(if applicable):</label>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_rating']?>" required>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Date of Examination/Conferment:</label>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_date']?>" required disabled>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Place of Examination/Conferment:</label>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_address']?>" required>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">License(if applicable):</label>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_license']?>" placeholder="License No." required>
                            <input type="text" class="form-control" value="<?php echo $row['eelig_license_expiry']?>" placeholder="Date of Validity" required disabled>
                        </div>
                        <div class="mb-3 col-8">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form> 
                    <div class="table">
                        <label>Civil Service Eligibility Details</label>
                        <table id="data-table" class="table table-hover mt-5">
                            <thead class="text-white bg-primary">
                                <th>Title</th>
                                <th>Rating(if applicable)</th>
                                <th>Date of Examination/Conferment</th>
                                <th>Place of Examination/Conferment</th>
                                <th>Lisence(if applicable)</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['eelig_title']?></td>
                                    <td><?php echo $row['eelig_rating']?></td>
                                    <td><?php echo $row['eelig_date']?></td>
                                    <td><?php echo $row['eelig_address']?></td>
                                    <td><?php echo $row['eelig_license']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                    <?php endwhile?>
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
        function goback(){
            window.location.href="/hrisv2/assets/links/personal-data.php";
        }
    </script>
</body>
</html>