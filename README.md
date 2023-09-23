<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

Multi-Tenant Laravel Project with InertiaJS
This project is a Laravel application designed to achieve multiple objectives and tasks that contribute to providing a simple and efficient multi-tenant user experience. The project was implemented as follows:

1. Setting Up the Laravel Project and Configuring Multi-Tenancy
A Laravel project was created from scratch and configured to support multi-tenancy without using any multi-tenancy packages. User authentication was included, and InertiaJS was used to enhance the user experience.

2. Creating a Superadmin Dashboard
A simple dashboard was created to display all merchants and users associated with each merchant.

3. Creating a Merchant Dashboard
A simple dashboard was created to display all users associated with the current merchant.

4. Creating a User Dashboard
A simple dashboard was created to welcome the user.

5. Creating Seeders for Data
Seeders were created to populate initial data, including the creation of a super admin, 30 merchants, and 100 users for each merchant.

# Multi-Tenant Laravel Project with InertiaJS

This project is a Laravel application designed to achieve multiple objectives and tasks that contribute to providing a simple and efficient multi-tenant user experience. The project was implemented with a multi-branch approach, where two separate branches were created, each representing a different database configuration:

## Branch 1: Single Database Configuration
- The 'single-database' branch contains the code and configuration for a single-database approach.
- In this configuration, all tenants share a common database.
- You can switch to this branch to work with a single-database setup.

## Branch 2: Multiple Databases Configuration
- The 'multiple-databases' branch contains the code and configuration for a multiple-databases approach.
- In this configuration, each tenant has its own separate database.
- You can switch to this branch to work with a multiple-databases setup.

## Setting Up and Testing
- To set up and test the project with your preferred database configuration, first clone the repository and then switch to the appropriate branch.
- Follow the instructions in the README of the selected branch to set up the database and run the application.

This project represents a flexible approach to multi-tenancy, allowing you to choose between a single-database and multiple-databases setup based on your project's requirements.
