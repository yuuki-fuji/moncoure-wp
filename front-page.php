<?php get_header(); ?>

<h2>Demoです</h2>

<?php
// リファラ情報を取得
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '直接アクセス';

echo "このページに遷移してきたURL: " . htmlspecialchars($referer, ENT_QUOTES, 'UTF-8');
?>



<?php get_footer(); ?>
