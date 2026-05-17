<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        $productos = [
            ['titulo' => 'Arreglo de rosas eternas con osito cariñosito', 'precio' => 38.0, 'imagen' => 'imagenes/i__arreglos/A1.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas eternas con peluche Angela', 'precio' => 28.0, 'imagen' => 'imagenes/i__arreglos/A2.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Rosa eterna con frase Feliz Cumple', 'precio' => 8.0, 'imagen' => 'imagenes/i__arreglos/A3.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Rosa eterna rosado pastel', 'precio' => 7.0, 'imagen' => 'imagenes/i__arreglos/A4.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Rosa eterna azul', 'precio' => 6.0, 'imagen' => 'imagenes/i__arreglos/A5.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Girasol con frase Feliz Cumple', 'precio' => 9.0, 'imagen' => 'imagenes/i__arreglos/A6.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas eternas con mariposas', 'precio' => 25.0, 'imagen' => 'imagenes/i__arreglos/A7.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo con 19 rosas eternas, con frase y corona', 'precio' => 78.0, 'imagen' => 'imagenes/i__arreglos/A8.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas eternas con flores blancas', 'precio' => 24.0, 'imagen' => 'imagenes/i__arreglos/A9.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas blancas y rosas con coronita', 'precio' => 75.0, 'imagen' => 'imagenes/i__arreglos/A10.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo con corazón fuego, frase Feliz cumpleaños', 'precio' => 46.0, 'imagen' => 'imagenes/i__arreglos/A11.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Graduado con tulipanes', 'precio' => 49.0, 'imagen' => 'imagenes/i__arreglos/A12.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Ramo con carrito HotWheel', 'precio' => 27.0, 'imagen' => 'imagenes/i__arreglos/A13.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Stich importado, con rosas eternas', 'precio' => 55.0, 'imagen' => 'imagenes/i__arreglos/A14.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Girasoles eternos', 'precio' => 17.0, 'imagen' => 'imagenes/i__arreglos/A15.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas eternas rojas con osito', 'precio' => 57.5, 'imagen' => 'imagenes/i__arreglos/A16.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Girasol más tulipanes', 'precio' => 22.0, 'imagen' => 'imagenes/i__arreglos/A17.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas eternas amarillas con osito blanco', 'precio' => 47.0, 'imagen' => 'imagenes/i__arreglos/A18.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de tulipanes rosas con golosinas y peluche', 'precio' => 73.5, 'imagen' => 'imagenes/i__arreglos/A19.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de osito minero con rosas eternas azules', 'precio' => 68.5, 'imagen' => 'imagenes/i__arreglos/A20.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Arreglo de rosas azules con peluche de pinguino', 'precio' => 46.0, 'imagen' => 'imagenes/i__arreglos/A21.png', 'categoria' => 'arreglos'],
            ['titulo' => 'Excavadora de Juguete', 'precio' => 20.0, 'imagen' => 'imagenes/i__juguetes/J1.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Sonaja 8 unidades (animalitos)', 'precio' => 16.0, 'imagen' => 'imagenes/i__juguetes/J2.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Set de Maquinaria pesada', 'precio' => 20.0, 'imagen' => 'imagenes/i__juguetes/J3.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Excavadora y Camión', 'precio' => 29.0, 'imagen' => 'imagenes/i__juguetes/J4.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Carrito feliz ABC123', 'precio' => 20.0, 'imagen' => 'imagenes/i__juguetes/J5.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Set de alimentos con pega-pega', 'precio' => 12.0, 'imagen' => 'imagenes/i__juguetes/J6.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Set de cocina 3 en 1', 'precio' => 150.0, 'imagen' => 'imagenes/i__juguetes/J7.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Cono de Aros apilables', 'precio' => 15.0, 'imagen' => 'imagenes/i__juguetes/J8.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Carro a control remoto rojo', 'precio' => 55.0, 'imagen' => 'imagenes/i__juguetes/J9.jpg', 'categoria' => 'juguetes'],
            ['titulo' => 'Osito con corazón Te quiero', 'precio' => 27.0, 'imagen' => 'imagenes/i__peluches/P1.png', 'categoria' => 'peluches'],
            ['titulo' => 'Pinguino antialergico con gorro y mochila', 'precio' => 22.0, 'imagen' => 'imagenes/i__peluches/P2.png', 'categoria' => 'peluches'],
            ['titulo' => 'Osito musical con corazon Love You', 'precio' => 23.0, 'imagen' => 'imagenes/i__peluches/P3.png', 'categoria' => 'peluches'],
            ['titulo' => 'Osito con corbatin celeste', 'precio' => 23.0, 'imagen' => 'imagenes/i__peluches/P4.png', 'categoria' => 'peluches'],
            ['titulo' => 'Peluche de Lopso dormido', 'precio' => 27.0, 'imagen' => 'imagenes/i__peluches/P5.png', 'categoria' => 'peluches'],
            ['titulo' => 'Erizo peluche antialergico', 'precio' => 26.0, 'imagen' => 'imagenes/i__peluches/P6.png', 'categoria' => 'peluches'],
            ['titulo' => 'Conjunto de algodón rojo (niño)', 'precio' => 55.0, 'imagen' => 'imagenes/i__ropaBebes/B1.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto de algodón rosa (niña)', 'precio' => 45.0, 'imagen' => 'imagenes/i__ropaBebes/B2.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Trajecito de algodon rojo (niño)', 'precio' => 55.0, 'imagen' => 'imagenes/i__ropaBebes/B3.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto de algodón con diseño de rosas', 'precio' => 54.0, 'imagen' => 'imagenes/i__ropaBebes/B4.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto de algodón celeste y gris (niño)', 'precio' => 58.0, 'imagen' => 'imagenes/i__ropaBebes/B5.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto para niño diseño de dinosaurios', 'precio' => 67.0, 'imagen' => 'imagenes/i__ropaBebes/B6.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto forrado marrón (niño)', 'precio' => 55.0, 'imagen' => 'imagenes/i__ropaBebes/B7.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Conjunto de 5 piezas kitty', 'precio' => 67.0, 'imagen' => 'imagenes/i__ropaBebes/B8.jpg', 'categoria' => 'ropa_bebe'],
            ['titulo' => 'Vestido de algodon rojo y blanco', 'precio' => 42.0, 'imagen' => 'imagenes/i__ropaBebes/B9.jpg', 'categoria' => 'ropa_bebe'],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
