<?php

namespace app\controllers;

use app\models\indikator;
use app\models\indikatorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IndikatorController implements the CRUD actions for indikator model.
 */
class IndikatorController extends Controller
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
     * Lists all indikator models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new indikatorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single indikator model.
     * @param int $id_indikator Id Indikator
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_indikator)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_indikator),
        ]);
    }

    /**
     * Creates a new indikator model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new indikator();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_indikator' => $model->id_indikator]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing indikator model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_indikator Id Indikator
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_indikator)
    {
        $model = $this->findModel($id_indikator);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_indikator' => $model->id_indikator]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing indikator model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_indikator Id Indikator
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_indikator)
    {
        $this->findModel($id_indikator)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the indikator model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_indikator Id Indikator
     * @return indikator the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_indikator)
    {
        if (($model = indikator::findOne(['id_indikator' => $id_indikator])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
