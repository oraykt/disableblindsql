# disableblindsql

<br>
$baglanti = mysql_connect("localhost","root","") or die("Olmadi :(");<br>
$db = mysql_select_db("bwapp") or die("Hic Olmadi");<br>
$id1 = @$_GET["id"];<br>
$id1 = strtolower($id1); //Burada UniOn Vs Şeklinde Engelledik<br>
$id1 = str_replace("union","",$id1); //union engelle<br>
$id1 = str_replace("select","",$id1); //select engelle<br>
$id1 = str_replace("from","",$id1); //from engelle<br>
$id1 = str_replace("/**/","",$id1); // /**/ engelle<br>
$id1 = str_replace(" ","",$id1); // " " engelle<br>
$id1 = str_replace("'","",$id1); // ' engelle<br>
$sql1 = mysql_query("SELECT * FROM users WHERE id=".$id1,$baglanti); // Sorgu Burada Oluşturuldu<br>
$snc = mysql_fetch_array($sql1); // Sorgu Sonucu Db'den Çekildi<br>
print_r($snc); // Sonuç Ekrana Yazıldı<br>
mysql_close($baglanti); // Veritabanı Bağlantısı Kapatıldı<br>
