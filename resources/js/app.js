//require('./bootstrap');
import { popUp } from './modules/popup.js';

window.onload = function () {



   //ВРЕМЕННО ОТКЛЮЧАЕМ ССЫЛКИ
   const links = document.querySelectorAll('[href="#"]')
   links.forEach(link => {
      if (!link.classList.contains('link-on-popup')) {
         link.addEventListener('click', function (e) { e.preventDefault() });
      }
   })

   document.addEventListener('click', documentActions);

   function documentActions(e) {
      const target = e.target;

      //remove burger
      if (!target.closest('.burger') && !target.closest('.icon-menu')) {
         menuBtn.classList.remove('open');
         burger.classList.remove('open');
      }

      //remove language select
      if (!target.closest('.language-btn')) {
         languageBtn.classList.remove('active');
      }
      //popUp
      if (target.closest('.link-on-popup')) {
         popUp(target.closest('.link-on-popup').dataset.popupId);
         e.preventDefault();
      }
      if (target.classList.contains('confirm-button-close')) {
         target.closest('.popup').classList.remove('open');
         target.closest('.popup').classList.remove('send');
      }
   }

   //Menu burger
   const menuBtn = document.querySelector('.icon-menu');
   const burger = document.querySelector('.burger');
   menuBtn.addEventListener('click', function () {
      menuBtn.classList.toggle('open');
      burger.classList.toggle('open');
   });

   //Переключение языков (комп и мобилка)
   const languageBtn = document.querySelector('.language-btn');
   languageBtn.addEventListener('click', function (e) {
      if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
         if (!languageBtn.classList.contains('active')) {
            e.preventDefault()
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
   });

   //Стилизация Select
   const bookingForm = document.querySelector('#bookingform');
   const questionForm = document.querySelector('#questionForm');
   const helpForm = document.querySelector('#helpform');
   const mainForm = document.querySelector('#mainform');
   let placeholderText = 'Вид помощи';
   if (bookingForm.classList.contains('es')) {
      placeholderText = 'Elige el servicio';
   }
   $('.select-form').select2({
      placeholder: placeholderText,
      minimumResultsForSearch: -1,
   });

   // Отпарвка данных из формы
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
         success: function () {
            $(".name-error").html('');
            $(".phone-error").html('');
            $(".service-error").html('');
            $(".popup").addClass("send");
            bookingForm.reset();
            $(".select-form").select2("destroy");
            $('.select-form').select2({
               placeholder: 'Выберету услугу',
               minimumResultsForSearch: -1,
            });
            $(".popup__load").removeClass('active');
         },
         error: function (err) {
            $(".popup__load").removeClass('active');
            if (bookingForm.classList.contains('es')) {
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Campo "Nombre" no puede contener los números');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               } if (err?.responseJSON?.errors?.service) {
                  let text = err.responseJSON.errors.service[0]
                  if (text == 'Пожалуйста выберете тип услуги из списка') {
                     $(".service-error").html('Por favor, elige el servicio');
                  }
               } else {
                  $(".service-error").html('');
               }
            } else {
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
               if (err?.responseJSON?.errors?.service) {
                  $(".service-error").html(err.responseJSON.errors.service[0]);
               } else {
                  $(".service-error").html('');
               }
            }
         }
      });
   });

   $("#questionForm").submit(function (event) {
      event.preventDefault();
      $.ajax({
         type: 'POST',
         url: 'https://asociacion-inteligente.com.ua/feedback-question',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".name-error").html('');
            $(".phone-error").html('');
            $("#lead").addClass("open");
            $("#lead").addClass("send");
            popUp('lead');
            questionForm.reset();
         },
         error: function (err) {
            if (questionForm.classList.contains('es')) {
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Campo "Nombre" no puede contener los números');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               }
            } else {
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
            }
         }
      });
   });

   $("#helpform").submit(function (event) {
      event.preventDefault();
      $.ajax({
         type: 'POST',
         url: 'https://asociacion-inteligente.com.ua/feedback-help',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".name-error").html('');
            $(".contact-error").html('');
            $("#lead").addClass("open");
            $("#lead").addClass("send");
            popUp('lead');
            helpForm.reset();
         },
         error: function (err) {
            if (helpForm.classList.contains('es')) {
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.contact) {
                  let text = err.responseJSON.errors.contact[0]
                  if (text == 'Не заполнено поле "Контакты"') {
                     $(".contact-error").html('El campo no esta rellenado Contactos');
                  } 
               } else {
                  $(".contact-error").html('');
               }
            } else {
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.contact) {
                  $(".contact-error").html(err.responseJSON.errors.contact[0]);
               } else {
                  $(".contact-error").html('');;
               }
            }
         }
      });
   });

   $("#mainform").submit(function (event) {
      event.preventDefault();
      $(".popup__load").addClass('active');
      $.ajax({
         type: 'POST',
         url: 'https://asociacion-inteligente.com.ua/feedback-main',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".name-error").html('');
            $(".phone-error").html('');
            $(".popup").addClass("send");
            mainForm.reset();
            $(".popup__load").removeClass('active');
         },
         error: function (err) {
            $(".popup__load").removeClass('active');
            if (mainForm.classList.contains('es')) {
               if (err?.responseJSON?.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Campo "Nombre" no puede contener los números');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               }
            } else {
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
            }
         }
      });
   });

   //Copy text to bufer
   const text = document.querySelector('.copy-text').innerHTML;
   const copyBtnLang = document.querySelector('.popup__copy-btn');
   const copyBtns = document.querySelectorAll('.copy-text');
   const btnText = copyBtns[1].innerHTML;
   copyBtns.forEach(btn => {
      btn.addEventListener('click', function (e) {
         navigator.clipboard.writeText(text);
         console.log(copyBtnLang);
         copyBtnLang.classList.contains('ru') ? copyBtns[1].innerHTML = "ТЕКСТ СКОПИРОВАН" : copyBtns[1].innerHTML = "Copiar el texto";
         copyBtns[0].classList.add('copied');
         copyBtns[1].classList.add('copied');
         setTimeout(() => {
            copyBtns[1].innerHTML = btnText;
            copyBtns[0].classList.remove('copied');
            copyBtns[1].classList.remove('copied');
         }, 15000);
      });
   });

   //Select way pay
   const paymentMethods = document.querySelectorAll('._payment-method');
   if (paymentMethods) {
      const paymentMethodsBtnLink = document.querySelector('.item-concert-description__link a');
      const paypalSubmitForm = document.querySelector('.paypal-btn');
      paymentMethods.forEach((payMethod) => {
         if (payMethod.querySelector('input').hasAttribute('checked')) {
            payMethod.classList.add('active');
         };
         payMethod.addEventListener('click', function () {

            if (payMethod.dataset.pay == "stripe") {
               paymentMethodsBtnLink.href = payMethod.dataset.link;
               paypalSubmitForm.classList.remove('active');
            } else if (payMethod.dataset.pay == "paypal") {
               paypalSubmitForm.classList.add('active');
            }

            paymentMethods.forEach(item => {
               item.classList.remove('active')
               if (item.querySelector('input').hasAttribute('checked')) item.querySelector('input').removeAttribute('checked');
            });
            payMethod.classList.add('active');
            payMethod.querySelector('input').setAttribute('checked', 'checked');
         });
      })
   }

   const achievmentsGallery = document.querySelector('.about-us-achievments__gallery');

   if (achievmentsGallery) {
      lightGallery(achievmentsGallery), {
         licenseKey: 'your_license_key',
         speed: 500,
      }
   }

}
