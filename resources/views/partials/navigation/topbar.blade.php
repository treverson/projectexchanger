<div class="header ">

	<a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
	</a>

<div class="">
	<div class="brand inline">
		<big>{{ app_name() }}</big>
	</div>
	<a href="#" class="btn btn-link text-primary m-l-20 hidden-md-down"><big>{{ app_name() }}</big></a>
</div>
 <div class="d-flex align-items-center">




<div class="pull-left p-r-10 fs-14 font-heading hidden-md-down m-l-20">
<span class="semi-bold">{{ LogUser()->firstname }}</span> <span class="text-master">{{ LogUser()->middlename}}</span>
</div>
<div class="dropdown pull-right hidden-md-down">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 circular inline">
<img src="assets/img/profiles/avatar.png" alt="" data-src="assets/img/profiles/avatar.png" data-src-retina="assets/img/profiles/avatar.png" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
<a href="{{ url('/logout') }}" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Logout</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div>

<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
</div>
</div>