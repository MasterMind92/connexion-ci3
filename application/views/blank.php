<?php $this->load->view('partials/head');?>
<?php $this->load->view('partials/admin/sidebar');?>
<div id="main">

    <?php $this->load->view($view,['user'=>$user]);?>

</div>

<?php $this->load->view('partials/foot');?>