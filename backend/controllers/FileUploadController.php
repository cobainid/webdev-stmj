<?php

namespace backend\controllers;

use Yii;
use common\models\ModuleFiles;
use common\models\ModuleFilesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FileUploadController implements the CRUD actions for ModuleFiles model.
 */
class FileUploadController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ModuleFiles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModuleFilesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModuleFiles model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ModuleFiles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ModuleFiles();

        if ($model->load(Yii::$app->request->post())) 
        {
            $dirPath = Yii::$app->basePath."/web/upload/";

            $model->image = UploadedFile::getInstances($model,'image');
            if($model->validate()){
                foreach ($model->image as $image) {
                    $upload = new ModuleFiles();
                    $upload->path = $model->title . "_" . random_int(1, 100) . "_" . time() . "." . $image->extension;
                    $upload->title = $model->title;
                    $upload->image = $image;
                    if ($upload->save(false)) {
                        $image->saveAs($dirPath . $upload->path);
                        Yii::$app->session->setFlash("success", "File uploaded.");
                    } else {
                        Yii::$app->session->setFlash("error", "Error, cant upload file.");
                    }
                } //end foreach
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash("error","Error when validation.");
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ModuleFiles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ModuleFiles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ModuleFiles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ModuleFiles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModuleFiles::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
