<?php
//phpinfo();
// Include router class
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// require   'Router.php';
// require_once 'C:/Users/woody/vendor/autoload.php';
// //echo "hi";
// // Add base route (startpage)

// // 일반적인 홈경로
// Router::add('get','/',function(){
//         echo '라우터 홈입니다.dd';
//     });

// //  static html file 테스트
// Router::add('get','/phpmailer',function(){

//     $mail = new PHPMailer();

//     $mail->CharSet = 'UTF-8';
// //Tell PHPMailer to use SMTP
//     $mail->isSMTP();
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER; // 디버그 모드, DEBUG_OFF 시 출력 없음

//     $mail->Host = 'smtp.gmail.com';
//     //Gmail 이용

//     $mail->Port = 587;
//     //SMTP 고정 포트

//     //encrypte 메커니즘 세팅
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// //SMTP AUTH 사용
//     $mail->SMTPAuth = true;

// // gmail 계정주소명
//     $mail->Username = 'ㅁㅁㅁㅁㅁㅁ@gmail.com';

// // gmail 패스워드
//     $mail->Password = '패스워드값';

// //  보내는 사람 주소, 이름 세팅 - 보내는사람 주소은 추가 세팅을 해주지않으면 Username의 계정
//     $mail->setFrom('ㅁㅁㅁㅁㅁㅁ@gmail.com', 'ㅁㅁㅁㅁ');

//     $email = 'mulbang0@naver.com';
// // 내가 보낼 주소, 이름(선택)
//     $mail->addAddress($email, null);
// //        $mail->addCustomHeader('Content-Type', 'text/plain;charset=utf-8');

//     // 메일 제목, 내용 세팅
//     $mail->Subject = '메일 제목';
//     $mail->Body = "
//     <b>메일 내용</b>
//      <br/>
//      <br/>
//     <a target='_self' href='' >링크</a>
//     ";
//     $mail->isHTML(true);
//     if (!$mail->send()) {
//         echo 'Mailer Error: ' . $mail->ErrorInfo;
//     } else {
//         echo 'Message sent';
//     }



// });

?>