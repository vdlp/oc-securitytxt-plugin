<?php

declare(strict_types=1);

namespace Vdlp\SecurityTxt\Models;

use October\Rain\Database\Model;

final class Settings extends Model
{
    /**
     * @var array
     */
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public string $settingsCode = 'vdlp_security_settings';
    public string $settingsFields = 'fields.yaml';
}
