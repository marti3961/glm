<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RedirectResponse;


class Home extends BaseController
{
    public function index(): string
    {
        $sliders_ = new \App\Models\SliderModel();
        $testimonios = new \App\Models\TestimoniosModel();
        $sliders = $sliders_->orderBy('position', 'ASC')->findAll();
        $testimonios = $testimonios->where('active', 1)->orderBy('orden', 'ASC')->findAll();
        return $this->render('Inicio',['sliders'=> $sliders, 'testimonios' => $testimonios]);
    }
    public function proyectos(): string
    {
        $id = $this->request->getGet('p'); // gets ?id=value from the URL
        $proyectosModel = new  \App\Models\ProyectosViewModel();
        $proyecto = $proyectosModel->getProjectById($id);
        return $this->render('ProyectosView', ['proyecto' => $proyecto]);
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
    
    public function  san_antonio_pachuquilla(): string
    {
        return $this->render('SanAntonioPachuquilla',[]);
    }
    public function san_antonio_monserrat_petite(): string
    {
        return $this->render('SanAntonioMonserratPetite',[]);
    }
    public function san_antonio_monserrat(): string
    {
        return $this->render('SanAntonioMonserrat',[]);
    }

    public function las_peras(): string
    {
        return $this->render('LasPeras',[]);
    }
    
    public function paseo_de_las_reynas(): string
    {
        return $this->render('PaseoDeLasReynas',[]);
    }
    
    public function privada_la_palma(): string
    {
        return $this->render('PrivadaLaPalma',[]);
    }
    public function valle_del_alamo(): string
    {
        return $this->render('ValleDelAlamo',[]);
    }

    public function proximos_proyectos(): string
    {
        $projectModel = new  \App\Models\ProyectosViewModel();
        $projects = $projectModel->findAll();
        return $this->render('ProximosProyectos', ['proyectos' => $projects]);
    }
    
    public function proximos_proyectos_locales(): string
    {
        return $this->render('ProyectosLocales',[]);
    }
    public function proximos_proyectos_casas(): string
    {
        return $this->render('ProyectosCasas',[]);
    }
    public function proximos_proyectos_plazas(): string
    {
        return $this->render('ProyectosPlazas',[]);
    }
    public function proximos_proyectos_terrenos(): string
    {
        return $this->render('ProyectosTerrenos',[]);
    }
    
    public function contacto(): string
    {
        return $this->render('Contacto',[]);
    }
    // public function proyectos(): string
    // {
    //     return $this->render('Proyectos',[]);
    // }

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

    public function submitWebhookData()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('/contacto');
        }

        if (!$validation->withRequest($request)->run()) {
            return $this->response->setJSON([
                'message' => implode('<br>', $validation->getErrors()),
                'csrf'    => csrf_hash()
            ]);
        }

        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('correo');
        $telefono = $this->request->getPost('telefono');
        $tiempo = $this->request->getPost('tiempo');
        $presupuesto = $this->request->getPost('presupuesto');
        $zona = $this->request->getPost('zona');
        $modelo = $this->request->getPost('modelo');
        $utm_source = $this->request->getPost('utm_source');
        $utm_medium = $this->request->getPost('utm_medium');
        $utm_campaign = $this->request->getPost('utm_campaign');

        $data = [
            "nombre" => $nombre,
            "correo" => $correo,
            "telefono" => $telefono,
            "tiempo" => $tiempo,
            "accion" => $presupuesto, 
            "zona" => $zona,
            "modelo" => $modelo,
            "utm_source" => $utm_source,
            "utm_medium" => $utm_medium,
            "utm_campaign" => $utm_campaign
        ];

        $webhook_url = "https://hooks.zapier.com/hooks/catch/13317552/2g41nzt/";
        $client = \Config\Services::curlrequest(); // Obtiene una instancia del cliente HTTP

        try {
            $response = $client->post($webhook_url, [
                'json' => $data, 
                'http_errors' => false // Para manejar los errores de HTTP manualmente
            ]);
            if ($response->getStatusCode() === 200 || $response->getStatusCode() === 201) {
                log_message('info', 'Datos enviados correctamente al webhook de Zapier.');
                return redirect()->to('http://glmarquitectura.com.mx/gracias.html');
            } else {
                $errorMessage = "Error al enviar los datos al webhook. Código de estado: " . $response->getStatusCode() . " - " . $response->getBody();
                log_message('error', $errorMessage);
                return view('error_view', ['message' => $errorMessage]);
            }
        } catch (\Exception $e) {
            $errorMessage = "Excepción al enviar datos al webhook: " . $e->getMessage();
            log_message('critical', $errorMessage);
            return view('error_view', ['message' => $errorMessage]);
        }
    }
    
}
