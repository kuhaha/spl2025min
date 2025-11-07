name, sex, age <br>
-------------------<br>

<?php
// 画面ごとの変数$usersを使ってユーザ一覧を出力する
foreach ($users as $user){
    echo implode(', ', $user), '<br>';
    echo '------------------<br>';
}
// グローバルな変数を表示する
echo "url_base=<u>{$_url_base_}</u>";