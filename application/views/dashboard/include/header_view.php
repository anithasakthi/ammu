<!doctype html>
<html lang="en">
<head>
    <title>Ammu Project</title>
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" /><!-- ?= short cut for ?php echo -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
    
    <script src="<?=base_url()?>public/js/jquery.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/js/ammuproject/dashboard/result.js"></script>
    <script src="<?=base_url()?>public/js/ammuproject/dashboard/event.js"></script>
    <script src="<?=base_url()?>public/js/ammuproject/dashboard/template.js"></script>
    <script src="<?=base_url()?>public/js/ammuproject/dashboard.js"></script>
    
    <script>
    $(function()    {
    //Init the Dashboard Application    
        var dashboard = new Dashboard();
    });
    </script>
    
</head>
<body>
   
    <nav class="navbar">
        <div class="navbar-inner">
            <span class="brand">Ammu-Project</span>
        <ul class="nav">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">User</a></li>
            <li><a href="<?=site_url('dashboard/logout')?>">Logout</a></li>
        </ul>
        </div>
    </nav>
        
     <!-- start wrapper -->  
    <div class="wrapper">
        
        <div  id="error" class="alert alert-error hide"></div>
        <div  id="success" class="alert alert-success hide"></div>