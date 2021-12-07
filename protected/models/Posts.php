<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property string $id
 * @property string $category_id
 * @property string $user_id
 * @property string $title
 * @property string $shortdesc
 * @property string $longdesc
 * @property string $thumbimg
 * @property string $image
 * @property integer $hit
 * @property string $url
 * @property integer $is_featured
 * @property string $status
 * @property string $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Posts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, user_id, title, shortdesc, longdesc, thumbimg, image, url, is_featured, status', 'required'),
			array('hit, is_featured', 'numerical', 'integerOnly'=>true),
			array('category_id, user_id, updated_by', 'length', 'max'=>20),
			array('url, status', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, user_id, title, shortdesc, longdesc, thumbimg, image, hit, url, is_featured, status, updated_by, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_id' => 'Category',
			'user_id' => 'User',
			'title' => 'Title',
			'shortdesc' => 'Short Description',
			'longdesc' => 'Description',
			'thumbimg' => 'Thumbimg',
			'image' => 'Image',
			'hit' => 'Hit',
			'url' => 'Url',
			'is_featured' => 'Is Featured',
			'status' => 'Status',
			'updated_by' => 'Updated By',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('shortdesc',$this->shortdesc,true);
		$criteria->compare('longdesc',$this->longdesc,true);
		$criteria->compare('thumbimg',$this->thumbimg,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('hit',$this->hit);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('is_featured',$this->is_featured);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Posts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
