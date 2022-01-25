1. Write a query to find the name (first_name, last_name) and the salary of theemployees who have a higher salary than the employee whose last_name='Bull'.
ans:

<?php
//Ouestion1
// $quey ="SELECT FIRST_NAME, LAST_NAME, SALARY 
// FROM employees 
// WHERE SALARY > 
// (SELECT salary FROM employees WHERE last_name = 'Bull')"
// ;
?>


2. Write a query to find the name (first_name, last_name) of all employees whoworks in the IT department.
Ans:

<?php
//Ouestion2
// SELECT first_name, last_name
// FROM employees
// WHERE department_id
// IN (SELECT department_id FROM employees WHERE department_name="IT" );
?>


3. Write a query to find the name (first_name, last_name) of the employees whohave a manager and worked in a USA based department.
Ans:

<?php
//Ouestion3
// SELECT first_name, last_name
// FROM employees
// WHERE MANAGER_ID IN (SELECT EMPLOYEE_ID FROM employees WHERE DEPARTMENT_ID 
// IN (SELECT DEPARTMENT_ID FROM DEPARTMENTS WHERE LOCATION_ID
// IN (SELECT LOCATION_ID FROM LOCATIONS WHERE COUNTRY_ID="US  ")));
?>



4. Write a query to find the name (first_name, last_name) of the employees whoare managers.
Ans:
<?php
// //Ouestion4
// SELECT first_name, last_name 
// FROM employees 
// WHERE EMPLOYEE_ID IN (SELECT MANAGER_ID FROM employees);
?>

5. Write a query to find the name (first_name, last_name), and salary of theemployees whose salary is greater than the average salary.
Ans:
<?php
//Ouestion5
// SELECT first_name, last_name, salary
// FROM employees
// WHERE salary > (SELECT AVG(salary) FROM EMPLOYEES);
?>

6. Write a query to find the name (first_name, last_name), and salary of theemployees whose salary is equal to the minimum salary for their job grade.
Ans:
<?php
//Ouestion6
// SELECT first_name, last_name, salary
// FROM employees
// WHERE employees.salary = (SELECT min_salary
// FROM JOBS
// WHERE employees.JOB_ID = JOBS.JOB_ID);
?>


7. Write a query to find the name (first_name, last_name), and salary of theemployees who earns more than the average salary and works in any of the ITdepartments.
Ans:
<?php
//Ouestion7
// SELECT first_name, last_name, salary
// FROM employees
// WHERE DEPARTMENT_ID IN
// (SELECT DEPARTMENT_ID FROM DEPARTMENT WHERE DEPARTMENT_NAME LIKE "IT%")
// AND SALARY> (SELECT AVG(SALARY) FROM EMPLOYEES);

?>

8. Write a query to find the name (first_name, last_name), and salary of theemployees who earns more than the earning of Mr. Bell
Ans:
<?php
//Ouestion8
// SELECT first_name, last_name, salary
// FROM EMPLOYEES
// WHERE EMPLOYEE.SALARY > (SELECT SALARY FROM EMPLOYEE WHERE LAST_NAME='BELL' );

?>

9. Write a query to find the name (first_name, last_name), and salary of theemployees who earn the same salary as the minimum salary for all departments.
Ans:
<?php
//Ouestion9
// SELECT first_name, last_name, salary
// FROM EMPLOYEES
// WHERE SALARY = (SELECT MIN(SALARY) FROM DEPARTMENT);
?>

10. Write a query to find the name (first_name, last_name), and salary of theemployees whose salary is greater than the average salary of all departments.
Ans:
<?php
// //Ouestion10
// SELECT first_name, last_name, salary
// FROM EMPLOYEES
// WHERE SALARY > (SELECT AVG(SALARY) FROM EMPLOYEES GROUP BY DEPARTMENT_ID);
?>
11. Write a query to find the name (first_name, last_name) and salary of theemployees who earn a salary that is higher than the salary of all the ShippingClerk (JOB_ID = 'SH_CLERK'). Sort the results of the salary of the lowest tohighest
Ans:

