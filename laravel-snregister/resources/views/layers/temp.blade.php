<!DOCTYPE html>
<html lang='en'>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
	
</head>
<body>
	@yield('nav')
	<main>
		<nav role='banner'>
			<a href="">Serial Number Registration</a>
			<a href="">Product Register</a>
			<a href="">Search</a>
			<a href="">Old Serial Search</a>
		</nav>

		<h1 id='title'>@yield('title')</h1>
		<!--
		
		<div id='form_pt1'>
		
		-->

		@yield('snr-section-form')
		@yield('snr-section-table')
		<section id='section_table'>	
			<table id='list' >
				<tr>
					<th>Company</th>
					<th>Invoice Number</th>
					
					<th>Product</th>
					<th>Product Serial Number</th>
					<th>HDD</th>
					<th>HDD Serial Number</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>something</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</section>
	</main>
	@yield('snr-js')
</body>
</html>
