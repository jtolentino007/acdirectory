<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('Establishment_category/create'); ?>

<label for="est_category_name">Establishment Category Name:</label>
<input type="input" class="form-control" name="est_category_name">
<label for="est_category_desc">Establishment Category Description:</label>
<input type="input" class="form-control" name="est_category_desc">
<input type="submit" name="submit" value="Save Establishment Category Name">

</form>
