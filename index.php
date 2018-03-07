<!DOCTYPE html>
<html ng-app="recar"  ng-controller="homeSlider">

<head>
  <?php include './includes/php/head.php';?>
</head>

<body class="full-layout" >
  <div class="body-wrapper">
    <!-- .navbar -->

    <?php include './includes/php/navbar.php';?>
    <!--/.navbar -->
    <div class="offset"></div>
    
    <!--<div class="row" id="loadingDiv" style="width:1100px;height:500px;">
          <div class="text-center g-mb-10" style="width: 100%;">
            <i class="fa fa-circle-o-notch fa-spin fa-4x g-color-blue"></i>
          </div>
        </div>-->

   

    <!-- MasterSlider -->
    <div id="P_MS5a7c9d45a9457" class="master-slider-parent ms-parent-id-215" >


      <!-- MasterSlider Main -->
      <div id="MS5a7c9d45a9457" class="master-slider ms-skin-light-3">

        <div ng-repeat="x in productosSlider" on-finish-render="ngRepeatFinished" class="ms-slide" data-delay="5.5" data-fill-mode="fill" style="background-color:#ffffff;">

          <div class="ms-layer  msp-cn-200-11" style="width:1100px;height:500px;" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="0"
            data-origin="tl" data-position="normal" data-wait="true">
          </div>

          <div class="ms-layer  msp-cn-200-13" style="" data-effect="t(false,n,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-ease="easeOutQuint"
            data-offset-x="131" data-offset-y="98" data-origin="tl" data-position="fixed"></div>

          <div class="ms-layer  msp-cn-200-12" data-ease="easeOutQuint" data-parallax="15" data-offset-x="129" data-offset-y="100"
            data-origin="tl" data-position="normal">
            <img src="./style/images/art/{{x.img}}" class="img-responsive" />
          </div>

          <div class="ms-layer  msp-cn-200-1" data-ease="easeOutQuint" data-offset-x="566" data-offset-y="100" data-origin="tl" data-position="normal">
            DOBLADORA DE CAÑOS 180°</div>

          <div class="ms-layer  msp-cn-200-16" style="width:360px;" data-ease="easeOutQuint" data-offset-x="567" data-offset-y="250"
            data-origin="tl" data-position="normal">
            Estado de Stock:
            <span style="font-weight: 200 !important;">En Stock</span>
          </div>

          <div class="ms-layer  msp-cn-200-17" style="width:360px;" data-ease="easeOutQuint" data-offset-x="567" data-offset-y="300"
            data-origin="tl" data-position="normal">
            gran dobladora de caños que sirve para todo, es de las mejores de la marca. Gran precio calidad y bla bla bla bla bla bla
            bla bla bla bla
          </div>

          <div class="ms-layer  msp-cn-200-18" style="" data-ease="easeOutQuint" data-offset-x="567" data-offset-y="350" data-origin="tl"
            data-position="normal">
            <span class="woocommerce-Price-amount amount">
              <span class="woocommerce-Price-currencySymbol">U&#36;D</span> 5.00 + iva</span>
          </div>

          <a href="#" target="_self" class="ms-layer  msp-cn-200-19 ms-btn ms-btn-box ms-btn-m msp-preset-btn-208" data-effect="t(true,n,n,-250,n,n,n,n,n,n,n,n,n,n,n)"
            data-duration="2000" data-delay="400" data-ease="easeOutQuint" data-type="button" data-offset-x="567" data-offset-y="400"
            data-origin="tl" data-position="normal">
            Ver Descripcion</a>
        </div>

        <!-- END MasterSlider Main -->



        <!-- END MasterSlider -->
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.fullwidthbanner -->
    </div>
    <!-- /.fullwidthbanner-container -->
  </div>

  <!-- footer -->
  <?php include './includes/php/fotter.php';?>
  <!-- /footer -->


  </div>

  <!-- Bootstrap core JavaScript
================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include './includes/php/scripts.php';?>

</body>

</html>