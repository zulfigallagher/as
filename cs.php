<script>
<button onclick="var jsVar = "<?php 
$nomor = array("628331465245"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak , Saya Ingin Beli Atau Konsultasi Dulu Tentang *PRIMATON* Nya.";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>