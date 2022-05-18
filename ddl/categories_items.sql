-- 実行環境
-- カテゴリーテーブル
-- サーバー起動
-- /Applications/MAMP/Library/bin/mysql -u root -p
DROP TABLE items;
DROP TABLE categories;

CREATE TABLE categories (
    categoryno int AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(20)
);

INSERT INTO categories(category_name)VALUES('食品');
INSERT INTO categories(category_name)VALUES('書籍');
INSERT INTO categories(category_name)VALUES('乗り物');
INSERT INTO categories(category_name)VALUES('衣類');

-- 商品テーブル
CREATE TABLE items (
    itemno int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40),
    img_path TEXT,
    price int NOT NULL,
    itemstock int NOT NULL,
    description TEXT,
    categoryno int NOT NULL,
    FOREIGN KEY (categoryno) REFERENCES categories(categoryno)
);

-- 書籍のインサート
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('やさしいC# 第3版','/books/bookItem1.jpg',2838,10,'',2);
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('Webを支える技術','/books/bookItem2.jpg',2570,15,'',2);
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('コーチングの基本','/books/bookItem3.jpg',1800,20,'',2);
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('金持ち父さん、貧乏父さん','/books/bookItem4.jpg',1760,25,'',2);
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('言葉にできるは武器になる。','/books/bookItem5.jpg',1500,30,'',2);
INSERT INTO items (name,img_path,price,itemstock,description,categoryno) VALUES ('1分で話せ','/books/bookItem6.jpg',1540,35,'',2);

-- -- テスト環境 --
-- CREATE TABLE categories( 
--     categoryno int PRIMARY KEY, 
--     category_name VARCHAR(20) 
-- );

-- CREATE SEQUENCE categories_seq 
-- INCREMENT BY 1 
-- START WITH 1 
-- ORDER;

-- INSERT INTO categories(categoryno,category_name)VALUES(categories_seq.nextval,'食品');
-- INSERT INTO categories(categoryno,category_name)VALUES(categories_seq.nextval,'書籍');
-- INSERT INTO categories(categoryno,category_name)VALUES(categories_seq.nextval,'乗り物');
-- INSERT INTO categories(categoryno,category_name)VALUES(categories_seq.nextval,'衣類');

-- CREATE TABLE items ( 
--     itemno INT PRIMARY KEY, 
--     name VARCHAR(40), 
--     img_path VARCHAR(40), 
--     price INT NOT NULL, 
--     categoryno INT NOT NULL, 
--     FOREIGN KEY (categoryno) REFERENCES categories(categoryno) 
-- );

-- CREATE SEQUENCE items_seq 
-- INCREMENT BY 1 
-- START WITH 1 
-- ORDER;

-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'猫でもわかるC#','',2000,2);
-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'Webを支える技術#','',2500,2);
-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'コーチングの基本#','',1800,2);
-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'金持ち父さん、貧乏父さん#','',1400,2);
-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'言葉にできるは武器になる。#','',1500,2);
-- INSERT INTO items (itemno,name,img_path,price,categoryno) VALUES (items_seq.nextval,'1分で話せ#','',3000,2);

-- -- 次使うシーケンス番号がわかるらしい
-- -- SELECT NEXTVAL('items_seq');
-- -- SELECT NEXTVAL('categories_seq');

-- -- DROP SEQUENCE items_seq;
-- -- DROP SEQUENCE categories_seq;
-- -- DROP TABLE items;
-- -- DROP TABLE categories;
