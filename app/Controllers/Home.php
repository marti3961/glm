<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RedirectResponse;


class Home extends BaseController
{
    public function index(): string
    {
        $sliders_ = new \App\Models\SliderModel();
        $sliders = $sliders_->orderBy('position', 'ASC')->findAll();
        return $this->render('Inicio',['sliders'=> $sliders]);
    }
    public function quienes_somos(): string
    {
        return $this->render('QuienesSomos',[]);
        
    }

    public function quieres_vender_rentar(): string 
    {
        return $this->render('QuieresVenderRentar',[]); 
    }
    public function quieres_rentar(): string 
    {
        return $this->render('QuieresRentar',[]); 
    }
    public function quieres_vender(): string 
    {
        return $this->render('QuieresVender',[]); 
    }
    public function quieres_financiamiento(): string 
    {
        return $this->render('QuieresFinanciamiento',[]); 
    }


    public function preguntas_frecuentes(): string
    {
        return $this->render('PreguntasFrecuentes',[]);
    }

    public function nuestros_productos(): string
    {
        return $this->render('NuestrosProductos',[]);
    }

    public function cotiza_tu_proyecto(): string
    {
        $products = $this->getProductsFromDatabase();
        $products_extras = $this->getProductsExtraFromDatabase();
        return $this->render('CotizaTuProyecto',['products' => $products, 'productExtras' => $products_extras]);
    }
    public function save_cotizacion(): RedirectResponse
    {
        $request = \Config\Services::request();
        $cotizacionModel = new \App\Models\CotizacionModel();
        $data = [
            'name' => $request->getPost('nombre'),
            'email' => $request->getPost('email'),
            'phone' => $request->getPost('telefono'),
            'product_extras_ids' => implode(',', $request->getPost('product_extras_ids') ?? []),
            'product_id' => $request->getPost('product_id'),
            'tipo_de_transporte' => $request->getPost('tipo_de_transporte'),
            'cantidad' => $request->getPost('cantidad'),
        ];

        $cotizacionModel->save($data);

        $cotizacionId = $cotizacionModel->getInsertID();
        $encryptedId = base64_encode($cotizacionId);
        return $this->safeRedirect('cotizacion', ['cotizacion_id' => $encryptedId])
        ->with('success', 'Cotización guardada exitosamente.');
    }


