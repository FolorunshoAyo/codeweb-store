  <?php
    require(dirname(dirname(__DIR__)) . '/auth-library/resources.php');
    AdminAuth::User("");
    $admin_id = $_SESSION['admin_id'];

    if(isset($_GET['aid']) && !empty($_GET['aid'])){
        $aid = $_GET['aid'];
    
        $sql_agent_details = $db->query("SELECT * FROM agents WHERE agent_id={$aid}");
    
        $agent_details = $sql_agent_details->fetch_assoc();
    }else{
        header("Location: ./agents");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Custom Fonts (Inter) -->
    <link rel="stylesheet" href="../../assets/fonts/fonts.css" />
    <!-- BASE CSS -->
    <link rel="stylesheet" href="../../assets/css/base.css" />
    <!-- FORM CSS -->
    <link rel="stylesheet" href="../../assets/css/form.css" />
    <!-- ADMIN FORM CSS -->
    <link rel="stylesheet" href="../../assets/css/dashboard/admin-dash/admin-form.css">
    <!-- ADMIN DASHBOARD MENU CSS -->
    <link rel="stylesheet" href="../../assets/css/dashboard/admin-dash-menu.css" />
    <!-- DASHHBOARD MEDIA QUERIES -->
    <link rel="stylesheet" href="../../assets/css/media-queries/admin-dash-mediaqueries.css" />
    <title>Edit  agent - Halfcarry Admin</title>
</head>

<body style="background-color: #fafafa">
    <div class="dash-wrapper">
        <?php
            include("includes/admin-sidebar.php");
        ?>
        <section class="page-wrapper">
            <header class="dash-header">
                <a href="./agents" class="back-link">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </header>
            <div class="form-wrapper">
                <h2 class="form-title">Edit Agent</h2>

                <div class="form-container">
                    <form id="agent-upload-form">
                        <div class="form-groupings">
                            <div class="form-group-container">
                                <div class="form-group-container">
                                    <div class="form-group animate">
                                        <input type="text" name="fname" id="fname" class="form-input" placeholder=" "
                                            value="<?= $agent_details['first_name'] ?>" required />
                                        <label for="fname">First Name</label>
                                    </div>
                                </div>

                                <div class="form-group-container">
                                    <div class="form-group animate">
                                        <input type="text" name="lname" id="lname" class="form-input"
                                            placeholder=" " value="<?= $agent_details['last_name'] ?>" required />
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>

                                <div class="form-group-container">
                                    <div class="form-group animate">
                                        <input type="text" name="oname" id="oname"
                                            class="form-input" placeholder=" " value="<?= $agent_details['other_name'] ?>" required />
                                        <label for="oname">Other Name</label>
                                    </div>
                                </div>

                                <div class="form-group-container">
                                    <h3 class="static-label">Email</h3>
                                    <span class="static-email"><?= $agent_details['email'] ?></span>
                                </div>

                                <div class="form-group-container">
                                    <div class="form-group animate">
                                        <input type="number" name="phoneno" id="phoneno" class="form-input" placeholder=" " value="<?= $agent_details['phone_no'] ?>" required />
                                        <label for="phoneno">Phone</label>
                                    </div>
                                </div>

                                <div class="form-group-container">
                                    <div class="switch-wrapper">
                                        <span class="switch-text">
                                            Activate Account
                                        </span>
                                        <label for="active" class="switch">
                                            <input type="checkbox" id="active" name="active" <?php echo $agent_details['account_status'] === "1"? "checked" : "" ?> value="1">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="submit-btn-container">
                                    <button type="submit" class="admin-submit-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- FONT AWESOME JIT SCRIPT-->
    <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
    <!-- JQUERY SCRIPT -->
    <script src="../../assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="../../assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <!-- METIS MENU JS -->
    <script src="../../assets/js/metismenujs/metismenujs.js"></script>
    <!-- SWEET ALERT PLUGIN -->
    <script src="../../auth-library/vendor/dist/sweetalert2.all.min.js"></script>
    <!-- JUST VALIDATE LIBRARY -->
    <script src="../../assets/js/just-validate/just-validate.js"></script>
    <!-- DASHBOARD SCRIPT -->
    <script src="../../assets/js/admin-dash.js"></script>
    <script>
        //FORM VALIDATION WITH VALIDATE.JS

        const validation = new JustValidate("#agent-upload-form", {
            errorFieldCssClass: "is-invalid",
        });

        validation
            .addField("#fname", [
                {
                    rule: "required",
                    errorMessage: "Field is required",
                },
            ])
            .addField("#lname", [
                {
                    rule: "required",
                    errorMessage: "Field is required",
                },
            ])
            .addField("#oname", [
                {
                    rule: "required",
                    errorMessage: "Field is required",
                },
            ])
            .addField("#phoneno", [
                {
                    rule: "required",
                    errorMessage: "Field is required",
                },
            ])
            .onSuccess((event) => {
                const form = document.getElementById("agent-upload-form");

                // GATHERING FORM DATA
                const formData = new FormData(form);
                formData.append("submit", true);
                formData.append("aid", <?php echo $aid ?>);


                //SENDING FORM DATA TO THE SERVER
                $.ajax({
                    type: "post",
                    url: "controllers/edit_agent.php",
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".submit-btn-container button").html("Updating...");
                        $(".submit-btn-container button").attr("disabled", true);
                    },
                    success: function (response) {
                        setTimeout(() => {
                            if (response.success === 1) {
                                // ALERT USER UPON SUCCESSFUL UPLOAD
                                Swal.fire({
                                    title: "Agent uodated",
                                    icon: "success",
                                    text: `You've updated agent successfully`,
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    confirmButtonColor: '#2366B5',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href = "agents"
                                    }
                                })
                            } else {
                                $(".submit-btn-container button").attr("disabled", false);
                                $(".submit-btn-container button").html("Save Changes");

                                if (response.error_title === "fatal") {
                                    // REFRESH CURRENT PAGE
                                    location.reload();
                                } else {
                                    // ALERT USER
                                    Swal.fire({
                                        title: response.error_title,
                                        icon: "error",
                                        text: response.error_msg,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                    });
                                }
                            }
                        }, 1500);
                    },
                });
            });
    </script>
</body>

</html>