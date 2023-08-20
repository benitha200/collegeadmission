<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $department_id
 * @property string $department_name
 * @property string $department_description
 *
 * @property DepartmentStaff[] $departmentStaff
 * @property DepartmentStudent[] $departmentStudents
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name', 'department_description'], 'required'],
            [['department_name'], 'string', 'max' => 30],
            [['department_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'Department Name',
            'department_description' => 'Department Description',
        ];
    }

    /**
     * Gets query for [[DepartmentStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentStaff()
    {
        return $this->hasMany(DepartmentStaff::class, ['department_id' => 'department_id']);
    }

    /**
     * Gets query for [[DepartmentStudents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentStudents()
    {
        return $this->hasMany(DepartmentStudent::class, ['department_id' => 'department_id']);
    }
}
