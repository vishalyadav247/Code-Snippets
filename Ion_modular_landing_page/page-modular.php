<?php /* Template Name: Modular Landing Page */
get_header(3);
?>
<style>
	/* form css */
	#home-banner.homeBanner h1 {
		font-size: 56px;
	}

	.frm_error{
		text-align: right !important;
		position: absolute;
    	right: 15px;
    	top: 0;
	}
	@media screen and (min-width:768px) {
		#home-banner .formCover {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 8px;
			float: right;
			max-width: 497px;
			width: 100%;
		}
	}

	@media screen and (max-width:767px) {
		#home-banner form {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			float: right;
			max-width: 497px;
			width: 100%;
		}

		#home-banner .formCover .formHeading {
			display: none;
		}

		#home-banner .formCover .formDesc {
			display: none;
		}
	}

	#home-banner form h2,
	#content-form-wrapper form h2 {
		color: var(--fontColor);
		font-weight: var(--headingWeight);
		font-size: 24px;
		margin-bottom: 0px;
		font-family: var(--fontSource);
	}

	#home-banner .frm_style_formidable-style.with_frm_style .form-field {
		margin-bottom: 15px;
		padding-top: 0;
	}

	#home-banner .frm_forms.with_frm_style .form-field label {
		font-size: 14px;
		top: 5px !important;
		padding: 0;
		font-family: var(--fontSource);
	}

	#home-banner .frm_forms.with_frm_style .form-field.frm_label_float_top label {
		font-size: 12px !important;
		top: -10px !important;
	}

	#home-banner .frm_forms.with_frm_style .form-field input,
	#home-banner .frm_fields_container .frm_form_field.form-field select {
		height: 30px;
		min-height: 30px;
		padding: 0px;
		font-size: 14px;
	}

	#home-banner .frm_form_field:has(h2) {
		margin-bottom: 0px !important;
	}

	#home-banner .frm_fields_container .frm_form_field.form-field:has(select) {
		margin-bottom: 22px;
		margin-top: -20px;
	}

	#home-banner .frm_fields_container .frm_form_field.form-field select {
		border-width: 0 0 1px 0;
	}

	#home-banner .frm_fields_container .frm_form_field.form-field:has(select) label {
		position: relative;
		left: 3px;
	}

	#home-banner .frm_forms.with_frm_style .frm_submit button {
		width: 100%;
		background: var(--dynamicBtnBg) !important;
		border: 0;
		box-shadow: none;
		color: var(--themeBtnColor);
	}

	@media screen and (max-width:767px) {
		#home-banner.homeBanner h1 {
			font-size: 30px;
		}

		#content-form-wrapper .frm_style_formidable-style.with_frm_style .frm_submit button {
			min-width: 100% !important;
		}

		#home-banner.homeBanner form {
			background-color: transparent;
			padding: 0;
		}

		#home-banner.homeBanner .frm_forms.with_frm_style .form-field {
			height: 48px;
			min-height: 48px;
			position: relative;
			border-radius: 2px;
			padding-left: 11px;
			padding-right: 15px;
		}

		#home-banner.homeBanner .frm_forms.with_frm_style .form-field:has(select) {
			height: 55px;
			min-height: 55px;
			position: relative;
		}

		#home-banner.homeBanner .frm_forms.with_frm_style .form-field:has(select) label {
			top: 0px !important;
			padding-left: 0;
		}

		#home-banner.homeBanner .frm_forms.with_frm_style .form-field select {
			bottom: 0px !important;
			position: absolute;
			border: 0;
			width: calc(100% - 20px) !important;
		}

		#home-banner.homeBanner .frm_forms.with_frm_style .form-field input {
			position: absolute;
			border: 0;
			bottom: 0px;
		}

		#home-banner .frm_forms.with_frm_style .form-field.frm_label_float_top label {
			top: 3px !important;
			padding-left: 15px;
		}

		#home-banner .frm_forms.with_frm_style .form-field:not(select) label {
			top: 15px !important;
			padding: 0;
			padding-left: 12px;
		}

		#home-banner .frm_style_formidable-style.with_frm_style .form-field {
			margin-bottom: 11px;
		}

		#home-banner .frm_fields_container .frm_form_field.form-field:has(select) {
			margin-bottom: 11px;
			margin-top: 0px;
		}

		#home-banner.homeBanner .frm_form_field {
			background-color: var(--white);
		}

		#home-banner.homeBanner .frm_form_field.frm_html_container {
			display: none;
		}
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(input) {
		height: 48px;
		min-height: 48px;
		position: relative;
		border-radius: 2px;
		padding-left: 15px;
		padding-right: 15px;
		margin-bottom: 11px;
		padding-top: 0;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(h2) {
		margin-bottom: 0px;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(select) {
		height: 55px;
		min-height: 55px;
		position: relative;
		margin-right: 10px;
		border-radius: 2px;
	}

	#content-form-wrapper.GreyBg .frm_forms.with_frm_style .form-field:has(select),
	#content-form-wrapper.GreyBg .frm_forms.with_frm_style .form-field:has(input) {
		background-color: var(--white);
	}

	#content-form-wrapper.ImageBg .frm_form_field h2,
	#content-form-wrapper.ImageBg .frm_form_field p {
		color: var(--white);
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(select),
	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(input) {
		background-color: var(--bgGrey);
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:not(select) label {
		top: 15px !important;
		padding: 0;
		padding-left: 12px;
		font-size: 14px;
		font-family: var(--fontSource);
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field.frm_label_float_top label {
		top: 3px !important;
		padding-left: 15px;
		font-size: 12px !important;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field input {
		position: absolute;
		border: 0;
		bottom: 0px;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field input,
	#content-form-wrapper .frm_fields_container .frm_form_field.form-field select {
		height: 30px;
		min-height: 30px;
		padding: 0px;
		font-size: 14px;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field:has(select) label {
		top: 0px !important;
		padding-left: 14px;
	}

	#content-form-wrapper .frm_forms.with_frm_style .form-field select {
		bottom: 0px !important;
		position: absolute;
		border: 0;
		width: calc(100% - 10px) !important;
		padding-left: 11px;
	}

	#content-form-wrapper .frm_style_formidable-style.with_frm_style .frm_submit button {
		min-width: 271px;
		margin-bottom: 0;
		background: var(--dynamicBtnBg) !important;
		border: 0;
		color: var(--themeBtnColor);
		box-shadow: none;
	}

	#content-form-wrapper fieldset {
		padding-bottom: 0;
	}

	#content-form-wrapper .form-wrapper>p {
		margin-bottom: 0;
	}
</style>
<style>
	/* utility classess */
	:root {
		--white: #ffffff;
		--bgGrey: #ecf1f8;
		--fontColor: #001437;
		--headingWeight: 700;
		--fontSource: 'SourceSansPro';
		--fontION: 'ION';
		--themeBtnColor: #ffffff;
		<?php
		$template = get_field('choose_template');
		if ($template == 'Backstop') {
			echo "
			--dynamicBtnBg:linear-gradient(90deg,#FEB131,#00AF96);
			--stripBg: linear-gradient(238deg, #FEB131, #00AF96);
			--bgImage: url('https://ionanalyticdev.wpengine.com/wp-content/uploads/2024/01/gradient-arch-web.png');
			--arc:url('/wp-content/themes/backstop/images/modularLanding/backstop.png') no-repeat center top!important;";
		} else if ($template == 'Debtwire') {
			echo "
			--dynamicBtnBg:#915AD7;
			--stripBg: linear-gradient(36deg,  #01A5E5, #915AD7);
			--bgImage: url('https://ionanalytics.com/wp-content/themes/backstop/images/video-bg.png');
			--arc:url('/wp-content/themes/backstop/images/modularLanding/debt-video-bottom-arch.webp') no-repeat center top!important;";
		} else if ($template == 'Infralogic') {
			echo "
			--dynamicBtnBg:#00AF96;
			--stripBg: linear-gradient(36deg,  #01A5E5, #00AF96);
			--bgImage: url('https://ionanalytics.com/wp-content/themes/backstop/images/video-bg.png');
			--arc:url('/wp-content/themes/backstop/images/modularLanding/infra-video-bottom-arch.webp') no-repeat center top!important;";
		} else if ($template == 'Megermarket') {
			echo "
			--dynamicBtnBg:#81CBF0;
			--stripBg: linear-gradient(36deg,  #01A5E5, #81CBF0);
			--bgImage: url('https://ionanalytics.com/wp-content/themes/backstop/images/video-bg.png');
			--arc:url('/wp-content/themes/backstop/images/modularLanding/video-bottom-arch-2.webp') no-repeat center top!important;
			--themeBtnColor:#000000;";
		} else {
			echo "
			--dynamicBtnBg: #00A5E6;
			--stripBg: linear-gradient(36deg, #00a6dd, #96C869);
			--bgImage: url('https://ionanalytics.com/wp-content/themes/backstop/images/video-bg.png');
			--arc:url('/wp-content/themes/backstop/images/modularLanding/video-bottom-arch.webp') no-repeat center top!important;";
		}
		?>
	}

	.sectionPy {
		padding-top: 60px;
		padding-bottom: 60px;
	}

	.ff-1 {
		font-family: var(--fontSource);
	}

	.ff-2 {
		font-family: var(--fontION);
	}

	.fs-20 {
		font-size: 20px;
	}

	.WhiteBg {
		background-color: var(--white);
	}

	.GreyBg {
		background-color: var(--bgGrey);
	}

	.ImageBg {
		background-image: var(--bgImage);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}

	.blueBg {
		background-color: var(--fontColor);
	}

	.ImageBg .dyn-white {
		color: var(--white);
	}

	.new-badge {
		background: rgba(0, 165, 230, 0.1);
		border: 1px solid rgba(0, 165, 230, 0.5);
		border-radius: 20px;
		color: var(--fontColor);
		font-weight: var(--headingWeight);
		padding: 4.5px 30.5px;
		font-size: 14px;
		width: fit-content;
		line-height: 19px;
		margin-bottom: 11px;
	}

	.button-group {
		gap: 15px;
		margin-top: 13px;
	}

	.button-group a {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 15px;
		min-width: 189px;
		min-height: 40px;
		text-align: center;
		border-radius: 61px;
		line-height: initial;
		font-family: var(--fontION);
		padding: 8px 35px 4px 35px;
	}

	.color-btn {
		background: var(--dynamicBtnBg);
		color: var(--themeBtnColor);
	}

	.color-btn:hover {
		color: var(--themeBtnColor);
	}

	.simple-btn {
		border: 2px solid var(--fontColor);
		color: var(--fontColor);
	}

	.simple-btn:hover {
		color: var(--fontColor);
	}

	.ImageBg .simple-btn {
		border: 2px solid var(--white);
		color: var(--white);
	}

	@media screen and (max-width:767px) {
		.button-group a {
			font-size: 13px;
			max-width: auto;
			min-width: auto;
			width: auto;
			min-height: 34px;
		}

		.button-group {
			flex-wrap: wrap;
		}
	}

	.footer-top {
		height: 15px;
		width: 100%;
		background: var(--stripBg);
	}

	#header-wrapper {
		background-color: var(--fontColor);
		padding: 10px 0;
	}

	.video-secion-arch-new {
		background: var(--arc);
		height: 80px;
		width: 100%;
		background-size: cover !important;
		margin-top: -70px;
		position: relative;
		z-index: 2;
	}
</style>
<style>
	/* layout custom css */
	#home-banner.homeBanner {
		padding: 100px 0 80px 0;
	}

	#home-banner.modular-banner {
		align-items: normal;
	}

	.countdownSection p {
		margin-bottom: 0;
	}

	.countdownSection h3 {
		color: #00A5E6;
		font-size: 72px;
	}

	#home-banner video {
		position: absolute;
		top: 0;
		left: 0 !important;
		bottom: 0px;
		right: 0;
		width: 100%;
		height: 100%;
		height: auto;
		transform: none;
		z-index: 1;
		object-fit: cover;
		object-position: top;
	}

	#home-banner.homeBanner+.video-secion-arch {
		margin-top: -60px;
	}

	#home-banner.modular-banner .row .col-12:first-child h3,
	#home-banner.modular-banner .row .col-12:first-child p {
		color: #fff;
	}

	.image-content {
		display: grid;
		grid-template-columns: 1fr 1fr;
	}

	.Reverse .content-wrapper {
		padding-right: 0px;
	}

	.content-wrapper {
		padding-right: 30px;
	}

	.Reverse .image-content .image-wrapper {
		grid-area: 1;
	}

	.image-wrapper>div {
		height: 400px;
	}

	.new-description p {
		font-size: 20px;
		margin-bottom: 8px;
	}

	#content-and-button-wrapper .alignCenter {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	#content-and-button-wrapper .alignCenter .button-group {
		width: 100%;
		justify-content: center;
	}

	.footer-content {
		border-top: 1px solid #9AA1AF;
		padding-top: 15px;
	}

	.ImageBg .footer-content {
		border-top: 1px solid #ECF1F8;
	}

	.footer-content p,
	.footer-content a {
		margin-bottom: 0;
		font-weight: 400;
		color: #727D90;
		font-size: 15px;
		line-height: 26px;
	}

	.ImageBg .footer-content p,
	.ImageBg .footer-content a {
		color: #9AA1AF;
	}

	.footer-content a {
		text-decoration: underline;
	}

	.afterFormContent {
		text-align: center;
	}

	@media screen and (max-width:767px) {
		#home-banner video {
			height: 100% !important;
		}

		.afterFormContent {
			margin: 0;
			position: relative;
			top: 10px;
			text-align: left;
			color: #fff;
		}

		.countdownSection .three-box-wrapper {
			gap: 50px;
		}

		.countdownSection h3 {
			font-size: 50px;
		}

		.countdownSection p {
			text-align: center;
		}

		.footer-content p:first-child {
			margin-bottom: 10px;
			margin-top: 5px;
		}

		.footer-content p:last-child {
			margin-top: 10px;
		}

		#home-banner.homeBanner {
			padding: 60px 0 80px 0;
		}

		.image-content {
			grid-template-columns: 1fr;
			grid-gap: 25px;
		}

		#content-form-wrapper .image-content {
			grid-gap: 10px;
		}

		.image-wrapper>div {
			height: 250px;
		}

		.three-box-wrapper>div.iCon {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		#home-banner.homeBanner .row>div:first-child {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
	}

	@media screen and (min-width:768px) and (max-width:1000px) {
		#home-banner.homeBanner {
			min-height: 63vh;
		}

		#home-banner.homeBanner:has(.widthOutForm) {
			min-height: 43vh;
		}
	}

	@media screen and (min-width:768px) and (max-width:1024px) {
		.image-wrapper>div {
			height: 300px;
		}

		.image-content {
			grid-gap: 20px;
		}

	}

	@media screen and (min-width:1025px) {
		.Reverse .content-wrapper {
			padding-left: 80px;
		}

		#home-banner.homeBanner:has(.widthOutForm) {
			min-height: 63vh;
		}
	}
