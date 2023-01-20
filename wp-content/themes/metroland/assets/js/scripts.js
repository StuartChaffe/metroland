/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/components/accordion.js":
/*!****************************************!*\
  !*** ./src/js/components/accordion.js ***!
  \****************************************/
/***/ (() => {

eval("document.addEventListener(\"DOMContentLoaded\", function () {\n  var accordion = document.querySelectorAll('.accordion__handle');\n  if (accordion) {\n    accordion.forEach(function (item) {\n      item.addEventListener('click', function () {\n        var expanded = this.getAttribute('aria-expanded'),\n          did = this.getAttribute('aria-controls'),\n          target = document.getElementById(did);\n        if (target) {\n          target.classList.toggle('is-open');\n        }\n        expanded = expanded == 'true' ? 'false' : 'true';\n        this.setAttribute(\"aria-expanded\", expanded);\n        this.classList.toggle('is-active');\n      });\n    });\n  }\n  var showAll = document.getElementById('toggleAll');\n  var accordionBtns = document.querySelectorAll('.accordion__handle');\n  var accordionItems = document.querySelectorAll('.accordion__body');\n  if (showAll) {\n    showAll.addEventListener('click', function (e) {\n      e.preventDefault();\n      for (var i = 0; i < accordionItems.length; i++) {\n        accordionItems[i].classList.add('is-open');\n      }\n      for (var x = 0; x < accordionBtns.length; x++) {\n        accordionBtns[i].setAttribute(\"aria-expanded\", \"true\");\n        accordionBtns[i].classList.add('is-active');\n      }\n    });\n  }\n  var getAccordion = window.location.hash.substring(1),\n    accordionEntry = false;\n  if (getAccordion.length > 0) {\n    try {\n      accordionEntry = document.getElementById(getAccordion);\n    } catch (e) {}\n  }\n  if (accordionEntry) {\n    var did = accordionEntry.getAttribute('aria-controls'),\n      target = document.getElementById(did);\n    if (target) {\n      target.classList.toggle('is-open');\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJhY2NvcmRpb24iLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsIml0ZW0iLCJleHBhbmRlZCIsImdldEF0dHJpYnV0ZSIsImRpZCIsInRhcmdldCIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic2V0QXR0cmlidXRlIiwic2hvd0FsbCIsImFjY29yZGlvbkJ0bnMiLCJhY2NvcmRpb25JdGVtcyIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImkiLCJsZW5ndGgiLCJhZGQiLCJ4IiwiZ2V0QWNjb3JkaW9uIiwid2luZG93IiwibG9jYXRpb24iLCJoYXNoIiwic3Vic3RyaW5nIiwiYWNjb3JkaW9uRW50cnkiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vb3JpZ2luLy4vc3JjL2pzL2NvbXBvbmVudHMvYWNjb3JkaW9uLmpzPzhmZTIiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oKSB7XG5cblx0dmFyIGFjY29yZGlvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5hY2NvcmRpb25fX2hhbmRsZScpO1xuXHRpZiAoYWNjb3JkaW9uKSB7XG5cdFx0YWNjb3JkaW9uLmZvckVhY2goZnVuY3Rpb24oaXRlbSkge1xuXHRcdFx0aXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdFx0XHR2YXIgZXhwYW5kZWQgPSB0aGlzLmdldEF0dHJpYnV0ZSgnYXJpYS1leHBhbmRlZCcpLFxuXHRcdFx0XHRkaWQgPSB0aGlzLmdldEF0dHJpYnV0ZSgnYXJpYS1jb250cm9scycpLFxuXHRcdFx0XHR0YXJnZXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChkaWQpO1xuXG5cdFx0XHRcdGlmICh0YXJnZXQpIHtcblx0XHRcdFx0XHR0YXJnZXQuY2xhc3NMaXN0LnRvZ2dsZSgnaXMtb3BlbicpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0ZXhwYW5kZWQgPSBleHBhbmRlZCA9PSAndHJ1ZScgPyAnZmFsc2UnIDogJ3RydWUnO1xuXG5cdFx0XHRcdHRoaXMuc2V0QXR0cmlidXRlKFwiYXJpYS1leHBhbmRlZFwiLCBleHBhbmRlZCk7XG5cdFx0XHRcdHRoaXMuY2xhc3NMaXN0LnRvZ2dsZSgnaXMtYWN0aXZlJyk7XG5cdFx0XHR9KTtcblx0XHR9KTtcblx0fVxuXG5cdHZhciBzaG93QWxsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RvZ2dsZUFsbCcpO1xuXHR2YXIgYWNjb3JkaW9uQnRucyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5hY2NvcmRpb25fX2hhbmRsZScpO1xuXHR2YXIgYWNjb3JkaW9uSXRlbXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuYWNjb3JkaW9uX19ib2R5Jyk7XG5cblx0aWYoc2hvd0FsbCkge1xuXHRcdHNob3dBbGwuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XG5cdFx0XHRmb3IgKHZhciBpID0gMDsgaSA8IGFjY29yZGlvbkl0ZW1zLmxlbmd0aDsgaSsrKSB7XG5cdFx0XHRcdGFjY29yZGlvbkl0ZW1zW2ldLmNsYXNzTGlzdC5hZGQoJ2lzLW9wZW4nKTtcblx0XHRcdH1cblx0XHRcdGZvciAodmFyIHggPSAwOyB4IDwgYWNjb3JkaW9uQnRucy5sZW5ndGg7IHgrKykge1xuXHRcdFx0XHRhY2NvcmRpb25CdG5zW2ldLnNldEF0dHJpYnV0ZShcImFyaWEtZXhwYW5kZWRcIiwgXCJ0cnVlXCIpO1xuXHRcdFx0XHRhY2NvcmRpb25CdG5zW2ldLmNsYXNzTGlzdC5hZGQoJ2lzLWFjdGl2ZScpO1xuXHRcdFx0fVxuXHRcdH0pO1xuXHR9XG5cblx0dmFyIGdldEFjY29yZGlvbiA9IHdpbmRvdy5sb2NhdGlvbi5oYXNoLnN1YnN0cmluZygxKSxcblx0YWNjb3JkaW9uRW50cnkgPSBmYWxzZTtcblxuXHRpZiAoZ2V0QWNjb3JkaW9uLmxlbmd0aCA+IDApIHtcblx0XHR0cnkge1xuXHRcdFx0YWNjb3JkaW9uRW50cnkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChnZXRBY2NvcmRpb24pO1xuXHRcdH0gY2F0Y2goZSkgeyB9XG5cdH1cblxuXHRpZiAoYWNjb3JkaW9uRW50cnkpIHtcblx0XHR2YXIgZGlkID0gYWNjb3JkaW9uRW50cnkuZ2V0QXR0cmlidXRlKCdhcmlhLWNvbnRyb2xzJyksXG5cdFx0dGFyZ2V0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZGlkKTtcblxuXHRcdGlmICh0YXJnZXQpIHtcblx0XHRcdHRhcmdldC5jbGFzc0xpc3QudG9nZ2xlKCdpcy1vcGVuJyk7XG5cdFx0fVxuXHR9XG5cbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQUEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFXO0VBRXhELElBQUlDLFNBQVMsR0FBR0YsUUFBUSxDQUFDRyxnQkFBZ0IsQ0FBQyxvQkFBb0IsQ0FBQztFQUMvRCxJQUFJRCxTQUFTLEVBQUU7SUFDZEEsU0FBUyxDQUFDRSxPQUFPLENBQUMsVUFBU0MsSUFBSSxFQUFFO01BQ2hDQSxJQUFJLENBQUNKLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFXO1FBQ3pDLElBQUlLLFFBQVEsR0FBRyxJQUFJLENBQUNDLFlBQVksQ0FBQyxlQUFlLENBQUM7VUFDakRDLEdBQUcsR0FBRyxJQUFJLENBQUNELFlBQVksQ0FBQyxlQUFlLENBQUM7VUFDeENFLE1BQU0sR0FBR1QsUUFBUSxDQUFDVSxjQUFjLENBQUNGLEdBQUcsQ0FBQztRQUVyQyxJQUFJQyxNQUFNLEVBQUU7VUFDWEEsTUFBTSxDQUFDRSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxTQUFTLENBQUM7UUFDbkM7UUFFQU4sUUFBUSxHQUFHQSxRQUFRLElBQUksTUFBTSxHQUFHLE9BQU8sR0FBRyxNQUFNO1FBRWhELElBQUksQ0FBQ08sWUFBWSxDQUFDLGVBQWUsRUFBRVAsUUFBUSxDQUFDO1FBQzVDLElBQUksQ0FBQ0ssU0FBUyxDQUFDQyxNQUFNLENBQUMsV0FBVyxDQUFDO01BQ25DLENBQUMsQ0FBQztJQUNILENBQUMsQ0FBQztFQUNIO0VBRUEsSUFBSUUsT0FBTyxHQUFHZCxRQUFRLENBQUNVLGNBQWMsQ0FBQyxXQUFXLENBQUM7RUFDbEQsSUFBSUssYUFBYSxHQUFHZixRQUFRLENBQUNHLGdCQUFnQixDQUFDLG9CQUFvQixDQUFDO0VBQ25FLElBQUlhLGNBQWMsR0FBR2hCLFFBQVEsQ0FBQ0csZ0JBQWdCLENBQUMsa0JBQWtCLENBQUM7RUFFbEUsSUFBR1csT0FBTyxFQUFFO0lBQ1hBLE9BQU8sQ0FBQ2IsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVNnQixDQUFDLEVBQUU7TUFDN0NBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO01BQ2xCLEtBQUssSUFBSUMsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHSCxjQUFjLENBQUNJLE1BQU0sRUFBRUQsQ0FBQyxFQUFFLEVBQUU7UUFDL0NILGNBQWMsQ0FBQ0csQ0FBQyxDQUFDLENBQUNSLFNBQVMsQ0FBQ1UsR0FBRyxDQUFDLFNBQVMsQ0FBQztNQUMzQztNQUNBLEtBQUssSUFBSUMsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHUCxhQUFhLENBQUNLLE1BQU0sRUFBRUUsQ0FBQyxFQUFFLEVBQUU7UUFDOUNQLGFBQWEsQ0FBQ0ksQ0FBQyxDQUFDLENBQUNOLFlBQVksQ0FBQyxlQUFlLEVBQUUsTUFBTSxDQUFDO1FBQ3RERSxhQUFhLENBQUNJLENBQUMsQ0FBQyxDQUFDUixTQUFTLENBQUNVLEdBQUcsQ0FBQyxXQUFXLENBQUM7TUFDNUM7SUFDRCxDQUFDLENBQUM7RUFDSDtFQUVBLElBQUlFLFlBQVksR0FBR0MsTUFBTSxDQUFDQyxRQUFRLENBQUNDLElBQUksQ0FBQ0MsU0FBUyxDQUFDLENBQUMsQ0FBQztJQUNwREMsY0FBYyxHQUFHLEtBQUs7RUFFdEIsSUFBSUwsWUFBWSxDQUFDSCxNQUFNLEdBQUcsQ0FBQyxFQUFFO0lBQzVCLElBQUk7TUFDSFEsY0FBYyxHQUFHNUIsUUFBUSxDQUFDVSxjQUFjLENBQUNhLFlBQVksQ0FBQztJQUN2RCxDQUFDLENBQUMsT0FBTU4sQ0FBQyxFQUFFLENBQUU7RUFDZDtFQUVBLElBQUlXLGNBQWMsRUFBRTtJQUNuQixJQUFJcEIsR0FBRyxHQUFHb0IsY0FBYyxDQUFDckIsWUFBWSxDQUFDLGVBQWUsQ0FBQztNQUN0REUsTUFBTSxHQUFHVCxRQUFRLENBQUNVLGNBQWMsQ0FBQ0YsR0FBRyxDQUFDO0lBRXJDLElBQUlDLE1BQU0sRUFBRTtNQUNYQSxNQUFNLENBQUNFLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFNBQVMsQ0FBQztJQUNuQztFQUNEO0FBRUQsQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vc3JjL2pzL2NvbXBvbmVudHMvYWNjb3JkaW9uLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/components/accordion.js\n");

/***/ }),

