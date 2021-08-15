/******/ (function () {
  // webpackBootstrap
  /******/ 'use strict';
  /******/ var __webpack_modules__ = {
    /***/ './src/js/app.js':
      /*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */ var _modules_header__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
          /*! ./modules/header */ './src/js/modules/header.js'
        );
        /* harmony import */ var _modules_sliders__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
          /*! ./modules/sliders */ './src/js/modules/sliders.js'
        );
        /* harmony import */ var _modules_tabs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
          /*! ./modules/tabs */ './src/js/modules/tabs.js'
        );
        /* harmony import */ var _modules_hovers__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
          /*! ./modules/hovers */ './src/js/modules/hovers.js'
        );
        /* harmony import */ var _modules_what_next__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
          /*! ./modules/what-next */ './src/js/modules/what-next.js'
        );
        /* harmony import */ var _modules_scrollTag__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
          /*! ./modules/scrollTag */ './src/js/modules/scrollTag.js'
        );
        /* harmony import */ var _modules_price__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
          /*! ./modules/price */ './src/js/modules/price.js'
        );
        /* harmony import */ var _modules_contact__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
          /*! ./modules/contact */ './src/js/modules/contact.js'
        );
        /* harmony import */ var _modules_main_page_mobile__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
          /*! ./modules/main-page-mobile */ './src/js/modules/main-page-mobile.js'
        );
        /* harmony import */ var _modules_burger__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
          /*! ./modules/burger */ './src/js/modules/burger.js'
        );
        /* harmony import */ var _modules_preloader__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
          /*! ./modules/preloader */ './src/js/modules/preloader.js'
        );
        /* harmony import */ var _modules_calc_height__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
          /*! ./modules/calc-height */ './src/js/modules/calc-height.js'
        );
        /* harmony import */ var _modules_footer__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
          /*! ./modules/footer */ './src/js/modules/footer.js'
        );
        /* harmony import */ var _modules_local_page__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(
          /*! ./modules/local-page */ './src/js/modules/local-page.js'
        );

        // import mask from './modules/mask';

        window.addEventListener('DOMContentLoaded', function () {
          'use strict';

          (0, _modules_header__WEBPACK_IMPORTED_MODULE_0__.default)();
          (0, _modules_sliders__WEBPACK_IMPORTED_MODULE_1__.default)();
          (0,
          _modules_tabs__WEBPACK_IMPORTED_MODULE_2__.default)('.tab__title', '.tab__txt', '.tab__triggers', '.faq__next', '.faq__prev');
          (0,
          _modules_hovers__WEBPACK_IMPORTED_MODULE_3__.default)('.hover', '_active');
          (0,
          _modules_tabs__WEBPACK_IMPORTED_MODULE_2__.default)('.lecture__title', '.lecture__tab-content', '.lecture__tabs', '.lecture__next', '.lecture__prev');
          (0,
          _modules_tabs__WEBPACK_IMPORTED_MODULE_2__.default)('.feedback__tab', '.feedback__content', '.feedback__triggers');
          (0, _modules_what_next__WEBPACK_IMPORTED_MODULE_4__.default)();
          (0, _modules_scrollTag__WEBPACK_IMPORTED_MODULE_5__.default)();
          (0, _modules_price__WEBPACK_IMPORTED_MODULE_6__.default)();
          (0, _modules_contact__WEBPACK_IMPORTED_MODULE_7__.default)(); // mask();

          (window.innerWidth || document.documentElement.clientWidth) < 999
            ? (0,
              _modules_main_page_mobile__WEBPACK_IMPORTED_MODULE_8__.default)()
            : null;
          (window.innerWidth || document.documentElement.clientWidth) < 999
            ? (0, _modules_burger__WEBPACK_IMPORTED_MODULE_9__.default)()
            : null; // preloader();

          (0, _modules_calc_height__WEBPACK_IMPORTED_MODULE_11__.default)();
          (0, _modules_footer__WEBPACK_IMPORTED_MODULE_12__.default)();
          (0, _modules_local_page__WEBPACK_IMPORTED_MODULE_13__.default)();
        });

        /***/
      },

    /***/ './src/js/modules/burger.js':
      /*!**********************************!*\
  !*** ./src/js/modules/burger.js ***!
  \**********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var burger = function burger() {
          var burgerBox = document.querySelector('.header__burger'),
            menu = document.querySelector('.nav');
          if (!burgerBox) return;
          burgerBox.addEventListener('click', function () {
            burgerBox.classList.toggle('_active');
            menu.classList.toggle('_active');

            if (menu.classList.contains('_active')) {
              document.body.style.overflow = 'hidden';
            } else {
              document.body.style.overflow = 'auto';
            }
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = burger;

        /***/
      },

    /***/ './src/js/modules/calc-height.js':
      /*!***************************************!*\
  !*** ./src/js/modules/calc-height.js ***!
  \***************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var calcHeight = function calcHeight() {
          var vh = window.innerHeight * 0.01; // Then we set the value in the --vh custom property to the root of the document

          document.documentElement.style.setProperty(
            '--vh',
            ''.concat(vh, 'px')
          );
        };

        /* harmony default export */ __webpack_exports__[
          'default'
        ] = calcHeight;

        /***/
      },

    /***/ './src/js/modules/contact.js':
      /*!***********************************!*\
  !*** ./src/js/modules/contact.js ***!
  \***********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var contactPage = function contactPage() {
          var openButton = document.querySelector('.contact__open'),
            closeButton = document.querySelector('.contact__form-cancel'),
            formBox = document.querySelector('.contact__form'),
            form = document.querySelector('.wpcf7-form'),
            inputPhone = document.getElementById('telphone'),
            inputName = document.getElementById('name'),
            inputEmail = document.getElementById('email'),
            inputMessage = document.getElementById('textarea'),
            button = document.getElementById('submit'),
            captcha = document.querySelector('.cf7sr-g-recaptcha');
          if (!openButton) return;
          button.disabled = true;

          var isCaptchaChecked = function isCaptchaChecked() {
            return grecaptcha && grecaptcha.getResponse().length !== 0;
          };

          var inputValid = function inputValid(elem, len) {
            elem.addEventListener('input', function () {
              if (elem.value.length >= len) {
                elem.style.borderColor = '#009f88';
              } else {
                elem.style.borderColor = '#9f0000';
              }

              if (
                inputName.value.length >= 2 &&
                inputPhone.value.length >= 9 &&
                inputEmail.value.length >= 6 &&
                inputMessage.value.length >= 1
              ) {
                captcha.classList.add('_active');
                button.disabled = false;
              } else {
                captcha.classList.remove('_active');
                button.disabled = true;
              }
            });
          };

          inputValid(inputName, 2);
          inputValid(inputPhone, 9);
          inputValid(inputEmail, 6);
          inputValid(inputMessage, 1);
          openButton.addEventListener('click', function () {
            formBox.classList.add('show');
          });
          closeButton.addEventListener('click', function () {
            formBox.classList.remove('show');
          });
        };

        /* harmony default export */ __webpack_exports__[
          'default'
        ] = contactPage;

        /***/
      },

    /***/ './src/js/modules/footer.js':
      /*!**********************************!*\
  !*** ./src/js/modules/footer.js ***!
  \**********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var footer = function footer() {
          var lecture = document.querySelector('.hover-footer'),
            subMenu = lecture.querySelector('.sub-menu');
          if (!lecture) return;

          if (
            (window.innerWidth || document.documentElement.clientWidth) < 1024
          ) {
            lecture.childNodes[0].addEventListener('click', function (e) {
              e.preventDefault();
              console.log(lecture.childNodes[1]);
              lecture.classList.toggle('_active');

              if (!subMenu.classList.contains('show')) {
                console.log(subMenu);
                subMenu.classList.add('show');
                subMenu.style.height = 'auto';
                var height = subMenu.clientHeight + 'px';
                subMenu.style.height = '0px';
                setTimeout(function () {
                  subMenu.style.height = height;
                }, 0);
              } else {
                subMenu.style.height = '0px';
                subMenu.addEventListener(
                  'transitionend',
                  function () {
                    subMenu.classList.remove('show');
                  },
                  {
                    once: true,
                  }
                );
              }
            });
          } else {
            lecture.addEventListener('mouseenter', function () {
              lecture.querySelector('.sub-menu').classList.add('_active');
            });
            lecture.addEventListener('mouseleave', function () {
              lecture.querySelector('.sub-menu').classList.remove('_active');
            });
          }
        };

        /* harmony default export */ __webpack_exports__['default'] = footer;

        /***/
      },

    /***/ './src/js/modules/header.js':
      /*!**********************************!*\
  !*** ./src/js/modules/header.js ***!
  \**********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var headerShow = function headerShow() {
          var boxWhite = document.querySelector('.track'),
            hoverLi = document.querySelector('.hover-menu'),
            subMenu = hoverLi.querySelector('.sub-menu'),
            menu = document.querySelector('.nav-menu');
          document.querySelector('#masthead').classList.add('loaded');
          var i = document.querySelector('#masthead'),
            r = window.pageYOffset;
          window.addEventListener('scroll', function () {
            if (boxWhite.getBoundingClientRect().top <= 0) {
              i.classList.add('bg');
            } else {
              i.classList.remove('bg');
            } // if ((window.innerWidth || document.documentElement.clientWidth) > 1024) {

            var e = window.pageYOffset;
            0 <= e &&
              (e <= r
                ? i.classList.remove('hidden')
                : i.classList.add('hidden'),
              (r = e)); // }
          });

          if (
            (window.innerWidth || document.documentElement.clientWidth) > 999
          ) {
            hoverLi.addEventListener('mouseenter', function () {
              hoverLi.querySelector('.sub-menu').classList.add('show');
            });
            hoverLi.addEventListener('mouseleave', function () {
              hoverLi.querySelector('.sub-menu').classList.remove('show');
            });
          } else {
            hoverLi.childNodes[0].addEventListener('click', function (e) {
              e.preventDefault();
              console.log(hoverLi.childNodes[1]);
              hoverLi.classList.toggle('_active');

              if (!subMenu.classList.contains('show')) {
                console.log(subMenu);
                subMenu.classList.add('show');
                subMenu.style.height = 'auto';
                var height = subMenu.clientHeight + 'px';
                subMenu.style.height = '0px';
                setTimeout(function () {
                  subMenu.style.height = height;
                }, 0);
              } else {
                subMenu.style.height = '0px';
                subMenu.addEventListener(
                  'transitionend',
                  function () {
                    subMenu.classList.remove('show');
                  },
                  {
                    once: true,
                  }
                );
              }
            });
          }

          if (window.location.pathname === '/lekcje-tenisa/') {
            menu.childNodes[1].nextElementSibling.childNodes[0].classList.add(
              'current_page_item'
            );
          }

          if (/dla-doroslych/.test(window.location.pathname)) {
            console.log('object');
            menu.childNodes[1].nextElementSibling.childNodes[0].classList.add(
              'current_page_item'
            );
          }

          if (/dla-mlodziezy/.test(window.location.pathname)) {
            console.log('object');
            menu.childNodes[1].nextElementSibling.childNodes[0].classList.add(
              'current_page_item'
            );
          }

          if (window.location.pathname === '/dla-dzieci/') {
            console.log('object');
            menu.childNodes[1].nextElementSibling.childNodes[0].classList.add(
              'current_page_item'
            );
          }

          if (/blog/.test(window.location.pathname)) {
            subMenu.style.background = '#fff';
          }

          if (/lokalizacje/.test(window.location.pathname)) {
            subMenu.style.background = '#fff';
          }

          if (document.body.classList.contains('single-post')) {
            menu.childNodes[4].nextElementSibling.childNodes[0].classList.add(
              'current_page_item'
            );
          }
        };

        /* harmony default export */ __webpack_exports__[
          'default'
        ] = headerShow;

        /***/
      },

    /***/ './src/js/modules/hovers.js':
      /*!**********************************!*\
  !*** ./src/js/modules/hovers.js ***!
  \**********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var hovers = function hovers(hoverTrigger, activeClass) {
          var hoverElements = document.querySelectorAll(hoverTrigger);
          hoverElements.forEach(function (hoverElement) {
            hoverElement.addEventListener('mouseenter', function () {
              hoverElement.parentNode.classList.add(activeClass);
            });
          });
          hoverElements.forEach(function (hoverElement) {
            hoverElement.addEventListener('mouseleave', function () {
              hoverElement.parentNode.classList.remove(activeClass);
            });
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = hovers;

        /***/
      },

    /***/ './src/js/modules/local-page.js':
      /*!**************************************!*\
  !*** ./src/js/modules/local-page.js ***!
  \**************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var localPost = function localPost() {
          var headerItem = document.querySelectorAll('.txt_location-city');
          var currentPageName = window.location.pathname.replace(
            '/lokalizacje/',
            ''
          );
          headerItem.forEach(function (item) {
            var dataAttr = item.getAttribute('data-link');
            var remove = dataAttr.replace(
              /https:\/\/gotennis\.xyz\/lokalizacje\//,
              ''
            );

            if (remove == currentPageName) {
              item.classList.add('_active');
            }
          });
          console.log(currentPageName);
        };

        /* harmony default export */ __webpack_exports__['default'] = localPost;

        /***/
      },

    /***/ './src/js/modules/main-page-mobile.js':
      /*!********************************************!*\
  !*** ./src/js/modules/main-page-mobile.js ***!
  \********************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var mobileMain = function mobileMain() {
          var infoLectures = document.querySelectorAll('.mobile-info'),
            closeLectures = document.querySelectorAll('.mobile-close-info');
          if (!infoLectures) return;
          infoLectures.forEach(function (infoLecture) {
            infoLecture.addEventListener('click', function () {
              infoLecture.parentNode.previousElementSibling.classList.add(
                '_active'
              );
            });
          });
          closeLectures.forEach(function (closeLecture) {
            closeLecture.addEventListener('click', function () {
              closeLecture.parentNode.classList.remove('_active');
            });
          });
        };

        /* harmony default export */ __webpack_exports__[
          'default'
        ] = mobileMain;

        /***/
      },

    /***/ './src/js/modules/preloader.js':
      /*!*************************************!*\
  !*** ./src/js/modules/preloader.js ***!
  \*************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var preloader = function preloader() {
          var preloaderBox = document.querySelector('.preloader');
          setTimeout(function () {
            preloaderBox.classList.add('hide');
          }, 1000);
        };

        /* harmony default export */ __webpack_exports__['default'] = preloader;

        /***/
      },

    /***/ './src/js/modules/price.js':
      /*!*********************************!*\
  !*** ./src/js/modules/price.js ***!
  \*********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var price = function price() {
          var infoIcons = document.querySelectorAll('.price-card__info'),
            closeButtons = document.querySelectorAll('.price__info-close');
          if (!infoIcons) return;
          infoIcons.forEach(function (item) {
            item.addEventListener('click', function () {
              item.parentNode
                .querySelector('.price__info')
                .classList.add('_active');
            });
          });
          closeButtons.forEach(function (item) {
            item.addEventListener('click', function () {
              item.parentNode.parentNode
                .querySelector('.price__info')
                .classList.remove('_active');
            });
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = price;

        /***/
      },

    /***/ './src/js/modules/scrollTag.js':
      /*!*************************************!*\
  !*** ./src/js/modules/scrollTag.js ***!
  \*************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var scrollTag = function scrollTag() {
          var links = document.querySelectorAll('[href^="#tab"]'),
            speed = 0.4;
          links.forEach(function (link) {
            link.addEventListener('click', function (e) {
              e.preventDefault();
              var self = e.currentTarget;
              var widthTop = document.documentElement.scrollTop,
                hash = self.hash,
                toBlock = document.querySelector(hash).getBoundingClientRect()
                  .top,
                start = null;
              requestAnimationFrame(step);

              function step(time) {
                if (start === null) {
                  start = time;
                }

                var progress = time - start,
                  r =
                    toBlock < 0
                      ? Math.max(
                          widthTop - progress / speed,
                          widthTop + toBlock
                        )
                      : Math.min(
                          widthTop + progress / speed,
                          widthTop + toBlock
                        );
                document.documentElement.scrollTo(0, r);

                if (r != widthTop + toBlock) {
                  requestAnimationFrame(step);
                } else {
                  history.pushState(
                    '',
                    document.title,
                    window.location.pathname
                  );
                }
              }
            });
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = scrollTag;

        /***/
      },

    /***/ './src/js/modules/sliders.js':
      /*!***********************************!*\
  !*** ./src/js/modules/sliders.js ***!
  \***********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var sliders = function sliders() {
          var swiper = new Swiper('.main-screen .swiper-container', {
            slidesPerView: 1,
            loop: true,
            pagination: {
              el: '.main-screen .swiper-pagination',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.main-screen .swiper-button-next',
              prevEl: '.main-screen .swiper-button-prev',
            },
          });
          var swiper2 = new Swiper('.feedback__slider .swiper-container', {
            slidesPerView: 1,
            loop: true,
            pagination: {
              el: '.feedback__slider .swiper-pagination',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.feedback__slider .swiper-button-next',
              prevEl: '.feedback__slider .swiper-button-prev',
            },
          });
          var swiper3 = new Swiper('.partners__slider .swiper-container', {
            loop: true,
            slidesPerView: 5,
            autoplay: {
              delay: 5000,
            },
            speed: 800,
          });
          var swiper4 = new Swiper('.price__prices .swiper-container', {
            breakpoints: {
              // when window width is >= 320px
              320: {
                slidesPerView: 1.1,
                spaceBetween: 0,
                centeredSlides: true,
              },
              // when window width is >= 640px
              999: {
                slidesPerView: 3,
                centeredSlides: false,
                spaceBetween: 20,
              },
            },
            navigation: {
              nextEl: '.price__prices .swiper-button-next',
              prevEl: '.price__prices .swiper-button-prev',
            },
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = sliders;

        /***/
      },

    /***/ './src/js/modules/tabs.js':
      /*!********************************!*\
  !*** ./src/js/modules/tabs.js ***!
  \********************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var tabs = function tabs(
          tabsClick,
          tabsContentTrigger,
          tabClickParent,
          tabNextElement,
          tabPrevElement
        ) {
          var tabsTrigger = document.querySelectorAll(tabsClick),
            tabsContent = document.querySelectorAll(tabsContentTrigger),
            tabParent = document.querySelector(tabClickParent),
            tabNext = document.querySelector(tabNextElement),
            tabPrev = document.querySelector(tabPrevElement);
          var indexPrev = 0,
            indexNext = 0;
          if (!tabParent) return;

          function hideTabContent() {
            tabsContent.forEach(function (tabContent) {
              if (tabContent.classList.contains('lecture__tab-content')) {
                tabContent.classList.add('hide');
                document
                  .querySelectorAll('.lecture__tab-txt')
                  .forEach(function (item) {
                    return (item.style.display = 'none');
                  });
                setTimeout(function () {
                  tabContent.style.display = 'none';
                }, 800);
              } else {
                tabContent.style.display = 'none';
              }
            });
            tabsTrigger.forEach(function (tab) {
              tab.classList.remove('_active');
            });
          }

          function showTabContent() {
            var i =
              arguments.length > 0 && arguments[0] !== undefined
                ? arguments[0]
                : 0;

            if (tabsContent[i].classList.contains('lecture__tab-content')) {
              document.querySelectorAll('.lecture__tab-txt')[i].style.display =
                'block';
              setTimeout(function () {
                tabsContent[i].style.display = 'block';
                tabsContent[i].classList.remove('hide');
              }, 800);
            }

            if (tabsContent[i].classList.contains('feedback__content')) {
              tabsContent[i].style.display = 'flex';
            }

            tabsContent[i].style.display = 'block';
            tabsTrigger[i].classList.add('_active');
          }

          hideTabContent();
          showTabContent();
          tabParent.addEventListener('click', function (e) {
            var target = e.target;

            if (target && target.closest(tabsClick)) {
              tabsTrigger.forEach(function (tab, i) {
                if (target.closest(tabsClick) == tab) {
                  hideTabContent();
                  showTabContent(i);
                }
              });
            }
          });

          if (tabNext) {
            tabNext.addEventListener('click', function () {
              tabsTrigger.forEach(function (tab, i) {
                if (tab.classList.contains('_active')) {
                  indexNext = i;
                }
              });
              console.log(indexNext == 0 ? tabsTrigger.length : indexNext - 1);
              hideTabContent();
              showTabContent(
                indexNext == 0 ? tabsTrigger.length - 1 : indexNext - 1
              );
            });
          }

          if (tabPrev) {
            tabPrev.addEventListener('click', function () {
              tabsTrigger.forEach(function (tab, i) {
                if (tab.classList.contains('_active')) {
                  indexPrev = i + 1;
                }
              });
              hideTabContent();
              showTabContent(indexPrev == tabsTrigger.length ? 0 : indexPrev);
            });
          }
        };

        /* harmony default export */ __webpack_exports__['default'] = tabs;

        /***/
      },

    /***/ './src/js/modules/what-next.js':
      /*!*************************************!*\
  !*** ./src/js/modules/what-next.js ***!
  \*************************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        var whatNext = function whatNext() {
          var cards = document.querySelectorAll('.card_click'),
            modals = document.querySelectorAll('.whats-tenis__modal');
          if (!cards) return;
          cards.forEach(function (card) {
            card.addEventListener('click', function (e) {
              e.preventDefault();
              cards.forEach(function (item) {
                item.classList.remove('_active');
              });
              card.classList.add('_active');

              if (e.target.closest('.card__modal')) {
                card.classList.remove('_active');
              }
            });
          });
        };

        /* harmony default export */ __webpack_exports__['default'] = whatNext;

        /***/
      },

    /***/ './src/scss/app.scss':
      /*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
      /***/ function (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) {
        __webpack_require__.r(__webpack_exports__);
        // extracted by mini-css-extract-plugin

        /***/
      },

    /******/
  }; // The module cache
  /************************************************************************/
  /******/ /******/ var __webpack_module_cache__ = {}; // The require function
  /******/
  /******/ /******/ function __webpack_require__(moduleId) {
    /******/ // Check if module is in cache
    /******/ var cachedModule = __webpack_module_cache__[moduleId];
    /******/ if (cachedModule !== undefined) {
      /******/ return cachedModule.exports;
      /******/
    } // Create a new module (and put it into the cache)
    /******/ /******/ var module = (__webpack_module_cache__[moduleId] = {
      /******/ // no module.id needed
      /******/ // no module.loaded needed
      /******/ exports: {},
      /******/
    }); // Execute the module function
    /******/
    /******/ /******/ __webpack_modules__[moduleId](
      module,
      module.exports,
      __webpack_require__
    ); // Return the exports of the module
    /******/
    /******/ /******/ return module.exports;
    /******/
  } // expose the modules object (__webpack_modules__)
  /******/
  /******/ /******/ __webpack_require__.m = __webpack_modules__; /* webpack/runtime/chunk loaded */
  /******/
  /************************************************************************/
  /******/ /******/ !(function () {
    /******/ var deferred = [];
    /******/ __webpack_require__.O = function (result, chunkIds, fn, priority) {
      /******/ if (chunkIds) {
        /******/ priority = priority || 0;
        /******/ for (
          var i = deferred.length;
          i > 0 && deferred[i - 1][2] > priority;
          i--
        )
          deferred[i] = deferred[i - 1];
        /******/ deferred[i] = [chunkIds, fn, priority];
        /******/ return;
        /******/
      }
      /******/ var notFulfilled = Infinity;
      /******/ for (var i = 0; i < deferred.length; i++) {
        /******/ var chunkIds = deferred[i][0];
        /******/ var fn = deferred[i][1];
        /******/ var priority = deferred[i][2];
        /******/ var fulfilled = true;
        /******/ for (var j = 0; j < chunkIds.length; j++) {
          /******/ if (
            (priority & (1 === 0) || notFulfilled >= priority) &&
            Object.keys(__webpack_require__.O).every(function (key) {
              return __webpack_require__.O[key](chunkIds[j]);
            })
          ) {
            /******/ chunkIds.splice(j--, 1);
            /******/
          } else {
            /******/ fulfilled = false;
            /******/ if (priority < notFulfilled) notFulfilled = priority;
            /******/
          }
          /******/
        }
        /******/ if (fulfilled) {
          /******/ deferred.splice(i--, 1);
          /******/ result = fn();
          /******/
        }
        /******/
      }
      /******/ return result;
      /******/
    };
    /******/
  })(); /* webpack/runtime/hasOwnProperty shorthand */
  /******/
  /******/ /******/ !(function () {
    /******/ __webpack_require__.o = function (obj, prop) {
      return Object.prototype.hasOwnProperty.call(obj, prop);
    };
    /******/
  })(); /* webpack/runtime/make namespace object */
  /******/
  /******/ /******/ !(function () {
    /******/ // define __esModule on exports
    /******/ __webpack_require__.r = function (exports) {
      /******/ if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
        /******/ Object.defineProperty(exports, Symbol.toStringTag, {
          value: 'Module',
        });
        /******/
      }
      /******/ Object.defineProperty(exports, '__esModule', { value: true });
      /******/
    };
    /******/
  })(); /* webpack/runtime/jsonp chunk loading */
  /******/
  /******/ /******/ !(function () {
    /******/ // no baseURI
    /******/
    /******/ // object to store loaded and loading chunks
    /******/ // undefined = chunk not loaded, null = chunk preloaded/prefetched
    /******/ // [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
    /******/ var installedChunks = {
      /******/ '/js/app': 0,
      /******/ 'css/base': 0,
      /******/
    }; // no chunk on demand loading // no prefetching // no preloaded // no HMR // no HMR manifest
    /******/
    /******/ /******/
    /******/ /******/
    /******/ /******/
    /******/ /******/
    /******/ /******/
    /******/ __webpack_require__.O.j = function (chunkId) {
      return installedChunks[chunkId] === 0;
    }; // install a JSONP callback for chunk loading
    /******/
    /******/ /******/ var webpackJsonpCallback = function (
      parentChunkLoadingFunction,
      data
    ) {
      /******/ var chunkIds = data[0];
      /******/ var moreModules = data[1];
      /******/ var runtime = data[2]; // add "moreModules" to the modules object, // then flag all "chunkIds" as loaded and fire callback
      /******/ /******/ /******/ var moduleId,
        chunkId,
        i = 0;
      /******/ for (moduleId in moreModules) {
        /******/ if (__webpack_require__.o(moreModules, moduleId)) {
          /******/ __webpack_require__.m[moduleId] = moreModules[moduleId];
          /******/
        }
        /******/
      }
      /******/ if (runtime) runtime(__webpack_require__);
      /******/ if (parentChunkLoadingFunction) parentChunkLoadingFunction(data);
      /******/ for (; i < chunkIds.length; i++) {
        /******/ chunkId = chunkIds[i];
        /******/ if (
          __webpack_require__.o(installedChunks, chunkId) &&
          installedChunks[chunkId]
        ) {
          /******/ installedChunks[chunkId][0]();
          /******/
        }
        /******/ installedChunks[chunkIds[i]] = 0;
        /******/
      }
      /******/ __webpack_require__.O();
      /******/
    };
    /******/
    /******/ var chunkLoadingGlobal = (self['webpackChunk'] =
      self['webpackChunk'] || []);
    /******/ chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
    /******/ chunkLoadingGlobal.push = webpackJsonpCallback.bind(
      null,
      chunkLoadingGlobal.push.bind(chunkLoadingGlobal)
    );
    /******/
  })(); // startup // Load entry module and return exports // This entry module depends on other loaded chunks and execution need to be delayed
  /******/
  /************************************************************************/
  /******/
  /******/ /******/ /******/ /******/ __webpack_require__.O(
    undefined,
    ['css/base'],
    function () {
      return __webpack_require__('./src/js/app.js');
    }
  );
  /******/ var __webpack_exports__ = __webpack_require__.O(
    undefined,
    ['css/base'],
    function () {
      return __webpack_require__('./src/scss/app.scss');
    }
  );
  /******/ __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
  /******/
  /******/
})();
