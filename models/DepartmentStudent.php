<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department_student".
 *
 * @property int $id
 * @property int $student_id
 * @property int $department_id
 *
 * @property Department $department
 * @property Student $student
 */
class DepartmentStudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'department_id'], 'required'],
            [['student_id', 'department_id'], 'integer'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::class, 'targetAttribute' => ['student_id' => 'student_id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::class, 'targetAttribute' => ['department_id' => 'department_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'department_id' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::class, ['department_id' => 'department_id']);
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::class, ['student_id' => 'student_id']);
    }
}
