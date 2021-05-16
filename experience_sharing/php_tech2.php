                                                        <p><span>PHP 結合HTML 輸出 PDF 問題[使用TCPDF]&nbsp;</span><br />
                                                        <br />
                                                        <span>我使用TCPDF的套件包 ,</span><br />
                                                        <br />
                                                        <span>&lt;?php</span></p>

                                                        <div class="text_exposed_show"><br />
                                                        require_once(&#39;tcpdf/tcpdf.php&#39;);<br />
                                                        require_once(&#39;tcpdf/config/lang/eng.php&#39;);<br />
                                                        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, &#39;UTF\<br />
                                                        -8&#39;, false);<br />
                                                        $pdf-&gt;SetFont(&#39;cid0jp&#39;, &#39;&#39;, 10);<br />
                                                        $pdf-&gt;setPrintHeader(false);<br />
                                                        $pdf-&gt;setPrintFooter(false);<br />
                                                        $pdf-&gt;AddPage();<br />
                                                        <br />
                                                        //假設設置純HTML語法<br />
                                                        <br />
                                                        <br />
                                                        $html = &lt;&lt;&lt;EOF<br />
                                                        &lt;body&gt;HELLO&lt;/body&gt;<br />
                                                        EOF;<br />
                                                        <br />
                                                        //使用<br />
                                                        $pdf-&gt;write(36,$html);<br />
                                                        $pdf-&gt; Output(&quot;example.pdf&quot;, &quot;I&quot;);<br />
                                                        //輸出結果 會變成 &lt;body&gt;HELLO&lt;/body&gt;<br />
                                                        <br />
                                                        //使用<br />
                                                        $pdf-&gt;writeHTML($html);<br />
                                                        $pdf-&gt; Output(&quot;example.pdf&quot;, &quot;I&quot;);<br />
                                                        //輸出結果 會變成 HELLO<br />
                                                        <br />
                                                        /*<br />
                                                        Q : 請問一下我如何 讓<br />
                                                        */<br />
                                                        <br />
                                                        $font = &#39;HELLO&#39;;<br />
                                                        $html = &lt;&lt;&lt;EOF<br />
                                                        &lt;body&gt;&lt;?echo $font;?&gt;&lt;/body&gt;<br />
                                                        EOF;<br />
                                                        <br />
                                                        $pdf-&gt;writeHTML($html);<br />
                                                        $pdf-&gt; Output(&quot;example.pdf&quot;, &quot;I&quot;);<br />
                                                        <br />
                                                        /*<br />
                                                        輸出結果變成 HELLO 呢 ?<br />
                                                        也就是說 , 我需要參雜 PHP撈資料庫的值 寫入 HTML 語法<br />
                                                        讓TCPDF可以順利輸出 含PHP變數的HTML的PDF頁面?<br />
                                                        假設有資料庫 DB_NAME = change_pdf , DB_TABLE_NAME = change_table<br />
                                                        DB_FIELD_NAME = id , name , company ,假設已連上DB<br />
                                                        */<br />
                                                        <br />
                                                        include &#39;db.php&#39;;<br />
                                                        <br />
                                                        $sql = &quot;select `company` from `change_table` where<br />
                                                        `id`=&#39;1&#39; and `name`=&#39;andy&#39;&quot;;<br />
                                                        $result = mysql_query($sql);<br />
                                                        $row = mysql_fetch_row($result);<br />
                                                        <br />
                                                        $context = $row[0]; // company 假設為 -&gt; IBM<br />
                                                        <br />
                                                        $html = &lt;&lt;&lt;EOF<br />
                                                        &lt;html&gt;&lt;body&gt;&lt;?echo $context;?&gt;&lt;/body&gt;&lt;/html&gt;<br />
                                                        EOF;<br />
                                                        <br />
                                                        //請問如何讓他輸出成 &quot; company &quot; 文字 . 麻煩知道的幫小弟解惑一下 , 感謝 .</div>

                                                        <div class="text_exposed_show">&nbsp;</div>

                                                        <div class="text_exposed_show">//找到方法嚕</div>

                                                        <div class="text_exposed_show">//改成</div>

                                                        <div class="text_exposed_show">
                                                        <p>$html = &lt;&lt;&lt;EOF<br />
                                                        &lt;html&gt;&lt;body&gt;$context&lt;/body&gt;&lt;/html&gt;<br />
                                                        EOF;<br />
                                                        $pdf-&gt;writeHTML($html);<br />
                                                        $pdf-&gt; Output(&quot;example.pdf&quot;, &quot;I&quot;);</p>
                                                        </div>