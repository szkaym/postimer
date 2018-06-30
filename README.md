# laravel 設定手順

* macでの作業を記録しておく。

## composerをインストールしてコマンドパスを通す

* composerのインストール手順でやった
* なんかhomebrewでもいいらしい（ｯﾁ
    ```shell
    brew install homebrew/php/composer
    ```
* とりあえず手作業でインストールする。
* コマンドは下記の通り

1. 最初に適当な場所に移動しておく
    ```shell
    cd ~/Application/
    mkdir composer
    cd composer
    ```
1. composer 公式のコピペ
    * <https://getcomposer.org/download/>
1. composerのパスを通すために指定の場所に実行ファイルをリネーム移動する（シンボリックリンクでもいいかも
    ```shell
    mv composer.phar /usr/local/bin/composer
    ```
1. composerでインストールしたコマンドを使えるようにパスを通す
    ```shell
    vi ~/.bash_profile
    ```
* PATHの値に`:`でつなげて`~/.composer/vendor/bin`を入れる。
* ダブルクォーテーションでくくられてるのでダブルクォーテーション内に記述する。
* composerが確認するPHPバージョンを指定する
  * composerはCLIのphpバージョンをみてよしなにしてくれるがどっちかというと実行環境に合わせたいのでPHPバージョンを指定したいことのほうが多い。
  * 今回はXAMPPに合わせた（正直PHP5.6に合わせておけば大体は大丈夫じゃろ。。。）
    ```shell
    vi ~/.composer/composer.json
    {
        "require": {
            #依存パッケージ
        },
        "config": {
            "platform": {
                "php": "5.6.*"
            }
        }
    }
    ```
* なお、間違ってあとからPHPバージョンを指定する場合はcomposer.lockを削除してからインストールする。（キャッシュファイルになっている）

## composer を使ってlaravelのCLIツールをインストールする

* <https://readouble.com/laravel/5.4/ja/installation.html>
* インストーラをグローバルにインストールする
    ```shell
    composer global require "laravel/installer"
    ```

## プロジェクトディレクトリでコマンドを実行してlaravelをセットアップ

* laravelのバージョンは 5.4
* composer でバージョン指定してインストール
    ```shell
    composer create-project "laravel/laravel=5.4.*" <projectName>
    ```
* ディレクトリのパーミッションを変更する
    ```shell
    chmod -R 0777 path/to/project/storage/*
    ```
* 0700で足りない場合は0777で

## 設定ファイルの変更

* laravelには設定ファイルが2種類ある
  * プロジェクトディレクトリ（以降はpjdと表記）にあるconfigディレクトリの中
    * 基本的な設定ファイル
  * pjd直下の.envファイル
    * 環境ごとに変える
* それぞれ設定しておこう

## Laravel mix

* laravelのbundler
* プロジェクトディレクトリで `npm install` して使用可能になる
* インストール時にエラーになっても気にしない
* タスクは下記のファイルに記述
    ```shell
    /path/to/project/webpack.mix.js
    ```
* 全タスクを実行
    ```shell
    npm run dep
    ```
* 全タスクを実行して圧縮
    ```shell
    npm run production
    ```
* アセットの監視
    ```shell
    npm run watch
    ```

詳細は　<https://readouble.com/laravel/5.4/ja/mix.html> 参照

### Laravel mix は複数のnpmがあるとインストールできない。

* 具体的に言うとnpm install しても無限ループを初めてインストールが終わらない
* 何を言っているかわからないと思うが聞いてほしい。
* windowsでnpmのバージョンを上げようと思うと複数の方法がある。
* `npm-windows-upgrade`を使う方法`chocolatey`を使う方法等
* 自分の環境で、npmがなんかおかしいと思ったら、chocolateyなどを使っていないか考えてみてほしい
* 具体的には下記のコマンドでわかる
* `npm ls -l -g`
* 複数のnpmが存在したらどれか一つを残して他を削除すると治る