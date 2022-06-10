


<?php
$reserv=new ReservationController();
$reservation=$reserv->getAllReservation();
print_r($reservation) ;
?>


<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>
</title>
    <!-- google font -->
    <link href="../views/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="../views/assets/css/style.css" rel="stylesheet">
        <link href="../views/assets/css/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../views/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="../views/assets/css/settings.css" rel="stylesheet">
        <link href="../views/assets/css/layers.css" rel="stylesheet">
        <link href="../views/assets/css/navigation.css" rel="stylesheet">
        <link href="../views/assets/css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="../views/assets/css/magnific-popup.css" rel="stylesheet">
        <link href="../views/assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="../views/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="../views/assets/css/bootstrap-select.css" rel="stylesheet">
        <link href="../views/assets/css/simpleLightbox.css" rel="stylesheet">
        
        <link href="../views/assets/css/style.css" rel="stylesheet">
        <link href="../views/assets/css/responsive.css" rel="stylesheet">
<style>
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
		width: 700px;
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                '<td>' + actions + '</td>' +
            '</tr>';
            $("table").append(row);		
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    empty = true;
                } else{
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if(!empty){
                input.each(function(){
                    $(this).parent("td").html($(this).val());
                });			
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }		
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });
    });
    </script>
    

</head>

 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
              
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                      
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile">  </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                               <li>
                                    <a href="">
                                        <i class="icon-user"></i> Profile
                                    </a>
                                </li>
                              
                              
                                <li>
                                    <a href="">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
 
        <div class="page-container">
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name">  </div>
                                           
                                        </div>
                                        
	                            </div>
	                        
	                        <li class="nav-item start active">
	                            <a href="home.html" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>                               	
	                            </a>	                           
	                        </li>
							<li class="nav-item">
	                            <a href="client.html" class="nav-link nav-toggle">
	                                <i class="material-icons">business_center</i>
	                                <span class="title">Client</span>
	                            </a>
	                           
	                        </li>
	                        
	                        <li class="nav-item">
	                            <a href="reservation.html" class="nav-link nav-toggle">
	                                <i class="material-icons">business_center</i>
	                                <span class="title">Reservation</span>
	                            </a>
	                           
	                        </li>
	                        <li class="nav-item">
	                            <a href="chambre.html" class="nav-link nav-toggle">
	                                <i class="material-icons">vpn_key</i>
	                                <span class="title">CHAMBRES</span>
	                            </a>
	                           
	                        </li>
	                     
	                            </ul>
	                        </li>

	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
    
            <div class="page-content-wrapper">
                <div class="page-content" style="height: 100vh;">
                   
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <div class="container">
                                <div class="table-wrapper" style="width: 100%;">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-sm-8"><h2>Reservation <b>Details</b></h2></div>
                                            <div class="col-sm-4">
                                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Check In</th>
                                                <th>Check out</th>
                                                <th>Status</th>
                                                <th>Type chambre</th>
                                                <th>Actions</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                </td>
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                    </div>
 
                    <script src="../views/js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../views/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="../views/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../views/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="../views/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="../views/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../views/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="../views/vendors/counterup/waypoints.min.js"></script>
        <script src="../views/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="../views/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../views/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../views/vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="../views/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../views/js/theme.js"></script>
    <!-- end js include path -->
  </body>
</html>