-- 認証方式を変更
USE mysql;
ALTER USER 'root'@'%' IDENTIFIED
WITH mysql_native_password
BY 'fuel';
ALTER USER 'fuel'@'%' IDENTIFIED
WITH mysql_native_password
BY 'fuel';

-- データベース指定
USE fuel;

-- テーブル初期化
DROP TABLE IF EXISTS test;

-- テーブル生成
CREATE TABLE test (
	id int NOT NULL AUTO_INCREMENT COMMENT 'id',
	username varchar(127) DEFAULT NULL COMMENT '名前',
	password varchar(63) DEFAULT NULL COMMENT 'パスワード',
	reg_date datetime DEFAULT NULL COMMENT '登録日',
	upd_date timestamp ON UPDATE CURRENT_TIMESTAMP COMMENT '更新日',
	del_date datetime DEFAULT NULL COMMENT '削除日',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

-- デフォルトデータを追加
INSERT INTO test (
    username,
    password,
    reg_date
)
VALUES (
	'webmonster',
	'web',
	'2022-04-21 00:00:00'
);