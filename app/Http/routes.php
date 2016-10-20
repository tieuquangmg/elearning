<?php

Route::get('test',function (){
    //dump(DB::connection('qlsv')->table('SYS_NguoiDung')->get());
//    config(['database.default' => 'qlsv']);
    dump(\App\NguoiDung::all()->take(10));
    dump(\App\Modules\Subject\Models\Subject::all());
    dump(Auth::user());
    return phpinfo();
});
Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', 'StudyController@getIndex')->name('home');
    });
//    'middleware' => ['role:student|teacher'],
    Route::group(['prefix'=>'study'], function (){
        Route::get('sub/{id}', 'StudyController@getSubject')->name('study.subject');
        Route::get('unit/theory/{id}/{class_id}', 'StudyController@getUnitTheory')->name('study.unittheory');
        Route::get('unit/slide-video/{id}/{class_id}', 'StudyController@getSlideVideo')->name('study.slidevideo');
        Route::get('unit/audio/{id}/{class_id}', 'StudyController@getAudio')->name('study.audio');
//Hỏi đáp////////////////////////////////////////
        Route::get('unit/add_question/{id}/{class_id}', 'StudyController@getAddQuestion')->name('study.addquestion');
//Kiểm tra///////////////////////////////////////
        Route::get('begin_test/{id}/{unit_id}/{class_id}', 'StudyController@getBeginTest')->name('study.begintest');
        Route::get('unit-test/{id}', 'StudyController@getUnitTest')->name('study.unit.test');
        Route::post('unit-tested', 'StudyController@postUnitTested')->name('study.unit.tested');
        Route::get('unit-result-test/{id}', 'StudyController@getResultTest')->name('study.result.test');
        Route::get('unit-tested-detail/{id}', 'StudyController@getResultTestDetail')->name('study.unit.tested.detail');
        Route::get('theory/{id}/{class_id}', 'StudyController@getTheory')->name('study.theory');
//        Route::get('theory/{id}', 'StudyController@getTheory')->name('study.theory');
        Route::post('testing', 'StudyController@getTesting')->name('study.testing');
        Route::get('tested/{id}', 'StudyController@getUnitTested')->name('study.tested');

        Route::get('transcript/{id}', 'StudyController@getTranscript')->name('study.transcript');

        Route::get('mycourse','StudyController@getMycourse')->name('study.mycourse');
        Route::get('news/{id}','StudyController@getnews')->name('study.news');
        Route::get('update-time','StudyController@getUpdateTime')->name('study.updatetime');

        Route::get('news-detail/{id}','StudyController@getNewsDetail')->name('study.newsdetail');

        Route::get('profile','StudyController@getProfile')->name('study.profile');

        Route::post('profile','StudyController@postProfile')->name('study.profile');
        Route::post('add-comment','StudyController@postAddComment')->name('study.addcomment');

        Route::get('meeting/{unit_id}/{class_id}','StudyController@getMeeting')->name('study.meeting');
        Route::post('meeting','StudyController@postMeeting')->name('study.meeting');
        Route::post('end-meeting','StudyController@postEndMeeting')->name('study.endmeeting');
        Route::post('is-meeting-running','StudyController@getIsMeetingRunning')->name('study.ismeetingrunning');
        Route::post('work-time','StudyController@postWorkTime')->name('study.worktime');
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/admin', function () {
            $time = Carbon\Carbon::now('Asia/Ho_Chi_Minh');
            $time->addSeconds(15);
            $data['messages'] =  \App\Modules\Auth\Models\User::find(Auth::user()->id)->message;
            return view('_basic.tooltip',$data);
        })->name('admin');
    });
    Route::get('check-time', function (){
        $end_time = \Illuminate\Support\Facades\Session::get('start_time');
        dd($end_time);
        if(Carbon\Carbon::now('Asia/Ho_Chi_Minh')->gte($end_time))
        return true;
        return false;
    });

    Route::get('outline', function(){
        return view('_basic.outline');
    });

    Route::get('learn', function (){
        return view('namviet.index');
    });
    /**
     * ----------------------------------------------------------------------------------File Manager
     */

    Route::group(array('middleware' => 'auth'), function(){
        Route::controller('filemanager', 'FilemanagerLaravelController');
    });

    Route::auth();
    /**
     * ----------------------------------------------------------------------------------Change Language
     */
    Route::get('lang/{locale}', function($locale){
        Lang::setLocale('vi');
        \Illuminate\Support\Facades\Session::set('locale', $locale);
        return redirect()->back()->withSuccess(App::setLocale('vi'));
    })->name('lang');

    Route::group(array('before' => 'auth'), function ()
    {
        Route::get('/laravel-filemanager', '\Tsawler\Laravelfilemanager\controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\Tsawler\Laravelfilemanager\controllers\LfmController@upload');
    });
});

