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

<?php if (isset($_SESSION['message'])) { ?>
    <div class="mdc-dialog__container" id="alert-modal">
        <div class="mdc-dialog__surface">
            <h2 id="simple-dialog-label" class="mdc-dialog__title">An error occurred</h2>
            <section id="simple-dialog-description" class="mdc-dialog__content">
                <?php echo $_SESSION['message']; ?>
            </section>
        </div>
    </div>
    <script>
        var dialog = new mdc.dialog.MDCDialog(document.querySelector('#alert-modal'));
        dialog.show();

    </script>
<?php } ?>


</body>

</html>