<h1>Update Game</h1>
<hr>
<div class="mt-3">
<form id="update-form" action="<?= site_url('/updategame'); ?>"
    method="post" name="update_game"> 
    
    <input type="hidden" name="id" id="id" value="<?php echo $person_obj['id']; ?>">

    <div class="form-group">
        <label for="name"> Name </label>
        <input type="text" name="name" value="<?php echo $person_obj['name']; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="detail"> Detail </label>
        <textarea name="detail" class="form-control" rows="5"> <?= $person_obj['detail'] ?> </textarea>
    </div>

    <div class="form-group">
        <input type="submit" 
        class = "btn btn-success mt-2" value="Update Data">

        <a href="<?php echo site_url('/gamelist'); ?>" 
        class="btn btn-primary"> Back </a>
    </div>
</form>
</div>