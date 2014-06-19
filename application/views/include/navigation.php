<?php $controller=$this->router->fetch_class(); ?>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="<?php echo ($controller=='dashboard'?'active':''); ?>"><a href="<?php echo site_url('dashboard/index'); ?>">Dashboard</a></li>
        <li class="dropdown <?php echo ($controller=='session'?'active':($controller=='university'?'active':($controller=='program'?'active':($controller=='course'?'active':($controller=='coursefee'?'active':($controller=='subject'?'active':'')))))); ?>">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Masters <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('session/index'); ?>">Session</a></li>
            <li><a href="<?php echo site_url('university/index'); ?>">University</a></li>
            <li><a href="<?php echo site_url('program/index'); ?>">Program</a></li>
            <li><a href="<?php echo site_url('course/index'); ?>">Course</a></li>
            <li><a href="<?php echo site_url('coursefee/index'); ?>">Course Fees</a></li>
            <li><a href="<?php echo site_url('subject/index'); ?>">Subject</a></li>
          </ul>
        </li>
        <li class=""><a href="<?php echo site_url('subject/index'); ?>">Study Centers</a></li>
        <li class="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Fee Section <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('ufeesec/index'); ?>">University Fee Section</a></li>
            <li><a href="<?php echo site_url('efeesec/index'); ?>">Exam Fee Section</a></li>
            <li><a href="<?php echo site_url('sapprovlist/index'); ?>">Student Approval List</a></li>
            <li><a href="<?php echo site_url('sapprovsummary/index'); ?>">Student Approval Summary</a></li>
          </ul>
        </li>
        <li class=""><a href="<?php echo site_url('managestu/index'); ?>">Manage Students</a></li>
        <li class=""><a href="<?php echo site_url('manidcard/index'); ?>">Manage ID Cards</a></li>
        <li class="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('searchcheque/index'); ?>">Search Cheque</a></li>
            <li><a href="<?php echo site_url('ledger/index'); ?>">Ledger</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>