    public function cotizacion(): string
    {
        try {
        $request = \Config\Services::request();
        $cotizacionId = $request->getGet('cotizacion_id');
        $cotizacionModel = new \App\Models\CotizacionModel();
        $productsModel = new \App\Models\ProductModel();
        $productsExtraModel = new \App\Models\ProductExtrasModel();
        $generalSettings = new \App\Models\SettingsModel();  
        $cotizacionId = base64_decode($cotizacionId);
        ///
        $cotizacion = $cotizacionModel->find($cotizacionId);
        $product = $productsModel->find($cotizacion['product_id']);
        $productExtras = $productsExtraModel->whereIn('id', explode(',', $cotizacion['product_extras_ids'] ?? []))->findAll();
        $settings = $generalSettings->first();

        $cotizacion['product'] = $product;
        $cotizacion['product_extras'] = $productExtras;
        $cotizacion['settings'] = $settings;
        $costoConcreto = $this->calcularCosto($product['precio'], $cotizacion['cantidad']);
        var_dump($cotizacion);
        die();
        $costoTipoTiro = $this->calcularCostoTipoTiro($cotizacion['tipo_de_transporte'], $settings['bombeo_1_10'], $settings['bombeo_1mc'], $cotizacion['cantidad']);
        $costoExtras = 0;
        foreach ($productExtras as $extra) {
            $costoExtras += $this->calcularCosto($extra['precio'], $cotizacion['cantidad']);
        }
        $cotizacion['detalle_precios'] = [
            'costo_concreto' => [
                'cantidad' => $cotizacion['cantidad'],
                'nombre' => $product['resistencia'],
                'costo_unitario' => $product['precio'],
                'valor' => $costoConcreto,
            ],
            'costo_tipo_tiro' => [
                'cantidad' => $cotizacion['cantidad'],
                'nombre' => strtoupper($cotizacion['tipo_de_transporte']),
                'valor' => $costoTipoTiro,
            ],
            'costo_extras' => [
                'Cantidad' => $cotizacion['cantidad'],
                'nombre' => 'Costo de extras',
                'valor' => $costoExtras,
                'detalles' => array_map(function ($extra) use ($cotizacion) {
                    return [
                        'nombre' => $extra['nombre'],
                        'precio_unitario' => $extra['precio'],
                        'cantidad' => $cotizacion['cantidad'],
                        'total' => $extra['precio'] * $cotizacion['cantidad'],
                    ];
                }, $productExtras),
            ],
            'costo_total' => [
                'nombre' => 'Costo total',
                'valor' => $costoConcreto + $costoTipoTiro + $costoExtras,
            ],
            'detalles_cliente' => [
                'nombre' => [
                    'nombre' => 'Nombre del cliente',
                    'valor' => $cotizacion['name'],
                ],
                'email' => [
                    'nombre' => 'Correo electrónico',
                    'valor' => $cotizacion['email'],
                ],
                'telefono' => [
                    'nombre' => 'Teléfono',
                    'valor' => $cotizacion['phone'],
                ],
            ],
            'cotizacion_id' => [
                'nombre' => 'ID de Cotización',
                'valor' => $cotizacion['id'],
            ],
            'cotizacion_date' => [
                'nombre' => 'Fecha de Cotización',
                'valor' => date('d-m-Y', strtotime($cotizacion['created_at'])),
            ],
        ];
        if (!$cotizacion) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cotización no encontrada');
        }
        // Save the cotizacion object as a JSON string in the database
        $cotizacionJson = json_encode($cotizacion);
        $cotizacionModel->update($cotizacionId, ['cotizacion_json' => $cotizacionJson]);
        // return view('Cotizacion', ['cotizacion' => $cotizacion]);
        return $this->render('Cotizacion',['cotizacion' => $cotizacion]);
        } catch (Exception $e) {
            // Handle the exception
            echo 'Caught exception: ', $e->getMessage();
        }
        
    }

    private function getProductsFromDatabase(): array
    {
        // Example database query logic
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM products WHERE deleted_at IS  NULL');
        return $query->getResultArray();
    }

    private function getProductsExtraFromDatabase(): array
    {
        // Example database query logic
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM products_extras WHERE deleted_at IS  NULL');
        return $query->getResultArray();
    }

    public function contacto(): string
    {
        return $this->render('Contacto',[]);
    }
    public function proyectos(): string
    {
        return $this->render('Proyectos',[]);
    }

    public function safeRedirect(string $path, array $query = [])
    {
        $url = base_url($path);
        if (!empty($query)) {
            $url .= '?' . http_build_query($query);
        }
        return redirect()->to($url);
    }

    public function enviarMensaje()
    {
        $request = service('request');
        $security = \Config\Services::security();
        $contactanosModel = new \App\Models\ContactanosModel();        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nombre'    => 'required',
            'apellidos' => 'required',
            'empresa'   => 'required',
            'telefono'  => 'required',
            'email'     => 'required',
            'asunto'    => 'required',
            'mensaje'   => 'required',
        ]);

        if (!$validation->withRequest($request)->run()) {
            return $this->response->setJSON([
                'message' => implode('<br>', $validation->getErrors()),
                'csrf'    => csrf_hash()
            ]);
        }

        // Sanear datos
        $data = [
            'nombre'    => esc($request->getPost('nombre')),
            'apellidos' => esc($request->getPost('apellidos')),
            'empresa'   => esc($request->getPost('empresa')),
            'telefono'  => esc($request->getPost('telefono')),
            'email'    => esc($request->getPost('email')),
            'asunto'  => esc($request->getPost('asunto')),
            'mensaje'   => esc($request->getPost('mensaje')),
        ];
        $contactanosModel->save($data);
        

        return $this->response->setJSON([
            'message' => 'Mensaje enviado correctamente.',
            'csrf'    => csrf_hash()
        ]);
    }

    /**
     * Calculate the cost of concrete based on price and quantity.
     *
     * @param float $precio The price per cubic meter of concrete.
     * @param float $cantidad m3 The quantity of concrete in cubic meters.
     * @return float The total cost of the concrete.
     */
    public function calcularCosto(float $precio, float $cantidad_m3): float
    {
        return $precio * $cantidad_m3;
    }

    /**
     * Calculate the cost of a specific type of shot (bomba or camión).
     *
     * @param string $tipoTiro The type of shot (bomba or camión).
     * @param float $precio_1_10 The price for the first 10 cubic meters.
     * @param float $precio_m3 The price per cubic meter after the first 10.
     * @param float $cantidad_m3 The total quantity in cubic meters.
     * @return float The total cost based on the type of shot and quantity.
     */
    public function calcularCostoTipoTiro(string $tipoTiro,float $precio_1_10,float $precio_m3, float $cantidad_m3): float
    {
        if (strtolower($tipoTiro) === 'bomba') {
            if ($cantidad_m3 <= 10) { return $precio_1_10; }
            $metrosExtras = $cantidad_m3 - 10;
            return  $precio_1_10 + ($metrosExtras * $precio_m3);
        }
        return $cantidad_m3 * 0;
    }
    
}
