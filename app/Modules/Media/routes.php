<?php
Route::group(['middleware'=>['web', 'nguoidung']], function() {
    Route::controller('gallery', 'GalleryController', [
        'getList' => 'post.gallery.list',
        'postCreate' => 'post.gallery.create',
        'getFind' => 'post.gallery.find',
        'getDelete' => 'post.gallery.delete',
    ]);
    Route::controller('image', 'ImageController', [
        'postUpload' => 'post.image.upload'
    ]);
    Route::controller('news', 'NewsController', [
        'getData' => 'news.data',
        'getCreate' => 'news.create',
        'getUpdate' => 'news.update',
        'getDelete' => 'news.delete',
        'getDetail' => 'news.detail',
    ]);
    Route::controller('notify', 'NotifyController',[
        'getData' => 'notify.data',
        'getAdd' => 'notify.add',
        'postCreate' => 'notify.create',
        'getEdit' => 'notify.edit',
        'postUpdate' => 'notify.update',
        'postDelete' => 'notify.delete',
    ]);
});