/***/ "./src/js/components/menu.js":
/*!***********************************!*\
  !*** ./src/js/components/menu.js ***!
  \***********************************/
/***/ (() => {

eval("jQuery(document).ready(function ($) {\n  // Primary nav\n  var $menuBtn = $(\".site-header--nav-btn\");\n  var $menuContainer = $(\".site-header--nav__mobile\");\n  $menuBtn.click(function () {\n    $(this).toggleClass(\"is-active\");\n    $(\"body\").toggleClass(\"menu-active\");\n    $menuContainer.toggleClass(\"is-active\");\n  });\n});\njQuery(document).ready(function ($) {\n  $(\".site-header--nav__mobile .menu-item-has-children > a\").after('<span class=\"dropdown-button\">&nbsp;</span>');\n  $('.dropdown-button').click(function () {\n    if ($(this).hasClass(\"is-active\")) {\n      $(this).removeClass('is-active');\n      $(this).next('.sub-menu').slideUp('normal');\n    } else {\n      $(this).addClass('is-active');\n      $(this).next('.sub-menu').slideDown('normal');\n    }\n    return false;\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJqUXVlcnkiLCJkb2N1bWVudCIsInJlYWR5IiwiJCIsIiRtZW51QnRuIiwiJG1lbnVDb250YWluZXIiLCJjbGljayIsInRvZ2dsZUNsYXNzIiwiYWZ0ZXIiLCJoYXNDbGFzcyIsInJlbW92ZUNsYXNzIiwibmV4dCIsInNsaWRlVXAiLCJhZGRDbGFzcyIsInNsaWRlRG93biJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9vcmlnaW4vLi9zcmMvanMvY29tcG9uZW50cy9tZW51LmpzP2JiNWEiXSwic291cmNlc0NvbnRlbnQiOlsialF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigkKSB7XG5cdC8vIFByaW1hcnkgbmF2XG5cdHZhciAkbWVudUJ0biA9ICQoXCIuc2l0ZS1oZWFkZXItLW5hdi1idG5cIik7XG5cdHZhciAkbWVudUNvbnRhaW5lciA9ICQoXCIuc2l0ZS1oZWFkZXItLW5hdl9fbW9iaWxlXCIpO1xuXHQkbWVudUJ0bi5jbGljayhmdW5jdGlvbigpIHtcblx0XHQkKHRoaXMpLnRvZ2dsZUNsYXNzKFwiaXMtYWN0aXZlXCIpO1xuXHRcdCQoXCJib2R5XCIpLnRvZ2dsZUNsYXNzKFwibWVudS1hY3RpdmVcIik7XG5cdFx0JG1lbnVDb250YWluZXIudG9nZ2xlQ2xhc3MoXCJpcy1hY3RpdmVcIik7XG5cdH0pO1xufSk7XG5cbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oICQgKSB7XG5cdCQoIFwiLnNpdGUtaGVhZGVyLS1uYXZfX21vYmlsZSAubWVudS1pdGVtLWhhcy1jaGlsZHJlbiA+IGFcIiApLmFmdGVyKCAnPHNwYW4gY2xhc3M9XCJkcm9wZG93bi1idXR0b25cIj4mbmJzcDs8L3NwYW4+JyApO1xuXHQkKCcuZHJvcGRvd24tYnV0dG9uJykuY2xpY2soZnVuY3Rpb24oKSB7XG5cdFx0aWYgKCQodGhpcykuaGFzQ2xhc3MoXCJpcy1hY3RpdmVcIikpIHtcblx0XHRcdCQodGhpcykucmVtb3ZlQ2xhc3MoJ2lzLWFjdGl2ZScpO1xuXHRcdFx0JCh0aGlzKS5uZXh0KCcuc3ViLW1lbnUnKS5zbGlkZVVwKCdub3JtYWwnKTtcblx0XHR9IGVsc2Uge1xuXHRcdFx0JCh0aGlzKS5hZGRDbGFzcygnaXMtYWN0aXZlJyk7XG5cdFx0XHQkKHRoaXMpLm5leHQoJy5zdWItbWVudScpLnNsaWRlRG93bignbm9ybWFsJyk7XG5cdFx0fVxuXG5cdFx0cmV0dXJuIGZhbHNlO1xuXHR9KTtcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxVQUFTQyxDQUFDLEVBQUU7RUFDbEM7RUFDQSxJQUFJQyxRQUFRLEdBQUdELENBQUMsQ0FBQyx1QkFBdUIsQ0FBQztFQUN6QyxJQUFJRSxjQUFjLEdBQUdGLENBQUMsQ0FBQywyQkFBMkIsQ0FBQztFQUNuREMsUUFBUSxDQUFDRSxLQUFLLENBQUMsWUFBVztJQUN6QkgsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDSSxXQUFXLENBQUMsV0FBVyxDQUFDO0lBQ2hDSixDQUFDLENBQUMsTUFBTSxDQUFDLENBQUNJLFdBQVcsQ0FBQyxhQUFhLENBQUM7SUFDcENGLGNBQWMsQ0FBQ0UsV0FBVyxDQUFDLFdBQVcsQ0FBQztFQUN4QyxDQUFDLENBQUM7QUFDSCxDQUFDLENBQUM7QUFFRlAsTUFBTSxDQUFDQyxRQUFRLENBQUMsQ0FBQ0MsS0FBSyxDQUFDLFVBQVVDLENBQUMsRUFBRztFQUNwQ0EsQ0FBQyxDQUFFLHVEQUF1RCxDQUFFLENBQUNLLEtBQUssQ0FBRSw2Q0FBNkMsQ0FBRTtFQUNuSEwsQ0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUNHLEtBQUssQ0FBQyxZQUFXO0lBQ3RDLElBQUlILENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ00sUUFBUSxDQUFDLFdBQVcsQ0FBQyxFQUFFO01BQ2xDTixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNPLFdBQVcsQ0FBQyxXQUFXLENBQUM7TUFDaENQLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ1EsSUFBSSxDQUFDLFdBQVcsQ0FBQyxDQUFDQyxPQUFPLENBQUMsUUFBUSxDQUFDO0lBQzVDLENBQUMsTUFBTTtNQUNOVCxDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNVLFFBQVEsQ0FBQyxXQUFXLENBQUM7TUFDN0JWLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ1EsSUFBSSxDQUFDLFdBQVcsQ0FBQyxDQUFDRyxTQUFTLENBQUMsUUFBUSxDQUFDO0lBQzlDO0lBRUEsT0FBTyxLQUFLO0VBQ2IsQ0FBQyxDQUFDO0FBQ0gsQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vc3JjL2pzL2NvbXBvbmVudHMvbWVudS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/components/menu.js\n");

/***/ }),

