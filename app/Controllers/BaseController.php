<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    protected $data = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $configModel = new \App\Models\GeneralSettingsModel();
        $config = $configModel->first();
        $this->data['site_name'] = $config['site_name'] ?? '';
        $this->data['site_email'] = $config['site_email'] ?? '';
        $this->data['site_phone'] = $config['site_phone'] ?? '';
        $this->data['site_logo'] = $config['site_logo'] ?? '';
        $this->data['site_main_description'] = $config['main_description'] ?? '';
        $this->data['site_main_keywords'] = $config['main_keywords'] ?? '';
        $this->data['site_whatsapp'] = $config['whatsapp'] ?? '';
        $this->data['site_address'] = $config['address'] ?? '';
        $this->data['site_facebook'] = $config['facebook'] ?? '';
        $this->data['site_instagram'] = $config['instagram'] ?? '';
        $this->data['site_x'] = $config['x'] ?? '';
        $this->data['site_pinterest'] = $config['pinterest'] ?? '';
        $this->data['site_linkedin'] = $config['linkedin'] ?? '';
        $this->data['site_created_at'] = $config['created_at'] ?? '';
        $this->data['site_updated_at'] = $config['updated_at'] ?? '';
        $this->data['site_bombeo_1_10'] = $config['bombeo_1_10'] ?? '';
        $this->data['site_bombeo_1mc'] = $config['bombeo_1mc'] ?? '';

    }
    protected function render($view, $data = [])
    {
        return view($view, array_merge($this->data, $data));
    }
}
