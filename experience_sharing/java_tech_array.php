                                                        <p>**************************<br />
                                                        計算總分及平均<br />
                                                        有 甲 乙 丙 三位同學<br />
                                                        有 國 英 數 三門科目<br />
                                                        <br />
                                                        甲:90 80 70 = 總分 -&gt; 240 = 平均 -&gt; 80.0<br />
                                                        乙:95 66 45 = 總分 -&gt; 206 = 平均 -&gt; 68.0<br />
                                                        丙:78 54 32 = 總分 -&gt; 164 = 平均 -&gt; 54.0<br />
                                                        **************************<br />
                                                        <br />
                                                        程式碼:<br />
                                                        <br />
                                                        <br />
                                                        **************************<br />
                                                        package j120902;<br />
                                                        <br />
                                                        public class count {<br />
                                                        public static void count_sum() {<br />
                                                        String[] student = {&quot;甲&quot;, &quot;乙&quot;, &quot;丙&quot;};<br />
                                                        int[][] count = {{90, 80, 70}, {95, 66, 45}, {78, 54, 32}};<br />
                                                        int total = 0;<br />
                                                        for (int i = 0; i &lt; count.length; i++) {<br />
                                                        total = 0;<br />
                                                        for (int j = 0; j &lt; count.length; j++) {<br />
                                                        total+=count[i][j];<br />
                                                        }<br />
                                                        double average = total/count.length;<br />
                                                        System.out.println(student[i] + &quot;同學總分:&quot; + total + &quot;,總平均:&quot; + average);<br />
                                                        }<br />
                                                        }<br />
                                                        }<br />
                                                        <br />
                                                        **************************<br />
                                                        <br />
                                                        執行圖片:<br />
                                                        <br />
                                                        **************************<br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203386569"><img alt="count" border="0" src="http://pic.pimg.tw/sktdeity/1349020335-1225857774.jpg" title="count" /></a><br />
                                                        **************************</p>