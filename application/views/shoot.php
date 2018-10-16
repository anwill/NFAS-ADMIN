<link rel="stylesheet" href="/node_modules/@chenfengyuan/datepicker/dist/datepicker.css">
<script src="/node_modules/@chenfengyuan/datepicker/dist/datepicker.js"></script>

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                <div class="template-demo">
                                    <div id="demo-tf-box-wrapper">
                                        <div id="tf-box-example" class="mdc-text-field mdc-text-field--textarea mdc-text-field--box w-100 mdc-text-field--upgraded mdc-ripple-upgraded mdc-ripple-upgraded--background-active-fill mdc-ripple-upgraded--foreground-activation mdc-text-field--invalid" style="--mdc-ripple-fg-size:208.387px; --mdc-ripple-fg-scale:1.73618; --mdc-ripple-fg-translate-start:34.3258px, -66.7172px; --mdc-ripple-fg-translate-end:69.4625px, -76.1937px;">
                                            <textarea required=""
                                                      pattern=".{1,}"
                                                      type="text"
                                                      name="description"
                                                      id="tf-box"
                                                      cols="80"
                                                      rows="2"
                                                      class="mdc-text-field__input"
                                                      style="width: 100%;"
                                                      aria-controls="name-validation-message"
                                            ><?php echo $shoot->description; ?></textarea>
                                            <label for="tf-box" class="mdc-text-field__label mdc-text-field__label--shake">Description</label>
                                            <div class="mdc-text-field__bottom-line" style="transform-origin: 138px center"></div>
                                        </div>
                                        <p class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg" id="name-validation-msg">
                                            Must have a description
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                <div id="tf-box-example" class="mdc-text-field mdc-text-field--box w-100 mdc-text-field--upgraded mdc-ripple-upgraded mdc-text-field--invalid mdc-text-field--focused" style="--mdc-ripple-fg-size:208.387px; --mdc-ripple-fg-scale:1.73618; --mdc-ripple-fg-translate-start:58.6383px, -75.7875px; --mdc-ripple-fg-translate-end:69.4625px, -76.1937px;">
                                    <input name="date_start" data-toggle="datepicker"
                                           required=""
                                           pattern=".{1,}"
                                           type="text" id="date-start" class="mdc-text-field__input"
                                           aria-controls="name-validation-message"
                                           value="<?php echo $shoot->date_start; ?>">
                                    <label class="mdc-text-field__label mdc-text-field__label--float-above" for="date-start">
                                        Start Date
                                    </label>
                                    <div class="mdc-text-field__bottom-line mdc-text-field__bottom-line--active" style="transform-origin: 162px center"></div>
                                    <p class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg" id="name-validation-msg">
                                        Must have a start date
                                    </p>
                                </div>
                            </div>

                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                                <div id="tf-box-example" class="mdc-text-field mdc-text-field--box w-100 mdc-text-field--upgraded mdc-ripple-upgraded mdc-text-field--invalid mdc-text-field--focused" style="--mdc-ripple-fg-size:208.387px; --mdc-ripple-fg-scale:1.73618; --mdc-ripple-fg-translate-start:58.6383px, -75.7875px; --mdc-ripple-fg-translate-end:69.4625px, -76.1937px;">
                                    <input name="date_end" data-toggle="datepicker"
                                           pattern=".{1,}"
                                           type="text" id="date-start" class="mdc-text-field__input"
                                           aria-controls="name-validation-message"
                                           value="<?php echo $shoot->date_end; ?>">
                                    <label class="mdc-text-field__label mdc-text-field__label--float-above" for="date-start">
                                        End Date
                                    </label>
                                    <div class="mdc-text-field__bottom-line mdc-text-field__bottom-line--active" style="transform-origin: 162px center"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function(){
            $('#delete-button').click(function () {
                if (confirm("Are you sure you want to delete this shoot? It will delete all booked in archers")) {
                    alert('NOT YET IMPLEMENTED..');
                }
            }) ;
            $('#edit-button').click(function () {
                window.location.href = '/index.php/booking/view_shoot/' + $(this).data('id');
            }) ;

            $('[data-toggle="datepicker"]').datepicker({
                autoHide: true,
                format: 'yyyy/mm/dd'
            });

        });


    </script>