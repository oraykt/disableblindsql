$baglanti = mysql_connect("localhost","root","") or die("Olmadi :(");
$db = mysql_select_db("bwapp") or die("Hic Olmadi");
$id1 = @$_GET["id"];
$id1 = strtolower($id1); //Burada UniOn Vs Şeklinde Engelledik
$id1 = str_replace("union","",$id1); //union engelle
$id1 = str_replace("select","",$id1); //select engelle
$id1 = str_replace("from","",$id1); //from engelle
$id1 = str_replace("/**/","",$id1); // /**/ engelle
$id1 = str_replace(" ","",$id1); // " " engelle
$id1 = str_replace("'","",$id1); // ' engelle
$sql1 = mysql_query("SELECT * FROM users WHERE id=".$id1,$baglanti); // Sorgu Burada Oluşturuldu
$snc = mysql_fetch_array($sql1); // Sorgu Sonucu Db'den Çekildi
print_r($snc); // Sonuç Ekrana Yazıldı
mysql_close($baglanti); // Veritabanı Bağlantısı Kapatıldı