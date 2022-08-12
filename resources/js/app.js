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
      //$(".popup__load").addClass('active');
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
            //$(".popup").addClass("send");
            bookingForm.reset();
            //$(".popup__load").removeClass('active');
         },
         error: function (err) {
            //$(".popup__load").removeClass('active');
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
   const copyBtns = document.querySelectorAll('.copy-text');
   const btnText = copyBtns[1].innerHTML;
   copyBtns.forEach(btn => {
      btn.addEventListener('click', function (e) {
         navigator.clipboard.writeText(text);
         copyBtns[1].innerHTML = "ТЕКСТ СКОПИРОВАН";
         copyBtns[0].classList.add('copied');
         copyBtns[1].classList.add('copied');
         setTimeout(() => {
            copyBtns[1].innerHTML = btnText;
            copyBtns[0].classList.remove('copied');
            copyBtns[1].classList.remove('copied');
         }, 15000);
      });
   });

}
