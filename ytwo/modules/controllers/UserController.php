<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/15
 * Time: 14:04
 */
namespace app\modules\controllers;
//use app\models\Msg;
//use Yii;
use yii\web\Controller;
//use app\models\Follow;
//use app\models\YiiUser;
//use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class UserController extends Controller{
    public $layout  = 'layout';
    /**
     * @用户授权规则
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login'],
//                        'allow' => true,
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'actions' => ['sendmsg','msg','read','mysend','reply','pull','goodsList'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//        ];
//    }

    /**
     * @goodsList商品列表
     */
    public function actionUser_list()
    {
        $this->layout='layout';
        return $this->render('userList');
    }
    public function  actionMysend(){
        echo 111111;exit;
        $model=new Msg();
        $uid=Yii::$app->user->getId();
        $count=$model->find()->where(['fid'=>$uid])->count();
        $page=new Pagination(['defaultPageSize'=>5,'totalCount'=>$count]);
        $msgs=$model->find()->where(['fid'=>$uid])->orderBy('send_time desc')->offset($page->offset)->limit($page->limit)->all();
        return $this->render('mysend',['page'=>$page,'msgs'=>$msgs]);


    }
    public function actionAaa(){
        echo 222;exit;
    }
}