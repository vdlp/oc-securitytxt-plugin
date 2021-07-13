<?php

declare(strict_types=1);

namespace Vdlp\SecurityTxt;

use System\Classes\PluginBase;
use Vdlp\SecurityTxt\Models;

final class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'security-txt',
            'description' => 'Define security policies for your October CMS website.',
            'author' => 'Van der Let & Partners',
            'icon' => 'icon-file-text-o',
        ];
    }

    public function registerPermissions(): array
    {
        return [
            'vdlp.securitytxt.access_settings' => [
                'label' => 'Manage security.txt settings',
                'tab' => 'SecurityTxt',
            ],
        ];
    }

    public function registerSettings(): array
    {
        return [
            'config' => [
                'label' => 'Security.txt',
                'description' => 'Manage contents of the security.txt file.',
                'icon' => 'icon-file-text-o',
                'class' => Models\Settings::class,
                'order' => 600,
                'permissions' => [
                    'vdlp.securitytxt.access_settings',
                ],
            ],
        ];
    }
}
