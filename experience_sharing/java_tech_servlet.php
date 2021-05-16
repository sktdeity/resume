                                                        <p class="Standard" style="margin-left: 18pt; text-indent: -18pt;"><span lang="EN-US" style="font-family:新細明體">◎<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12pt"><strong><span style="font-family:新細明體">自我搭建</span></strong><strong><span lang="EN-US">xampp</span></strong><strong><span style="font-family:新細明體">環境下的第一隻</span></strong><strong><span lang="EN-US">Servlet </span></strong><strong><span style="font-family:新細明體">程式</span></strong> ,</span></p>

                                                        <p class="Standard" style="margin-left: 18pt; text-indent: -18pt;"><span lang="EN-US" style="font-family:新細明體">◎<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12pt"><strong><span style="font-family:新細明體">參照良葛格學習筆記&nbsp;</span></strong></span></p>

                                                        <p class="Standard" style="margin-left: 18pt; text-indent: -18pt;"><a href="http://caterpillar.onlyfun.net/Gossip/ServletJSP/FirstServlet.html">http://caterpillar.onlyfun.net/Gossip/ServletJSP/FirstServlet.html</a></p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <ol>
                                                            <li>1.<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><strong><span style="color:blue; font-family:新細明體">假設</span></strong><strong><span lang="EN-US" style="color:blue">xampp </span></strong><strong><span style="color:blue; font-family:新細明體">灌於</span></strong><strong><span lang="EN-US">c</span></strong><strong><span style="color:blue; font-family:新細明體">槽目錄下</span></strong><strong><span lang="EN-US" style="color:blue"> , </span></strong><strong><span style="color:blue; font-family:新細明體">則會在</span></strong><strong><span lang="EN-US" style="color:blue">c:\xampp</span></strong> , <strong><span style="color:red">tomcat </span></strong><strong><span style="color:red; font-family:新細明體">則在</span></strong><strong><span lang="EN-US" style="color:red">c:\xampp\tomcat </span></strong>,<strong><span style="color:green"> java</span></strong><strong><span style="color:green; font-family:新細明體">則在</span></strong><strong><span lang="EN-US" style="color:green">C:\Program Files\Java\jdk1.7.0_03</span></strong></li>
                                                        </ol>

                                                        <p class="Standard">&nbsp;</p>

                                                        <ol>
                                                            <li>2.<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:新細明體">將</span>C:\xampp\tomcat\lib <span style="font-family:新細明體">內的</span> <strong><span lang="EN-US" style="color:red">jsp-api.jar </span></strong><strong><span style="color:red; font-family:新細明體">、</span></strong><strong><span lang="EN-US" style="color:red">servlet-api.jar</span></strong>&nbsp;&nbsp;<span style="font-family:新細明體">複製至</span><strong><span lang="EN-US" style="color:blue">C:\Program Files\Java\jdk1.7.0_03\jre\lib\ext</span></strong> <span style="font-family:新細明體">下</span> . <span style="font-family:新細明體">或是環境變數</span>CLASSPATH <span style="font-family:新細明體">設定新增參數</span>&nbsp; <span style="font-family:新細明體">將以上兩個</span>jar<span style="font-family:新細明體">檔</span> <span style="font-family:新細明體">新增至</span>CLASSPATH<span style="font-family:新細明體">變數</span> ,<strong><span style="color:blue"> .;%CATALINA_HOME%\lib\jsp-api.jar;%CATALINA_HOME%\lib\servlet-api.jar OR .;c:\xampp\tomcat\lib\jsp-api.jar;c:\xampp\tomcat\lib\servlet-api.jar</span></strong></li>
                                                        </ol>

                                                        <p class="Standard">&nbsp;</p>

                                                        <ol>
                                                            <li>3.<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:新細明體">假設要建立第一隻</span>servlet <span style="font-family:新細明體">程式</span> <span style="font-family:新細明體">必須制定一個專案資料夾</span> , <span style="font-family:新細明體">我們手動於</span>C:\xampp\tomcat\webapps <span style="font-family:新細明體">下</span> <span style="font-family:新細明體">新增一個名為</span>&nbsp;&nbsp;&nbsp;&nbsp; myServlet <span style="font-family:新細明體">的資料夾</span> .<span style="font-family:新細明體">並於</span><strong><span lang="EN-US" style="color:red">C:\xampp\apache\conf\extra</span></strong><span style="font-family:新細明體">內</span> <span style="font-family:新細明體">開啟</span> <strong><span lang="EN-US" style="color:red">httpd-ajp.conf </span></strong><span style="font-family:新細明體">這個檔案</span> , <span style="font-family:新細明體">用</span>notpad++ <span style="font-family:新細明體">開啟即可</span> , <span style="font-family:新細明體">於空白位置新增</span> <strong><span lang="EN-US" style="color:blue">ProxyPass /myServlet ajp://127.0.0.1:8009/myServlet smax=0 ttl=60 retry=5</span></strong> <span style="font-family:新細明體">這行</span> <span style="font-family:新細明體">之後</span> <span style="font-family:新細明體">存檔關閉</span> .</li>
                                                        </ol>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;<img alt="myServlet -&gt; http-ajp-conf" border="0" src="http://pic.pimg.tw/sktdeity/1340599933-771754065.jpg" title="myServlet -&gt; http-ajp-conf" /> &nbsp;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <ol>
                                                            <li>4.<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>myServlet <span style="font-family:新細明體">目錄結構設定</span> <span style="font-family:新細明體">如下</span> :</li>
                                                        </ol>

                                                        <p class="Standard" style="margin-left: 63pt;"><img alt="myServlet -&gt; WEB-INF" border="0" src="http://pic.pimg.tw/sktdeity/1340603051-2428389416.jpg" title="myServlet -&gt; WEB-INF" /> &nbsp;&nbsp; &nbsp;&nbsp;</p>

                                                        <p class="Standard" style="margin-left: 63pt;">&nbsp;</p>

                                                        <ol>
                                                            <li>5.<span style="font-family:times new roman; font-size:7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:新細明體">撰寫第一隻</span>Servlet <span style="font-family:新細明體">程式</span> , <span style="font-family:新細明體">命名為</span> HelloServlet.java <span style="font-family:新細明體">放於</span><strong> <span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF\src\onlyfun\caterpillar </span></strong><span style="font-family:新細明體">下</span> ,</li>
                                                        </ol>

                                                        <p class="Standard" style="margin-left: 21pt;"><span style="font-family:新細明體">檔案路徑為</span><strong><span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF\src\onlyfun\caterpillar\HelloServlet.java&nbsp;</span></strong><strong><span lang="EN-US" style="color:red">,</span></strong></p>

                                                        <p class="Standard" style="margin-left: 21pt;"><strong><span lang="EN-US" style="color:red"><span style="color:#0000ff">HelloServlet.class </span></span></strong><strong><span style="color:red; font-family:新細明體">檔案麻煩透過命令提示字元 (開始-&gt;執行-&gt;輸入 cmd ) 用dos -&gt; cd指令 切換至</span><span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF\src\onlyfun\caterpillar\ </span></strong><strong><span style="color:red; font-family:新細明體">目錄下</span><span lang="EN-US" style="color:red">&nbsp; , </span></strong><strong><span style="color:red; font-family:新細明體">打入</span><span lang="EN-US" style="color:blue">javac HelloServlet.java </span></strong><strong><span style="color:red; font-family:新細明體">指令</span></strong><strong><span style="color:red; font-family:新細明體">後</span></strong><strong><span style="color:red; font-family:新細明體">將編譯好的<span style="color:#0000ff">HelloServlet.</span></span><span lang="EN-US" style="color:#0000ff">class </span></strong><strong><span style="color:red; font-family:新細明體">檔案</span></strong><strong><span style="color:red; font-family:新細明體">複製至</span><span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF\classes\onlyfun\caterpillar\ </span></strong><strong><span style="color:red; font-family:新細明體">目錄下</span><span lang="EN-US" style="color:red">&nbsp;</span></strong></p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">package onlyfun.caterpillar;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">import java.io.*;</p>

                                                        <p class="Standard">import javax.servlet.*;</p>

                                                        <p class="Standard">import javax.servlet.http.*;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">public class HelloServlet extends HttpServlet {</p>

                                                        <p class="Standard">public void doGet(HttpServletRequest req,</p>

                                                        <p class="Standard">HttpServletResponse res)</p>

                                                        <p class="Standard">throws ServletException, IOException {</p>

                                                        <p class="Standard">res.setContentType(&quot;text/html&quot;);</p>

                                                        <p class="Standard">PrintWriter out = res.getWriter();</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">out.println(&quot;&lt;html&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;head&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;title&gt;Hello!Servlet!&lt;/title&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;/head&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;body&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;h1&gt;&lt;b&gt;Hello!Servlet!&lt;/b&gt;&lt;/h1&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;/body&gt;&quot;);</p>

                                                        <p class="Standard">out.println(&quot;&lt;/html&gt;&quot;);</p>

                                                        <p class="Standard">}</p>

                                                        <p class="Standard">}</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;<img alt="myServlet -&gt; HelloServlet.java" border="0" src="http://pic.pimg.tw/sktdeity/1340602810-3760271593.jpg" title="myServlet -&gt; HelloServlet.java" /> &nbsp;&nbsp;&nbsp;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <ol>
                                                            <li><strong>6.<span style="font-family:times new roman; font-size:7pt; font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong><span style="font-family:新細明體">撰寫第一隻</span>web.xml <span style="font-family:新細明體">設定檔</span> <span style="font-family:新細明體">放於</span><strong><span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF </span></strong><strong><span style="color:red; font-family:新細明體">下</span><span lang="EN-US" style="color:red">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong></li>
                                                        </ol>

                                                        <p class="Standard" style="text-indent: 21pt;"><strong><span style="color:red; font-family:新細明體">檔案路徑為</span><span lang="EN-US" style="color:red">C:\xampp\tomcat\webapps\myServlet\WEB-INF\web.xml</span></strong></p>

                                                        <p class="Standard" style="text-indent: 21pt;">&nbsp;</p>

                                                        <p class="Standard">&lt;?xml version=&quot;1.0&quot; encoding=&quot;ISO-8859-1&quot;?&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&lt;web-app xmlns=&quot;http://java.sun.com/xml/ns/j2ee&quot;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; xsi:schemaLocation=&quot;http://java.sun.com/xml/ns/j2ee</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; http://java.sun.com/xml/ns/j2ee/web-app_2_4.xsd&quot;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; version=&quot;2.4&quot;&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;description&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; My Servlet Examples.</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;/description&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;display-name&gt;Servlet Examples&lt;/display-name&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;servlet&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;servlet-name&gt;hello&lt;/servlet-name&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;servlet-class&gt;onlyfun.caterpillar.HelloServlet&lt;/servlet-class&gt; &nbsp;<strong><span style="color:#ff0000">//<span style="font-family:新細明體">記得</span>&lt;servlet-class&gt;&lt;/servlet-class&gt;<span style="font-family:新細明體">要對應</span>package<span style="font-family:新細明體">路徑</span></span></strong></p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;/servlet&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;servlet-mapping&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;servlet-name&gt;hello&lt;/servlet-name&gt;</p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;url-pattern&gt;/helloServlet&lt;/url-pattern&gt; //&lt;url-pattern&gt;&lt;/url-pattern&gt; <strong><span style="color:#ff0000">//</span><span style="color:#ff0000"><span style="font-family:新細明體"><span style="color:#ff0000">對</span>應請求路徑</span><span lang="EN-US" style="background-color:white; font-size:10.5pt">http://localhost:8080/</span><span lang="EN-US" style="background-color:white; font-size:10.5pt">myServlet</span><span lang="EN-US" style="background-color:white; font-size:10.5pt">/hello</span><span lang="EN-US" style="background-color:white; font-size:10.5pt">Servlet</span></span></strong></p>

                                                        <p class="Standard">&nbsp;&nbsp;&nbsp; &lt;/servlet-mapping&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&lt;/web-app&gt;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <p class="Standard">&nbsp;<img alt="myServlet -&gt; web.xml" border="0" src="http://pic.pimg.tw/sktdeity/1340599830-1053074291.jpg" title="myServlet -&gt; web.xml" /> &nbsp;</p>

                                                        <p class="Standard">&nbsp;</p>

                                                        <h1 style="margin-left: 0cm; text-indent: 0cm;"><span lang="EN-US" style="font-family:times new roman; font-size:12pt">7.<span style="font-size:7pt; font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12pt; font-weight:normal">都設定及撰寫完成後啟用重新啟用tomcat 輸入網址如上</span><span lang="EN-US" style="background-color:white; color:red; font-size:10.5pt"><a href="http://localhost:8080/myServlet/helloServlet">http://localhost:8080/myServlet/helloServlet</a></span><strong><span lang="EN-US" style="background-color:white; color:red; font-size:10.5pt"> &nbsp;</span></strong><span style="background-color:white; color:red; font-size:10.5pt; font-weight:normal"><strong>即會 show 出</strong> &nbsp;</span><strong><span lang="EN-US" style="color:#000000; font-family:times new roman; font-size:12pt">Hello!Servlet!</span></strong></h1>

                                                        <p class="Standard">&nbsp;<img alt="myServlet -&gt; helloServlet" border="0" src="http://pic.pimg.tw/sktdeity/1340599990-2422255851.jpg" title="myServlet -&gt; helloServlet" /> &nbsp;</p>

                                                        <p class="Standard">&nbsp;</p>