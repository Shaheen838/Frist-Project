<!DOCTYPE html>
<html lang="en">

<head>
	@include('forntend.web.includes.meta')
	<!-- FAVICONS ICON ============================================= -->
	@include('forntend.web.includes.style')
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
	 @include('forntend.web.includes.header')
    <!-- Header Top END ==== -->
    <!-- Content -->
	@yield('content')
    <!-- Content END-->
	<!-- Footer ==== -->
   @include('forntend.web.includes.fotter')
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->
	@include('forntend.web.includes.script')
</body>

</html>
