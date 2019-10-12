<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $title
 * @property string $path
 */
class ModuleFiles extends \yii\db\ActiveRecord
{

    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['title', 'required'],
            [['title', 'path'], 'string', 'max' => 255],
            ['image' // variable
                , 'file' //type
                , 'skipOnEmpty'=>false // if file empty
                , 'extensions' => ['png','jpg','gif'] // allowed extension
                , 'maxSize' => (1024*1024*2)  // max size limit 2MB
                , 'maxFiles' => 10 // Limit multiple file upload
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'path' => 'Path',
        ];
    }

    public function formName()
    {
        return '';
    }
}
