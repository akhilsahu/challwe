<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!-- Titlebar
================================================== -->
<?php if ($user['logged_in']) { ?>
    <div id="titlebar" class="single submit-page margin-top-90">
        <div class="container">
            <div class="sixteen columns">
                <h2><i class="fa fa-plus-circle"></i> Add Challenge</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Submit Page -->
        <div class="sixteen columns">
            <form method="POST" class="form" action="<?php echo site_url() . "/artist/addContest"; ?>" enctype="multipart/form-data">
                <div class="submit-page contact-form" style='margin-bottom: 50px;'>
                    <div class="display-full text-right">
                        <a href="<?php echo site_url(); ?>/artist/myContest" class="btn-primary button btn-challange">My Challenge</a>
                    </div>
                    <!-- Title -->
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Title</label>
                                    <input class="search-field" type="text" name="txt_contest_name" placeholder="" value=""/>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="col-sm-12 form-group">
                            <label>Description</label>
                            <textarea class="WYSIWYG" name="txt_description" id="txt_description" cols="35" rows="3" id="summary" spellcheck="true"></textarea>
                        </div>
                        <!-- Location -->
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Skills <span>(5 skills max)</span></label>
                                    <div>
                                        <select class="" id="int_skills" name="int_skills[]" multiple>
                                            <option value="">-Select-</option>
                                            <?php foreach ($skills as $val) { ?>
                                                <option value="<?php echo $val['int_field_id']; ?>"><?php echo $val['txt_field_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job Type -->
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Price <span id="span-price"></span></label>
                                    <div id="slider">
                                        <input data-role="date" type="text" name="dt_start_date" id="price_range" placeholder="price range">
                                    </div>
                                    <input type="hidden" name="txt_budget" id="txt_budget">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Start Date</label>
                                    <input data-role="date" type="text" name="dt_start_date" id="dt_start_date" placeholder="Start Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>End Date</label>
                                    <input data-role="date" type="text" name="dt_end_date" id="dt_end_date" placeholder="End Date">
                                </div>
                            </div>
                        </div>
                        <!-- Logo -->
                        <div class="col-sm-12 form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label>Attachments <span>(optional)</span></label>
                                    <div>
                                        <label class="upload-btn">
                                            <input type="file" multiple name="image_file[]" id="image_file" />
                                            <i class="fa fa-upload"></i> Browse
                                        </label>
                                        <span class="fake-input">No file selected</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider margin-top-0"></div>
                        <button type="submit" class="btn-primary button btn-challange" style="border: none;margin-left: 20px;">Create <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
<!-- WYSIWYG Editor -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('txt_description');
</script>
<script>
    $(document).ready(function () {
        $("#int_skills").select2();
        $("#dt_start_date").datepicker();
        $("#dt_end_date").datepicker();
        $("#slider").slider({
            value: 50,
            max: 99999,
            min: 10,
            stop: function (event, ui) {
                val = $("#slider").slider("value");
                $("#span-price").html("$" + val);
                $("#txt_budget").val(val);
            }
        });
        $("#span-price").html("$ 50");
        $("#txt_budget").val(50);
    });
</script>
