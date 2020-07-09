<?php
	include_once('inc/pages-api.php');
	$resource_path = drupal_get_path('theme', 'ilc_pages') .'/md-bootstrap/';
	$css_perpage = array('group' => CSS_THEME, 'every_page' => FALSE);
	drupal_add_css($resource_path . 'font-awesome-4.7.0/css/font-awesome.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/bootstrap.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/mdb.min.css', $css_perpage);
	drupal_add_css($resource_path . 'custom/css/user-login.tpl.css', $css_perpage);
	$form_filter = array('#description'=>'', '#title'=>'', '#theme_wrappers'=>'');
	$form['name']['#attributes']['class'][] = 'form-control';
	$form['pass']['#attributes']['class'][] = 'form-control';
	$username_field = array_diff_key($form['name'], $form_filter);
	$password_field = array_diff_key($form['pass'], $form_filter);
	if(isset($_GET['a']) AND !empty($_GET['a'])){
            $MY_TOKEN = $_GET['a'];
            $loginUrl = external_auth_login_credentials($MY_TOKEN);
	    if(function_exists('external_auth_login_credentials') && $loginUrl != FALSE){
                 drupal_goto($loginUrl); exit;
            } else {
	    $register_link = ' Please go back here after you <a href="http://dilnet.upd.edu.ph/what-is-a-dilnet-account/" target="_blank">Register DILNET Account</a>. Thank you!';
 	    drupal_set_message(t('You account does not exists!'. $register_link), 'error');
	    drupal_goto('user');
	    }
	}
?>
<style>
#content {background: #fff !important;padding: 0 !important;border: none !important;}
.not-logged-in.page-user #columns{ margin: 0px !important;border: none !important;border-bottom: none !important;}
.footer-login{display: none !important;}
</style>
<body onload="removeClass()">
    <!--Content-->
    <div class="container">
        <div class="row">
        <!--Modal: Login Form-->
	<div class="modal" style="display: block;">
                <div class="modal-dialog cascading-modal" role="document">
                    <!--Content-->
                <form action="<?php echo $form['#action']; ?>" id="user-login"  method="post">
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header white-text">
                            <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
                            <!-- button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button -->
                        </div>
                        <!--Body-->
                        <div class="modal-body">
			<?php if(true): ?>
                             <?php print drupal_render($form['form_id']); ?>
                             <?php print drupal_render($form['form_build_id']); ?>
                             <div class="md-form form-sm">
                                <i class="fa fa-user prefix"></i>
                                <!-- input type="text" id="username" name="name"  class="form-control" -->
                             <?php print drupal_render($username_field); ?>
                                <label for="username">Your username</label>
                             </div>
                             <div class="md-form form-sm">
                                <i class="fa fa-lock prefix"></i>
                                <!-- input type="password" id="password" name="pass" class="form-control" -->
                             <?php print drupal_render($password_field); ?>
                                <label for="password">Your password</label>
                             </div>
                             <div class="text-center mt-2">
                                <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                             </div>
			<?php else: ?>
		             <div class="text-center mt-2">
				<a href="<?php echo $autoLoginUrl ?>" class="btn btn-info" >Log in <i class="fa fa-sign-in ml-1"></i></a>
                             </div>
			<?php endif; ?>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="http://dilnet.upd.edu.ph/what-is-a-dilnet-account" target="_blank">Sign Up</a></p>
                                <p>Forgot <a href="?q=user/password/">Password?</a></p>
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
    <!--/.Content-->
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
        drupal_add_js($resource_path . 'custom/js/user-login.tpl.js', $js_perpage);
        drupal_add_js('new WOW().init();', array('group'=>JS_THEME, 'every_page'=> FALSE, 'type'=>'inline', 'scope'=>'footer'));

?>
