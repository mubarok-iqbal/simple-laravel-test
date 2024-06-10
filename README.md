QuickSubmit
============

Setup Instructions
------------------

1.  **Clone the Repository:**

    `git clone https://github.com/mubarok-iqbal/simple-laravel-test`

2.  **Install Dependencies:**

    `cd project_name
    composer install`

3.  **Set Up Environment Variables:**

        -   Duplicate the `.env.example` file and rename it to `.env`.
        -   Configure the database connection in the `.env` file.
    
4.  **Run Migrations:**

    `php artisan migrate`

5.  **Start the Development Server:**

    `php artisan serve`

6.  **Access the API Endpoint:** The API will be accessible at `http://localhost:8000`.

Testing the API Endpoint
------------------------

To test the API endpoint, you can use a tool like cURL or Postman:

1.  **cURL Example:**

    `curl -X POST\
      http://localhost:8000/submit\
      -H 'Content-Type: application/json'\
      -d '{
            "name": "John Doe",
            "email": "john.doe@example.com",
            "message": "This is a test message."
         }'`

2.  **Postman:**

        -   Open Postman.
        -   Create a new POST request to `http://localhost:8000/submit`.
        -   Set the request body to JSON format with the required fields (`name`, `email`, `message`).
        -   Send the request and check the response.

* * * * *

Feel free to customize the instructions based on your specific project setup and requirements.
