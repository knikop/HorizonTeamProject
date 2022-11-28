Feature: create profile
	In order to create an account 
	As a user
	I need to input an image, a fullname, address, city, zipcode and state

Scenario:
	Given I am on "/Profile/create"
	And I click on choose file to pick an image
	And I input a full name
	And I input an address
	And I input a city
	And I input a zipcode
	And I input a state
	And I click "Create"
	Then I am on "/Profile/index"
	