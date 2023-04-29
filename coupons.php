<?php 
include ('header.php'); 
// include ('db/dbconfig.php');

?>
<section>
    <div class="container">
        <div class="row mt-3">
            <h1 class="coupontext">Available Coupons</h1>
            <div class="col-md-6">
                <img src="img/coupon /1-removebg-preview.png " alt="">
            </div>
            <div class="col-md-6">
                <img src="img/coupon /2-removebg-preview.png " alt="">
            </div>
            <div class="col-md-6">
                <img src="img/coupon /3-removebg-preview.png " alt="">
            </div>
            <div class="col-md-6">
                <img src="img/coupon /4-removebg-preview.png " alt="">
            </div>
            <div class="col-md-6">
                <img src="img/coupon /5-removebg-preview.png " alt="">
            </div>
            <div class="col-md-6">
                <img src="img/coupon /6-removebg-preview.png " alt="">
            </div>
        </div>
        <hr>
        <div class="row mt-3 xcoupon">
            <h1 class="exclusive">🫣 Exclusive Coupons only for 11.04</h1>
            <div class="col-md-6">
                <img class="xcoupon" src="img/coupon /7-removebg-preview.png" alt="">
            </div>
            <div class="col-md-6">
                <img class="xcoupon" src="img/coupon /8-removebg-preview.png" alt="">
            </div>
        </div>
    </div>
</section>
<script>
let date = prompt("Type today's date! (dd/mm)");
let xcoupon = document.querySelector(".xcoupon");
if (date != "11/04") {
    xcoupon.innerHTML = "<h1>Sorry, Wrong Date! Reload again</h1>";
} else {
    alert("Get ready to claim your fav coupon, babe 😈");
}
</script>
<?php include ('footer.php'); ?>