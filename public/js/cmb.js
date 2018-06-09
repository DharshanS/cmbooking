/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

/**
 * Created by dharshan on 5/31/18.
 */
$(document).ready(function () {

    var airports = new Array();

    $("#origin").autocomplete({

        source: function source(request, response) {
            $.ajax({
                url: "api/findAirports",
                dataType: "json",
                data: {
                    query: request.data
                },
                success: function success(data) {
                    //console.log(data);
                    airports = null;
                    data.forEach(function (index) {
                        console.log(index);
                        var airport = {
                            label: index.airport_name,
                            value: index.iata_code,
                            category: ""
                        };
                        airports = airport;
                    });

                    response(airports);
                }
            });
        },
        minLength: 1,
        select: function select(event, ui) {
            log("Selected: " + ui.item.value + " aka " + ui.item.id);
        }
        // source: availableTags
    });

    $("#destination").autocomplete({
        // source: availableTags
    });

    // $('#depart-date').datepicker().on('change',function (eve) {
    //     alert(eve);
    //
    // })
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#depart-date').datepicker({
        onRender: function onRender(date) {

            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('change', function (ev) {
        if (ev.date > checkout.date) {
            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }

        // checkin.hide();
        setTimeout(function () {
            $('#arrival-date')[0].focus();
        }, 300);
    }).data('datepicker');

    var checkout = $('#arrival-date').datepicker({
        onRender: function onRender(date) {
            return date <= checkin.date ? 'disabled' : '';
        }
    }).on('change', function (ev) {
        // checkout.hide();
    }).data('datepicker');
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);