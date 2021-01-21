<header>
    <div id="header_img">
        <a href="<?php echo site_url('Gaming/index'); ?>">
            <img src="<?php echo base_url(); ?>images/Logo.png" alt="logo" height="60px">
        </a>
    </div>
    <ul id="header_menu">
        <?php $this->load->view($header); ?>
    </ul>

    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</header>
<script src="<?php echo base_url(); ?>js/scriptBurger.js"></script>