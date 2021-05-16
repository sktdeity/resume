                                                        <div>
                                                        <div><span style="color:#009900">1.撰寫php的環境準備工作(AppServ 2.5.10安裝設定) 參考以下這個連結網址 , 有詳細的說明!! (我當然建議2.5.10版本 , 因為是最穩定的版本)</span></div>

                                                        <div><span style="color:#009900">&nbsp;</span></div>

                                                        <div><a href="http://www.appservnetwork.com/modules.php?name=News&amp;file=article&amp;sid=46">http://www.appservnetwork.com/modules.php?name=News&amp;file=article&amp;sid=46</a></div>
                                                        </div>

                                                        <div><span style="color:#009900">&nbsp;</span></div>

                                                        <div><span style="color:#009900">記得設定MYSQL 密碼!!</span></div>

                                                        <div><span style="color:#009900">&nbsp;</span></div>

                                                        <div><span style="color:#996633">2.然後先進去phpmyadmin!! -&gt; 安裝好AppServ 2.5.10 並啟動之後 應該為&nbsp;<a href="http://localhost/" target="_blank">http://localhost/</a>&nbsp;或是<a href="http://127.0.0.1/" target="_blank">http://127.0.0.1</a></span></div>

                                                        <div><span style="color:#996633">&nbsp;</span></div>

                                                        <div><span style="color:#996633">進行 &nbsp;root 密碼 &nbsp;的權限修改 !!</span></div>

                                                        <div><span style="color:#996633">&nbsp;</span></div>

                                                        <div><span style="color:#996633">參考以下連結</span></div>

                                                        <div><span style="color:#996633">&nbsp;</span></div>

                                                        <div><span style="color:#996633"><a href="http://vbb.twftp.org/showthread.php?t=3643" target="_blank">http://vbb.twftp.org/showthread.php?t=3643</a>&nbsp;</span></div>

                                                        <div><span style="color:#996633">&nbsp;</span></div>

                                                        <div><span style="color:#996633">圖片沒有沒關係 , 參考步驟進行修改!!</span></div>

                                                        <div><span style="color:#ff0000">&nbsp;</span></div>

                                                        <div><span style="color:#ff0000">3. 於C:\Appserv\www\ 跟目錄底下 創建一個資料夾 -&gt; 譬如為 php</span></div>

                                                        <div><span style="color:#ff0000">&nbsp;</span></div>

                                                        <div><span style="color:#ff0000">&nbsp; &nbsp; 然後開始撰寫第一隻PHP程式碼 , 建議使用Notepad ++ 編輯程式 -&gt;&nbsp;</span></div>

                                                        <div><span style="color:#ff0000">&nbsp; &nbsp;下載網址為<a href="http://notepad-plus-plus.org/download/v5.9.3.html" target="_blank">http://notepad-plus-plus.org/download/v5.9.3.html</a>&nbsp;下載5.9.3最新版 , 可能會需要e-mail進行驗證!! , 輸入相關資料並送出後 再去你的e-mail處收取!!</span></div>

                                                        <div><span style="color:#ff0000">&nbsp;</span></div>

                                                        <div><span style="color:#ff0000">&nbsp; &nbsp;下載完開啟Notepad++ &gt; 自訂 -&gt; 使用者自訂 -&gt; 開心文件/開啟儲存目錄設定 -&gt;開新文件部分 , 依造作業系統選擇 , 下方編碼部分 設定為 UTF-8 無BOM 即可點選關閉</span></div>

                                                        <div><span style="color:#9999ff">&nbsp;</span></div>

                                                        <div><span style="color:#6666cc">4. 開啟 Notepad++ 後 , 開始撰寫第一隻程式碼 &nbsp;內容如下</span></div>

                                                        <div><span style="color:#cc0000">&nbsp;</span></div>

                                                        <div><span style="color:#cc0000">&nbsp; &nbsp;&lt;?php header(&quot;Content-Type: text/html; charset=utf-8&quot;)//網頁編碼 ?&gt;</span></div>

                                                        <div><span style="color:#cc0000">&nbsp; &nbsp;&lt;?php echo(&quot;Hello , Welcome to PHP web programming &lt;br /&gt;&quot;);</span></div>

                                                        <div><span style="color:#cc0000">&nbsp;echo(&quot;你好，歡迎使用PHP網頁程式設計&quot;);?&gt;</span></div>

                                                        <div><span style="color:#cc0000">&nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; 以上程式碼說明 &nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; php程式碼只能撰寫於&nbsp;</span><span style="color:#6633ff">&nbsp; &lt;?php ?&gt; 及 &lt;? ?&gt; 內 &nbsp;, 在&lt;? , &lt;?php &nbsp;及 ?&gt; , php?&gt; 內的空格用於輸入程式碼!!</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; // &nbsp; 第一行是網頁編碼部分 , 主要是確保這個網頁的編碼為UTF-8 , 可以顯示中文</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; // &nbsp; 第二行為輸出語法 echo 英文表示回應的意思 對於php語法則是輸出至螢幕上 &nbsp;,&nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; &nbsp; &nbsp; &nbsp;而echo (&quot;&quot;) 雙引號內為要輸出的文字 , 不見得要用()雙括號 包起來 ,&nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; &nbsp; &nbsp; &nbsp;輸入完成後 存檔至C:\Appserv\www\php\</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; &nbsp; &nbsp; &nbsp;存檔檔名自取 , 首頁建議 取名為index.php</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; // &nbsp; 存檔完成之後 , 於網址輸入&nbsp;<a href="http://localhost/php/" target="_blank">http://localhost/php/</a>&nbsp;或是&nbsp;<a href="http://localhost/php/index.php" target="_blank">http://localhost/php/index.php</a>&nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; &nbsp; &nbsp; &nbsp;或是&nbsp;<a href="http://127.0.0.1/php/" target="_blank">http://127.0.0.1/php/</a>&nbsp;或是&nbsp;<a href="http://127.0.0.1/php/index.php" target="_blank">http://127.0.0.1/php/index.php</a>&nbsp;</span></div>

                                                        <div><span style="color:#6633ff">&nbsp; &nbsp; &nbsp; &nbsp;(因為index.php幾乎是內定首頁的名稱 , 所以也可以進 &nbsp; 行省略的動作)!! , 假如能夠顯示 以下兩行</span></div>

                                                        <div>&nbsp;</div>

                                                        <div><span>&nbsp; &nbsp; &nbsp; &nbsp;Hello , Welcome to PHP web programming</span></div>

                                                        <div><span>&nbsp; &nbsp; &nbsp; &nbsp;你好，歡迎使用PHP網頁程式設計 就代表成功</span></div>

                                                        <div><span>&nbsp;</span></div>

                                                        <div><span>&nbsp; &nbsp; &nbsp; &nbsp;就代表成功!!</span></div>