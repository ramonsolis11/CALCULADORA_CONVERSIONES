# 📊 Calculadora de Conversiones
![image](https://github.com/ramonsolis11/CALCULADORA_CONVERSIONES/assets/80738178/718d6c4f-3e8a-49dd-a7a5-83e5e0ba34ff)
![image](https://github.com/ramonsolis11/CALCULADORA_CONVERSIONES/assets/80738178/5d110bd8-c3ae-4fe4-a1b7-170824cf8ff3)
![image](https://github.com/ramonsolis11/CALCULADORA_CONVERSIONES/assets/80738178/2a35e706-1ee1-4474-93e2-69f56a4241ab)
![image](https://github.com/ramonsolis11/CALCULADORA_CONVERSIONES/assets/80738178/54712082-aecb-4f34-a01d-2cc0889a5f43)





Esta es una calculadora de conversiones desarrollada en PHP que te permite convertir unidades de medida en diferentes categorías, como longitud, masa, volumen, datos, moneda y tiempo. La aplicación sigue los principios de la Programación Orientada a Objetos (POO) y se adhiere a los principios SOLID para garantizar un código limpio y modular.

## 🚀 Características

- Conversión de unidades de medida en seis categorías principales.
- Cumplimiento de los principios SOLID.
- Validaciones de entrada para prevenir errores inesperados.
- Interfaz de usuario amigable e intuitiva.

## 🎯 Funcionalidades

- Aplicación de Programación Orientada a Objetos (POO).
  - Clases y encapsulamiento.
  - Abstracción.
  - Herencia.
  - Polimorfismo.

## 📋 Categorías de Conversión

La aplicación puede convertir unidades de medida en las siguientes categorías:

1. Longitud
2. Masa
3. Volumen
4. Datos
5. Moneda
6. Tiempo

## 📦 Requisitos

- PHP 8 o superior.
- Servidor web (XAMMP) para ejecutar la aplicación localmente.

## 🛠️ Instalación y Uso

Clona este repositorio en tu servidor web local:

```bash
git clone https://github.com/tu-usuario/calculadora-de-conversiones.git


Abre la aplicación en tu navegador web:
http://localhost/calculadora-de-conversiones/welcome.php

📂 Estructura del Proyecto
El proyecto sigue una estructura de carpetas organizada de la siguiente manera:

Controller: Contiene los controladores de conversión.
Model: Contiene las clases de modelos para cada categoría de conversión.
View: Contiene los archivos de vista, incluyendo la página de inicio y las categorías individuales.
assets: Contiene recursos estáticos como hojas de estilo CSS, imágenes y scripts JavaScript.

Calculadora de Conversiones
├── assets
│   ├── CSS
│   │   └── styles.css
│   ├── IMG
│   │   ├── logo.png
│   │   └── logo1.png
│   └── JS
│       ├── limpiar.js
│       └── unidades.js
├── Controller
│   ├── ConversionController.php
│   └── ConvertidorController.php
├── Model
│   ├── datosConvertir.php
│   ├── longitudConvertir.php
│   ├── masaConvertir.php
│   ├── monedaConvertir.php
│   ├── tiempoConvertir.php
│   └── volumenConvertir.php
└── View
├── footer.php
├── header.php
└── index.php
│
├──welcome.php
├──README.md



🧮 Uso

Para utilizar la calculadora de conversiones, sigue estos pasos:

1. Abre el archivo `welcome.php` en tu servidor web local.

2. Desde la página de bienvenida, selecciona el tipo de conversión que deseas realizar (Longitud, Masa, Volumen, Datos, Moneda o Tiempo).

3. Ingresa los valores y las unidades de conversión.

4. Presiona el botón "Ir a [Tipo de Conversión]".

5. Verás el resultado de la conversión en la siguiente página.
