# project name
> U-factor MTXスポーツ・関節クリニック

## set up
できればDockerイメージを使用すること。
https://github.com/terraphic/docker-lamp-wp
### Dockerイメージ作成後
以下を実行して開発環境を整えてください。
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
参考：https://qiita.com/konatsu_p/items/dfe199ebe3a7d2010b3e
### main
本番環境用branch
> developブランチでテストをして、問題なければmainブランチにプルリクエストをしてマージしてください。
### develop
開発環境用branch
> featureブランチでテストをして、問題なければdevelopブランチにプルリクエストをしてマージしてください。
> developブランチはgit actionsでステージング環境と同期しています。プッシュしたらステージング環境が更新されるので注意してください。。
