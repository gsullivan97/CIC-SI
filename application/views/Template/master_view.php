<?php
$this->load->view('Template/master_header_view');
$this->load->view('Template/master_sidebar_top');
$this->load->view('Template/master_sidebar_left');
?>

<section>
    <?php echo $the_view_content; ?>
</section>

<?php
$this->load->view('Template/master_footer_view');
?>