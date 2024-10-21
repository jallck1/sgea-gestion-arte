Sistema de Gestión de Exposiciones de Arte (SGEA)
Descripción del Sistema
El objetivo del proyecto es desarrollar una aplicación en Laravel 11 que gestione la información de artistas, obras de arte y exposiciones. 
La aplicación debe implementar las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para cada entidad, asegurando la protección del sistema mediante autenticación con Laravel Breeze.

Estructura de las Tablas

![image](https://github.com/user-attachments/assets/ddf2684d-60ff-422f-a691-206a4e9dd633)

![image](https://github.com/user-attachments/assets/350c9c09-a0bb-418b-92a3-518511ed4f84)


Controladores

Desarrolla controladores para gestionar la lógica de las operaciones CRUD para artistas, obras de arte y exposiciones. 
Los controladores deben gestionar las operaciones de Crear, Leer, Actualizar.

![image](https://github.com/user-attachments/assets/a9d06aa6-7658-4438-869e-b3e026adc825)

![image](https://github.com/user-attachments/assets/11a86956-b7e1-458b-bff1-b80247532aa4)


Rutas

Define las rutas necesarias para acceder a las funciones CRUD de cada entidad. Protege las rutas utilizando el middleware auth de Laravel 
Breeze para asegurar que solo los usuarios autenticados puedan acceder al sistema.

![image](https://github.com/user-attachments/assets/7b136cf0-b0ef-481c-99cd-da3a3ee8765e)

![image](https://github.com/user-attachments/assets/a3d9ed75-ef71-4a76-a385-324287b7635e)


Autenticación

Implementa Laravel Breeze para gestionar la autenticación y el registro de usuarios. 
Asegúrate de que todas las rutas relacionadas con la administración del sistema estén protegidas mediante autenticación.

![image](https://github.com/user-attachments/assets/b6d173ac-63a8-44a6-a80a-5142a3e9b8db)

![image](https://github.com/user-attachments/assets/eec8f6e5-255e-4d8f-b689-fadd17e56136)









