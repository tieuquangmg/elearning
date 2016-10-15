<?php
Route::group(['middleware'=>['web', 'auth']], function() {
//    Route::controller('test', 'TestController', [
//        'postCreate' => 'test.create',
//        'postUpdate' => 'test.update',
//        'getDelete' => 'test.delete',
//        'getData' => 'test.data',
//        'getAddQuestion' => 'test.question',
//    ]);
    Route::controller('test-details', 'TestDetailController', [
        'getIndex' => 'test_details.index',
        'postPush' => 'test_details.push',
        'getWhereTest' => 'test_details.where_test',
    ]);
    Route::controller('mini_test', 'MiniTestController', [
        'postCreate' => 'mini_test.create',
        'postUpdate' => 'mini_test.update',
        'getDelete' => 'mini_test.delete',
        'getFind' => 'mini_test.find',
        'getData' => 'mini_test.data',
        'getDetail' => 'mini_test.detail',
        'getFindby' => 'mini_test.findby',
    ]);
});