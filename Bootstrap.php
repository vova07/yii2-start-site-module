<?php

namespace vova07\site;

use yii\base\BootstrapInterface;

/**
 * Gallery module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module URL rules.
        $app->getUrlManager()->addRules(
            [
                '' => 'site/default/index',
                '<_a:(about|contacts|captcha)>' => 'site/default/<_a>'
            ]
        );

        // Add module I18N category.
        if (!isset($app->i18n->translations['vova07/site']) && !isset($app->i18n->translations['vova07/*'])) {
            $app->i18n->translations['vova07/site'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@vova07/site/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'vova07/site' => 'site.php',
                ]
            ];
        }
    }
}
