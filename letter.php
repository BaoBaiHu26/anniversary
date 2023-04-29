<?php 
include ('header.php'); 
// include ('db/dbconfig.php');

?>

<button data-modal-target="#modal">Open Modal</button>
<div class="modal" id="modal">
    <div class="modal-header">
        <div class="title">Example Modal</div>
        <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        <img src="img/letter.png" alt="">
    </div>
</div>
<div id="overlay"></div>
<?php include ('footer.php'); ?>