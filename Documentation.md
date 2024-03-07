# Job Application Project README

Welcome to the Job Application Project! This project is designed to facilitate the application process for job roles. Below is a guide to help you understand the structure and functionality of the project.

## Overview

The Job Application Project consists of three main components:

1. **Application Form**: Users can fill out details about themselves including personal information, education, experience, and upload their CV.
2. **Test**: After filling out the application form, users are directed to take a test related to the job role they are applying for.
3. **Success Page**: Upon completion of the test, users are directed to a success page where they receive feedback on their application submission and the number of correct answers in the test.

## Project Routes

- `/apply_for_job_role`: Users access this route to fill in their personal details and submit their application.
- `/store`: This route is triggered upon submission of the application form. The FormController handles data validation, storage, and redirects the user to take the test.
- `/answer_test/{id}/{user_id}`: Users are redirected to this route to answer the test after submitting their application form. The test questions are retrieved from pre-filled tables related to the specific job role. The TestController does data handling.
- `/answers_submitted/{user_id}/{test_id}`: After completing the test, first the score is saved in Scores table along with user_id and test_id and then users are redirected to this page where they receive feedback on their application submission and test results. The score is stored in a table for future reference.The TestController does data handling.

## Components

### 1. Application Form

Users provide the following information:
- Name
- Address
- Contact Number
- Education (Multiple entries allowed)
- Experience (Job history, multiple entries allowed)
- CV Upload

### 2. Test

- Test questions are retrieved from pre-filled tables based on the job role.
- Questions are boolean type.
- Test results are calculated based on the number of correct answers.

### 3. Success Page

- Users receive feedback on their application submission.
- The number of correct answers in the test is displayed.
- Test score is stored in a table for reference.

## How to Use

1. Access the `/apply_for_job_role` route to fill in your personal details and submit your application.
2. After submitting the application form, you will be redirected to take a test related to the job role.
3. Answer the test questions.
4. Once the test is completed, you will be redirected to the success page where you will receive feedback on your application submission and test results.

## Note: use  php artisan make:seeder to get default values in tests, roles, questions and test_questions table.

## Technologies Used

- Laravel framework (Assuming Laravel is used based on the provided routes and controllers)

## Getting Started

1. Clone the project repository.
2. Install dependencies.
3. Set up the database and migrations.
4. Configure routes and controllers as described above.
5. Run the application.

## Contributors

- Jayesh Sawant


