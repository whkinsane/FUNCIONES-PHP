<?php
// Integrante A: Jose carlos cordoba cantillo
// Clase: funciones propias. Trabajamos con los cinco productos inicial

$productos = [
    101 => ["nombre" => "Lápiz", "precio" => 1500, "stock" => 10],
    102 => ["nombre" => "Cuaderno", "precio" => 8000, "stock" => 6],
    103 => ["nombre" => "Borrador", "precio" => 1000, "stock" => 8],
    104 => ["nombre" => "Marcador", "precio" => 3500, "stock" => 4],
    105 => ["nombre" => "Regla", "precio" => 2500, "stock" => 5]
];



// 1. Define calcularSubtotal($precio, $cantidad).
// 2. Define contarUnidades($productos).
// 3. Define calcularValorInventario($productos).
// Cada función debe devolver un resultado y conservar sus entradas.

// 4. Agrega llamadas y muestra sus retornos desde el programa principal.
// 5. Prueba los casos de la presentación y registra resultados en pruebas.txt.
// Opcional: buscarProducto($productos, $codigo), con retorno null si no existe.

// --- FUNCIONES DECLARADAS ANTES DEL WHILE ---

function calcularSubtotal($precio, $cantidad) {
    $subtotal = $precio * $cantidad;
    return $subtotal;
}

function contarUnidades($producto) { 
    $contar_unidades = 0;
    foreach ($producto as $g) {
        $contar_unidades = $contar_unidades + $g["stock"];
    }
    return $contar_unidades;
}

function calcularValorInventario($productos) {
    $total_inventario = 0;
    foreach ($productos as $k) {
        $total_inventario = $total_inventario + ($k["precio"] * $k["stock"]);
    }
    return $total_inventario;
}

// --- PROGRAMA PRINCIPAL ---

while (true) {
    print_r(PHP_EOL);
    print_r("ESCOGER" . PHP_EOL);
    print_r("1--calcular subtotal" . PHP_EOL);
    print_r("2--contar unidades" . PHP_EOL);
    print_r("3--calcular el valor del inventario" . PHP_EOL);
    print_r("4--salir" . PHP_EOL);
    print_r(PHP_EOL);
    
    $opcion = readline("seleccione la opcion que desea utilizar: ");
    print_r(PHP_EOL);

    while ($opcion < 1 or $opcion > 4) {
        print_r("ERROR AL SELECCIONAR SU OPCION" . PHP_EOL);
        $opcion = readline("seleccione la opcion que desea utilizar: ");
        print_r(PHP_EOL);
    }

    if ($opcion == 1) {
        print_r(PHP_EOL);

        while (true) {
            $precio = readline("Digite el precio del producto: ");
            print_r(PHP_EOL);
            $cantidad = readline("Digite la cantidad que desea llevar del producto: ");
            print_r(PHP_EOL);

            
            if ($precio <= 0 || $cantidad <= 0) {
                print_r("El precio y la cantidad deben ser mayores a 0" . PHP_EOL);
            } else {
                break;
            }
        }
        
        $subtotal2 = calcularSubtotal($precio, $cantidad);
        print_r(PHP_EOL);
        print_r("El subtotal es de $subtotal2" . PHP_EOL);

    } elseif ($opcion == 2) {
        print_r(PHP_EOL);
        $unidades = contarUnidades($productos);
        print_r("CONTANDO UNIDADES" . PHP_EOL);
        print_r("El total de unidades es $unidades" . PHP_EOL);

    } elseif ($opcion == 3) {
        print_r(PHP_EOL);
        $valor_total = calcularValorInventario($productos);
        print_r("VALOR DEL INVENTARIO" . PHP_EOL);
        print_r("El valor total del inventario es $valor_total" . PHP_EOL);

    } elseif ($opcion == 4) {
        print_r("Saliendo del programa..." . PHP_EOL);
        break;
    }
}
?>
