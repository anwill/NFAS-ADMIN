
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
                    <!--
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                    <section class="purchase__card_section">
                                        <pre><?php var_dump($club->latest); ?></pre>
                                    </section>
                                </div>

                            </div>
                        </div>
                    </div>
                    -->
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-layout-grid__inner w-100">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                <?php if (isset($last_shoot)) { ?>
                                    <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                                        <div class="mdc--tile mdc--tile-danger rounded">
                                            <i class="mdi mdi-account-settings text-white icon-md"></i>
                                        </div>
                                        <div class="text-wrapper pl-1">
                                            <h3 class="mdc-typography--display1 font-weight-bold mb-1"><?php echo $last_shoot->number_archers; ?></h3>
                                            <p class="font-weight-normal mb-0 mt-0">Last Shoot: <?php echo $last_shoot->date_start; ?></p>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                                        <div class="text-wrapper pl-1">
                                            <h3 class="mdc-typography--display1 font-weight-bold mb-1">No previous shoot</h3>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                <?php if (isset($next_shoot)) { ?>
                                <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                                    <div class="mdc--tile mdc--tile-<?php echo ($next_shoot->number_archers >= ($next_shoot->targets * $next_shoot->max_per_target) ? 'danger' : 'success') ?> rounded">
                                        <i class="mdi mdi-account-settings text-white icon-md"></i>
                                    </div>
                                    <div class="text-wrapper pl-1">
                                        <h3 class="mdc-typography--display1 font-weight-bold mb-1"><?php echo $next_shoot->number_archers; ?> / <?php echo ($next_shoot->targets * $next_shoot->max_per_target); ?></h3>
                                        <p class="font-weight-normal mb-0 mt-0">Next Shoot: <?php echo $next_shoot->date_start; ?></p>
                                    </div>
                                </div>
                                <?php } else { ?>
                                    <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                                        <div class="text-wrapper pl-1">
                                            <h3 class="mdc-typography--display1 font-weight-bold mb-1">No upcoming shoot</h3>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>


                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card table-responsive">
                            <div class="table-heading px-2 px-1 border-bottom">
                                <h1 class="mdc-card__title mdc-card__title--large">Latest Bookings</h1>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-left" colspan="1">Shoot</th>
                                    <th class="text-left" colspan="3">Booking</th>
                                    <th class="text-left" colspan="5">Archers</th>

                                </tr>

                                <tr>
                                    <th class="text-left">Date</th>
                                    <th class="text-left">Email</th>
                                    <th>Shoot Together</th>
                                    <th>Shoot Days</th>
                                    <th class="text-left">Name</th>
                                    <th>Class</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Club</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (count($club->latest) > 0) {
                                    foreach ($club->latest as $id) {

                                    ?>

                                    <tr rowspan="<?php count($id['archers'])-1; ?>">
                                        <td class="text-left"><?php echo $id['shoot']->date_start; ?></td>
                                        <td class="text-left"><?php echo $id['booking']->booker_email; ?></td>
                                        <td><?php echo ($id['booking']->shoot_together == 1 ? 'Yes' : 'No'); ?></td>
                                        <td><?php echo $id['booking']->shoot_days; ?></td>
                                        <?php
                                        $count = 1;
                                        foreach ($id['archers'] as $archer) {
                                            if ($count > 1) {
                                                echo "<tr><td colspan='4'></td>";
                                            }
                                            ?>
                                            <td class="text-left"><?php echo $archer->name; ?></td>
                                            <td><?php echo $archer->class; ?></td>
                                            <td><?php echo $archer->gender; ?></td>
                                            <td><?php echo $archer->age; ?></td>
                                            <td><?php echo $archer->club; ?></td>
                                        <?php
                                            if ($count > 1) {
                                                echo "</tr>";
                                            }
                                            $count++;
                                        } ?>
                                    </tr>
                                <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="9">No bookings in the last two weeks</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
