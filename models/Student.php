<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $student_name
 * @property string $dob
 * @property string $email
 * @property string $phone
 * @property string|null $national_id
 * @property string $password
 *
 * @property DepartmentStudent[] $departmentStudents
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_name', 'dob', 'email', 'phone', 'password'], 'required'],
            [['dob'], 'safe'],
            [['student_name'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 20],
            [['national_id'], 'string', 'max' => 16],
            [['password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_name' => 'Student Name',
            'dob' => 'Dob',
            'email' => 'Email',
            'phone' => 'Phone',
            'national_id' => 'National ID',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[DepartmentStudents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentStudents()
    {
        return $this->hasMany(DepartmentStudent::class, ['student_id' => 'student_id']);
    }
}
