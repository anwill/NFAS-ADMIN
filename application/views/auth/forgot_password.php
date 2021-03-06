
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
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                            <label class="mdc-text-field w-100">
                                                <?php
                                                $attributes = array('class'=>'mdc-text-field__input', 'placeholder'=>'Email');
                                                echo form_input($identity,'',$attributes);
                                                ?>
                                                <div class="mdc-text-field__bottom-line"></div>
                                            </label>

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
