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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var url = document.getElementById("img_url");

if (document.body.contains(url)) //edit - create
  {
    url.onchange = function (e) {
      document.getElementById("img").style.backgroundImage = "url('" + url.value + "')";
    };
  } else //index
  {
    var show = function show(card) {
      card.classList.add("show");
      if (card.classList.contains("fullscreen")) card.classList.remove("fullscreen");
      if (card.classList.contains("hide-right")) card.classList.remove("hide-right");
      if (card.classList.contains("hide-left")) card.classList.remove("hide-left");
    };

    var hide = function hide(card, direction) {
      var classname = "";
      card.classList.remove("show");

      if (direction == 'right') //go left
        {
          classname = "hide-right";
          if (card.classList.contains("hide-left")) //todo factor that ugly stuff
            card.classList.remove("hide-left");
          card.classList.add(classname);
        } else if (direction == 'left') // go right
        {
          classname = "hide-left";
          if (card.classList.contains("hide-right")) card.classList.remove("hide-right");
          card.classList.add(classname);
        }
    };

    var transition = function transition(e) {
      //hide old card
      var old_card = document.getElementById("card" + current);

      if (e.deltaY > 0) //go left
        {
          hide(old_card, 'right');
          current = current + 1 <= max ? current + 1 : current;
        } else if (e.deltaY < 0) // go right
        {
          hide(old_card, 'left');
          current = current - 1 >= min ? current - 1 : current;
        } //show new card


      var new_card = document.getElementById("card" + current);
      show(new_card);
    };

    var add_event = function add_event() {
      document.addEventListener("wheel", function (e) {
        transition(e);
        setTimeout(add_event, 700);
      }, {
        once: true
      });
    };

    var current = document.getElementsByClassName("card").length - 1;
    var max = current;
    var min = 0;
    document.addEventListener("click", function (e) {
      document.getElementById("card" + current).classList.add("fullscreen");
      document.getElementById("card" + current).classList.remove("show");
    });
    add_event();
  }

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/dev/Documents/work/test_helloce/laravel/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/dev/Documents/work/test_helloce/laravel/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });