<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Material Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
<div class="body-wrapper">
    <div class="page-wrapper">
        <main class="auth-screen">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                        <div class="mdc-card">
                            <section class="mdc-card__primary bg-white">
                                <?php echo form_open("auth/forgot_password");?>

                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <?php echo lang('forgot_password_heading');?>
                                            <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex align-item-center justify-content-end">
                                            <?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
                                            <br />
                                            <?php echo form_input($identity);?>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                                            <?php
                                            $attributes = array('class'=>'mdc-button mdc-button--raised w-100', 'data-mdc-auto-init'=>'MDCRipple');
                                            echo form_submit('submit', lang('forgot_password_submit_btn'), $attributes);?>

                                        </div>
                                        <?php if (isset($message)) { ?>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <div id="infoMessage"><?php echo $message;?></div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                </form>
                            </section>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- body wrapper -->
<!-- plugins:js -->
<script src="../../node_modules/material-components-web/dist/material-components-web.min.js"></script>
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../js/misc.js"></script>
<script src="../../js/material.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>

</html>

