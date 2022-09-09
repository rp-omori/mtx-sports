# project name
> U-factor MTXスポーツ・関節クリニック

## set up
できればDockerを使用すること。

https://github.com/terraphic/docker-lamp-wp
### Dockerコンテナ作成後
themeフォルダ直下にこのリポジトリをクローンしてください。

mtx-sportsディレクトリで以下を実行して開発環境を整えてください。
```bash
# install dependencies
npm install
# serve with hot reload at localhost:8080
npm run dev
```
## Git
- featureブランチで作業すること。
- featureブランチを切る際は、developブランチから切ること。また、その際にdevelopをプルして最新の状態にしておくこと。
- developとmainブランチには直接マージせず、プルリクエストを作成すること。また、その際にdevelopをプルして最新の状態にしておくこと。
- プルリクエストを作成する前にコンフリクトを解消しておくこと。
- マージした後は元のブランチは削除すること。(remoteもlocalも) 
### コミットメッセージ
- feat: 新しい機能、画面を追加する場合
- fix: バグの修正
- refactor: コードのリファクタリング
- コメントにissueを紐づけること(#xxを入れる)

### コミット時の注意点
develop-before-deployブランチ以外のブランチで作業するときは、cssフォルダ内のコンパイル後のファイルはコミット前に削除すること。
間違えてコミットしてしまった場合は、コンフリクトするのでcssフォルダ内のコンパイル後のファイルを削除すること

参考：https://qiita.com/konatsu_p/items/dfe199ebe3a7d2010b3e
### main
本番環境用branch
> developブランチでテストをして、問題なければmainブランチにプルリクエストをしてマージしてください。
> 本番環境に上げる前は必ずこのブランチにマージしておくこと。
### develop
開発環境用branch
> developブランチはgit actionsでステージング環境と同期しています。プッシュしたらステージング環境が更新されるので注意してください。
### develop-before-deploy
> featureブランチでテストをして、問題なければdevelop-before-deployブランチにプルリクエストをしてマージしてください。
> 問題なければ、このブランチでコンパイルしてからdevelopブランチにマージしてください。

## エディター環境
各エディターの以下のプラグインは非推奨です
- Live Sass Compiler
- Live Server
- Format HTML in PHP
