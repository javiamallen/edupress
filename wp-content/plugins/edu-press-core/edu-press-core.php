<?php
/*
Plugin Name: EduPress Core Functionality
Description: Plugin personalizado para funcionalidades core del proyecto EduPress Pro, incluyendo consumo de APIs y optimización.
Version: 1.0
Author: Javiera Allende
*/

// Seguridad: Evita que el archivo sea accedido directamente
if ( ! defined( 'ABSPATH' ) ) exit; 

// 1. FUNCIÓN PRINCIPAL PARA CONSUMIR LA API (JSONPLACEHOLDER)
function edu_press_obtener_datos_usuarios() {
    // La URL de la API REST que simula los datos
    $api_url = 'https://jsonplaceholder.typicode.com/users?_limit=5';
    
    // Ejecutamos la llamada HTTP de forma segura con WordPress (wp_remote_get)
    $respuesta = wp_remote_get( $api_url );

    // Comprobamos que la respuesta sea exitosa y sin errores
    if ( is_array( $respuesta ) && ! is_wp_error( $respuesta ) && $respuesta['response']['code'] == 200 ) {
        $cuerpo = wp_remote_retrieve_body( $respuesta );
        // Convertimos el JSON de la API a un array de PHP para manipularlo
        return json_decode( $cuerpo, true );
    }
    
    return []; // Retorna vacío si hay error
}


// 2. FUNCIÓN PARA CREAR EL SHORTCODE (La interfaz de usuario)
function edu_press_shortcode_lista_estudiantes() {
    // 🚨 Demostración de Full Stack: El PHP llama a la API desde el Back End
    $estudiantes = edu_press_obtener_datos_usuarios();
    
    if ( empty( $estudiantes ) ) {
        return '<p>No fue posible cargar la lista de integración de datos en este momento.</p>';
    }

    // Creamos la estructura HTML para mostrar los datos como tarjetas (cards)
    $output = '<div class="edu-press-api-widget">';
    $output .= '<h3>Panel de Integración de Datos (Prueba de Conexión API REST)</h3>';
    $output .= '<ul>';

    foreach ( $estudiantes as $estudiante ) {
        // Utilizamos funciones de sanitización (esc_html, esc_attr) para seguridad
        $output .= '<li>';
        $output .= '<strong>Estudiante:</strong> ' . esc_html( $estudiante['name'] ) . '<br>';
        $output .= '<strong>Web:</strong> <a href="http://' . esc_attr( $estudiante['website'] ) . '" target="_blank">' . esc_html( $estudiante['website'] ) . '</a>';
        $output .= '</li>';
    }

    $output .= '</ul>';
    $output .= '</div>';

    return $output;
}
// Registramos el shortcode: [lista_api_estudiantes]
add_shortcode( 'lista_api_estudiantes', 'edu_press_shortcode_lista_estudiantes' );