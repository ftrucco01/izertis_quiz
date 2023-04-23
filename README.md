# Izertis challenge

The goal of this project is to create a series of backend services that enable performing mathematical operations using Symfony 4.4 or higher. An interface is provided in Annex 1, which can be used if desired. The following tasks need to be completed:

1. Create a Git repository in the project folder.

2. Create a service that performs the mathematical operation.

3. Create a new controller with the format /{operation}/{operatorA}/{operatorB}. For example, http://
localhost:8000/add/5/6 will return {"result": 11}.

4. Use the service created in the previous step to execute the operation.

5. Create a command (using symfony/console) that meets the following requirements:

- Obtains the two operators and the operation as arguments.
- Returns the result of the sum on the console: $./bin/console operations 5 6 add.
- In case the operation does not exist, return an error.

The services created in previous steps can be reused for this task. The technical stack for this project includes Symfony 4.4 or higher, Git repository, and symfony/console.