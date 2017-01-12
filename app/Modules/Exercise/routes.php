<?php
Route::group(['middleware'=>['web', 'nguoidung']], function(){
//    Route::controller('question', 'QuestionController', [
//        'getAdd' => 'ex.question.add',
//        'postCreate' => 'ex.question.create',
//        'getDelete' => 'ex.question.delete'
//    ]);
    Route::controller('reply', 'ReplyController', [      
        'getType' =>'ex.reply.type',
    ]);
});
