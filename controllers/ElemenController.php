<?php

namespace app\controllers;

use app\models\elemen;
use app\models\elemenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ElemenController implements the CRUD actions for elemen model.
 */
class ElemenController extends Controller
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
     * Lists all elemen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new elemenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single elemen model.
     * @param int $id_elemen Id Elemen
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_elemen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_elemen),
        ]);
    }

    /**
     * Creates a new elemen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new elemen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_elemen' => $model->id_elemen]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing elemen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_elemen Id Elemen
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_elemen)
    {
        $model = $this->findModel($id_elemen);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_elemen' => $model->id_elemen]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing elemen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_elemen Id Elemen
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_elemen)
    {
        $this->findModel($id_elemen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the elemen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_elemen Id Elemen
     * @return elemen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_elemen)
    {
        if (($model = elemen::findOne(['id_elemen' => $id_elemen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
