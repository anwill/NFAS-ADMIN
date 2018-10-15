
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
                                                <i class="mdi mdi-tooltip-edit text-green"></i>
                                            </div>
                                            <div class="col mdc-button" data-mdc-auto-init="MDCRipple">
                                                <i class="mdi mdi-delete text-red"></i>
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
