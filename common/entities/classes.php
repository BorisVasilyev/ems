<?php

	class Employee
	{
		public $Id;
		public $Login;
		public $Password;
		public $Name;
		public $Surname;
		public $Patronymic;
		public $Middle_name;
		public $Birth_date;
		public $Registration_date;
		public $About;
	}
	
	class Department
	{
		public $Id;
		public $Parent_department_id;
		public $Name;
		public $Description;
	}
	
	class Position
	{
		public $Id;
		public $Title;
		public $Description;
	}
	
	class Vacancy
	{
		public $Id;
		public $Department_id;
		public $Low_salary;
		public $High_salary;
	}

	class JobHistory
	{
		public $Employee_id;
		public $Position_id;
		public $Department_id;
		public $Description;
		public $From_date;
		public $To_date;
		public $Is_active;
	}
	
	class NewsArticle
	{
		public $Id;
		public $Author_id;
		public $Title;
		public $Publication_date;
		public $Text;	
	}
?>