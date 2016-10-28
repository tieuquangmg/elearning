<?php 
   Route::group(['middleware'=>['web', 'auth'], 'prefix'=>'backend'], function() {

        Route::controller('subject', 'SubjectController', [
            'getData' => 'subject.data',
            'getAdd' => 'subject.add',
            'postCreate' => 'subject.create',
            'getEdit' => 'subject.edit',
            'postUpdate' => 'subject.update',
            'getDelete' => 'subject.delete',
            'getFind' => 'subject.find',
            'getUnit' => 'subject.unit',
            'getAddUnit' => 'subject.unit.add',
            'getSync' => 'subject.sync',
            'postSync' => 'subject.sync'
        ]);

       Route::controller('unit', 'UnitController', [
            'getAdd' => 'unit.add',
            'postCreate' => 'unit.create',
            'getEdit' => 'unit.edit',
            'postUpdate' => 'unit.update',
            'getDelete' => 'unit.delete',
            'getCompose' => 'unit.compose',
        ]);
       Route::controller('theory', 'TheoryController', [
           'getAdd' => 'theory.add',
           'postCreate' => 'theory.create',
           'getEdit' => 'theory.edit',
           'postUpdate' => 'theory.update',
           'getDelete' => 'theory.delete',
           'getFind' => 'theory.find',
       ]);
       Route::controller('document', 'DocumentController', [
//           'getAdd' => 'theory.add',
           'postCreate' => 'document.create',
//           'getEdit' => 'theory.edit',
           'postUpdate' => 'document.update',
           'getDelete' => 'document.delete',
           'getFind' => 'document.find',
       ]);
       Route::controller('question', 'QuestionController', [
           'getAdd' => 'question.add',
           'postCreate' => 'question.create',
           'getEdit' => 'question.edit',
           'postUpdate' => 'question.update',
           'getDelete' => 'question.delete',
           'getFind' => 'question.find',
       ]);
       Route::controller('test','TestController',[
            'getData' => 'test.data',
            'getEdit' => 'test.edit',
            'postUpdate' => 'test.update',
            'getDelete' => 'test.delete',
            'getAdd' => 'test.add',
            'postCreate' => 'test.create'
       ]);
       Route::controller('meeting','MeetingController',[
           'getData' => 'meeting.data',
           'getEdit' => 'meeting.edit',
           'postUpdate' => 'meeting.update',
           'getDelete' => 'meeting.delete',
           'getAdd' => 'meeting.add',
           'postCreate' => 'meeting.create'
       ]);
   });