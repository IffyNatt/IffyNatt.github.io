/// <reference path="angular-route.js" />
/// <reference path="angular.js" />

var myApp = angular.module('hrNetworks', ['ui.router', 'ngRoute'])


.config(function ($routeProvider) {
    $routeProvider
        .when('/',{
            templateUrl:"templates/home.html",
            controller: "homeController",
        })
           .when('/testing', {
               templateUrl: "templates/HRAdvisorPackage.html",
               //controller: "homeController",
           })


})
    //.config(function ($stateProvider) {
    //    $stateProvider
    //            .state("ourValues", {
    //                url: "/ourValues",
    //                templateUrl: "templates/ourValues.html",
    //                //controller: "ourValuesController",
    //                //controllerAs: "ourValuesCtrl",
    //            })
    //})

                //.state("home.aboutUS", {
                //    url: "/",
                //    templateUrl: "templates/aboutUs.html",
                //    controller: "homeController",
                //    controllerAs: "homeCtrl"
                //})

                //.state("home.ourValues", {
                //    url: "/ourValues",
                //    templateUrl: "templates/ourValues.html",
                //    controller: "ourValuesCtrl",
                //    controllerAs: "homeCtrl"
                //})

    //})



.controller("homeController", function ($scope) {
    var abtUsPageContent = {
        abtusHeader: "About Us",
        abtP1: "HR NETwork was developed in response to the growing needs of small and medium-sized companies that require quality, affordable Human Resources services,",
        abtP2: "Realizing that there must be a better way than carrying expensive overhead and staff, HR NETwork developed a new industry model. Our attention to the details of your Human Resources issues allows you to stay focused on the strategic growth of your business, with the peace of mind that your business is in compliance and your employees are satisfied and productive.",
        abtP3: "... with HR NETwork on your side, we will increase the effectiveness of your company's employee resources while minimizing your risk and exposure."
        
    }; 

    $scope.abtUs = abtUsPageContent;

    $scope.btnClickAbtUs = function() {
        abtUsPageContent.abtusHeader="About Us",
        abtUsPageContent.abtP1="HR NETwork was developed in response to the growing needs of small and medium-sized companies that require quality, affordable Human Resources services,",
        abtUsPageContent.abtP2="Realizing that there must be a better way than carrying expensive overhead and staff, HR NETwork developed a new industry model. Our attention to the details of your Human Resources issues allows you to stay focused on the strategic growth of your business, with the peace of mind that your business is in compliance and your employees are satisfied and productive.",
        abtUsPageContent.abtP3= "... with HR NETwork on your side, we will increase the effectiveness of your company's employee resources while minimizing your risk and exposure."
    }

    $scope.btnClickOurMission = function () {
        abtUsPageContent.abtusHeader = "Our Mission"
        abtUsPageContent.abtP1 ="We help small businesses become GREAT employers!"
        abtUsPageContent.abtP2 = "Minimizing risk and liability with quality HR expertise, hands-on personalized service, and a passion for what we do!."
    }

    $scope.btnClickOurVision = function () {
        abtUsPageContent.abtusHeader = "Our Vision"
        abtUsPageContent.abtP1 = "To provide the absolute highest quality HR services through our devoted relationships with our employer clients."
        abtUsPageContent.abtP2 = "To create a company that espouses our ideals, principles, and passion of HR"
        abtUsPageContent.abtP3 = "To create an internal environment that is supportive, challenging, fun, and the best darn company we'll ever work at!"

    }

    $scope.btnClickOurValues = function () {
        abtUsPageContent.abtusHeader = "Our Values"
        abtUsPageContent.abtP1 = "We sell Relationships and Win Clients for Life!"
        abtUsPageContent.abtP2 = "Overwhelm our clients with Exceptional Service"
        abtUsPageContent.abtP3 = "Create an awesome place to work"
        abtUsPageContent.abtP4 = "Strive to delight our customer with every interaction"
        abtUsPageContent.abtP5 = "Work with passion, commitment and enthusiasm"
        abtUsPageContent.abtP6 = "To accomplish collectively more than we can do separately"
        abtUsPageContent.abtP7 = "Go the last mile to do things right; seek superiority in all we undertake"
        abtUsPageContent.abtP8 = "Continual improvement in all that we do - in ideas, in quality, and in client satisfaction"
        abtUsPageContent.abtP9 = "Look out for each other - everyone on our team has a critical role to our success"
        abtUsPageContent.abtP10 = "Honesty, integrity, and ethics in all aspects of our business"
        abtUsPageContent.abtP11 = "Preserve our reputation - it is precious"
        abtUsPageContent.abtP12 = "Have pride in being part of something very special!"
    }


    $scope.btnClickWeCarePrgm = function () {
        abtUsPageContent.abtusHeader = "We Care Program"
        abtUsPageContent.abtP1 =
        abtUsPageContent.abtP2 = "Minimizing risk and liability with quality HR expertise, hands-on personalized service, and a passion for what we do."
        console.log("This is Our Values")
    }

})