/***/ "./src/js/components/no-js.js":
/*!************************************!*\
  !*** ./src/js/components/no-js.js ***!
  \************************************/
/***/ (() => {

"use strict";
eval("\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  document.body.classList.remove(\"no-js\");\n  document.body.classList.add(\"js\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy9uby1qcy5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYkEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFXO0VBQ3hERCxRQUFRLENBQUNFLElBQUksQ0FBQ0MsU0FBUyxDQUFDQyxNQUFNLENBQUMsT0FBTyxDQUFDO0VBQ3ZDSixRQUFRLENBQUNFLElBQUksQ0FBQ0MsU0FBUyxDQUFDRSxHQUFHLENBQUMsSUFBSSxDQUFDO0FBQ2xDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9qcy9jb21wb25lbnRzL25vLWpzLmpzPzZkYmQiXSwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbigpIHtcblx0ZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QucmVtb3ZlKFwibm8tanNcIik7XG5cdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LmFkZChcImpzXCIpO1xufSk7XG4iXSwibmFtZXMiOlsiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiYm9keSIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFkZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/js/components/no-js.js\n");

/***/ }),

/***/ "./src/js/components/toggle.js":
/*!*************************************!*\
  !*** ./src/js/components/toggle.js ***!
  \*************************************/
/***/ (() => {

"use strict";
eval("\n\n/**\n * Toggle script that is useful for showing navigation, modals, etc.\n *\n * The following data attributes are supported:\n *\n * data-toggle\n * data-toggle-class\n * data-toggle-body-class\n */\n(function () {\n  var elements = document.querySelectorAll('[data-toggle]');\n  if (elements.length === 0) {\n    return false;\n  }\n  elements.forEach(function (element) {\n    var targetElement = document.querySelector(element.dataset.toggle);\n    if (!targetElement) {\n      return;\n    }\n    var bodyClass = element.dataset.toggleBodyClass;\n    var toggleClass = element.dataset.toggleClass || 'is-toggled';\n    element.addEventListener('click', function () {\n      var isToggled = element.classList.contains(toggleClass);\n      targetElement.classList.toggle(toggleClass);\n      element.classList.toggle(toggleClass);\n      element.setAttribute('aria-expanded', isToggled ? 'false' : 'true');\n      targetElement.setAttribute('aria-hidden', isToggled ? 'true' : 'false');\n      if (bodyClass) {\n        document.body.classList.toggle(bodyClass);\n      }\n    }, false);\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy90b2dnbGUuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUMsYUFBWTtFQUNaLElBQU1BLFFBQVEsR0FBR0MsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxlQUFlLENBQUM7RUFFM0QsSUFBSUYsUUFBUSxDQUFDRyxNQUFNLEtBQUssQ0FBQyxFQUFFO0lBQzFCLE9BQU8sS0FBSztFQUNiO0VBRUFILFFBQVEsQ0FBQ0ksT0FBTyxDQUFDLFVBQUFDLE9BQU8sRUFBSTtJQUMzQixJQUFNQyxhQUFhLEdBQUdMLFFBQVEsQ0FBQ00sYUFBYSxDQUFDRixPQUFPLENBQUNHLE9BQU8sQ0FBQ0MsTUFBTSxDQUFDO0lBRXBFLElBQUksQ0FBQ0gsYUFBYSxFQUFFO01BQ25CO0lBQ0Q7SUFFQSxJQUFNSSxTQUFTLEdBQUdMLE9BQU8sQ0FBQ0csT0FBTyxDQUFDRyxlQUFlO0lBQ2pELElBQU1DLFdBQVcsR0FBR1AsT0FBTyxDQUFDRyxPQUFPLENBQUNJLFdBQVcsSUFBSSxZQUFZO0lBRS9EUCxPQUFPLENBQUNRLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFNO01BQ3ZDLElBQU1DLFNBQVMsR0FBR1QsT0FBTyxDQUFDVSxTQUFTLENBQUNDLFFBQVEsQ0FBQ0osV0FBVyxDQUFDO01BQ3pETixhQUFhLENBQUNTLFNBQVMsQ0FBQ04sTUFBTSxDQUFDRyxXQUFXLENBQUM7TUFDM0NQLE9BQU8sQ0FBQ1UsU0FBUyxDQUFDTixNQUFNLENBQUNHLFdBQVcsQ0FBQztNQUVyQ1AsT0FBTyxDQUFDWSxZQUFZLENBQUMsZUFBZSxFQUFFSCxTQUFTLEdBQUcsT0FBTyxHQUFHLE1BQU0sQ0FBQztNQUNuRVIsYUFBYSxDQUFDVyxZQUFZLENBQUMsYUFBYSxFQUFFSCxTQUFTLEdBQUcsTUFBTSxHQUFHLE9BQU8sQ0FBQztNQUV2RSxJQUFJSixTQUFTLEVBQUU7UUFDZFQsUUFBUSxDQUFDaUIsSUFBSSxDQUFDSCxTQUFTLENBQUNOLE1BQU0sQ0FBQ0MsU0FBUyxDQUFDO01BQzFDO0lBQ0QsQ0FBQyxFQUFFLEtBQUssQ0FBQztFQUNWLENBQUMsQ0FBQztBQUNILENBQUMsR0FBRSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9qcy9jb21wb25lbnRzL3RvZ2dsZS5qcz82NGUzIl0sInNvdXJjZXNDb250ZW50IjpbIid1c2Ugc3RyaWN0JztcblxuLyoqXG4gKiBUb2dnbGUgc2NyaXB0IHRoYXQgaXMgdXNlZnVsIGZvciBzaG93aW5nIG5hdmlnYXRpb24sIG1vZGFscywgZXRjLlxuICpcbiAqIFRoZSBmb2xsb3dpbmcgZGF0YSBhdHRyaWJ1dGVzIGFyZSBzdXBwb3J0ZWQ6XG4gKlxuICogZGF0YS10b2dnbGVcbiAqIGRhdGEtdG9nZ2xlLWNsYXNzXG4gKiBkYXRhLXRvZ2dsZS1ib2R5LWNsYXNzXG4gKi9cblxuKGZ1bmN0aW9uICgpIHtcblx0Y29uc3QgZWxlbWVudHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS10b2dnbGVdJyk7XG5cdFxuXHRpZiAoZWxlbWVudHMubGVuZ3RoID09PSAwKSB7XG5cdFx0cmV0dXJuIGZhbHNlO1xuXHR9XG5cdFxuXHRlbGVtZW50cy5mb3JFYWNoKGVsZW1lbnQgPT4ge1xuXHRcdGNvbnN0IHRhcmdldEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGVsZW1lbnQuZGF0YXNldC50b2dnbGUpO1xuXHRcblx0XHRpZiAoIXRhcmdldEVsZW1lbnQpIHtcblx0XHRcdHJldHVybjtcblx0XHR9XG5cdFx0XG5cdFx0Y29uc3QgYm9keUNsYXNzID0gZWxlbWVudC5kYXRhc2V0LnRvZ2dsZUJvZHlDbGFzcztcblx0XHRjb25zdCB0b2dnbGVDbGFzcyA9IGVsZW1lbnQuZGF0YXNldC50b2dnbGVDbGFzcyB8fCAnaXMtdG9nZ2xlZCc7XG5cdFxuXHRcdGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XG5cdFx0XHRjb25zdCBpc1RvZ2dsZWQgPSBlbGVtZW50LmNsYXNzTGlzdC5jb250YWlucyh0b2dnbGVDbGFzcyk7XG5cdFx0XHR0YXJnZXRFbGVtZW50LmNsYXNzTGlzdC50b2dnbGUodG9nZ2xlQ2xhc3MpO1xuXHRcdFx0ZWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRvZ2dsZUNsYXNzKTtcblx0XHRcdFxuXHRcdFx0ZWxlbWVudC5zZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnLCBpc1RvZ2dsZWQgPyAnZmFsc2UnIDogJ3RydWUnKTtcblx0XHRcdHRhcmdldEVsZW1lbnQuc2V0QXR0cmlidXRlKCdhcmlhLWhpZGRlbicsIGlzVG9nZ2xlZCA/ICd0cnVlJyA6ICdmYWxzZScpO1xuXHRcdFx0XG5cdFx0XHRpZiAoYm9keUNsYXNzKSB7XG5cdFx0XHRcdGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LnRvZ2dsZShib2R5Q2xhc3MpO1xuXHRcdFx0fVxuXHRcdH0sIGZhbHNlKTtcblx0fSk7XG59KCkpO1xuIl0sIm5hbWVzIjpbImVsZW1lbnRzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwibGVuZ3RoIiwiZm9yRWFjaCIsImVsZW1lbnQiLCJ0YXJnZXRFbGVtZW50IiwicXVlcnlTZWxlY3RvciIsImRhdGFzZXQiLCJ0b2dnbGUiLCJib2R5Q2xhc3MiLCJ0b2dnbGVCb2R5Q2xhc3MiLCJ0b2dnbGVDbGFzcyIsImFkZEV2ZW50TGlzdGVuZXIiLCJpc1RvZ2dsZWQiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInNldEF0dHJpYnV0ZSIsImJvZHkiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/js/components/toggle.js\n");

/***/ }),

