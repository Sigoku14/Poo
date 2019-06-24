<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
require_once '../views/Information_disclosure.php';
date_default_timezone_set('Asia/Tokyo');
if (!empty($_POST)) {
    require_once '../models/class/mpdf60/mpdf.php';
    // エラーを消す（処理を止めないため
    error_reporting(0);
    // PDFを作成するクラス
    $mpdf = new MPDF('ja', 'A4');
    // PDFにCSSを読み込む
    $mpdf->WriteHTML(file_get_contents('../css/pdf_style.css'), 1);
    // DBから全件取得$pdfに保存
    // $dbh = new PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS);
    // $pdf = $dbh->prepare('SELECT * FROM m_news WHERE id = :pdf');
    // $pdf->bindValue(':pdf', $_GET['pdf']);
    // $pdf->execute();
    // $dbh = null;
    // $data = $pdf->fetchAll();
    $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
    $stmt = $dbh->prepare('SELECT * FROM picture WHERE user_id = ' . $login->getUserId() . ' ORDER BY save_datetime DESC');
    //プレースホルダに代入
    // $stmt->bindValue(':mail', $this->mail);
    //クエリー実行
    $stmt->execute();
    $data = $stmt->fetchAll();
    // test_var($data);
    // PDFに$pdfの内容を保存
    $pdf_content = '';
    // $pdf_content .= '<p><a href="Information_disclosure.php">戻る</a></p>';
    $pdf_content .= '<p class="">氏名：　　' . $login->getUserName() . '</p>';
    $pdf_content .= '<p class="">メール：　' . $login->getMail() . '</p>';
    $pdf_content .= '<h1 class="center">体調情報</h1>';
    $pdf_content .= '<h2>1ヵ月の体調情報</h2>';
    foreach ($data as $key => $val) {
        $pdf_content .= '<div class="data" style="background-color:rgb('.$data[$key]['red'].', '.$data[$key]['green'].', '.$data[$key]['blue'].')">';
        $pdf_content .= '<p class="white">' . $val['save_datetime'] . '</p>';
        $pdf_content .= '<p><img src="' . $val['file_path'] . '"></p>';
        $pdf_content .= '</div>';
    }
    $pdf_content .= '';
    $mpdf->WriteHTML($pdf_content);
    // pdfダウンロード
    // $mpdf->Output('pdf.pdf', 'd');
    $mpdf->Output();
}
