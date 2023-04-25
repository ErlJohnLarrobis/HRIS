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
                            <a href="/hrisv2/assets/sub-links/personal-data_data.php?emp_id=<?php echo $id?>" class="nav-link active">Personal Data</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_edicational_attainment.php?emp_id=<?php echo $id?>" class="nav-link">Educational Attainment</a>
                        </li>
                        <li class="nav-item border border-primary rounded">
                            <a href="/hrisv2/assets/sub-links/presonal-data_civil-service-eligibility.php?emp_id=<?php echo $id?>" class="nav-link">Civil Service Eligibility</a>
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
                <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $tin = $_POST['emp_tin'];
                    $sss = $_POST['emp_sss'];
                    $gsis = $_POST['emp_gsis'];
                    $philhealth = $_POST['emp_philhealth'];
                    $pagibig = $_POST['emp_pagibig'];
                    $gsisbp = $_POST['emp_gsisbp'];
                    $crn = $_POST['emp_crn'];
                    $religion = $_POST['emp_religion'];
                    $citizenship = $_POST['citizen'];
                    $placebirth = $_POST['emp_placebirth'];
                    $gender = $_POST['gender'];
                    $civilstatus = $_POST['civilstatus'];
                    $weight = $_POST['emp_weight'];
                    $height = $_POST['emp_height'];
                    $bloodtype = $_POST['bt'];
                    $street = $_POST['emp_street'];
                    $city = $_POST['emp_city'];
                    $province = $_POST['emp_province'];
                    $zipcode = $_POST['emp_zipcode'];
                    $street_per = $_POST['emp_street_per'];
                    $city_per = $_POST['emp_city_per'];
                    $province_per = $_POST['emp_province_per'];
                    $zipcode_per = $_POST['emp_zipcode_per'];
                    $telephone = $_POST['emp_phoneno'];
                    $mobile = $_POST['emp_mobileno'];
                    $email = $_POST['emp_email'];
                    $cor_email = $_POST['emp_cor_email'];
                    $spouse_lname = $_POST['emp_spouse_lname'];
                    $spouse_fname = $_POST['emp_spouse_fname'];
                    $spouse_mname = $_POST['emp_spouse_mname'];
                    $spouse_ext = $_POST['emp_spouse_ext'];
                    $occupation = $_POST['emp_spouse_occu'];
                    $business_name = $_POST['emp_spouse_employer'];
                    $business_address = $_POST['emp_spouse_address'];
                    $spouse_telephone = $_POST['emp_spouse_telephone'];
                    $spouse_father_lname = $_POST['emp_father_lname'];
                    $spouse_father_fname = $_POST['emp_father_fname'];
                    $spouse_father_mname = $_POST['emp_father_mname'];
                    $spouse_father_ext = $_POST['emp_father_ext'];
                    $spouse_mother_lname = $_POST['emp_mother_lname'];
                    $spouse_mother_fname = $_POST['emp_mother_fname'];
                    $spouse_mother_mname = $_POST['emp_mother_mname'];
                    $emergency = $_POST['emp_emergency'];
                    $address = $_POST['emp_address'];
                    $contact = $_POST['emp_contact'];

                    if (isset($_POST['dual_citizenship']) && $_POST['dual_citizenship'] == '1') {
                        $isdual = 1;
                    } else {
                        $isdual = 0;
                    }

                    if (isset($_POST['dual_type']) && $_POST['dual_type'] == '1') {
                        $dualtype = 1;
                    } elseif (isset($_POST['dual_type']) && $_POST['dual_type'] == '2') {
                        $dualtype = 2;
                    }else{
                        $dualtype = 0;
                    }

                    $sql_bt = "SELECT bt_no FROM bloodtypes WHERE bt_name = '$bloodtype'";
                    $result_bt = mysqli_query($conn, $sql_bt);
                    if (mysqli_num_rows($result_bt) > 0) {
                    $row_bt = mysqli_fetch_assoc($result_bt);
                    $bt_no = $row_bt['bt_no'];
                    } else {
                    die("Bloodtype not found");
                    }

                    $sql_citizen = "SELECT citizen_no FROM citizenships WHERE citizen_name = '$citizenship'";
                    $result_citizen = mysqli_query($conn, $sql_citizen);
                    if (mysqli_num_rows($result_citizen) > 0) {
                    $row_citizen = mysqli_fetch_assoc($result_citizen);
                    $citizen_no = $row_citizen['citizen_no'];
                    } else {
                    die("Citizenship not found");
                    }

                    $sqlupdate="UPDATE `employee_details` JOIN users ON employee_details.user_no = users.user_no SET `bt_no`='$bt_no',`emp_street`='$street',`emp_city`='$city',
                    `emp_province`='$province',`emp_zipcode`='$zipcode',`emp_street_per`='$street_per',`emp_city_per`='$city_per',`emp_province_per`='$province_per',`emp_zipcode_per`='$zipcode_per',
                    `emp_phoneno`='$telephone',`emp_mobileno`='$mobile',`emp_email`='$email',`emp_cor_email`='$cor_email',`emp_pagibig`='$pagibig',`emp_sss`='$sss',
                    `emp_tin`='$tin',`emp_philhealth`='$philhealth',`emp_gsis`='$gsis',`emp_gsisbp`='$gsisbp',`emp_crn`='$crn',`emp_placebirth`='$placebirth',
                    `emp_civilstatus`='$civilstatus',`emp_religion`='$religion',`emp_weight`='$weight',`emp_height`='$height',
                    `emp_emergency`='$emergency',`emp_address`='$address',`emp_contact`='$contact',`emp_gender`='$gender',`emp_spouse_lname`='$spouse_lname',`emp_spouse_fname`='$spouse_fname',
                    `emp_spouse_mname`='$spouse_mname',`emp_spouse_ext`='$spouse_ext',`emp_spouse_occu`='$occupation',`emp_spouse_employer`='$business_name',`emp_spouse_address`='$business_address',
                    `emp_spouse_telephone`='$spouse_telephone',`emp_father_lname`='$spouse_father_lname',`emp_father_fname`='$spouse_father_fname',`emp_father_mname`='$spouse_father_mname',`emp_father_ext`='$spouse_father_ext',
                    `emp_mother_lname`='$spouse_mother_lname',`emp_mother_fname`='$spouse_mother_fname',`emp_mother_mname`='$spouse_mother_mname',`emp_isdual`='$isdual',`emp_dualtype`='$dualtype',`citizen_no`='$citizen_no',
                    `emp_encode_date`=NOW() WHERE user_id = '$id'";
                    if(mysqli_query($conn,$sqlupdate)){
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
                ?>
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
                <div id="personal-data">
                    <?php 
                    $SQL="SELECT * FROM users JOIN employee_details on users.user_no = employee_details.user_no JOIN bloodtypes ON employee_details.bt_no = bloodtypes.bt_no WHERE user_id='$id'";
                    $res = $conn->query($SQL);
                    while($row=$res->fetch_assoc()):
                    ?>
                    <form class="row justify-content-center needs-validation mb-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?emp_id=' . $id;?>">
                        <p class="fs-5">Personal Info</p>
                        <input type="hidden" name="emp_id" value="<?php echo $id?>">
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">TIN:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="xxx-xxx-xxx" name="emp_tin" value="<?php echo $row['emp_tin'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">SSS #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_sss" value="<?php echo $row['emp_sss'] ?>" placeholder="xx-xxxxxxx-x">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">GSIS #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_gsis" value="<?php echo $row['emp_gsis'] ?>" placeholder="">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Philhealth #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_philhealth" value="<?php echo $row['emp_philhealth'] ?>" placeholder="xx-xxxxxxxxx-x">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Pag-Ibig #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_pagibig" value="<?php echo $row['emp_pagibig'] ?>" placeholder="">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">GSIS BP #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_gsisbp" value="<?php echo $row['emp_gsisbp'] ?>" placeholder="xxx-xxx-xxx">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">CRN #:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_crn" value="<?php echo $row['emp_crn'] ?>" placeholder="xxx-xxx-xxx">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label"> Religion:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_religion" value="<?php echo $row['emp_religion'] ?>" placeholder="xxx-xxx-xxx">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Citizenship:</label>
                            <select class="form-select" id="campus/branch" name="citizen">
                                <option selected value="<?php 
                                $sql_citizen="SELECT b.citizen_no, c.citizen_name FROM users a JOIN employee_details b ON a.user_no = b.user_no JOIN citizenships c ON b.citizen_no = c.citizen_no WHERE user_id = '$id';";
                                $res_citizen=$conn->query($sql_citizen);
                                while($row_citizen=$res_citizen->fetch_assoc()):
                                echo $row_citizen['citizen_name'] ?>"><?php echo $row_citizen['citizen_name']?></option><?php endwhile?>
                                <?php
                                $result1 = mysqli_query($conn, "SELECT * FROM citizenships");
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    $cn = $row1["citizen_name"];
                                    echo "<option value=\"$cn\">$cn</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3 col-8 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dual_citizenship" value="1" id="flexCheckDefault" <?php if($row['emp_isdual'] == 1){echo 'checked';}?>>
                                <label class="form-check-label" for="flexCheckDefault">
                                Dual citizenship
                                </label>
                            </div>
                            <div class="radio-button">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="dual_type" value="1" id="flexRadioDefault1" <?php if($row['emp_dualtype'] == 1){echo 'checked';}?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        By Birth
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="dual_type" value="2" id="flexRadioDefault2" <?php if($row['emp_dualtype'] == 2){echo 'checked';}?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        By Naturalization
                                    </label>
                                </div>
                            </div>
                            <div class="input">
                                <select class="form-select" name="emp_country" disabled>
                                    <option selected disabled value="<?php 
                                $sql_citizen="SELECT * FROM users a JOIN employee_details b ON a.user_no = b.user_no JOIN citizenships c ON b.citizen_no = c.citizen_no WHERE user_id = '$id';";
                                $res_citizen=$conn->query($sql_citizen);
                                while($row_citizen=$res_citizen->fetch_assoc()):
                                echo $row_citizen['citizen_country'] ?>"><?php echo $row_citizen['citizen_country'] ?></option><?php endwhile?>
                                </select>
                            </div>
                            
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Place of Birth:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_placebirth" value="<?php echo $row['emp_placebirth'] ?>" placeholder="xxx-xxx-xxx">
                                
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Date of Birth:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_bday" value="<?php echo $row['emp_bday'] ?>" disabled> 
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="gender" class="form-label">Gender:</label>
                            <select class="form-select" name="gender">
                                <option selected value="<?php echo $row['emp_gender'] ?>"><?php echo $row['emp_gender'] ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="gender" class="form-label">Civil Status:</label>
                            <select class="form-select" name="civilstatus">
                                <option selected value="<?php echo $row['emp_civilstatus'] ?>"><?php echo $row['emp_civilstatus'] ?></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Separated">Separated</option>
                                <option values="Widowed">Widowed</option>
                                <option values="Annulled">Annulled</option>
                            </select>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Weight (kgs):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_weight" value="<?php echo $row['emp_weight'] ?>"> 
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Height (m):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emp_height" value="<?php echo $row['emp_height'] ?>"> 
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="gender" class="form-label">Bloodtype:</label>
                            <select class="form-select" name="bt">
                                <option selected value="<?php echo $row['bt_name'] ?>"><?php echo $row['bt_name'] ?></option>
                                <?php
                                $result1 = mysqli_query($conn, "SELECT * FROM bloodtypes");
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    $cn = $row1["bt_name"];
                                    echo "<option value=\"$cn\">$cn</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <hr style="width:98%;">
                        <p class="fs-5">Contact Details</p>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Residential Address:</label>
                            <input type="text" name="emp_street" class="form-control" value="<?php echo $row['emp_street'] ?>" placeholder="street/purok/barangay">
                            <input type="text" name="emp_city" class="form-control" value="<?php echo $row['emp_city'] ?>" placeholder="city/town">
                            <input type="text" name="emp_province" class="form-control" value="<?php echo $row['emp_province'] ?>" placeholder="province">
                            <input type="text" name="emp_zipcode" class="form-control" value="<?php echo $row['emp_zipcode'] ?>" placeholder="zipcode">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Permanent Address:</label>
                            <input type="text" name="emp_street_per" class="form-control" value="<?php echo $row['emp_street_per'] ?>" placeholder="street/purok/barangay">
                            <input type="text" name="emp_city_per" class="form-control" value="<?php echo $row['emp_city_per'] ?>" placeholder="city/town">
                            <input type="text" name="emp_province_per" class="form-control" value="<?php echo $row['emp_province_per'] ?>" placeholder="province">
                            <input type="text" name="emp_zipcode_per" class="form-control" value="<?php echo $row['emp_zipcode_per'] ?>" placeholder="zipcode">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Telephone #:</label>
                            <input type="text" name="emp_phoneno" class="form-control" value="<?php echo $row['emp_phoneno'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Mobile #:</label>
                            <input type="text" name="emp_mobileno" class="form-control" value="<?php echo $row['emp_mobileno'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Email:</label>
                            <input type="text" name="emp_email" class="form-control" value="<?php echo $row['emp_email'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Corporate Email:</label>
                            <input type="text" name="emp_cor_email" class="form-control" value="<?php echo $row['emp_cor_email'] ?>">
                        </div>
                        <hr style="width:98%;">
                        <p class="fs-5">Family Background</p>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Spouse:</label>
                            <input type="text" name="emp_spouse_lname" class="form-control" value="<?php echo $row['emp_spouse_lname'] ?>" placeholder="Spouse Lastname">
                            <input type="text" name="emp_spouse_fname" class="form-control" value="<?php echo $row['emp_spouse_fname'] ?>" placeholder="Spouse Firstname">
                            <input type="text" name="emp_spouse_mname" class="form-control" value="<?php echo $row['emp_spouse_mname'] ?>" placeholder="Spouse Middlename">
                            <input type="text" name="emp_spouse_ext" class="form-control" value="<?php echo $row['emp_spouse_ext'] ?>" placeholder="Spouse Extension Name">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Occupation:</label>
                            <input type="text" name="emp_spouse_occu" class="form-control" value="<?php echo $row['emp_spouse_occu'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Employer/Business Name:</label>
                            <input type="text" name="emp_spouse_employer" class="form-control" value="<?php echo $row['emp_spouse_employer'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Business Address:</label>
                            <input type="text" name="emp_spouse_address" class="form-control" value="<?php echo $row['emp_spouse_address'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Telephone:</label>
                            <input type="text" name="emp_spouse_telephone" class="form-control" value="<?php echo $row['emp_spouse_telephone'] ?>">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Father's Name:</label>
                            <input type="text" name="emp_father_lname" class="form-control" value="<?php echo $row['emp_father_lname'] ?>" placeholder="Lastname">
                            <input type="text" name="emp_father_fname" class="form-control" value="<?php echo $row['emp_father_fname'] ?>" placeholder="Firstname">
                            <input type="text" name="emp_father_mname" class="form-control" value="<?php echo $row['emp_father_mname'] ?>" placeholder="Middlename">
                            <input type="text" name="emp_father_ext" class="form-control"  value="<?php echo $row['emp_father_ext'] ?>" placeholder="Extension Name">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Mother's Maiden Name:</label>
                            <input type="text" name="emp_mother_lname" class="form-control" value="<?php echo $row['emp_mother_lname'] ?>" placeholder="Lastname">
                            <input type="text" name="emp_mother_fname" class="form-control" value="<?php echo $row['emp_mother_fname'] ?>" placeholder="Firstname">
                            <input type="text" name="emp_mother_mname" class="form-control" value="<?php echo $row['emp_mother_mname'] ?>" placeholder="Middlename">
                        </div>
                        <hr style="width:98%;">
                        <p class="fs-5">Contact Info in case of Emergency</p>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Name:</label>
                            <input type="text" name="emp_emergency" value="<?php echo $row['emp_emergency']?>" class="form-control">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Address:</label>
                            <input type="text" name="emp_address" value="<?php echo $row['emp_address']?>" class="form-control">
                        </div>
                        <div class="mb-3 col-8">
                            <label for="simpleinput" class="form-label">Contact:</label>
                            <input type="text" name="emp_contact" value="<?php echo $row['emp_contact']?>" class="form-control">
                        </div>
                        <div class="mb-3 col-8">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <?php endwhile ?>
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
    <script>
        function goback(){
            window.location.href="/hrisv2/assets/links/personal-data.php";
        }
    </script>
</body>
</html>