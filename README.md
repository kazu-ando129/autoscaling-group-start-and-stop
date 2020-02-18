# 概要
- AutoScalingGroupの設定を更新するプログラム

# やっていること
- オートスケーリンググループの希望、最小、最大の値を変更しています
  - 起動の際は「希望、最小、最大」の値をそれぞれ1としています
  - 停止の際は「希望、最小、最大」の値をそれぞれ0としています

# 動作確認済環境
- PHP 7.3.11
- Composer version 1.8.5

# インストール
```bash
$ git clone git@github.com:kazu-ando129/autoscaling-group-start-and-stop.git
$ compose install
```

# 使い方
- .env.defaultをコピーして、.envを作成する
- .envの以下をお使いの環境に合わせて設定します
  - PROFILE
  - AUTO_SCALING_GROUP_NAME

# 使い方
```bash
# オートスケーリングを有効にするとき
$ php autoScalingGroupStartAndStop.php up

# オートスケーリングを無効にするとき
$ php autoScalingGroupStartAndStop.php down
```

# Licence
This software is released under the MIT License, see LICENSE.

# Authors
kazu-ando129

# References
https://docs.aws.amazon.com/ja_jp/sdk-for-php/v3/developer-guide/getting-started_installation.html
https://docs.aws.amazon.com/aws-sdk-php/v2/guide/service-autoscaling.html
