<?php

namespace app\controllers;

use app\models\penilaianprodi;
use app\models\penilaianprodiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianprodiController implements the CRUD actions for penilaianprodi model.
 */
class PenilaianprodiController extends Controller
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
     * Lists all penilaianprodi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new penilaianprodiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single penilaianprodi model.
     * @param int $id_penilaian Id Penilaian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penilaian)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penilaian),
        ]);
    }

    /**
     * Creates a new penilaianprodi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new penilaianprodi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penilaian' => $model->id_penilaian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing penilaianprodi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penilaian Id Penilaian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penilaian)
    {
        $model = $this->findModel($id_penilaian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penilaian' => $model->id_penilaian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing penilaianprodi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penilaian Id Penilaian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penilaian)
    {
        $this->findModel($id_penilaian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the penilaianprodi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penilaian Id Penilaian
     * @return penilaianprodi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penilaian)
    {
        if (($model = penilaianprodi::findOne(['id_penilaian' => $id_penilaian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
