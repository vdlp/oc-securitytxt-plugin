<?php

declare(strict_types=1);

namespace Vdlp\SecurityTxt\Models;

use October\Rain\Database\Model;

/**
 * Class Settings
 *
 * @package Vdlp\SecurityTxt\Models
 */
class Settings extends Model
{
    /**
     * @var array
     */
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    /**
     * @var string
     */
    public $settingsCode = 'vdlp_security_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}
