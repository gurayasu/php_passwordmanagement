【概要】
PHP, Mysqlを使って、ユーザー登録/ログイン機能、データベースにデータを保存する機能を実装しました。
今回は、色々なパスワードをデータベースを管理するという立て付けです。

【苦労した点】
ログイン機能とパスワード管理機能をまず別々で実装して統合しました。
現状、ログイン→マイページ→パスワード管理画面に遷移する状態ですが、
本当は、ログインしたら直接パスワード管理画面に遷移するようにしたかったです。
しかし、ログイン機能とパスワード管理機能で異なるデータベースを使っているためか、
エラーが出てしまいマイページを挟まないといけない状態です。
