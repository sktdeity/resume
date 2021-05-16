                                                        <p>******************************<br />
                                                        步驟一 : 輸入學生人數 : (假設為5位)<br />
                                                        <br />
                                                        步驟二 : 輸入學生分數 : (持續輸入5位同學分數)<br />
                                                        <br />
                                                        如下:<br />
                                                        //////////////////////////////////////////////<br />
                                                        第一位 :98<br />
                                                        第二位 :65<br />
                                                        第三位 :74<br />
                                                        第四位 :95<br />
                                                        第五位 :63<br />
                                                        //////////////////////////////////////////////<br />
                                                        <br />
                                                        步驟三 : 顯示 === 分數分布直方圖 ===<br />
                                                        <br />
                                                        每10分為單位 , 除了100 分<br />
                                                        <br />
                                                        步驟二已判斷90-99分有兩位 , 60分-69分也有兩位 , 70-79分有一位,<br />
                                                        <br />
                                                        則於分布圖會以 * 星字號 做為表示 !!<br />
                                                        <br />
                                                        如下:<br />
                                                        //////////////////////////////////////////////<br />
                                                        100 :<br />
                                                        90 - 99: **<br />
                                                        80 - 89:<br />
                                                        70 - 79: *<br />
                                                        60 - 69: **<br />
                                                        50 - 59:<br />
                                                        40 - 49:<br />
                                                        30 - 39:<br />
                                                        20 - 29:<br />
                                                        10 - 19:<br />
                                                        0 - 9 :<br />
                                                        //////////////////////////////////////////////<br />
                                                        <br />
                                                        ******************************<br />
                                                        <br />
                                                        程式碼:<br />
                                                        <br />
                                                        <br />
                                                        ******************************<br />
                                                        package j120902;<br />
                                                        <br />
                                                        import java.util.Scanner;<br />
                                                        <br />
                                                        public class Grade_Drop_Bit {<br />
                                                        <br />
                                                        public static void Grade_Drop_Bit_Count() {<br />
                                                        Scanner sc = new Scanner(System.in);<br />
                                                        System.out.print(&quot;請輸入學生人數:&quot;);<br />
                                                        int[] person = new int[sc.nextInt()]; //用nextInt()將輸入的數字動態設定陣列大小<br />
                                                        System.out.println(&quot;請輸入學生分數:&quot;);<br />
                                                        int i;<br />
                                                        for (i = 0; i &lt; person.length; i++) {<br />
                                                        System.out.print(&quot;第&quot; + (i + 1) + &quot;位:&quot;);<br />
                                                        person[i] = sc.nextInt(); //用nextInt()將數值存入陣列中<br />
                                                        }<br />
                                                        System.out.println(&quot;=== 分數分布直方圖 ===&quot;);<br />
                                                        int j;<br />
                                                        for (j = 10; j &gt;= 0; j--) {<br />
                                                        int y = 10;<br />
                                                        int z = 9;<br />
                                                        int count = 0;<br />
                                                        if (j == 10) { //如果j = 10 分數則落在100<br />
                                                        System.out.print(&quot;100 : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 100) {<br />
                                                        case 1:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 9) { //如果j = 9 分數則落在90-99<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 9:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 8) {//如果j = 8 分數則落在80-89<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 8:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 7) {//如果j = 7 分數則落在70-79<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 7:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 6) {//如果j = 6 分數則落在60-69<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 6:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 5) {//如果j = 5 分數則落在50-59<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 5:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 4) {//如果j = 4 分數則落在40-49<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 4:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 3) {//如果j = 3 分數則落在30-39<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 3:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 2) {//如果j = 2 分數則落在20-29<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 2:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 1) {//如果j = 9 分數則落在10-19<br />
                                                        System.out.print(j * y + &quot;-&quot; + (j * y + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 1:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        } else if (j == 0) {//如果j = 0 分數則落在0-9<br />
                                                        System.out.print(j + &quot;-&quot; + (j + z) + &quot; : &quot;);<br />
                                                        for (int p : person) {<br />
                                                        switch (p / 10) {<br />
                                                        case 0:<br />
                                                        count += 1;<br />
                                                        System.out.print(&quot;*&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        System.out.print(&quot;\n&quot;);<br />
                                                        }<br />
                                                        }<br />
                                                        }<br />
                                                        }<br />
                                                        ******************************<br />
                                                        <br />
                                                        <br />
                                                        圖片:<br />
                                                        <br />
                                                        <br />
                                                        ******************************<br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203383649"><img alt="Grade_Drop_Bit1" border="0" src="http://pic.pimg.tw/sktdeity/1349017793-3923729874.jpg" title="Grade_Drop_Bit1" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203383651"><img alt="Grade_Drop_Bit2" border="0" src="http://pic.pimg.tw/sktdeity/1349017793-2511766946.jpg" title="Grade_Drop_Bit2" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203383653"><img alt="Grade_Drop_Bit3" border="0" src="http://pic.pimg.tw/sktdeity/1349017794-2728693864.jpg" title="Grade_Drop_Bit3" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203383657"><img alt="Grade_Drop_Bit4" border="0" src="http://pic.pimg.tw/sktdeity/1349017794-3923974332.jpg" title="Grade_Drop_Bit4" /></a><br />
                                                        <a href="http://sktdeity.pixnet.net/album/photo/203383647"><img alt="Grade_Drop_Bit5" border="0" src="http://pic.pimg.tw/sktdeity/1349017792-970587630.jpg" title="Grade_Drop_Bit5" /></a><br />
                                                        ******************************</p>