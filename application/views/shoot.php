<link rel="stylesheet" href="/css/material-datetime-picker.css">
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
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                                Start Date
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                <input name='date_from' class="c-datepicker-input-from" />
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                                End Date
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                <input name='date_to' class="c-datepicker-input-to" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/js/material-datetime-picker.js"></script>
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


        });

        import MaterialDateTimePicker from 'material-datetime-picker';

        const from = document.querySelector('.c-datepicker-input-from');
        const from_picker = new MaterialDateTimePicker()
            .on('submit', (val) => {
                from.value = val.format("YYYY/MM/DD");
            });

        from.addEventListener('focus', () => from_picker.open());

        const to = document.querySelector('.c-datepicker-input-to');
        const to_picker = new MaterialDateTimePicker()
            .on('submit', (val) => {
                to.value = val.format("YYYY/MM/DD");
            });

        to.addEventListener('focus', () => to_picker.open());

    </script>