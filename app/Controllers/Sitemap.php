<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Sitemap extends Controller
{
    public function index()
    {
        $urls = [
            [
                'loc'        => 'https://GLM.com.mx/',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority'   => '0.9'
            ],
            [
                'loc'        => 'https://GLM.com.mx/contacto',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority'   => '0.8'
            ],
            [
                'loc'        => 'https://GLM.com.mx/proyectos',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority'   => '0.3'
            ],
            [
                'loc'        => 'https://GLM.com.mx/sobre-nosotros',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority'   => '0.7'
            ],
            [
                'loc'        => 'https://GLM.com.mx/testimonios',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority'   => '0.6'
            ],
            [
                'loc'        => 'https://GLM.com.mx/preguntas-frecuentes',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority'   => '0.6'
            ],
            [
                'loc'        => 'https://GLM.com.mx/nuestros-productos',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority'   => '0.9'
            ],
            [
                'loc'        => 'https://GLM.com.mx/cotiza-tu-proyecto',
                'lastmod'    => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority'   => '0.9'
            ],
        ];
        ob_clean();
        
        $xml = view('sitemap', ['urls' => $urls]);

        return response()
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($xml);
    }
}