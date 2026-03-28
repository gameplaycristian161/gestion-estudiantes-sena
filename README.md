# 🎓 Proyecto: Gestión de Estudiantes SENA (Laravel)

Este es mi primer proyecto web desarrollado con el framework **Laravel 11**, construido como parte de las actividades del programa de Formación ADSO del SENA.

## 🚀 Instalación y Ejecución Local

Para correr este proyecto en tu propia máquina de manera local, sigue los siguientes pasos:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/laravel-clase1.git
   cd laravel-clase1
   ```

2. **Instalar las dependencias de PHP:**
   Debes tener [Composer](https://getcomposer.org/) instalado.
   ```bash
   composer install
   ```

3. **Configurar el entorno:**
   Copia el archivo de prueba `.env.example` y renómbralo a `.env`:
   ```bash
   cp .env.example .env
   ```
   *Nota:* Este proyecto ya viene configurado para utilizar **SQLite**, por lo que no requieres instalar MySQL ni gestores adicionales.

4. **Generar la llave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

5. **Crear y preparar la Base de Datos:**
   ```bash
   php artisan migrate
   ```

6. **Arrancar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   Ve a [http://localhost:8000/estudiantes](http://localhost:8000/estudiantes) en tu navegador preferido.

---

## 📸 Capturas de Pantalla (CRUD Funcionando)

> *(Nota para la entrega: Reemplaza estos espacios colocando aquí tus propias capturas usando la herramienta recortes de Windows)*

**1. Vista Principal (Index del CRUD)**
![Insertar Captura de Pantalla Index]()

**2. Formulario de Creación (Create)**
![Insertar Captura de Pantalla Create]()

**3. Tarjeta de Detalle (Show)**
![Insertar Captura de Pantalla Show]()

**4. Formulario de Edición (Edit)**
![Insertar Captura de Pantalla Edit]()

**5. Eliminación Exitosa (Delete)**
![Insertar Captura de Pantalla Delete]()

---

### 🔥 Mejoras Implementadas (Actividad Transferencia Clase 2)
- ✅ Columna de **teléfono** opcional añadida a la BD, validaciones y vistas.
- ✅ Vista individual dinámica de **Ver (Show)** perfil por estudiante.
- ✅ Modificadores de Backend con Eloquent y Frontend para tener **Barra de Búsqueda** en tiempo real.
- ✅ UI/UX completamente renovado empleando diseño maquetado en **Bootstrap 5 y Bootstrap Icons**.