</style>

<main>
	<?php
	$dlink = (get_field('pdf_download_link')) ? get_field('pdf_download_link') : '';
	?>
	<?php if (have_rows('modules')) :
		while (have_rows('modules')) :
			the_row(); ?>


			<?php if ('banner' == get_row_layout()) :
				$image          = get_sub_field('image');
				$video          = get_sub_field('video');
				$logo           = get_sub_field('logo');
				$association_text = get_sub_field('association_text');
				$association_logo = get_sub_field('association_logo');
				$title          = get_sub_field('title');
				$sub_title      = get_sub_field('sub_title');
				$description    = get_sub_field('description');
				$button1        = get_sub_field('button_1_link');
				$button2        = get_sub_field('button_2_link');
				$form_heading    = get_sub_field('form_heading');
				$form_description    = get_sub_field('form_description');
				$form_script    = get_sub_field('form_script');
				$form1_button_text    = get_sub_field('form_button_text');
				$content    = get_sub_field('content');
			?>
				<!-- Home Hero section start  -->
				<?php if ($video) { ?>
					<section id="home-banner" class="d-flex modular-banner homeBanner">
						<video width="100%" height="500" autoplay loop muted>
							<source src="<?php echo $video; ?>" type="video/mp4" />
						</video>
					<?php } else { ?>
						<section id="home-banner" class="d-flex modular-banner homeBanner" style="background-image: url('<?php echo $image ?>');">
						<?php } ?>

						<div class="container">
							<div class="row">
								<?php if ($form_script) {
								?>
									<div class="col-12 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
										<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
										<h1 class="mb-1 mt-1 dyn-white"><?php echo $title; ?></h1>
										<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
										<div class="wow fadeInUp new-description dyn-white">
											<?php echo $description; ?>
										</div>
									</div>
									<div class="col-12 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
										<div class="formCover">
											<h3 class="formHeading"><?php echo $form_heading; ?></h3>
											<p class="formDesc"><?php echo $form_description; ?></p>
											<div class="form1">
												<?php echo $form_script; ?>
											</div>
											<p class="afterFormContent"><?php echo $content; ?></p>
										</div>
									</div>
								<?php } else { ?>
									<div class="col-12 wow fadeInUp widthOutForm d-flex justify-content-center align-items-center flex-column" data-wow-duration="1s" data-wow-delay="0.25s">
										<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
										<div><?php if ($association_text) { ?><span class="text-white" style="margin-right:10px;"><?php echo $association_text; ?> :</span><?php } ?><?php if ($association_logo) { ?><img src="<?php echo $association_logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?></div>
										<h1 class="mb-0 mt-1 dyn-white" style="line-height: 1.03;"><?php echo $title; ?></h1>
										<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
										<div class="wow fadeInUp new-description dyn-white">
											<?php echo $description; ?>
										</div>
									</div>
									<div class="button-group d-flex justify-content-center">
										<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
										<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover" style="border-color: var(--white);color:var(--white);"><?php echo $button2['title'] ?></a><?php } ?>
									</div>
								<?php }
								?>
							</div>
						</div>
						</section>
						<div class="video-secion-arch-new">
						</div>

					<?php elseif ('image_&_content' == get_row_layout()) :
					$image          = get_sub_field('image');
					$video          = get_sub_field('video');
					$badge          = get_sub_field('badge');
					$logo1          = get_sub_field('logo');
					$logo2          = get_sub_field('logo_2');
					$title          = get_sub_field('title');
					$sub_title      = get_sub_field('sub_title');
					$description    = get_sub_field('description');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					$reverse_values		= get_sub_field('reverse');
					$reverse_class = '';
					if ($reverse_values) {
						if (is_array($reverse_values)) {
							$reverse_class = implode(' ', $reverse_values);
						} else {
							$reverse_class = $reverse_values;
						}
					}
					$logo;
					if ($background == 'ImageBg') {
						$logo = $logo2;
					} else {
						$logo = $logo1;
					}
					?>
						<!-- Content And Image section start  -->
						<section id="image-content-wrapper" class="sectionPy <?php echo $background ?> <?php echo $reverse_class ?>">
							<div class="container image-content">
								<div class="wow fadeInUp content-wrapper" data-wow-duration="1s" data-wow-delay="0.25s">
									<?php if ($badge) { ?><p class="new-badge dyn-white"><?php echo $badge; ?></p><?php } ?>
									<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
									<h2 class="mb-1 mt-1 dyn-white"><?php echo $title; ?></h2>
									<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
									<div class="wow fadeInUp new-description dyn-white">
										<?php echo $description; ?>
									</div>
									<div class="button-group d-flex">
										<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
										<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
									</div>
								</div>
								<div class="image-wrapper">
									<?php
									if (!empty($video)) {
										echo $video;
									} elseif (!empty($image)) { ?>
										<img src="<?php echo $image; ?>" style="max-width: 100%;">
									<?php } else { ?>
										<img src="https://ionanalyticdev.wpengine.com/wp-content/uploads/2024/01/Rectangle-2.png" style="max-width: 100%;">
									<?php } ?>
								</div>
							</div>
						</section>

					<?php elseif ('icon_three_box_layout' == get_row_layout()) :
					$image1          = get_sub_field('image1');
					$title1          = get_sub_field('title1');
					$sub_title1      = get_sub_field('sub_title1');
					$image2          = get_sub_field('image2');
					$title2          = get_sub_field('title2');
					$sub_title2      = get_sub_field('sub_title2');
					$image3          = get_sub_field('image3');
					$title3          = get_sub_field('title3');
					$sub_title3      = get_sub_field('sub_title3');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					?>
						<!-- Icon & Content Three box layout section start  -->
						<section id="three-box-layout" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp three-box-wrapper row" data-wow-duration="1s" data-wow-delay="0.25s">
									<div class="col-12 col-md-4 iCon">
										<img src="<?php echo $image1['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title1; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title1; ?></p>
									</div>
									<div class="col-12 col-md-4 iCon">
										<img src="<?php echo $image2['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title2; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title2; ?></p>
									</div>
									<div class="col-12 col-md-4 iCon">
										<img src="<?php echo $image3['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title3; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title3; ?></p>
									</div>
								</div>
								<div class="button-group d-flex justify-content-center mt-4">
									<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
									<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
								</div>
							</div>
						</section>

					<?php elseif ('countdown_section' == get_row_layout()) :
					$number_count1 = get_sub_field('number_count1');
					$text1         = get_sub_field('text1');
					$number_count2 = get_sub_field('number_count2');
					$text2         = get_sub_field('text2');
					$number_count3 = get_sub_field('number_count3');
					$text3         = get_sub_field('text3');
					$background	   = get_sub_field('choose_background');
					?>
						<!-- countdown section start  -->
						<section id="three-box-layout" class="sectionPy <?php echo $background ?>">
							<div class="container countdownSection">
								<div class="wow fadeInUp three-box-wrapper row" data-wow-duration="1s" data-wow-delay="0.25s">
									<div class="col-12 col-md-4 iCon">
										<h3 class="ff-2 fw-bold mt-2 dyn-white"><?php if ($number_count1) { ?><span class="count"><?php echo $number_count1; ?></span><span>%</span><?php } ?></h3>
										<p class="fs-20 fw-bold dyn-white"><?php echo $text1; ?></p>
									</div>
									<div class="col-12 col-md-4 iCon">
										<h3 class="ff-2 fw-bold mt-2 dyn-white"><?php if ($number_count2) { ?><span class="count"><?php echo $number_count2; ?></span><span>%</span><?php } ?></h3>
										<p class="fs-20 fw-bold dyn-white "><?php echo $text2; ?></p>
									</div>
									<div class="col-12 col-md-4 iCon">
										<h3 class="ff-2 fw-bold mt-2 dyn-white"><?php if ($number_count3) { ?><span class="count"><?php echo $number_count3; ?></span><span>%</span><?php } ?></h3>
										<p class="fs-20 fw-bold dyn-white"><?php echo $text3; ?></p>
									</div>
								</div>
							</div>
						</section>

					<?php elseif ('icon_four_box_layout' == get_row_layout()) :
					$image1          = get_sub_field('image1');
					$title1          = get_sub_field('title1');
					$sub_title1      = get_sub_field('sub_title1');
					$image2          = get_sub_field('image2');
					$title2          = get_sub_field('title2');
					$sub_title2      = get_sub_field('sub_title2');
					$image3          = get_sub_field('image3');
					$title3          = get_sub_field('title3');
					$sub_title3      = get_sub_field('sub_title3');
					$image4          = get_sub_field('image4');
					$title4          = get_sub_field('title4');
					$sub_title4      = get_sub_field('sub_title4');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					?>
						<!-- Icon & Content four box layout section start  -->
						<section id="three-box-layout" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp three-box-wrapper row" data-wow-duration="1s" data-wow-delay="0.25s">
									<div class="col-12 col-md-3 iCon">
										<img src="<?php echo $image1['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title1; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title1; ?></p>
									</div>
									<div class="col-12 col-md-3 iCon">
										<img src="<?php echo $image2['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title2; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title2; ?></p>
									</div>
									<div class="col-12 col-md-3 iCon">
										<img src="<?php echo $image3['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title3; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title3; ?></p>
									</div>
									<div class="col-12 col-md-3 iCon">
										<img src="<?php echo $image4['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title4; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title4; ?></p>
									</div>
								</div>
								<div class="button-group d-flex justify-content-center mt-4">
									<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
									<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
								</div>
							</div>
						</section>


					<?php elseif ('image_three_box_layout' == get_row_layout()) :
					$image1          = get_sub_field('image1');
					$title1          = get_sub_field('title1');
					$sub_title1      = get_sub_field('sub_title1');
					$image2          = get_sub_field('image2');
					$title2          = get_sub_field('title2');
					$sub_title2      = get_sub_field('sub_title2');
					$image3          = get_sub_field('image3');
					$title3          = get_sub_field('title3');
					$sub_title3      = get_sub_field('sub_title3');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					?>
						<!-- Image & Content Three box layout section start  -->
						<section id="three-box-layout" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp three-box-wrapper row" data-wow-duration="1s" data-wow-delay="0.25s">
									<div class="col-12 col-md-4">
										<img src="<?php echo $image1['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title1; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title1; ?></p>
									</div>
									<div class="col-12 col-md-4">
										<img src="<?php echo $image2['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title2; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title2; ?></p>
									</div>
									<div class="col-12 col-md-4">
										<img src="<?php echo $image3['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title3; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title3; ?></p>
									</div>
								</div>
								<div class="button-group d-flex justify-content-center mt-4">
									<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
									<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
								</div>
							</div>
						</section>

					<?php elseif ('image_four_box_layout' == get_row_layout()) :
					$image1          = get_sub_field('image1');
					$title1          = get_sub_field('title1');
					$sub_title1      = get_sub_field('sub_title1');
					$image2          = get_sub_field('image2');
					$title2          = get_sub_field('title2');
					$sub_title2      = get_sub_field('sub_title2');
					$image3          = get_sub_field('image3');
					$title3          = get_sub_field('title3');
					$sub_title3      = get_sub_field('sub_title3');
					$image4          = get_sub_field('image4');
					$title4          = get_sub_field('title4');
					$sub_title4      = get_sub_field('sub_title4');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					?>
						<!-- Image & Content Four box layout section start  -->
						<section id="three-box-layout" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp three-box-wrapper row" data-wow-duration="1s" data-wow-delay="0.25s">
									<div class="col-12 col-md-3">
										<img src="<?php echo $image1['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title1; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title1; ?></p>
									</div>
									<div class="col-12 col-md-3">
										<img src="<?php echo $image2['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title2; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title2; ?></p>
									</div>
									<div class="col-12 col-md-3">
										<img src="<?php echo $image3['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title3; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title3; ?></p>
									</div>
									<div class="col-12 col-md-3">
										<img src="<?php echo $image4['url']; ?>" class="mb-2 mt-1" style="max-width: 100%;">
										<h3 class="ff-1 fw-bold mt-2 dyn-white"><?php echo $title4; ?></h3>
										<p class="fs-20 dyn-white"><?php echo $sub_title4; ?></p>
									</div>
								</div>
								<div class="button-group d-flex justify-content-center mt-4">
									<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
									<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
								</div>
							</div>
						</section>

					<?php elseif ('content_and_buttons' == get_row_layout()) :
					$badge          = get_sub_field('badge');
					$logo1          = get_sub_field('logo');
					$logo2          = get_sub_field('logo_2');
					$title          = get_sub_field('title');
					$sub_title      = get_sub_field('sub_title');
					$description    = get_sub_field('description');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					$alignment		= get_sub_field('alignment');
					$alignment_class = '';
					if ($alignment) {
						if (is_array($alignment)) {
							$alignment_class = implode(' ', $alignment);
						} else {
							$alignment_class = $alignment;
						}
					}
					$logo;
					if ($background == 'ImageBg') {
						$logo = $logo2;
					} else {
						$logo = $logo1;
					}

					?>
						<!-- Content and Button section start  -->
						<section id="content-and-button-wrapper" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp <?php echo $alignment_class ?>" data-wow-duration="1s" data-wow-delay="0.25s">
									<?php if ($badge) { ?><p class="new-badge dyn-white"><?php echo $badge; ?></p><?php } ?>
									<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
									<h2 class="mb-1 mt-1 dyn-white"><?php echo $title; ?></h2>
									<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
									<div class="wow fadeInUp new-description dyn-white">
										<?php echo $description; ?>
									</div>
									<div class="button-group d-flex">
										<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
										<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
									</div>
								</div>
							</div>
						</section>

					<?php elseif ('center_content_with_media' == get_row_layout()) :
					$image          = get_sub_field('image');
					$video          = get_sub_field('video');
					$badge          = get_sub_field('badge');
					$logo1          = get_sub_field('logo');
					$logo2          = get_sub_field('logo_2');
					$title          = get_sub_field('title');
					$sub_title      = get_sub_field('sub_title');
					$description    = get_sub_field('description');
					$button1        = get_sub_field('button_1_link');
					$button2        = get_sub_field('button_2_link');
					$background		= get_sub_field('choose_background');
					$logo;
					if ($background == 'ImageBg') {
						$logo = $logo2;
					} else {
						$logo = $logo1;
					}

					?>
						<!-- Center Content section start  -->
						<section id="center-content-wrapper" class="sectionPy <?php echo $background ?>">
							<div class="container">
								<div class="wow fadeInUp d-flex flex-column justify-content-center align-items-center" data-wow-duration="1s" data-wow-delay="0.25s">
									<?php if ($badge) { ?><p class="new-badge dyn-white"><?php echo $badge; ?></p><?php } ?>
									<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
									<h2 class="mb-1 mt-1 dyn-white"><?php echo $title; ?></h2>
									<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
									<div class="wow fadeInUp new-description dyn-white">
										<?php echo $description; ?>
									</div>
									<div class="media-wrapper mb-4">
										<?php
										if (!empty($video)) {
											echo $video;
										} elseif (!empty($image)) { ?>
											<img src="<?php echo $image; ?>" style="max-width: 100%;">
										<?php } else { ?>
											<img src="https://ionanalyticdev.wpengine.com/wp-content/uploads/2024/01/Rectangle-686.png" style="max-width: 100%;">
										<?php } ?>
									</div>
									<div class="button-group d-flex w-100 justify-content-center">
										<?php if ($button1) { ?><a href="<?php echo $button1['url'] ?>" class="color-btn rmHover"><?php echo $button1['title'] ?></a><?php } ?>
										<?php if ($button2) { ?><a href="<?php echo $button2['url'] ?>" class="simple-btn rmHover"><?php echo $button2['title'] ?></a><?php } ?>
									</div>
								</div>
							</div>
						</section>

					<?php elseif ('content_&__form' == get_row_layout()) :
					$badge          = get_sub_field('badge');
					$logo1          = get_sub_field('logo');
					$logo2          = get_sub_field('logo_2');
					$title          = get_sub_field('title');
					$sub_title      = get_sub_field('sub_title');
					$description    = get_sub_field('description');
					$background		= get_sub_field('choose_background');
					$form_heading     = get_sub_field('form_heading');
					$form_description = get_sub_field('form_description');
					$form_script    = get_sub_field('form_script');
					$form2_button_text    = get_sub_field('form_button_text');
					$content    	= get_sub_field('content');
					$logo;
					if ($background == 'ImageBg') {
						$logo = $logo2;
					} else {
						$logo = $logo1;
					}
					?>
						<!-- Content And form section start  -->
						<section id="content-form-wrapper" class="sectionPy <?php echo $background ?> ">
							<div class="container image-content" id="footer-form">
								<div class="wow fadeInUp content-wrapper" data-wow-duration="1s" data-wow-delay="0.25s">
									<?php if ($badge) { ?><p class="new-badge dyn-white"><?php echo $badge; ?></p><?php } ?>
									<?php if ($logo) { ?><img src="<?php echo $logo; ?>" class="mb-2 mt-1" style="max-width: 100%;"><?php } ?>
									<h2 class="mb-1 mt-1 dyn-white"><?php echo $title; ?></h2>
									<h3 class="mb-2 ff-1 fw-bold dyn-white"><?php echo $sub_title; ?></h3>
									<div class="wow fadeInUp new-description dyn-white">
										<?php echo $description; ?>
									</div>
								</div>
								<div class="form-wrapper">
									<div>
										<h3 class="dyn-white"><?php echo $form_heading; ?></h3>
										<p class="dyn-white"><?php echo $form_description; ?></p>
									</div>
									<div class="form2">
										<?php echo $form_script; ?>
									</div>
									<p style="margin-top:33px;" class="dyn-white"><?php echo $content; ?></p>
								</div>
							</div>
						</section>

					<?php elseif ('header' == get_row_layout()) :
					$logo    = get_sub_field('logo');
					?>
						<!-- Footer section start  -->
						<section id="header-wrapper">
							<div class="container">
								<div class="wow fadeInUp d-flex justify-content-center align-items-center" data-wow-duration="1s" data-wow-delay="0.25s">
									<?php if ($logo) { ?><img src="<?php echo $logo; ?>"><?php } ?>
								</div>
							</div>
						</section>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php
			$background = get_field('choose_footer_background');
			?>
			<!-- Footer section start  -->
			<section class="footer-top">
			</section>
			<section id="footer-wrapper" class="sectionPy <?php echo $background ?> ">
				<div class="container">
					<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
						<div class="wow fadeInUp footer-content dyn-white">
							<p>©Copyright <?= date('Y'); ?>, ION Group.</p>
							<p>ION Analytics, 1345 Sixth Avenue, 50th Floor, New York, United States of America, NY 10105. <a href="https://iongroup.com/offices/?tab=Americas" data-type="link" data-id="https://iongroup.com/offices/?tab=Americas">View all offices</a>.</p>
						</div>
					</div>
				</div>
			</section>

</main>
<script>
	// Function to check if an element is in the viewport
	function isElementInView(element) {
		var elementTop = $(element).offset().top;
		var elementBottom = elementTop + $(element).outerHeight();

		var viewportTop = $(window).scrollTop();
		var viewportBottom = viewportTop + $(window).height();

		return elementBottom > viewportTop && elementTop < viewportBottom;
	}

	// Flag to ensure animation only runs once per element
	var animated = false;

	$(window).scroll(function() {
		// Check if any .count element is in view and if the animation hasn't run yet
		if (isElementInView($('.count')) && !animated) {
			$('.count').each(function() {
				$(this).prop('Counter', 0).animate({
					Counter: $(this).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function(now) {
						$(this).text(Math.ceil(now));
					}
				});
			});
			// Set the flag to true to prevent animation from running again
			animated = true;
		}
	});
</script>
<script>
	function setCookie() {
		var now = new Date();
		var p = now.getTime();
		p = window.btoa(p);
		// set url in cookie
		now.setTime(now.getTime() + 1 * 3600 * 1000);
		document.cookie = "wpepfd_pro=" + p + "; expires=" + now.toUTCString() + "; path=/";
		console.log({p});
	}

	function getCookieValue(name) {
		const regex = new RegExp(`(^| )${name}=([^;]+)`)
		const match = document.cookie.match(regex)
		if (match) {
			return match[2]
		}
		return ''
	}

	function showMoreContent(isCheckCookie = false) {
		if (isCheckCookie) {
			var isExistCookie = getCookieValue('wpepfd_pro');
			if (!isExistCookie) {
				return;
			}
		}

		jQuery('.access-premium-content-btn').hide();
		var dContent = `<?= $downloadableCcontent; ?>`
		document.getElementById("downloadable-content").innerHTML = dContent;
	}

	//jQuery('.frm_report_btn').on('click', function(event){  
	jQuery(document).on('frmFormComplete', function(event, form, response) {
		setTimeout(function() {
			setCookie();
			showMoreContent(false);
			var closeModalBtn = document.getElementById('close-form-btn');
			closeModalBtn.click()
		}, 1000 * 5)
	});

	/*pdf download*/
	//jQuery('.frm_pdf_btn').on('click', function(event){

	jQuery(document).on('frmBeforeFormRedirect', function(event, form, response) {
		var p = "<?= $dlink; ?>";
		p = window.btoa(p);
		// set url in cookie
		var now = new Date();
		now.setTime(now.getTime() + 1 * 3600 * 1000);
		document.cookie = "wpepfd=" + p + "; expires=" + now.toUTCString() + "; path=/";
	});

	jQuery(document).ready(function() {
		showMoreContent(true);
	});

	// Initialize Masonry on your container
	jQuery('.masonry-grid').masonry({
		// Masonry options
		itemSelector: '.masonary-item', // Selector for the items
		columnWidth: '.masonary-item', // Width of the columns
		percentPosition: true
	});
</script>
<script>
	setTimeout(() => {
	let form1Btn = document.querySelector('.form1 .frm_button_submit');
	let btn1Text = "<?php echo $form1_button_text; ?>";
	if(btn1Text !== ""){
		form1Btn.innerHTML = btn1Text;
	}

	let form2Btn = document.querySelector('.form2 .frm_button_submit');
	let btn2Text = "<?php echo $form2_button_text; ?>";
	if(btn2Text !== ""){
		form2Btn.innerHTML = btn2Text;
	}
	}, 1300);
</script>