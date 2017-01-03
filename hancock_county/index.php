<?php defined('_JEXEC') or die; ?>
<?php /* mods
	11May16 zig - add content-top & content-bottom to the templates
*/ ?>
<!doctype html>
<html>
	<head>
		<jdoc:include type="head" />

		<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/modernizr.js"></script>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/master.css" type="text/css" />

		<!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie.css" />
		<![endif]-->

	</head>
	<body>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLWNXT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TLWNXT');</script>
		<!-- End Google Tag Manager -->
		<!-- Top Header -->
		<section id="bg">
			<jdoc:include type="modules" name="header-background" style="raw" />
		</section>
		<!-- End Top Header -->

		<!-- Body Content -->
		<div id="wrapper">
			<header>
				<div id="logo">
					<jdoc:include type="modules" name="logo" style="raw" />
				</div>
				<div id="site-title">
					<jdoc:include type="modules" name="site-title" style="raw" />
				</div>
				<div id="search">
					<jdoc:include type="modules" name="top-search" style="raw" />
				</div>
			</header>

			<!-- Start Container -->
			<div class="container">

				<!-- Top Modules Section -->
				<section class="modules" id="top">			
					<?php if ($this->countModules('top-one') && $this->countModules('top-two') && $this->countModules('top-three') && $this->countModules('top-four')) : ?>
						<article class="top-module four" id="top-one">
							<jdoc:include type="modules" name="top-one" />
						</article>
						<article class="top-module four" id="top-two">
							<jdoc:include type="modules" name="top-two" />
						</article>
						<article class="top-module four" id="top-three">
							<jdoc:include type="modules" name="top-three" />
						</article>
						<article class="top-module four" id="top-four">
							<jdoc:include type="modules" name="top-four" />
						</article>
					<?php elseif ($this->countModules('top-one') && $this->countModules('top-two') && $this->countModules('top-three')) : ?>
						<article class="top-module three" id="top-one">
							<jdoc:include type="modules" name="top-one" />
						</article>
						<article class="top-module three" id="top-two">
							<jdoc:include type="modules" name="top-two" />
						</article>
						<article class="top-module three" id="top-three">
							<jdoc:include type="modules" name="top-three" />
						</article>
					<?php elseif ($this->countModules('top-one') && $this->countModules('top-two')) : ?>
						<article class="top-module two" id="top-one">
							<jdoc:include type="modules" name="top-one" />
						</article>
						<article class="top-module two" id="top-two">
							<jdoc:include type="modules" name="top-two" />
						</article>
					<?php elseif ($this->countModules('top-one')) : ?>
						<article class="top-module one" id="top-one">
							<jdoc:include type="modules" name="top-one" />
						</article>
					<?php endif; ?>
				</section>
				<!-- End Top Modules Section -->

				<!-- Start Top Navigation -->
				<nav id="top-nav">
					<jdoc:include type="modules" name="top-navigation" style="raw" />
				</nav>
				<!-- End Top Navigation -->

				<!-- Start Content -->
				<section id="content">
					<?php if ($this->countModules('right-content') && $this->countModules('left-content')) : ?>
						<article class="content-module left" id="left-content">
							<jdoc:include type="modules" name="left-content" style="xhtml" />
						</article>
						<div class="half">
							<?php if ($this->countModules('content-above')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-above" style="xhtml" />
								</div>
							<?php } ?>
							<article class="content-area-module">
								<jdoc:include type="modules" name="content-area" style="xhtml" />
							</article>
							<jdoc:include type="component" />
							<?php if ($this->countModules('content-below')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-below" style="xhtml" />
								</div>
							<?php } ?>
						</div>
						<article class="content-module right" id="right-content">
							<jdoc:include type="modules" name="right-content" style="xhtml" />
						</article>
					<?php elseif ($this->countModules('left-content')) : ?>
						<article class="content-module left" id="left-content" >
							<jdoc:include type="modules" name="left-content" style="xhtml" />
						</article>
						<div class="third">
							<?php if ($this->countModules('content-above')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-above" style="xhtml" />
								</div>
							<?php } ?>
							<article class="content-area-module">
								<jdoc:include type="modules" name="content-area" style="xhtml" />
							</article>
							<jdoc:include type="component" />
							<?php if ($this->countModules('content-below')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-below" style="xhtml" />
								</div>
							<?php } ?>
						</div>
					<?php elseif ($this->countModules('right-content')) : ?>
						<div class="third">
							<?php if ($this->countModules('content-above')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-above" style="xhtml" />
								</div>
							<?php } ?>
							<article class="content-area-module">
								<jdoc:include type="modules" name="content-area" style="xhtml" />
							</article>
							<jdoc:include type="component" />
							<?php if ($this->countModules('content-below')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-below" style="xhtml" />
								</div>
							<?php } ?>
						</div>
						<article class="content-module right" id="right-content">
							<jdoc:include type="modules" name="right-content" style="xhtml" />
						</article>
					<?php else : ?>
						<div class="whole">
							<?php if ($this->countModules('content-above')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-above" style="xhtml" />
								</div>
							<?php } ?>
							<article class="content-area-module">
								<jdoc:include type="modules" name="content-area" style="xhtml" />
							</article>
							<jdoc:include type="component" />
							<?php if ($this->countModules('content-below')) { /* zig 11May16 */?>
								<div>
									<jdoc:include type="modules" name="content-below" style="xhtml" />
								</div>
							<?php } ?>
						</div>
					<?php endif; ?>
				</section>
				<!-- End Content -->


				<!-- Bottom Modules -->
				<section class="modules" id="bottom">
					<?php if ($this->countModules('bottom-one') && $this->countModules('bottom-two') && $this->countModules('bottom-three') && $this->countModules('bottom-four')) : ?>
						<article class="bottom-module four" id="bottom-one">
							<jdoc:include type="modules" name="bottom-one" style="xhtml" />
						</article>
						<article class="bottom-module four" id="bottom-two">
							<jdoc:include type="modules" name="bottom-two" style="xhtml" />
						</article>
						<article class="bottom-module four" id="bottom-three">
							<jdoc:include type="modules" name="bottom-three" style="xhtml" />
						</article>
						<article class="bottom-module four" id="bottom-four">
							<jdoc:include type="modules" name="bottom-four" style="xhtml" />
						</article>
					<?php elseif ($this->countModules('bottom-one') && $this->countModules('bottom-two') && $this->countModules('bottom-three')) : ?>
						<article class="bottom-module three" id="bottom-one">
							<jdoc:include type="modules" name="bottom-one" style="xhtml" />
						</article>
						<article class="bottom-module three" id="bottom-two">
							<jdoc:include type="modules" name="bottom-two" style="xhtml" />
						</article>
						<article class="bottom-module three" id="bottom-three">
							<jdoc:include type="modules" name="bottom-three" style="xhtml" />
						</article>
					<?php elseif ($this->countModules('bottom-one') && $this->countModules('bottom-two')) : ?>
						<article class="bottom-module two" id="bottom-one">
							<jdoc:include type="modules" name="bottom-one" style="xhtml" />
						</article>
						<article class="bottom-module two" id="bottom-two">
							<jdoc:include type="modules" name="bottom-two" style="xhtml" />
						</article>
					<?php elseif ($this->countModules('bottom-one')) : ?>
						<article class="bottom-module one" id="bottom-one">
							<jdoc:include type="modules" name="bottom-one" style="xhtml" />
						</article>
					<?php endif; ?>
				</section>
				<!-- End Bottom Modules -->

				<!-- Footer -->
				<footer>
					<jdoc:include type="modules" name="footer" />
				</footer>
				<!-- End Footer -->

			</div>
			<!-- End Container -->

		</div>
		<!-- End Body Content -->
	</body>
</html>