/***/ "./src/js/components/unsupported-browsers.js":
/*!***************************************************!*\
  !*** ./src/js/components/unsupported-browsers.js ***!
  \***************************************************/
/***/ (() => {

"use strict";
eval("\n\n(function () {\n  var ua = window.navigator.userAgent;\n  var msie = ua.indexOf('MSIE ');\n  var trident = ua.indexOf('Trident/');\n  var browserAlert = document.querySelector('.unsupported-browser');\n  if (msie > 0 || trident > 0) {\n    browserAlert.setAttribute('style', 'display: block;');\n  }\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY29tcG9uZW50cy91bnN1cHBvcnRlZC1icm93c2Vycy5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFWixhQUFZO0VBRVosSUFBSUEsRUFBRSxHQUFHQyxNQUFNLENBQUNDLFNBQVMsQ0FBQ0MsU0FBUztFQUNuQyxJQUFJQyxJQUFJLEdBQUdKLEVBQUUsQ0FBQ0ssT0FBTyxDQUFDLE9BQU8sQ0FBQztFQUM5QixJQUFJQyxPQUFPLEdBQUdOLEVBQUUsQ0FBQ0ssT0FBTyxDQUFDLFVBQVUsQ0FBQztFQUNwQyxJQUFJRSxZQUFZLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLHNCQUFzQixDQUFDO0VBRWpFLElBQUlMLElBQUksR0FBRyxDQUFDLElBQUlFLE9BQU8sR0FBRyxDQUFDLEVBQUU7SUFDNUJDLFlBQVksQ0FBQ0csWUFBWSxDQUFDLE9BQU8sRUFBRSxpQkFBaUIsQ0FBQztFQUN0RDtBQUVELENBQUMsR0FBRSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9qcy9jb21wb25lbnRzL3Vuc3VwcG9ydGVkLWJyb3dzZXJzLmpzP2RkMDciXSwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG4oZnVuY3Rpb24gKCkge1xuXG5cdHZhciB1YSA9IHdpbmRvdy5uYXZpZ2F0b3IudXNlckFnZW50O1xuXHR2YXIgbXNpZSA9IHVhLmluZGV4T2YoJ01TSUUgJyk7XG5cdHZhciB0cmlkZW50ID0gdWEuaW5kZXhPZignVHJpZGVudC8nKTtcblx0dmFyIGJyb3dzZXJBbGVydCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy51bnN1cHBvcnRlZC1icm93c2VyJyk7XG5cblx0aWYgKG1zaWUgPiAwIHx8IHRyaWRlbnQgPiAwKSB7XG5cdFx0YnJvd3NlckFsZXJ0LnNldEF0dHJpYnV0ZSgnc3R5bGUnLCAnZGlzcGxheTogYmxvY2s7Jyk7XG5cdH1cblxufSgpKTtcbiJdLCJuYW1lcyI6WyJ1YSIsIndpbmRvdyIsIm5hdmlnYXRvciIsInVzZXJBZ2VudCIsIm1zaWUiLCJpbmRleE9mIiwidHJpZGVudCIsImJyb3dzZXJBbGVydCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsInNldEF0dHJpYnV0ZSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/js/components/unsupported-browsers.js\n");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/no-js */ \"./src/js/components/no-js.js\");\n/* harmony import */ var _components_no_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_no_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/unsupported-browsers */ \"./src/js/components/unsupported-browsers.js\");\n/* harmony import */ var _components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_unsupported_browsers__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/toggle */ \"./src/js/components/toggle.js\");\n/* harmony import */ var _components_toggle__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_toggle__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/accordion */ \"./src/js/components/accordion.js\");\n/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_accordion__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/menu */ \"./src/js/components/menu.js\");\n/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_components_menu__WEBPACK_IMPORTED_MODULE_4__);\n\n\n\n// import './components/cookie';\n\n\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvc2NyaXB0cy5qcy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUFhOztBQUVlO0FBQzVCO0FBQzJDO0FBQ2Q7QUFDRyIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9qcy9zY3JpcHRzLmpzP2FiOGYiXSwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnO1xuXG5pbXBvcnQgJy4vY29tcG9uZW50cy9uby1qcyc7XG4vLyBpbXBvcnQgJy4vY29tcG9uZW50cy9jb29raWUnO1xuaW1wb3J0ICcuL2NvbXBvbmVudHMvdW5zdXBwb3J0ZWQtYnJvd3NlcnMnO1xuaW1wb3J0ICcuL2NvbXBvbmVudHMvdG9nZ2xlJztcbmltcG9ydCAnLi9jb21wb25lbnRzL2FjY29yZGlvbic7XG5pbXBvcnQgJy4vY29tcG9uZW50cy9tZW51JztcbiJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/scripts.js\n");

/***/ }),

/***/ "./src/styles/styles.scss":
/*!********************************!*\
  !*** ./src/styles/styles.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc3R5bGVzL3N0eWxlcy5zY3NzLmpzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9zdHlsZXMvc3R5bGVzLnNjc3M/OTFjYSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/styles.scss\n");

/***/ }),

/***/ "./src/styles/editor-style.scss":
/*!**************************************!*\
  !*** ./src/styles/editor-style.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvc3R5bGVzL2VkaXRvci1zdHlsZS5zY3NzLmpzIiwibWFwcGluZ3MiOiI7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovL29yaWdpbi8uL3NyYy9zdHlsZXMvZWRpdG9yLXN0eWxlLnNjc3M/MjJlMyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/styles/editor-style.scss\n");

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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
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
/******/ 			"/js/scripts": 0,
/******/ 			"css/editor-style": 0,
/******/ 			"css/styles": 0
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
/******/ 		var chunkLoadingGlobal = self["webpackChunkorigin"] = self["webpackChunkorigin"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/js/scripts.js")))
/******/ 	__webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/styles/styles.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/editor-style","css/styles"], () => (__webpack_require__("./src/styles/editor-style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;