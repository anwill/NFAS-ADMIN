<!-- partial:partials/_footer.html -->
<footer>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                <span class="text-muted">Copyright © 2018 <a class="text-green" href="https://booking-admin.singlearrow.co.uk/">Single Arrow NFAS Booking</a>. All rights reserved.</span>
            </div>

        </div>
    </div>
</footer>
<!-- partial -->
</div>
</div>

<?php if (isset($_SESSION['message'])) { ?>
<div class="mdc-dialog"
     role="alertdialog"
     aria-modal="true"
     aria-labelledby="my-dialog-title"
     aria-describedby="my-dialog-content">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface">
            <!-- Title cannot contain leading whitespace due to mdc-typography-baseline-top() -->
            <h2 class="mdc-dialog__title" id="my-dialog-title"><!--
     -->Error Occurred<!--
   --></h2>
            <div class="mdc-dialog__content" id="my-dialog-content">
                <?php echo $_SESSION['message']; ?>
            </div>
            <footer class="mdc-dialog__actions">
                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">Close</button>
            </footer>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>
<?php } ?>

<!-- body wrapper -->
<!-- plugins:js -->
<script src="../../node_modules/material-components-web/dist/material-components-web.min.js"></script>
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="../../node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../../node_modules/progressbar.js/dist/progressbar.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../js/misc.js"></script>
<script src="../../js/material.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../../js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>