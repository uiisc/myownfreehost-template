<?php
if (!defined('IN_SYS')) {
    // exit('禁止访问');
    header("Location: ../../clientarea.php");
    exit;
}
?>

<footer class="footer navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-inner navbar-content-center" style="padding-top:15px;">
            <ul class="navbar-left list-inline text-center text-muted credit">
                <li>
                    <span class="co">&copy;&nbsp;<?php echo $CopyRightYear; ?>&nbsp;<a href="<?php echo setRouter('index');?>"><?php echo $brandName; ?></a>&nbsp;</span>
                    <span class="co">&nbsp;Powered by <a href="https://crogram.com" target="blank">Crogram</a>&nbsp;</span>
                    <span class="co">&nbsp;Partnered with <a href="https://ifastnet.com/" name="jump-ifastnet" target="blank">iFastNet</a>&nbsp;</span>
                </li>
            </ul>
            <ul class="legal navbar-right list-inline text-center">
                <li class="dropup">
                    <div class="dropdown-toggle" id="changelanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-globe"></span>
                        <a href="#"><?php echo $languages[$current_lang][0]; ?></a>
                    </div>
                    <ul class="dropdown-menu language-change"><?php echo $language_tags; ?></ul>
                </li>
                <li><a href="<?php echo setRouter('about'); ?>"><?php echo I18N('about'); ?></a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/common.js?_=<?php echo $static_release; ?>"></script>
<script src="assets/js/clientarea.js?_=<?php echo $static_release; ?>"></script>

</body>

</html>