-- 実行環境 --
DROP TABLE users;

-- ユーザーテーブル定義
CREATE TABLE users (
	userno INT AUTO_INCREMENT PRIMARY KEY,
	user_mail VARCHAR(40),
	user_password VARCHAR(20),
	user_name VARCHAR(20),
	postal_cd CHAR(8),
	address VARCHAR(40),
	tel VARCHAR(15)
);

-- インサート文
INSERT INTO users (user_mail, user_password, user_name) VALUES('system_inakuuun@test.co.jp','inakuuun','いなくん');
INSERT INTO users (user_mail, user_password, user_name) VALUES('unnyou_tokuyuuu@test.co.jp','tokuyuuu','とくゆー');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_hayashi@test.co.jp','hayashi','ハヤシ');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_keko@test.co.jp','keko','けこ');
INSERT INTO users (user_mail, user_password, user_name) VALUES('unnyou_kiyosuke@test.co.jp','kiyosuke','きよすけ');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_shirai@test.co.jp','shirai','白井');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_yuuki@test.co.jp','yuuki','ユーキ');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_ripton@test.co.jp','ripton','リプトン');
INSERT INTO users (user_mail, user_password, user_name) VALUES('ippan_rin@test.co.jp','rin','RIN');

-- -- テスト環境 --
-- -- ユーザーテーブル定義
-- CREATE TABLE users (
-- 	userno INT PRIMARY KEY,
-- 	user_mail VARCHAR(40),
-- 	user_password VARCHAR(20),
-- 	user_name VARCHAR(20),
-- 	postal_cd CHAR(8),
-- 	address VARCHAR(40),
-- 	tel VARCHAR(15)
-- );

-- CREATE SEQUENCE users_seq
-- INCREMENT BY 1
-- START WITH 1
-- ORDER;

-- -- インサート文
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'system_inakuuun@test.co.jp','inakuuun');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'unnyou_tokuyuuu@test.co.jp','tokuyuuu');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'ippan_hayashi@test.co.jp','hayashi');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'ippan_keko@test.co.jp','keko');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'unnyou_kiyosuke@test.co.jp','kiyosuke');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'ippan_shirai@test.co.jp','shirai');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'ippan_yuuki@test.co.jp','yuuki');
-- INSERT INTO users (userno, user_mail, user_password) VALUES(users_seq.nextval,'ippan_ripton@test.co.jp','ripton');

