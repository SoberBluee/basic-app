<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Application;

class ApplicationController extends Controller
{
/**
     * Creates a new Application model.
     */
    public function actionCreate()
    {
        $model = new Application();

        // Render the create form
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Application model.
     * @param int $id
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id); // Loads existing model

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Redirect after successful update
            return $this->redirect(['view', 'id' => $model->id]);
        }

        // Render the update form with existing data
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Application model by ID.
     */
    protected function findModel($id)
    {
        if (($model = Application::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested application does not exist.');
    }
}
