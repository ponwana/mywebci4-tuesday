<h1>Update Actor</h1>
<hr>
<div class="mt-3">
<form id="update-form" action="<?= site_url('/updateactor'); ?>"
    method="post" name="update_actor"> 
    <div class="form-group">
        <label for="name"> Name </label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="address"> Address </label>
        <textarea name="address" class="form-control" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="sex"> Sex </label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" value="1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
            </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" value="2" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="birthday"> Birthday </label>
        <input type="date" name="birthday" class="form-control">
    </div>

    <div class="form-group">
        <label for="age"> Age </label>
        <input type="text" name="age" class="form-control">
    </div>

    <div class="form-group">
        <label for="activity"> Activity </label>
        <select class="form-select"  name="activity" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Sport">Sport</option>
            <option value="Movie">Movie</option>
            <option value="Music">Music</option>
            <option value="Games">Games</option>
            <option value="Shopping">Shopping</option>
        </select>
    </div>

    <div class="form-group">
        <label for="image"> Image </label>
        <input type="text" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" 
        class = "btn btn-success mt-2" value="Update Data">

        <a href="<?php echo site_url('/actorlist'); ?>" 
        class="btn btn-primary"> Back </a>
    </div>
</form>


</div>