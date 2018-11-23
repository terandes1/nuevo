<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		       
		<link rel="shortcut icon" href="favicon.ico"/> 
		{!!Html::style('assets/public/css/bootstrap.min.css')!!}
		{!!Html::style('assets/public/css/jquery-ui.structure.min.css')!!}
		{!!Html::style('assets/public/css/jquery-ui.min.css')!!}
		{!!Html::style('assets/public/css/font-awesome.min.css')!!}
		{!!Html::style('assets/public/css/style.css')!!}

 <!-- rel="shortcut icon" href="favicon.ico"/> 
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
		<link href="css/style.css" rel="stylesheet" type="text/css"/>    -->

		<!-- <link href="{!! Html::style('assets/public/css/jquery-ui.structure.min.css') !!}"  type="text/css"/>
		<link href="{!! Html::style('assets/public/css/jquery-ui.min.css') !!}"  type="text/css"/>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >        
		<link href="{!! Html::style('assets/public/css/style.css') !!}"  type="text/css"/>  --> 

  
		<title>Let's Travel</title>
	</head>
<body data-color="theme-1">
 	@include('public.en.layouts.navbar')

   		 @yield('content')
    
    @include('public.en.layouts.footer')
