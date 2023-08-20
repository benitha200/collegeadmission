<?php 
namespace app\controllers;

use yii\web\Controller;
use app\models\Department;
use app\models\Staff;
use app\models\Student;
use Yii;

class ApiController extends Controller
{
    public function actionIndex()
    {
        // This is the default action for your API
        return ['message' => 'Welcome to the API'];
    }

    public function actionGetDepartments()
    {
        // Retrieve department data from your database
        $departments = Department::find()->all();

        // Return the department data as JSON response
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $departments;
    }
    public function actionGetStaff(){
        $staff=Staff::find()->all();
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $staff;
    }
    public function actionGetStudent(){
        $student= Student::find()->all();
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $student;
    }

}

?>