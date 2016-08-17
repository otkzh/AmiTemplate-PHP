# AmiTemplate-PHP

普段使っている中規模サイト制作用の雛形です。LAMP環境構築から、gulp設定、scss/compassのmixin、require.jsを使ったjsファイルの管理などなど…ノウハウ詰まっている。ベストなのは案件ごとに詳細設計することとは言え・・・・そんな、ベタープラクティスをまとめて随時更新。

### TEST-URL

http://amiten.net/sample/amitenp/

### メンバー

- amishiro

※絶賛参加者募集中！

### 必要なもの

- ローカルサーバー構築のために
 -[Virtualbox](https://www.virtualbox.org/)と[vagrant](https://www.vagrantup.com/)

- 作業の自動化のために
 - [node.js](http://nodejs.jp/)
 - [gulp](http://gulpjs.com/)
- cssコーディングの効率アップのために
 - [sass](http://sass-lang.com/)
 - [compass](http://compass-style.org/)

# 環境構築

macのやり方しかわかりませぬ。そして、ざっくりな説明しか書いておりませぬ。

## ローカルサーバー構築 - vagrantの設定

前提：[vagrant](https://www.vagrantup.com/) と [Virtualbox](https://www.virtualbox.org/) をインストール。LocalhostNameを任意に変更したい場合は、[vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)を追加インストールして、vagrant 実行時に***/etc/hosts***を自動で書き換えできるようにしておく。

- vagrantfileを修正
~~~ruby
#↓自分の環境に合わせてIPアドレスを変更
config.vm.network "private_network", ip: "192.168.33.50"
#↓vagrant-hostsupdaterをインストール済みであれば、好きなLocalhostNameが使える。
config.vm.hostname = "base.dev"
~~~

- ターミナルを開いて、該当ディレクトリでvagrantを立ち上げ
~~~
$ vagrant up
~~~

###### 追記

SCOTCH BOX(https://box.scotch.io/) というboxファイルを利用してLAMP環境を一発構築します。これ以上に簡単なvagrantでの環境づくりは（amishiroが探した限りでは）たぶんない。初回実行時は重たいboxをダウンロードするために時間がかかるが、２回目以降は（PC環境にもよるけど）30s〜5mぐらいで終わる。最強。

## gulpの設定と実行

前提：node.js と gulp はインストールされている

0. package.jsonに記載されているGulpプラグインをインストールするために、ターミナルでnpmインストールを実行。
~~~
$ npm install
~~~
0. ファイル監視実行
~~~
$ gulp
~~~
0. 納品用ファイル書き出しだけをしたい場合は…
~~~
$ gulp dest
~~~

###### 追記

Gulpでは、publicフォルダー内にある、各種ファイル監視しつつ、納品用ファイルの書き出しを実行します。主な実行内容は

- scss/compassのコンパイル
- 画像ファイルの圧縮
- php/htmlファイルの整形

です。jsファイル周りは好みが別れるので、特に記述はしていない。お好みでカスタマイズすればいいと思う。そう思う。

## SCSS Compassのインストール

前提：基本、最新の安定版使っています。旧バージョンを使いたい場合は、bundlerを使って案件ごとにコントロール。※使い方は別途。

0. **sudo gem install sass**
0. **sudo gem install compass**


# 注意事項

まだまだ甘いところがあるので、いろいろ悩み中。[issues](https://github.com/amishiro/AmiTemplate-PHP/issues)でタスク管理しています。
