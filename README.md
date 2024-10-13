# API SISCON CORE: Gestión de Obras Sociales

Este es un proyecto de **Core Service** para la gestión de obras sociales, médicos, clínicas, afiliados y proveedores. El sistema permite gestionar la relación entre obras sociales y sus actores (médicos, afiliados, proveedores, y empleados), mediante tablas intermedias y asociaciones, además de implementar roles y privilegios para los usuarios.

## Tabla de contenidos

- [Características](#características)
- [Tecnologías](#tecnologías)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Migraciones](#migraciones)
- [Modelos](#modelos)
- [Uso](#uso)
- [Contribuciones](#contribuciones)
- [Licencia](#licencia)

## Características

- Gestión de **obras sociales** con clínicas, médicos, afiliados y proveedores.
- Tablas intermedias para gestionar relaciones **muchos a muchos**.
- Implementación de roles y privilegios para los usuarios (médicos, auditores, proveedores, atención al público, gerentes, y super admin).
- Soporte para manejo de **empleados** y **médicos** como usuarios del sistema.
- Soft deletes para entidades como médicos y afiliados.

## Tecnologías

- **Framework**: Laravel 11
- **Base de datos**: MySQL/MariaDB
- **Autenticación**: Laravel Breeze/Sanctum
- **Migraciones y Modelos**: Eloquent ORM
- **Roles y Permisos**: Laravel Spatie Permissions (opcional)

## Requisitos

Asegúrate de tener instaladas las siguientes herramientas antes de comenzar:

- PHP >= 8.1
- Composer
- MySQL o MariaDB
- Node.js (para el manejo de assets)
