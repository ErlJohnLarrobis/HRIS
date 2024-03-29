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
            .content-container .sidebar .nav li .sub-nav {
                height: 325px;
            }
            .content-container .sidebar .nav li.toggle .sub-nav {
                height: 0;
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
                    <span class="fs-4">
                        <strong>HRIS</strong>
                    </span>
                </a>
                <button class="btn btn-primary float-end mt-2" onclick="collapse()">
                    <i class="bi bi-list"></i>
                </button>
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
                            <a
                                href="/hrisv2/assets/dropdown-files/new-applicant.php"
                                class="nav-link active text-white">New Applicant</a>
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
                <p class="fs-3 text text-white">New Applicant</p>
                <ul class="nav nav-pills">
                    <li>
                        <a href="" class="nav-link bg-white">New Applicant</a>
                    </li>
                    <li>
                        <a href="/hrisv2/assets/sub-links/change-info.php" class="nav-link text-white">Change Info</a>
                    </li>
                    <li>
                        <a href="" class="nav-link text-white">Deleted</a>
                    </li>
                    <li>
                        <a href="/hrisv2/assets/sub-links/status.php" class="nav-link text-white">Status</a>
                    </li>
                </ul>
            </div>
            <div class="container bg-light shadow-lg rounded py-3" style="margin-top: -150px;">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['modal-form-submitted'])) {
                        // The modal form was submitted
                        $addspecial = $_POST['add-special'];
                        // Insert data into database
                        $sqladd = "INSERT INTO specializations (special_title) VALUES ('$addspecial')";
                        mysqli_query($conn,$sqladd);
                        // Display success message
                        echo '<script>  alert("added!");   </script>';
                    } else {
                        $position = $_POST['position'];
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $lname = $_POST['lname'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $brgy = $_POST['brgy'];
                        $town = $_POST['town'];
                        $province = $_POST['province'];
                        $zipcode = $_POST['zipcode'];
                        $birthdate = $_POST['birthdate'];
                        $age = $_POST['age'];
                        $gender = $_POST['gender'];
                        $specialization = $_POST['specialization'];
                        $dateapply = $_POST['date-apply'];
                        $education = $_POST['education'];
                        $workexperience = $_POST['workexperience'];
                        $eligibility = $_POST['eligibility'];
                        

                        $sql1 = "SELECT position_no FROM positions WHERE position_title = '$position'";
                        $result = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $position_no = $row['position_no'];
                        } else {
                        die("Position not found");
                        }

                        $sql2 = "SELECT special_no FROM specializations WHERE special_title = '$specialization'";
                        $result = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $special_no = $row['special_no'];
                        } else {
                        die("Position not found");
                        }

                        $sql3 = "INSERT INTO employee_applicants ( position_no, applicant_fname, applicant_mname, applicant_lname, applicant_mobile,
                        applicant_email, applicant_barangay, applicant_town, applicant_province, applicant_zipcode, applicant_bday, 
                        applicant_age, applicant_gender, special_no, applicant_date, applicant_encode_date, applicant_education, applicant_experience, 
                        applicant_eligibity) VALUES ('$position_no','$fname', '$mname', '$lname', '$contact', '$email', 
                        '$brgy', '$town', '$province', '$zipcode', '$birthdate', '$age', '$gender', '$special_no', '$dateapply', NOW(), '$education',
                        '$workexperience', '$eligibility')";
                        if (mysqli_query($conn, $sql3)) {
                            echo '<div id="samplemodal" style="z-index: 20;   height: 100px;width: 200px; position: fixed;right: 50%; left:50%;top: 35%;bottom: 50%; background-color:#ffffff;border:1px solid #403f44;border-radius:20px 20px;text_align: center;"><h1 style="position:absolute;left:38%;top:23%; color:#198754;"><i class="bi bi-check2-circle"></i></h1><p style="position:absolute;left:35%;top:60%;">Success</p></div>';
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
                <form
                    class="row justify-content-center needs-validation mb-5 pt-5"
                    novalidate="novalidate"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="mb-3 col-8">
                        <label for="position" class="form-label">Position:</label>
                        <select class="form-select" id="position" name="position" required="required">
                            <option selected disabled value=""></option>
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM positions");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $positiontitle = $row["position_title"];
                                echo "<option value=\"$positiontitle\">$positiontitle</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please provide a valid Position !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="name" class="form-label">Name:</label>
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <input
                                    type="text"
                                    id="fname"
                                    name="fname"
                                    class="form-control"
                                    placeholder="First Name"
                                    required="required">
                                <div class="invalid-feedback flex-column">Please provide a valid First Name !</div>
                            </div>
                            <div class="flex-column">
                                <input
                                    type="text"
                                    id="mname"
                                    name="mname"
                                    class="form-control"
                                    placeholder="Middle Name"
                                    required="required">
                                <div class="invalid-feedback">Please provide a valid Middle Name !</div>
                            </div>
                            <div class="flex-column">
                                <input
                                    type="text"
                                    id="lname"
                                    name="lname"
                                    class="form-control"
                                    placeholder="Last name"
                                    required="required">
                                <div class="invalid-feedback">Please provide a valid Last name !</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="contact" class="form-label">Contact Number:</label>
                        <input type="number" id="contact" name="contact" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Mobile Number !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Email !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="adress" class="form-label">Address:</label>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 col-6">
                                <input
                                    type="text"
                                    id="brgy"
                                    name="brgy"
                                    class="form-control"
                                    placeholder="Barangay/Street"
                                    required="required">
                                <div class="invalid-feedback">Please provide a Barangay/Street !</div>
                            </div>
                            <div class="mb-3 col-5">
                                <input
                                    type="text"
                                    id="town"
                                    name="town"
                                    class="form-control"
                                    placeholder="Town/City"
                                    required="required">
                                <div class="invalid-feedback">Please provide a Town/City !</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 col-8">
                                <input
                                    type="text"
                                    id="province"
                                    name="province"
                                    class="form-control"
                                    placeholder="Province"
                                    required="required">
                                <div class="invalid-feedback">Please provide a valid Province !</div>
                            </div>
                            <div class="mb-3 col-3">
                                <input
                                    type="text"
                                    id="zipcode"
                                    name="zipcode"
                                    class="form-control"
                                    placeholder="Zipcode"
                                    required="required">
                                <div class="invalid-feedback">Please provide a valid Zipcode !</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="birthdate" class="form-label">Birthdate:</label>
                        <input type="date" id="birthdate" name="birthdate" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Birthdate !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" id="age" name="age" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Age !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="gender" class="form-label">Gender:</label>
                        <select id="gender" name="gender" class="form-select" required="required">
                            <option value="" selected="selected" disabled="disabled">Select Gender</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid Gender !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="specialization" class="form-label">Specialization/Major:</label>
                        <div class="input-group">
                            <select class="form-select" name="specialization" id="specialization" required="required">
                                <option selected="selected" disabled="disabled" value=""></option>
                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM specializations");
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $specialtitle = $row["special_title"];
                                    echo "<option value=\"$specialtitle\">$specialtitle</option>";
                                }
                                ?>
                            </select>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">Please provide a Specialization?Major !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="date-apply" class="form-label">Date Apply:</label>
                        <input type="date" id="date-apply" name="date-apply" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Date Apply !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="education" class="form-label">Education:</label>
                        <input type="text" id="education" name="education" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Education !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="workexperience" class="form-label">Work Experienced:</label>
                        <input type="text" id="workexperience" name="workexperience" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a Work Experienced !</div>
                    </div>
                    <div class="mb-3 col-8">
                        <label for="eligibility" class="form-label">Eligibility:</label>
                        <input type="text" id="eligibility" name="eligibility" class="form-control" required="required">
                        <div class="invalid-feedback">Please provide a valid Eligibility !</div>
                    </div>
                    <div class="col-8">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Specialization/Major</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="add-special" name="add-special">
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