<?php
// //Ouestion11
// SELECT first_name, last_name, salary
// FROM EMPLOYEES
// WHERE SALARY > (SELECT SALARY FROM EMPLOYEES WHERE JOB_ID="SH_CLERK") ORDER BY SALARY;
?>

12. Write a query to find the name (first_name, last_name) of the employeeswho are not supervisors.
Ans:
<?php
// //Ouestion12
// SELECT b.first_name,b.last_name 
// FROM employees b 
// WHERE NOT EXISTS (SELECT 'X' FROM employees a WHERE a.manager_id = b.employee_id)
?>

13. Write a query to display the employee ID, first name, last name, anddepartment names of all employees.
Ans:
<?php
//Question 13
// SELECT b.first_name,b.last_name, 
// (SELECT DEPARTMENT_NAME FROM DEPARTMENT D
// WHERE E.DEPARTMENT_ID = D.DEPARTMENT_ID) DEPARTMENT
// FROM EMPLOYEES E;
?>

14. Write a query to display the employee ID, first name, last name, salary of allemployees whose salary is above average for their departments.
Ans:
<?php
//Question 14
// SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME,SALARY
// FROM EMPLOYEES E
// WHERE SALARY> 
// (SELECT AVG(SALARY) FROM EMPLOYEES WHERE DEPARTMENT_ID = E.DEPARTMENT_ID);
?>

15. Write a query to fetch even numbered records from employees table.
Ans:
<?php
//Question 15
//     SELECT * FROM EMPLOYEES
//     WHERE MOD(EMPLOYEE_ID,2)=0;
?>

16. Write a query to find the 5th maximum salary in the employees table.
Ans:
<?php
//Question 16
// SELECT DISTINCT SALARY
// FROM EMPLOOYEES E1
// WHERE 5 = (SELECT COUNT(DISTINCT SALARY)
// FROM EMPLOYEES E2
// WHERE E2.SALARY >= E1.SALARY);
?>

17. Write a query to find the 4th minimum salary in the employees table.
Ans:
<?php
//Question 17
// SELECT DISTINCT SALARY
// FROM EMPLOOYEES E1
// WHERE 4 = (SELECT COUNT(DISTINCT SALARY)
// FROM EMPLOYEES E2
// WHERE E2.SALARY <= E1.SALARY);
?>


18. Write a query to select last 10 records from a table
Ans:
<?php
//Question 18
// SELECT * FROM 
// (SELECT * FROM EMPLOYEES ORDER BY EMPLOYEE_ID DESC LIMIT 10) SUB
// ORDER BY EMPLOYEE_ID ASC;
?>


19. Write a query to list the department ID and name of all the departmentswhere no employee is working.
Ans:
<?php
// //Question 19
// SELECT DEPARTMENT_ID,DEPARTMENT_NAME,
// WHERE DEPARTMENT_ID
// NOT IN (SELECT DEPARTMENT_ID FROM EMPLOYEES);
?>


20. Write a query to get 3 maximum salaries
Ans:
<?php
//Question 20
// SELECT DISTINCT SALARY
// FROM EMPLOOYEES E1
// WHERE 3 >= (SELECT COUNT(DISTINCT SALARY)
// FROM EMPLOYEES E2
// WHERE E2.SALARY >= E1.SALARY);

?>
21. Write a query to get 3 minimum salaries.
Ans:

<?php
//Question 21
// SELECT DISTINCT SALARY
// FROM EMPLOOYEES E1
// WHERE 3 >= (SELECT COUNT(DISTINCT SALARY)
// FROM EMPLOYEES E2
// WHERE E2.SALARY <= E1.SALARY);
?>

22. Write a query to get nth max salaries of employees.
Ans:
<?php
//Question 22
// SELECT DISTINCT SALARY
// FROM EMPLOOYEES E1
// WHERE 1 >= (SELECT COUNT(DISTINCT SALARY)
// FROM EMPLOYEES E2
// WHERE E2.SALARY >= E1.SALARY);
?>