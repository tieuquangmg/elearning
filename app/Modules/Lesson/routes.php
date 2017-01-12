<?php
Route::group(['middleware'=>['web', 'nguoidung']], function() {
    Route::controller('vocabulary', 'VocabularyController', [
        'getData' => 'lesson.vocabulary.data',
        'postCreate' => 'lesson.vocabulary.create',
        'postUpdate' => 'lesson.vocabulary.update',
        'getFind' => 'lesson.vocabulary.find',
        'getDelete' => 'lesson.vocabulary.del',
        'getDeleteAll' => 'lesson.vocabulary.del_all',
    ]);
    Route::controller('grammar', 'GrammarController', [
        'getData' => 'lesson.grammar.data',
    ]);
    Route::controller('texts', 'TextsController', [
        'getData' => 'lesson.texts.data',
        'getGist' => 'lesson.texts.g-gist',
        'postSaveGist' => 'lesson.texts.gist',
        'getTexts' => 'lesson.texts.g-texts',
        'postSaveTexts' => 'lesson.texts.texts',
        'getTest' => 'lesson.texts.g-test'
    ]);
    Route::controller('dialogue', 'DialogueController', [
        'getData' => 'lesson.dialogue.data',
    ]);
    Route::controller('dialogue', 'SummaryController', [
        'getData' => 'lesson.summary.data',
    ]);
});

