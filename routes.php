<?php

declare(strict_types=1);

use Illuminate\Http;
use Illuminate\Routing;
use System\Behaviors\SettingsModel;
use Vdlp\SecurityTxt\Models;

/** @var Routing\Router $router */
$router = resolve(Routing\Router::class);

$router->get('/.well-known/security.txt', static function () {
    /** @var SettingsModel $settings */
    $settings = Models\Settings::instance();

    $contents = sprintf(
        "Contact: %s\n",
        $settings->getSettingsValue('contact')
    );

    if ($settings->getSettingsValue('encryption')) {
        $contents .= sprintf(
            "Encryption: %s\n",
            $settings->getSettingsValue('encryption')
        );
    }

    if ($settings->getSettingsValue('acknowledgements')) {
        $contents .= sprintf(
            "Acknowledgements: %s\n",
            $settings->getSettingsValue('acknowledgements')
        );
    }

    if ($settings->getSettingsValue('permission')) {
        $contents .= sprintf(
            "Permission: %s\n",
            $settings->getSettingsValue('permission')
        );
    }

    if ($settings->getSettingsValue('policy')) {
        $contents .= sprintf(
            "Policy: %s\n",
            $settings->getSettingsValue('policy')
        );
    }

    if ($settings->getSettingsValue('signature')) {
        $contents .= sprintf(
            "Signature: %s\n",
            $settings->getSettingsValue('signature')
        );
    }

    if ($settings->getSettingsValue('hiring')) {
        $contents .= sprintf(
            "Hiring: %s\n",
            $settings->getSettingsValue('hiring')
        );
    }

    return new Http\Response($contents, 200, [
        'Content-Type' => 'text/plain'
    ]);
});

$router->redirect('/security.txt', '/.well-known/security.txt');
