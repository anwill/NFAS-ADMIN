
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
                                    <div class="mdc--tile mdc--tile-danger rounded">
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
                                <h1 class="mdc-card__title mdc-card__title--large">Employee status</h1>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-left">Product</th>
                                    <th>Cost</th>
                                    <th>Sales amount</th>
                                    <th>Shipping cost</th>
                                    <th>Units sold</th>
                                    <th>Profit generated</th>
                                    <th>Left in stock</th>
                                    <th>Returns</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-left">T-shirts</td>
                                    <td>250</td>
                                    <td>300</td>
                                    <td>60</td>
                                    <td>3453</td>
                                    <td>76</td>
                                    <td>453643</td>
                                    <td>300</td>
                                    <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Baseball Hat</td>
                                    <td>457</td>
                                    <td>204</td>
                                    <td>35</td>
                                    <td>6754</td>
                                    <td>35</td>
                                    <td>345623</td>
                                    <td>546</td>
                                    <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Tennis Racket</td>
                                    <td>250</td>
                                    <td>350</td>
                                    <td>38</td>
                                    <td>3289</td>
                                    <td>45</td>
                                    <td>54662</td>
                                    <td>278</td>
                                    <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Gloves</td>
                                    <td>250</td>
                                    <td>300</td>
                                    <td>60</td>
                                    <td>3453</td>
                                    <td>76</td>
                                    <td>453643</td>
                                    <td>300</td>
                                    <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Shoes</td>
                                    <td>673</td>
                                    <td>457</td>
                                    <td>56</td>
                                    <td>4467</td>
                                    <td>98</td>
                                    <td>345723</td>
                                    <td>350</td>
                                    <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
