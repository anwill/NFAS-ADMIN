
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-7">
                                <section class="purchase__card_section">
                                    <?php echo $club->name; ?>
                                </section>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
                                <section class="purchase__card_section">
                                    <?php echo $club->email; ?>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card table-responsive">
                        <div class="table-heading px-2 px-1 border-bottom">
                            <h1 class="mdc-card__title mdc-card__title--large">Future Shoots</h1>
                        </div>
                        <table class="table">
                            <thead>

                            <tr>
                                <th class="text-left">Shoot Start Date</th>
                                <th class="text-left">Shoot End Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($club->shoots) > 0) {
                                foreach ($club->shoots as $shoot) {

                                    ?>

                                    <tr>
                                        <td class="text-left"><?php echo $shoot->date_start; ?></td>
                                        <td class="text-left"><?php echo $shoot->date_end; ?></td>
                                        <td><?php echo $shoot->description; ?></td>
                                        <td><?php echo $shoot->status; ?></td>
                                        <td>
                                            <div class="col mdc-button" data-mdc-auto-init="MDCRipple">
                                                <i id="edit-button" data-id="<?php echo $shoot->id; ?>" class="mdi mdi-table-edit text-blue"></i>
                                            </div>
                                            <div class="col mdc-button" data-mdc-auto-init="MDCRipple">
                                                <i id="delete-button" data-id="<?php echo $shoot->id; ?>" class="mdi mdi-delete text-red"></i>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="5">No future shoots</td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#delete-button').click(function () {
                if (confirm("Are you sure you want to delete this shoot? It will delete all booked in archers")) {
                    alert('NOT YET IMPLEMENTED..');
                }
            }) ;
            $('#edit-button').click(function (e) {
                window.location('/index.php/booking/view_shoot/' + e.data('id'));
            }) ;

        });
    </script>