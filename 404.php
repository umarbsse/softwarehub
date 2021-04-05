<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div style="background-color:#ffffff;" class="container">
      <div class="row" style="padding-top: 60px;background: #ffffff;">
        <div class="col-md-9">
        	<h1 class="blog-post-title text-center" style="font-size: 100px;">404</h1>
			<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/custom_wp_theme/"">
	          	<div class="row">
	          		<div class="col-md-12 col-sm-12 col-xs-12">
	          			<h2 class="text-center">Find the Software you Loved</h2>
	          		</div>
	          		<div class="col-md-2 col-sm-12 col-xs-12"></div>
	          		<div class="col-md-8 col-sm-12 col-xs-12">
	          			<div class="input-group input-group-lg">
	          				<input type="text" value="" name="s" id="s" class="form-control" placeholder="Windows 10, Office 365 etc...">
	          				<span class="input-group-btn">
	          					<button class="btn btn-primary" type="submit" id="searchsubmit" value="Search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Go!</button>
	          				</span>
	          			</div><!-- /input-group -->
	          		</div>
	          		<div class="col-md-2 col-sm-12 col-xs-12"></div>
	          	</div>
          	</form>
        </div>
        <div class="col-md-3">
          <?php require 'sidebar.php'; ?>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
