var AGapp = angular.module('AGSkryp', ["ui.router"]);

AGapp.config(function ($stateProvider) {
  $stateProvider.state('home', {
      templateUrl: 'partials/projects.html'
    }),
    $stateProvider.state('agskryp', {
      templateUrl: 'partials/agskryp-project.html'
    }),
    $stateProvider.state('molto', {
      templateUrl: 'partials/molto-project.html'
    }),
    $stateProvider.state('skrypnyk', {
      templateUrl: 'partials/skryp6-project.html'
    })
});

AGapp.controller('MainCtrl', function ($state, $scope) {
  $state.go('home');

  $scope.windowReset = function () {
    $('html,body').delay(20).animate({
      scrollTop: ($('#projects').offset()).top
    }, 0);
  }

  $('#projects a').on('click', function (e) {
    e.preventDefault();
    return false;
  });

  //Preforms a smooth scroll when page links are clicked
  $(function () {
    $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
        this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 600);
          return false;
        }
      }
    });
  });
});
