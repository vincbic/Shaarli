<?php

declare(strict_types=1);

namespace Shaarli\Container;

use Shaarli\Bookmark\BookmarkServiceInterface;
use Shaarli\Config\ConfigManager;
use Shaarli\Feed\FeedBuilder;
use Shaarli\Formatter\FormatterFactory;
use Shaarli\History;
use Shaarli\Http\HttpAccess;
use Shaarli\Plugin\PluginManager;
use Shaarli\Render\PageBuilder;
use Shaarli\Render\PageCacheManager;
use Shaarli\Security\LoginManager;
use Shaarli\Security\SessionManager;
use Shaarli\Thumbnailer;
use Slim\Container;

/**
 * Extension of Slim container to document the injected objects.
 *
 * @property mixed[]                  $environment     $_SERVER automatically injected by Slim
 * @property string                   $basePath        Shaarli's instance base path (e.g. `/shaarli/`)
 * @property ConfigManager            $conf
 * @property SessionManager           $sessionManager
 * @property LoginManager             $loginManager
 * @property string                   $webPath
 * @property History                  $history
 * @property BookmarkServiceInterface $bookmarkService
 * @property PageBuilder              $pageBuilder
 * @property PluginManager            $pluginManager
 * @property FormatterFactory         $formatterFactory
 * @property PageCacheManager         $pageCacheManager
 * @property FeedBuilder              $feedBuilder
 * @property Thumbnailer              $thumbnailer
 * @property HttpAccess               $httpAccess
 */
class ShaarliContainer extends Container
{

}
