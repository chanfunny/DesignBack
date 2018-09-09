<?
namespace app\controllers;

use app\models\TestModel;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionIndex()
	{
        $a = \Yii::$app->request->get('usersname');
        echo $a;
        exit;
        $tests = (new \yii\db\Query())
            ->from('test')
            ->all();  

        return \yii\helpers\Json::encode($tests);
	}


}