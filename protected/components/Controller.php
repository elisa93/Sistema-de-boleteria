<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public function mailsend($to,$from,$subject,$message,$qr){
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, 'Proyecto ');
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to, "");
        $mail->AddAttachment('/home/fabricio/public_html/Sistema-de-boleteria/images/qr2.png');
        $mail->Send();
//        if(!$mail->Send()) {
//            echo "Mailer Error: " . $mail->ErrorInfo;
//        }else {
//            echo "Message sent!";
//        }
        $mail->ClearAddresses(); //clear addresses for next email sending
    }
}