<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	@include('admin.layout.links')

</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	@include('admin.layout.header')

	@include('admin.layout.navbar')

	@yield('conteudo')
	
	<div class="ttr-overlay"></div>

	@include('admin.layout.scripts')
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>