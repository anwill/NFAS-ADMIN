
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">

                        <div class="mdc-card">
                            <section class="mdc-card__primary bg-white">
                                <?php echo form_open("auth/login");?>

                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <label class="mdc-text-field w-100">
                                                    <input type="text" name="identity" value="" id="identity" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label">Username</label>
                                                    <div class="mdc-text-field__bottom-line"></div>
                                                </label>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <label class="mdc-text-field w-100">
                                                    <input type="password" name="password" value="" id="password" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="password">Password</label>
                                                    <div class="mdc-text-field__bottom-line"></div>
                                                </label>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                                <div class="mdc-form-field">
                                                    <div class="mdc-checkbox">
                                                        <input type="checkbox" name="remember" value="1"  id="remember" class="mdc-checkbox__native-control"/>
                                                        <div class="mdc-checkbox__background">
                                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                                <path class="mdc-checkbox__checkmark__path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                            </svg>
                                                            <div class="mdc-checkbox__mixedmark"></div>
                                                        </div>
                                                    </div>
                                                    <label for="my-checkbox">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex align-item-center justify-content-end">
                                                <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                                            </div>
                                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                                            <?php
                                                    $attributes = array('class'=>'mdc-button mdc-button--raised w-100', 'data-mdc-auto-init'=>'MDCRipple');
                                                    echo form_submit('submit', lang('login_submit_btn'), $attributes);?>

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
