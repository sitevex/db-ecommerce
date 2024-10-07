<?php

namespace Database\Seeders;

use App\Models\Subgroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubgroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subgroup::insert([
            ['name' => 'Airmax', 'slug' => 'airmax', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Unifi', 'slug' => 'unifi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Airfiber', 'slug' => 'airfiber', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Edge Switch', 'slug' => 'edge-switch', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Accesorios Ubiquiti', 'slug' => 'accesorios-ubiquiti', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'CN PILOT AP WiFi', 'slug' => 'cn-pilot-ap-wifi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'EPMP Wireless ISP', 'slug' => 'epmp-wireless-isp', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'PTP Enlaces Punto a Punto', 'slug' => 'ptp-enlaces-punto-a-punto', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Licencias Cambium', 'slug' => 'licencias-cambium', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Gateway & router Enterprise', 'slug' => 'gateway-router-enterprise', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Gateway & Router SMB REYEE', 'slug' => 'gateway-router-smb-reyee', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Switches SMB REYEE', 'slug' => 'switches-smb-reyee', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Switches enterprise', 'slug' => 'switches-enterprise', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Fibra Optica', 'slug' => 'fibra-optica', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Radio Enlace', 'slug' => 'radio-enlace', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Routers Small Business', 'slug' => 'routers-small-business', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Routers Enterprise', 'slug' => 'routers-enterprise', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Switch Administrable', 'slug' => 'switch-administrable', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Accesorios Mikrotik', 'slug' => 'accesorios-mikrotik', 'description' => null, 'image' => null, 'image_url' => null],
            // Telefonía IP, VoIP, Centrales & Gateway
            ['name' => 'Acces Point WiFi', 'slug' => 'acces-point-wifi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Accesorios', 'slug' => 'accesorios', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Centrales IPBX', 'slug' => 'centrales-ipbx', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Gateway ATA', 'slug' => 'gateway-ata', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Seguridad IP', 'slug' => 'seguridad-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Teléfonos IP', 'slug' => 'telefonos-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Video y Audio Conferencias', 'slug' => 'video-audio-conferencias', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Gateway GSM', 'slug' => 'gateway-gsm', 'description' => null, 'image' => null, 'image_url' => null],
            // Protección Eléctrica & Energía Renovable
            ['name' => 'Inversores de Energía', 'slug' => 'inversores-energia', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'UPS Online', 'slug' => 'ups-online', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Solución Solar', 'slug' => 'solucion-solar', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'UPS y Reguladores', 'slug' => 'ups-reguladores', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Accesorios Xmart', 'slug' => 'accesorios-xmart', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Baterias', 'slug' => 'baterias', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Home HL', 'slug' => 'home-hl', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Landscape LSC', 'slug' => 'landscape-lsc', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Street Lights STL', 'slug' => 'street-lights-stl', 'description' => null, 'image' => null, 'image_url' => null],
            // Cámaras de seguridad CCTV
            ['name' => 'Accesorios y Herramientas', 'slug' => 'accesorios-herramientas', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras HDCVI', 'slug' => 'camara-hdcvi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras IP', 'slug' => 'camara-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras PTZ HDCVI', 'slug' => 'camara-ptz-hdcvi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras PTZ IP', 'slug' => 'camara-ptz-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras PTZ Láser', 'slug' => 'camara-ptz-laser', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Cámaras Térmicas IP', 'slug' => 'camara-termicas-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Control de Acceso', 'slug' => 'control-acceso', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Discos Duros CCTV', 'slug' => 'discos-duros-cctv', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Grabadores HDCVI', 'slug' => 'grabadores-hdcvi', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Grabadores IP', 'slug' => 'grabadores-ip', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Kit de Seguridad', 'slug' => 'kit-seguridad', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'NVR', 'slug' => 'nvr', 'description' => null, 'image' => null, 'image_url' => null],
            // Comunicación y Mensajería
            ['name' => 'Bot', 'slug' => 'bot', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Control de Mensajería', 'slug' => 'control-mensajeria', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Dispositivos IoT', 'slug' => 'dispositivos-iot', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Mensajería Unificada', 'slug' => 'mensajeria-unificada', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Plataformas de Chat', 'slug' => 'plataformas-chat', 'description' => null, 'image' => null, 'image_url' => null],
            // Móvil y Soluciones
            ['name' => 'Accesorios para Smartphones', 'slug' => 'accesorios-smartphones', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Drones', 'slug' => 'drones', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Estaciones de Carga', 'slug' => 'estaciones-carga', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Herramientas de Diagnóstico', 'slug' => 'herramientas-diagnostico', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Móviles', 'slug' => 'moviles', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Smartwatches', 'slug' => 'smartwatches', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Tarjetas SIM', 'slug' => 'tarjetas-sim', 'description' => null, 'image' => null, 'image_url' => null],
            // Data Center & Almacenamiento
            ['name' => 'Accesorios de Almacenamiento', 'slug' => 'accesorios-almacenamiento', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Discos Duros', 'slug' => 'discos-duros', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Matriz de Almacenamiento', 'slug' => 'matriz-almacenamiento', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Sistemas de Almacenamiento', 'slug' => 'sistemas-almacenamiento', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Switches de Almacenamiento', 'slug' => 'switches-almacenamiento', 'description' => null, 'image' => null, 'image_url' => null],
            // Dispositivos de red
            ['name' => 'Accesorios de red', 'slug' => 'accesorios-red', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Antenas', 'slug' => 'antenas', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Módulos SFP', 'slug' => 'modulos-sfp', 'description' => null, 'image' => null, 'image_url' => null],
            ['name' => 'Switches', 'slug' => 'switches', 'description' => null, 'image' => null, 'image_url' => null],
        ]);
    }
}
