
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/pace-js@1.2.4/pace.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.4.0/dist/perfect-scrollbar.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.9/dist/js/coreui.min.js"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-plugin-chartjs-custom-tooltips@1.0.0/dist/js/custom-tooltips.min.js"></script>

        <?php if($this->uri->segment(1) == 'admin') : ?>
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
        <?php endif; ?>

        <?php $pages = ['customers'];
        if (in_array($this->uri->segment(1), $pages)) : ?>
        <script src="<?php echo base_url('assets/js/_highlight.js'); ?>"></script>
        <?php endif; ?>


        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-pjax@2.0.1/jquery.pjax.min.js"></script>
