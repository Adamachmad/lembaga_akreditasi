<?php

namespace app\controllers;

use app\models\prodi;
use app\models\prodiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdiController implements the CRUD actions for prodi model.
 */
class ProdiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all prodi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new prodiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single prodi model.
     * @param int $id_prodi Id Prodi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_prodi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_prodi),
        ]);
    }

    /**
     * Creates a new prodi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new prodi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_prodi' => $model->id_prodi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing prodi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_prodi Id Prodi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_prodi)
    {
        $model = $this->findModel($id_prodi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_prodi' => $model->id_prodi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing prodi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_prodi Id Prodi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_prodi)
    {
        $this->findModel($id_prodi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the prodi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_prodi Id Prodi
     * @return prodi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_prodi)
    {
        if (($model = prodi::findOne(['id_prodi' => $id_prodi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}