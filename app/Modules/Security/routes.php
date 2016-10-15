<?php
Route::group(['middleware'=>['web', 'auth']], function() {
    Route::controller('role', 'RoleController', [
        'getData' => 'role.data',
        'getAdd' => 'role.add',
        'postCreate' => 'role.create',
        'getEdit' => 'role.edit',
        'postUpdate' => 'role.update',
        'getDelete' => 'role.delete',
        'getRoleUser' => 'role.user',
        'postUserAssign' => 'user.assign',
        'getPermissionRole' => 'role.permission',
        'postRoleAssign' => 'role.assign',
        'getModalRole' => 'role.modal'
    ]);
    Route::controller('permission', 'PermissionController', [
        'getData' => 'permission.data',
        'getAdd' => 'permission.add',
        'postCreate' => 'permission.create',
        'getEdit' => 'permission.edit',
        'postUpdate' => 'permission.update',
        'getDelete' => 'permission.delete',
    ]);
});