# 個人履歷表管理系統
結合前後端技術開發而成的履歷表系統。後端使用PHP而資料庫使用MySQL。透過PHP PDO 操作 MySQL，進行crud的資料處理，建構出履歷表的生成系統。使用者只需輸入相對應的欄位文字及上傳圖檔，即可產生經過美化的履歷表畫面。

### Demo:
  * URL: http://220.128.133.15/s1100218/1101_resume-a120220ms25/
---
## 功能
1. 首頁為登入頁面，可註冊後登入使用此系統
2. 後台有以下功能
   * 關於我
     * 姓名
     * 自我介紹
     * 聯絡方式
     * 照片
     * 基本資料
   * 技能管理
     * 可新增數筆個人的技能，並可編輯技能相應次項內容
     * 可新增/修改/刪除技能資料
     * 可控制技能資料在前台是否顯示
   * 作品管理
     * 可新增數份不同的作品
     * 每份作品含有標題、內容說明、兩張圖片、及可輸入gitHub和demoPage的連結
     * 可編輯或刪除作品
     * 可決定那一份自傳要顯示在前台
   * 工作經歷管理
     * 可新增數項工作經歷資訊，公司名稱、任職時間、職務內容
     * 可編輯或刪除
     * 可決定那一個項目要顯示在前台
   * 學歷管理
      * 可新增數項學歷資訊，學校名稱科系、年分
     * 可編輯或刪除
     * 可決定那一個項目要顯示在前台
3. 點選預覽可看見所生成的履歷表


## 畫面呈現
* login

![image](https://github.com/a120220ms25/php_cvSystem/blob/master/cv_login.jpg?raw=true)

* backend

![image](https://github.com/a120220ms25/php_cvSystem/blob/master/cv_backend.jpg?raw=true)

* frontend

![image](https://github.com/a120220ms25/php_cvSystem/blob/master/cv_show.jpg?raw=true)
