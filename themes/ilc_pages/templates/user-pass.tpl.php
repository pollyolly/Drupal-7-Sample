<?php
	$resource_path = drupal_get_path('theme', 'ilc_pages') .'/md-bootstrap/';
	$form_filter = array('#description'=>'', '#title'=>'', '#theme_wrappers'=>'');
	$form['name']['#attributes']['class'][] = 'form-control';
	$email_field = array_diff_key($form['name'], $form_filter);
	$css_perpage = array('group' => CSS_THEME, 'every_page' => FALSE);
	drupal_add_css($resource_path . 'font-awesome-4.7.0/css/font-awesome.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/bootstrap.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/mdb.min.css', $css_perpage);
	drupal_add_css($resource_path . 'custom/css/user-pass.tpl.css', $css_perpage);
 ?>

<?php  //print drupal_render_children($form);
?>
<style>
#content {
   background: #fff !important;
   padding: 0 !important;
  border: none !important;
}
.not-logged-in.page-user #columns {
 margin: 0px !important;
border: none !important;
border-bottom: none !important;
}
</style>
<body onload="removeClass()">
<div class="container">
        <div class="row">
        <!--Modal: Login Form-->
        <div class="modal" style="display: block;">
                <div class="modal-dialog cascading-modal" role="document">
                    <!--Content-->
                <form action="<?php echo $form['#action']; ?>" id="user-pass"  method="post">
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header white-text">
                            <h4 class="title"><i class="fa fa-envelope"></i> Email Password</h4>
                            <!-- button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button -->
                        </div>
                        <!--Body-->
                        <div class="modal-body">
                        <?php print drupal_render($form['form_id']); ?>
                        <?php print drupal_render($form['form_build_id']); ?>
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                        	<?php print drupal_render($email_field); ?>
                                <label for="username">Your Username / Email</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Send Email <i class="fa fa-send ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="http://dilnet.upd.edu.ph/what-is-a-dilnet-account" target="_blank">Sign Up</a></p>
                                <p>Ready to <a href="?q=user">Log-In?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" style="visibility: hidden;" id="edit-submit" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
                    <!--/.Content-->
                </div>
        </div>
        <!--Modal: Login Form-->
        </div>
    </div>

</body>
<?php
        $js_perpage = array('group' => JS_THEME, 'every_page' => FALSE, 'scope'=>'footer');
//JQuery
        drupal_add_js($resource_path . 'js/jquery-3.1.1.min.js', $js_perpage);
//Bootstrap Dropdown
        drupal_add_js($resource_path . 'js/popper.min.js', $js_perpage);
//Bootstrap core Javascript
        drupal_add_js($resource_path . 'js/bootstrap.min.js', $js_perpage);
//MDB core Javascript
        drupal_add_js($resource_path . 'js/mdb.min.js', $js_perpage);
        drupal_add_js($resource_path . 'custom/js/user-pass.tpl.js', $js_perpage);
        drupal_add_js('new WOW().init();', array('group'=>JS_THEME, 'every_page'=> FALSE, 'type'=>'inline', 'scope'=>'footer'));

?>
