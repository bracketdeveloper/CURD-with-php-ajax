<?php
include "../common/header.php";
?>

<?php
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>

<div class="container">
    <div class="row">
       <div class="col-lg-12">
           <h1>Data Form</h1>
           <form id="data-form" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" name="email" class="form-control" id="txt-email" aria-describedby="emailHelp" placeholder="Enter email">
                   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>

               <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" id="txt-password" placeholder="Password" name="password">
               </div>

               <div class="form-group">
                   <label for="exampleSelect1">Age</label>
                   <select class="form-control" id="select-age" name="age">
                       <option selected>16</option>
                       <option>17</option>
                       <option>18</option>
                       <option>19</option>
                       <option>20</option>
                   </select>
               </div>

               <div class="form-group">
                   <label for="exampleSelect2">Select Hobbies</label>
                   <select multiple class="form-control" id="select-hobby" name="hobby[]">
                       <option value="reading">Reading</option>
                       <option value="music">Music</option>
                       <option value="travelling">Travelling</option>
                       <option value="sports">Sports</option>
                       <option value="writing">Writing</option>
                   </select>
               </div>

               <div class="form-group">
                   <label for="exampleTextarea">About Yourself</label>
                   <textarea class="form-control" id="txt-about" rows="3" name="about"></textarea>
               </div>

               <div class="form-group">
                   <label for="exampleInputFile">File input</label>
                   <input type="file" name="image" class="form-control-file" id="image-id" aria-describedby="fileHelp">
                   <small id="fileHelp"  class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
               </div>

               <fieldset class="form-group">
                   <legend>Select Gender</legend>
                   <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" class="form-check-input" id="radio-gender" name="gender" value="male">
                           Male
                       </label>
                   </div>
                   <div class="form-check">
                       <label class="form-check-label">
                           <input type="radio" class="form-check-input" name="gender" value="female">
                           Female
                       </label>
                   </div>
                   <div class="form-check disabled">
                       <label class="form-check-label">
                           <input type="radio" class="form-check-input" name="gender"  value="other">
                           Other
                       </label>
                   </div>
               </fieldset>

               <div class="form-check">
                   <label class="form-check-label">
                       <input type="checkbox" class="form-check-input" id="chk-must">
                       I agree with Terms and Conditions
                   </label>
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