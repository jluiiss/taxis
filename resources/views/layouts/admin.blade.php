 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Sitio de taxis Centenario</title>

    {!!Html::Style('css/bootstrap.min.css')!!}
    {!!Html::Style('css/bootstrap-theme.css')!!}
      {!!Html::Style('css/elegant-icons-style.css')!!}
      {!!Html::Style('css/font-awesome.min.css')!!}
    {!!Html::Style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!!Html::Style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
    {!!Html::Style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    {!!Html::Style('css/owl.carousel.css')!!}
    {!!Html::Style('css/jquery-jvectormap-1.2.2.css')!!}
    {!!Html::Style('css/fullcalendar.css')!!}
    {!!Html::Style('css/widgets.css')!!}
    {!!Html::Style('css/style.css')!!}
    {!!Html::Style('css/style-responsive.css')!!}
    {!!Html::Style('css/xcharts.min.css')!!}
    {!!Html::Style('css/jquery-ui-1.10.4.min.css')!!}
  </head>

 <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="/admin" class="logo"><img src="../../img/logo5.png"> <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../../img/nadie.png" width="30%">
                            </span>
                            <span class="username">{!!Auth::user()->name!!}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Perfil</a>
                            </li>
                           
                            <li>
                                <a href="/logout"><i class="icon_key_alt"></i> Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="/admin">
                          <i class="icon_house_alt"></i>
                          <span>Tablas</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="/personas">
                          <i class="icon_table"></i>
                          <span>Personas</span>
                      </a>
                  </li>       
                  <li>
                      <a class="" href="/empresa">
                          <i class="icon_table"></i>
                          <span>Empresa</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/direcciones">
                          <i class="icon_table"></i>
                          <span>Direcciones</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/tarifa">
                          <i class="icon_table"></i>
                          <span>Tarifa</span>
                      </a>
                  </li>
                             
                  <li>
                      <a class="" href="/vehiculo">
                          <i class="icon_table"></i>
                          <span>Vehiculo</span>
                      </a>
                  </li>
                  
                  <li>
                      <a class="" href="/control">
                          <i class="icon_table"></i>
                          <span>Control</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="/registro">
                          <i class="icon_table"></i>
                          <span>Registro</span>
                      </a>
                  </li>
                   <li>
                      <a class="" href="/usuario">
                          <i class="icon_table"></i>
                          <span>Usuarios</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
            @yield('content')
          </section>
      </section>

</section>
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
    {!!Html::script('js/jquery-1.8.3.min.js')!!}
    {!!Html::script('text/javascript" src="js/jquery-ui-1.9.2.custom.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    {!!Html::script('js/jquery.nicescroll.js')!!}
    {!!Html::script('assets/jquery-knob/js/jquery.knob.js')!!}
    {!!Html::script('js/jquery.sparkline.js" type="text/javascript')!!}
    {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
    {!!Html::script('js/owl.carousel.js')!!}
    {!!Html::script('js/fullcalendar.min.js')!!}
    {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
    {!!Html::script('js/calendar-custom.js')!!}
    {!!Html::script('js/jquery.rateit.min.js')!!}
    {!!Html::script('js/jquery.customSelect.min.js')!!}
    {!!Html::script('assets/chart-master/Chart.js')!!}
    {!!Html::script('js/scripts.js')!!}
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/easy-pie-chart.js')!!}
    {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('js/xcharts.min.js')!!}
    {!!Html::script('js/jquery.autosize.min.js')!!}
    {!!Html::script('js/jquery.placeholder.min.js')!!}
    {!!Html::script('js/gdp-data.js')!!}
    {!!Html::script('js/morris.min.js')!!}
    {!!Html::script('js/sparklines.js')!!}
    {!!Html::script('js/charts.js')!!}
    {!!Html::script('js/jquery.slimscroll.min.js')!!}
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });
  </script>

  </body>
</html>