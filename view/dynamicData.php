<?php
include "../common/header.php";
?>

<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Dynamic Data Form</h1>
            <form id="dynamic-data-form" method="post" enctype="multipart/form-data">

                <div class="row" id="name-div">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"  placeholder="Name" name="name[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-sm"
                                    style="margin-top: 35px;" onclick="addNameField()"> Add +
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="teacher-div">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-label">Select Teacher</label>
                            <select class="form-control" name="teacher[]">
                                <option value="" selected disabled>Select Teacher</option>
                                <option value="Ahmad">Ahmad</option>
                                <option value="Ali">Ali</option>
                                <option value="Ammar">Ammar</option>
                                <option value="Hammad">Hammad</option>
                                <option value="Hamza">Hamza</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-sm"
                                    style="margin-top: 35px;" onclick="addTeacherField()"> Add +
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="about-div">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-label">About Yourself</label>
                            <textarea class="form-control" id="txt-about" rows="3" name="about[]"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-sm"
                                    style="margin-top: 55px;" onclick="addAboutField()"> Add +
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="image-div">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-label">Select Image</label>
                            <input type="file" name="image[]" class="form-control-file" id="image-id" aria-describedby="fileHelp">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-sm"
                                    style="margin-top: 35px;" onclick="addImageField()"> Add +
                            </button>
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn-submit-data" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include "../common/footer.php";
?>
<script src="js/formFunctions.js"></script>
<script src="js/addDynamicFields.js"></script>