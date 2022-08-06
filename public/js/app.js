/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_popup_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/popup.js */ "./resources/js/modules/popup.js");
//require('./bootstrap');


window.onload = function () {
  //ВРЕМЕННО ОТКЛЮЧАЕМ ССЫЛКИ
  var links = document.querySelectorAll('[href="#"]');
  links.forEach(function (link) {
    if (!link.classList.contains('link-on-popup')) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
      });
    }
  });
  document.addEventListener('click', documentActions);

  function documentActions(e) {
    var target = e.target; //remove burger

    if (!target.closest('.burger') && !target.closest('.icon-menu')) {
      menuBtn.classList.remove('open');
      burger.classList.remove('open');
    } //remove language select


    if (!target.closest('.language-btn')) {
      languageBtn.classList.remove('active');
    } //popUp


    if (target.closest('.link-on-popup')) {
      (0,_modules_popup_js__WEBPACK_IMPORTED_MODULE_0__.popUp)(target.closest('.link-on-popup').dataset.popupId);
      e.preventDefault();
    }
  } //Menu burger


  var menuBtn = document.querySelector('.icon-menu');
  var burger = document.querySelector('.burger');
  menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('open');
    burger.classList.toggle('open');
  }); //Переключение языков (комп и мобилка)

  var languageBtn = document.querySelector('.language-btn');
  languageBtn.addEventListener('click', function (e) {
    if (window.matchMedia("(pointer: coarse)").matches) {
      // Устройства со стилусом
      if (!languageBtn.classList.contains('active')) {
        e.preventDefault();
      }

      languageBtn.classList.toggle('active');
    }
  });
  $('.list-questions__item-btn').click(function (e) {
    $(e.target).closest('div').next().slideToggle(500);
    $(e.target).toggleClass('active');
  });
  $('.list-questions__item-row span:first-child').click(function (e) {
    $(e.target).closest('div').next().slideToggle(500);
    $(e.target).next().toggleClass('active');
  }); //Стилизация Select

  var bookingForm = document.querySelector('#bookingform');
  var placeholderText = 'Вид помощи';

  if (bookingForm.classList.contains('es')) {
    placeholderText = 'Elige el servicio';
  }

  $('.select-form').select2({
    placeholder: placeholderText,
    minimumResultsForSearch: -1
  }); // Отпарвка данных из формы

  $("#bookingform").submit(function (event) {
    event.preventDefault();
    $(".popup__load").addClass('active');
    $.ajax({
      type: 'POST',
      url: 'https://asociacion-inteligente.com.ua/feedback',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function success() {
        $(".name-error").html('');
        $(".phone-error").html('');
        $(".service-error").html('');
        $(".popup").addClass("send");
        bookingForm.reset();
        $(".select-form").select2("destroy");
        $('.select-form').select2({
          placeholder: 'Выберету услугу',
          minimumResultsForSearch: -1
        });
        $(".popup__load").removeClass('active');
      },
      error: function error(err) {
        $(".popup__load").removeClass('active');

        if (bookingForm.classList.contains('es')) {
          var _err$responseJSON, _err$responseJSON$err, _err$responseJSON2, _err$responseJSON2$er, _err$responseJSON3, _err$responseJSON3$er;

          if (err !== null && err !== void 0 && (_err$responseJSON = err.responseJSON) !== null && _err$responseJSON !== void 0 && (_err$responseJSON$err = _err$responseJSON.errors) !== null && _err$responseJSON$err !== void 0 && _err$responseJSON$err.name) {
            var _text = err.responseJSON.errors.name[0];

            if (_text == 'Не заполнено поле "Имя"') {
              $(".name-error").html('El campo Nombre no esta rellenado');
            } else if (_text == 'Поле "Имя" не должно содержать цифр') {
              $(".name-error").html('Campo "Nombre" no puede contener los números');
            } else if (_text == 'Поле "Имя" должно содержать 2 или больше символов') {
              $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
            } else if (_text == 'Поле "Имя" должно содержать не больше 80 символов') {
              $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
            }
          } else {
            $(".name-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON2 = err.responseJSON) !== null && _err$responseJSON2 !== void 0 && (_err$responseJSON2$er = _err$responseJSON2.errors) !== null && _err$responseJSON2$er !== void 0 && _err$responseJSON2$er.phone) {
            var _text2 = err.responseJSON.errors.phone[0];

            if (_text2 == 'Не заполнено поле "Номер телефона"') {
              $(".phone-error").html('El campo no esta rellenado telefono');
            } else if (_text2 == 'Не верный формат номера телефона') {
              $(".phone-error").html('Introduce un telefono válido');
            }
          } else {
            $(".phone-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON3 = err.responseJSON) !== null && _err$responseJSON3 !== void 0 && (_err$responseJSON3$er = _err$responseJSON3.errors) !== null && _err$responseJSON3$er !== void 0 && _err$responseJSON3$er.service) {
            var _text3 = err.responseJSON.errors.service[0];

            if (_text3 == 'Пожалуйста выберете тип услуги из списка') {
              $(".service-error").html('Por favor, elige el servicio');
            }
          } else {
            $(".service-error").html('');
          }
        } else {
          var _err$responseJSON4, _err$responseJSON4$er, _err$responseJSON5, _err$responseJSON5$er, _err$responseJSON6, _err$responseJSON6$er;

          if (err !== null && err !== void 0 && (_err$responseJSON4 = err.responseJSON) !== null && _err$responseJSON4 !== void 0 && (_err$responseJSON4$er = _err$responseJSON4.errors) !== null && _err$responseJSON4$er !== void 0 && _err$responseJSON4$er.name) {
            $(".name-error").html(err.responseJSON.errors.name[0]);
          } else {
            $(".name-error").html('');
          }

          if (err !== null && err !== void 0 && (_err$responseJSON5 = err.responseJSON) !== null && _err$responseJSON5 !== void 0 && (_err$responseJSON5$er = _err$responseJSON5.errors) !== null && _err$responseJSON5$er !== void 0 && _err$responseJSON5$er.phone) {
            $(".phone-error").html(err.responseJSON.errors.phone[0]);
          } else {
            $(".phone-error").html('');
            ;
          }

          if (err !== null && err !== void 0 && (_err$responseJSON6 = err.responseJSON) !== null && _err$responseJSON6 !== void 0 && (_err$responseJSON6$er = _err$responseJSON6.errors) !== null && _err$responseJSON6$er !== void 0 && _err$responseJSON6$er.service) {
            $(".service-error").html(err.responseJSON.errors.service[0]);
          } else {
            $(".service-error").html('');
          }
        }
      }
    });
  }); //Copy text to bufer

  var text = document.querySelector('.copy-text').innerHTML;
  var copyBtns = document.querySelectorAll('.copy-text');
  var btnText = copyBtns[1].innerHTML;
  copyBtns.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      navigator.clipboard.writeText(text);
      copyBtns[1].innerHTML = "ТЕКСТ СКОПИРОВАН";
      copyBtns[0].classList.add('copied');
      copyBtns[1].classList.add('copied');
      setTimeout(function () {
        copyBtns[1].innerHTML = btnText;
        copyBtns[0].classList.remove('copied');
        copyBtns[1].classList.remove('copied');
      }, 15000);
    });
  });
};

