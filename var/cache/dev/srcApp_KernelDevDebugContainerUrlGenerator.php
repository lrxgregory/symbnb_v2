<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'account_login' => [[], ['_controller' => 'App\\Controller\\AccountController::login'], [], [['text', '/login']], [], []],
        'account_logout' => [[], ['_controller' => 'App\\Controller\\AccountController::logout'], [], [['text', '/logout']], [], []],
        'account_register' => [[], ['_controller' => 'App\\Controller\\AccountController::register'], [], [['text', '/register']], [], []],
        'account_profile' => [[], ['_controller' => 'App\\Controller\\AccountController::profile'], [], [['text', '/account/profile']], [], []],
        'account_password' => [[], ['_controller' => 'App\\Controller\\AccountController::updatePassword'], [], [['text', '/account/password-update']], [], []],
        'account_index' => [[], ['_controller' => 'App\\Controller\\AccountController::myAccount'], [], [['text', '/account']], [], []],
        'account_bookings' => [[], ['_controller' => 'App\\Controller\\AccountController::bookings'], [], [['text', '/account/bookings']], [], []],
        'ads_index' => [[], ['_controller' => 'App\\Controller\\AdController::index'], [], [['text', '/ads']], [], []],
        'ads_create' => [[], ['_controller' => 'App\\Controller\\AdController::create'], [], [['text', '/ads/new']], [], []],
        'ads_edit' => [['slug'], ['_controller' => 'App\\Controller\\AdController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/ads']], [], []],
        'ads_show' => [['slug'], ['_controller' => 'App\\Controller\\AdController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/ads']], [], []],
        'ads_delete' => [['slug'], ['_controller' => 'App\\Controller\\AdController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/ads']], [], []],
        'admin_account_login' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::login'], [], [['text', '/admin/login']], [], []],
        'admin_account_logout' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::logout'], [], [['text', '/admin/logout']], [], []],
        'admin_ads_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminAccountController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ads']], [], []],
        'admin_ads_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminAccountController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ads']], [], []],
        'admin_ads_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminAdController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/ads']], [], []],
        'admin_booking_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/bookings']], [], []],
        'admin_booking_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminBookingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bookings']], [], []],
        'admin_booking_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminBookingController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bookings']], [], []],
        'admin_comment_index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/comments']], [], []],
        'admin_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
        'admin_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
        'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin']], [], []],
        'booking_create' => [['slug'], ['_controller' => 'App\\Controller\\BookingController::book'], [], [['text', '/book'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/ads']], [], []],
        'booking_show' => [['id'], ['_controller' => 'App\\Controller\\BookingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/booking']], [], []],
        'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], []],
        'user_show' => [['slug'], ['_controller' => 'App\\Controller\\UserController::index'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/user']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
