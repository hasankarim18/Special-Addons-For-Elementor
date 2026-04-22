jQuery(document).ready(function ($) {
  console.log("basic-widget-script.js");
  //   js hook
  elementorFrontend.hooks.addAction(
    "frontend/element_ready/basic_widget.default",
    function ($scope) {
      $scope.find(".safe_basic_widget_title_box").on("click", function (e) {
        // e.css("background", "red");
        $scope.find(".safe_basic_widget_title_box").css("background", "red");
      });
    },
  );
});
