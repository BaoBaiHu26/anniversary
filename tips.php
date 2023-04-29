<?php 
include ('header.php'); 
// include ('db/dbconfig.php');

?>
<br>
<section id="fforu">
    <div class="container">
        <div class="row foru">
            <div class="col-md-3 album">
                <img class="tips"
                    src="img/𝐍𝐎𝐓𝐈𝐂𝐄 𝐌𝐄 𝐂𝐎𝐋𝐃 𝐇𝐄𝐀𝐑𝐓 𝐂𝐇𝐀𝐍┆𝐇𝐀𝐈𝐊𝐘𝐔𝐔 ✓ - 𝐍𝐎𝐓𝐈𝐂𝐄 𝐌𝐄! 大好き 1.png"
                    alt="">
                <h3 class="forualbum">Our Album</h3>
                <a href="album.php"><button class="forubutton">View</button></a>
            </div>
            <div class="col-md-3 coupons">
                <img class="tips" src="img/Ticket_Illustration-removebg-preview.png" alt="">
                <h3 class="forucoupons">Coupons</h3>
                <a href="coupons.php"><button class="forucbutton">Claim Now</button></a>
            </div>
            <div class="col-md-3 letter">
                <img class="tips" src="img/Group 2.png" alt="">
                <h3 class="foruletter">Letter</h3>
                <button type="button" class="forulbutton" data-bs-toggle="modal" data-bs-target="#exampleModal">Wanna
                    Read?</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Happy Anniversary ❣️ </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="img/letter.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tips">
                <img class="tips" src="img/Round_Guy-removebg-preview.png" alt="">
                <h3 class="foruqna">Q & A Session xD</h3>
                <a href="qna.php"><button class="foruqbutton">Try Now</button></a>
            </div>
        </div>
    </div>
</section>
<?php include ('footer.php'); ?>