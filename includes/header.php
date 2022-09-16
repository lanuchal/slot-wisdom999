<?php include 'configImgs.php'; ?>
<?php include 'configLinks.php'; ?>

<div class="container-md">
    <!-- <div class='row m-0'> -->
    <div class="d-flex align-items-center">
        <div class="p-2 flex-grow-1">
            <div class="d-flex box-title align-items-center">
                <i class="bi-text-center curcer" id="o-menu-left" onclick="openMenubar()"></i>
                <i class="bi-x-lg curcer" style="display:none;" id="c-menu-left"></i>
                <a href="?page=1">
                    <img class="d-block img-head" src=<?php echo $img_logo ?> alt="">
                </a>
            </div>
        </div>
        <div class="p-2"><a href="<?php echo $link_sign_in; ?>" target="_blank">
                <div class="p-2 btn-mini">
                    เข้าสู่ระบบ
                </div>
            </a></div>
        <div class="p-2"><a href="<?php echo $link_sign_up; ?>" target="_blank">
                <div class="btn-sign-up p-2 btn-mini">
                    สมัครสมาชิก
                </div>
            </a></div>
    </div>
</div>