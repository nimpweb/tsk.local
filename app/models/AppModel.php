<?php

namespace app\models;

use core\App;
use core\mvc\Model;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class AppModel extends Model {

    public static function loadParams() {
        $res = \R::findAll('params');
        $arr = [];
        if ($res && !empty($res)) {
            foreach ($res as $k => $v) {
                $arr[$v['param_name']]['value'] = $v['param_value'];
                $arr[$v['param_name']]['description'] = $v['description'];
            }
        }
        return $arr;
    }

    public static function sendEmail($params = []) {
//        debug(App::$app->getProperties(), 1);
//        $params['smtp_email'] =  App::$app->getProperty('smtp_email');
        $params['smtp_email'] = 'nimpweb@yandex.ru';
        $params['smtp_host'] =  App::$app->getProperty('smtp_host');
        $params['smtp_port'] =  App::$app->getProperty('smtp_port');
        $params['smtp_protocol'] =  App::$app->getProperty('smtp_protocol');
        $params['smtp_login'] =  App::$app->getProperty('smtp_login');
        $params['smtp_password'] =  App::$app->getProperty('smtp_password');
        $params['shop_name'] =  App::$app->getProperty('shop_name');

        return self::sendMailPrototype($params);

    }

    private static function sendMailPrototype($params = []) {
        if (count($params) > 0) { extract($params); } else { return false; }
        if (is_array($email_list) && count($email_list) === 0) return false;
        if (!isset($shop_name)) return false;

        // Create transport
        if (!isset($smtp_protocol)) { $transport = (new Swift_SmtpTransport($smtp_host, $smtp_port)); }
        else { $transport = (new Swift_SmtpTransport($smtp_host, $smtp_port, $smtp_protocol)); }
        $transport->setUsername($smtp_login)->setPassword($smtp_password);

        $mailer = new Swift_Mailer($transport);
        if (isset($templateFileName)) {
            ob_start();
            require APP . '/views/mail/'.$templateFileName;
            $body = ob_get_clean();
        }
        if (!isset($body)) $body = "";

        if (!isset($subject)) {
            $subject = "Получено сообщение на " . $shop_name;
        }

        $message = (new Swift_Message($subject))
            ->setFrom([$smtp_email => $shop_name])
            ->setTo($email_list)
            ->setBody($body, 'text/html')
        ;

        if (isset($attachFileList) && !empty($attachFileList)) {
            foreach($attachFileList as $attachFile) {
                $message->attach(\Swift_Attachment::fromPath($attachFile));
            }
        }
        return  $mailer->send($message);

        /*


 * */
    }

}