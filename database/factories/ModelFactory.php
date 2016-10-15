<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Modules\Auth\Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->safeEmail,
        'code' => $faker->name.rand(1,999),
        'active' => 1,
        'phone_number' => rand(11111,99999),
        'password' => bcrypt(str_random(123456)),
    ];
});

$factory->define(\App\Modules\Security\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'display_name' => $faker->name,
        'description' => $faker->name,
    ];
});

$factory->define(\App\Modules\Security\Models\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'display_name' => $faker->name,
        'description' => $faker->name,
    ];
});

$factory->define(\App\Modules\Subject\Models\Subject::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'description' => $faker->name,
        'active' => rand(0,1),
    ];
});

$factory->define(\App\Modules\Security\Models\RoleUser::class, function (Faker\Generator $faker){
    return [
        'role_id' => rand(1,10),
        'user_id' => rand(1,200),
    ];
});

//$factory->define(\App\Modules\Edu\Models\Lesson::class, function(Faker\Generator $faker){
//    return [
//        'name' => $faker->name,
//        'course_id' => rand(1, 3),
//        'news_id'=>rand(1,10),
//        'order' => rand(1, 10),
//        'active' => 1
//    ];
//});

$factory->define(\App\Modules\Examination\Models\Test::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'active' => 1
    ];
});

//$factory->define(\App\Modules\Edu\Models\Section::class, function(Faker\Generator $faker){
//    return [
//        'name' => $faker->name,
//        'news_id'=>rand(1, 15),
//        'test_Id'=>rand(1, 15),
//        'lesson_id'=>rand(1, 10),
//        'video'=> str_random(10),
//        'order' => rand(1, 10),
//        'active' => 1
//    ];
//});

$factory->define(\App\Modules\Examination\Models\TestDetail::class, function(){
    return[
        'test_id' => rand(1, 20),
        'multi_choice_id'=> rand(1, 120),
    ];
});
