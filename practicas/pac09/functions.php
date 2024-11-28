<?php 

session_start();

$libros = [
    [
        "src" => "https://example.com/imagen-libro1.jpg",
        "titulo" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "descripcion" => "Una obra maestra que narra la historia de la familia Buendía a lo largo de varias generaciones."
    ],
    [
        "src" => "https://example.com/imagen-libro2.jpg",
        "titulo" => "1984",
        "autor" => "George Orwell",
        "descripcion" => "Una novela distópica que explora los peligros del totalitarismo y la vigilancia masiva."
    ],
    [
        "src" => "https://example.com/imagen-libro3.jpg",
        "titulo" => "El principito",
        "autor" => "Antoine de Saint-Exupéry",
        "descripcion" => "Un relato poético y filosófico sobre la importancia de la amistad y la imaginación."
    ],
    [
        "src" => "https://example.com/imagen-libro4.jpg",
        "titulo" => "Don Quijote de la Mancha",
        "autor" => "Miguel de Cervantes",
        "descripcion" => "Las aventuras y desventuras de un caballero idealista y su fiel escudero, Sancho Panza."
    ],
    [
        "src" => "https://example.com/imagen-libro5.jpg",
        "titulo" => "Orgullo y prejuicio",
        "autor" => "Jane Austen",
        "descripcion" => "Una historia de amor, orgullo y malentendidos en la Inglaterra del siglo XIX."
    ],
    [
        "src" => "https://example.com/imagen-libro6.jpg",
        "titulo" => "Matar a un ruiseñor",
        "autor" => "Harper Lee",
        "descripcion" => "Un poderoso relato sobre la justicia, la desigualdad racial y la inocencia perdida."
    ]
];

if (!isset($_SESSION['libros'])) { 
    $_SESSION['libros'] = $libros; 
}












?>