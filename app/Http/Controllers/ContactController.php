<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuestionRequest;

class ContactController extends Controller
{
   
      public function feedBackForm (ContactRequest $req){

         /*ДАННЫЕ ИЗ ФОРМЫ*/
         $name = $req->input('name');
         $phone = $req->input('phone');
         $service = $req->input('service');
         $text = $req->input('text');
         $page = $req->input('page');

         mail::send(['html' => 'mail'], ['name' => $name, 'service' => $service, 'text' => $text, 'phone' => $phone, 'page' => $page, ], function($message){
            $message->to('inteli.gente.ua@gmail.com')->subject('ЗАЯВКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
            });
   }

   public function questionForm (QuestionRequest $req){

      /*ДАННЫЕ ИЗ ФОРМЫ*/
      $name = $req->input('name');
      $phone = $req->input('phone');
      $text = $req->input('text');

      mail::send(['html' => 'mail_question'], ['name' => $name, 'text' => $text, 'phone' => $phone,], function($message){
         $message->to('inteli.gente.ua@gmail.com')->subject('ВОПРОС ИЗ СТРАНИЦЫ КОНТАКТЫ');
         });
   }
}