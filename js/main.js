/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/script.js":
/*!***********************!*\
  !*** ./src/script.js ***!
  \***********************/
/***/ (() => {

eval("const windowWidth = window.innerWidth;\r\n\r\n// menuBtn.addEventListener(\"click\", () => {\r\n//   menu.classList.toggle(\"show\");\r\n// });\r\n\r\nif (windowWidth <= 1418) {\r\n  const menuBtn = document.querySelector(\".menu-btn\");\r\n  const menu = document.getElementById(\"menu-main-menu\");\r\n\r\n  let menuOpen = false;\r\n  menuBtn.addEventListener(\"click\", () => {\r\n    if (!menuOpen) {\r\n      menuBtn.classList.add(\"open\");\r\n      menuOpen = true;\r\n      menu.classList.add(\"show\");\r\n    } else {\r\n      menuBtn.classList.remove(\"open\");\r\n      menuOpen = false;\r\n      menu.classList.remove(\"show\");\r\n    }\r\n  });\r\n\r\n  const menuBtnBurger = document.querySelector(\".menu-btn__burger\");\r\n}\r\n\n\n//# sourceURL=webpack://startertheme/./src/script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/script.js"]();
/******/ 	
/******/ })()
;