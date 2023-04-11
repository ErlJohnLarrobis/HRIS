<?php
include_once 'connection.php'
?>
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
            <style>
                .content-container .sidebar .nav li .sub-nav{
                height: 325px;
                }
                .content-container .sidebar .nav li.toggle .sub-nav{
                height: 0px;
                }
            </style>
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
                            <a href="/hrisv2/assets/dropdown-files/post-job-vacancy.php" class="nav-link active text-white">Post Job Vacancy</a>
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
                    <a href="/hrisv2/assets/links/personal-data.php" class="nav-link">
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
                <p class="fs-3 text text-white">Post Job Vacancy</p>
                <ul class="nav nav-pills">
                    <li>
                        <a href="" class="nav-link bg-white">Post Jobs</a>
                    </li>
                    <li>
                        <a href="" class="nav-link text-white">Archives</a>
                    </li>
                </ul>
            </div>
            <div class="container bg-light shadow-lg rounded py-3" style="margin-top: -160px;">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['modal-form-submitted'])) {
                        // The modal form was submitted
                        $adddiscipline = $_POST['add-discipline'];
                        // Insert data into database
                        $sqladd = "INSERT INTO employee_applicants_discipline (discipline_title) VALUES ('$adddiscipline')";
                        mysqli_query($conn,$sqladd);
                        // Display success message
                        echo '<script>  alert("added!");   </script>';
                    } elseif (isset($_POST['delete-button'])) {
                        $id = $_POST["delete-button"];

                        // Delete employee from table
                        $sql = "UPDATE employee_applicants_vacancy SET vacancy_delete=1 WHERE vacancy_no=$id";
                        if (mysqli_query($conn, $sql)) {
                        echo '<script>  alert("Deleted");   </script>';
                        } else {
                        echo '<script>  alert("error");   </script>' . mysqli_error($conn);
                        }
                    }
                     else {
                        $position = $_POST['position'];
                        $discipline = $_POST['discipline'];
                        $subtitle = $_POST['subtitle'];
                        $campus = $_POST['campus'];
                        $status = $_POST['status'];
                        $education = $_POST['education'];
                        $exp = $_POST['experience'];
                        $elig = $_POST['eligibility'];
                        $training = $_POST['training'];
                        $place = $_POST['placeassign'];
                        $slot = $_POST['slot'];
                        $duedate = $_POST['cutoff'];
                        

                        $sql1 = "SELECT position_no FROM positions WHERE position_title = '$position'";
                        $result = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $position_no = $row['position_no'];
                        } else {
                        die("Position not found");
                        }

                        $sql2 = "SELECT discipline_no FROM employee_applicants_discipline WHERE discipline_title = '$discipline'";
                        $result = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $discipline_no = $row['discipline_no'];
                        } else {
                        die("Position not found");
                        }

                        $sql5 = "SELECT campus_no FROM campuses WHERE campus_title = '$campus'";
                        $result = mysqli_query($conn, $sql5);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $campus_no = $row['campus_no'];
                        } else {
                        die("Position not found");
                        }

                        $sql3 = "SELECT tenur_no FROM tenureships WHERE tenur_name = '$status'";
                        $result = mysqli_query($conn, $sql3);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $tenur_no = $row['tenur_no'];
                        } else {
                        die("Position not found");
                        }

                        if (isset($_POST['radio-stacked']) && $_POST['radio-stacked'] == 'active') {
                            $value = 0;
                          } else {
                            $value = 1;
                          }
                          
                            $sql4 = "INSERT INTO employee_applicants_vacancy (position_no, discipline_no, vacancy_subtitle, campus_no, tenur_no, vacancy_education, vacancy_experience, vacancy_eligibility, vacancy_training, vacancy_assign, vacancy_slots, vacancy_date_due, vacancy_inactive) 
                            VALUES ('$position_no','$discipline_no','$subtitle','$campus_no','$tenur_no','$education','$exp','$elig','$training','$place','$slot', '$duedate','$value')";
                            if (mysqli_query($conn, $sql4)) {
                                echo '<div id="samplemodal" style="z-index: 20;   height: 100px;width: 200px; position: fixed;right: 50%; left:50%;top: 35%;bottom: 50%; background-color:#ffffff;border:1px solid #198754;border-radius:20px 20px;text_align: center;"><h1 style="position:absolute;left:38%;top:23%; color:#198754;"><i class="bi bi-check2-circle"></i></h1><p style="position:absolute;left:35%;top:60%;">Success</p></div>';
                                echo '<script>
                                setTimeout(function() {
                                    const modal = document.getElementById("samplemodal");
                                    modal.style.display = "none";
                                }, 1500);</script>';
                            } else {
                                echo "Error adding record: " . mysqli_error($conn);
                            }
                          
                    }
                }
                ?>
                <form class="row justify-content-center needs-validation mb-5 pt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate>
                    <div class="mb-3 col-8">
                        <label for="example-select" class="form-label">Position:</label>
                        <select class="form-select" id="position" name="position" required>
                            <option selected disabled value=""></option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM positions WHERE position_delete=0");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $positiontitle = $row["position_title"];
                                echo "<option value=\"$positiontitle\">$positiontitle</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please provide a valid Position !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="discipline" class="form-label">Discipline:</label>
                        <div class="input-group">
                        <select class="form-select" id="discipline" name="discipline" required>
                            <option selected value="">N/A</option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM employee_applicants_discipline WHERE discipline_delete=0");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $disciplinetitle = $row["discipline_title"];
                                echo "<option value=\"$disciplinetitle\">$disciplinetitle</option>";
                            }
                            ?>
                        </select>
                        <button class="btn btn-primary" type="button"  type="button" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo"><i class="bi bi-plus-lg"></i></button>    
                    </div>
                        <div class="invalid-feedback">Please provide a Discipline !</div>
                    </div>  
                    <div class="mb-3 col-8">
                        <label for="sub-title" class="form-label">Sub Title:</label>
                        <input type="text" id="sub-title" class="form-control" name="subtitle" required>
                        <div class="invalid-feedback">Please provide a valid Sub Title !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="cba" class="form-label">Campus/Branch/Agency:</label>
                        <div class="input-group">
                        <select class="form-select" id="cba" name="campus" required>
                        <option selected disabled value=""></option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM campuses WHERE campus_delete=0");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $campustitle = $row["campus_title"];
                                echo "<option value=\"$campustitle\">$campustitle</option>";
                            }
                            ?>
                        </select>
                    </div>
                        <div class="invalid-feedback">Please provide a Campus/Branch/Agency !</div>
                    </div>  
                    <div class="mb-3 col-8">
                        <label for="employmentStatus" class="form-label">Employment Status:</label>
                        <div class="input-group">
                        <select class="form-select" id="employmentStatus" name="status" required>
                            <option selected value="">N/A</option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM tenureships WHERE tenur_delete=0");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $tenurename = $row["tenur_name"];
                                echo "<option value=\"$tenurename\">$tenurename</option>";
                            }
                            ?>
                        </select>
                    </div>
                        <div class="invalid-feedback">Please provide a Employment Status !</div>
                    </div> 
                    <div class="mb-3 col-8">
                        <label for="education" class="form-label">Education:</label>
                        <input type="text" id="education" class="form-control" name="education" required>
                        <div class="invalid-feedback">Please provide a valid Education !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="Experience" class="form-label">Experience:</label>
                        <input type="text" id="Experience" class="form-control" name="experience" required>
                        <div class="invalid-feedback">Please provide a Work Experienced !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="eligibility" class="form-label">Eligibility:</label>
                        <input type="text" id="eligibility" class="form-control" name="eligibility" required>
                        <div class="invalid-feedback">Please provide a valid Eligibility !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="training" class="form-label">Training:</label>
                        <input type="text" id="training" class="form-control" name="training" required>
                        <div class="invalid-feedback">Please provide a valid Training !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="placeofAssignment" class="form-label">Place of Assignment:</label>
                        <input type="text" id="placeofAssignment" class="form-control" name="placeassign" required>
                        <div class="invalid-feedback">Please provide a valid Place of Assignment !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="numberofSlot" class="form-label">Number of Slot(s):</label>
                        <input type="number" id="numberofSlot" class="form-control" name="slot" required>
                        <div class="invalid-feedback">Please provide a valid Number of Slot(s) !</div>                 
                    </div>
                    <div class="mb-3 col-8">
                        <label for="cutoffDate" class="form-label">Cut-off Date:</label>
                        <input type="date" id="cutoffDate" class="form-control" name="cutoff" required>
                        <div class="invalid-feedback">Please provide a valid Cut-off Date !</div>                 
                    </div>
                    <div class="mb-3 col-8 d-flex">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="active" required>
                            <label class="form-check-label" for="validationFormCheck2">Active</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" value="inactive" required>
                            <label class="form-check-label" for="validationFormCheck3">Inactive</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                    </div>
                    <input type="hidden" name="form-submitted" value="1">
                    <div class="col-8">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Discipline</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="add-discipline" name="add-discipline">
                                    </div>
                                    <input type="hidden" name="modal-form-submitted" value="1">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table" style="overflow-x: auto;">
                    <table id="data-table" class="table table-hover mt-5">
                        <thead class="text-white bg-primary">
                            <tr>
                                <th colspan="2"></th>
                                <th class="text-center border border-top-0" colspan="3">Qualification</th>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Education</th>
                                <th>Experience</th>
                                <th>Eligibility</th>
                                <th>Training</th>
                                <th>Place of Assignment</th>
                                <th>Campus</th>
                                <th>Slots</th>
                                <th>Duedate</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql="SELECT * FROM `employee_applicants_vacancy` JOIN campuses on employee_applicants_vacancy.campus_no = campuses.campus_no JOIN positions on employee_applicants_vacancy.position_no = positions.position_no JOIN tenureships on employee_applicants_vacancy.tenur_no = tenureships.tenur_no WHERE vacancy_delete=0";
                            $result=$conn->query($sql);
                            while($row = $result->fetch_assoc()):
                            
                            ?>
                            <tr>
                                <td><?php echo $row['position_title'] ?></td>
                                <td><?php echo $row['tenur_name'] ?></td>
                                <td><?php echo $row['vacancy_education'] ?></td>
                                <td><?php echo $row['vacancy_experience'] ?></td>
                                <td><?php echo $row['vacancy_eligibility'] ?></td>
                                <td><?php echo $row['vacancy_training'] ?></td>
                                <td><?php echo $row['vacancy_assign'] ?></td>
                                <td><?php echo $row['campus_title'] ?></td>
                                <td><?php echo $row['vacancy_slots'] ?></td>
                                <td><?php echo $row['vacancy_date_due'] ?></td>
                                <?php 
                                if ($row['vacancy_inactive'] == 0) {
                                echo "<td>Active</td>";
                                } else {
                                echo "<td>Inactive</td>";
                                }
                                ?>
                                <td>
                                    <button type='button' class='btn btn-info'><a class="text-decoration-none text-black" href="/hrisv2/assets/data-modifier/post-job-vacancy-update.php?id=<?php echo $row['vacancy_no']?>">Update</a></button>
                                    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'><input type='hidden' name='delete-button' value='<?php echo $row['vacancy_no'] ?>'><input class="btn btn-danger" type='submit' value='Delete'></form>
                                </td>
                            </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
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
</body>
</html>