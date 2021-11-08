<!-- FOOTER -->
<?php
global $GMOPlugin;
$optionTheme  = $GMOPlugin->themeSetting->getSettings(); 
?>
<footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                        <?php
                            if (is_active_sidebar('bas-footer-about')) {
                                dynamic_sidebar('bas-footer-about');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <?php
                            if (is_active_sidebar('bas-footer-about2')) {
                                dynamic_sidebar('bas-footer-about2');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php
                            if (is_active_sidebar('bas-footer-info')) {
                                dynamic_sidebar('bas-footer-info');
                            }
                            ?>
                    </div>
                    <div class="col-md-3">
                    <?php
                            if (is_active_sidebar('bas-footer-tag')) {
                                dynamic_sidebar('bas-footer-tag');
                            }
                            ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="copyright"><?php echo !empty($optionTheme['gmo_footer_copyright']) ? $optionTheme['gmo_footer_copyright'] : ''?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payments">
                            <ul>
                                <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<!-- JS Global -->
<?php wp_footer() ?>
</body>
</html>