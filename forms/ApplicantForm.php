<?php

namespace app\forms;

use yii\base\Model;

/**
 * @author Alexander Kononenko <contact@hauntd.me>
 * @package app\forms
 */
class ApplicantForm extends Model
{
    /**
     * Boat types
     */
    const TYPE_SAIL = 'Sail';
    const TYPE_POWER = 'Power';

    /**
     * Hull types
     */
    const HULL_MONOHULL = 'Monohull';
    const HULL_MULTIHULL = 'Multihull';

    /**
     * Gender types
     */
    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';

    /** @var string */
    public $applicantFirstName;

    /** @var string */
    public $applicantLastName;

    /** @var string */
    public $applicantAddress;

    /** @var string */
    public $boatName;

    /** @var string */
    public $boatNationality;

    /** @var integer */
    public $boatRegisteredTonnage;

    /** @var string */
    public $boatColor;

    /** @var string */
    public $boatPortOfRegistry;

    /** @var string */
    public $boatRegistrationNumber;

    /** @var string */
    public $boatRegistrationDate;

    /** @var float */
    public $boatLength;

    /** @var string */
    public $boatLastPortCall;

    /** @var string */
    public $boatNextPortCall;

    /** @var string */
    public $boatType;

    /** @var string */
    public $boatHull;

    /** @var string */
    public $ownerFirstName;

    /** @var string */
    public $ownerLastName;

    /** @var string */
    public $ownerAddress;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['applicantFirstName', 'applicantLastName', 'applicantAddress',
                'boatName', 'boatNationality', 'boatRegisteredTonnage', 'boatColor', 'boatPortOfRegistry',
                'boatRegistrationNumber', 'boatRegistrationDate', 'boatLength',
                'boatLastPortCall', 'boatNextPortCall', 'boatType', 'boatHull',
                'ownerFirstName', 'ownerLastName', 'ownerAddress'
            ], 'required'],
            [['boatType'], 'in', 'range' => [self::TYPE_POWER, self::TYPE_SAIL]],
            [['boatHull'], 'in', 'range' => [self::HULL_MONOHULL, self::HULL_MULTIHULL]],
            [['boatLength', 'boatRegisteredTonnage'], 'number'],
            [['boatRegistrationDate'], 'date'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'applicantFirstName' => 'First Name',
            'applicantLastName' => 'Last Name',
            'applicantAddress' => 'Address',
            'boatName' => 'Name of a Boat',
            'boatNationality' => 'Nationality',
            'boatRegisteredTonnage' => 'Registered Tonnage (tons)',
            'boatColor' => 'Color',
            'boatPortOfRegistry' => 'Port of Registry',
            'boatRegistrationNumber' => 'Registration Number',
            'boatRegistrationDate' => 'Date of Registration',
            'boatLength' => 'Length (feet)',
            'boatLastPortCall' => 'Last Port Call',
            'boatNextPortCall' => 'Next Port Call',
            'boatType' => 'Type',
            'boatHull' => 'Hull',
            'ownerFirstName' => 'First Name',
            'ownerLastName' => 'Last Name',
            'ownerAddress' => 'Address',
        ];
    }
}
