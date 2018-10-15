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
<script src="/node_modules/material-components-web/dist/material-components-web.min.js"></script>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="/node_modules/progressbar.js/dist/progressbar.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/js/misc.js"></script>
<script src="/js/material.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/js/dashboard.js"></script>
<!-- End custom js for this page-->

<?php if (isset($_SESSION['message'])) { ?>
    <div id="error-dialog"
         class="mdc-dialog mdc-dialog--open"
         role="alertdialog" aria-modal="true"
         aria-labelledby="confirmation-dialog-label" aria-describedby="confirmation-dialog-description">
        <div class="mdc-dialog__scrim"></div><div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <h2 id="confirmation-dialog-label" class="mdc-dialog__header__title">An error occurred</h2>
                <section id="confirmation-dialog-description" class="mdc-dialog__body">
                    <?php echo $_SESSION['message']; ?>
                </section>
                <footer class="mdc-dialog__footer">

                    <button type="button"
                            id="ok-button"
                            class="mdc-button mdc-dialog__button mdc-dialog__button--default mdc-ripple-upgraded"
                            data-mdc-dialog-action="accept">
                        OK</button>
                </footer>
            </div>
        </div>
    </div>
    <script>
        const dialog = new mdc.dialog.MDCDialog(document.getElementById('error-dialog'));

        function closeDialog() {
            // some stuff
            dialog.close();
        }

        $( document ).ready( function () {
            $('#ok-button').click(function () {
                closeDialog();
            });
        });
    </script>
<?php } ?>


</body>

</html>