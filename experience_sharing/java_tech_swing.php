                                                        <p>閏年判斷公式<br />
                                                        <br />
                                                        *******************************************<br />
                                                        <br />
                                                        開始 ----除4 --- 不等於0 ---&gt; 不是閏年<br />
                                                        |<br />
                                                        |<br />
                                                        等於0 --- 除100 --- 不等於0 ---&gt; 是閏年<br />
                                                        |<br />
                                                        |<br />
                                                        等於0 --- 除400 --- 不等於0 ---&gt; 不是閏年<br />
                                                        |<br />
                                                        |<br />
                                                        等於0 ---&gt; 是閏年<br />
                                                        <br />
                                                        *******************************************<br />
                                                        <br />
                                                        程式碼 :<br />
                                                        <br />
                                                        *******************************************<br />
                                                        package j120902;<br />
                                                        <br />
                                                        import java.util.Scanner;<br />
                                                        import javax.swing.JOptionPane;<br />
                                                        <br />
                                                        public class LeapYear {<br />
                                                        <br />
                                                        public static void LeapYear_Count() {<br />
                                                        Leap_Year_Back:<br />
                                                        while(true){<br />
                                                        int Leap_Year = Integer.parseInt(JOptionPane.showInputDialog(null, &quot;需要判斷閏年的西元年 -&gt; 請輸入數字:&quot;));<br />
                                                        if (Leap_Year % 4 == 0) {//可以被4整除<br />
                                                        if (Leap_Year % 100 == 0) {//可被100整除<br />
                                                        if (Leap_Year % 400 == 0) {//可被400整除<br />
                                                        JOptionPane.showMessageDialog(null, &quot;是閏年&quot;);<br />
                                                        break Leap_Year_Back;<br />
                                                        } else {//不可被400整除 ,<br />
                                                        JOptionPane.showMessageDialog(null, &quot;不是閏年&quot;);<br />
                                                        }<br />
                                                        } else { //不可被100整除<br />
                                                        JOptionPane.showMessageDialog(null, &quot;是閏年&quot;);<br />
                                                        break Leap_Year_Back;<br />
                                                        }<br />
                                                        } else {//不能被4整除<br />
                                                        JOptionPane.showMessageDialog(null, &quot;不是閏年&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        }<br />
                                                        }<br />
                                                        *******************************************<br />
                                                        執行圖片:<br />
                                                        *******************************************<br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203350725"><img alt="Leap_Year1" border="0" src="http://pic.pimg.tw/sktdeity/1348979531-2255847233.jpg" title="Leap_Year1" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203350727"><img alt="Leap_Year2" border="0" src="http://pic.pimg.tw/sktdeity/1348979532-1103337458.jpg" title="Leap_Year2" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203350729"><img alt="Leap_Year3" border="0" src="http://pic.pimg.tw/sktdeity/1348979533-3649528731.jpg" title="Leap_Year3" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203350731"><img alt="Leap_Year4" border="0" src="http://pic.pimg.tw/sktdeity/1348979533-2889799923.jpg" title="Leap_Year4" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203350723"><img alt="Leap_Year5" border="0" src="http://pic.pimg.tw/sktdeity/1348979530-2884397360.jpg" title="Leap_Year5" /></a><br />
                                                        *******************************************</p>
                                                                                                                
                                                        <hr>
                                                        <b>進階 Jquery-縱向全選&橫向全選</b>
                                                        <hr>

                                                        <p><img alt="進階jquery 縱向全選及橫向全選" border="0" src="http://pic.pimg.tw/sktdeity/1384192149-1014943453.jpg" title="進階jquery 縱向全選及橫向全選" /> <img alt="進階橫向全選" border="0" src="http://pic.pimg.tw/sktdeity/1384192211-660468881.jpg" title="進階橫向全選" /></p>

                                                        <p>&nbsp;</p>

                                                        <p>&nbsp;</p>

                                                        <p><br />
                                                        &nbsp;</p>

                                                        <p>&nbsp;</p>

                                                        <p>&nbsp;</p>  