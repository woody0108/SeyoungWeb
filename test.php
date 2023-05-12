<?php
  // composer로 다운로드된 라이브러리 참조하기
  require_once 'C:/Users/woody/vendor/autoload.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  // PHPMailer 선언
  $mail = new PHPMailer(true);
  // 디버그 모드(production 환경에서는 주석 처리한다.)
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  // SMTP 서버 세팅
  $mail->isSMTP();
  try {
    // 구글 smtp 설정
    $mail->Host = "smtp.gmail.com";
    // SMTP 암호화 여부
    $mail->SMTPAuth = true;
    // SMTP 포트
    $mail->Port = 465;
    // SMTP 보안 프초트콜
    $mail->SMTPSecure = "ssl";
    // gmail 유저 아이디
    $mail->Username = "woody08432@gmail.com";
    // gmail 패스워드
    $mail->Password ="jeon0108!";
    // 인코딩 셋
    $mail->CharSet = 'utf-8'; 
    $mail->Encoding = "base64";
    
    // 보내는 사람
    $mail->setFrom('woody08432@gmail.com', 'Tester');
    // 받는 사람
    $mail->AddAddress("woody08432@gmail.com", "wb"); 
    
    // 본문 html 타입 설정
    $mail->isHTML(true);
    // 제목
    $mail->Subject = 'Here is the subject';
    // 본문 (HTML 전용)
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // 본문 (non-HTML 전용)
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->Send();
    echo "Message has been sent";
  } catch (phpmailerException $e) {
    echo $e->errorMessage();
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>