<?php
  	$resource_path = drupal_get_path('theme', 'ilc_pages') .'/md-bootstrap/';
  	include_once('inc/pages-api.php');
  	include_once('inc/pages-activity.php');
	$css_perpage = array('group' => CSS_THEME, 'every_page' => FALSE);
	drupal_add_css($resource_path . 'font-awesome-4.7.0/css/font-awesome.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/bootstrap.min.css', $css_perpage);
	drupal_add_css($resource_path . 'css/mdb.min.css', $css_perpage);
	drupal_add_css($resource_path . 'custom/css/page--front.tpl.css', $css_perpage);
  	global $user;
  	$form = drupal_get_form('user_login');
	$form_filter = array('#description'=>'', '#title'=>'', '#theme_wrappers'=>'');
	//$form['name']['#attributes']['class'][] = 'form-control';
	$form['pass']['#attributes']['class'][] = 'form-control';
	//$username_field = array_diff_key($form['name'], $form_filter);
	$password_field = array_diff_key($form['pass'], $form_filter);
	$meta_tags = array(
             'og_title' => array('#tag' => 'meta','#attributes' => array('property' => 'og:title','content' => 'Pages')),
             'og_image' => array('#tag' => 'meta','#attributes' => array('property' => 'og:image','content' => "http://ilc.upd.edu.ph/wp-content/uploads/2018/04/pagesweb.png")),
             'og_type' => array('#tag' => 'meta','#attributes' => array('property' => 'og:type','content' => 'website')),
             'og_content' => array('#tag' => 'meta','#attributes' => array('property' => 'og:description','content' => 'Pages (pages.upd.edu.ph) is a free, easy-to-use, do-it-yourself platform for the creation and maintenance of online sites for UPD units and projects as well as for profiles of UPD faculty and researchers. It seeks to fill the gap between well-developed UPD websites and outdated (if not abandoned or non-existent) sites of certain UPD units, projects, faculty, researchers.')),
        );
        foreach($meta_tags as $key => $data){
             drupal_add_html_head($data, $key);
        }
	$login_msg = drupal_get_messages();
        $login_err = '<p style="color:#fff;max-width:40rem;text-align:right;margin:0;">';
        foreach($login_msg['error'] as $messages){
            $login_err .= $messages;
        }
        $login_err .= '</p>';
?>

<body onload="removeClass()">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar"><!-- removed fixed-top -->
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Pages.UPD</a> -->
            <!-- button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button -->
                <img src="<?php echo $resource_path?>img/pages-logo2.png" class="custom-logo2 z-depth-2"/>
            <div class="collapse navbar-collapse" style="display:block;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <img src="<?php echo $resource_path?>img/pages-logo2.png" class="custom-logo z-depth-2"/>
                    <!-- <li class="nav-item active"> -->
                        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    <!-- </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown 
                            </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
                <form class="form-inline">
		<?php echo $login_err; ?>
		<?php if(empty($user->uid)){ ?>
                    <a class="btn btn-info" data-toggle="modal" href="#basicExample">Login</a>
		<?php } else { ?>
		    <a class="btn btn-info" style="visibility: hidden;"  href="#">Login</a>
		<?php } ?>
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

