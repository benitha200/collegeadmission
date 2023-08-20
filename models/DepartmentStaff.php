<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department_staff".
 *
 * @property int $id
 * @property int $department_id
 * @property int $staff_id
 *
 * @property Department $department
 * @property Staff $staff
 */
class DepartmentStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'staff_id'], 'required'],
            [['department_id', 'staff_id'], 'integer'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::class, 'targetAttribute' => ['department_id' => 'department_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::class, 'targetAttribute' => ['staff_id' => 'staff_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'Department ID',
            'staff_id' => 'Staff ID',
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
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::class, ['staff_id' => 'staff_id']);
    }
}