/***/ }),

/***/ "./resources/js/modules/popup.js":
/*!***************************************!*\
  !*** ./resources/js/modules/popup.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "popUp": () => (/* binding */ popUp)
/* harmony export */ });
function popUp(popupId) {
  var popUp = document.getElementById(popupId);
  var bodyLock = document.getElementById('body');
  var popupCloseIcon = popUp.querySelector('.close-popup');
  var popupBtn = popUp.querySelector('.confirm-button');
  var popupSending = popUp.querySelector('.popup__load') || false;
  var filePreview = popUp.querySelector('.preview-file') || false;
  popUp.classList.add('open');
  bodyLock.classList.add('lock');
  popupCloseIcon.addEventListener('click', function (e) {
    popupClose(popUp);
    e.preventDefault();
  });
  popupBtn.addEventListener('click', function () {
    popupClose(popUp);
  });

  function popupClose(popupActive) {
    popupActive.classList.remove('open');
    bodyLock.classList.remove("lock");
    popUp.classList.remove('send');

    if (filePreview) {
      filePreview.innerHTML = '';
    }
  }

  popUp.addEventListener('mousedown', function (e) {
    if (popupSending) {
      if (!e.target.closest('.popup__content') && !popupSending.classList.contains('active')) popupClose(popUp);
    } else {
      if (!e.target.closest('.popup__content')) popupClose(popUp);
    }
  });
}
;

/***/ }),

/***/ "./resources/css/scss/style.scss":
/*!***************************************!*\
  !*** ./resources/css/scss/style.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/css/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;