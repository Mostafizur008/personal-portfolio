<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.code-section.js.head.head')
</head>

<body>
	<div class="page new-skin">
		
		<!-- preloader -->


		<!-- background -->

		@include('frontend.code-section.others.background')

		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->

				@include('frontend.body.header.profile')

				<!-- menu btn -->

				<!-- menu -->

				@include('frontend.body.header.menu')

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">
				@include('frontend.page.card')
			</div>

			<!-- 
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				@include('frontend.page.about')
			</div>

			<!--
				Card - Resume
			-->
			<div class="card-inner" id="resume-card">
				@include('frontend.page.resume')

			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				@include('frontend.page.work')
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				@include('frontend.page.contacts')
			</div>

		</div>

		<div class="s_overlay"></div>

	</div>
	
	@include('frontend.code-section.js.footer.footer')


</body>
</html>