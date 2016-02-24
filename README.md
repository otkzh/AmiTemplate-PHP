# AmiTemplate-PHP

普段使っている中規模サイト制作用の雛形

##メンバー

- amishiro


##必要なの

- vagrant / vertical box
- sass / compass
- node / gulp


##環境構築

macのやり方しかわかりませぬ。そして、ざっくりな説明しか書いておりませぬ。

## vagrantの設定

前提：vagrant と vertical box はインストールされている

0. ipアドレスだけじゃ気持ち悪い。LocalhostNameを任意に変更したい場合は…
  0. **vagrant plugin install vagrant-hostsupdater** で、hostnameを簡単に作るvagrantプラグインをインストール
0. vagrantfileを修正
  0. 自分のローカル環境に合わせて・・・ipアドレスを変更
  0. hostnameを任意に変更
0. **vagrant UP** で実行

2案件目からは、2からの設定でOK。

----

## gulpの設定

前提：node.js と gulp はインストールされている

0. **npm install** でpackage.jsonに記載されているものをインストール
0. **gulp** で実行

----

## SCSS Compassのインストール

前提：基本、最新の安定版使っています。旧バージョンを使いたい場合は、bundlerを使って案件ごとにコントロール。※使い方は別途。

0. **sudo gem install sass**
0. **sudo gem install compass**


# 注意事項

まだまだ甘いところがあるので、いろいろ悩み中。

- 160224/gulp dest で納品データーをdestディレクトリにまとめるようにした
- 160224/スマホhover問題に対応したよ
- 160224/README.md更新
- 160220/Atom使い始めたよ。core設定がまだわからない
- 160212/scssを使いやすいように修正中
- 160212/node_modulesはgitの監視対象から除外
