# readme

## nodeエラー関連が多いので、以下に対応をまとめておく。


01. 基本、案件ごとにnodeのバージョンを管理する

- MACユーザーは「ndenv」推奨
- winユーザーは「nodist」推奨

02. 各案件、出来る限り最新版にアップデート。以下最新版でAmiTemplate_v_2動作確認済み。

2017/8/4現在
- node.js__LTS(推奨版）最新_v_6.11.2
- npm_v_5.3.0
- gulp__CLI_v_3.9.1
- gulp__Local_v_3.9.1

03. ndenvかndistでアップデートする。

[wiki__ndenv](https://github.com/amishiro/AmiTemplate-PHP/wiki/ndenv%E3%82%92%E5%88%A9%E7%94%A8%E3%81%97%E3%81%A6%E3%80%81%E3%83%AD%E3%83%BC%E3%82%AB%E3%83%AB%E7%92%B0%E5%A2%83%E3%81%AEnode%E3%81%AE%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3%E3%82%92%E5%AE%89%E5%AE%9A%E7%89%88%E6%9C%80%E6%96%B0%E3%81%AB%E3%80%82)

[wiki__nodist](https://github.com/amishiro/AmiTemplate-PHP/wiki/nodist%E3%82%92%E5%88%A9%E7%94%A8%E3%81%97%E3%81%A6%E3%80%81%E3%83%AD%E3%83%BC%E3%82%AB%E3%83%AB%E7%92%B0%E5%A2%83%E3%81%AEnode%E3%81%AE%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3%E3%82%92%E5%AE%89%E5%AE%9A%E7%89%88%E6%9C%80%E6%96%B0%E3%81%AB%E3%80%82%EF%BC%88%E4%BE%8B-v6.11.1))

04. npmも最新にする。

[wiki__npm](https://github.com/amishiro/AmiTemplate-PHP/wiki/node%E3%81%AE%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3%E3%82%A2%E3%83%83%E3%83%97%E5%BE%8C%E3%81%AB%E8%A1%8C%E3%81%86%E3%80%81npm%E9%96%A2%E9%80%A3%E3%81%AE%E6%9B%B4%E6%96%B0)

05. gulpのグローバルインストール（新しくインストールしたnodeにgulpをインストール)を忘れないこと。


##基本思想



## 目次

- 必要なツール

### 必要なツール

以下3つ（Vagrant、VirtualBox、Node.js）をMACにインストール

##### 仮想環境構築用

Vagrant
[https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)

VirtualBox
[https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)



##### 制作環境構築用（gulpによるタスクランナー構築用）

Node.js
[https://nodejs.org/ja/](https://nodejs.org/ja/)

MAC nodenv
Win nodist

でバージョン管理すると便利。

http://okakacacao.wpblog.jp/technology/install-nodist087

npm v
でnpmがインストールされているか。最新のものが入っているか確認。

npm update -g npm

で念のためアップデート


### 仮想環境構築手順

パッケージで管理することで、っっｘ
Amitenpをっっに

##### 仮想環境立ち上げ

1. 利用するローカルIPを指定したい場合は、Vagrantfileの以下の行を編集
   ``config.vm.network "private_network", ip: "192.168.33.99"``
2. TerminalでVagrantfileの置かれているディレクトリに移動
   ``$ cd /xxx/xxx/myDir/``
3. 以下コマンドでvagrantをインストール
   ``$ vagarnt up``
4. 以下コマンドで仮想環境に入ることができたら仮想環境立ち上げ完了
   ``$ vagrant ssh``

コマンドプロンプトを利用している人は、そのままではsshができないので、事前にopenSSHをインストールして設定しておくこと。
https://www.eaton-daitron.jp/techblog/4627.html



##### ドキュメントルートを変更する

初期設定では、ドキュメントルートが「public」フォルダになっている。ドキュメントルートのフォルダを変更したい方向けに方法を記載しておきます。

1. 以下コマンドで仮想環境に入る
   ``$ vagrant ssh``
2. 以下コマンドでappach設定ファイルをvimで開く
   ``sudo vim /etc/apache2/sites-available/000-default.conf``
3. vimで以下記述を変更
   ``DocumentRoot /var/www/public`` -> ``DocumentRoot /var/www/xxxx``(自由に変更してください。)
4. SSHからログアウト
   ``$ exit``
5. ターミナルから以下コマンドで、vagrantを再起動
   ``vagrant reload``
6. ブラウザで設定したローカルIPを入力して、サイトが表示されたら仮想環境構築完了

※次回より、作業毎（MAC再起動ごとに）にvagrant upを実施
※vagrantのコマンドは[http://qiita.com/oreo3@github/items/4054a4120ccc249676d9](こちら)をどうぞ

### 制作環境構築手順

1. Terminalでpachage.jsonの置かれているディレクトリに移動
   ``$ cd /xxx/xxx/myDir/``
2. 以下コマンドで必要なプラグインをインストール
   ``$ npm i``
3. 全てのインストールが完了したら、以下コマンドで作業環境が立ち上がったら無事完了
   ``$ gulp``
