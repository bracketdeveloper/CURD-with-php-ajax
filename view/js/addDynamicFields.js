function addNameField(){
    $("#name-div").append('<div class="row col-lg-12"><div class="col-lg-8 col-md-6 col-xs-12"> <div class="form-group"> <input type="text" class="form-control"  placeholder="Name" name="name[]"> </div> </div> <div class="col-lg-4 col-md-6 col-xs-12"><button type="button" class="btn btn-danger btn-sm btnRemove" style="margin-top: 2px;"   onclick="removeNameField(this)">remove -</button></div></div>');

}

function removeNameField(thisCtrl) {
    $(thisCtrl).parent().prev().remove();
    $(thisCtrl).remove();
}

function addTeacherField(){
    $("#teacher-div").append('<div class="row col-lg-12"><div class="col-lg-8 col-md-6 col-xs-12"> <div class="form-group"><select class="form-control" name="teacher[]"> <option value="" selected disabled>Select Teacher</option><option value="Ahmad">Ahmad</option> <option value="Ali">Ali</option> <option value="Ammar">Ammar</option> <option value="Hammad">Hammad</option> <option value="Hamza">Hamza</option> </select> </div> </div><div class="col-lg-3 col-md-6 col-xs-12"><button type="button" class="btn btn-danger btn-sm btnRemove" style="margin-top: 5px;"   onclick="removeTeacherField(this)">remove -</button></div></div>');

}

function removeTeacherField(thisCtrl) {
    $(thisCtrl).parent().prev().remove();
    $(thisCtrl).remove();
}

function addAboutField(){
    $("#about-div").append('<div class="row col-lg-12"><div class="col-lg-8 col-md-6 col-xs-12"> <div class="form-group"><textarea class="form-control" rows="3" name="about[]"></textarea> </div> </div><div class="col-lg-3 col-md-6 col-xs-12"><button type="button" class="btn btn-danger btn-sm btnRemove" style="margin-top: 35px;"   onclick="removeAboutField(this)">remove -</button></div></div>');

}

function removeAboutField(thisCtrl) {
    $(thisCtrl).parent().prev().remove();
    $(thisCtrl).remove();
}

function addImageField(){
    $("#image-div").append('<div class="row col-lg-12"><div class="col-lg-8 col-md-6 col-xs-12" > <div class="form-group"><input type="file" name="image[]" class="form-control-file" aria-describedby="fileHelp"></div> </div><div class="col-lg-3 col-md-6 col-xs-12"><button type="button" class="btn btn-danger btn-sm btnRemove" style="margin-top: 3px;"   onclick="removeImageField(this)">remove -</button></div></div>');

}

function removeImageField(thisCtrl) {
    $(thisCtrl).parent().prev().remove();
    $(thisCtrl).remove();
}

