# Laravel5.4 で登録画面を追加・編集した

デフォルトで簡単に作成可能だが、セキュリティなどを考えると気持ち悪い。

あえてテーブル名称等を変更して作成する。


## t‗usersテーブルを作成する

ついでにmigrationも作成しておく

```
php artisan make:model TUser -m
```

* artisanコマンドが良しなにしてくれるがこのままでは認証用のモデルとしては使用できない。
* 作成されたモデルを下記のように変更する。

```diff
namespace App\Model;

- use Illuminate\Database\Eloquent\Model;
+ use Illuminate\Notifications\Notifiable;
+ use Illuminate\Foundation\Auth\User as Authenticatable;

- class TUser extends Model
+ class TUser extends Authenticatable
{
-    //
+    protected $guarded = ['id'];
}
```

## artisan コマンドでauthを追加

```
php artisan make:auth
```

## config/auth.phpを編集する

```diff

<?php

return [

    'defaults' => [
        'guard' => 'web',
-        'passwords' => 'users',
+        'passwords' => 't_users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
-            'provider' => 'users',
+            'provider' => 't_users',
        ],

        'api' => [
            'driver' => 'token',
-            'provider' => 'users',
+            'provider' => 't_users',
        ],
    ],

    'providers' => [
-        'users' => [
+        't_users' => [
            'driver' => 'eloquent',
-             'model' => App\User::class,
+             'model' => App\Model\TUser::class,
        ],
    ],

    'passwords' => [
-        'users' => [
+        't_users' => [
-            'provider' => 'users',
+            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];

```

## テンプレートを編集

* 割愛

## Controllerを編集

* app/Http/Controllers/Auth/RegisterController.php
    * モデルとフィールド、バリテーション回りを修正する
* app/Http/Middleware/RedirectIfAuthenticated.php
    * 登録完了した時にリダイレクトするURLを指定する
    * デフォルトだと/homeになっている


