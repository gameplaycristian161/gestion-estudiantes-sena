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



**1. Vista Principal (Index del CRUD)**
<img width="1600" height="815" alt="1" src="https://github.com/user-attachments/assets/b93958c4-780a-41aa-9a4d-94ed409fe1a6" />


**2. Formulario de Creación (Create)**
<img width="1598" height="819" alt="image" src="https://github.com/user-attachments/assets/3bb9fc0c-613f-4099-8b5d-67d014fa37b7" />


**3. Tarjeta de Detalle (Show)**
<img width="1600" height="827" alt="image" src="https://github.com/user-attachments/assets/857e25da-601a-4452-b076-63b9678f0d9f" />


**4. Formulario de Edición (Edit)**
<img width="1600" height="823" alt="image" src="https://github.com/user-attachments/assets/bb4bcb6d-fed9-41ee-9c4f-1e2fd665fc06" />


**5. Eliminación Exitosa (Delete)**
<img width="1600" height="825" alt="image" src="https://github.com/user-attachments/assets/29980efd-5127-418f-88c2-338daf207042" />


---

### 🔥 Mejoras Implementadas (Actividad Transferencia Clase 2)
- ✅ Columna de **teléfono** opcional añadida a la BD, validaciones y vistas.
- ✅ Vista individual dinámica de **Ver (Show)** perfil por estudiante.
- ✅ Modificadores de Backend con Eloquent y Frontend para tener **Barra de Búsqueda** en tiempo real.
- ✅ UI/UX completamente renovado empleando diseño maquetado en **Bootstrap 5 y Bootstrap Icons**.
