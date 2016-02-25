# AmiTemplate-PHP

普段使っている中規模サイト制作用の雛形

##メンバー

- amishiro

※絶賛参加者募集中！

##必要なもの

- ローカルサーバー構築のために
 - [vagrant](https://www.vagrantup.com/)
 - [Virtualbox](https://www.virtualbox.org/)
- 作業の自動化のために
 - [node.js](http://nodejs.jp/)
 - [gulp](http://gulpjs.com/)
- cssコーディングの効率アップのために
 - [sass](http://sass-lang.com/)
 - [compass](http://compass-style.org/)

##環境構築

macのやり方しかわかりませぬ。そして、ざっくりな説明しか書いておりませぬ。

#### ローカルサーバー構築 - vagrantの設定

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

#### gulpの設定

前提：node.js と gulp はインストールされている

0. **npm install** でpackage.jsonに記載されているものをインストール
0. **gulp** で実行

#### SCSS Compassのインストール

前提：基本、最新の安定版使っています。旧バージョンを使いたい場合は、bundlerを使って案件ごとにコントロール。※使い方は別途。

0. **sudo gem install sass**
0. **sudo gem install compass**


# 注意事項

まだまだ甘いところがあるので、いろいろ悩み中。

- 160225/README.mdを更新。vagrant周りについて少し整理した。
- 160224/gulp dest で納品データーをdestディレクトリにまとめるようにした
- 160224/スマホhover問題に対応したよ
- 160224/README.md更新
- 160220/Atom使い始めたよ。core設定がまだわからない
- 160212/scssを使いやすいように修正中
- 160212/node_modulesはgitの監視対象から除外
