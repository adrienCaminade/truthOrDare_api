<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Truth or Dare API (Laravel)

This repository contains the backend API for the Truth or Dare mobile application, built using the Laravel framework. The API serves as a bridge between the Flutter frontend and a MySQL database that stores the data for the game.
Features

> Simple and efficient API built with Laravel.
    
>    Handles data requests for the Truth or Dare game categories: Classic and Spicy.
    
>    Provides randomized game content (actions and truths) to the Flutter mobile app.
    
>    Designed with future scalability in mind, allowing for database and feature expansions.

# Project Structure

The API backend communicates with a MySQL database, which consists of four core tables:

>    Classic Actions

>    Classic Truths

>    Spicy Actions

>    Spicy Truths

Each table contains:

    An id: A unique identifier for each record.
    
    A description: The content (action or truth) to be displayed in the Flutter app.

# Routes

The API exposes a set of GET routes to retrieve data from the database:

>    /api/dareClassic: Returns all the classic actions.

>    /api/truthClassic: Returns all the classic truths.

>    /api/dareSpicy: Returns all the spicy actions.

>    /api/truthSpicy: Returns all the spicy truths.


_To access API routes, take a look at Swagger : https://truthordareapi.creativedev.fr/_

Each route provides a list of actions or truths based on the selected game category.

# How It Works

The Flutter app sends GET requests to one of the above API routes, depending on whether the user selects "Classic" or "Spicy" mode.
    
The Laravel API retrieves all records from the appropriate table (actions or truths) and returns them to the Flutter app.
    
The Flutter app then uses a random selection algorithm to pick a specific action or truth to display to the user.


# Database Schema

The MySQL database is structured around four simple tables:

> dare_classic    id, description

> truth_classic   id, description

> dare_spicy   	id, description

> truth_spicy 	id, description

Example Record:

json

{
  "id": 1,
  "description": "Do 10 push-ups!"
}

# Future Improvements

The current version of the API is intentionally minimalist to support the initial version of the Truth or Dare mobile app. 

However, future enhancements may include:

>    Player Profiles: Track user data, including completed actions and truths.
   
>    Authentication & Security: Implement user authentication, access controls, and protection against malicious requests.
    
>    More Complex Relationships: Add relationships between data tables to support additional game mechanics, such as custom challenges or score tracking.

# Security Considerations

> [!CAUTION]
> Currently, the API only supports simple GET requests, which minimizes the risk of direct database attacks. However, security improvements are planned for future releases, including:

 >   API authentication (e.g., via Laravel Passport or Sanctum).
    
>    Validation and sanitization of incoming data.
    
>    Rate limiting to prevent abuse.

# Contributing

Unlike the Flutter frontend, contributions are welcome for the backend ! If you'd like to contribute, please fork the repository and submit a pull request. Make sure to include clear commit messages and thoroughly test your changes.

# License

![License](https://img.shields.io/badge/license-MIT-green.svg)

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute this project under the terms of the MIT License. See the [LICENSE](LICENSE) file for details.

