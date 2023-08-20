<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $staff_id
 * @property string $staff_name
 * @property string $email
 * @property string $phone
 * @property string $password
 *
 * @property DepartmentStaff[] $departmentStaff
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_name', 'email', 'phone', 'password'], 'required'],
            [['staff_name', 'email', 'password'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'staff_name' => 'Staff Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[DepartmentStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentStaff()
    {
        return $this->hasMany(DepartmentStaff::class, ['staff_id' => 'staff_id']);
    }
}
