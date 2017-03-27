<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>

	<style type="text/css">
/*
	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body {
		background-color: #fff;
		margin: 40px auto;
		max-width: 1024px;
		font: 16px/24px normal "Helvetica Neue",Helvetica,Arial,sans-serif;
		color: #808080;
	}

	a {
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
	   color: #97310e;
	}

	h1 {
		color: #fff;
		background-color: #dd4814;
		border-bottom: 1px solid #d0d0d0;
		font-size: 22px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 5px 10px;
		line-height: 40px;
	}

	h1 img {
		display: block;
	}

	h2 {
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 13px;
		background-color: #f5f5f5;
		border: 1px solid #e3e3e3;
		border-radius: 4px;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		 margin: 0 0 10px;
		 padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #d0d0d0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background:#8ba8af;
		color:#fff;
	}

	#container {
		margin: 10px;
		border: 1px solid #d0d0d0;
		box-shadow: 0 0 8px #d0d0d0;
		border-radius: 4px;
	}*/
	body{

	}
	#header{
		margin: 0px auto;
	  left: 0;
	  top: 0;
	  width: 100%;
	  z-index: 100;
	  position: fixed;
		background-color: blue;
		height: 68px;
	}
	#content{
		margin-top: 68px;
	}
	#header .content{
		color: white;
	}
	#header .content li{
		display: inline-block;
		margin: 14px;
	}
	#content .main{
		float: left;
    width: 65%;
    background: yellow;
    height: 100%;
	}
	#content .side{
		background: red;
    height: 100%;
	}
	#footer{
		width: 100%;
		background-color: black;
	}

	#content .main .content{

	}
	#content .side .content{

	}


	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="content">
				<ul>
					<li>Home</li>
					<li>Themes</li>
					<li>New Topic</li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div class="main">
				<div class="content">



				</div>
			</div>
			<div class="side">
				<div class="content">
					LADO<br>
					LADO<br>
					LADO<br>
					LADO<br>
					LADO<br>
					LADO<br>
					LADO<br>
					LADO<br>
				</div>
			</div>
		</div>
		<div id="footer">
			footer
		</div>
	</div>
</body>
</html>