<!--Modal: Login Form-->
<div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
	<form action="<?php echo $form['#action'];?>" method="post">
	<!-- form action="user?destination=user" method="post" -->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header white-text">
                <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
			<?php print drupal_render($form['form_id']); ?>
			<?php print drupal_render($form['form_build_id']); ?>
                <div class="md-form form-sm">
                    <i class="fa fa-user prefix"></i>
                    <!-- input type="text" id="username" name="name"  class="form-control" -->
			<input class="form-control required" type="text" id="edit-name" name="name" value="" size="60" maxlength="60" autofocus>
			<?php /* print drupal_render($username_field);*/ ?>
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

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-center text-md-left mt-1">
                    <p>No DilNet account? <a href="http://dilnet.upd.edu.ph/what-is-a-dilnet-account/" target="_blank">Get DilNet account</a></p>
                    <p>Forgot <a href="?q=user/password/">Password?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
	</form>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login Form-->


    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('<?php echo $resource_path ?>img/ilc-building.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Launch Website Instantly</h1>
                        </li>
                        <li>
                            <p>Create, layout, design and publish your own website Online.</p>
                        </li>
                        <li>
			<?php //if(!empty($user->uid)){ 
 			?>
                            <!-- a class="btn btn-info btn-lg" rel="nofollow" href="?q=site/register">Create Website</a -->
			<?php //}
			 ?>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <!-- div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;" -->
	    <div class="carousel-item view hm-black-light" style="background-image: url('<?php echo $resource_path ?>img/responsive-pages2.png'); background-repeat: no-repeat; background-size: contain; background-position: right 10px;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Responsive Website viewable to any devices. </h1>
                        </li>
                        <li>
                            <p>A good start to create your responsive website. User must have a DilNet (@upd.edu.ph) account to create a website.</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://dilnet.upd.edu.ph/kb/get-a-dilnet-account/" class="btn btn-info btn-lg" rel="nofollow">How to get a DilNet account</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('<?php echo $resource_path ?>img/free-themes.png'); background-repeat: no-repeat; background-size: cover; background-position: 50% 10%;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Enjoy using our Free Themes.</h1>
                        </li>
                        <li>
                            <p>Try to make your website using our Free Themes.</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://ilc.upd.edu.ph/upgrading-enhancement-of-ilc-services/pages" class="btn btn-info btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
            <h1 class="h1-responsive center text-center">
              <small class="text-muted">Featured Themes</small>
            </h1>
        <div class="row my-5">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn hoverable z-depth-0" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid img-min" src="<?php echo $resource_path ?>img/blue-theme.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Blue Theme</h4>
                        <!--Text-->
                        <!-- p class="card-text">It's just one, two step to publish your website online.</p -->
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn z-depth-0" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid img-min" src="<?php echo $resource_path ?>img/ilcdiliman-one.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Cyan Theme</h4>
                        <!--Text-->
                        <!-- p class="card-text">No more programming just copy and paste your content then save.</p -->
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn z-depth-0" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid img-min" src="<?php echo $resource_path ?>img/green-theme.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Green Theme</h4>
                        <!--Text-->
                        <!-- p class="card-text">Share your website to your desired social media platform.</p -->
                        <!-- <a href="#" class="btn btn-info">Read more</a> -->
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <hr>
        <h1 class="h1-responsive center text-center">
              <small class="text-muted">ILC Diliman Articles</small>
            </h1>
        <div class="row my-5">
<?php
  $ct = 0;
  $delay = 0;
  $data = getArticleText();
  foreach( $data as $datas){
        if( $ct++ < 3) {
  ?>
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="<?php echo $delay = $delay + .2; ?>">

                    <!--Card image-->
                    <img class="img-fluid img-min" src="<?php echo getFeaturedImage($datas['featured_media']) ?>">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title"><?php echo $datas['title']['rendered'];?></h4>
                        <!--Text-->
                        <p class="card-text"><?php echo substr($datas['excerpt']['rendered'],0,100).'...'; ?></p>
                        <a href="<?php echo $datas['link']; ?>" target="_blank" class="btn btn-info">Read more</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->
<?php }} ?>
        </div>
        <hr>
        <h1 class="h1-responsive center text-center">
                <small class="text-muted">Recent Updates</small>
              </h1>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                        <thead>
                          <tr>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
<?php
if($result->rowCount() > 0){
	foreach($result as $row){
		$diff = $row->changed - $row->created;
        	$e_time = time() - $row->changed;
        	$title = htmlspecialchars($row->title, ENT_QUOTES, 'UTF-8');
		$status = ($diff < 300) ? "created" : "edited";
?>
        	</tr>
        	<tr align='center'>
        	<th scope='row' style="color: #7b1113;"><?php echo time_elapsed($e_time).' '.ucfirst($row->type); ?></th>
        	<td><a href='node/<?php echo $row->nid; ?>'><?php echo $title; ?></a> was <?php echo $status; ?></td>
        	</tr>
<?php
	}
}
?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/.Content-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Services</h5>
                    <ul>
                        <li><a href="http://ilc.upd.edu.ph/training-education-development-and-support" target="_blank">Training</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/Guidelines_for_video_or_webcast_coverage_by_DILC" target="_blank">Streaming / Video Coverage</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/Category:Podcasts" target="_blank">Podcasting</a> / 
			    <a href="http://iskwiki.upd.edu.ph/index.php/Category:Vodcast" target="_blank">Vodcasting</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/Technology_integration_in_teaching_and_learning" target="_blank">Education Tech Consulting</a></li>
                        <li><a href="http://ilc.upd.edu.ph/about-internship" target="_blank">Internship / On-the-Job Training</a></li>
                    </ul>
		    <h5 class="title font-bold mt-3 mb-4">Resources</h5>
                    <ul>
                        <li><a href="https://github.com/openscholar/starterkit" target="_blank">Theme Starterkit</a></li>
                    </ul>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Websites</h5>
                    <ul>
                        <li><a href="http://uvle.upd.edu.ph" target="_blank">UVLe</a></li>
                        <li><a href="http://ilc.upd.edu.ph/working-project-series/upcurrents" target="_blank">UPCurrents</a></li>
                        <li><a href="http://conference.upd.edu.ph" target="_blank">Conference.UPD</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph" target="_blank">iskWiki!</a></li>
                        <li><a href="http://ilc.upd.edu.ph/upgrading-enhancement-of-ilc-services/obletorr" target="_blank">Obletorr</a></li>
                        <!-- li><a href="http://up-fm.org" target="blank">UP-FM</a></li -->
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Support</h5>
                    <ul>
                        <li><a href="https://helpdesk.ilc.upd.edu.ph" target="_blank">Helpdesk</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/Category:Tech_Support" target="_blank">Tech Support Matters</a></li>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/Category:DILC_Matters" target="_blank">DILC Matters</a></li>
                    </ul>
                    <h5 class="title font-bold mt-3 mb-4">Download</h5>
                    <ul>
                        <li><a href="http://iskwiki.upd.edu.ph/images/9/91/Dilc_brochure_2009_web_dist.pdf" target="_blank">DILC Brochure</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">About</h5>
                    <ul>
                        <li><a href="http://ilc.upd.edu.ph/upgrading-enhancement-of-ilc-services/pages" target="_blank">Pages</a></li>
                        <li><a href="http://ilc.upd.edu.ph" target="_blank">Interactive Learning Center</a></li>
                    </ul>
                    <h5 class="title font-bold mt-3 mb-4">Research</h5>
                    <ul>
                        <li><a href="http://iskwiki.upd.edu.ph/index.php/D_I_L_C_Media_Lab" target="_blank">DILC Media Lab</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- <hr> -->

        <!--Call to action -->
        <div class="call-to-action"  style="background-color: #004421 !important;">
                <h5>Interactive Learning Center Diliman</h5>
                <p>DILC Bldg., corner Apacible St. and Magsaysay Ave., University of the Philippines, Diliman, Quezon City 1101</p>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2014 - <?php echo date('Y'); ?> Copyright <a href="http://www.ilc.upd.edu.ph">Interactive Learning Center Diliman</a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <div class="privacy-content"></div>
    <!--/.Footer-->
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
	drupal_add_js($resource_path . 'custom/js/page--front.tpl.js', $js_perpage);
	drupal_add_js('new WOW().init();', array('group'=>JS_THEME, 'every_page'=> FALSE, 'type'=>'inline', 'scope'=>'footer'));

 ?>
