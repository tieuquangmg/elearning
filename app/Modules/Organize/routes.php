<?php
Route::group(['middleware'=>['web', 'auth']], function() {
       Route::controller('class', 'ClassesController', [
           'getData' => 'class.data',
           'getAdd' => 'class.add',
           'postCreate' => 'class.create',
           'getEdit' => 'class.edit',
           'postUpdate' => 'class.update',
           'getDelete' => 'class.delete',
           'getFind' => 'class.find',
           'getDetail' => 'class.detail',
           'getEnroll' =>'class.enroll',
           'getTest' => 'class.test',
           'getFilter' =>'class.filter',
           'getUnEnroll' =>'class.unenroll'
       ]);
   });