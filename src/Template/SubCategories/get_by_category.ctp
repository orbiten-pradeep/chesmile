<?php 
foreach ($subCategories as $key => $value): ?>
<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php endforeach; 
?>


<?php 
/*
foreach ($subCategories as &$$article) {
    unset($article->generated_html);
}
echo json_encode(compact('subCategories'));*/
?>