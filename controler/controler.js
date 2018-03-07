var app = angular.module('recar', []);
app.directive('onFinishRender', function ($timeout) {
  return {
    restrict: 'A',
    link: function (scope, element, attr) {
      if (scope.$last === true) {
        $timeout(function () {
          scope.$emit('ngRepeatFinished');
        });
      }
    }
  }
});
app.controller('homeSlider', function($scope, $http) {
  $http.get("../data/json/slider.json").then(function (response) {
      $scope.productosSlider = response.data.productos;
  });

  $scope.$on('ngRepeatFinished', function (ngRepeatFinishedEvent) {
   var masterslider_9457 = new MasterSlider();
   //$("#loadingDiv").hide();
    // slider controls
    masterslider_9457.control('arrows', { autohide: true, overVideo: true });
    masterslider_9457.control('timebar', { autohide: false, overVideo: true, align: 'bottom', color: '#3a3a3a', width: 4 });
    // slider setup
    masterslider_9457.setup("MS5a7c9d45a9457", {
      width: 1100,
      height: 500,
      minHeight: 0,
      space: 0,
      start: 1,
      grabCursor: true,
      swipe: true,
      mouse: true,
      keyboard: false,
      layout: "boxed",
      wheel: false,
      autoplay: true,
      instantStartLayers: true,
      mobileBGVideo: false,
      loop: true,
      shuffle: false,
      preload: 0,
      heightLimit: true,
      autoHeight: false,
      smoothHeight: true,
      endPause: false,
      overPause: true,
      fillMode: "fill",
      centerControls: true,
      startOnAppear: false,
      layersMode: "center",
      autofillTarget: "",
      hideLayers: false,
      fullscreenMargin: 0,
      speed: 20,
      dir: "h",
      parallaxMode: 'swipe',
      view: "parallaxMask"
    });
    
    //$("#P_MS5a7c9d45a9457").show();
  });

});