angular.module('miCalcu', [])
   
    .service('CalculadoraService', ['$http',
        function($http) {
            
            var sumar = function sumar(primerValor, segundoValor) {
                var url = 'controller.php';
                url += '?primerValor=' + primerValor;
                url += '&segundoValor=' + segundoValor;
                url += '&operacion=suma';

                return $http({url: url});
            };

            return {
                sumar: sumar
            }
        }])
    
    .controller('calcController',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.resultado = null;
                };

                $scope.sumar = function sumar() {
                    if ($scope.formularioSuma.$valid) {
                        CalculadoraService
                            .sumar($scope.primerValor, $scope.segundoValor)
                            .then(function(response) {
                                if (response.data) {
                                    $scope.resultado = response.data;
                                }
                            }, function(response) {
                                $scope.resultado = response;
                            });
                    }
                };

                $scope.init();
            }])
;

     
      
       