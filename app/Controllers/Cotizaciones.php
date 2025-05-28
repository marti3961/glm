<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Cotizaciones extends ResourceController
{
    protected $modelName = 'App\Models\CotizacionModel';
    protected $format    = 'json';

    // Display all cotizaciones
    public function index()
    {
        $cotizaciones = $this->model->findAll();
        return $this->respond(['cotizaciones' => $cotizaciones]);
    }

    // Show a single cotizacion
    public function show($id = null)
    {
        $cotizacion = $this->cotizacion($id); //$this->model->find($id);
        if (!$cotizacion) {
            return $this->failNotFound('Cotizacion no encontrada');
        }
        return $this->respond(['cotizacion' => $cotizacion]);
    }
    // Delete a mensaje
    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Cotizacion no encontrada');
        }
        return $this->respondDeleted(['message' => 'Cotizacion eliminada con éxito']);
    }
    // Display full cotizacion
    public function cotizacion($cotizacionId)
    {
        $cotizacionModel = new \App\Models\CotizacionModel();
        $productsModel = new \App\Models\ProductModel();
        $productsExtraModel = new \App\Models\ProductExtrasModel();
        $generalSettings = new \App\Models\SettingsModel();  
        $cotizacion = $cotizacionModel->find($cotizacionId);
        $product = $productsModel->find($cotizacion['product_id']);
        $productExtras = $productsExtraModel->whereIn('id', explode(',', $cotizacion['product_extras_ids'] ?? []))->findAll();
        $settings = $generalSettings->where('id', 1)->first();
        $cotizacion['product'] = $product;
        $cotizacion['product_extras'] = $productExtras;
        $cotizacion['settings'] = $settings;
        $costoConcreto = $this->calcularCosto($product['precio'], $cotizacion['cantidad']);
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

        
        return $cotizacion;
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
