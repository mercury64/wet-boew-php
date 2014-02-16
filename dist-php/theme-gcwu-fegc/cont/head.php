<?php

$_SIG_IMG_ = $_SITE['gcwu_sig_image_'.$_PAGE['lang1']];
$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

$_WMMS_IMG_ = $_SITE['gcwu_wmms_image_'.$_PAGE['lang1']];
$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>

<div class="container">
	<div class="row">
		<object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="<?php echo $_SIG_IMG_; ?>" aria-label="<?php echo $_SIG_ALT_; ?>"></object>
		<ul id="gc-bar" class="list-inline">
			<li><a href="http://www.canada.ca/en/index.html" rel="external">Canada.ca</a></li>
			<li><a href="http://www.canada.ca/en/services/index.html" rel="external">Services</a></li>
			<li><a href="http://www.canada.ca/en/gov/dept/index.html" rel="external">Departments</a></li>
			
			<li id="wb-lng">
				<h2><?php echo $_SITE['wb_lang_header_'.$_PAGE['lang1']]; ?></h2>
			<ul class="list-inline">
			<?php
			if( $_PAGE['nolang'] != "1" ) {
				$langString = "";
				for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
					$listItem = '<li>';
					$listItem .= '<a lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
					$listItem .= '" href="' .$_SITE['wb_cmblang_href_' . $_PAGE['lang'.$i]];
					$listItem .= '">' . $_SITE['wb_lang_text_' . $_PAGE['lang'.$i]]; 
					$listItem .= "</a>";
			
					$listItem .= '</li>' . "\n"; 
					
					$langString = $listItem . $langString;
				}
				echo $langString;
			}
			?></ul>
			</li>
			
		</ul>
		<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
			<h2><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></h2>
			<ul class="pnl-btn list-inline text-right">
			<li><a href="#mb-pnl" title="<?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?>" aria-controls="mb-pnl" class="overlay-lnk" role="button"><span class="glyphicon glyphicon-th-list"><span class="wb-inv"><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></span></span></a></li>
			</ul>
			<div id="mb-pnl"></div>
		</section>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div id="wb-sttl">
			<a href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>">
			<span><?php echo $_SITE['wb_site_title_'.$_PAGE['lang1']] ?></span>
			</a>
			<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="<?php  echo $_WMMS_IMG_; ?>" aria-label="<?php echo $_WMMS_ALT_; ?>"></object>
		</div>
		<?php
		if( $_PAGE['nosearch'] != "1" ) {
			echo '<section id="wb-srch" class="visible-md visible-lg">';
			echo '<h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
		    include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] ."/inc/search.php";
			echo '</section>';
		}
		?>
	</div>

