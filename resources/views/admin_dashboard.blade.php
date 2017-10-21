@extends('layouts.admin')

@section('content')

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar-inverse navbar-fixed-top backend_nav" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-center">
                <div>
                    <a href="{{route('home')}}"><img class="i_logo" src="{{ asset('images/logoComplet.png') }}"></a>
                </div>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav-backend side-nav">
                    
                    <li id="1">
                        <a onclick="panel(1)">Panel de control</a>
                    </li>
                    <li id="2">
                        <a onclick="panel(2)">Categories</a>
                    </li>
                    <li id="3">
                        <a onclick="panel(3)">Activitats</a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
                            <span class="nav-link-text">Esdeveniments</span> <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li id="4">
                                <a onclick="panel(4)"><i class="fa fa-pencil"></i> Editar</a>
                            </li>
                            <li id="5">
                                <a onclick="panel(5)"><i class="fa fa-plus"></i> Crear</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-close">
                        <a href="{{route('logout')}}">Cerrar sesión</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

        
                <div id="message">
                <?php 

                ?>
                </div>

                @include('bakend.panel2')
                @include('bakend.panel3')
                @include('bakend.panel4')
                @include('bakend.panel5')

            </div>

        </div>

    </div>

</div>


<script type="text/javascript">

    window.onload = function()
    {
        $('#1').addClass("active");
        $('#panel1').show();
        $('#panel2').hide();
        $('#panel3').hide();
        $('#panel4').hide();
        $('#panel5').hide();

        showCategory();
        showActivity();

    };

    function panel(key)
    {
        switch(key) 
        {
            case 1:
                $('#1').addClass("active");
                $('#2').removeClass("active");
                $('#3').removeClass("active");
                $('#4').removeClass("active");
                $('#5').removeClass("active");
                $('#panel1').show("fast");
                $('#panel2').hide();
                $('#panel3').hide();
                $('#panel4').hide();
                $('#panel5').hide();
            break;
            case 2:
                $('#1').removeClass("active");
                $('#2').addClass("active");
                $('#3').removeClass("active");
                $('#4').removeClass("active");
                $('#5').removeClass("active");
                $('#panel1').hide();
                $('#panel2').show("fast");
                $('#panel3').hide();
                $('#panel4').hide();
                $('#panel5').hide();
            break;
            case 3:
                $('#1').removeClass("active");
                $('#2').removeClass("active");
                $('#3').addClass("active");
                $('#4').removeClass("active");
                $('#5').removeClass("active");
                $('#panel1').hide();
                $('#panel2').hide();
                $('#panel3').show(("fast"));
                $('#panel4').hide();
                $('#panel5').hide();
            break;
            case 4:
                $('#1').removeClass("active");
                $('#2').removeClass("active");
                $('#3').removeClass("active");
                $('#4').addClass("active");
                $('#5').removeClass("active");
                $('#panel1').hide();
                $('#panel2').hide();
                $('#panel3').hide();
                $('#panel4').show("fast");
                $('#panel5').hide();
            break;
             case 5:
                $('#1').removeClass("active");
                $('#2').removeClass("active");
                $('#3').removeClass("active");
                $('#4').removeClass("active");
                $('#5').addClass("active");
                $('#panel1').hide();
                $('#panel2').hide();
                $('#panel3').hide();
                $('#panel4').hide();
                $('#panel5').show("fast");
            break;
        }
    }

    function showCategory()
    {
        $.ajax({
            url :"{{ route('show.category') }}/", 
            type: "GET", 

            success: function(report)
            {    
                for (var i=0; i < report.length; i++)
                {
                    $('#category').append("<option value='"+report[i].name+"'>"+report[i].name+"</option>");
                    $('#body_table_category').append('<div class="box_dash pad_50"><div class="row"><div class="col-lg-12"><div class="col-lg-8">'+report[i].name+'</div><div class="col-lg-4"><button type="button" onclick="deleteCategory(' + report[i].id + ')" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div>');
                }            
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }


    function createCategory()
    {
        $.ajax({
            url :"{{ route('create.category') }}/", 
            type: "GET",
            data:{
                name:$('#newCategory').val()
            },
            success: function(report)
            {    
                $('#message').empty();
                $('#message').append('<div class="alert alert-info alert-dismissable">'+report+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');  
                $('#message').parent().css({"margin-top": "10px "});
                $('#body_table_category').empty();
                showCategory();
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }


    function deleteCategory(id)
    {
        $.ajax({
            url :"{{ route('delete.category') }}/" + id, 
            type: "GET",
            success: function(report)
            {    
                $('#message').empty();
                $('#message').append('<div class="alert alert-info alert-dismissable">'+report+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');  
                $('#message').parent().css({"margin-top": "10px "});
                $('#body_table_category').empty();
                showCategory();
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }


    function showActivity()
    {
        $.ajax({
            url :"{{ route('show.activity') }}/", 
            type: "GET", 

            success: function(report)
            {    
                for (var i=0; i < report.length; i++)
                {
                    $('#body_table_activity').append('<div class="box_dash pad_50"><div class="row"><div class="col-lg-12"><div class="col-lg-8">'+report[i].name+'</div><div class="col-lg-4"><button type="button" onclick="deleteActivity(' + report[i].id + ')" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div>');
                }            
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }


    function createActivity()
    {
        $.ajax({
            url :"{{ route('create.activity') }}/", 
            type: "GET",
            data:{
                name:$('#newActivity').val()
            },
            success: function(report)
            {    
                $('#message').empty();
                $('#message').append('<div class="alert alert-info alert-dismissable">'+report+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');  
                $('#message').parent().css({"margin-top": "10px "});
                $('#body_table_activity').empty();
                showActivity();
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }


    function deleteActivity(id)
    {
        $.ajax({
            url :"{{ route('delete.activity') }}/" + id, 
            type: "GET",
            success: function(report)
            {    
                $('#message').empty();
                $('#message').append('<div class="alert alert-info alert-dismissable">'+report+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');  
                $('#message').parent().css({"margin-top": "10px "});
                $('#body_table_activity').empty();
                showActivity();
            },  
            error: function (request,errorType,errorMessage)
            {
                console.log(errorType+'\n'+errorMessage);
            }
        });
    }

</script>


@stop